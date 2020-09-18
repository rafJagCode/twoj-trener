@extends('layout')

@section('title', 'trainer_page')

@section('head')
    <link href="{{ asset('/css/trainer_page.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/leaflet.css') }}" rel="stylesheet">
@endsection 
@section('scripts')
    <script src="{{ asset('/js/leaflet.js') }}"></script>

    <script type="text/javascript">
        let bigPhoto = $('#big-photo');
        let src;
        $('.certyficates').click((event)=>{
            let targetedCertificate = $(event.target).closest('.certyficates');
            src = targetedCertificate.find('img').attr('src');
            bigPhoto.attr('src', src);
        });
        $('.img-container').click((event)=>{
            let targetedPhoto = $(event.target).closest('.img-container').find('img');
            console.log(targetedPhoto);
            src = targetedPhoto.attr('src');
            console.log(src);
            bigPhoto.attr('src', src);
        });
    </script>

    <script type="text/javascript">
        var mymap = L.map('mapid').setView([51.505, -0.09], 13);

        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            maxZoom: 18,
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1,
            accessToken: 'your.mapbox.access.token'
        }).addTo(mymap);
    </script>

    
@endsection

@section('content')
    <section class="listing blog details">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 blog-pots">
                    <!-- Block heading end -->
                    <div class="row">
                        <div class="col-md-12">
                            @include('trainer_page.introduction')
                            <!-- main slider carousel items -->
                            @include('trainer_page.gallery')
                            @include('trainer_page.description')
                            @include('trainer_page.location')
                        </div>
                    </div>
                    <!-- cars content -->
                    @include('trainer_page.disciplines')
                    @include('trainer_page.ratings')
                    <!-- START SECTION ASSIGNED AGENTS -->
                    @include('trainer_page.reviews')
                    <!-- END SECTION ASSIGNED AGENTS -->
                </div>
                <aside class="col-lg-4 col-md-12 car">
                    <div class="widget">
                        <!-- Start Agent Information -->
                        @include('trainer_page.seller_info')
                        <!-- End Agent Information -->
                        <!-- Start: Opening hour -->
                        @include('trainer_page.timetable')
                        <!-- End: Opening hour -->
                    </div>
                </aside>
            </div>
        </div>
    </section>
    <!-- END SECTION LISTING DETAIL -->
@endsection
