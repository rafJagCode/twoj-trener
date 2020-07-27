<div id="grid_list">
    <!-- Start grid view content -->
    <div class="row" id="grid_view">
        @foreach($matchedTrainers as $user)
            <div class="item col-lg-6 col-md-6 col-xs-12 landscapes sale">
                <div class="project-single">
                    <div class="project-inner project-head">
                        <div class="homes">
                            <!-- homes img -->
                            <a href="{{ url('trainer', $user->id) }}" class="homes-img hover-effect">
                                @if($user->profileFeature() !== null)
                                    <div class="homes-tag button alt featured {{ $user->profileFeature()[1] }}">{{ $user->profileFeature()[0] }}</div>
                                @endif
                                <div class="homes-tag button sale rent"><i class="fa fa-heart-o"></i>
                                    <p>106</p>
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
                                <img src="{{ $user->profilePicture() }}" alt="zdjęcie trenera" class="img-responsive w-100">
                                <div class="overlay"></div>
                            </a>
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
    <!-- End grid view content -->

    <!-- Start list view content -->
    <div class="row featured portfolio-items" id="list_view">
        @foreach($matchedTrainers as $user)
            <div class="item col-lg-5 col-md-12 col-xs-12 landscapes sale pr-0 pb-0 mb-5">
                <div class="project-single mb-0 bb-0">
                    <div class="project-inner project-head">
                        <div class="homes">
                            <!-- homes img -->
                            <a href="{{ url('trainer', $user->id) }}" class="homes-img hover-effect">
                                @if($user->profileFeature() !== null)
                                    <div class="homes-tag button alt featured {{ $user->profileFeature()[1] }}">{{ $user->profileFeature()[0] }}</div>
                                @endif
                                <div class="homes-tag button sale rent"><i class="fa fa-heart-o"></i>
                                    <p>106</p>
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
                                <img src="{{ $user->profilePicture() }}" alt="zdjęcie trenera" class="img-responsive w-100">
                                <div class="overlay"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- homes content -->
            <div class="col-lg-7 col-md-12 homes-content pb-0 mb-44 mb-5">
                <!-- homes address -->
                <div class="enty">
                    <a href="{{ url('trainer', $user->id) }}"><h3 class="mb-4">{{ $user->firstName }} {{ $user->secondName }}</h3></a>
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
                </div>
                <!-- Price -->
                <div >
                    {{-- <ul class="starts text-left mb-0">
                        <li class="mt-3"><img src="images/icons/2.png" width="20" class="mr-2" alt=""> Restaurant</li>
                    </ul> --}}
                    <p><b>Rodzaje treningu:</b></p>
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
                </div>
            </div>
        @endforeach
    </div>
    <!-- End list view content -->
</div>