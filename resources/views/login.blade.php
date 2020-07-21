@extends('layout')
@section('head')
<link href="{{ asset('/css/login.css') }}" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

@endsection

@section('content')

<section class="headings">
    <div class="text-heading text-center">
        <div class="container">
            <h1>Logowanie</h1>
            <h2><a style="color: #fa2964ed" href="{{route('home')}}">Home </a> &nbsp;/&nbsp; Logowanie</h2>
        </div>
    </div>
</section>

<div id="login">
    <div class="login">                    
        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <div class="cols-sm-10">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" name="email" id="email" placeholder="Wpisz swój adres e-mail" />
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="cols-sm-10">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Wpisz hasło" />
                    </div>
                </div>
            </div>
            @include('errors')
            <div style="margin-bottom: 20px" class="text-center add_top_10">Zapomniałeś hasła? <strong><a href="{{route('password.request')}}">Zresetuj Haslo</a></strong></div>
            <div class="form-group ">
                <button type="submit" class="btn_1 rounded full-width">Zaloguj</button>
            </div>
            <div class="form-group ">
            </div>
            <div class="login-register">
               
            <div class="text-center add_top_10">Nowy w SlimGuru? <strong><a href="{{route('register')}}">Zaloguj się</a></strong></div>
            </div>
        </form>
    </div>
</div>

@endsection
