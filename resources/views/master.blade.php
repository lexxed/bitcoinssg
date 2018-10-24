<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">

    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Store CSRF token for AJAX calls -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" id="bulma" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.3.2/css/bulma.min.css" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Favicon and Apple Icons -->
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">
</head>
<body>
@include('partials.analytics')

<nav class="nav has-shadow" id="top">
  <div class="container">
    <div class="nav-left">
      <a class="nav-item" href="{{ url('/') }}">
        <img src="{{ asset('img/logotop.png') }}" alt="bitcoinsg">
      </a>
    </div>
    <span class="nav-toggle">
      <span></span>
      <span></span>
      <span></span>
    </span>
    <div class="nav-right nav-menu">
      <a class="nav-item is-tab" href="{{ url('/') }}">
        Home
      </a>
      <a href="{{ url('/popular-travel-packages') }}" class="nav-item is-tab" >
        Buy Bitcoins
      </a>
      <a href="{{ url('/singapore/travel-agencies') }}" class="nav-item is-tab">
        Buy Ethereum
      </a>    

      <form class="nav-item control has-addons searchbox" id="search" method="POST" action="/search/">
        {{ csrf_field() }}
        <input name="q" class="input" type="text" placeholder="Search travel deals">
        <a class="button is-dark" onclick="document.getElementById('search').submit();">
        &nbsp; <i class="fa fa-search"></i> &nbsp; 
        </a>
      </form>      

    </div>
  </div>
</nav>


@yield('content')


<footer class="footer">
  <div class="container">
    <div class="has-text-centered">
      <p>
        <a href="{{ url('/') }}">Bitcoins.com.sg&nbsp;</a>© Copyright {{ date("Y")}}
      </p>
      <p class="text-muted">
          <a href="{{ url('singapore/aboutus.html') }}">about</a>&nbsp;
          <a href="{{ url('singapore/contactus.html') }}">contact</a>
      </p>
    </div>
  </div>
</footer>    

<!-- JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script async type="text/javascript" src="{{ asset('js/bulma.js') }}"></script>
<script async type="text/javascript" src="{{ asset('js/main.js') }}"></script>

@yield('extra-js')

</body>
</html>
