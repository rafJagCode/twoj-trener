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
<<<<<<< HEAD:resources/views/trainer_dashboard.blade.php
                <strong>Witaj {{$user->firstName}} ! </strong> Nie masz nowych wiadomości.
=======
                <strong>Witaj {{$loggedUser->firstName}} ! </strong> Nie masz nowych wiadomości.
>>>>>>> 7cbb99ea5cb6ab2c0bd89bf7d4319ef2bc90ad30:resources/views/users/trainer_dashboard.blade.php
            </div>
        </div>
    </div>
    <div class="row text-center">

        <div class="col-lg-4 col-md-6 col-sm-12">
            <a href="{{ route('users.show') }}" class="no-underline"  data-toggle="modal" data-myfirstName="{{$loggedUser->firstName}}" 
            data-mysecondName="{{$loggedUser->secondName}}" data-myCity="{{$cities}}" data-myDisciplines="{{$disciplines}}" data-target="#business-card-modal-edit">
                <div class="div-square py-3">
                    <i class="fas fa-user fa-5x"></i>
                    <h4>Twoja Wizytówka</h4>
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
            <a href="#" class="no-underline">
                <div class="div-square py-3">
                    <i class="fas fa-pen fa-5x"></i>
                    <h4>Twój Opis</h4>
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
            <a href="#" class="no-underline">
                <div class="div-square py-3">
                    <i class="fas fa-file-alt fa-5x"></i>
                    <h4>Certyfikaty</h4>
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
            <a href="#" class="no-underline">
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
    </div>
</div>


@include("modals.trainer_dashboard_business_card")


@endsection
