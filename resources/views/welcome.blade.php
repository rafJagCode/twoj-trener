<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
   {{--  Styles --}}
    <link href="{{ asset('/css/searchresults.css') }}" rel="stylesheet">

  
</head>
<body>
@extends('app')
@section('trainer-dashboard-business-card-css')
    <link href="{{ asset('/css/trainer_dashboard_business_card.css') }}" rel="stylesheet">
@endsection

@section('trainer-dashboard')
    <div class="content">
        <div>
            <form action="{{route('user.search')}}" method="post">
                @csrf
                <div class="input-group">
                    <div class="row text-center disciplines">
                        @foreach($allDisciplines ?? '' as $discipline)
                            <div class="discipline col-md-6 col-sm-12 text-left">
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input my-checkbox"
                                           name="disciplines[]"
                                           id="{{ $discipline->name }}" value="{{$discipline->id}}">
                                    <label class="custom-control-label my-label" for="{{ $discipline->name }}">
                                        <p>{{ $discipline->name }}</p> <img
                                            class="discipline-icon"
                                            src="{{asset("/images/$discipline->name.png")}}"
                                            alt="{{ $discipline->name }}"></label>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="form-row mb-3 col-lg-6">
                        <div class="col">
                            <input type="search" name="city" class="form-control" placeholder="Miasto">
                        </div>
                        <div class="input-group-append flex-center">
                            <button class="btn btn-warning" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        @if($matchedTrainers->count()!=0)
            @foreach($matchedTrainers as $user)
            <div class="row-cols-1 trainer-item ">
                <div class=" thumbnail">
                    <div class="col100">
                        <h2>
                            <a href="http://127.0.0.1:8000/trainer/{{$user->id}}" title="{{ $user-> firstName }} {{ $user-> secondName }}">{{ $user-> firstName }} {{ $user-> secondName }} </a>
                        </h2>
                    </div>
                    <div class="row">
                        <div class="col25">
                            <img src="{{url('/images/profile.jpg')}}" alt="brak zdjecia " class="pull-left  trainer-photo " style="height: 20px  width:20px borderiradius:50%">
                        </div>
                        <div class="col75">
                            <div class="row">
                                <div class="col100">
        
                                    <div class="text">
                                        Miasto: <strong>{{ $user -> city }}</strong>
                                    </div>
        
                                    <div class="col100 ">
                                        {{-- @foreach ($collection as $dyscipline) --}}
                                        <div class="text">
                                            <span class="dyscipline ">{{-- {{$dyscipline->name}} --}}</span>
        
                                        </div>
                                       {{--  @endforeach --}}
        
                                    </div>
        
        
                                </div>
        
                            </div>
                        </div>
        
        
                    </div>
        
        
        
                </div>
        
            </div>
            @endforeach
        @endif

    </div>
@endsection
</body>
</html>


{{-- <div class="row text-center">
    <div class="col-lg-12 ">
        <a href="http://127.0.0.1:8000/trainer/{{$trainer->id}}">
        <div class="alert alert-warning">
            <strong>Trenejro {{$trainer->firstName}} ! </strong>
        </div>
        </a>
    </div>
</div> --}}