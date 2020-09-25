<div class="sidebar widget-boxed mt-33">
    <div class="widget-boxed-header">
        <h4><i class="far fa-user pr-3"></i>Informacje</h4>
    </div>
    <div class="widget-boxed-body">
        <div class="sidebar-widget author-widget2">
            <div class="author-box clearfix">
                <img src="{{url('/images/avatars/'.$user->profilePicture)}}" alt="author-image" class="author__img">
                <h4 class="author__title">{{ $user->firstName }} {{ $user->secondName }}</h4>
                <p class="author__meta">Dołączono: {{ $user->created_at->format('d-m-Y') }}</p>
            </div>
            <ul class="author__contact">
                <li><span class="la la-map-marker"><i class="fa fa-map-marker"></i></span>{{ $user->city }}</li>
                <li><span class="la la-phone"><i class="fa fa-phone" aria-hidden="true"></i></span><a href="#">{{ $user->phoneNumber }}</a></li>
                <li><span class="la la-envelope-o"><i class="fa fa-envelope" aria-hidden="true"></i></span><a href="#">{{ $user->email }}</a></li>
            </ul>
            <ul class="author__link">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                <li><a href="#"><i class="fa fa-behance"></i></a></li>
            </ul>
            <mini-chat :receiver="{{ $user }}" :user="{{auth()->user() ? auth()->user() : 'undefined'}}"/>
        </div>
    </div>
</div>
