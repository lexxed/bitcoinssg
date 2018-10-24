<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Affiliate;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $affiliate = Affiliate::where('status', '=', 1)  
                        //->where('star_rating', '>', $star_limit)
                        //->where('photo1', '!=', '')
                        //->orderBy('rating_average', 'desc')
                        ->paginate(20);
                        //->simplePaginate(10);
                        //->get();    

        return view('mod/mod')->with(['affiliate' => $affiliate]);        
    }

    public function store(Request $request)
    {
        //return var_dump($card);
        //return $request->all();
        # input manual
        //$note = new Note;
        //$note->body = $request->body;
        //$note->user_id = $request->user_id;
        //$card->notes()->save($note);     

        /*
        $rules = [
            'email' => 'required|email',
            'name' => 'required',
            'postalcode' => 'required|numeric|digits:6',           
            'blk' => 'required',           
            'street' => 'required',           
            'unit' => 'required',           
            'mobile' => 'required',           
        ];
        $this->validate($request, $rules);*/
        //dd($errors->all());

        # save customerinfo into DB
        $affiliate = new Affiliate($request->all());
        $affiliate->type = 'xe';
        $affiliate->description = 'dddd';
        $affiliate->status = '1';
        //$affiliate->payout = 'payout';
        $affiliate->cpc = '1';
        $affiliate->save();      

        # save customerinfo into session
        //Session::put('customerinformation', $customerinformation);
  
        # save cartitems into DB      
        /*
        foreach (Cart::content() as $item) {

            # using function from App/CartItem.php
            $cartitem = new CartItem;
            $cartitem->row_id = $item->rowId; 
            $cartitem->product_id = $item->id; 
            $cartitem->qty = $item->qty; 
            $cartitem->name = $item->name; 
            $cartitem->price = $item->price; 
            $customerinformation->addCartItem($cartitem);              

        } */  

        //DB::listen(function($query) { var_dump($query->sql); });

        //return \Redirect::to('/cards/');
        return redirect('mod');
        //return back();
    }



    
    public function list()
    {
        return view('mod/list');
    }

}
