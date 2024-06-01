<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExperienceResumeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('experience_resume')->insert([
            [
                'year'=>'2010 - 2014',
                'title'=>'UI/UX Designer',
                'company_name'=>'Web Agency',
                'company_description'=>'Mauris magna sapien, pharetra consectetur fringilla vitae, interdum sed tortor.',
            ],
            [
                'year'=>'2010 - 2014',
                'title'=>'UI/UX Designer',
                'company_name'=>'Web Agency',
                'company_description'=>'Mauris magna sapien, pharetra consectetur fringilla vitae, interdum sed tortor.',
            ],
            [
                'year'=>'2010 - 2014',
                'title'=>'UI/UX Designer',
                'company_name'=>'Web Agency',
                'company_description'=>'Mauris magna sapien, pharetra consectetur fringilla vitae, interdum sed tortor.',
            ],
        ]);
    }
}
