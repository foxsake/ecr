<html>
    <head>
        <title>
        @yield('title')
        </title>
        <link rel="stylesheet" type="text/css" href="{{asset('bootstrap/dist/css/bootstrap.min.css')}}">
        <!--<link href='http://fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
        @yield('addcss')
    </head>
    <body>
    {{ HTML::script('js/jquery.js') }}
    {{ HTML::script('bootstrap/dist/js/bootstrap.min.js') }}
    @if(!empty(Auth::user()) && Auth::user()->role = 'FACULTY')
        <ul class="nav nav-pills">
            <li role="presentation" class="active"><a href="/">Home</a></li>
            <li role="presentation"><a href="#">Profile</a></li>
            <li role="presentation"><a href="/logout">Logout</a></li>
        </ul>
    @endif
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>