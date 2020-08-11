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
                    </div>
                    <a href="#" class="detail-rating-count">{{ $user->avgStars() }}</a>
                    <a href="#" class="detail-rating-count">
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
