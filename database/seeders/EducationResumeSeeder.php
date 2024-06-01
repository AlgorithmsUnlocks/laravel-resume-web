<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EducationResumeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('education_resume')->insert([
            [
                'year'=>'1998 - 2005',
                'subject'=>'Master In Computer Science',
                'university'=>'MASTER, UNIVERSITY',
                'description'=>'Mauris magna sapien, pharetra consectetur fringilla vitae, interdum sed tortor.',
            ],
            [
                'year'=>'1998 - 2005',
                'subject'=>'Master In Computer Science',
                'university'=>'MASTER, UNIVERSITY',
                'description'=>'Mauris magna sapien, pharetra consectetur fringilla vitae, interdum sed tortor.',
            ],
            [
                'year'=>'1998 - 2005',
                'subject'=>'Master In Computer Science',
                'university'=>'MASTER, UNIVERSITY',
                'description'=>'Mauris magna sapien, pharetra consectetur fringilla vitae, interdum sed tortor.',
            ],
        ]);
    }
}
