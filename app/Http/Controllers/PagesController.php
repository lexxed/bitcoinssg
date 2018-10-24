<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Affiliate;

class PagesController extends Controller
{
    public function home() 
	{

  

        $affiliate = Affiliate::where('status', '=', 1)
        					  ->where('cur', '=', 'SGD')
                              ->get();

        $affiliateUsd = Affiliate::where('status', '=', 1)
        					  ->where('cur', '=', 'USD')
                              ->get();


		return view('homefull2')->with(['affiliate' => $affiliate, 'affiliateUsd' => $affiliateUsd]);    

	}   


    public function about() 
	{
		return view('about');	
	}      
}
