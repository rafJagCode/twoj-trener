<!-- STAR HEADER SEARCH -->
<div class="blog-info details overview">
<h5 class="mb-4">Lokalizacja</h5>
<div id="map-container" class="fullwidth-home-map header-map google-maps pull-top map-leaflet-wrapper">
            <div id="map-leaflet"></div>
            <div id="hero-area" class="main-search-inner search-2">

                            <!-- Search Form -->
                            <div class="trip-search">
                                <form class="form">
                                    <!-- Form Lookin for -->
                                    <div class="form-group looking">
                                        <div class="first-select wide">
                                            <div class="main-search-input-item">
                                                <input type="text" placeholder="Wpisz miasto..." value="" />
                                            </div>
                                        </div>
                                    </div>
                                    <!--/ End Form Lookin for -->
                                    <!-- Form Location -->
                                    <div class="form-group location">
                                        <div class="nice-select form-control wide" tabindex="0"><span class="current"><i class="fa fa-map-marker"></i>Miasto</span>
                                            <ul class="list">
                                               
                                            </ul>
                                        </div>
                                    </div>
                                    <!--/ End Form Location -->
                                    <!-- Form Categories -->
                                    <div class="form-group categories">
                                        <div class="nice-select form-control wide" tabindex="0"><span class="current"><i class="fa fa-list" aria-hidden="true"></i>Dyscypliny</span>
                                            <ul class="list">
                                                @foreach ($disciplines as $discipline)
                                                    <li data-value="2" class="option">{{ $discipline->name }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                    <!--/ End Form Categories -->
                                    <!-- Form Button -->
                                    <div class="form-group button">
                                        <button type="submit" class="btn">Wyszukaj</button>
                                    </div>
                                    <!--/ End Form Button -->
                                </form>
                            </div>
                            <!--/ End Search Form -->

            </div>
        </div>
        </div>
        <!-- END HEADER SEARCH -->