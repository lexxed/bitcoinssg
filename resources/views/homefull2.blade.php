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
                  Buying Bitcoin in Singapore
              </font>  
              <p>
                  Buying or Converting Singapore Dollars (SGD) to bitcoins(BTC) or other forms of cryptocurrency is easier than it seems.<br>
                  First you need to find a Crypto Exchanges that accepts SGD or if you can open a multicurrency bank account and use Crypto Exchanges that accepts US Dollars.
              </p>

            </div><!-- box 1 end-->

            

            <div class="box"><!-- box 2-->
               <p><strong>Top 10 ways to buy Bitcoin in Singapore with SGD</strong></p>

                <table class="table">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Exchanges</th>
                      <th>Fees</th>
                      <th>$</th>
                      <th>Reliability</th>
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
                          {{ $indexKey }}
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
                      <th>Reliability</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($affiliateUsd as $indexKey => $affiliateUsd)
                      <tr>
                        <td>
                          {{ $indexKey+1}}
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
                          {{ $indexKey }}
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