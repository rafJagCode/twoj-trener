<section class="reviews comments">
    <h3 class="mb-5">Opinie: {{ $ratings->count() }}</h3>
    <div class="row mb-5">
        <ul class="col-12 commented pl-0">
            @if ($ratings->count() == null)
                <h4 class="alert alert-danger text-center">Brak opinii, dla tego trenera!</h4>
            @endif
        </ul>
        <ul class="col-12 commented pl-0">
            @foreach($ratings as $rating)
                <li class="comm-inf">
                    <div class="col-md-2">
                        <img src="{{ url('/images/avatars/'.$user->profilePicture) }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-10 comments-info">
                        <div class="conra">
                            <h5 class="mb-2"></h5>
                            <div class="rating-box">
                                <div class="detail-list-rating">
                                    @for ($i = 0; $i < floor($rating->stars); $i++)
                                        <i class="fa fa-star"></i>
                                    @endfor
                                </div>
                            </div>
                        </div>
                        <p class="mb-4 rest">{{ $rating->created_at->format('d-m-Y') }}</p>
                        <p>{{ $rating->note }}</p>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</section>
