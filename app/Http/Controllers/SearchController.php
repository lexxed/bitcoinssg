<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Affiliate;
use App\Coin;


class SearchController extends Controller
{
    public function searchxe(Request $request)
    {
    	//dd($request->q);
    	$message = '';

        // search exchanges
        $affiliate = Affiliate::where('name', 'LIKE', '%' . $request->q . '%')
                        //where('destination', '=', $destination)
                        ->where('status', '=', '1')  
        				//->where('star_rating', '>', $star_limit)
                        //->where('photo1', '!=', '')
        				//->orderBy('cpc', 'desc')
                        //->orderBy('rating_average', 'desc')
        				->paginate(20);


        if($affiliate->isEmpty()) {

            $message = "Sorry no exchanges found for ";
            $affiliate = Affiliate::where('status', '=', '1')  
                            //->orderBy('cpc', 'desc')
                            ->paginate(10);            
        }     

        if(empty($request->q)) {
            $message = "Please key in something in the search box";
            $affiliate = Affiliate::where('status', '=', 'xxx')  
                            //->orderBy('cpc', 'desc')
                            ->paginate(10);            

        }    

         return view('searchxe')->with(['affiliate' => $affiliate, 'q' => $request->q,'message' => $message]); 
    }   


    public function searchcoin(Request $request)
    {
        //dd($request->q);
        $message = '';

        // get the affiliate that have X coin
        $coin = Coin::where('name', 'LIKE', '%'. $request->q .'%')
                      ->orWhere('slug', 'LIKE', '%'. $request->q .'%')   
                      ->first();

        //var_dump($coin);

        // display the xe that have X coin
        //foreach ($coin->affiliates as $affiliate)
        //    echo $affiliate->name . ' ' . $affiliate->url . ' ' . $affiliate->type . '<br>';

        if(empty($request->q)) {
            $message = "Please key in something in the search box";

        }    

        $coinAll = Coin::all();  
        
        if(is_null($coin)) { //no coin found
            
            $message = "Sorry no Cryptocurrency found for ";

            return view('searchcoin')->with(['coinAll' => $coinAll, 'q' => $request->q,'message' => $message]); 
        } else { // coin found
            return view('searchcoin')->with(['coin' => $coin, 'coinAll' => $coinAll, 'q' => $request->q,'message' => $message]);     
        }




        
    }   

}
