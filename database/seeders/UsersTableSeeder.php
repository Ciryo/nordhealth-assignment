<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'created_at' => NULL,
                'first_name' => 'Veiko',
                'id' => 1,
                'last_name' => 'Kuusmik',
                'password' => '098f6bcd4621d373cade4e832627b4f6',
                'password_bcrypt' => '$2y$10$b/HmUrVfxOPnta8H1vY4KeKE5CtmI6KpVTojVY0AKvrbTMhb2rtee',
                'remember_token' => NULL,
                'session_time' => 10000,
                'updated_at' => NULL,
                'username' => 'testuser',
            ),
        ));
        
        
    }
}