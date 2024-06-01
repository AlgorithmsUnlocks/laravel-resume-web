<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioResumeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('portfolio_resume')->insert([
            [
                'project_img'=>'',
                'project_title'=>'Branding Photography',
                'project_link'=>'https://alogunlocks.com',
                'project_description'=>'This is awesome projects',
            ],
            [
                'project_img'=>'',
                'project_title'=>'Branding Photography',
                'project_link'=>'https://alogunlocks.com',
                'project_description'=>'This is awesome projects',
            ],
            [
                'project_img'=>'',
                'project_title'=>'Branding Photography',
                'project_link'=>'https://alogunlocks.com',
                'project_description'=>'This is awesome projects',
            ],
            [
                'project_img'=>'',
                'project_title'=>'Branding Photography',
                'project_link'=>'https://alogunlocks.com',
                'project_description'=>'This is awesome projects',
            ]
        ]);
    }
}
