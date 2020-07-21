@extends('layout')


@section('head')
    <link href="{{ asset('/css/trainer_dashboard_business_card.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"

    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

<script src="https://kit.fontawesome.com/ec51452c3d.js" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css2?family=Exo:wght@400;700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">


@endsection

@section('content')

<section class="headings">
    <div class="text-heading text-center">
        <div class="container">
            <h1>Rejestracja</h1>
            <h2><a style="color:#fa2964" href="{{route('home')}}">Home </a> &nbsp;/&nbsp; Rejestracja</h2>
        </div>
    </div>
</section>

<div id="login">
    <div class="login">
        <form class="form-horizontal" method="POST" action="{{ route('register') }}">
            @csrf
            <div class="imput-group">
                <input type="checkbox"  class="regular-checkbox" name="role">
                                    <label for="role" class="cols-sm-2 control-label">Konto trenera</label>
            </div>    
            <div class="form-group">               
                <label for="firstName">Imię</label>
                <input type="text" class="form-control  @error('firstName') is-invalid @enderror"
                name="firstName" id="firstName" placeholder="Imię"/>
                @error('firstName')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <i class="ti-user"></i>
            </div>
            <div class="form-group">
                <label for="secondName">Nazwisko</label>
                <input type="text" class="form-control @error('secondName') is-invalid @enderror"
                name="secondName" id="secondName" placeholder="Nazwisko"/>

                @error('secondName')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <i class="ti-user"></i>
            </div>
            <div class="form-group">
                <label for="email" class="cols-sm-2 control-label">Adres e-mail</label>
                <input type="text" class="form-control @error('email') is-invalid @enderror"
                        name="email" id="email"
                        placeholder="Adres e-mail"/>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <i class="icon_mail_alt"></i>
            </div>
            <div class="form-group">
                <label>Numer Telefonu</label>
                <input type="text" class="form-control @error('phoneNumber') is-invalid @enderror"
                name="phoneNumber" id="phoneNumber"
                placeholder="Numer telefonu"/>
                @error('phoneNumber')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <i class="icon_lock_alt"></i>
            </div>
            <div class="form-group">
                <label for="city" class="cols-sm-2 control-label">Miasto</label>
                <input type="text" class="form-control @error('city') is-invalid @enderror"
                name="city" id="city" placeholder="Miasto"/>
                @error('city')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <i class="icon_lock_alt"></i>
            </div>
            <div class="form-group">
                <label for="password" class="cols-sm-2 control-label">Hasło</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" id="password" required autocomplete="new-password"
                    placeholder="Hasło"/>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <i class="icon_lock_alt"></i>
            </div>
            <div class="form-group">
                <label for="password-confirm" class="cols-sm-2 control-label">Powtórz hasło</label>
                <input type="password" class="form-control" name="password_confirmation"
                                           id="password-confirm" required autocomplete="new-password"
                                           placeholder="Powtórz swoje hasło"/>
                <i class="icon_lock_alt"></i>
            </div>
            <div id="pass-info" class="clearfix"></div>
            <button type="submit" class="btn_1 rounded full-width add_top_30 mt-5">
                {{ __('Zarejestruj') }}
            </button>
        <div class="text-center add_top_10">Posiadasz Konto? <strong><a href="{{route('login')}}">Zaloguj się</a></strong></div>
        </form>
    </div>
</div>


@endsection
