<?php

namespace Database\Seeders;

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
                'body' => '121212323',
                'commentable_type' => 'App\\Models\\product',
                'commentable_id' => 5,
                'deleted_at' => NULL,
                'created_at' => '2025-01-14 08:13:59',
                'updated_at' => '2025-01-14 08:14:10',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 1,
                'parent_id' => NULL,
                'body' => 'wewewewe',
                'commentable_type' => 'App\\Models\\product',
                'commentable_id' => 5,
                'deleted_at' => NULL,
                'created_at' => '2025-01-14 08:14:18',
                'updated_at' => '2025-01-14 08:14:18',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 1,
                'parent_id' => NULL,
                'body' => '2323',
                'commentable_type' => 'App\\Models\\product',
                'commentable_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-01-14 08:16:19',
                'updated_at' => '2025-01-14 08:16:19',
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 6,
                'parent_id' => NULL,
                'body' => '232323',
                'commentable_type' => 'App\\Models\\product',
                'commentable_id' => 5,
                'deleted_at' => NULL,
                'created_at' => '2025-01-14 08:42:27',
                'updated_at' => '2025-01-14 08:42:27',
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => 1,
                'parent_id' => NULL,
                'body' => '1212',
                'commentable_type' => 'App\\Models\\product',
                'commentable_id' => 4,
                'deleted_at' => NULL,
                'created_at' => '2025-01-14 08:59:26',
                'updated_at' => '2025-01-14 08:59:26',
            ),
            5 => 
            array (
                'id' => 6,
                'user_id' => 1,
                'parent_id' => 4,
                'body' => 'wewewe',
                'commentable_type' => 'App\\Models\\product',
                'commentable_id' => 5,
                'deleted_at' => NULL,
                'created_at' => '2025-01-14 09:00:02',
                'updated_at' => '2025-01-14 09:00:02',
            ),
            6 => 
            array (
                'id' => 7,
                'user_id' => 8,
                'parent_id' => NULL,
                'body' => '12121',
                'commentable_type' => 'App\\Models\\product',
                'commentable_id' => 5,
                'deleted_at' => NULL,
                'created_at' => '2025-01-14 09:29:24',
                'updated_at' => '2025-01-14 09:29:24',
            ),
        ));
        
        
    }
}