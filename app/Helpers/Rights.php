<?php

namespace App\Helpers;

use App\Helpers\DBI;
use App\Helpers\Auth;
use App\Helpers\RightsModel;

class Rights {
    private static $instance;

    static function get_model() {
        return new RightsModel();
    }    
    
    /**
     * @return Rights
     */
    static function get_object($user_id = '1') {

        if (self::$instance)
            return self::$instance;

        //for middleware
        // if (!Auth::$user)
        //     throw new \Exception("Session not valid");
        
        $model = self::get_model();
        self::$instance = new Rights($user_id, $model);
        return self::$instance;
    }

    private $rights = [];
    private $user_id;
    private $model;

    public function __get($property) {
        if($property == "user_id") {
            return $this->user_id;
        }
        return $this->rights[$property];
    }

    function __construct($user_id, $model) {
        $this->model = $model;
        $this->user_id = $user_id;
        
        $db = DBI::get_object();
        
        $rights = [];
        
        $enable = function ($moduleId, $type) use (&$rights) {
            if (!isset($this->model->modules[ $moduleId ]))
                return;
            $module = $this->model->modules[ $moduleId ];
            $right =  $this->model->model[$module][ $type ];

            if (!$module||!$right)
                return;
                
            $rights[$module][$right] = 1;
        };

        $handle = $db->q( "SELECT module, rights_type FROM user_rights WHERE user_id = '?' ", $this->user_id);

        while ($row = mysqli_fetch_assoc($handle))
            $enable($row['module'], $row['rights_type']);
       
        $this->rights_array = $rights;
    }

    public function model() {
        return $this->model;
    }

}
