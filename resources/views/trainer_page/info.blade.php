<div class="informations">
    <div class="photo">
        <img src="{{asset('images/profile.jpg')}}" alt="profilowe" class="profile-img">
    </div>
    <div class="details">
        <p class="name">
            <span class="tooltip">ok</span>
            <i class="fas fa-user mx-1"></i>
            John Smith</p>
        <p class="location"><i class="fas fa-globe-europe mx-1"></i>New York</p>
        <p class="phone-number"><i class="fas fa-phone-alt mx-1"></i>676 627 777</p>
        <div class="disciplines">
            @foreach ($disciplines as $discipline)
            <div class="discipline-container">
                <img class="discipline-img" src="{{ asset("/images/$discipline.png") }}" alt="{{$discipline}}">
                <p class="discipline-tooltip">{{$discipline}}</p>
            </div>
            @endforeach
        </div>
    </div>
</div>