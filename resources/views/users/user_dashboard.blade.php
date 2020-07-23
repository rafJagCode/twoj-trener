@extends('layout')

@section('head')
    <link href="{{ asset('/css/trainer_dashboard.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div id="wrapper">
        <div class="container">

            <div class="row text-center">
                <div class="col-lg-12 ">
                    <div class="alert alert-danger">
                        <strong>Witaj {{$user->firstName}} {{$user->secondName}} ! </strong> Nie masz nowych wiadomości.
                    </div>
                </div>
            </div>
            <div class="row text-center">

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <a href="#" class="no-underline">
                        <div class="div-square py-3">
                            <i class="fa fa-bolt fa-5x"></i>
                            <h4>Znajdź trenera</h4>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <a href="{{ route('user.index', $user->id) }}" class="no-underline">
                        <div class="div-square py-3">
                            <i class="fa fa-user fa-5x"></i>
                            <h4>Twoje dane</h4>
                        </div>
                    </a>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <a href="#" class="no-underline">
                        <div class="div-square py-3">
                            <i class="fa fa-calendar fa-5x"></i>
                            <h4>Kalendarz</h4>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <a href="#" class="no-underline">
                        <div class="div-square py-3">
                            <i class="fa fa-comments-o fa-5x"></i>
                            <h4>Wiadmomości</h4>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>


@endsection
