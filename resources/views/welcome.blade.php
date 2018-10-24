@extends('master')

@section('title', 'Buy Bitcoins Singapore | '. config('constants.brandName') .'&#174;')

@section('description', 'Buy bitcoins online.')
      
@section('content')

<?php //app('Gloudemans\Notify\Notifications\Notification')->render(); 
/*
    <a href="{{ url('/shop') }}">
        <img src="{{ asset('img/gloss.jpg') }}" alt="{{ config('constants.brandName') }} banner" class="img-thumbnail img-thumbnail-noborder">
    </a>
*/
?>

    <div class="jumbotron jumbotron-billboard">
      <div class="img"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p style="color:#F778A1;font-size: 230%;text-shadow: 1px 1px #0C090A;">
                    <b>Buying Bitcoin in Singapore</b>
                    </p>                    
                </div>
            </div>
        </div>
    </div>

    <div class="container">  

        <div class="row buy-info-full">

        <h1>
        <a href="go/Coinbase" rel="nofollow" target="_blank"><img src="{{ asset('img/coinbase.png') }}" alt="Coinbase">Coinbase</a>

              <a rel="nofollow" target="_blank" class="button is-light" href="{{ url('/go/coinbase') }}">
                coinbase
              </a>

        </h1>       
        Residents of Singapore can purchase bitcoins on Coinbase using three payment options - credit card, debit card, or bank transfer. 

        Once your Coinbase account is verified, you will be given the account information that will be used to make a bank transfer deposit. This is done through Xfers Transfers. Coinbase claims that deposits clear within a few minutes, and that there are no deposit fees. Once you deposit Coinbase charges 1.49% to purchase coins. 

        If you are buying with a credit card or debit card, there is also a required identity verification. Fees for buying with a credit card or debit card are 3.99%. 

        If you purchase more than $100 USD (~136.24 SGD) worth of bitcoins through this link then you get $10 USD (13.62 SGD)     
        <hr>       
        <h1>
        <a href="go/Coinmama" rel="nofollow" target="_blank"><img src="{{ asset('img/coinmama.png') }}" alt="Coinmama">Coinmama</a>
        </h1>     

        Coinmama allows customers in almost every country to buy bitcoin with a credit or debit card. They charge an ~6% fee on each purchase. 

        If buying less than $150 worth of bitcoins, you won't need to verify your identity. This convenience makes small purchases quick and easy. 

        Want to buy using Coinmama? This step-by-step guide will show you how to use Coinmama.  
        <hr>       
        <h1>
        <a href="go/Coinmadd" rel="nofollow" target="_blank"><img src="{{ asset('img/localbitcoins.png') }}" alt="Coinmama">Localbitcoins</a>
        </h1>    

        LocalBitcoins is an escrow service which also helps to match bitcoin buyers and sellers. The most common method of payment for purchase is cash deposit. However, users may advertise trades for whichever payment method they prefer. 

        Buying bitcoins via an in-person meeting, secured and facilitated by LocalBitcoins, may be one of the fastest and most private ways to buy bitcoins in any country  
        <hr>       
        <h1>
        <a href="go/Coinmadd" rel="nofollow" target="_blank"><img src="{{ asset('img/luno.png') }}" alt="Coinmama">Luno</a>
        </h1>
        Luno is a universal Bitcoin platform that provides secure exchanges where people can buy/sell Bitcoin. Luno is currently offering Zero fee trading in Singapore for a limited time period until January 201        



        </div> <!-- end row -->    
    <br><br>





    </div> <!-- end container -->

@endsection
