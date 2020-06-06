@foreach ($certyficates as $certyficateDescription => $certyficateLink)
    <section type="button" class="certyficates trainer-page-section" data-toggle="modal" data-target="#closeup">
        <img src="{{$certyficateLink}}" alt="{{$certyficateDescription}}" class="certyficate-photo">
        <p class="certyficate-description">{{$certyficateDescription}}</p>
    </section>
@endforeach