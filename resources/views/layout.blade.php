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
    {{-- <script src="https://kit.fontawesome.com/ec51452c3d.js" crossorigin="anonymous"></script> --}}
    <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css')}}">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('css/menu.css')}}">
    <link rel="stylesheet" href="{{ asset('css/styles.css')}}">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    @yield('head')
    @yield('additional-css')
</head>
<body class="inner-pages homepage-1">
    <div id="app">
        <div id="wrapper" class="mm-page mm-slideout">
            @include('header')
            <div class="clearfix"></div>
            <section class="headings">
                <div class="text-heading text-center">
                    <div class="container">
                    <h1>{{ \Request::route()->getName() }}</h1>
                    </div>
                </div>
            </section>
            <section class="content">
                <div class="container">
                    @yield('content')
                </div>
            </section>

            @include('footer')

        </div>
    </div>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"></script>
<script>
    moment().format();
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>
<script src="{{ route('home') }}/js/mmenu.min.js"></script>
<script src="{{ route('home') }}/js/mmenu.js"></script>
<!-- MAIN JS -->
@yield('scripts')
<script src="{{ asset('js/slick.min.js') }}"></script>
<script src="{{ asset('js/slick1.js') }}"></script>
<!-- SORT -->
<script src="{{ asset('js/sorting.js') }}"></script>
<!-- GRID/LIST -->
<script src="{{ asset('js/gridList.js') }}"></script>
<!-- CHECKBOXES -->
<script src="{{ asset('js/checkboxes.js') }}"></script>
<script src="{{ route('home') }}/js/script.js"></script>
</body>
</html>

