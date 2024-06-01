<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    // page routes manage
    public function page(Request $request){
        return view('pages.blog');
    }

    //Ajax call routes manage
    public function blogResume(Request $request){
        return DB::table('blog_resume')->get();
    }
}

//$obj = new BlogController();
//print_r($obj->blogResume());
