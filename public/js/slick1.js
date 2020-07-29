/*----------------------------------
    //------ SLICK CAROUSEL ------//
-----------------------------------*/
	$('.slick-lancers').slick({
		infinite: false,
		slidesToShow: 3,
		slidesToScroll: 1,
		dots: true,
		arrows: false,
		adaptiveHeight: true,
		autoplay: true,
		autoplaySpeed: 2500,
		infinite: true,
		pauseOnFocus: false,
    	pauseOnHover: true,
    	pauseOnDotsHover: false,
		responsive: [
		    {
		      breakpoint: 1292,
		      settings: {
		        dots: true,
		    	arrows: false
		      }
		    },
		    {
		      breakpoint: 993,
		      settings: {
		        slidesToShow: 2,
		        slidesToScroll: 2,
		        dots: true,
		    	arrows: false
		      }
		    },
		    {
		      breakpoint: 769,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1,
		        dots: true,
		   		arrows: false
		      }
		    }
	  ]
	});