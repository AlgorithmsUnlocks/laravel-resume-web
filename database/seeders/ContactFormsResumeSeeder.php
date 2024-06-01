<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactFormsResumeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('contact_forms_resume')->insert([
            ['name'=>'Users 1',
                'email'=>'user_1@gmail.com',
                'message'=>'Users 1',],
            ['name'=>'Users 1',
                'email'=>'user_1@gmail.com',
                'message'=>'Users 1',],
            ['name'=>'Users 1',
                'email'=>'user_1@gmail.com',
                'message'=>'Users 1',],
            ['name'=>'Users 1',
                'email'=>'user_1@gmail.com',
                'message'=>'Users 1',],
        ]);
    }
}
