@extends('app')

@section('title', 'trainer_page')

@section('trainer-page-css')
    <link href="{{ asset('/css/trainer_page.css') }}" rel="stylesheet">
@endsection

@section('trainer-page')
    <div class="trainer-page-wrapper">
        @include('trainer_page_info')
        @include('trainer_page_description')
        @include('trainer_page_gallery')
    </div>
@endsection