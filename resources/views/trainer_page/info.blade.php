<div class="informations">
    <div class="photo">
        <img src="{{url('/images/avatars/'.$user->profilePicture)}}" alt="profilowe" class="profile-img">

    </div>
    <div class="details">
        <p class="name">
            <span class="tooltip">ok</span>
            <i class="fas fa-user mx-1"></i>
            {{$user->firstName}} {{$user->secondName}}</p>
        <p class="location"><i class="fas fa-globe-europe mx-1"></i>{{$user->city}}</p>
        <p class="phone-number"><i class="fas fa-phone-alt mx-1"></i>{{$user->phoneNumber}}</p>
        <div class="disciplines">
            @foreach ($disciplines as $discipline)
            <div class="discipline-container">
                <img class="discipline-img" src="{{ asset("/images/$discipline->name.png") }}" alt="{{$discipline->name}}">
                <p class="discipline-tooltip">{{$discipline->name}}</p>
            </div>
            @endforeach
        </div>
    </div>
</div>

<!-- START SECTION LISTING DETAIL-->
<section class="listing blog details">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 blog-pots">
                <!-- Block heading end -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="detail-wrapper">
                            <div class="detail-wrapper-body">
                                <div class="listing-title-bar">
                                    <h3>{{ $user->firstName }} {{ $user->secondName }}</h3>
                                    <div class="mt-3">
                                        <a href="#listing-location" class="listing-address">
                                            <i class="fa fa-map-marker pr-2 ti-location-pin mrg-r-5"></i> {{ $user->city }}
                                        </a>
                                        <div class="rating-box mt-3">
                                            <div class="detail-list-rating">
                                                @for ($i = 0; $i < floor($user->avgStars()); $i++)
                                                        <i class="fa fa-star"></i>
                                                @endfor
                                                @if ($user->avgStars() - floor($user->avgStars()) >= 0.5)
                                                        <i class="fa fa-star-half"></i>
                                                @endif
                                                <a class="detail-rating-count" href="#">{{ $user->avgStars() }}</a>
                                            </div>
                                            <a class="detail-rating-count" href="#">
                                                ({{ count($user->ratings()->get()) }} {{ count($user->ratings()->get()) == 1
                                                ? 'Ocena'
                                                : (((count($user->ratings()->get()) % 10 == 2 && count($user->ratings()->get()) != 12 && count($user->ratings()->get()) != 112)
                                                || (count($user->ratings()->get()) % 10 == 3 && count($user->ratings()->get()) != 13 && count($user->ratings()->get()) != 113)
                                                || (count($user->ratings()->get()) % 10 == 4 && count($user->ratings()->get()) != 14 && count($user->ratings()->get()) != 114))
                                                ? 'Oceny' : 'Ocen')
                                                }})
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- main slider carousel items -->
                        <div id="listingDetailsSlider" class="carousel listing-details-sliders slide mb-30">
                            <h5 class="mb-4">Gallery</h5>
                            <div class="carousel-inner">
                                <div class="active item carousel-item" data-slide-number="0">
                                    <img src="images/hotels/5.jpg" class="img-fluid" alt="slider-listing">
                                </div>
                                <div class="item carousel-item" data-slide-number="1">
                                    <img src="images/hotels/2.jpeg" class="img-fluid" alt="slider-listing">
                                </div>
                                <div class="item carousel-item" data-slide-number="2">
                                    <img src="images/hotels/3.jpeg" class="img-fluid" alt="slider-listing">
                                </div>
                                <div class="item carousel-item" data-slide-number="4">
                                    <img src="images/hotels/4.jpeg" class="img-fluid" alt="slider-listing">
                                </div>
                                <div class="item carousel-item" data-slide-number="5">
                                    <img src="images/hotels/1.jpeg" class="img-fluid" alt="slider-listing">
                                </div>

                                <a class="carousel-control left" href="#listingDetailsSlider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                                <a class="carousel-control right" href="#listingDetailsSlider" data-slide="next"><i class="fa fa-angle-right"></i></a>

                            </div>
                            <!-- main slider carousel nav controls -->
                            <ul class="carousel-indicators smail-listing list-inline nav nav-justified mr-0">
                                <li class="list-inline-item active">
                                    <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#listingDetailsSlider">
                                        <img src="images/hotels/5.jpg" class="img-fluid" alt="listing-small">
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a id="carousel-selector-1" data-slide-to="1" data-target="#listingDetailsSlider">
                                        <img src="images/hotels/2.jpeg" class="img-fluid" alt="listing-small">
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a id="carousel-selector-2" data-slide-to="2" data-target="#listingDetailsSlider">
                                        <img src="images/hotels/3.jpeg" class="img-fluid" alt="listing-small">
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a id="carousel-selector-3" data-slide-to="3" data-target="#listingDetailsSlider">
                                        <img src="images/hotels/4.jpeg" class="img-fluid" alt="listing-small">
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a id="carousel-selector-4" data-slide-to="4" data-target="#listingDetailsSlider">
                                        <img src="images/hotels/1.jpeg" class="img-fluid" alt="listing-small">
                                    </a>
                                </li>
                            </ul>
                            <!-- main slider carousel items -->
                        </div>
                        <div class="blog-info details overview">
                            <h5 class="mb-4">O sobie</h5>
                            <p class="mb-3">{{ $user->description }}</p>
                        </div>
                    </div>
                </div>
                <!-- cars content -->
                <div class="homes-content details amenities">
                    <!-- title -->
                    <h5 class="mb-4">Dyscypliny</h5>
                    <!-- cars List -->
                    <div class="ameneniti">
                        <ul class="homes-list amen clearfix">
                            <li>
                                <i class="fa fa-check-square mr-2" aria-hidden="true"></i>
                                <span>Elevator in building</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="property-location mp">
                    <h5>Customer feedback</h5>
                    <div class="review-content-wrap">
                        <div class="review-content">
                            <div class="review-rating-summary">
                                <div class="review-rating-summary-inner">
                                    <div class="stats-average__count">
                                        <span class="stats-average__count-count">4.6</span>
                                    </div>
                                    <!-- end stats-average__count -->
                                    <div class="stats-average__rating p-0">
                                        <ul class="p-0 m-0">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <p class="text-center mb-2">out of 5.0</p>
                                    <!-- end stats-average__rating -->
                                </div>
                                <!-- end review-rating-summary-inner -->
                                <div class="course-rating-text">
                                    <p class="course-rating-text__text">Hotel Rating</p>
                                </div>
                                <!-- end course-rating-text -->
                            </div>
                            <!-- end review-rating-summary -->
                            <div class="review-rating-widget">
                                <div class="review-rating-rate">
                                    <ul class="rate pl-00">
                                        <li class="review-rating-rate__items">
                                            <div class="review-rating-inner__item">
                                                <div class="review-rating-rate__item-text">5 stars</div>
                                                <div class="review-rating-rate__item-fill">
                                                    <span class="review-rating-rate__item-fill__fill rating-fill-width1"></span>
                                                </div>
                                                <div class="review-rating-rate__item-percent-text">77 %</div>
                                            </div>
                                        </li>
                                        <li class="review-rating-rate__items">
                                            <div class="review-rating-inner__item">
                                                <div class="review-rating-rate__item-text">4 stars</div>
                                                <div class="review-rating-rate__item-fill">
                                                    <span class="review-rating-rate__item-fill__fill rating-fill-width2"></span>
                                                </div>
                                                <div class="review-rating-rate__item-percent-text">54 %</div>
                                            </div>
                                        </li>
                                        <li class="review-rating-rate__items">
                                            <div class="review-rating-inner__item">
                                                <div class="review-rating-rate__item-text">3 stars</div>
                                                <div class="review-rating-rate__item-fill">
                                                    <span class="review-rating-rate__item-fill__fill rating-fill-width3"></span>
                                                </div>
                                                <div class="review-rating-rate__item-percent-text">14 %</div>
                                            </div>
                                        </li>
                                        <li class="review-rating-rate__items">
                                            <div class="review-rating-inner__item">
                                                <div class="review-rating-rate__item-text">2 stars</div>
                                                <div class="review-rating-rate__item-fill">
                                                    <span class="review-rating-rate__item-fill__fill rating-fill-width4"></span>
                                                </div>
                                                <div class="review-rating-rate__item-percent-text">5 %</div>
                                            </div>
                                        </li>
                                        <li class="review-rating-rate__items">
                                            <div class="review-rating-inner__item">
                                                <div class="review-rating-rate__item-text">1 stars</div>
                                                <div class="review-rating-rate__item-fill">
                                                    <span class="review-rating-rate__item-fill__fill rating-fill-width5"></span>
                                                </div>
                                                <div class="review-rating-rate__item-percent-text">2 %</div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- end review-rating-rate -->
                            </div>
                            <!-- end review-rating-widget -->
                        </div>
                        <!-- end review-content -->
                    </div>
                    <!-- end review-content-wrap -->
                </div>
                <!-- START SECTION ASSIGNED AGENTS -->
                <section class="reviews comments">
                    <h3 class="mb-5">5 Reviews</h3>
                    <div class="row mb-5">
                        <ul class="col-12 commented pl-0">
                            <li class="comm-inf">
                                <div class="col-md-2">
                                    <img src="images/testimonials/ts-5.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="col-md-10 comments-info">
                                    <div class="conra">
                                        <h5 class="mb-2">Mary Smith</h5>
                                        <div class="rating-box">
                                            <div class="detail-list-rating mr-0">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mb-4 rest">May 30 2020</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras aliquam, quam congue dictum luctus, lacus magna congue ante, in finibus dui sapien eu dolor. Integer tincidunt suscipit erat, nec laoreet ipsum vestibulum sed.</p>
                                    <div class="rest"><img src="images/hotels/1.jpeg" class="img-fluid" alt=""></div>
                                </div>
                            </li>

                        </ul>
                    </div>
                    <div class="row">
                        <ul class="col-12 commented pl-0">
                            <li class="comm-inf">
                                <div class="col-md-2">
                                    <img src="images/testimonials/ts-4.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="col-md-10 comments-info">
                                    <div class="conra">
                                        <h5 class="mb-2">Abraham Tyron</h5>
                                        <div class="rating-box">
                                            <div class="detail-list-rating mr-0">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mb-4">june 1 2020</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras aliquam, quam congue dictum luctus, lacus magna congue ante, in finibus dui sapien eu dolor. Integer tincidunt suscipit erat, nec laoreet ipsum vestibulum sed.</p>
                                </div>
                            </li>

                        </ul>
                    </div>
                    <div class="row mt-5">
                        <ul class="col-12 commented mb-0 pl-0">
                            <li class="comm-inf">
                                <div class="col-md-2">
                                    <img src="images/testimonials/ts-3.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="col-md-10 comments-info">
                                    <div class="conra">
                                        <h5 class="mb-2">Lisa Williams</h5>
                                        <div class="rating-box">
                                            <div class="detail-list-rating mr-0">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mb-4">jul 12 2020</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras aliquam, quam congue dictum luctus, lacus magna congue ante, in finibus dui sapien eu dolor. Integer tincidunt suscipit erat, nec laoreet ipsum vestibulum sed.</p>
                                    <div class="resti">
                                        <div class="rest"><img src="images/hotels/4.jpeg" class="img-fluid" alt=""></div>
                                        <div class="rest"><img src="images/hotels/3.jpeg" class="img-fluid" alt=""></div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </section>
                <section class="reviews leve-comments details">
                    <div id="add-review" class="add-review-box">
                        <!-- Add Review -->
                        <h3 class="listing-desc-headline margin-bottom-20 mb-4">Add Review</h3>
                        <span class="leave-rating-title mb-3">Your rating for this listing</span>
                        <!-- Rating / Upload Button -->
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <!-- Leave Rating -->
                                <div class="clearfix"></div>
                                <div class="leave-rating margin-bottom-30 mr-2">
                                    <input type="radio" name="rating" id="rating-1" value="1" />
                                    <label for="rating-1" class="fa fa-star"></label>
                                    <input type="radio" name="rating" id="rating-2" value="2" />
                                    <label for="rating-2" class="fa fa-star"></label>
                                    <input type="radio" name="rating" id="rating-3" value="3" />
                                    <label for="rating-3" class="fa fa-star"></label>
                                    <input type="radio" name="rating" id="rating-4" value="4" />
                                    <label for="rating-4" class="fa fa-star"></label>
                                    <input type="radio" name="rating" id="rating-5" value="5" />
                                    <label for="rating-5" class="fa fa-star"></label>
                                </div>
                                <div class="clearfix">
                                    <p>0 / 5</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- Uplaod Photos -->
                                <div class="add-review-photos margin-bottom-30">
                                    <div class="photoUpload">
                                        <span><i class="sl sl-icon-arrow-up-circle"></i> Upload Photos</span>
                                        <input type="file" class="upload" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 data">
                                <form action="#">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" placeholder="First Name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" placeholder="Last Name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control" placeholder="Email" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <textarea class="form-control" id="exampleTextarea" rows="8" placeholder="Review" required></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-lg mt-2">Submit Review</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- END SECTION ASSIGNED AGENTS -->
            </div>
            <aside class="col-lg-4 col-md-12 car">
                <div class="widget">


                    <!-- Start Agent Information -->
                    <div class="sidebar widget-boxed mt-33 mt-5">
                        <div class="widget-boxed-header">
                            <h4><i class="far fa-user pr-3"></i>Seller Info</h4>
                        </div>
                        <div class="widget-boxed-body">
                            <div class="sidebar-widget author-widget2">
                                <div class="author-box clearfix">
                                    <img src="{{url('/images/avatars/'.$user->profilePicture)}}" alt="author-image" class="author__img">
                                    <h4 class="author__title">Jhonn Clark</h4>
                                    <p class="author__meta">Posted 3 days ago</p>
                                </div>
                                <ul class="author__contact">
                                    <li><span class="la la-map-marker"><i class="fa fa-map-marker"></i></span>302 Av Park, New York</li>
                                    <li><span class="la la-phone"><i class="fa fa-phone" aria-hidden="true"></i></span><a href="#">(234) 0200 17813</a></li>
                                    <li><span class="la la-envelope-o"><i class="fa fa-envelope" aria-hidden="true"></i></span><a href="#">jhonn@gmail.com</a></li>
                                </ul>
                                <ul class="author__link">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                </ul>
                                <div class="agent-contact-form-sidebar">
                                    <h4><i class="far fa-envelope pr-3"></i>Contact Seller</h4>
                                    <form name="contact_form" method="post" action="functions.php">
                                        <input type="text" id="fname" name="full_name" placeholder="Full Name" required />
                                        <input type="number" id="pnumber" name="phone_number" placeholder="Phone Number" required />
                                        <input type="email" id="emailid" name="email_address" placeholder="Email Address" required />
                                        <textarea placeholder="Message" name="message" required></textarea>
                                        <input type="submit" name="sendmessage" class="multiple-send-message" value="Submit Request" />
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Agent Information -->

                    <!-- Start: Opening hour -->
                    <div class="widget-boxed mt-5">
                        <div class="widget-boxed-header">
                            <h4><i class="fa fa-clock-o pr-3 padd-r-10"></i>Opening Hours</h4>
                        </div>
                        <div class="widget-boxed-body">
                            <div class="side-list">
                                <ul>
                                    <li class="pt-0">Monday <span>9 AM - 5 PM</span></li>
                                    <li>Tuesday <span>9 AM - 5 PM</span></li>
                                    <li>Wednesday <span>9 AM - 5 PM</span></li>
                                    <li>Thursday <span>9 AM - 5 PM</span></li>
                                    <li>Friday <span>9 AM - 5 PM</span></li>
                                    <li>Saturday <span>9 AM - 3 PM</span></li>
                                    <li>Sunday <span>Closed</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End: Opening hour -->



                </div>
            </aside>
        </div>
    </div>
</section>
<!-- END SECTION LISTING DETAIL -->
