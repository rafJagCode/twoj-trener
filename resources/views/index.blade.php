@extends('layout')
{{-- @section('title','Twój Trener | Strona główna') --}}
@section('additional-css')
    <link href="{{ asset('/css/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/additional.css') }}" rel="stylesheet">
@endsection

@section('content')
    @yield('searcher')
    <!-- START SECTION LIST TRAINERS -->
    <div class="container">
        @include('index_listtrainers')
    </div>
    <!-- END SECTION LIST TRAINERS -->
    <!-- START SECTION TRAINERS SLIDER -->
    <section class="featured popular portfolio freelancers rec-pro-1">
        <div class="container-fluid">
            <div class="sec-title">
                <h2><span>Najlepsi </span>trenerzy</h2>
                <p>Sprawdź sam, wybierz i poznaj szczegóły.</p>
            </div>
            <div class="portfolio col-xl-12">
                <div class="slick-lancers">
                    @foreach($matchedTrainers as $user)
                        <div class="agents-grid">
                            <div class="landscapes pt-3 pr-3 pl-3">
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
                                                <h1></h1>        @if ($user->avgStars() - floor($user->avgStars()) >= 0.5)
                                                            <li class="mb-0">
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
                                </div>
                                <!-- homes content -->
                                <div class="homes-content">
                                    <!-- homes address -->
                                    <a href="{{ url('trainer', $user->id) }}"><h3>{{ $user->firstName }} {{ $user->secondName }}</h3></a>
                                    <!-- homes List -->
                                    <ul class="homes-list clearfix">
                                        <li>
                                            <i class="fa fa-map-marker"></i>
                                            <span>{{ $user->city }}</span>
                                        </li>
                                        <li>
                                            <i class="fitema fa-phone" aria-hidden="true"></i>
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
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </section>                                                 <i class="fa fa-star-half"></i>
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
                                </div>
                                <!-- homes content -->
                                <div class="homes-content">
                                    <!-- homes address -->
                                    <a href="{{ url('trainer', $user->id) }}"><h3>{{ $user->firstName }} {{ $user->secondName }}</h3></a>
                                    <!-- homes List -->
                                    <ul class="homes-list clearfix">
                                        <li>
                                            <i class="fa fa-map-marker"></i>
                                            <span>{{ $user->city }}</span>
                                        </li>
                                        <li>
                                            <i class="fitema fa-phone" aria-hidden="true"></i>
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
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION TRAINERS SLIDER -->
@endsection
