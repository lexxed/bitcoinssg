@extends('layouts.app')

@section('content')
<div class="container">


    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Input</div>


                <div class="panel-body">
				    <form method="POST" action="/mod">
						{{ csrf_field() }} 
				        <div class="form-group @if ($errors->has('name')) has-error @endif">
				            <label class="control-label" for="inputError1">name</label>
				            <input name="name" type="name" class="form-control" id="inputEmail" placeholder="name" value="{{ old('name')}}">
				            <small class="text-danger">{{ $errors->first('name') }}</small>
				        </div>

				        <div class="form-group @if ($errors->has('name')) has-error @endif">
				            <label class="control-label" for="inputError1">url</label>
				            <input name="url" type="url" class="form-control" id="inputurl" placeholder="url" value="{{ old('url')}}">
				            <small class="text-danger">{{ $errors->first('url') }}</small>
				        </div>

				        <div class="form-group @if ($errors->has('affurl')) has-error @endif">
				            <label class="control-label" for="inputError1">affurl</label>
				            <input name="affurl" type="affurl" class="form-control" id="inputaffurl" placeholder="affurl" value="{{ old('affurl')}}">
				            <small class="text-danger">{{ $errors->first('affurl') }}</small>
				        </div>

				        <div class="form-group @if ($errors->has('payout')) has-error @endif">
				            <label class="control-label" for="payout">payout</label><br>
 				            <textarea name="payout" class="form-control" rows="5" id="payout"></textarea>
				            <small class="text-danger">{{ $errors->first('payout') }}</small>
				        </div>

				        <div class="form-group">
				        	<button type="submit" class="btn btn-success btn-lg">Submit</button>
				        </div>	
				        
				    </form>
				</div>




            </div>
        </div>
    </div><!-- row -->



    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">List</div>


					<table class="table">
					  <thead>
					    <tr>
					      <th scope="col">#</th>
					      <th scope="col">name</th>
					      <th scope="col">url</th>
					      <th scope="col">affurl</th>
					      <th scope="col">payout</th>
					    </tr>
					  </thead>
					  <tbody>

					    
					    @foreach ($affiliate as $indexKey => $affiliate)
						    <tr>
						      <th scope="row">{{ $indexKey }}</th>
						      <td>{{ $affiliate->name }}</td>
						      <td>
						      	<a href="{{ url($affiliate->url) }}">
						      		{{ str_limit($affiliate->url, $limit = 15, $end = '..') }}
						      	</a>
						      </td>
						      <td>
						      	<a href="{{ url($affiliate->affurl) }}">
						      		{{ str_limit($affiliate->affurl, $limit = 15, $end = '..') }}
						      	</a>
						      </td>
						      <td>{{ $affiliate->payout }}</td>	
						    </tr>                	
					    @endforeach

					  </tbody>
					</table>


            </div>
        </div>
    </div><!-- row -->
</div><!-- container -->
@endsection
