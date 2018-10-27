@extends('master')

@section('title', 'Buy Bitcoins Singapore')
@section('description', 'Buy Bitcoins Singapore')

@section('content')

  <div class="breadcrumb-header">
    <div class="container">
      <div class="columns">
        <div class="column">
         
         <a href="{{ url('/') }}">Home</a>

        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="columns">
      <div class="column is-8"><!-- col is-8 -->

        <div class="box">
          <div class="content">   
            <div class="box"><!-- box 1 -->

              
              <font class="fta">  
                What is Bitcoin ?
              </font>   

              <p>  
                    <figure class="image is-16by9 ">
                      <img src="{{ asset('img/bitcoin01.jpg') }}" alt="bitcoin singapore">
                    </figure>              
              </p>      


              <p>
                  Bitcoin is a form of currency that is secured by math. Currently when you need to send another person a sum of money you need to go though banks.
                  Bitcoin removes third party validation(banks) by using mining machines to validate the transactions. Bitcoin was started in 3 Jan 2009 by Satoshi Nakamoto, what is amazing is that something that is worth billions of dollars in transactions that is facing the internet have not been hacked in almost 10 years. 
              </p>


              <font class="fta">
                Why Buy Bitcoin ?
              </font>  

              <p>  
                    <figure class="image is-16by9 ">
                      <img src="{{ asset('img/firstignore.jpg') }}" alt="bitcoin ignore">
                    </figure>              
              </p>      



              <p>
                The value of bitcoin will rise and fall depending on its demand in the market. As long as people use it to transfer value to one another it will never be worth nothing. Currently, cryptocurrency is like the internet in the 1980s, so no one will know which altcoin or cryptocurrency will be mainstream in the future. You cannot predict but you can prepare. That is a very good reason to convert some of your flat money to bitcoins.
              </p>


              <font class="fta">
                  Buying Bitcoin in Singapore
              </font>  
              <p>
                  Buying or Converting Singapore Dollars(SGD) to Bitcoin(BTC) or other forms of cryptocurrency(Altcoin) is easier than it seems.<br>
                  First you need to find a Crypto Exchanges that accepts SGD or if you can open a multicurrency bank account and use Crypto Exchanges that accepts US Dollars.
              </p>

            </div><!-- box 1 end-->

            

            <div class="box"><!-- box 2-->
              <font class="fta">
                  Top 10 ways to buy Bitcoin in Singapore with SGD
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
               <p><strong>Top 10 exchanges that accepts USD</strong></p>

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



          </div><!-- box -->
        </div><!-- content -->

      </div><!-- col is-8 -->

      <div class="column is-4">
        <div class="box related-list">
          <p class="autoplay">
            <span class="autoplay-title">Ads</span>
          </p>

        </div>
      </div> 

 
    </div><!-- container -->
  </div><!-- columns -->	

  <div class="spacer"></div>

@endsection	