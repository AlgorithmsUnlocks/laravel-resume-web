<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeroResumeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Insert data with seeder

        DB::table('hero_resume')->insert([
            'title'=>'HELLO, DAISY MURPHY!',
            'description'=>'Nice to have ',
            'hire_button'=>'Hire Me',
            'hire_url'=>'#'
        ]);
    }
}
