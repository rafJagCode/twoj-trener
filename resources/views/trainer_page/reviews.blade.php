<section class="reviews comments">
    <div class="row">
        <div class="col-md-6">
            <h3 class="mb-5">Opinie: {{ $ratings->count() }}</h3>
        </div>
        <div class="col-md-6">
            @guest
            @else
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#reviewModal">Dodaj opinie</a>
            @endguest
        </div>
    </div>
    <div class="clearfix"></div>
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
                        <p>{{ $rating->note }}</p>
                        <p class="mb-4 rest">{{ $rating->created_at->format('d-m-Y') }}</p>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
    <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="reviewModalLabel" id="reviewModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="reviewModal">Dodaj opinię</h4>
                    <button type="button" name="button" class="close" data-dismiss="modal" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @include('trainer_page.modals.leave_review')
                </div>
            </div>
        </div>
    </div>
</section>
