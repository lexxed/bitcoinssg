@extends('master')

@section('title', 'Buying Monero in Singapore using Crypto Exchanges')
@section('description', 'Step by Step Guide to Buy Your Own Monero in Singapore. How to trade Monero and use it to transfer funds to anyone in the world')



@section('content')

@php
/*
  <div class="breadcrumb-header">
    <div class="container">
      <div class="columns">
        <div class="column">
         
         <a href="{{ url('/') }}">Home</a>

        </div>
      </div>
    </div>
  </div>
*/  
@endphp

  <div class="container">
    <div class="columns">
      <div class="column is-8"><!-- col is-8 -->

        <div class="box">
          <div class="content">   
            <div class="box"><!-- box 1 -->

              
              <font class="fta">  
                What is Monero ?
              </font>   

              <p>  
                      <img src="{{ asset('img/monero001.png') }}" alt="Monero singapore">
              </p>      


              <p class="space2">
                  Monero (XMR) is an open-source cryptocurrency created in April 2014 that focuses on privacy and decentralization. Monero aims to improve on existing banking system by using it as cash for a connected world. It’s fast, private, and secure. With Monero, you are your own bank. You can spend safely, knowing that others cannot see your balances or track your activity. 
              </p>


              <font class="fta">
                Why Buy Monero ?
              </font>  
              <p>  
                  <img src="{{ asset('img/monero002.png') }}" alt="Monero DAPPS">
              </p>      
              <p class="space2">
                  Monero is has great future in speed of transaction and has pledge to be Asic resistant in mining, meaning it will be decentralized. Alot of payment merchants have already adopted Monero as one of their Crypto Payment options.
              </p>
              
              <font class="fta">
                  Buying Monero in Singapore
              </font>  
              <p class="space2">
                Buying Monero with fiat money is relatively difficult. You would first need to buy Bitcoin or Ethereum then use them to trade for Monero.
                Please see the guides on how to buy bitcoin and ethereum, once you have them you can use them to trade for Monero. Below are a list of exchanges where you can buy Monero.
              </p>

            </div><!-- box 1 end-->

            
            <div class="box"><!-- box 3-->
              <font class="fta">
                Crypto Exchanges to buy Monero with BTC or ETH
              </font>
                <table class="table">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Exchanges</th>
                      <th>Fees</th>
                      <th>$</th>
                      <th>Rating</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($affiliateXMR as $indexKey => $affiliateXMR)
                      <tr>
                        <td>
                          {{ $indexKey+1 }}
                        </td>                      
                        <td>
                          <a class="block-link" href="{{ url('go/' . $affiliateXMR->name ) }}" target="_blank">
                            {{ ucfirst($affiliateXMR->name) }}
                          </a>
                        </td>
                        <td>
                            {{ $affiliateXMR->fee }}%
                        </td>
                        <td>
                          BTC/XMR
                        </td>
                        <td>

                            <span class="is-hidden-desktop">
                                  {{ $affiliateXMR->rating  }}
                            </span> 
                            <span class="stars stars-details is-hidden-touch">
                              @for ($i = 1; $i <= $affiliateXMR->rating; $i++)
                                <i class="fa fa-star"></i>
                              @endfor

                              <?php
                              $starsLeft = 5 - $affiliateXMR->rating;

                              if (is_float($starsLeft)) {
                                echo '<i class="fa fa-star-half-o"></i>
                                '; // new line else will bunch together
                              }

                              if ($starsLeft > 0) {
                                  for ($i = 1; $i <= $starsLeft; $i++) {  // go through each remaining star
                                      echo '<i class="fa fa-star-o"></i>
                                      ';     
                                  }
                              }            
                              ?>
                            </span>  
                            

                        </td>                        
                      </tr>        
                    @endforeach    
                  </tbody>
                </table>

            </div><!-- box 3 end-->    


            <div class="box"><!-- box 4-->
              <font class="fta">
                Binance Step by Step Guide to Trading Bitcoin for Monero
              </font>

              <p>
                <div class="content">
                  <ol type="I">
                    <li>
                      Create an account with Binance using 
                          <a class="block-link" href="{{ url('go/binance' ) }}" target="_blank">
                            <u>this link</u>
                          </a>                      
                    </li>
                    <br>
                    <li>
                      <p>
                        Once you have registered an account. Proceed to do the verfication with you ID or driving licence if you want to do withdrawal more than 2 BTC. 
                      </p>
                        <div class="card is-flex is-horizontal-center">
                          <img src="{{ asset('img/monero003.png') }}" alt="Monero singapore"> 
                        </div>
                    </li>
                    <br>
                    <li>
                      <p>
                      Look for Funds > Deposit to deposit some BTC to your binance account so you can use it to trade for Monero
                      </p>
                      <div class="card is-flex is-horizontal-center">
                          <img src="{{ asset('img/monero004.png') }}" alt="Monero singapore"> 
                      </div>
                    </li>
                    <br>
                    <li>
                      <p>
                        Deposit the some Bitcoins into your binance address. Please double check your address before doing any transfers.
                      </p>
                      <div class="card is-flex is-horizontal-center">
                          <img src="{{ asset('img/monero005.png') }}" alt="Monero singapore"> 
                      </div>
                    </li>
                    <br>
                    <li>
                      <p>
                        Next go to your transaction history and you will see your bitcoin deposits after 2 to 3 confirmations. Afterwards go to Exchange > Advanced. I prefer the Advanced version i find it easier to use compared to the basic version. Next you will be able to buy XMR with your BTC.
                      </p>  
                      <div class="card">
                          <img src="{{ asset('img/monero006.png') }}" alt="Monero singapore"> 
                      </div>
                    </li>
                    <br>
                    <li>
                      <p>
                        Congratulations you have successfully owned your first XMR!
                      </p>  

                    </li>                                                               
                  </ol>
                </div>              
              </p>

            </div><!-- box 4 end-->    



          </div><!-- box -->
        </div><!-- content -->

      </div><!-- col is-8 -->

      <div class="column is-4">
        <div class="box related-list">
          <p class="autoplay">
            <span class="autoplay-title">Ads</span>
          </p>
              <img src="{{ asset('img/Ravencoin02.png') }}" alt="ravencoin singapore"> 
              In the fictional world of Westeros, ravens are used as the messengers who carry statements of truth. Ravencoin is a use case specific blockchain designed to carry statements of truth about who owns what asset.              
        </div>
      </div> 

 
    </div><!-- container -->
  </div><!-- columns -->	

  <div class="spacer"></div>

@endsection	