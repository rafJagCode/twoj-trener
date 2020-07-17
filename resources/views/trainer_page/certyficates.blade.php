
@foreach ($certificates as $certificate)
    <section type="button" class="certyficates trainer-page-section img-link" data-toggle="modal" data-target="#closeup">
        <i class="fas fa-search-plus fa-2x certificate-closeup-icon"></i>
        <img src="{{'http://127.0.0.1:8000/certificates/'.$certificate->name}}" alt="{{$certificate->name}}" class="certyficate-photo">
    </section>
@endforeach
