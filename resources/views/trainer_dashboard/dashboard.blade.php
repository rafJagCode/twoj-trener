@extends('app')

@section('title', 'trainer_dashboard')

@section('trainer-dashboard-css')
<link href="{{ asset('/css/trainer_dashboard.css') }}" rel="stylesheet">
@endsection

@section('trainer-dashboard')
<div id="wrapper">
    <div class="row text-center">
        <div class="col-lg-12 ">
            <div class="alert alert-warning">
                <strong>Witaj {{$user->firstName}} ! </strong> Nie masz nowych wiadomości.
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
            <a href="#" class="no-underline">
                <div class="div-square py-3">
                    <i class="far fa-calendar-times fa-5x"></i>
                    <h4>Kalendarz</h4>
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
            <a href="#" class="no-underline">
                <div class="div-square py-3">
                    <i class="fas fa-comments fa-5x"></i>
                    <h4>Wiadmomości</h4>
                </div>
            </a>
        </div>

        @if(session('success'))
            <h4>{{session('success')}}</h4>
        @endif

    </div>
</div>

@include("trainer_dashboard.modals.business_card")
@include("trainer_dashboard.modals.description")
@include("trainer_dashboard.modals.gallery")
@include("trainer_dashboard.modals.certificates")
@endsection
