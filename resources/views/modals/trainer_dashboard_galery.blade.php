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
                    <div class="row justify-content-center">
                        @forelse($photos as $photoDescription => $photoSrc)
                            <div class="photo-link">
                                <img class="trainers-photo col px-1 py-1" src="{{ $photoSrc }}" alt="{{ $photoDescription }}">
                                <div class="image-controls">
                                    <a href="" class="show-photo mx-1" data-dismiss="modal" data-toggle="modal" data-target="#image-gallery"><i class="far fa-eye fa-2x modal-icon"></i></a>
                                    <a href="" class="delete-photo mx-1"><i class="far fa-trash-alt fa-2x modal-icon"></i></a>
                                </div>
                            </div>
                        @empty
                        <div class="photo-link">
                            <img class="trainers-photo col px-1 py-1" src="{{ asset('images/no_photo.png') }}" alt="brak zdjęć">
                            <div class="image-controls">
                                <div type="button" class="add-photo mx-1"><i class="fas fa-plus-circle fa-2x modal-icon"></i></div>
                            </div>
                        </div>
                        @endforelse
                        <button class="upload-image-btn btn btn-orange mt-2" style="width: 300px">Dodaj zdjęcie</button>
                        <input class="upload-image-input" style="display:none" type="file">
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
