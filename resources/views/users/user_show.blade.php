@extends('layout')

@section('head')
    <link href="{{ asset('/css/user_show.css') }}" rel="stylesheet">
@endsection

@section('content')

    <div class="container margindol">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 ">
                <div class="row text-center">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <img src="{{url('/images/avatars/'.$user->profilePicture)}}" class="avatars" alt="Image" width="200" height="200"/>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <a href="#" class="no-underline">
                            <div class="div-square py-4">
                                <i class="fa fa-comments-o fa-5x"></i>
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
                <a href={{ route('user.dashboard') }} class="btn_1 rounded " role="button">Powrot do profilu</a>
                @if(auth()->user())
                    <a class="btn_1 rounded float-right" href="{{ route('user.show', $user->id) }}" role="button">Edytuj</a>
                    @else
                    <a class="btn_1 rounded float-right" role="button">Edytuj</a>
                @endif
            </div>
            <div class="col-md-2"></div>
        </div>

    </div>

@endsection
