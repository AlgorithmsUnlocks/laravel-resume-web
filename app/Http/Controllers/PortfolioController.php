<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PortfolioController extends Controller
{
    // page routes manage
    public function page(Request $request){
        return view('pages.portfolio');
    }

    //Ajax call routes manage
    public function portfolioResume(Request $request){
        return DB::table('portfolio_resume')->get();
    }
}
