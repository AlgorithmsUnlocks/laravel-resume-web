<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResumeController extends Controller
{
    // Page routes manage
    public function page(Request $request){
       return view('pages.resume');
    }

    //Ajax Call routes manage
    public function clientsResume(Request $request){
        return DB::table('clients_resume')->get();
    }
    public function achievementsResume(Request $request){
        return DB::table('achievements_resume')->get();
    }
}
//$obj = new ResumeController();
//print_r($obj->clientsResume());
