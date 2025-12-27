<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Xoá sạch bảng và reset ID về 1
         DB::table('news')->truncate();

        DB::table('news')->insert([
            'heading' => '1 cái tiêu đề lớn',
            'text' => 'hôm nay là 1 ngày siêu cấp đẹp trời để đi tắm nắng nhỉ hyabahádjhậdsadkjasadkjdsakjsadkjsd',
            'image' => 'products/image.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
