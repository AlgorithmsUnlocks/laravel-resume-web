<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogResumeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('blog_resume')->insert([
            [
                'title'=>'Design Conferences in 2019',
                'img'=>'',
                'description'=>'',
                'comments_count'=>'3',
            ],
            ['title'=>'Design Conferences in 2019',
                'img'=>'',
                'description'=>'',
                'comments_count'=>'3',],
            ['title'=>'Design Conferences in 2019',
                'img'=>'',
                'description'=>'',
                'comments_count'=>'4',],
        ]);
    }
}
