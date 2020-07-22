@extends('layout')
@section('content')

<div class="container">

    <section class="headings">
        <div class="text-heading text-left">
            <div class="container">
                <h6><a style="color: #fa2964ed" href="{{route('home')}}"> <i class="fa fa-home" aria-hidden="true"></i>  </a> &nbsp;/&nbsp; Reset</h6>
            </div>
        </div>
    </section>
    <h3 class="text-center">Podaj nowe hasło</h3>
    <div id="login">
        <div class="login">   
            
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif
            
            <form class="form-horizontal" method="POST" action="{{ route('password.update') }}">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">
                <div class="form-group">
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                            <input placeholder="Podaj nowe hasło" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                            <input placeholder="Potwierdź nowe hasło" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                        </div>
                    </div>
                </div>
                <div class="form-group ">
                    <button type="submit" class="btn_1 rounded full-width">Zaloguj</button>
                </div>



            </form>
        </div>
    </div>

@endsection

