<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CommentLikesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('comment_likes')->delete();
        
        \DB::table('comment_likes')->insert(array (
            0 => 
            array (
                'id' => 3,
                'user_id' => 6,
                'comment_id' => 2,
                'ip' => NULL,
                'user_agent' => NULL,
                'created_at' => '2025-01-14 08:42:17',
                'updated_at' => '2025-01-14 08:42:17',
            ),
            1 => 
            array (
                'id' => 4,
                'user_id' => 6,
                'comment_id' => 1,
                'ip' => NULL,
                'user_agent' => NULL,
                'created_at' => '2025-01-14 08:42:19',
                'updated_at' => '2025-01-14 08:42:19',
            ),
            2 => 
            array (
                'id' => 5,
                'user_id' => 6,
                'comment_id' => 4,
                'ip' => NULL,
                'user_agent' => NULL,
                'created_at' => '2025-01-14 08:42:40',
                'updated_at' => '2025-01-14 08:42:40',
            ),
            3 => 
            array (
                'id' => 8,
                'user_id' => 1,
                'comment_id' => 5,
                'ip' => NULL,
                'user_agent' => NULL,
                'created_at' => '2025-01-14 08:59:32',
                'updated_at' => '2025-01-14 08:59:32',
            ),
        ));
        
        
    }
}