<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // query builder

class AchievementsResumeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('achievements_resume')->insert([
            ['icon'=>'',
                'count'=>'550+',
                'title'=>'COMPLETED PROJECTS',],
            ['icon'=>'',
                'count'=>'23K+',
                'title'=>'HAPPY CLIENTS',],
            ['icon'=>'',
                'count'=>'55',
                'title'=>'AWARDS RECIEVED',],
        ]);
    }
}
