<!doctype html>
<html lang="en">
  <head>
    <base href="{{URL::asset('/')}}" target="_top">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS --> 
    <link rel="stylesheet" href="{{{ URL::asset('assets/css/bootstrap.css')}}}">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{{ URL::asset('assets/css/all.css')}}}">
    <!-- custom CSS -->
    <link rel="stylesheet" href="{{{ URL::asset('assets/css/style.css')}}}">
    <title>HackTheRat - @yield('title')</title>
  </head>
<body>
@include('partials.header')

@yield('content') 

@include('partials.footer')
  </body>
</html>