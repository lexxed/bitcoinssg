@extends('master')

@section('title', 'Best Cryptocurrency Exchanges for Singapore')
@section('description', 'List of Best Cryptocurrency Exchanges to use in Singapore to buy Bitcoins, Ethereum, Monero and other altcoins. Compares fees and method of payment')


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
                Best Cryptocurrency Exchanges for Singapore
              </font>   

              <p>  
                    <figure class="image is-16by9 ">
                      <img src="{{ asset('img/cryptocurrency001.jpg') }}" alt="Ethereum singapore">
                    </figure>              
              </p>      


              <p class="space2">
                We have tested and selected the best cryptocurrency that is easier and reliable to buy bitcoins, ethereum, monero and other altcoins in Singapore.
              </p>


            </div><!-- box 1 end-->

            

            <div class="box"><!-- box 2-->
              <font class="fta">
                  Top Cryptocurrency Exchanges for Singapore
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