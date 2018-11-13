@extends('master')

@section('title', 'Search for ' . $q . ' - Bitcoin.com.sg')
@section('description', 'Search for ' . $q . ' - Bitcoin.com.sg')

@section('content')

@php
/*
  <div class="breadcrumb-header">
    <div class="container">
      <div class="columns">
        <div class="column">
          <a href="{{ url('/') }}">Home</a> > 
          <a href="{{ url('/hotels/thailand') }}">Thailand</a> 
        </div>
      </div>
    </div>
  </div>
*/
@endphp

  <div class="container">
    <div class="columns">
      <div class="column is-8">

        <div class="box">
          <div class="content">
            <div class="box"><!-- box 1 -->    
           
              @if($message)
                  <h1>{{ $message }} '{{ $q }}'</h1>
                  <p>Here are some cryptocurrencies.</p>
              @else
                  <h1>Here are some Crypto Exchanges to buy '{{ $q }}'</h1>

              @endif

              @if(!empty($coin))
                  
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
                    @foreach ($coin->affiliates as $indexKey => $affiliate)
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
                @php
                  // display the xe that have X coin
                  /*foreach ($coin->affiliates as $affiliate)
                    echo $affiliate->name . ' ' . $affiliate->url . ' ' . $affiliate->altcoin. '<br>';
                    */
                @endphp


              @else
                @php
                  foreach ($coinAll as $coinAll) {
                    echo "<p>";
                      echo "<a href='../buy-".$coinAll->name."-singapore'>".ucfirst($coinAll->name)."</a>";
                    echo  "</p>";
                  }
                      
                @endphp

                
              @endif




            
            </div><!-- box 1 -->

	        </div>  
        </div>                
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




    </div>
  </div>	

  <div class="spacer"></div>

@endsection	