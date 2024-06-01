<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactInfoResumeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('contact_info_resume')->insert([
           ['small_title'=>'CALL US',
           'small_description'=>'+987 654 3210 , +987 654 3210',],
            ['small_title'=>'Email Us',
                'small_description'=>'hello@liveresume.com',],
        ]);
    }
}
