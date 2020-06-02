<div class="informations">
    <div class="photo">
        <img src="{{asset('images/profile.jpg')}}" alt="profilowe" class="profile-img">
    </div>
    <div class="details">
        <p class="name">John Smith</p>
        <p class="location">New York</p>
        <p class="phone-number">676 627 777</p>
        <div class="disciplines">
            @foreach ($disciplines as $discipline)
                <img class="discipline-img" src="{{ asset("/images/$discipline.png") }}" alt="{{$discipline}}">
            @endforeach
        </div>
    </div>
</div>