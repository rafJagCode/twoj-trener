@extends('app')
@section('title','Search trainer')
@section('trainer-dashboard-css')
<link href="{{ asset('/css/searchbar.css') }}" rel="stylesheet">
@endsection


@section('trainer-dashboard')
<div class="container1 ">
    <div class="wrap ">
        <div class="">
            <p class="text-bolder text-center">Wyszukaj Trenera</p>
        </div>
    </div>
    <div class="container2">
        <div class="wrap">
            <div class="search">
                <form action="{{ route('search.index') }}" method="POST" role="search">
                    {{ csrf_field() }}
                    <input type="text" class="searchTerm" name="q" placeholder="Wpisz czego szukasz "> <span class="input-group-btn">
                        <button type="submit" class="searchButton">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </form>
            </div>
        </div>
    </div>
    

</div>

@endsection


{{-- <div class="col-md-12">
                <div class="card">
                    <div class="row">
                    <div class="card-header">Wyszukaj</div>

                    <div class="card-body">
                    
                    
                                    
                        <form action="{{ route('search.index') }}" method="POST" role="search">
{{ csrf_field() }}
<div class="input-group">
    <input type="text" class="form-control" name="q" placeholder="Search users"> <span class="input-group-btn">
        <button type="submit" class="btn btn-default"> Szukaj </button>
    </span>
</div>
</form>

</div>
</div>
</div> --}}