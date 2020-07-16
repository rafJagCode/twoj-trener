@extends('app')
@section('title','Twój Trener | Strona główna')
@section('trainer-dashboard-css')
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Asap:400,400i%7CMontserrat:600,800" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="{{ asset('css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/lightcase.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link href="{{ asset('/css/default.css') }}" rel="stylesheet" id="color">
@endsection

@section('trainer-dashboard')
    <section class="listings-full-grid featured popular portfolio blog">
        <div class="container">
            <!-- Block heading Start-->
            <div class="block-heading">
                <div class="row">
                    <div class="col-lg-6 col-md-5 col-2">
                        <h4>
                        <span class="heading-icon">
                            <i class="fa fa-th-list"></i>
                            </span>
                            <span class="hidden-sm-down">Listings Grid</span>
                        </h4>
                    </div>
                    <div class="col-lg-6 col-md-7 col-10 cod-pad mt-22">
                        <div class="sorting-options">
                            <select class="sorting">
                                <option>Price: High to low</option>
                                <option>Price: Low to high</option>
                                <option>Sells: High to low</option>
                                <option>Sells: Low to high</option>
                            </select>
                            <a href="listings-full-list.html" class="change-view-btn lde"><i class="fa fa-th-list"></i></a>
                            <a href="listings-full-grid.html" class="change-view-btn active-view-btn"><i class="fa fa-th-large"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Block heading end -->
            <div class="row popular featured portfolio-items">
                <div class="item col-lg-4 col-md-6 col-xs-12 landscapes sale">
                    <div class="project-single">
                        <div class="project-inner project-head">
                            <div class="homes">
                                <!-- homes img -->
                                <a href="listing-details.html" class="homes-img hover-effect">
                                    <div class="homes-tag button alt featured f1">Fetured</div>
                                    <div class="homes-tag button sale rent"><i class="fa fa-heart-o"></i>
                                        <p>163</p>
                                    </div>
                                    <div class="homes-price">
                                        <ul class="starts text-left mb-0">
                                            <li class="mb-0"><i class="fa fa-star"></i>
                                            </li>
                                            <li class="mb-0"><i class="fa fa-star"></i>
                                            </li>
                                            <li class="mb-0"><i class="fa fa-star"></i>
                                            </li>
                                            <li class="mb-0"><i class="fa fa-star"></i>
                                            </li>
                                            <li class="mb-0"><i class="fa fa-star"></i>
                                            </li>
                                            <li class="ml-1">( 6 Reviews )</li>
                                        </ul>
                                    </div>
                                    <img src="{{ asset('images/profile.jpg') }}" alt="home-1" class="img-responsive">
                                    <div class="overlay"></div>
                                </a>
                            </div>
                            <div class="fr-grid-thumb">
                                <a href="candidate-profile.html">
                                    <div class="overall-rate"><i class="fas fa-check"></i></div>
                                    <img src="images/freelancers/free-1.jpg" class="img-fluid mx-auto" alt="" />
                                </a>
                            </div>
                        </div>
                        <!-- homes content -->
                        <div class="homes-content">
                            <!-- homes address -->
                            <a href="listing-details.html"><h3>Luxury Restaurant</h3></a>
                            <!-- homes List -->
                            <ul class="homes-list clearfix">
                                <li>
                                    <i class="fa fa-map-marker"></i>
                                    <span>New York City. U.S.A</span>
                                </li>
                                <li>
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <span>Call Us (+329) 336-7654</span>
                                </li>
                                <li>
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                    <span>Posted 2 Days ago</span>
                                </li>
                            </ul>
                            <div class="footer mt-3">
                                <a href="listing-details.html">
                                    <img src="images/icons/2.png" width="20" class="mr-2" alt=""> Restaurant
                                </a>
                                <span>
                            <i class="fas fa-lock-open"></i> Open Now
                        </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item col-lg-4 col-md-6 col-xs-12 people rent">
                    <div class="project-single">
                        <div class="project-inner project-head">
                            <div class="homes">
                                <!-- homes img -->
                                <a href="listing-details.html" class="homes-img hover-effect">
                                    <div class="homes-tag button alt featured f2">Popular</div>
                                    <div class="homes-tag button sale rent"><i class="fa fa-heart-o"></i>
                                        <p>202</p>
                                    </div>
                                    <div class="homes-price">
                                        <ul class="starts text-left mb-0">
                                            <li class="mb-0"><i class="fa fa-star"></i>
                                            </li>
                                            <li class="mb-0"><i class="fa fa-star"></i>
                                            </li>
                                            <li class="mb-0"><i class="fa fa-star"></i>
                                            </li>
                                            <li class="mb-0"><i class="fa fa-star"></i>
                                            </li>
                                            <li class="mb-0"><i class="fa fa-star-half"></i>
                                            </li>
                                            <li class="ml-1">( 3 Reviews )</li>
                                        </ul>
                                    </div>
                                    <img src="{{ asset('images/profile.jpg') }}" alt="home-1" class="img-responsive">
                                    <div class="overlay"></div>
                                </a>
                            </div>
                            <div class="fr-grid-thumb">
                                <a href="candidate-profile.html">
                                    <div class="overall-rate"><i class="fas fa-check"></i></div>
                                    <img src="images/freelancers/free-2.jpg" class="img-fluid mx-auto" alt="" />
                                </a>
                            </div>
                        </div>
                        <!-- homes content -->
                        <div class="homes-content">
                            <!-- homes address -->
                            <a href="listing-details.html"><h3>Gym in Miami</h3></a>
                            <!-- homes List -->
                            <ul class="homes-list clearfix">
                                <li>
                                    <i class="fa fa-map-marker"></i>
                                    <span>Miami City. U.S.A</span>
                                </li>
                                <li>
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <span>Call Us (+329) 336-7654</span>
                                </li>
                                <li>
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                    <span>Posted 6 Days ago</span>
                                </li>
                            </ul>
                            <div class="footer mt-3">
                                <a href="listing-details.html">
                                    <img src="images/icons/3.png" width="20" class="mr-2" alt=""> Fitness
                                </a>
                                <span>
                            <i class="fas fa-lock"></i> Closed Now
                        </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item col-lg-4 col-md-6 col-xs-12 people landscapes sale">
                    <div class="project-single">
                        <div class="project-inner project-head">
                            <div class="homes">
                                <!-- homes img -->
                                <a href="listing-details.html" class="homes-img hover-effect">
                                    <div class="homes-tag button alt featured f3">New</div>
                                    <div class="homes-tag button sale rent"><i class="fa fa-heart-o"></i>
                                        <p>412</p>
                                    </div>
                                    <div class="homes-price">
                                        <ul class="starts text-left mb-0">
                                            <li class="mb-0"><i class="fa fa-star"></i>
                                            </li>
                                            <li class="mb-0"><i class="fa fa-star"></i>
                                            </li>
                                            <li class="mb-0"><i class="fa fa-star"></i>
                                            </li>
                                            <li class="mb-0"><i class="fa fa-star"></i>
                                            </li>
                                            <li class="mb-0"><i class="fa fa-star"></i>
                                            </li>
                                            <li class="ml-1">( 9 Reviews )</li>
                                        </ul>
                                    </div>
                                    <img src="{{ asset('images/profile.jpg') }}" alt="home-1" class="img-responsive">
                                    <div class="overlay"></div>
                                </a>
                            </div>
                            <div class="fr-grid-thumb">
                                <a href="candidate-profile.html">
                                    <div class="overall-rate"><i class="fas fa-check"></i></div>
                                    <img src="images/freelancers/free-3.jpg" class="img-fluid mx-auto" alt="" />
                                </a>
                            </div>
                        </div>
                        <!-- homes content -->
                        <div class="homes-content">
                            <a href="listing-details.html"><h3>Cafe in Boston</h3></a>
                            <!-- homes List -->
                            <ul class="homes-list clearfix">
                                <li>
                                    <i class="fa fa-map-marker"></i>
                                    <span>Boston City. U.S.A</span>
                                </li>
                                <li>
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <span>Call Us (+329) 336-7654</span>
                                </li>
                                <li>
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                    <span>Posted 4 Days ago</span>
                                </li>
                            </ul>
                            <div class="footer mt-3">
                                <a href="listing-details.html">
                                    <img src="images/icons/4.png" width="20" class="mr-2" alt=""> Cafe
                                </a>
                                <span>
                            <i class="fas fa-lock-open"></i> Open Now
                        </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item col-lg-4 col-md-6 col-xs-12 people landscapes rent">
                    <div class="project-single">
                        <div class="project-inner project-head">
                            <div class="homes">
                                <!-- homes img -->
                                <a href="listing-details.html" class="homes-img hover-effect">
                                    <div class="homes-tag button alt featured f1">Fetured</div>
                                    <div class="homes-tag button sale rent"><i class="fa fa-heart-o"></i>
                                        <p>163</p>
                                    </div>
                                    <div class="homes-price">
                                        <ul class="starts text-left mb-0">
                                            <li class="mb-0"><i class="fa fa-star"></i>
                                            </li>
                                            <li class="mb-0"><i class="fa fa-star"></i>
                                            </li>
                                            <li class="mb-0"><i class="fa fa-star"></i>
                                            </li>
                                            <li class="mb-0"><i class="fa fa-star"></i>
                                            </li>
                                            <li class="mb-0"><i class="fa fa-star"></i>
                                            </li>
                                            <li class="ml-1">( 6 Reviews )</li>
                                        </ul>
                                    </div>
                                    <img src="{{ asset('images/profile.jpg') }}" alt="home-1" class="img-responsive">
                                    <div class="overlay"></div>
                                </a>
                            </div>
                            <div class="fr-grid-thumb">
                                <a href="candidate-profile.html">
                                    <div class="overall-rate"><i class="fas fa-check"></i></div>
                                    <img src="images/freelancers/free-4.jpg" class="img-fluid mx-auto" alt="" />
                                </a>
                            </div>
                        </div>
                        <!-- homes content -->
                        <div class="homes-content">
                            <!-- homes address -->
                            <a href="listing-details.html"><h3>Rent a Car in Texas</h3></a>
                            <!-- homes List -->
                            <ul class="homes-list clearfix">
                                <li>
                                    <i class="fa fa-map-marker"></i>
                                    <span>Houston City. U.S.A</span>
                                </li>
                                <li>
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <span>Call Us (+329) 336-7654</span>
                                </li>
                                <li>
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                    <span>Posted 7 Days ago</span>
                                </li>
                            </ul>
                            <div class="footer mt-3">
                                <a href="listing-details.html">
                                    <img src="images/icons/7.png" width="20" class="mr-2" alt=""> Rent a Car
                                </a>
                                <span>
                            <i class="fas fa-lock-open"></i> Open Now
                        </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item col-lg-4 col-md-6 col-xs-12 people sale">
                    <div class="project-single">
                        <div class="project-inner project-head">
                            <div class="homes">
                                <!-- homes img -->
                                <a href="listing-details.html" class="homes-img hover-effect">
                                    <div class="homes-tag button alt featured f2">Popular</div>
                                    <div class="homes-tag button sale rent"><i class="fa fa-heart-o"></i>
                                        <p>202</p>
                                    </div>
                                    <div class="homes-price">
                                        <ul class="starts text-left mb-0">
                                            <li class="mb-0"><i class="fa fa-star"></i>
                                            </li>
                                            <li class="mb-0"><i class="fa fa-star"></i>
                                            </li>
                                            <li class="mb-0"><i class="fa fa-star"></i>
                                            </li>
                                            <li class="mb-0"><i class="fa fa-star"></i>
                                            </li>
                                            <li class="mb-0"><i class="fa fa-star-half"></i>
                                            </li>
                                            <li class="ml-1">( 3 Reviews )</li>
                                        </ul>
                                    </div>
                                    <img src="{{ asset('images/profile.jpg') }}" alt="home-1" class="img-responsive">
                                    <div class="overlay"></div>
                                </a>
                            </div>
                            <div class="fr-grid-thumb">
                                <a href="candidate-profile.html">
                                    <div class="overall-rate"><i class="fas fa-check"></i></div>
                                    <img src="images/freelancers/free-5.jpg" class="img-fluid mx-auto" alt="" />
                                </a>
                            </div>
                        </div>
                        <!-- homes content -->
                        <div class="homes-content">
                            <!-- homes address -->
                            <a href="listing-details.html"><h3>Hotel in Punta Cana</h3></a>
                            <!-- homes List -->
                            <ul class="homes-list clearfix">
                                <li>
                                    <i class="fa fa-map-marker"></i>
                                    <span>Dominican Republic</span>
                                </li>
                                <li>
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <span>Call Us (+329) 336-7654</span>
                                </li>
                                <li>
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                    <span>Posted 11 Days ago</span>
                                </li>
                            </ul>
                            <div class="footer mt-3">
                                <a href="listing-details.html">
                                    <img src="images/icons/1.png" width="20" class="mr-2" alt=""> Hotel
                                </a>
                                <span>
                            <i class="fas fa-lock"></i> Closed Now
                        </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item col-lg-4 col-md-6 it2 col-xs-12 web rent">
                    <div class="project-single">
                        <div class="project-inner project-head">
                            <div class="homes">
                                <!-- homes img -->
                                <a href="listing-details.html" class="homes-img hover-effect">
                                    <div class="homes-tag button alt featured f3">New</div>
                                    <div class="homes-tag button sale rent"><i class="fa fa-heart-o"></i>
                                        <p>412</p>
                                    </div>
                                    <div class="homes-price">
                                        <ul class="starts text-left mb-0">
                                            <li class="mb-0"><i class="fa fa-star"></i>
                                            </li>
                                            <li class="mb-0"><i class="fa fa-star"></i>
                                            </li>
                                            <li class="mb-0"><i class="fa fa-star"></i>
                                            </li>
                                            <li class="mb-0"><i class="fa fa-star"></i>
                                            </li>
                                            <li class="mb-0"><i class="fa fa-star"></i>
                                            </li>
                                            <li class="ml-1">( 9 Reviews )</li>
                                        </ul>
                                    </div>
                                    <img src="{{ asset('images/profile.jpg') }}" alt="home-1" class="img-responsive">
                                    <div class="overlay"></div>
                                </a>
                            </div>
                            <div class="fr-grid-thumb">
                                <a href="candidate-profile.html">
                                    <div class="overall-rate"><i class="fas fa-check"></i></div>
                                    <img src="images/freelancers/free-6.jpg" class="img-fluid mx-auto" alt="" />
                                </a>
                            </div>
                        </div>
                        <!-- homes content -->
                        <div class="homes-content">
                            <a href="listing-details.html"><h3>Store in Los Angeles</h3></a>
                            <!-- homes List -->
                            <ul class="homes-list clearfix">
                                <li>
                                    <i class="fa fa-map-marker"></i>
                                    <span>Los Angeles. U.S.A</span>
                                </li>
                                <li>
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <span>Call Us (+329) 336-7654</span>
                                </li>
                                <li>
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                    <span>Posted 5 Days ago</span>
                                </li>
                            </ul>
                            <div class="footer mt-3">
                                <a href="listing-details.html">
                                    <img src="images/icons/8.png" width="17" class="mr-2" alt=""> Shopping
                                </a>
                                <span>
                            <i class="fas fa-lock-open"></i> Open Now
                        </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item col-lg-4 col-md-6 col-xs-12 landscapes sale">
                    <div class="project-single">
                        <div class="project-inner project-head">
                            <div class="homes">
                                <!-- homes img -->
                                <a href="listing-details.html" class="homes-img hover-effect">
                                    <div class="homes-tag button alt featured f1">Fetured</div>
                                    <div class="homes-tag button sale rent"><i class="fa fa-heart-o"></i>
                                        <p>163</p>
                                    </div>
                                    <div class="homes-price">
                                        <ul class="starts text-left mb-0">
                                            <li class="mb-0"><i class="fa fa-star"></i>
                                            </li>
                                            <li class="mb-0"><i class="fa fa-star"></i>
                                            </li>
                                            <li class="mb-0"><i class="fa fa-star"></i>
                                            </li>
                                            <li class="mb-0"><i class="fa fa-star"></i>
                                            </li>
                                            <li class="mb-0"><i class="fa fa-star"></i>
                                            </li>
                                            <li class="ml-1">( 6 Reviews )</li>
                                        </ul>
                                    </div>
                                    <img src="{{ asset('images/profile.jpg') }}" alt="home-1" class="img-responsive">
                                    <div class="overlay"></div>
                                </a>
                            </div>
                            <div class="fr-grid-thumb">
                                <a href="candidate-profile.html">
                                    <div class="overall-rate"><i class="fas fa-check"></i></div>
                                    <img src="images/freelancers/free-1.jpg" class="img-fluid mx-auto" alt="" />
                                </a>
                            </div>
                        </div>
                        <!-- homes content -->
                        <div class="homes-content">
                            <!-- homes address -->
                            <a href="listing-details.html"><h3>Luxury Restaurant</h3></a>
                            <!-- homes List -->
                            <ul class="homes-list clearfix">
                                <li>
                                    <i class="fa fa-map-marker"></i>
                                    <span>New York City. U.S.A</span>
                                </li>
                                <li>
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <span>Call Us (+329) 336-7654</span>
                                </li>
                                <li>
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                    <span>Posted 2 Days ago</span>
                                </li>
                            </ul>
                            <div class="footer mt-3">
                                <a href="listing-details.html">
                                    <img src="images/icons/2.png" width="20" class="mr-2" alt=""> Restaurant
                                </a>
                                <span>
                            <i class="fas fa-lock-open"></i> Open Now
                        </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item col-lg-4 col-md-6 col-xs-12 people rent">
                    <div class="project-single">
                        <div class="project-inner project-head">
                            <div class="homes">
                                <!-- homes img -->
                                <a href="listing-details.html" class="homes-img hover-effect">
                                    <div class="homes-tag button alt featured f2">Popular</div>
                                    <div class="homes-tag button sale rent"><i class="fa fa-heart-o"></i>
                                        <p>202</p>
                                    </div>
                                    <div class="homes-price">
                                        <ul class="starts text-left mb-0">
                                            <li class="mb-0"><i class="fa fa-star"></i>
                                            </li>
                                            <li class="mb-0"><i class="fa fa-star"></i>
                                            </li>
                                            <li class="mb-0"><i class="fa fa-star"></i>
                                            </li>
                                            <li class="mb-0"><i class="fa fa-star"></i>
                                            </li>
                                            <li class="mb-0"><i class="fa fa-star-half"></i>
                                            </li>
                                            <li class="ml-1">( 3 Reviews )</li>
                                        </ul>
                                    </div>
                                    <img src="{{ asset('images/profile.jpg') }}" alt="home-1" class="img-responsive">
                                    <div class="overlay"></div>
                                </a>
                            </div>
                            <div class="fr-grid-thumb">
                                <a href="candidate-profile.html">
                                    <div class="overall-rate"><i class="fas fa-check"></i></div>
                                    <img src="images/freelancers/free-2.jpg" class="img-fluid mx-auto" alt="" />
                                </a>
                            </div>
                        </div>
                        <!-- homes content -->
                        <div class="homes-content">
                            <!-- homes address -->
                            <a href="listing-details.html"><h3>Gym in Miami</h3></a>
                            <!-- homes List -->
                            <ul class="homes-list clearfix">
                                <li>
                                    <i class="fa fa-map-marker"></i>
                                    <span>Miami City. U.S.A</span>
                                </li>
                                <li>
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <span>Call Us (+329) 336-7654</span>
                                </li>
                                <li>
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                    <span>Posted 6 Days ago</span>
                                </li>
                            </ul>
                            <div class="footer mt-3">
                                <a href="listing-details.html">
                                    <img src="images/icons/3.png" width="20" class="mr-2" alt=""> Fitness
                                </a>
                                <span>
                            <i class="fas fa-lock"></i> Closed Now
                        </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item col-lg-4 col-md-6 col-xs-12 people landscapes sale">
                    <div class="project-single no-mb">
                        <div class="project-inner project-head">
                            <div class="homes">
                                <!-- homes img -->
                                <a href="listing-details.html" class="homes-img hover-effect">
                                    <div class="homes-tag button alt featured f3">New</div>
                                    <div class="homes-tag button sale rent"><i class="fa fa-heart-o"></i>
                                        <p>412</p>
                                    </div>
                                    <div class="homes-price">
                                        <ul class="starts text-left mb-0">
                                            <li class="mb-0"><i class="fa fa-star"></i>
                                            </li>
                                            <li class="mb-0"><i class="fa fa-star"></i>
                                            </li>
                                            <li class="mb-0"><i class="fa fa-star"></i>
                                            </li>
                                            <li class="mb-0"><i class="fa fa-star"></i>
                                            </li>
                                            <li class="mb-0"><i class="fa fa-star"></i>
                                            </li>
                                            <li class="ml-1">( 9 Reviews )</li>
                                        </ul>
                                    </div>
                                    <img src="{{ asset('images/profile.jpg') }}" alt="home-1" class="img-responsive">
                                    <div class="overlay"></div>
                                </a>
                            </div>
                            <div class="fr-grid-thumb">
                                <a href="candidate-profile.html">
                                    <div class="overall-rate"><i class="fas fa-check"></i></div>
                                    <img src="images/freelancers/free-3.jpg" class="img-fluid mx-auto" alt="" />
                                </a>
                            </div>
                        </div>
                        <!-- homes content -->
                        <div class="homes-content">
                            <a href="listing-details.html"><h3>Cafe in Boston</h3></a>
                            <!-- homes List -->
                            <ul class="homes-list clearfix">
                                <li>
                                    <i class="fa fa-map-marker"></i>
                                    <span>Boston City. U.S.A</span>
                                </li>
                                <li>
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <span>Call Us (+329) 336-7654</span>
                                </li>
                                <li>
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                    <span>Posted 4 Days ago</span>
                                </li>
                            </ul>
                            <div class="footer mt-3">
                                <a href="listing-details.html">
                                    <img src="images/icons/4.png" width="20" class="mr-2" alt=""> Cafe
                                </a>
                                <span>
                            <i class="fas fa-lock-open"></i> Open Now
                        </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <nav aria-label="..." class="pt-2">
                <ul class="pagination mt-0">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                    </li>
                    <li class="page-item active">
                        <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>
    <!-- END SECTION LISTINGs GRID -->
@endsection