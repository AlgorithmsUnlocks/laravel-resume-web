<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceResumeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('service_resume')->insert([
            [
                'icon'=>'',
                'title'=>'web designing',
                'description'=>'Mauris magna sapien, pharetra consectetur fringilla vitae, interdum sed tortor.',
            ],
            [
                'icon'=>'',
                'title'=>'web designing',
                'description'=>'Mauris magna sapien, pharetra consectetur fringilla vitae, interdum sed tortor.',
            ],
            [
                'icon'=>'',
                'title'=>'web designing',
                'description'=>'Mauris magna sapien, pharetra consectetur fringilla vitae, interdum sed tortor.',
            ],
            [
                'icon'=>'',
                'title'=>'web designing',
                'description'=>'Mauris magna sapien, pharetra consectetur fringilla vitae, interdum sed tortor.',
            ],
        ]);
    }
}
