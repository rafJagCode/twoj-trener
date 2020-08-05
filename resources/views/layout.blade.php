<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>Twoj-trener</title>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Asap:400,400i%7CMontserrat:600,800" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ec51452c3d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css')}}">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('css/menu.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('css/styles.css')}}">
    @yield('head')
    @yield('additional-css')
</head>
<body class="inner-pages">
    <div id="wrapper" class="homepage-1">
        @include('header')
        <div class="clearfix"></div>

        <section class="content">
            <div class="container">
                @yield('content')
            </div>
        </section>

        @include('footer')

        <!-- START PRELOADER -->
        <div id="preloader">
            <div id="status">
                <div class="status-mes"></div>
            </div>
        </div>
        <!-- END PRELOADER -->

        <!-- ARCHIVES JS
        <script src="{{ route('home') }}/js/jquery.min.js"></script>
        -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>
        <script src="{{ route('home') }}/js/mmenu.min.js"></script>
        <script src="{{ route('home') }}/js/mmenu.js"></script>
        <!-- MAIN JS -->
        <script src="{{ route('home') }}/js/script.js"></script>
        @yield('scripts')
        <script src="{{ asset('js/slick.min.js') }}"></script>
        <script src="{{ asset('js/slick1.js') }}"></script>
        <!-- SORT -->
        <script src="{{ asset('js/sorting.js') }}"></script>
        <!-- GRID/LIST -->
        <script src="{{ asset('js/gridList.js') }}"></script>
        <!-- CHECKBOXES -->
        <script src="{{ asset('js/checkboxes.js') }}"></script>
    </div>
<!-- Wrapper / End -->
</body>
</html>

