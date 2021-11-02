<?php

namespace App\Helpers;
use App\Helpers\DBEmptyResult;
use DateTimeInterface;

class DBI
{
    private static $instance;
    
    /**
     * @return \App\Helpers\DBI
     */
    static function get_object($db = null) {
        return self::$instance ?: self::$instance = new DBI(env('DB_USERNAME'), env('DB_PASSWORD'), 'assignment', env('DB_HOST'), env('DB_PORT'), env("DB_HOST_READ"));
    }
    
    var $handle;
    var $handle_read;
    var $last_handle;
    
    var $last_query;
    var $last_query_rows;
    var $queryQueue;
    var $_error;

    function __construct($user, $passwd, $database, $host, $port = '3306', $read_host = false)
    {
        $this->handle = new \mysqli($host, $user, $passwd, $database, $port);
        $this->handle_read = $read_host && $read_host !== "DB_HOST_READ" ? new \mysqli($read_host, $user, $passwd, $database, env('DB_READ_PORT') ?: $port) : false;
 
        $this->set_charset("utf8");

        $this->queryQueue = array();
    }
    function __destruct() {
        $this->handle->close();
        $this->handle_read && $this->handle_read->close();
    }

    function set_charset($charset) {
        $this->handle_read && $this->handle_read->set_charset($charset);
        return $this->handle->set_charset($charset);
    }
    function db($db) {
        $this->handle_read && $this->handle_read->select_db($db);
        return $this->handle->select_db($db);
    }
    function escape_string($string, $handle = null) {
        return $this->handle->real_escape_string($string);
    }
    function _query ($sql) {
        if ($this->handle_read && ltrim($sql)[0] === "S") {
            $this->last_handle = $this->handle_read;
            return $this->handle_read->query($sql);
        }
        $this->last_handle = $this->handle;
        return $this->handle->query($sql);
    }

    function insert_id() {
        return $this->handle->insert_id;
    }    

    function prepQuery($args) {
        if (($num = count($args)) > 1)
        {
            $query = $args[0];

            $splitted_query = explode("?", $query);

            if ($num != count($splitted_query))
                throw new \Exception("argument mismatch" . (env("DEBUG_ENV") === "1" ? " " . $query : null));

            $query = $splitted_query[0];

            for ($i = 1; $i < count($args); $i++)
            {
                $query .= (is_array($args[$i]) ? join(",", $this->escape_array($args[$i]) )  : $this->escape_string($args[$i], $this->handle) ) . $splitted_query[$i];
            }
        }
        else
            $query = $args[0];

        return $query;
    }

    function escape_array($array, $nulls = false) {
        $escaped = array();
        foreach ($array as $id => $value)
        {
            if (is_array($value) && $value[1] === false)
                $escaped[$this->escape_string($id, $this->handle)] = $value[0];
            else
                $escaped["`" . $this->escape_string(preg_replace("/[^0-9a-zA-Z-_\?]/","",$id), $this->handle) . "`"] = $nulls && $value === null ? "NULL" : "'" . $this->escape_string($value, $this->handle) . "'";
        }
        return $escaped;
    }


    /**
     * @param string $query sql kysely
     */
    function q() {
        $query = $this->prepQuery(func_get_args());
        $this->last_query = $query;
        $result = $this->_query($query);

        return is_bool($result) ? new DBEmptyResult() : $result;
    }
 
    function update() {
        $args   = func_get_args();
        $count  = count($args);
        $query  = $args[0];

        if ($count < 2) return false;

        $data   = $this->escape_array($args[1]);

        $ustring = "";
        foreach ($data as $key => $value) {
          if($key === "id")
            continue;
          $ustring .= ", " . $key . " = " . $value;
        }
        
        $query = preg_replace_callback('/\?/', function ($match) use ($ustring) {
            return substr($ustring, 2);
        }, $query, 1);
  
        if ($count > 2)
        {
            $pieces = explode("WHERE", $query);

            if (count($pieces) > 1)
            {
                $splitted_query = explode("?", $pieces[1]);

                $query = $pieces[0] . "WHERE" . $splitted_query[0];

                for ($i = 2; $i < count($args); $i++)
                {
                    $query .= (is_array($args[$i]) ? join(",", $this->escape_array($args[$i]) )  : $this->escape_string($args[$i], $this->handle) ) . $splitted_query[$i-1];
                }
            }
        }

        $this->last_query = $query;
        $result = $this->q($query);

        return $this->_error ? false : true;
    }

    function insert() {
        $args   = func_get_args();
        $count  = count($args);
        $query  = $args[0];

        if ($count < 2) return false;

        $data = $this->escape_array($args[1]);

        if(isset($data['id']))
          unset($data['id']);

        $keys   = array_keys($data);
        $values = array_values($data);

        $ustring  = "(" . join(', ', $keys) . ") ";
        $ustring .= "VALUES (" . join(", ", $values) . ") ";

        $query = str_replace('?', $ustring, $query);

        $this->last_query = $query;
        $result = $this->q($query);

        return $this->_error ? false : $this->insert_id();
    }

    function select() {
        $response = array();
        $args = func_get_args();
        $handle = $this->q($this->prepQuery($args));
        
        if (!$handle)
            return [];

        $has_key = false;
        $has_value = false;
        
        $q_string = $args[0];
        if(strpos($q_string, '$key') !== false) {
           $has_key = true;
        }
        if(strpos($q_string, '$value') !== false) {
           $has_value = true;
        }

        while($row = $handle->fetch_assoc())
        {
            if ($has_key && isset($row['$key']))
            {
                $key = $row['$key'];
                unset($row['$key']);
                if (count($row) == 1 && isset($row['$value']))
                    $response[$key] = $row['$value'];
                else
                    $response[$key] = $row;
            }
            elseif ($has_value && isset($row['$value']) && count($row) == 1)
            {
                $response[] = $row['$value'];
            }
            else $response[] = $row;
        }
        $handle->free();
        return $response;

    }

    function object () {
        $query = $this->prepQuery(func_get_args());
        if (stristr($query, "LIMIT 1") === false)
            $query .= " LIMIT 1";

        $handle = $this->q($query);
        
        if (!$handle)
            return (object) [];
        
        $response = $handle->fetch_object();
        $handle->free();
        return $response;

    }

    function assoc ()  {
        $query = $this->prepQuery(func_get_args());
        if (stristr($query, "LIMIT 1") === false)
            $query .= " LIMIT 1";

        $handle = $this->q($query);
        
        if (!$handle)
            return [];
        
        $response = $handle->fetch_assoc();
        $handle->free();
        return $response ?: [];
    }

}


?>
