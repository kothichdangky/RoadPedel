<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PaymentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('payments')->delete();
        
        \DB::table('payments')->insert(array (
            0 => 
            array (
                'id' => 4,
                'payment_id' => 'PAYID-M6FWFBQ4U808045G68765404',
                'user_id' => NULL,
                'payer_id' => 'AZBZ2ZSDC2YAY',
                'payment_email' => 'sb-mglqf37021351@personal.example.com',
                'amount' => 86.0,
                'currency' => 'USD',
                'payment_status' => 'approved',
                'created_at' => '2025-01-18 08:13:49',
                'updated_at' => '2025-01-18 08:13:49',
            ),
            1 => 
            array (
                'id' => 5,
                'payment_id' => 'PAYID-M6FWPMI9VF783373W9285903',
                'user_id' => NULL,
                'payer_id' => 'AZBZ2ZSDC2YAY',
                'payment_email' => 'sb-mglqf37021351@personal.example.com',
                'amount' => 86.0,
                'currency' => 'USD',
                'payment_status' => 'approved',
                'created_at' => '2025-01-18 08:35:15',
                'updated_at' => '2025-01-18 08:35:15',
            ),
            2 => 
            array (
                'id' => 6,
                'payment_id' => 'PAYID-M6U4KBQ58L73214Y9603900N',
                'user_id' => NULL,
                'payer_id' => 'AZBZ2ZSDC2YAY',
                'payment_email' => 'sb-mglqf37021351@personal.example.com',
                'amount' => 86.0,
                'currency' => 'USD',
                'payment_status' => 'approved',
                'created_at' => '2025-02-10 09:24:14',
                'updated_at' => '2025-02-10 09:24:14',
            ),
            3 => 
            array (
                'id' => 7,
                'payment_id' => 'PAYID-M6U4KBQ58L73214Y9603900N',
                'user_id' => NULL,
                'payer_id' => 'AZBZ2ZSDC2YAY',
                'payment_email' => 'sb-mglqf37021351@personal.example.com',
                'amount' => 86.0,
                'currency' => 'USD',
                'payment_status' => 'approved',
                'created_at' => '2025-02-10 09:25:12',
                'updated_at' => '2025-02-10 09:25:12',
            ),
            4 => 
            array (
                'id' => 8,
                'payment_id' => 'PAYID-M6U4KBQ58L73214Y9603900N',
                'user_id' => NULL,
                'payer_id' => 'AZBZ2ZSDC2YAY',
                'payment_email' => 'sb-mglqf37021351@personal.example.com',
                'amount' => 86.0,
                'currency' => 'USD',
                'payment_status' => 'approved',
                'created_at' => '2025-02-10 09:25:36',
                'updated_at' => '2025-02-10 09:25:36',
            ),
            5 => 
            array (
                'id' => 9,
                'payment_id' => 'PAYID-M6U4KBQ58L73214Y9603900N',
                'user_id' => NULL,
                'payer_id' => 'AZBZ2ZSDC2YAY',
                'payment_email' => 'sb-mglqf37021351@personal.example.com',
                'amount' => 86.0,
                'currency' => 'USD',
                'payment_status' => 'approved',
                'created_at' => '2025-02-10 09:26:29',
                'updated_at' => '2025-02-10 09:26:29',
            ),
            6 => 
            array (
                'id' => 10,
                'payment_id' => 'PAYID-M6U4KBQ58L73214Y9603900N',
                'user_id' => NULL,
                'payer_id' => 'AZBZ2ZSDC2YAY',
                'payment_email' => 'sb-mglqf37021351@personal.example.com',
                'amount' => 86.0,
                'currency' => 'USD',
                'payment_status' => 'approved',
                'created_at' => '2025-02-10 09:26:31',
                'updated_at' => '2025-02-10 09:26:31',
            ),
            7 => 
            array (
                'id' => 11,
                'payment_id' => 'PAYID-M6U4KBQ58L73214Y9603900N',
                'user_id' => NULL,
                'payer_id' => 'AZBZ2ZSDC2YAY',
                'payment_email' => 'sb-mglqf37021351@personal.example.com',
                'amount' => 86.0,
                'currency' => 'USD',
                'payment_status' => 'approved',
                'created_at' => '2025-02-10 09:27:10',
                'updated_at' => '2025-02-10 09:27:10',
            ),
            8 => 
            array (
                'id' => 12,
                'payment_id' => 'PAYID-M6U4SHA2J365394P8481350B',
                'user_id' => NULL,
                'payer_id' => 'AZBZ2ZSDC2YAY',
                'payment_email' => 'sb-mglqf37021351@personal.example.com',
                'amount' => 86.0,
                'currency' => 'USD',
                'payment_status' => 'approved',
                'created_at' => '2025-02-10 09:38:44',
                'updated_at' => '2025-02-10 09:38:44',
            ),
            9 => 
            array (
                'id' => 21,
                'payment_id' => 'PAYID-M7FK2LA8CP3756658938604U',
                'user_id' => NULL,
                'payer_id' => 'AZBZ2ZSDC2YAY',
                'payment_email' => 'sb-mglqf37021351@personal.example.com',
                'amount' => 516.0,
                'currency' => 'USD',
                'payment_status' => 'approved',
                'created_at' => '2025-03-07 08:24:21',
                'updated_at' => '2025-03-07 08:24:21',
            ),
            10 => 
            array (
                'id' => 22,
                'payment_id' => 'PAYID-M7FK3DQ0WW09105V4221203C',
                'user_id' => NULL,
                'payer_id' => 'AZBZ2ZSDC2YAY',
                'payment_email' => 'sb-mglqf37021351@personal.example.com',
                'amount' => 86.0,
                'currency' => 'USD',
                'payment_status' => 'approved',
                'created_at' => '2025-03-07 08:25:58',
                'updated_at' => '2025-03-07 08:25:58',
            ),
            11 => 
            array (
                'id' => 23,
                'payment_id' => 'PAYID-M7FK6AQ4VB432311V187623B',
                'user_id' => 8,
                'payer_id' => 'AZBZ2ZSDC2YAY',
                'payment_email' => 'sb-mglqf37021351@personal.example.com',
                'amount' => 86.0,
                'currency' => 'USD',
                'payment_status' => 'approved',
                'created_at' => '2025-03-07 08:32:11',
                'updated_at' => '2025-03-07 08:32:11',
            ),
        ));
        
        
    }
}