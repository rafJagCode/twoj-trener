<!DOCTYPE html>
<html lang="en">
<head>
    <link href="{{ asset('/css/registration.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
        body {
            margin-top: 100px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-dark text-white">
                <div class="card-header ">Zarejestruj się</div>

                <div class="card-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group">
                            <label for="firstName" class="cols-sm-2 control-label">Imię</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control  @error('firstName') is-invalid @enderror" name="firstName" id="firstName" placeholder="Wpisz swoje imię"/>

                                    @error('firstName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="secondName" class="cols-sm-2 control-label">Nazwisko</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control @error('secondName') is-invalid @enderror" name="secondName" id="secondName" placeholder="Wpisz swoje nazwisko"/>

                                    @error('secondName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="cols-sm-2 control-label">Adres e-mail</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" id="email"
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
                            <label for="city" class="cols-sm-2 control-label">Miasto</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control @error('city') is-invalid @enderror" name="city" id="city"  required autocomplete="new-password"
                                           placeholder="Wpisz miasto"/>
                                    @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="cols-sm-2 control-label">Hasło</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror"  name="password" id="password"  required autocomplete="new-password"
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
                            <label for="password-confirm" class="cols-sm-2 control-label">Powtórz hasło</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                    <input type="password" class="form-control" name="password_confirmation" id="password-confirm" required autocomplete="new-password"
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
                            <a class="btn btn-warning" href="#" role="button">Zaloguj</a>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
</body>
</html>
