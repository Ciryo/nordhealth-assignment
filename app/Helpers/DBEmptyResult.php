<?php
namespace App\Helpers;
class DBEmptyResult {
    function fetch_assoc() { return false; }
    function fetch_object() { return false; }
    function free() { return false; }
}
