<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('comments')->delete();
        
        \DB::table('comments')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'parent_id' => NULL,
                'message' => 'New comment',
                'commentable_id' => 1,
                'commentable_type' => 'App\\Post',
                'deleted_at' => NULL,
                'created_at' => '2019-09-24 09:21:30',
                'updated_at' => '2019-09-24 09:21:30',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 1,
                'parent_id' => 1,
                'message' => 'New replay',
                'commentable_id' => 1,
                'commentable_type' => 'App\\Post',
                'deleted_at' => NULL,
                'created_at' => '2019-09-24 09:21:36',
                'updated_at' => '2019-09-24 09:21:36',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 1,
                'parent_id' => NULL,
                'message' => 'New comment 2',
                'commentable_id' => 1,
                'commentable_type' => 'App\\Post',
                'deleted_at' => NULL,
                'created_at' => '2019-09-24 09:21:44',
                'updated_at' => '2019-09-24 09:21:44',
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 1,
                'parent_id' => 1,
                'message' => 'New replay 2',
                'commentable_id' => 1,
                'commentable_type' => 'App\\Post',
                'deleted_at' => NULL,
                'created_at' => '2019-09-24 09:21:52',
                'updated_at' => '2019-09-24 09:21:52',
            ),
        ));
        
        
    }
}