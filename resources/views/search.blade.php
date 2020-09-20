@extends('layout')
@section('additional-css')
    <link href="{{ asset('/css/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/additional.css') }}" rel="stylesheet">
@endsection

@section('content')
    <section class="featured popular portfolio freelancers rec-pro-1">
        <div class="container-fluid">
            <div id="wrapper">

                @if(count($matchedTrainers))
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Imię</th>
                                <th>Nazwisko</th>
                                <th>Email</th>
                                <th>Miasto</th>
                            </tr>
                        </thead>
                        <tbody id="myTable">
                            @foreach ($matchedTrainers as $trainer)
                                <tr onclick="window.location='/user/{{$trainer->id}}';">
                                    <td>{{ $trainer->firstName }}</td>
                                    <td>{{ $trainer->secondName }}</td>
                                    <td>{{ $trainer->email }}</td>
                                    <td>{{ $trainer->city }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <h3 class="text-center">Nie znaleziono żadnego trenera.</h3>
                @endif
            </div>
        </div>
    </section>
    
@endsection
