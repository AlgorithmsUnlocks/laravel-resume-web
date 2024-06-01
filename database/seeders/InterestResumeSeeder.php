<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InterestResumeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('interest_resume')->insert([
           ['title'=>'Video games',],
           ['title'=>'Finance',],
           ['title'=>'Basketball',],
           ['title'=>'Theatre',],
        ]);
    }
}
