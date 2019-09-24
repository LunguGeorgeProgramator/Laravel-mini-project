<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'prod_id' => 1,
                'category_id' => 2,
                'name' => $faker->domainWord,
                'description' => $faker->text,
                'image' => 'HP-13-Inch-Intel-Core-i7-Envy-13-AH1008TU-Windows-10-Laptop-feature-image.png',
                'update_by' => 'System',
                'deleted_at' => NULL,
                'created_at' => '2019-09-03 04:04:01',
                'updated_at' => '2019-09-24 09:27:15',
            ),
            1 => 
            array (
                'prod_id' => 2,
                'category_id' => 2,
                'name' => $faker->domainWord,
                'description' => $faker->text,
                'image' => 'YNAB-800x400.jpg',
                'update_by' => 'System',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2019-09-24 09:28:03',
            ),
            2 => 
            array (
                'prod_id' => 3,
                'category_id' => 2,
                'name' => $faker->domainWord,
                'description' => $faker->text,
                'image' => 'windows10-custom-theme-featured-800x400.jpg',
                'update_by' => 'System',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2019-09-24 09:27:40',
            ),
            3 => 
            array (
                'prod_id' => 6,
                'category_id' => 22,
                'name' => $faker->domainWord,
                'description' => $faker->text,
                'image' => 'tape-010-1000x750-800x400.jpg',
                'update_by' => 'System',
                'deleted_at' => NULL,
                'created_at' => '2019-09-05 13:02:25',
                'updated_at' => '2019-09-24 09:26:35',
            ),
            4 => 
            array (
                'prod_id' => 7,
                'category_id' => 22,
                'name' => $faker->domainWord,
                'description' => $faker->text,
                'image' => 'YNAB-800x400.jpg',
                'update_by' => 'System',
                'deleted_at' => NULL,
                'created_at' => '2019-09-05 13:02:39',
                'updated_at' => '2019-09-24 09:26:44',
            ),
            5 => 
            array (
                'prod_id' => 8,
                'category_id' => 2,
                'name' => $faker->domainWord,
                'description' => $faker->text,
                'image' => 'Boards-800x400.jpg',
                'update_by' => 'System',
                'deleted_at' => NULL,
                'created_at' => '2019-09-06 13:18:22',
                'updated_at' => '2019-09-24 09:27:31',
            ),
            6 => 
            array (
                'prod_id' => 9,
                'category_id' => 2,
                'name' => $faker->domainWord,
                'description' => $faker->text,
                'image' => 'tape-010-1000x750-800x400.jpg',
                'update_by' => 'System',
                'deleted_at' => NULL,
                'created_at' => '2019-09-06 13:30:20',
                'updated_at' => '2019-09-24 09:27:50',
            ),
            7 => 
            array (
                'prod_id' => 10,
                'category_id' => 2,
                'name' => $faker->domainWord,
                'description' => $faker->text,
                'image' => 'HP-13-Inch-Intel-Core-i7-Envy-13-AH1008TU-Windows-10-Laptop-feature-image.png',
                'update_by' => 'System',
                'deleted_at' => NULL,
                'created_at' => '2019-09-06 13:30:40',
                'updated_at' => '2019-09-24 09:27:23',
            ),
        ));
        
        
    }
}