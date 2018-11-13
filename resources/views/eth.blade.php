@extends('master')

@section('title', 'Buying Ethereum using SGD in Singapore with Credit Card')
@section('description', 'Step by Step Guide to Buy Your Own Ethereum in Singapore. See how to Use and Buy Unique Digital products with Ethereum')

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
                What is Ethereum ?
              </font>   

              <p>  
                    <figure class="image is-16by9 ">
                      <img src="{{ asset('img/ethlogo01.png') }}" alt="Ethereum singapore">
                    </figure>              
              </p>      


              <p class="space2">
                  Ethereum is a decentralized platform that runs applications using its blockchain. Those using this decentralized applications (Dapps) transact using Ether. It's different from Bitcoin as people can write they own apps and run on the Ethereum blockchain using Smart Contracts.
              </p>


              <font class="fta">
                Why Buy Ethereum ?
              </font>  

              <p>  
                    
                      <img src="{{ asset('img/dapp00.png') }}" alt="Ethereum DAPPS">
                    
              </p>      
              <p class="space2">
                Ethereum has the second largest market cap amongst Crypto-Currencies, after Bitcoin. Ethereum promises scalability, reliability and growth potential. It's easy for developers to create Decentralized Apps (Dapps) on the Ethereum blockchain which is not possible using the Bitcoin blockchain.
              </p>
              
              <font class="fta">
                  Buying Ethereum in Singapore
              </font>  
              <p class="space2">
                There are many ways to buy Ethereum in Singapore with SGD or USD. The procedure is same as buying bitcoin as soon as you are verified on the exchanges. Most Crypto Exchanges able to purchase bitcoin is able to buy Ethereum also. Below are a few Crypto Exchanges where you can buy Ethereum.
              </p>

            </div><!-- box 1 end-->

            

            <div class="box"><!-- box 2-->
              <font class="fta">
                  4 Ways to buy Ethereum in Singapore with SGD
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
                    @foreach ($affiliate as $indexKey => $affiliate)
                      <tr>
                        <td>
                          {{ $indexKey+1}}
                        </td>                      
                        <td>
                          <a class="block-link" href="{{ url('go/' . $affiliate->name ) }}" target="_blank">
                            {{ ucfirst($affiliate->name) }}
                          </a>
                        </td>
                        <td>
                            {{ $affiliate->fee }}%
                        </td>
                        <td>
                            {{ $affiliate->cur }}
                        </td>
                        <td>

                            <span class="is-hidden-desktop">
                                  {{ $affiliate->rating  }}
                            </span> 
                            <span class="stars stars-details is-hidden-touch">
                              @for ($i = 1; $i <= $affiliate->rating; $i++)
                                <i class="fa fa-star"></i>
                              @endfor

                              <?php
                              $starsLeft = 5 - $affiliate->rating;

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

            </div><!-- box 2 end-->    

            <div class="box"><!-- box 3-->
              <font class="fta">
               4 Ways to buy Ethereum with USD transfers
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
                    @foreach ($affiliateUsd as $indexKey => $affiliateUsd)
                      <tr>
                        <td>
                          {{ $indexKey+1 }}
                        </td>                      
                        <td>
                          <a class="block-link" href="{{ url('go/' . $affiliateUsd->name ) }}" target="_blank">
                            {{ ucfirst($affiliateUsd->name) }}
                          </a>
                        </td>
                        <td>
                            {{ $affiliateUsd->fee }}%
                        </td>
                        <td>
                            {{ $affiliateUsd->cur }}
                        </td>
                        <td>

                            <span class="is-hidden-desktop">
                                  {{ $affiliateUsd->rating  }}
                            </span> 
                            <span class="stars stars-details is-hidden-touch">
                              @for ($i = 1; $i <= $affiliateUsd->rating; $i++)
                                <i class="fa fa-star"></i>
                              @endfor

                              <?php
                              $starsLeft = 5 - $affiliateUsd->rating;

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
                Coinbase step by step guide
              </font>

              <p>
                <div class="content">
                  <ol type="I">
                    <li>
                      Create an account with coinbase using 
                          <a class="block-link" href="{{ url('go/coinbase' ) }}" target="_blank">
                            <u>this link</u>
                          </a>                      
                    </li>
                    <br>
                    <li>
                      <p>
                        Select Ethereum and click the buy on the right side. If you have already linked your xfers.io account you can use that to buy.
                        If not you can click add account and link your credit/debit card to your account to buy up to SGD100 per week at first. Your buying limit will increase after your first purchase of SGD100.
                      </p>
                        <div class="card is-flex is-horizontal-center">
                          <img src="{{ asset('img/buyeth001.PNG') }}" alt="Ethereum singapore"> 
                        </div>
                    </li>
                    <br>
                    <li>
                      <p>
                      You can also click add account to add your Singapore Bank Credit/Debit Card to your coinbase account.
                      </p>
                      <div class="card is-flex is-horizontal-center">
                          <img src="{{ asset('img/buyeth002.PNG') }}" alt="Ethereum singapore"> 
                      </div>
                    </li>
                    <br>
                    <li>
                      <p>
                        Once you add your card. You will need to look for 2 transactions made by coinbase and use the amount to verify your card.
                        If its in the hold amount you can call your bank for the 2 amounts charged by coinbase. Or you can check with your online banking after a few days.
                      </p>
                      <div class="card is-flex is-horizontal-center">
                          <img src="{{ asset('img/buyeth003.PNG') }}" alt="Ethereum singapore"> 
                      </div>
                    </li>
                    <br>
                    <li>
                      <p>
                        Once you have verified your card you can now buy your first Ethereum and spend it on Dapps. Or use it to trade for other Altcoins like Monero or Ravencoins.
                      </p>  
                    </li>
                    <br>
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