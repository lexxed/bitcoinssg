<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Go</title>
    <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
    <meta name="description" content="Go">
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

<br><br><br><br>
<div align="center" valign="middle">
<br>
<b>
Please wait while we transfer you to {{ ucfirst($affiliate->name) }}
</b>
<br><br>
<img src="{{ asset('img/ajax-loader.gif') }}">
<br><br>
Sign up with {{ ucfirst($affiliate->name) }} to buy your first bitcoin.
</div>

</body>
</html>