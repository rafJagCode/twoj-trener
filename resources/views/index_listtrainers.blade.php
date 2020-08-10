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
                        <span class="hidden-sm-down">Lisa trenerów</span>
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
                        <a href="#" class="change-view-btn lde"><i class="fa fa-th-list"></i></a>
                        <a href="#" class="change-view-btn active-view-btn"><i class="fa fa-th-large"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Block heading end -->
            <div class="row popular featured portfolio-items">
                @foreach ($matchedTrainers as $user)
                <div class="item col-lg-4 col-md-6 col-xs-12 landscapes">
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
                            <div class="fr-grid-thumb">
                                <a href="candidate-profile.html">
                                    <div class="overall-rate"><i class="fas fa-check"></i></div>
                                    <img src="{{ $user->profilePicture() }}" class="img-fluid mx-auto" alt="" />
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
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                    <span>{{ $user->created_at->format('d-m-Y') }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
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
