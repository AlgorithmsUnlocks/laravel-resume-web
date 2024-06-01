<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewsResumeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('reviews_resume')->insert([
            [
                'img'=>'',
                'name'=>'Nout Golstein',
                'contents'=>'Mauris magna sapien, pharetra consectetur fringilla vitae, interdum sed tortor.',
            ],
            [
                'img'=>'',
                'name'=>'Nout Golstein',
                'contents'=>'Mauris magna sapien, pharetra consectetur fringilla vitae, interdum sed tortor.',
            ],
            [
                'img'=>'',
                'name'=>'Nout Golstein',
                'contents'=>'Mauris magna sapien, pharetra consectetur fringilla vitae, interdum sed tortor.',
            ],
            [
                'img'=>'',
                'name'=>'Nout Golstein',
                'contents'=>'Mauris magna sapien, pharetra consectetur fringilla vitae, interdum sed tortor.',
            ],
        ]);
    }
}
