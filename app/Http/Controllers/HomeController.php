<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    // page routes manage
    public function page(Request $request){
      return view('pages.home');
    }

    //Ajax Call routes manage
    public function heroResume(Request $request){
      return DB::table('hero_resume')->first();
    }
    public function educationResume(Request $request){
        return DB::table('education_resume')->get();
    }
    public function experienceResume(Request $request){
        return DB::table('experience_resume')->get();
    }
    public function serviceResume(Request $request){
        return DB::table('service_resume')->get();
    }
    public function reviewsResume(Request $request){
        return DB::table('reviews_resume')->get();
    }
}

//$obj = new HomeController();
//print_r($obj->reviewsResume());

