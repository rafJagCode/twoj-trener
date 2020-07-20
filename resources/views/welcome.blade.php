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
@include('layout')

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