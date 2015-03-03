<html>
    <head>
        <title>
        @yield('title')
        </title>
        <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
        <link href='http://fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
        <!--<link rel="stylesheet" href="css/styles.css">-->
    </head>
    <body>
    @if(!empty(Auth::user()) && Auth::user()->role = 'FACULTY')
        <ul class="nav nav-pills">
            <li role="presentation" class="active"><a href="/">Home</a></li>
            <li role="presentation"><a href="#">Profile</a></li>
            <li role="presentation"><a href="#">Messages</a></li>
        </ul>
    @endif
        <div class="container">
            @yield('content')
        </div>
        <script src="/resources/js/bootstrap.min.js"></script>
        <script src="/resources/js/jquery.js"></script>
    </body>
</html>