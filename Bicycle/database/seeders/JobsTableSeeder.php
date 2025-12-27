<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class JobsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('jobs')->delete();
        
        \DB::table('jobs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'queue' => 'default',
                'payload' => '{"uuid":"f8b86f35-b9d1-4e7a-b0bc-7d901b38be33","displayName":"App\\\\Jobs\\\\ContactUsJob","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"maxExceptions":null,"failOnTimeout":false,"backoff":null,"timeout":null,"retryUntil":null,"data":{"commandName":"App\\\\Jobs\\\\ContactUsJob","command":"O:21:\\"App\\\\Jobs\\\\ContactUsJob\\":1:{s:7:\\"\\u0000*\\u0000data\\";a:4:{s:4:\\"name\\";s:27:\\"duongthang1071977@gmail.com\\";s:5:\\"email\\";s:27:\\"duongthang1071977@gmail.com\\";s:7:\\"message\\";s:21:\\"111111111111111111111\\";s:5:\\"phone\\";s:10:\\"0943347211\\";}}"}}',
                'attempts' => 0,
                'reserved_at' => NULL,
                'available_at' => 1737283790,
                'created_at' => 1737283790,
            ),
        ));
        
        
    }
}