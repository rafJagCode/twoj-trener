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
        var tileLayer = L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png',
    {
        attribution: false
    });

        var mymap = L.map('mapid',
            {
                zoomControl: true,
                layers: [tileLayer],
                maxZoom: 18,
                minZoom: 6
            })
            .setView([53.763914, 20.520403], 15);
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
