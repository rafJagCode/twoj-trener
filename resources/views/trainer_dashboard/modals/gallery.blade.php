
@section('trainer-dashboard-gallery-js')
    <script type="text/javascript">
        let src;
        let displayedImg;
        $('#description-modal').on("show.bs.modal", ()=>{
            $("body").css("overflow", "hidden");
        });
        $('#description-modal').on("hide.bs.modal", ()=>{
            $("body").css("overflow", "auto");
        });
        $('#business-card-modal').on("show.bs.modal", ()=>{
            $("body").css("overflow", "hidden");
        });
        $('#business-card-modal').on("hide.bs.modal", ()=>{
            $("body").css("overflow", "auto");
        });
        $('#galery-modal').on("show.bs.modal", ()=>{
            $("body").css("overflow", "hidden");
        });
        $('#galery-modal').on("hide.bs.modal", ()=>{
            $("body").css("overflow", "auto");
        });
        $('#image-gallery').on("show.bs.modal", ()=>{
            $("body").css("overflow", "hidden");
        })
        $('#image-gallery').on("hide.bs.modal", ()=>{
            $("body").css("overflow", "auto");
        });
        $(".show-photo").click((event) => {
            let clickedBtn = $(event.target);
            displayedImg = clickedBtn.parents('.photo-link').find('.trainers-photo');
            src = displayedImg.attr("src");
            $("#big-photo").attr("src", src);
        });
        $('.gallery-arrow-right').click(() => {
            let lastPhoto = $('.photo-link').last().find('.trainers-photo');
            if (displayedImg.is(lastPhoto)){
                displayedImg = $('.photo-link').first().find('.trainers-photo');
            }
            else {
                displayedImg = displayedImg.closest('.photo-link').next().find('.trainers-photo');
            }
            src = displayedImg.attr("src");
            $("#big-photo").attr("src", src);
        });
        $('.gallery-arrow-left').click(() => {
            let firstPhoto = $('.photo-link').first().find('.trainers-photo');
            if (displayedImg.is(firstPhoto)){
                displayedImg = $('.photo-link').last().find('.trainers-photo');
            }
            else {
                displayedImg = displayedImg.closest('.photo-link').prev().find('.trainers-photo');
            }
            src = displayedImg.attr("src");
            $("#big-photo").attr("src", src);
        });
        $('.upload-image-btn').click(()=>{
            $('.upload-image-input').trigger('click');
        });
        $('.add-photo').click(()=>{
            $('.upload-image-input').trigger('click');
        });
    </script>
@endsection

<div class="modal fade" id="galery-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title center" id="busines-card-modal-label">Galeria</h5>
                <a type="button" data-dismiss="modal"><i class="far fa-times-circle  fa-2x modal-icon"></i></a>
            </div>
            <div class="modal-body">
                <form action="{{ route('save.image') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="uploaded_photos container">
                        <div class="row justify-content-center">
                            @forelse($photos as $photo)
                                <div class="photo-link">
                                    <img class="trainers-photo col px-1 py-1" src="{{ asset('images/galery/'.$photo->name) }}"
                                         alt="img">
                                    <div class="image-controls">
                                        <a href="" class="show-photo mx-1" data-dismiss="modal" data-toggle="modal"
                                           data-target="#image-gallery"><i class="far fa-eye fa-2x modal-icon"></i></a>
                                        <a href="/deleteimage/{{$photo->id}}" class="delete-photo mx-1"><i
                                                class="far fa-trash-alt fa-2x modal-icon"></i></a>
                                    </div>
                                </div>
                            @empty
                                <div class="photo-link">
                                    <img class="trainers-photo col px-1 py-1" src="{{ asset('images/no_photo.png') }}"
                                         alt="brak zdjęć">
                                    <div class="image-controls">
                                        <div type="button" class="add-photo mx-1"><i
                                                class="fas fa-plus-circle fa-2x modal-icon"> </i></div>
                                    </div>
                                </div>
                            @endforelse


                            <button type="button" class="upload-image-btn btn btn-orange mt-2" style="width: 300px">Dodaj
                                zdjęcie
                            </button>
                            <input class="upload-image-input" style="display:none" type="file" name="image">
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij</button>
                        <button type="submit" class="btn btn-rounded btn-orange">Zapisz zmiany</button>
                    </div>
                </form>
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
