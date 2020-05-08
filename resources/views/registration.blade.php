<!DOCTYPE html>
<html lang="en">
<head>
<link href="{{ asset('/css/registration.css') }}" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>
body {margin-top: 100px;}
</style>
</head>
<body>
<div class="container">
<div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card bg-dark text-white">
                            <div class="card-header ">Zarejestruj się</div>
                            <div class="card-body">
                                <form class="form-horizontal" method="post" action="#">

                                    <div class="form-group">
                                        <label for="name" class="cols-sm-2 control-label">Imię</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="name" id="name" placeholder="Wpisz swoje imię" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="cols-sm-2 control-label">Adres e-mail</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="email" id="email" placeholder="Wpisz swój adres e-mail" />
                                            </div>
                                        </div>
                                    </div>
                            
                                    <div class="form-group">
                                        <label for="password" class="cols-sm-2 control-label">Hasło</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                                <input type="password" class="form-control" name="password" id="password" placeholder="Wpisz hasło" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="confirm" class="cols-sm-2 control-label">Powtórz hasło</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                                <input type="password" class="form-control" name="confirm" id="confirm" placeholder="Powtórz swoje hasło" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <button type="button" class="btn btn-warning btn-lg btn-block login-button">Zarejestruj</button>
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