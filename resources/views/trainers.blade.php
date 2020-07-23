@extends('layout')
@section('additional-css')
    {{-- <link href="{{ asset('/css/trainer_dashboard_business_card.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/searchresults.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('/css/additional.css') }}" rel="stylesheet">
@endsection

@section('content')
    {{-- @if($matchedTrainers->count() > 0) --}}
        <section class="listings-full-grid featured popular portfolio blog">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-12 blog-pots">
                        <!-- Block heading Start-->
                        <div class="block-heading">
                            <div class="row">
                                <div class="col-lg-6 col-md-5 col-2">
                                    <h4>
                                        <span class="hidden-sm-down">Lista trenerów</span>
                                    </h4>
                                </div>
                                <div class="col-lg-6 col-md-7 col-10 cod-pad mt-22">
                                    <div class="sorting-options float-right">
                                        <select class="sorting mb-3" name="sorting" id="sorting">
                                            <option value="alphabetUp" selected>Alfabetycznie - rosnąco</option>
                                            <option value="alphabetDown">Alfabetycznie - malejąco</option>
                                            <option value="quantityUp">Liczba ocen - rosnąco</option>
                                            <option value="quantityDown">Liczba ocen - malejąco</option>
                                            <option value="avgUp">Średnia ocena - rosnąco</option>
                                            <option value="avgDown">Średnia ocen - malejąco</option>
                                        </select>
                                        {{-- <a href="listings-full-list.html" class="change-view-btn lde"><i class="fa fa-th-list"></i></a>
                                        <a href="listings-full-grid.html" class="change-view-btn active-view-btn"><i class="fa fa-th-large"></i></a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Block heading end -->
                        <div class="row popular featured portfolio-items">
                            @foreach($matchedTrainers as $user)
                                <div class="item col-lg-4 col-md-6 col-xs-12 landscapes sale d-flex align-items-stretch">
                                    <div class="project-single">
                                        <div class="project-inner project-head">
                                            <div class="homes">
                                                <!-- homes img -->
                                                <a href="{{ url('trainer', $user->id) }}" class="homes-img hover-effect">
                                                    @if($user->profileFeature() !== null)
                                                        <div class="homes-tag button alt featured {{ $user->profileFeature()[1] }}">{{ $user->profileFeature()[0] }}</div>
                                                    @endif                                                
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

                                            <div class="footer">
                                            </div>   
                                            <span>
                                                @foreach ($user->disciplines()->get() as $discipline)
                                                        <img
                                                        class="discipline-icon"
                                                        src="{{ asset("/images/$discipline->name.png") }}"
                                                        alt="{{ $discipline->name }}"
                                                        data-toggle="popover"
                                                        data-trigger="hover"
                                                        title="{{ $discipline->name }}"
                                                        >
                                                @endforeach
                                            </span>

                                            {{-- </div> --}}
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                    <aside class="col-lg-3 col-md-12 car">
                        <div class="widget">
                            <form action="{{route('user.search')}}" method="post">
                                <!-- Search Fields -->
                                <div class="main-search-field pt-0">
                                    <h5 class="title">Wyszukaj trenera</h5>

                                        @csrf
                                        <div class="col-lg-12 no-pds mb-4">
                                            <div class="at-col-default-mar">
                                                <input class="at-input" type="search" name="city" placeholder="Wpisz miasto...">
                                            </div>
                                        </div>
                                    
                                </div>
                                <!-- Checkboxes -->
                                <div class="fl-wrap filter-tags">
                                    <h6>Rodzaje treningów</h6>
                                    @foreach($allDisciplines ?? '' as $discipline)
                                        <div class="filter-tags-wrap">
                                            <input class="mt-0" type="checkbox" name="disciplines[]" id="{{ $discipline->name }}" value="{{ $discipline->id }}">
                                            <label for="{{ $discipline->name }}">{{ $discipline->name }}</label>
                                            <img
                                                class="discipline-icon"
                                                src="{{asset("/images/$discipline->name.png")}}"
                                                alt="{{ $discipline->name }}"
                                            >
                                        </div>
                                    @endforeach
                                </div>
                                <div class="col-lg-12 no-pds">
                                    <div class="at-col-default-mar">
                                        <button class="btn btn-default hvr-bounce-to-right" type="submit">Szukaj</button>
                                    </div>
                                </div>
                            </form>
                        </div>   
                    </aside>
                </div>  

                {{-- <div class="row">
                    <div class="col-12 d-flex justify-content-left">
                        {{ $matchedTrainers->links() }} 
                    </div>
                </div> --}}
            
            </div>
        </section>
    {{-- @endif --}}
    <!-- END SECTION LISTINGs GRID -->
@endsection