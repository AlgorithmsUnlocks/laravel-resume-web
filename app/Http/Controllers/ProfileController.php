<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    // Ajax call routes
    public function profileResume(Request $request){
        return DB::table('profile_resume')->first();
    }
    public function socialsResume(Request $request){
        return DB::table('socials_resume')->get();
    }
    public function languageResume(Request $request){
        return DB::table('language_resume')->get();
    }
    public function interestResume(Request $request){
        return DB::table('interest_resume')->get();
    }
}
