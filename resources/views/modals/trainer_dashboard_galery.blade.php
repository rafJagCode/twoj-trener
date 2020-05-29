<div class="modal fade" id="galery-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title center" id="busines-card-modal-label">Galeria</h5>
                <a type="button" data-dismiss="modal"><i class="far fa-times-circle  fa-2x modal-icon"></i></a>
            </div>
            <div class="modal-body">
                <div class="uploaded_photos container">
                    <p class="orange-text text-center">Zdjęcia które dodałeś</p>
                    <div class="row justify-content-center">
                        @forelse($photos as $photoDescription => $photoSrc)
                            <a class="photo-link" href="{{ $photoSrc }}" data-dismiss="modal" data-toggle="modal"
                                data-target="#image-gallery">
                                <img class="trainers-photo img-thumbnail col px-1 py-1" src="{{ $photoSrc }}"
                                    alt="{{ $photoDescription }}">
                            </a>
                        @empty
                            <p>Nie dodałeś żadnych zdjęć</p>
                        @endforelse
                    </div>
                </div>
            </div>


            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij</button>
                <button type="submit" class="btn btn-rounded btn-orange">Zapisz zmiany</button>
            </div>
        </div>
    </div>
</div>

<div id="image-gallery" class="modal">
    <div class="modal-content photo-preview">
        <img id="big-photo" src="">
        <a type="button" class="gallery-arrow-left"><i class="fas fa-chevron-left fa-4x modal-icon"></i></a>
        <a type="button" class="gallery-arrow-right"><i class="fas fa-chevron-right fa-4x modal-icon"></i></a>
        <a type="button" class="close-preview" data-toggle="modal" data-target="#galery-modal" data-dismiss="modal"> <i
                class="far fa-times-circle  fa-3x modal-icon"></i></a>
    </div>
</div>
