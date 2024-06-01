<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfileResumeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('profile_resume')->insert([
           'name'=>'Ruman Ahmed',
           'img'=>'',
           'title'=>'Web Development Expert',
           'socials'=>'',
           'birthday'=>'15 April 1990',
           'website'=>'www.example.com',
           'phone'=>'+1 123 000 4444',
           'mail'=>'your@example.com',
           'location'=>'California, USA',
        ]);
    }
}
