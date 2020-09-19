@extends('layout')
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
                        <strong>Witaj {{$user->firstName}}! </strong> Twoje nowe wiadomości: {{$user->unread}}
                    </div>
                </div>
            </div>

            <div class="row text-center">
            <div class="col-lg-4 col-md-6 col-sm-12">
            <a href="#" class="no-underline" data-toggle="modal" data-target="#business-card-modal">
                <div class="div-square py-3">
                    <i class="fas fa-user fa-5x"></i>
                    <h4>Twoja Wizytówka</h4>
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
            <a href="#" class="no-underline" data-toggle="modal" data-target="#description-modal">
                <div class="div-square py-3">
                    <i class="fas fa-pen fa-5x"></i>
                    <h4>Twój Opis</h4>
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
            <a href="#" class="no-underline" data-toggle="modal" data-target="#certificates-modal">
                <div class="div-square py-3">
                    <i class="fas fa-file-alt fa-5x"></i>
                    <h4>Certyfikaty</h4>
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
            <a href="#" class="no-underline" data-toggle="modal" data-target="#galery-modal">
                <div class="div-square py-3">
                    <i class="fas fa-image fa-5x"></i>
                    <h4>Galeria</h4>
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
            <a href="{{ route('fullcalendar.index' , $user->id)}}" class="no-underline">
                <div class="div-square py-3">
                    <i class="far fa-calendar-times fa-5x"></i>
                    <h4>Kalendarz</h4>
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
            <a href="{{'message'}}" class="no-underline">
                <div class="div-square py-3">
                    <i class="fas fa-comments fa-5x"></i>
                    <h4>Wiadomości</h4>
                </div>
            </a>
        </div>
        </div>

        @if(session('success'))
            <h4>{{session('success')}}</h4>
        @endif
            </div>
        </div>
    </section>

@include("trainer_dashboard.modals.business_card")
@include("trainer_dashboard.modals.description")
@include("trainer_dashboard.modals.gallery")
@include("trainer_dashboard.modals.certificates")

@endsection


