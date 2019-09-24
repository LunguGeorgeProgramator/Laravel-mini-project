<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class CategoryTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        

        \DB::table('category')->delete();
        
        \DB::table('category')->insert(array (
            0 => 
            array (
                'cat_id' => 2,
                'name' => 'Computers',
                'description' => 'A computer is a machine that can be instructed to carry out sequences of arithmetic or logical operations automatically via computer programming. Modern computers have the ability to follow.',
                'image' => 'RE1QdqQ.jpeg',
                'update_by' => 'System',
                'deleted_at' => NULL,
                'created_at' => '2019-08-30 11:47:37',
                'updated_at' => '2019-09-24 09:24:39',
            ),
            1 => 
            array (
                'cat_id' => 6,
                'name' => 'Computer mouse',
                'description' => 'A computer mouse, often simply referred to as a mouse, is a hand-held pointing device that detects two-dimensional motion relative to a surface. This motion is typically translated into the.',
                'image' => 'MISKA_HP_500_SPECTRE_SILVER_BT_MOUSE_600x600.png',
                'update_by' => 'System',
                'deleted_at' => NULL,
                'created_at' => '2019-08-30 11:52:59',
                'updated_at' => '2019-09-24 09:24:52',
            ),
            2 => 
            array (
                'cat_id' => 9,
                'name' => 'Computer keyboard',
                'description' => 'A computer keyboard is a typewriter-style device[1] which uses an arrangement of buttons or keys to act as mechanical levers or electronic switches. Following the decline of punch cards and.',
                'image' => '673734.png',
                'update_by' => 'System',
                'deleted_at' => NULL,
                'created_at' => '2019-08-30 11:59:06',
                'updated_at' => '2019-09-24 09:24:59',
            ),
            3 => 
            array (
                'cat_id' => 11,
                'name' => 'Computer monitor',
                'description' => 'A computer monitor is an output device that displays information in pictorial form. A monitor usually comprises the display device, circuitry, casing, and power supply.',
                'image' => 'dell_u2415_24_ultrasharp_led_monitor_1090259.jpg',
                'update_by' => 'System',
                'deleted_at' => NULL,
                'created_at' => '2019-09-02 07:26:32',
                'updated_at' => '2019-09-24 09:25:07',
            ),
            4 => 
            array (
                'cat_id' => 13,
                'name' => 'Length test',
                'description' => 'qZh0Cb6F9xNvsNbv7tH3R4EjGuE5y71k1HZW2bonCTA3g7BEhtMWALZspi5qtauAfxCKrVFQlrwii1D3rpYHUcWSvEY704SjyYF9iQZ4opZlsYsalMD4O7vCoNzKwi82aI62ow256BVWtM5u1PWNOYMgZekoPsD8waBNpFZKXP8pMH9jJT0Wvuh3vr2qGX',
                'image' => 'deadpool-deadlift-funny-8k-wp.jpg',
                'update_by' => 'System',
                'deleted_at' => NULL,
                'created_at' => '2019-09-02 08:57:22',
                'updated_at' => '2019-09-24 09:25:24',
            ),
            5 => 
            array (
                'cat_id' => 15,
                'name' => 'New category.',
                'description' => $faker->text,
                'image' => '',
                'update_by' => 'Test Uset',
                'deleted_at' => '2019-09-06 13:24:55',
                'created_at' => '2019-09-02 14:05:52',
                'updated_at' => '2019-09-06 13:24:55',
            ),
            6 => 
            array (
                'cat_id' => 22,
                'name' => 'Categoria de sters',
                'description' => $faker->text,
                'image' => 'Free-download-funny-wallpapers-HD-620x388.jpg',
                'update_by' => 'System',
                'deleted_at' => NULL,
                'created_at' => '2019-09-05 13:02:02',
                'updated_at' => '2019-09-24 09:25:43',
            ),
            7 => 
            array (
                'cat_id' => 23,
                'name' => 'Car',
            'description' => 'A car (or automobile) is a wheeled motor vehicle used for transportation. Most definitions of car say they run primarily on roads, seat one to eight people, have four tires.',
                'image' => 'csGCWE.jpg',
                'update_by' => 'System',
                'deleted_at' => NULL,
                'created_at' => '2019-09-10 12:52:56',
                'updated_at' => '2019-09-24 09:26:01',
            ),
            8 => 
            array (
                'cat_id' => 24,
                'name' => 'Ship',
                'description' => 'A ship is a large watercraft that travels the world\'s oceans and other sufficiently deep waterways, carrying passengers or goods, or in support of specialized missions, such as defense.',
                'image' => '1516626466_1_1689.png',
                'update_by' => 'System',
                'deleted_at' => NULL,
                'created_at' => '2019-09-10 12:53:39',
                'updated_at' => '2019-09-24 09:26:18',
            ),
        ));
        
        
    }
}