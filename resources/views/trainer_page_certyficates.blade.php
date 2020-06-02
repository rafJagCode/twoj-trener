@foreach ($certyficates as $certyficateDescription => $certyficateLink)
    <section class="certyficates trainer-page-section">
        <img src="{{$certyficateLink}}" alt="{{$certyficateDescription}}" class="certyficate-photo">
        <p class="certyficate-description">{{$certyficateDescription}}</p>
    </section>
@endforeach