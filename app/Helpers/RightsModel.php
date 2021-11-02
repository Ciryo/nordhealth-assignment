<?php
namespace App\Helpers;

use App\Helpers\DBI;

class RightsModel {
    const MODULES = [
        1 => 'admin',
        2 => 'products',
    ];
    const RIGHTS = [
        'admin' => [
            1 => 'write_full',
        ],        
        'products' => [
            1 => 'write_full' ,
            2 => 'read',
            // used if we have any admin-specific pages, products should not have one
            //'read' => 3,
        ],
    ];

    protected $modules = [];
    protected $rights = [];

    function __construct() {
        $modules = [];
        $rights = [];

        //here we could have a whitelist check for example, should we have different sets of rights depending of the installation/whatsoever. In this case we extend this model per nstallation type and pass the whitelist.

        $this->rights = self::RIGHTS;
        $this->modules = self::MODULES;
    }

    public function __get($property) {

        switch ($property) {
            case "modules"          : return $this->modules;
            case "model"            : return $this->rights;
        }
    }
}
