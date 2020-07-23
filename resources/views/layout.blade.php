<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>Twoj-trener</title>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Asap:400,400i%7CMontserrat:600,800" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css')}}">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('css/menu.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('css/styles.css')}}">
    @yield('additional-css')
</head>
<body class="inner-pages">
<div id="wrapper" class="homepage-1">
   
        <!-- Header Container
        ================================================== -->
        <header id="header-container">
            <!-- Topbar -->
            <div class="header-top">
                <div class="container">
                    <div class="top-info hidden-sm-down">
                    </div>
                    <div class="top-social hidden-sm-down">
                        <div class="login-wrap">
                            <ul class="d-flex">
                                <li><a href="login.html"><i class="fa fa-user"></i> Login</a></li>
                                <li><a href="register.html"><i class="fa fa-sign-in"></i> Register</a></li>
                            </ul>
                        </div>
                        <div class="social-icons-header">
                            <div class="social-icons">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <!-- Topbar / End -->
            <!-- Header -->
            <div id="header">
                <div class="container">
                    <!-- Left Side Content -->
                    <div class="left-side">
                        <!-- Logo -->
                        <div id="logo">
                            <a href="index.html"><img src="images/logo-blue.svg" alt=""></a>
                        </div>
                        <!-- Mobile Navigation -->
                        <div class="mmenu-trigger">
                            <button class="hamburger hamburger--collapse" type="button">
                                <span class="hamburger-box">
							<span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                        <!-- Main Navigation -->
                        <nav id="navigation" class="style-1">
                            <ul id="responsive">
                                <li><a href="{{ url('') }}">Strona główna</a></li>
                                <li><a href="{{ url('trainers') }}">Trenerzy</a></li>
                                <li><a href="contact-us.html">Contact</a></li>
                            </ul>
                        </nav>
                        <div class="clearfix"></div>
                        <!-- Main Navigation / End -->
                    </div>
                    <!-- Left Side Content / End -->

                    <!-- Right Side Content / End -->
                    <div class="right-side hidden-lg-down">
                        <!-- Header Widget -->
                        <div class="header-widget">
                            <a href="add-listing.html" class="button border">Add Listing</a>
                        </div>
                        <!-- Header Widget / End -->
                    </div>
                    <!-- Right Side Content / End -->

                </div>
            </div>
            <!-- Header / End -->
        </header>
         <div class="clearfix"></div>
    




         <section class="content">
            <div class="container">
                @yield('content')
            </div>
        </section>
       





        <!-- START FOOTER -->
        <footer class="first-footer stickToBotton position-static">
            <div class="top-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="netabout">
                                <a href="index.html" class="logo">
                                    <img src="images/logo-blue.svg" alt="netcom">         <!-- miejsce na logo-->
                                </a>
                                <p>Twoj-trener: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum incidunt architecto soluta laboriosam, perspiciatis, aspernatur officiis esse.</p>
                            </div>
                            <div class="contactus">
                                <ul>
                                    <li>
                                        <div class="info">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            <p class="in-p">95 South Park Avenue, USA</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="info">
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                            <p class="in-p">+456 875 369 208</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="info">
                                            <i class="fa fa-envelope" aria-hidden="true"></i>
                                            <p class="in-p ti">support@directoryplus.com</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="widget quick-link clearfix">
                                <h3 class="widget-title">Quick Links</h3>
                                <div class="quick-links">
                                    <ul class="one-half mr-5">
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="listing-details.html">Contact</a></li>
                                    </ul>
                                    <ul class="one-half">
                                        <li><a href="blog-grid.html">Login</a></li>
                                        <li><a href="pricing-table.html">Register</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="widget">
                                <h3>Instagram</h3>              <!-- Tu powinny byc podpiete zdjecia, zadnych nie dodawalem dlatego nic nie ma -->
                                <ul class="photo">
                                    <li class="hover-effect">
                                        <figure>
                                            <a href="#"><img src="images/instagram/inst-1.jpg" alt=""></a>
                                        </figure>
                                    </li>
                                    <li class="hover-effect">
                                        <figure>
                                            <a href="#"><img src="images/instagram/inst-2.jpg" alt=""></a>
                                        </figure>
                                    </li>
                                    <li class="hover-effect">
                                        <figure>
                                            <a href="#"><img src="images/instagram/inst-3.jpg" alt=""></a>
                                        </figure>
                                    </li>
                                    <li class="hover-effect">
                                        <figure>
                                            <a href="#"><img src="images/instagram/inst-4.jpg" alt=""></a>
                                        </figure>
                                    </li>
                                    <li class="hover-effect">
                                        <figure>
                                            <a href="#"><img src="images/instagram/inst-5.jpg" alt=""></a>
                                        </figure>
                                    </li>
                                    <li class="hover-effect">
                                        <figure>
                                            <a href="#"><img src="images/instagram/inst-6.jpg" alt=""></a>
                                        </figure>
                                    </li>
                                    <li class="hover-effect mb-0">
                                        <figure>
                                            <a href="#"><img src="images/instagram/inst-7.jpg" alt=""></a>
                                        </figure>
                                    </li>
                                    <li class="hover-effect mb-0">
                                        <figure>
                                            <a href="#"><img src="images/instagram/inst-8.jpg" alt=""></a>
                                        </figure>
                                    </li>
                                    <li class="hover-effect mb-0">
                                        <figure>
                                            <a href="#"><img src="images/instagram/inst-9.jpg" alt=""></a>
                                        </figure>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="newsletters">
                                <h3>Newsletters</h3>
                                <p>Sign Up for Our Newsletter to get Latest Updates and Offers. Subscribe to receive news in your inbox.</p>
                            </div>
                            <form class="bloq-email mailchimp form-inline" method="post">
                                <label for="subscribeEmail" class="error"></label>
                                <div class="email">
                                    <input type="email" id="subscribeEmail" name="EMAIL" placeholder="Enter Your Email">
                                    <input type="submit" value="Subscribe">
                                    <p class="subscription-success"></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="second-footer">
                <div class="container">
                    <p>LastLevel. ©2020 All rights reserved. </p>
                    <ul class="netsocials">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </footer>

        <a data-scroll href="#wrapper" class="go-up"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
        <!-- END FOOTER -->

        <!-- START PRELOADER -->
        <div id="preloader">
            <div id="status">
                <div class="status-mes"></div>
            </div>
        </div>
        <!-- END PRELOADER -->

        <!-- ARCHIVES JS -->
        <script src="js/jquery.min.js"></script>
        <script src="js/mmenu.min.js"></script>
        <script src="js/mmenu.js"></script>
        <!-- MAIN JS -->
        <script src="js/script.js"></script>
        <!-- SLICK -->
        <script src="{{ asset('js/slick.min.js') }}"></script>
        <script src="{{ asset('js/slick1.js') }}"></script>

    </div>
    <!-- Wrapper / End -->
</body>

</html>

