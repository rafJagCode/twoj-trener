@extends('app')
@section('title','Twój Trener | Strona główna')
@section('trainer-dashboard-css')
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Asap:400,400i%7CMontserrat:600,800" rel="stylesheet">
    <!-- FONT AWESOME -->
    {{-- <link rel="stylesheet" href="{{ asset('css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}"> --}}
    <!-- ARCHIVES CSS -->
    {{-- <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/lightcase.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">--}}
    {{-- <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/menu.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}"> 
    {{-- <link href="{{ asset('/css/default.css') }}" rel="stylesheet" id="color"> --}}

    <link href="{{ asset('/css/trainer_dashboard_business_card.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/searchresults.css') }}" rel="stylesheet">
@endsection

@section('trainer-dashboard')

    {{-- tutaj domyslnie widok formularza, na razie na sztywno poprzedni do testowania --}}

    <div>
        <form action="{{route('user.search')}}" method="post">
            @csrf
            <div class="input-group">
                <div class="row text-center disciplines">
                    @foreach($allDisciplines ?? '' as $discipline)
                        <div class="discipline col-md-6 col-sm-12 text-left">
                            <div class="custom-control custom-checkbox ">
                                <input type="checkbox" class="custom-control-input my-checkbox"
                                       name="disciplines[]"
                                       id="{{ $discipline->name }}" value="{{$discipline->id}}">
                                <label class="custom-control-label my-label" for="{{ $discipline->name }}">
                                    <p>{{ $discipline->name }}</p> 
                                    <img
                                        class="discipline-icon"
                                        src="{{asset("/images/$discipline->name.png")}}"
                                        alt="{{ $discipline->name }}"
                                    >
                                </label>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="form-row mb-3 col-lg-6">
                    <div class="col">
                        <input type="search" name="city" class="form-control" placeholder="Miasto">
                    </div>
                    <div class="input-group-append flex-center">
                        <button class="btn btn-warning" type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    @if($matchedTrainers->count() > 0)

        {{-- tutaj domyslnie widok rezultatow wyszukiwania, na razie wynik dolaczony do tego widoku --}}

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
                    @foreach($matchedTrainers as $user)
                        <div class="item col-lg-4 col-md-6 col-xs-12 landscapes sale">
                            <div class="project-single">
                                <div class="project-inner project-head">
                                    <div class="homes">
                                        <!-- homes img -->
                                        <a href="{{ url('trainer', $user->id) }}" class="homes-img hover-effect">
                                            <div class="homes-tag button alt featured f1">Fetured</div>
                                            <div class="homes-tag button sale rent"><i class="fa fa-heart-o"></i>
                                                <p>163</p>
                                            </div>
                                            <div class="homes-price">
                                                <ul class="starts text-left mb-0">
                                                    @for ($i = 0; $i < floor($user->avgStars()); $i++)
                                                        <li class="mb-0">
                                                            <i class="fa fa-star"></i>
                                                        </li>
                                                    @endfor
                                                    @if ($user->avgStars() - floor($user->avgStars()) >= 0.5)
                                                        <li class="mb-0">
                                                            <i class="fa fa-star-half"></i>
                                                        </li>
                                                    @endif
                                                    <li class="ml-1">{{ $user->avgStars() }}</li>
                                                    <li class="ml-1">
                                                        ({{ count($user->ratings()->get()) }} {{ count($user->ratings()->get()) == 1 
                                                        ? 'ocena' 
                                                        : (((count($user->ratings()->get()) % 10 == 2 && count($user->ratings()->get()) != 12 && count($user->ratings()->get()) != 112)
                                                        || (count($user->ratings()->get()) % 10 == 3 && count($user->ratings()->get()) != 13 && count($user->ratings()->get()) != 113)
                                                        || (count($user->ratings()->get()) % 10 == 4 && count($user->ratings()->get()) != 14 && count($user->ratings()->get()) != 114))
                                                        ? 'oceny' : 'ocen') 
                                                        }})
                                                    </li>
                                                </ul>
                                            </div>
                                            <img src="{{ $user->profilePicture() }}" alt="zdjęcie trenera" class="img-responsive">
                                            <div class="overlay"></div>
                                        </a>
                                    </div>

                                    {{-- na razie zakomentowane, czy bedzie potrzebne?? --}}

                                    {{-- <div class="fr-grid-thumb">
                                        <a href="candidate-profile.html">
                                            <div class="overall-rate"><i class="fas fa-check"></i></div>
                                            <img src="images/freelancers/free-1.jpg" class="img-fluid mx-auto" alt="" />
                                        </a>
                                    </div> --}}
                                </div>
                                <!-- homes content -->
                                <div class="homes-content">
                                    <!-- homes address -->
                                    <a href="listing-details.html"><h3>{{ $user->firstName }} {{ $user->secondName }}</h3></a>
                                    <!-- homes List -->
                                    <ul class="homes-list clearfix">
                                        <li>
                                            <i class="fa fa-map-marker"></i>
                                            <span>{{ $user->city }}</span>
                                        </li>
                                        <li>
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                            <span>{{ $user->phoneNumber }}</span>
                                        </li>
                                        <li>
                                            <i class="fa fa-envelope" aria-hidden="true"></i>
                                            <span>{{ $user->email }}</span>
                                        </li>
                                    </ul>

                                    {{-- na razie zakomentowane, czy bedzie potrzebne?? --}}

                                    <div class="footer mt-3">
                                        <span>
                                            @foreach ($user->disciplines()->get() as $discipline)
                                                <img
                                                    class="discipline-icon"
                                                    src="{{ asset("/images/$discipline->name.png") }}"
                                                    alt="{{ $discipline->name }}"
                                                >
                                            @endforeach
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                        
                </div>  

                {{ $matchedTrainers->links() }} 
            
            </div>
        </section>
    @endif
    <!-- END SECTION LISTINGs GRID -->
@endsection