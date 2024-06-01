<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguageResumeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('language_resume')->insert([
            [
                'title'=>'English',
                'value'=>'native',
            ],
            [
                'title'=>'Spanish',
                'value'=>'fluent',
            ],
            [
                'title'=>'Italian',
                'value'=>'fluent',
            ],
            [
                'title'=>'bengali',
                'value'=>'fluent',
            ],
        ]);
    }
}
