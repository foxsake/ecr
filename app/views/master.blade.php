<!DOCTYPE html>
<html>
    <head>
        <title>
        @yield('title')
        </title>
        <link rel="stylesheet" type="text/css" href="{{asset('bootstrap/dist/css/bootstrap.min.css')}}">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
        @yield('addcss')
    </head>
    <body>
    {{ HTML::script('js/jquery.js') }}
    {{ HTML::script('bootstrap/dist/js/bootstrap.min.js') }}
    @if(!empty(Auth::user()) && Auth::user()->role = 'FACULTY')
        @include('navigation')
    @endif
    @yield('content')
    </body>
</html>