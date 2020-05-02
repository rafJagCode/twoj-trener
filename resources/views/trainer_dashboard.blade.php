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
                <strong>Witaj User ! </strong> Nie masz nowych wiadomości.
            </div>
        </div>
    </div>
    <div class="row text-center">

        <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="div-square py-3">
                  <a href="#">
                    <i class="fas fa-user fa-5x"></i>
                    <h4>Twoja Wizytówka</h4>
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="div-square py-3">
                <a href="#">
                  <i class="fas fa-pen fa-5x"></i>
                    <h4>Twój Opis</h4>
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="div-square py-3">
                <a href="#">
                  <i class="fas fa-file-alt fa-5x"></i>
                    <h4>Certyfikaty</h4>
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="div-square py-3">
                <a href="#">
                  <i class="fas fa-image fa-5x"></i>
                    <h4>Galeria</h4>
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="div-square py-3">
                <a href="#">
                  <i class="far fa-calendar-times fa-5x"></i>
                    <h4>Kalendarz</h4>
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="div-square py-3">
                <a href="#">
                  <i class="fas fa-comments fa-5x"></i>
                    <h4>Wiadmomości</h4>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

