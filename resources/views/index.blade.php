@extends('layout')
{{-- @section('title','Twój Trener | Strona główna') --}}
@section('additional-css')
    <link href="{{ asset('/css/slick.css') }}" rel="stylesheet">

    {{-- <link href="{{ asset('/css/trainer_dashboard_business_card.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/searchresults.css') }}" rel="stylesheet"> --}}
@endsection

@section('content')
    <!-- START SECTION HOW IT WORKS -->
    <section class="how-it-works bg-white">
        <div class="container">
            <div class="sec-title">
                <h2><span>Jak do nas </span>Dołączyć</h2>
                <p>To naprawdę proste!</p>
            </div>
            <div class="row service-1">
                <article class="col-lg-4 col-md-6 col-xs-12 serv">
                    <div class="serv-flex">
                        <div class="art-1 img-13">
                            <img src="css/colors/icons/purple/15.png" alt="">
                            <h3>Załóż konto</h3>
                        </div>
                        <div class="service-text-p">
                            <p class="text-center">Niezależnie, czy jesteś trenerem, czy planujesz być jego podopiecznym/ą, Twoje konto umożliwi Ci dostęp do wszystkich funkcjonalności.</p>
                        </div>
                    </div>
                </article>
                <article class="col-lg-4 col-md-6 col-xs-12 serv">
                    <div class="serv-flex">
                        <div class="art-1 img-14">
                            <img src="css/colors/icons/purple/13.png" alt="">
                            <h3>Wyszukaj trenera</h3>
                        </div>
                        <div class="service-text-p">
                            <p class="text-center">Skorzystaj z naszej wyszukiwarki i znajdź odpowiedniego dla siebie trenera w swojej okolicy, który zaspokoi wszystkie Twoje wymagania.</p>
                        </div>
                    </div>
                </article>
                <article class="col-lg-4 col-md-6 col-xs-12 serv mb-0 pt">
                    <div class="serv-flex arrow">
                        <div class="art-1 img-15">
                            <img src="css/colors/icons/purple/3.png" alt="">
                            <h3>Zacznij trenować</h3>
                        </div>
                        <div class="service-text-p">
                            <p class="text-center">Wybierz odpowiedniego trenera i gotowe! Teraz ustal z nim szczegóły treningów oraz Twoje cele i trenuj. Przekonaj się jakie to szybkie, proste i wygodne.</p>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>
    <!-- END SECTION HOW IT WORKS -->
    
    <!-- START SECTION TRAINERS SLIDER -->
    <section class="featured popular portfolio freelancers rec-pro-1">
        <div class="container-fluid">
            <div class="sec-title">
                <h2><span>Najlepsi </span>trenerzy</h2>
                <p>Sprawdź sam, wybierz i poznaj szczegóły.</p>
            </div>
            <div class="portfolio col-xl-12">
                <div class="slick-lancers h-100">
                    @foreach($matchedTrainers as $user)
                        <div class="agents-grid h-100">                            
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