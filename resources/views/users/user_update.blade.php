



@extends('app')

@section('title', 'trainer_dashboard')

@section('trainer-dashboard-css')
    <link href="{{ asset('/css/user_show.css') }}" rel="stylesheet">


@section('trainer-dashboard')

    <div class="container">
        <div class="row">

            <div class="col-md-7 ">

                <div class="list-group list-group-flush">
                    
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <img src="{{url('/images/profile.jpg')}}" alt="Image" width="200" height="200"/>
                    </div>

                    <form method="POST" action="{{ route('user.update', $user->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="form-row mb-3">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Imię" name="firstName"
                                       id="firstName"
                                       value="{{$user->firstName}}">
    
                            </div>
                        </div>
    
                        <div class="form-row mb-3">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Nazwisko" name="secondName"
                                       id="secondName" value="{{$user->secondName}}">
                            </div>
                        </div>
    
                        <div class="form-row mb-3">
                            <div class="col"> 
                                <input type="text" name="phoneNumber" id="phoneNumber"
                                       class="form-control" placeholder="Numer telefonu" value="{{$user->phoneNumber}}">
                            </div>
                        </div>
                    
    
    
                        <div class="form-row mb-3">
                            <div class="col">
                                <select id="citySelector" class="form-control selectpicker" data-live-search="true"
                                        data-style="btn-selection" name="city" id="city" value="{{$user->city}}">
    
                                    @foreach($cities ?? '' as $city)
                                        <option class="city-choice"
                                                data-tokens="{{ $city['city'] }}">{{ $city['city'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>


                        <button class="alert-warning" type="submit">Zapisz</button>
           
                  
                </form>
                </div>
            </div>

        </div>
    </div>

        

@endsection










