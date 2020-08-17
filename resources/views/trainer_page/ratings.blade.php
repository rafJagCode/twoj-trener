<div class="property-location mp">
    <h5>Statystyki opini trenera:</h5>
    <div class="review-content-wrap">
        <div class="review-content">
            <div class="review-rating-summary">
                <div class="review-rating-summary-inner">
                    <div class="stats-average__count">
                        <span class="stats-average__count-count">{{ $user->avgStars() }}</span>
                    </div>
                    <!-- end stats-average__count -->
                    <div class="stats-average__rating p-0">
                        <ul class="p-0 m-0 detail-list-rating">
                            @for ($i = 0; $i < floor($user->avgStars()); $i++)
                                <i class="fa fa-star"></i>
                            @endfor
                            @if ($user->avgStars() - floor($user->avgStars()) >= 0.5)
                                <i class="fa fa-star-half"></i>
                            @endif
                        </ul>
                    </div>
                    <p class="text-center mb-2">na 5</p>
                    <!-- end stats-average__rating -->
                </div>
                <!-- end review-rating-summary-inner -->
                <div class="course-rating-text">
                    <p class="course-rating-text__text">Ocena trenera.</p>
                </div>
                <!-- end course-rating-text -->
            </div>
            <!-- end review-rating-summary -->
            <div class="review-rating-widget">
                <div class="review-rating-rate">
                    <ul class="rate pl-00">
                        @foreach ($user->countStars()['ratings'] as $key => $item)
                        <li class="review-rating-rate__items">
                            <div class="review-rating-inner__item">
                                <div class="review-rating-rate__item-text detail-list-rating">
                                {{$item->stars}}<i class="fa fa-star"></i>
                                </div>
                                <div class="review-rating-rate__item-fill">
                                    <span class="review-rating-rate__item-fill__fill rating-fill-widthMYOWN" style="width: {{round(($item['amount'] / $user->countStars()['total']) * 100, 0)}}%;"></span>
                                </div>
                                <div class="review-rating-rate__item-percent-text">
                                    {{  round(($item['amount'] / $user->countStars()['total']) * 100, 0) . '%' }}
                                </div>
                            </div>
                        </li>
                        @endforeach
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
