<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserRightsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('user_rights')->delete();
        
        \DB::table('user_rights')->insert(array (
            0 => 
            array (
                'id' => 1,
                'module' => 1,
                'rights_type' => 1,
                'user_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'module' => 2,
                'rights_type' => 1,
                'user_id' => 1,
            ),
        ));
        
        
    }
}