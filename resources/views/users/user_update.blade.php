@extends('layout')

@section('title', 'user_update')
@section('additional-css')
    <link href="{{ asset('/css/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/additional.css') }}" rel="stylesheet">
@endsection

@section('content')

    <section class="featured popular portfolio freelancers rec-pro-1">
        <div class="container-fluid">
            <div id="wrapper">
                <div class="list-group list-group-flush">
                    <form method="POST" class="form-user row" action="{{ route('user.update', $user->id) }}"
                          enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <img src="{{url('/images/avatars/'.$user->profilePicture)}}" class="avatars" alt="Image" width="200" height="200"/>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6 form-group">
                            <label for="profilePicture" class="labl"> Zdjecie profilowe </label>
                            <input type="file" name="profilePicture">
                        </div>

                        <div class="form-group col-md-12">
                            <label for="firstName" class="lab1">Imie</label>
                            <input type="text" name="firstName" class="form-control" id="firstName" placeholder="Imię"
                                   value={{$user->firstName}}>
                        </div>

                        <div class="form-group col-md-12">
                            <label for="secondName" class="lab1">Nazwisko</label>
                            <input type="text" name="secondName" class="form-control" id="secondName"
                                   placeholder="Nazwisko" value={{$user->secondName}}>
                        </div>

                        <div class="form-group col-md-12">
                            <label for="phoneNumber" class="lab1">Numer telefonu</label>
                            <input type="text" name="phoneNumber" class="form-control" id="phoneNumber"
                                   placeholder="Numer telefonu" value={{$user->phoneNumber}}>
                        </div>

                        <div class="form-group col-md-12">
                            <div class="form-row mb-3">
                                <div class="col">
                                    <label for="citySelector" class="lab1">Miasto</label>
                                    <select id="citySelector" class="form-control selectpicker selectpicker1"
                                            data-live-search="true"
                                            data-style="btn-selection" name="city" id="city">

                                        @foreach($cities ?? '' as $city)
                                            <option class="city-choice"
                                                    data-tokens="{{ $city['city'] }}" {{$city['city'] == $user->city ? 'selected' : ''}}> {{ $city['city'] }} </option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                        </div>
                        <a href={{ route('user.dashboard') }} class="btn btn-warning" role="button">Powrot do profilu</a>
                        <input type="submit" class="btn btn-warning btn-alignr" value="Edytuj" role="button"/> 
                    </form>



                    @include('errors')
                </div>
            </div>
        </div>
    </section>

@endsection










