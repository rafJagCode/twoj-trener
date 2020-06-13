@section('trainer-page-gallery-js')
    <script type="text/javascript">
        let photos = @json($photos);
        let srcArray = [];
        let leftImg = $('.left-img img');
        let rightImg = $('.right-img img');
        let centralImg = $('.main-img img');
        let sideImages = $('.side-img');
        let arrowLeft = $('.arrow-left');
        let arrowRight = $('.arrow-right');
        let i=1;
        Object.keys(photos).forEach(function(key){
            srcArray.push(photos[key]);

        });
        let photosAmount = srcArray.length;
        if(photosAmount<3){
            $('.left-img').css('display', 'none');
            $('.right-img').css('display', 'none');
        }
        const changePhotos = ()=>{
            if(i==0) i+=photosAmount;
            leftImg.attr('src', 'http://127.0.0.1:8000/images/galery/'+srcArray[(i-1)%photosAmount].name);
            centralImg.attr('src', 'http://127.0.0.1:8000/images/galery/'+srcArray[i%photosAmount].name);
            rightImg.attr('src','http://127.0.0.1:8000/images/galery/'+srcArray[(i+1)%photosAmount].name);
        };
        const markPhotoIndicator = ()=>{
            let number = photosAmount-((i+2)%(photosAmount));
            $('.photo-indicator:nth-of-type('+number+')').toggleClass('marked-indicator');
        };
        const removeMarking = () =>{
            let number = photosAmount-((i+2)%(photosAmount));
            $('.photo-indicator:nth-of-type('+number+')').toggleClass('marked-indicator');
        };
        markPhotoIndicator();
        changePhotos();
        arrowLeft.click(()=>{
            removeMarking();
            i++;
            centralImg.animate({
                left: '-=300'
            }, 50).promise()
            .then(()=>{
                centralImg.css('left', '300px');
                changePhotos();
                markPhotoIndicator();
                centralImg.animate({
                left: '-=300'
                }, 50);
            });
            sideImages.animate({
                left: '-=200'
            }, 50).promise()
            .then(()=>{
                sideImages.css('left', '200px');
                sideImages.animate({
                left: '-=200'
                }, 50);
            });
        });
        arrowRight.click(()=>{
            removeMarking();
            i--;
            centralImg.animate({
                left: '+=300'
            }, 50).promise()
            .then(()=>{
                centralImg.css('left', '-300px');
                changePhotos();
                markPhotoIndicator();
                centralImg.animate({
                left: '+=300'
                }, 50);
            });
            sideImages.animate({
                left: '+=200'
            }, 50).promise()
            .then(()=>{
                sideImages.css('left', '-200px');
                sideImages.animate({
                left: '+=200'
                }, 50);
            });
        });
    </script>
@endsection
<section class="gallery trainer-page-section">
    <p class="gallery-title title">Galeria</p>
    <div class="images">
        <a type="button" class="trainer-page-arrow arrow-left"><i class="fas fa-chevron-left fa-4x"></i></a>

        <div class="img-container left-img" type="button" data-toggle="modal" data-target="#closeup">
            <img class="trainer-page-img side-img" src="">
            <div class="image-controls">
                <a href="" class="show-photo" data-dismiss="modal" data-toggle="modal" data-target="closeup"><i class="fas fa-search-plus fa-4x modal-icon"></i></a>
            </div>
        </div>
        <div class="img-container main-img mx-2" type="button" data-toggle="modal" data-target="#closeup">
            <img class="trainer-page-img central-img" src="" >
            <div class="image-controls">
                <a href="" class="show-photo" data-dismiss="modal" data-toggle="modal" data-target="closeup"><i class="fas fa-search-plus fa-4x modal-icon"></i></a>
            </div>
        </div>
        <div class="img-container right-img" type="button" data-toggle="modal" data-target="#closeup">
            <img class="trainer-page-img side-img" src="">
            <div class="image-controls">
                <a href="" class="show-photo" data-dismiss="modal" data-toggle="modal" data-target="closeup"><i class="fas fa-search-plus fa-4x modal-icon"></i></a>
            </div>
        </div>

        <a type="button" class="trainer-page-arrow arrow-right"><i class="fas fa-chevron-right fa-4x"></i></a>
    </div>
    <div class="photo-indicators">
        @foreach ($photos as $photo)
            <i class="fas fa-circle photo-indicator"></i>
        @endforeach
    </div>
</section>
