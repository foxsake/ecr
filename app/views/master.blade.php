<html>
    <head>
        <title>
        @yield('title')
        </title>
        <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
        <link href='http://fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>
        <script src="/resources/js/bootstrap.min.js"></script>
    </body>
</html>