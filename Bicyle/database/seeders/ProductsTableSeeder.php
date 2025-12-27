<?php

namespace Database\Seeders;

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
                'id' => 1,
                'name' => 'siêu xe màu xanh',
                'intro' => NULL,
                'price' => '86',
                'price_sale' => NULL,
                'image' => 'uploads/3M639ETTQtt8AzUQ8tz4f7XunHqfq4Nimjv9Kd2j.png',
                'created_at' => '2024-11-29 08:52:19',
                'updated_at' => '2025-01-11 07:10:11',
                'display_section' => 'featured',
            ),
            1 => 
            array (
                'id' => 4,
                'name' => 'xe bình thường màu tím',
                'intro' => NULL,
                'price' => '86',
                'price_sale' => '46',
                'image' => 'uploads/0cIU5yWRqVG4sqiXmWenwvOiJPtJPWdlA7uB7qrO.png',
                'created_at' => '2024-11-29 09:11:47',
                'updated_at' => '2025-01-11 07:10:11',
                'display_section' => 'featured',
            ),
            2 => 
            array (
                'id' => 5,
                'name' => 'siêu xe màu hồng',
                'intro' => NULL,
                'price' => '86',
                'price_sale' => '46',
                'image' => 'uploads/2GyONomZWNbHMjBq0GzngqIbB7zKk1Nr0EVNjfEn.png',
                'created_at' => '2024-12-04 09:10:58',
                'updated_at' => '2025-01-11 07:10:11',
                'display_section' => 'featured',
            ),
            3 => 
            array (
                'id' => 6,
                'name' => 'xe siêu mới',
                'intro' => NULL,
                'price' => '86',
                'price_sale' => '40',
                'image' => 'uploads/7uWAJJpEktzlrO4k5ypBmOdrx8WhTlyUUXhGrwib.png',
                'created_at' => '2024-12-05 08:42:59',
                'updated_at' => '2025-01-11 06:50:16',
                'display_section' => '',
            ),
            4 => 
            array (
                'id' => 7,
                'name' => 'Mountain Bicycle Bike Full Suspension',
                'intro' => 'xe siêu xịn hahahahahâhahahahahahahahahahahahah',
                'price' => '86',
                'price_sale' => '46',
                'image' => 'uploads/JrYic0pJIlfZharl8u2QqYnEebWiOVLHU9DJZyjk.png',
                'created_at' => '2024-12-12 09:58:28',
                'updated_at' => '2024-12-14 06:48:11',
                'display_section' => 'featured',
            ),
            5 => 
            array (
                'id' => 8,
                'name' => '12',
                'intro' => NULL,
                'price' => '86',
                'price_sale' => '46',
                'image' => 'uploads/2CoX7YvNoJrKPadRnnLMnXkbCebccRVLTKhn7e73.png',
                'created_at' => '2024-12-12 10:04:21',
                'updated_at' => '2025-01-11 06:50:23',
                'display_section' => 'bike',
            ),
        ));
        
        
    }
}