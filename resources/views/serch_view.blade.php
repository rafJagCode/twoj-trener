@extends('app')
@section('trainer-dashboard-business-card-css')
    <link href="{{ asset('/css/trainer_dashboard_business_card.css') }}" rel="stylesheet">
@endsection
<section id="home" class="section welcome-area bg-overlay overflow-hidden">

    <form action="{{route('user.search')}}" method="post">
        @csrf
<div class="hero-main">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="banner-inner">
                    <h1 class="title text-center">Znajdz swojego trenera</h1>
                </div>
            </div>
            <div class="col-12">
                <div class="banner-search-wrap">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tabs_1">
                            <div class="rld-main-search">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="rld-single-input left-icon">
                                            <input type="search"  name="city" placeholder="Miasto">
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-lg-6 col-md-6 wielkosc">
                                        <div class="rld-single-select">
                                            <select class="select single-select "  name="ocena">
                                                <option value="0">Zero gwiazdek</option>
                                                <option value="1">Jedna gwiazdka</option>
                                                <option value="2">Dwie gwiazdki</option>
                                                <option value="3">Trzy gwiazdki</option>
                                                <option value="4">Cztery gwiazdki</option>
                                                <option value="5">Pięć gwiazdek</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-lg-6 col-md-6 wielkosc" >
                                        <div class="rld-single-select">
                                            <select name="checkDiscyplin[]" class="select single-select" multiple data-live-search="true">
                                                @foreach($allDisciplines ?? '' as $discipline)
                                                <option value="{{$discipline->id}}">{{$discipline->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
 
                                    <div class="col-xl-2 col-lg-4 col-md-4">
                                        <button class="btn btn-yellow" type="submit" >
                                            <i class="text">Znajdż</i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  
                <div class="row text-center disciplines">
                    @foreach($allDisciplines ?? '' as $discipline)
                    <button  type="submit" class=" box" name="findCheck" value="{{$discipline->id}}">
                        <label class=" my-label text" for="{{ $discipline->name }}">
                            <div class=" my-label text">
                            <img class="discipline-icon  "
                            src="{{asset("/images/$discipline->name.png")}}"
                            alt="{{ $discipline->name }}">
                            </div>
                        
                                <p class="">{{ $discipline->name }}</p>
                        </label>

                        </button>
                    @endforeach
                </div>
                    
        
        </div>    
    </div>
</div>
</form>
</section>