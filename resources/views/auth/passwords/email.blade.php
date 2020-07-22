@extends('layout')


@section('content')
<div class="container">

    <section class="headings">
        <div class="text-heading text-center">
            <div class="container">
                <h1>Zresetuj hasło</h1>
                <h2><a style="color: #fa2964ed" href="{{route('home')}}">Home </a> &nbsp;/&nbsp; Reset</h2>
            </div>
        </div>
    </section>
    
    <div id="login">
        <div class="login">   
            
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif
            
            <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="form-group">
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                    </div>
                </div>
                <div style="margin-top: 30px;" class="form-group ">
                    <button type="submit" class="btn_1 rounded full-width">{{ __('Wyślij link resetujący hasło') }}</button>
                </div>
            </form>
        </div>
    </div>

@endsection
