<?php

use Illuminate\Database\Seeder;

class VisitationAuditTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('visitation_audit')->delete();
        
        \DB::table('visitation_audit')->insert(array (
            0 => 
            array (
                'id' => 1,
                'page_type' => 'category',
                'page_id' => 'insert',
                'link_page' => 'http://georgeldev.ro/test_project/category/insert',
                'count' => 2,
                'user_email' => 'Guest',
                'ip_address' => '192.168.0.248',
                'deleted_at' => NULL,
                'created_at' => '2019-09-16 08:53:24',
                'updated_at' => '2019-09-16 08:53:33',
            ),
            1 => 
            array (
                'id' => 2,
                'page_type' => 'category',
                'page_id' => '',
                'link_page' => 'http://georgeldev.ro/test_project/category',
                'count' => 124,
                'user_email' => 'Guest',
                'ip_address' => '192.168.0.248',
                'deleted_at' => NULL,
                'created_at' => '2019-09-16 08:53:24',
                'updated_at' => '2019-09-17 05:45:22',
            ),
            2 => 
            array (
                'id' => 3,
                'page_type' => 'category',
                'page_id' => 'create',
                'link_page' => 'http://georgeldev.ro/test_project/category/create',
                'count' => 1,
                'user_email' => 'Guest',
                'ip_address' => '192.168.0.248',
                'deleted_at' => NULL,
                'created_at' => '2019-09-16 08:53:27',
                'updated_at' => '2019-09-16 08:53:27',
            ),
            3 => 
            array (
                'id' => 4,
                'page_type' => 'category',
                'page_id' => '',
                'link_page' => 'http://georgeldev.ro/test_project/category?page=2',
                'count' => 30,
                'user_email' => 'Guest',
                'ip_address' => '192.168.0.248',
                'deleted_at' => NULL,
                'created_at' => '2019-09-16 08:53:35',
                'updated_at' => '2019-09-17 05:44:54',
            ),
            4 => 
            array (
                'id' => 5,
                'page_type' => 'category',
                'page_id' => '26',
                'link_page' => 'http://georgeldev.ro/test_project/category/26/remove',
                'count' => 1,
                'user_email' => 'Guest',
                'ip_address' => '192.168.0.248',
                'deleted_at' => NULL,
                'created_at' => '2019-09-16 08:53:37',
                'updated_at' => '2019-09-16 08:53:37',
            ),
            5 => 
            array (
                'id' => 6,
                'page_type' => 'category',
                'page_id' => '',
                'link_page' => 'http://georgeldev.ro/test_project/category?page=1',
                'count' => 22,
                'user_email' => 'Guest',
                'ip_address' => '192.168.0.248',
                'deleted_at' => NULL,
                'created_at' => '2019-09-16 08:53:49',
                'updated_at' => '2019-09-16 13:37:36',
            ),
            6 => 
            array (
                'id' => 7,
                'page_type' => 'category',
                'page_id' => '2',
                'link_page' => 'http://georgeldev.ro/test_project/category/2/edit',
                'count' => 63,
                'user_email' => 'Guest',
                'ip_address' => '192.168.0.248',
                'deleted_at' => NULL,
                'created_at' => '2019-09-16 08:53:50',
                'updated_at' => '2019-09-16 13:30:03',
            ),
            7 => 
            array (
                'id' => 8,
                'page_type' => 'category',
                'page_id' => 'update',
                'link_page' => 'http://georgeldev.ro/test_project/category/update',
                'count' => 47,
                'user_email' => 'Guest',
                'ip_address' => '192.168.0.248',
                'deleted_at' => NULL,
                'created_at' => '2019-09-16 08:53:57',
                'updated_at' => '2019-09-17 05:44:50',
            ),
            8 => 
            array (
                'id' => 9,
                'page_type' => 'category',
                'page_id' => '2',
                'link_page' => 'http://georgeldev.ro/test_project/category/2/products',
                'count' => 98,
                'user_email' => 'Guest',
                'ip_address' => '192.168.0.248',
                'deleted_at' => NULL,
                'created_at' => '2019-09-16 09:38:34',
                'updated_at' => '2019-09-17 05:52:06',
            ),
            9 => 
            array (
                'id' => 10,
                'page_type' => 'products',
                'page_id' => '1',
                'link_page' => 'http://georgeldev.ro/test_project/products/1',
                'count' => 4,
                'user_email' => 'Guest',
                'ip_address' => '192.168.0.248',
                'deleted_at' => NULL,
                'created_at' => '2019-09-16 09:38:38',
                'updated_at' => '2019-09-16 10:29:37',
            ),
            10 => 
            array (
                'id' => 11,
                'page_type' => 'products',
                'page_id' => '2',
                'link_page' => 'http://georgeldev.ro/test_project/products/2',
                'count' => 5,
                'user_email' => 'Guest',
                'ip_address' => '192.168.0.248',
                'deleted_at' => NULL,
                'created_at' => '2019-09-16 09:38:42',
                'updated_at' => '2019-09-16 13:04:23',
            ),
            11 => 
            array (
                'id' => 12,
                'page_type' => 'category',
                'page_id' => '6',
                'link_page' => 'http://georgeldev.ro/test_project/category/6/products',
                'count' => 26,
                'user_email' => 'Guest',
                'ip_address' => '192.168.0.248',
                'deleted_at' => NULL,
                'created_at' => '2019-09-16 09:49:33',
                'updated_at' => '2019-09-16 13:23:46',
            ),
            12 => 
            array (
                'id' => 13,
                'page_type' => 'category',
                'page_id' => '11',
                'link_page' => 'http://georgeldev.ro/test_project/category/11/products',
                'count' => 9,
                'user_email' => 'Guest',
                'ip_address' => '192.168.0.248',
                'deleted_at' => NULL,
                'created_at' => '2019-09-16 09:49:37',
                'updated_at' => '2019-09-16 13:37:10',
            ),
            13 => 
            array (
                'id' => 14,
                'page_type' => 'category',
                'page_id' => '13',
                'link_page' => 'http://georgeldev.ro/test_project/category/13/products',
                'count' => 11,
                'user_email' => 'Guest',
                'ip_address' => '192.168.0.248',
                'deleted_at' => NULL,
                'created_at' => '2019-09-16 09:49:39',
                'updated_at' => '2019-09-16 13:39:42',
            ),
            14 => 
            array (
                'id' => 15,
                'page_type' => 'category',
                'page_id' => '22',
                'link_page' => 'http://georgeldev.ro/test_project/category/22/products',
                'count' => 3,
                'user_email' => 'Guest',
                'ip_address' => '192.168.0.248',
                'deleted_at' => NULL,
                'created_at' => '2019-09-16 09:49:43',
                'updated_at' => '2019-09-16 13:24:16',
            ),
            15 => 
            array (
                'id' => 16,
                'page_type' => 'category',
                'page_id' => '25',
                'link_page' => 'http://georgeldev.ro/test_project/category/25/products',
                'count' => 4,
                'user_email' => 'Guest',
                'ip_address' => '192.168.0.248',
                'deleted_at' => NULL,
                'created_at' => '2019-09-16 09:49:48',
                'updated_at' => '2019-09-17 05:45:05',
            ),
            16 => 
            array (
                'id' => 17,
                'page_type' => 'category',
                'page_id' => '25',
                'link_page' => 'http://georgeldev.ro/test_project/category/25/edit',
                'count' => 3,
                'user_email' => 'Guest',
                'ip_address' => '192.168.0.248',
                'deleted_at' => NULL,
                'created_at' => '2019-09-16 09:49:53',
                'updated_at' => '2019-09-17 05:44:45',
            ),
            17 => 
            array (
                'id' => 18,
                'page_type' => 'category',
                'page_id' => '2',
                'link_page' => 'http://georgeldev.ro/test_project/category/2/products?page=3',
                'count' => 2,
                'user_email' => 'Guest',
                'ip_address' => '192.168.0.248',
                'deleted_at' => NULL,
                'created_at' => '2019-09-16 09:50:50',
                'updated_at' => '2019-09-16 12:34:24',
            ),
            18 => 
            array (
                'id' => 19,
                'page_type' => 'products',
                'page_id' => '9',
                'link_page' => 'http://georgeldev.ro/test_project/products/9',
                'count' => 1,
                'user_email' => 'Guest',
                'ip_address' => '192.168.0.248',
                'deleted_at' => NULL,
                'created_at' => '2019-09-16 09:50:52',
                'updated_at' => '2019-09-16 09:50:52',
            ),
            19 => 
            array (
                'id' => 20,
                'page_type' => 'category',
                'page_id' => '6',
                'link_page' => 'http://georgeldev.ro/test_project/category/6/edit',
                'count' => 5,
                'user_email' => 'Guest',
                'ip_address' => '192.168.0.248',
                'deleted_at' => NULL,
                'created_at' => '2019-09-16 10:22:45',
                'updated_at' => '2019-09-16 13:32:15',
            ),
            20 => 
            array (
                'id' => 21,
                'page_type' => 'category',
                'page_id' => '9',
                'link_page' => 'http://georgeldev.ro/test_project/category/9/products',
                'count' => 10,
                'user_email' => 'Guest',
                'ip_address' => '192.168.0.248',
                'deleted_at' => NULL,
                'created_at' => '2019-09-16 10:27:38',
                'updated_at' => '2019-09-16 13:23:50',
            ),
            21 => 
            array (
                'id' => 22,
                'page_type' => 'category',
                'page_id' => '9',
                'link_page' => 'http://georgeldev.ro/test_project/category/9/edit',
                'count' => 3,
                'user_email' => 'Guest',
                'ip_address' => '192.168.0.248',
                'deleted_at' => NULL,
                'created_at' => '2019-09-16 10:27:45',
                'updated_at' => '2019-09-16 13:33:45',
            ),
            22 => 
            array (
                'id' => 23,
                'page_type' => 'products',
                'page_id' => '1',
                'link_page' => 'http://georgeldev.ro/test_project/category/2/products/1/edit',
                'count' => 5,
                'user_email' => 'Guest',
                'ip_address' => '192.168.0.248',
                'deleted_at' => NULL,
                'created_at' => '2019-09-16 10:29:40',
                'updated_at' => '2019-09-17 05:52:47',
            ),
            23 => 
            array (
                'id' => 24,
                'page_type' => 'welcome',
                'page_id' => '',
                'link_page' => 'http://georgeldev.ro/test_project/search?query=test&type=categories',
                'count' => 26,
                'user_email' => 'Guest',
                'ip_address' => '192.168.0.248',
                'deleted_at' => NULL,
                'created_at' => '2019-09-16 10:31:41',
                'updated_at' => '2019-09-16 13:24:26',
            ),
            24 => 
            array (
                'id' => 25,
                'page_type' => 'welcome',
                'page_id' => '',
                'link_page' => 'http://georgeldev.ro/test_project/search?query=test&type=products',
                'count' => 17,
                'user_email' => 'Guest',
                'ip_address' => '192.168.0.248',
                'deleted_at' => NULL,
                'created_at' => '2019-09-16 10:31:42',
                'updated_at' => '2019-09-16 12:18:20',
            ),
            25 => 
            array (
                'id' => 26,
                'page_type' => 'welcome',
                'page_id' => '',
                'link_page' => 'http://georgeldev.ro/test_project/search?page=2&query=test&type=products',
                'count' => 2,
                'user_email' => 'Guest',
                'ip_address' => '192.168.0.248',
                'deleted_at' => NULL,
                'created_at' => '2019-09-16 10:31:52',
                'updated_at' => '2019-09-16 10:31:55',
            ),
            26 => 
            array (
                'id' => 27,
                'page_type' => 'category',
                'page_id' => '13',
                'link_page' => 'http://georgeldev.ro/test_project/category/13/edit',
                'count' => 4,
                'user_email' => 'Guest',
                'ip_address' => '192.168.0.248',
                'deleted_at' => NULL,
                'created_at' => '2019-09-16 11:23:23',
                'updated_at' => '2019-09-16 13:37:20',
            ),
            27 => 
            array (
                'id' => 28,
                'page_type' => 'category',
                'page_id' => '11',
                'link_page' => 'http://georgeldev.ro/test_project/category/11/edit',
                'count' => 7,
                'user_email' => 'Guest',
                'ip_address' => '192.168.0.248',
                'deleted_at' => NULL,
                'created_at' => '2019-09-16 11:24:37',
                'updated_at' => '2019-09-16 13:36:42',
            ),
            28 => 
            array (
                'id' => 29,
                'page_type' => 'products',
                'page_id' => '6',
                'link_page' => 'http://georgeldev.ro/test_project/products/6',
                'count' => 1,
                'user_email' => 'Guest',
                'ip_address' => '192.168.0.248',
                'deleted_at' => NULL,
                'created_at' => '2019-09-16 11:25:26',
                'updated_at' => '2019-09-16 11:25:26',
            ),
            29 => 
            array (
                'id' => 30,
                'page_type' => 'category',
                'page_id' => '',
                'link_page' => 'http://georgeldev.ro/test_project',
                'count' => 6,
                'user_email' => 'Guest',
                'ip_address' => '192.168.0.248',
                'deleted_at' => NULL,
                'created_at' => '2019-09-16 11:26:54',
                'updated_at' => '2019-09-17 05:43:52',
            ),
            30 => 
            array (
                'id' => 31,
                'page_type' => 'products',
                'page_id' => 'create',
                'link_page' => 'http://georgeldev.ro/test_project/category/2/products/create',
                'count' => 2,
                'user_email' => 'Guest',
                'ip_address' => '192.168.0.248',
                'deleted_at' => NULL,
                'created_at' => '2019-09-16 11:27:03',
                'updated_at' => '2019-09-16 12:41:22',
            ),
            31 => 
            array (
                'id' => 32,
                'page_type' => 'welcome',
                'page_id' => '',
                'link_page' => 'http://georgeldev.ro/test_project/search?query=comp&type=categories',
                'count' => 18,
                'user_email' => 'Guest',
                'ip_address' => '192.168.0.248',
                'deleted_at' => NULL,
                'created_at' => '2019-09-16 11:36:57',
                'updated_at' => '2019-09-16 13:24:42',
            ),
            32 => 
            array (
                'id' => 33,
                'page_type' => 'welcome',
                'page_id' => '',
                'link_page' => 'http://georgeldev.ro/test_project/search?query=comp&type=products',
                'count' => 6,
                'user_email' => 'Guest',
                'ip_address' => '192.168.0.248',
                'deleted_at' => NULL,
                'created_at' => '2019-09-16 11:37:09',
                'updated_at' => '2019-09-16 13:24:41',
            ),
            33 => 
            array (
                'id' => 34,
                'page_type' => 'welcome',
                'page_id' => '',
                'link_page' => 'http://georgeldev.ro/test_project/search?query=&type=categories',
                'count' => 3,
                'user_email' => 'Guest',
                'ip_address' => '192.168.0.248',
                'deleted_at' => NULL,
                'created_at' => '2019-09-16 11:38:00',
                'updated_at' => '2019-09-16 11:43:32',
            ),
            34 => 
            array (
                'id' => 35,
                'page_type' => 'welcome',
                'page_id' => '',
                'link_page' => 'http://georgeldev.ro/test_project/search?page=2&query=&type=categories',
                'count' => 12,
                'user_email' => 'Guest',
                'ip_address' => '192.168.0.248',
                'deleted_at' => NULL,
                'created_at' => '2019-09-16 11:38:01',
                'updated_at' => '2019-09-16 11:43:26',
            ),
            35 => 
            array (
                'id' => 36,
                'page_type' => 'welcome',
                'page_id' => '',
                'link_page' => 'http://georgeldev.ro/test_project/search?page=3&query=&type=categories',
                'count' => 15,
                'user_email' => 'Guest',
                'ip_address' => '192.168.0.248',
                'deleted_at' => NULL,
                'created_at' => '2019-09-16 11:38:03',
                'updated_at' => '2019-09-16 11:42:19',
            ),
            36 => 
            array (
                'id' => 37,
                'page_type' => 'welcome',
                'page_id' => '',
                'link_page' => 'http://georgeldev.ro/test_project/search?page=4&query=&type=categories',
                'count' => 3,
                'user_email' => 'Guest',
                'ip_address' => '192.168.0.248',
                'deleted_at' => NULL,
                'created_at' => '2019-09-16 11:38:04',
                'updated_at' => '2019-09-16 11:42:20',
            ),
            37 => 
            array (
                'id' => 38,
                'page_type' => 'welcome',
                'page_id' => '',
                'link_page' => 'http://georgeldev.ro/test_project/search?page=5&query=&type=categories',
                'count' => 2,
                'user_email' => 'Guest',
                'ip_address' => '192.168.0.248',
                'deleted_at' => NULL,
                'created_at' => '2019-09-16 11:38:05',
                'updated_at' => '2019-09-16 11:42:20',
            ),
            38 => 
            array (
                'id' => 39,
                'page_type' => 'welcome',
                'page_id' => '',
                'link_page' => 'http://georgeldev.ro/test_project/search?page=1&query=&type=categories',
                'count' => 4,
                'user_email' => 'Guest',
                'ip_address' => '192.168.0.248',
                'deleted_at' => NULL,
                'created_at' => '2019-09-16 11:38:06',
                'updated_at' => '2019-09-16 11:42:22',
            ),
            39 => 
            array (
                'id' => 40,
                'page_type' => 'welcome',
                'page_id' => '',
                'link_page' => 'http://georgeldev.ro/test_project/search?query=&type=products',
                'count' => 2,
                'user_email' => 'Guest',
                'ip_address' => '192.168.0.248',
                'deleted_at' => NULL,
                'created_at' => '2019-09-16 11:40:13',
                'updated_at' => '2019-09-16 11:43:28',
            ),
            40 => 
            array (
                'id' => 41,
                'page_type' => 'welcome',
                'page_id' => '',
                'link_page' => 'http://georgeldev.ro/test_project/search?page=2&query=&type=products',
                'count' => 1,
                'user_email' => 'Guest',
                'ip_address' => '192.168.0.248',
                'deleted_at' => NULL,
                'created_at' => '2019-09-16 11:43:29',
                'updated_at' => '2019-09-16 11:43:29',
            ),
            41 => 
            array (
                'id' => 42,
                'page_type' => 'welcome',
                'page_id' => '',
                'link_page' => 'http://georgeldev.ro/test_project/search?page=3&query=&type=products',
                'count' => 1,
                'user_email' => 'Guest',
                'ip_address' => '192.168.0.248',
                'deleted_at' => NULL,
                'created_at' => '2019-09-16 11:43:30',
                'updated_at' => '2019-09-16 11:43:30',
            ),
            42 => 
            array (
                'id' => 43,
                'page_type' => 'welcome',
                'page_id' => '',
                'link_page' => 'http://georgeldev.ro/test_project/search?page=4&query=&type=products',
                'count' => 1,
                'user_email' => 'Guest',
                'ip_address' => '192.168.0.248',
                'deleted_at' => NULL,
                'created_at' => '2019-09-16 11:43:30',
                'updated_at' => '2019-09-16 11:43:30',
            ),
            43 => 
            array (
                'id' => 44,
                'page_type' => 'welcome',
                'page_id' => '',
                'link_page' => 'http://georgeldev.ro/test_project/search?page=1&query=&type=products',
                'count' => 1,
                'user_email' => 'Guest',
                'ip_address' => '192.168.0.248',
                'deleted_at' => NULL,
                'created_at' => '2019-09-16 11:43:31',
                'updated_at' => '2019-09-16 11:43:31',
            ),
            44 => 
            array (
                'id' => 45,
                'page_type' => 'welcome',
                'page_id' => '',
                'link_page' => 'http://georgeldev.ro/test_project/search?page=2&query=comp&type=categories',
                'count' => 9,
                'user_email' => 'Guest',
                'ip_address' => '192.168.0.248',
                'deleted_at' => NULL,
                'created_at' => '2019-09-16 11:44:35',
                'updated_at' => '2019-09-16 13:24:38',
            ),
            45 => 
            array (
                'id' => 46,
                'page_type' => 'welcome',
                'page_id' => '',
                'link_page' => 'http://georgeldev.ro/test_project/search?page=1&query=comp&type=categories',
                'count' => 10,
                'user_email' => 'Guest',
                'ip_address' => '192.168.0.248',
                'deleted_at' => NULL,
                'created_at' => '2019-09-16 11:44:37',
                'updated_at' => '2019-09-16 13:24:34',
            ),
            46 => 
            array (
                'id' => 47,
                'page_type' => 'welcome',
                'page_id' => '',
                'link_page' => 'http://georgeldev.ro/test_project/search?query=tes&type=categories',
                'count' => 3,
                'user_email' => 'Guest',
                'ip_address' => '192.168.0.248',
                'deleted_at' => NULL,
                'created_at' => '2019-09-16 12:15:53',
                'updated_at' => '2019-09-16 12:16:33',
            ),
            47 => 
            array (
                'id' => 48,
                'page_type' => 'welcome',
                'page_id' => '',
                'link_page' => 'http://georgeldev.ro/test_project/search?query=tes&type=products',
                'count' => 1,
                'user_email' => 'Guest',
                'ip_address' => '192.168.0.248',
                'deleted_at' => NULL,
                'created_at' => '2019-09-16 12:15:57',
                'updated_at' => '2019-09-16 12:15:57',
            ),
            48 => 
            array (
                'id' => 49,
                'page_type' => 'category',
                'page_id' => '2',
                'link_page' => 'http://georgeldev.ro/test_project/category/2/products?page=2',
                'count' => 22,
                'user_email' => 'Guest',
                'ip_address' => '192.168.0.248',
                'deleted_at' => NULL,
                'created_at' => '2019-09-16 12:34:22',
                'updated_at' => '2019-09-17 05:45:19',
            ),
            49 => 
            array (
                'id' => 50,
                'page_type' => 'category',
                'page_id' => '2',
                'link_page' => 'http://georgeldev.ro/test_project/category/2/products?page=1',
                'count' => 42,
                'user_email' => 'Guest',
                'ip_address' => '192.168.0.248',
                'deleted_at' => NULL,
                'created_at' => '2019-09-16 12:34:26',
                'updated_at' => '2019-09-16 13:23:33',
            ),
            50 => 
            array (
                'id' => 51,
                'page_type' => 'products',
                'page_id' => 'insert',
                'link_page' => 'http://georgeldev.ro/test_project/category/products/insert',
                'count' => 1,
                'user_email' => 'Guest',
                'ip_address' => '192.168.0.248',
                'deleted_at' => NULL,
                'created_at' => '2019-09-16 12:42:03',
                'updated_at' => '2019-09-16 12:42:03',
            ),
            51 => 
            array (
                'id' => 52,
                'page_type' => 'category',
                'page_id' => '23',
                'link_page' => 'http://georgeldev.ro/test_project/category/23/products',
                'count' => 1,
                'user_email' => 'Guest',
                'ip_address' => '192.168.0.248',
                'deleted_at' => NULL,
                'created_at' => '2019-09-16 12:58:38',
                'updated_at' => '2019-09-16 12:58:38',
            ),
            52 => 
            array (
                'id' => 53,
                'page_type' => 'products',
                'page_id' => 'update',
                'link_page' => 'http://georgeldev.ro/test_project/category/products/update',
                'count' => 2,
                'user_email' => 'Guest',
                'ip_address' => '192.168.0.248',
                'deleted_at' => NULL,
                'created_at' => '2019-09-16 13:07:47',
                'updated_at' => '2019-09-16 13:12:06',
            ),
            53 => 
            array (
                'id' => 54,
                'page_type' => 'products',
                'page_id' => '2',
                'link_page' => 'http://georgeldev.ro/test_project/category/2/products/2/edit',
                'count' => 1,
                'user_email' => 'Guest',
                'ip_address' => '192.168.0.248',
                'deleted_at' => NULL,
                'created_at' => '2019-09-16 13:12:02',
                'updated_at' => '2019-09-16 13:12:02',
            ),
            54 => 
            array (
                'id' => 55,
                'page_type' => 'category',
                'page_id' => '',
                'link_page' => 'http://georgeldev.ro/test_project?page=2',
                'count' => 3,
                'user_email' => 'Guest',
                'ip_address' => '192.168.0.248',
                'deleted_at' => NULL,
                'created_at' => '2019-09-16 13:53:35',
                'updated_at' => '2019-09-17 05:44:43',
            ),
            55 => 
            array (
                'id' => 56,
                'page_type' => 'category',
                'page_id' => '22',
                'link_page' => 'http://georgeldev.ro/test_project/category/22/edit',
                'count' => 1,
                'user_email' => 'Guest',
                'ip_address' => '192.168.0.248',
                'deleted_at' => NULL,
                'created_at' => '2019-09-16 13:53:38',
                'updated_at' => '2019-09-16 13:53:38',
            ),
        ));
        
        
    }
}