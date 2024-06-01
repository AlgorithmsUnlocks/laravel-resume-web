<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SocialsResumeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('socials_resume')->insert([
            [
                'name'=>'facebook',
                'socials_links'=>'#',
            ],
            [
                'name'=>'twitter',
                'socials_links'=>'#',
            ],
            [
                'name'=>'github',
                'socials_links'=>'#',
            ],
            [
                'name'=>'instagram',
                'socials_links'=>'#',
            ],
            [
                'name'=>'youtube',
                'socials_links'=>'#',
            ],
        ]);
    }
}
