@extends('app')

@section('title', 'user_update')

@section('trainer-dashboard-css')

    <link href="{{ asset('/css/user_show.css') }}" rel="stylesheet">
@endsection

@section('trainer-dashboard')

    <div class="container">
        <div class="row">
            <div class="col-md-7 ">
                <div class="list-group list-group-flush">

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <img src="{{url('/images/profile.jpg')}}" alt="Image" width="200" height="200"/>
                    </div>

                    <form method="POST" class="form-user" action="{{ route('user.update', $user->id) }}"
                          enctype="multipart/form-data">
                        @csrf
                        @method('POST')

                        <div class="form-group">
                            <label for="firstName" class="lab1">Imie</label>
                            <input type="text" name="firstName" class="form-control" id="firstName" placeholder="Imię"
                                   value={{$user->firstName}}>
                        </div>

                        <div class="form-group">
                            <label for="secondName" class="lab1">Nazwisko</label>
                            <input type="text" name="secondName" class="form-control" id="secondName"
                                   placeholder="Nazwisko" value={{$user->secondName}}>
                        </div>

                        <div class="form-group">
                            <label for="phoneNumber" class="lab1">Numer telefonu</label>
                            <input type="text" name="phoneNumber" class="form-control" id="phoneNumber"
                                   placeholder="Numer telefonu" value={{$user->phoneNumber}}>
                        </div>


                        <div class="form-row mb-3">
                            <div class="col">
                                <label for="citySelector" class="lab1">Miasto</label>
                                <select id="citySelector" class="form-control selectpicker selectpicker1"
                                        data-live-search="true"
                                        data-style="btn-selection" name="city" id="city">

                                    @foreach($cities ?? '' as $city)
                                        <option class="city-choice"
                                                data-tokens="{{ $city['city'] }}">{{ $city['city'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                            <a class="btn btn-warning" href="{{ route('user.index', $user->id) }}"
                               role="button">Zapisz</a>
                    </form>
                </div>
            </div>

        </div>
    </div>

@endsection










