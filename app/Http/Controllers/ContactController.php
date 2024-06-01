<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    // page routes manage
    public function page(Request $request){
        return view('pages.contact');
    }

    //Ajax routes manage
    public function contact_infoResume(Request $request){
        return DB::table('contact_info_resume')->get();
    }
    public function contact_formsResume(Request $request){
        return DB::table('contact_forms_resume')->insert($request->input());
    }
    public function locationResume(Request $request){
      return DB::table('location_resume')->first();
    }
}
//
//$obj = new ContactController();
//print_r($obj->locationResume());
