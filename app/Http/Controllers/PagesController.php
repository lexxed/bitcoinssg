<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Affiliate;

class PagesController extends Controller
{
    public function home() 
	{

		return view('home');    

	}   

public function btc() 
  {

        $affiliate = Affiliate::where('status', '=', 1)
                    ->where('cur', '=', 'SGD')
                              ->get();

        $affiliateUsd = Affiliate::where('status', '=', 1)
                    ->where('cur', '=', 'USD')
                              ->get();


    return view('btc')->with(['affiliate' => $affiliate, 'affiliateUsd' => $affiliateUsd]);    

  }   


public function about() 
	{
		return view('about');	
	}      


public function monero() 
  {

        $affiliateXMR = Affiliate::where('status', '=', 1)
                                  ->where('altcoin', 'LIKE', '%' . 'XMR' . '%')
                                  ->get();


    return view('monero')->with(['affiliateXMR' => $affiliateXMR]);        

  }      



public function eth() 
  {

        $affiliate = Affiliate::where('status', '=', 1)
                    ->where('cur', '=', 'SGD')
                              ->get();

        $affiliateUsd = Affiliate::where('status', '=', 1)
                    ->where('cur', '=', 'USD')
                              ->get();


    return view('eth')->with(['affiliate' => $affiliate, 'affiliateUsd' => $affiliateUsd]);        

  }      


public function exchange() 
  {

        $affiliate = Affiliate::where('status', '=', 1)
                              ->orderBy('rating', 'desc')
                              ->get();


    return view('exchange')->with(['affiliate' => $affiliate]);        

  }        

}
