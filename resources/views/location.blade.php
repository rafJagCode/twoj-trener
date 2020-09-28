@extends('layout')
@section('additional-css')
    <link href="{{ asset('/css/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/additional.css') }}" rel="stylesheet">

    <link href="{{ asset('/css/leaflet.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/leaflet.markercluster.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/leaflet.markercluster.default.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/leaflet-gesture-handling.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/maps.css') }}" rel="stylesheet">
    
@endsection

@section('scripts')
    <script src="{{ asset('/js/leaflet.js') }}"></script>
    <script src="{{ asset('/js/script.js') }}"></script>
    <script src="{{ asset('/js/leaflet-gesture-handling.min.js') }}"></script>
    <script src="{{ asset('/js/leaflet-providers.js') }}"></script>
    <script src="{{ asset('/js/leaflet.markercluster.js') }}"></script>
    <script src="{{ asset('/js/map-style3.js') }}"></script>
@endsection

@section('content')
    <div id="map-container" class="fullwidth-home-map header-map google-maps pull-top map-leaflet-wrapper">
            <div id="map-leaflet"></div>
            <div id="hero-area" class="main-search-inner search-2">

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Search Form -->
                            <div class="trip-search">
                                <form class="form">
                                    <!-- Form Lookin for -->
                                    <div class="form-group looking">
                                        <div class="first-select wide">
                                            <div class="main-search-input-item">
                                                <input type="text" placeholder="Czego szukasz?" value="" />
                                            </div>
                                        </div>
                                    </div>
                                    <!--/ End Form Lookin for -->
                                    <!-- Form Location -->
                                    <div class="form-group location">
                                        <div class="nice-select form-control wide" tabindex="0"><span class="current"><i class="fa fa-map-marker"></i>Lokalizacja</span>
                                            
                                            @if (count($cities))
                                                <ul class="list">
                                                    @foreach($cities as $city)
                                                        <li class="option">{{ $city }}</li>
                                                    @endforeach
                                                </ul>

                                            @else
                                                <p>Nie znaleziono miast</p>

                                            @endif
                                        </div>
                                    </div>
                                    <!--/ End Form Location -->
                                    <!-- Form Categories -->
                                    <div class="form-group categories">
                                        <div class="nice-select form-control wide" tabindex="0"><span class="current"><i class="fa fa-list" aria-hidden="true"></i>Dyscypliny</span>
                                            
                                            @if (count($dysciplines))
                                                <ul class="list">
                                                    @foreach($dysciplines as $disc)
                                                        <li class="option">{{ $disc->name }}</li>
                                                    @endforeach
                                                </ul>

                                            @else
                                                <p>Nie znaleziono dyscyplin</p>

                                            @endif
                                        </div>
                                    </div>
                                    <!--/ End Form Categories -->
                                    <!-- Form Button -->
                                    <div class="form-group button">
                                        <button type="submit" class="btn">Szukaj</button>
                                    </div>
                                    <!--/ End Form Button -->
                                </form>
                            </div>
                            <!--/ End Search Form -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection


