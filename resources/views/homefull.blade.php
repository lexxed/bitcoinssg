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
      <div class="column is-12">

        <div class="box">
          <div class="content">    

            @foreach($affiliate as $affiliate)
              <div class="columns">
                <div class="column is-2 is-one-quarters-mobile is-hidden-mobile"> 
                  <a class="block-link" href="{{ url('go/' . $affiliate->name ) }}" target="_blank">
                    <figure class="image is-64x64">
                      <img src="{{ asset('img/' .$affiliate->name. '.png') }}" alt="{{ ucfirst($affiliate->name) }}" >
                    </figure> 

                  </a>
                  
                </div>

                <div class="column is-10 is-three-quarters-mobile">
                  <h1 class="title">
                    {{ ucfirst($affiliate->name) }}
                  </h1>
                </div>  

              </div>
              <div class="columns">
                  <div class="content">

                    {{ $affiliate->description }}
                  </div>
              </div>
            @endforeach    

	        </div>  
        </div>      
  

      </div>
 
    </div>
  </div>	

  <div class="spacer"></div>

@endsection	