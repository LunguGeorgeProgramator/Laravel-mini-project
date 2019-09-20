<?php

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
                'id' => 1,
                'name' => 'Test Uset',
                'email' => 'test@test.com',
                'username' => 'Test XXX',
                'email_verified_at' => NULL,
                'password' => '$2y$10$.hCbCotDh55HNGroFQdL0.C6nVqGxxJNrOhPL.JVXmCvsTwX6m0Tu',
                'remember_token' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-08-30 08:21:57',
                'updated_at' => '2019-08-30 08:21:57',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Test User 2',
                'email' => 'test2@test.com',
                'username' => 'Bx 1000',
                'email_verified_at' => NULL,
                'password' => '$2y$10$u7dOKepwWhy/4PGv4AbHDO8NxrKI3huDrWFnKibCXkLCut5nrHt/m',
                'remember_token' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-08-30 08:26:23',
                'updated_at' => '2019-08-30 08:26:23',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'nick',
                'email' => 'nicolae@tree.ro',
                'username' => 'nick',
                'email_verified_at' => NULL,
                'password' => '$2y$10$msmlN0A3scMQHoiL36O7kuwp562Mt1oLUnv3ZBF6x8esxftw0qKIu',
                'remember_token' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-09-03 07:42:03',
                'updated_at' => '2019-09-03 07:42:03',
            ),
        ));
        
        
    }
}