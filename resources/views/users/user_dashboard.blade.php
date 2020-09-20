@extends('layout')

@section('title', 'user_dashboard')

@section('additional-css')
    <link href="{{ asset('/css/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/additional.css') }}" rel="stylesheet">
@endsection


@section('content')
    <section class="featured popular portfolio freelancers rec-pro-1">
        <div class="container-fluid">
            <div id="wrapper">

                <div class="row text-center">
                    <div class="col-lg-12 ">
                        <div class="alert alert-warning">
                            <strong>Witaj {{$user->firstName}} {{$user->secondName}}! </strong> Twoje nowe wiadomości: {{$user->unread}}
                        </div>
                    </div>
                </div>

                <div class="row text-center">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <a href="{{ route('search') }}" class="no-underline">
                            <div class="div-square py-3">
                                <i class="fas fa-search fa-5x"></i>
                                <h4>Znajdź trenera</h4>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <a href="{{ route('user.index', $user->id) }}" class="no-underline">
                            <div class="div-square py-3">
                                <i class="fas fa-pen fa-5x"></i>
                                <h4>Twoje dane</h4>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <a href="{{ route('fullcalendar.index' , $user->id)}}" class="no-underline">
                            <div class="div-square py-3">
                                <i class="far fa-calendar-times fa-5x"></i>
                                <h4>Kalendarz</h4>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <a href="{{'message'}}" class="no-underline">
                            <div class="div-square py-3">
                                <i class="fas fa-comments fa-5x"></i>
                                <h4>Wiadomości</h4>
                            </div>
                        </a>
                    </div>
            </div>
        </div>
    </section>
@endsection
