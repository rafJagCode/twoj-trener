@extends('app')
@section('title','Search trainer')
@section('trainer-dashboard-css')

<link href="{{ asset('/css/searchresults.css') }}" rel="stylesheet">
@endsection


@section('trainer-dashboard')

<div class="container ">
    <div class="card-header">Wyniki wyszukiwania</div>
</div>
<div class="container">
    @foreach ($wyniki as $user)
    <div class="row-cols-1 trainer-item ">
        <div class=" thumbnail">
            <div class="col100">
                <h2>
                    <a href="{{ route('search.show', $user->id) }}" title="{{ $user-> firstName }} {{ $user-> secondName }}">{{ $user-> firstName }} {{ $user-> secondName }} </a>
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







</div>
@endsection