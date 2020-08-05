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
@section('trainer-dashboard')
    <div class="content">
        <div class="title m-b-md">
            Laravel
        </div>
        <div>
            <form action="/search" method="get">
                <div class="input-group">
                    <input type="search" name="imie" class="form-control" placeholder="Imie">
                    <input type="search" name="nazwisko" class="form-control" placeholder="Nazwisko">
                    <div class="input-group-append">
                        <button class="btn btn-warning" type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>

        @if(count($users))
            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>Imię</th>
                    <th>Nazwisko</th>
                    <th>Email</th>
                    <th>Misto</th>
                </tr>
                </thead>
                <tbody id="myTable">
                @foreach ($users as $user)
                    <tr onclick="window.location='/user/{{$user->id}}';">
                        <td>{{ $user->firstName }}</td>
                        <td>{{ $user->secondName }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->city }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @else
            <p>Brak wyników</p>
        @endif
    </div>
@endsection
</body>
</html>
