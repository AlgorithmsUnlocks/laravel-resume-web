<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientsResumeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('clients_resume')->insert([
           ['img'=>'',],
           ['img'=>'',],
           ['img'=>'',],
           ['img'=>'',],
           ['img'=>'',],
           ['img'=>'',],
        ]);

    }
}
