$(document).ready(function(){
$('.four-card-sliders').slick({
	  dots: false,
	  infinite: false,
	  speed: 800,
	  slidesToShow: 2,
	  slidesToScroll: 1,
	  variableWidth: true,
	  infinite: true,
	  autoplay: false,
	  nextArrow: $('#next-slider').html(`<div class=" ms-auto px-0 d-flex justify-conttent-end align-items-center">
	                          <i class="d-inline-block icon-right-arr" />
				    </div>`),
	  prevArrow: "",
	  arrows: true,
	  
});
$('.three-card-slider').slick({
	  dots: false,
	  infinite: false,
	  speed: 800,
	  slidesToShow: 3,
	  slidesToScroll: 1,
	  variableWidth: false,
	  infinite: true,
	  autoplay: false,
	  nextArrow: $('#next-slider').html(`<div class=" ms-auto px-0 d-flex justify-conttent-end align-items-center">
	                          <i class="d-inline-block icon-right-arr" />
				    </div>`),
	  prevArrow: "",
	  arrows: false,
	  responsive: [ {
		      breakpoint: 500,
		      settings: {
			            slidesToShow: 1,
			            slidesToScroll: 1,
			            arrows: false,
			            autoplay: true,
			            centerMode: true,
			            autoplaySpeed: 10000,
			            infinite: false,
			            variableWidth: false,
			            
			          }
		    },{
			        breakpoint: 1024,
			        settings: {
					      slidesToShow: 1,
					      slidesToScroll: 1,
					      infinite: false,
					      dots: false,
					      arrows: false
					    }
			      }
		      
		    ]
});
});
