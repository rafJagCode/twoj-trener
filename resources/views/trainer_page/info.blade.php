<div class="informations">
    <div class="photo">
        <img src="{{asset('images/profile.jpg')}}" alt="profilowe" class="profile-img">
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
