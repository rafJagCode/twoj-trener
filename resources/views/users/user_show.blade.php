@extends('app')

@section('title', 'user_show')

@section('trainer-dashboard-css')
    <link href="{{ asset('/css/user_show.css') }}" rel="stylesheet">
@endsection

@section('trainer-dashboard')

    <div class="container">
        <div class="row">
            <div class="col-md-7 ">
                <div class="row text-center">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <img src="{{url('/images/avatars/'.$user->profilePicture)}}" class="avatars" alt="Image" width="200" height="200"/>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <a href="#" class="no-underline">
                            <div class="div-square py-4">
                                <i class="fas fa-comment fa-4x"></i>
                                <h4>Napisz wiadomość</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="form-group">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Imie: {{$user->firstName}}</li>
                        <li class="list-group-item">Nazwisko: {{$user->secondName}}</li>
                        <li class="list-group-item">Email: {{$user->email}}</li>
                        <li class="list-group-item">Miejsce zamieszkania: {{$user->city}}</li>
                        <li class="list-group-item">Numer telefonu: {{$user->phoneNumber}}</li>
                        <li class="list-group-item">Data Dołączenia: {{$user->created_at}}</li>
                    </ul>
                </div>
                <a href={{ route('user.dashboard') }} class="btn btn-warning" role="button">Powrot do profilu</a>
                @if(auth()->user())
                    <a class="btn btn-warning btn-alignr" href="{{ route('user.show', $user->id) }}" role="button">Edytuj</a>
                    @else
                    <a class="btn btn-warning disabled btn-alignr" role="button">Edytuj</a>
                @endif
            </div>
        </div>

    </div>

@endsection
