@extends('layout')
@section('additional-css')
    <link href="{{ asset('/css/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/additional.css') }}" rel="stylesheet">

    <link href="{{ asset('/css/leaflet.css') }}" rel="stylesheet">
@endsection

@section('scripts')
    <script src="{{ asset('/js/leaflet.js') }}"></script>

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
    <section class="featured popular portfolio freelancers rec-pro-1">
        <div class="container-fluid">
            <div id="wrapper">
            
                <section class="contact-us">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <h3 class="mb-4">Skontaktuj się z nami</h3>
                        <form id="contactform" class="contact-form" name="contactform" method="post" novalidate>
                            <div id="success" class="successform">
                                <p class="alert alert-success font-weight-bold" role="alert">Twoja wiadomość została wysłana</p>
                            </div>
                            <div id="error" class="errorform">
                                <p>Twoja wiadomość nie została wysłana</p>
                            </div>
                            <div class="form-group">
                                <input type="text" required class="form-control input-custom input-full" name="name" placeholder="Imię">
                            </div>
                            <div class="form-group">
                                <input type="text" required class="form-control input-custom input-full" name="lastname" placeholder="Nazwisko">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control input-custom input-full" name="email" placeholder="E-mail">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control textarea-custom input-full" id="ccomment" name="message" required rows="8" placeholder="Wiadomość"></textarea>
                            </div>
                            <button type="submit" id="submit-contact" class="btn btn-primary btn-lg">Wyślij</button>
                        </form>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="our-lo property-location mb-0">
                            <h3 class="mb-4">Nasz adres</h3>
                            <div id="mapid"></div>
                        </div>
                    </div>
                </div>
                <div class="contact_us_details">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="c_details_item">
                                <div class="media">
                                    <div class="media-left">
                                        <i class="fa fa-map-marker"></i>
                                    </div>
                                    <div class="media-body">
                                        <p>Władysława Trylińskiego 16/12, 10-001 Olsztyn</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 email-area mt-44">
                            <div class="c_details_item">
                                <div class="media">
                                    <div class="media-left">
                                        <i class="fa fa-envelope"></i>
                                    </div>
                                    <div class="media-body">
                                        <a href="#">support@test.pl</a>
                                        <a href="#">info@test.com</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 phone-area mt-44">
                            <div class="c_details_item">
                                <div class="media">
                                    <div class="media-left">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="media-body">
                                        <a href="#">+ 333 444 555</a>
                                        <a href="#">+ 222 666 999</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

            </div>
        </div>
    </section>

@endsection


