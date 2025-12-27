<?php

namespace Database\Seeders;

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
                'name' => 'Siêu cấp admin',
                'email' => 'admin@example.com',
                'google_id' => NULL,
                'role' => 'admin',
                'email_verified_at' => NULL,
                'password' => '$2y$12$Fs2hoCDQR510kyw0fHqO2O.sloXVH9JhuPKklhHKJdiWfA0BMl7.2',
                'remember_token' => NULL,
                'created_at' => '2024-11-25 08:10:21',
                'updated_at' => '2025-01-11 10:15:13',
            ),
            1 => 
            array (
                'id' => 6,
                'name' => 'Đặng Dương Thắng',
                'email' => 'thangduong1071977@gmail.com',
                'google_id' => NULL,
                'role' => 'user',
                'email_verified_at' => NULL,
                'password' => '$2y$12$ef.w3w/kiFJxBD34Sy8Jwuyj8/1G2y.SvT3Wm7ULult6jx2Eoz.gO',
                'remember_token' => NULL,
                'created_at' => '2024-12-05 11:43:06',
                'updated_at' => '2024-12-11 09:33:58',
            ),
            2 => 
            array (
                'id' => 8,
                'name' => 'thang duong',
                'email' => 'duongthang1071977@gmail.com',
                'google_id' => '107089784280570070495',
                'role' => 'admin',
                'email_verified_at' => NULL,
                'password' => '$2y$12$4SWcSJi5jpT1SWAO4YsNHugw8dFLUFGi5ePgFyEEXQFB2ymZCyOfe',
                'remember_token' => NULL,
                'created_at' => '2025-01-14 09:28:33',
                'updated_at' => '2025-01-14 09:30:05',
            ),
            3 => 
            array (
                'id' => 9,
                'name' => 'Thú lạ',
                'email' => 'thangsos8900@gmail.com',
                'google_id' => '113991378786909836617',
                'role' => 'admin',
                'email_verified_at' => NULL,
                'password' => '$2y$12$Ghdk/6ua9zLl5bmkpb8jlesT71EHUQYIglkaFjf/uupbQSf7Gcqh2',
                'remember_token' => NULL,
                'created_at' => '2025-01-14 09:36:33',
                'updated_at' => '2025-01-14 09:36:50',
            ),
        ));
        
        
    }
}