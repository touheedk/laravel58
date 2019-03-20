<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Basic</title>
    <link rel="stylesheet" href="<?php echo asset('css/app.css')?>">
</head>
<body>

    @include('inc.navbar')
    <div class="container">
        @if(Request::getPathInfo() == '/home')
            @include('inc.showcase')
        @endif
        <div class="col-md-8 col-lg-8">
            @include('inc.messages')
            @yield('content')
        </div>
        <div class="col-md-4 col-lg-4">
            @include('inc.sidebar')
        </div>
    </div>
    <footer id="footer" class="text-center">
        <p>Copyright 2017 &copy; Touheed Khan</p>
    </footer>

</body>
</html>