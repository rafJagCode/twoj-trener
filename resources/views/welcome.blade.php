<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
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
            @foreach($matchedTrainers as $trainer)
                <div class="row text-center">
                    <div class="col-lg-12 ">
                        <a href="http://127.0.0.1:8000/trainer/{{$trainer->id}}">
                        <div class="alert alert-warning">
                            <strong>Trenejro {{$trainer->firstName}} ! </strong>
                        </div>
                        </a>
                    </div>
                </div>
            @endforeach
        @endif

    </div>
@endsection
</body>
</html>
