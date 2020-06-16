@extends('app')

@section('title', 'trainer_dashboard')


@section('trainer-dashboard-business-card-css')
    <link href="{{ asset('/css/trainer_dashboard_business_card.css') }}" rel="stylesheet">
@endsection

@section('trainer-dashboard')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-dark text-white">
                <div class="card-header ">Zarejestruj się</div>

                <div class="card-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group">
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <input type="checkbox"  class="regular-checkbox" name="role">
                                    <label for="role" class="cols-sm-2 control-label">Konto trenera</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="input-group-addon"><i class="fa fa-user-ninja fa" aria-hidden="true"></i></span>
                            <label for="firstName" class="cols-sm-2 control-label">Imię</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <input type="text" class="form-control  @error('firstName') is-invalid @enderror"
                                           name="firstName" id="firstName" placeholder="Wpisz swoje imię"/>
                                    @error('firstName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                            <label for="secondName" class="cols-sm-2 control-label">Nazwisko</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <input type="text" class="form-control @error('secondName') is-invalid @enderror"
                                           name="secondName" id="secondName" placeholder="Wpisz swoje nazwisko"/>

                                    @error('secondName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                            <label for="email" class="cols-sm-2 control-label">Adres e-mail</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <input type="text" class="form-control @error('email') is-invalid @enderror"
                                           name="email" id="email"
                                           placeholder="Wpisz swój adres e-mail"/>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="input-group-addon"><i class="fa fa-phone fa" aria-hidden="true"></i></span>
                            <label for="phoneNumber" class="cols-sm-2 control-label">Numer telefonu</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <input type="text" class="form-control @error('phoneNumber') is-invalid @enderror"
                                           name="phoneNumber" id="phoneNumber"
                                           placeholder="Wpisz numer telefonu"/>
                                    @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="input-group-addon"><i class="fa fa-city fa" aria-hidden="true"></i></span>
                            <label for="city" class="cols-sm-2 control-label">Miasto</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <input type="text" class="form-control @error('city') is-invalid @enderror"
                                           name="city" id="city" placeholder="Wpisz miasto"/>
                                    @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                            <label for="password" class="cols-sm-2 control-label">Hasło</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                                           name="password" id="password" required autocomplete="new-password"
                                           placeholder="Wpisz hasło"/>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                            <label for="password-confirm" class="cols-sm-2 control-label">Powtórz hasło</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <input type="password" class="form-control" name="password_confirmation"
                                           id="password-confirm" required autocomplete="new-password"
                                           placeholder="Powtórz swoje hasło"/>
                                </div>
                            </div>
                        </div>

                        <div class="form-group ">
                            <button type="submit" class="btn btn-warning btn-lg btn-block login-button">
                                {{ __('Zarejestruj') }}
                            </button>
                        </div>
                        <div class="login-register">
                            <a class="btn btn-warning" href="/login" role="button">Zaloguj</a>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
