<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'prod_id' => 1,
                'category_id' => 2,
                'name' => 'test',
                'description' => 'test desc',
                'image' => '',
                'update_by' => 'LG',
                'deleted_at' => NULL,
                'created_at' => '2019-09-03 04:04:01',
                'updated_at' => '2019-09-03 00:00:00',
            ),
            1 => 
            array (
                'prod_id' => 2,
                'category_id' => 2,
                'name' => 'test 2',
                'description' => 'test 2 desc',
                'image' => '',
                'update_by' => '',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'prod_id' => 3,
                'category_id' => 2,
                'name' => 'test 3',
                'description' => 'test 3 desc',
                'image' => '',
                'update_by' => '',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'prod_id' => 6,
                'category_id' => 22,
                'name' => 'Produs nou',
                'description' => 'super glue 1000.',
                'image' => '',
                'update_by' => 'Test Uset',
                'deleted_at' => NULL,
                'created_at' => '2019-09-05 13:02:25',
                'updated_at' => '2019-09-05 13:02:25',
            ),
            4 => 
            array (
                'prod_id' => 7,
                'category_id' => 22,
                'name' => 'Ceva ceva',
                'description' => 'Si restul.',
                'image' => '',
                'update_by' => 'Test Uset',
                'deleted_at' => NULL,
                'created_at' => '2019-09-05 13:02:39',
                'updated_at' => '2019-09-05 13:02:39',
            ),
            5 => 
            array (
                'prod_id' => 8,
                'category_id' => 2,
                'name' => 'ceva frumos',
                'description' => 'DESCRIERE frumoasa !!!!',
                'image' => '',
                'update_by' => 'Test Uset',
                'deleted_at' => NULL,
                'created_at' => '2019-09-06 13:18:22',
                'updated_at' => '2019-09-06 13:18:22',
            ),
            6 => 
            array (
                'prod_id' => 9,
                'category_id' => 2,
                'name' => 'nou sss',
                'description' => 'aaaa',
                'image' => '',
                'update_by' => 'Test Uset',
                'deleted_at' => NULL,
                'created_at' => '2019-09-06 13:30:20',
                'updated_at' => '2019-09-06 13:30:20',
            ),
            7 => 
            array (
                'prod_id' => 10,
                'category_id' => 2,
                'name' => 'nou sssdas',
                'description' => 'aaaa',
                'image' => '',
                'update_by' => 'Test Uset',
                'deleted_at' => NULL,
                'created_at' => '2019-09-06 13:30:40',
                'updated_at' => '2019-09-06 13:30:40',
            ),
        ));
        
        
    }
}