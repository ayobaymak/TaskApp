<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>My Taskz</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/bootstrap.css')}}">

    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/font-awesome.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/bootstrap-theme.css')}}">




</head>

<body>

<div class="container">

    <!-- Static navbar -->


    <!-- Main component for a primary marketing message or call to action -->
    <div class="container">
        @if(Session::has('flash_message'))
            <div class="alert alert-success">
                {{ Session::get('flash_message') }}
            </div>
        @endif

    @yield('content')

</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
@yield('footer')

</body>
</html>