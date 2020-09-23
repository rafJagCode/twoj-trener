{{-- @section('trainer-page-gallery-js')
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
<div id="listingDetailsSlider" class="carousel listing-details-sliders slide mb-30">
    <h5 class="mb-4">Gallery</h5>
    <div class="carousel-inner">
        <div class="active item carousel-item" data-slide-number="0">
            <img src="images/hotels/5.jpg" class="img-fluid" alt="slider-listing">
        </div>
        <div class="item carousel-item" data-slide-number="1">
            <img src="images/hotels/2.jpeg" class="img-fluid" alt="slider-listing">
        </div>
        <div class="item carousel-item" data-slide-number="2">
            <img src="images/hotels/3.jpeg" class="img-fluid" alt="slider-listing">
        </div>
        <div class="item carousel-item" data-slide-number="4">
            <img src="images/hotels/4.jpeg" class="img-fluid" alt="slider-listing">
        </div>
        <div class="item carousel-item" data-slide-number="5">
            <img src="images/hotels/1.jpeg" class="img-fluid" alt="slider-listing">
        </div>

        <a class="carousel-control left" href="#listingDetailsSlider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
        <a class="carousel-control right" href="#listingDetailsSlider" data-slide="next"><i class="fa fa-angle-right"></i></a>

    </div>
    <!-- main slider carousel nav controls -->
    <ul class="carousel-indicators smail-listing list-inline nav nav-justified mr-0">
        <li class="list-inline-item active">
            <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#listingDetailsSlider">
                <img src="images/hotels/5.jpg" class="img-fluid" alt="listing-small">
            </a>
        </li>
        <li class="list-inline-item">
            <a id="carousel-selector-1" data-slide-to="1" data-target="#listingDetailsSlider">
                <img src="images/hotels/2.jpeg" class="img-fluid" alt="listing-small">
            </a>
        </li>
        <li class="list-inline-item">
            <a id="carousel-selector-2" data-slide-to="2" data-target="#listingDetailsSlider">
                <img src="images/hotels/3.jpeg" class="img-fluid" alt="listing-small">
            </a>
        </li>
        <li class="list-inline-item">
            <a id="carousel-selector-3" data-slide-to="3" data-target="#listingDetailsSlider">
                <img src="images/hotels/4.jpeg" class="img-fluid" alt="listing-small">
            </a>
        </li>
        <li class="list-inline-item">
            <a id="carousel-selector-4" data-slide-to="4" data-target="#listingDetailsSlider">
                <img src="images/hotels/1.jpeg" class="img-fluid" alt="listing-small">
            </a>
        </li>
    </ul>
    <!-- main slider carousel items -->
</div> --}}


<div id="listingDetailsSlider" class="carousel listing-details-sliders slide mb-30">
    <h5 class="mb-4">Gallery</h5>
    <div class="carousel-inner">
        <div class="active item carousel-item" data-slide-number="0">
            <img src="https://picsum.photos/100" class="img-fluid" alt="slider-listing">
        </div>
        <div class="item carousel-item" data-slide-number="1">
            <img src="https://picsum.photos/100" class="img-fluid" alt="slider-listing">
        </div>
        <div class="item carousel-item" data-slide-number="2">
            <img src="https://picsum.photos/100" class="img-fluid" alt="slider-listing">
        </div>
        <div class="item carousel-item" data-slide-number="4">
            <img src="https://picsum.photos/100" class="img-fluid" alt="slider-listing">
        </div>
        <div class="item carousel-item" data-slide-number="5">
            <img src="https://picsum.photos/100" class="img-fluid" alt="slider-listing">
        </div>

        <a class="carousel-control left" href="#listingDetailsSlider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
        <a class="carousel-control right" href="#listingDetailsSlider" data-slide="next"><i class="fa fa-angle-right"></i></a>

    </div>
    <!-- main slider carousel nav controls -->
    <ul class="carousel-indicators smail-listing list-inline nav nav-justified mr-0">
        <li class="list-inline-item active">
            <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#listingDetailsSlider">
                <img src="https://picsum.photos/100" class="img-fluid" alt="listing-small">
            </a>
        </li>
        <li class="list-inline-item">
            <a id="carousel-selector-1" data-slide-to="1" data-target="#listingDetailsSlider">
                <img src="https://picsum.photos/100" class="img-fluid" alt="listing-small">
            </a>
        </li>
        <li class="list-inline-item">
            <a id="carousel-selector-2" data-slide-to="2" data-target="#listingDetailsSlider">
                <img src="https://picsum.photos/100" class="img-fluid" alt="listing-small">
            </a>
        </li>
        <li class="list-inline-item">
            <a id="carousel-selector-3" data-slide-to="3" data-target="#listingDetailsSlider">
                <img src="https://picsum.photos/100" class="img-fluid" alt="listing-small">
            </a>
        </li>
        <li class="list-inline-item">
            <a id="carousel-selector-4" data-slide-to="4" data-target="#listingDetailsSlider">
                <img src="https://picsum.photos/100" class="img-fluid" alt="listing-small">
            </a>
        </li>
    </ul>
    <!-- main slider carousel items -->
</div>
