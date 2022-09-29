(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);throw new Error("Cannot find module '"+o+"'")}var f=n[o]={exports:{}};t[o][0].call(f.exports,function(e){var n=t[o][1][e];return s(n?n:e)},f,f.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){
'use strict';

// Website wide scripts
$(window).on('load', function () {
  $('.sec-pd').last().addClass('last');
  $('.sec-sm-pd').last().addClass('last');


  setTimeout(function () {
    $(".loader").addClass("active");


    $('.data-scroll').each(function () {
      var top_of_element = $(this).offset().top;
      var bottom_of_element = $(this).offset().top + $(this).outerHeight();
      var bottom_of_screen = $(window).scrollTop() + $(window).innerHeight();
      var top_of_screen = $(window).scrollTop();

      if (bottom_of_screen > top_of_element && top_of_screen < bottom_of_element) {
        // the element is visible, do something
        $(this).css({
          "opacity": "1",
          "transform": "translateY(0)"
        });
      } else {
        // the element is not visible, do something else
      }
    });
  }, 1000);
});

$(window).on('scroll', function () {
  var scroll = $(".data-scroll").length;

  if (scroll > 0) {

    $('.data-scroll').each(function () {
      var top_of_element = $(this).offset().top + 25;
      var bottom_of_element = $(this).offset().top + $(this).outerHeight();
      var bottom_of_screen = $(window).scrollTop() + $(window).innerHeight();
      var top_of_screen = $(window).scrollTop();

      if (bottom_of_screen > top_of_element && top_of_screen < bottom_of_element) {
        // the element is visible, do something
        $(this).css({
          "opacity": "1",
          "transform": "translateY(0)"
        });
      } else {
        // the element is not visible, do something else
      }
    });

    $('.img-scroll').each(function () {
      var top_of_element = $(this).offset().top + 200;
      var bottom_of_element = $(this).offset().top + $(this).outerHeight();
      var bottom_of_screen = $(window).scrollTop() + $(window).innerHeight();
      var top_of_screen = $(window).scrollTop();

      if (bottom_of_screen > top_of_element && top_of_screen < bottom_of_element) {
        // the element is visible, do something
        $(this).find('img').css({
          "transform": "translateY(0)"
        });
      } else {
        // the element is not visible, do something else
        $(this).find('img').removeClass('img');
      }
    });
  }
 //Reveal code
});
// import "./components";
$(document).ready(function () {
  // HEADER MENU SEMANTIC UI DROPDOWN
//$('.js-page-scroll-top').trigger('click');
$('body').trigger('click');
//  $(".ui.dropdown.js-nav-dropdown").dropdown({});
});

$(document).ready(function () {

  AOS.init({
    once: true
  });

// Image animation
  gsap.registerPlugin(ScrollTrigger);

  let revealContainers = document.querySelectorAll(".reveal");


  revealContainers.forEach((container) => {
    let image = container.querySelector("img");

    let tl = gsap.timeline({
      scrollTrigger: {
        trigger: container,
        // toggleActions: "play none none none"
      }
    });

    tl.set(container, { autoAlpha: 1 });
    tl.from(container, 1, {
      xPercent: -100,
    start: "bottom center",
      ease: Power2.out
    });
    tl.from(image, 1, {
      xPercent: 100,
      scale: 1.3,
      delay: -1,
    start: "bottom center",
      ease: Power2.out
    });

    
  });

  // Fluid cards
  var $fluidEl = $('.fluid-width').length;

  if ($fluidEl > 0) {
    var $bw = $('section').width();
    var $ofset = $('.container').offset().left;
    console.log($ofset + "offset");

    var $hl = $('.fluid-width').length;

    if ($hl > 0) {
      var $lt = $('.container').not('.header-container').width();
      var $bd = $('body').width();
      var pd = $ofset + 5 + 'px';
      var $wid = pd + $lt + "px";
      console.log(pd);
      // var $ElW = ($bw - ($('.fluid-head').offset().left+15))+"px"
      $('.fluid-width').css({
        "padding-left": pd,
        "min-width": $wid,
        "max-width": $wid
      });
    } else {
      return false;
    }
  }

  if ($(window).width() <= 767) {
    $('.single-mb-slider').slick({
      dots: false,
      arrows: false,
      infinite: false,
      cssEase: 'linear',
      slidesToShow: 1.2,
      slidesToScroll: 1
      // autoplay: true,
      // autoplaySpeed: 2000,
    });

    $('.fade-mb-slider').slick({
      dots: false,
      arrows: false,
      infinite: false,
      cssEase: 'linear',
      slidesToShow: 1.05,
      slidesToScroll: 1
      // autoplay: true,
      // autoplaySpeed: 2000,
    });

    $('.single-mb-dot-slider').slick({
      dots: true,
      arrows: false,
      infinite: false,
      cssEase: 'linear',
      slidesToShow: 1,
      slidesToScroll: 1,
      adaptiveHeight: true,
      // autoplay: true,
      // autoplaySpeed: 2000,
    });
  }

// photo slider for mobile view for redefining-tourism-in-uae page
  $('.photo').slick({
    dots: false,
    infinite: false,
    speed: 300,
    slidesToShow: 1.5,
    slidesToScroll: 1,
    responsive: [
    
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1.2,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });
  //photo slider for mobile view for redefining-tourism-in-uae page

  //SLider 1
  $('.four-card-slider').slick({
    dots: false,
    infinite: false,
    speed: 800,
    slidesToShow: 2,
    slidesToScroll: 1,
    variableWidth: true,
    autoplay: false,
    nextArrow: '<div class="next-slide"><div class="ar"></div>',
    prevArrow: '<div class="prev-slide"><div class="ar"></div>',
    arrows: true,
    responsive: [{
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: false,
        dots: false,
        arrows: false
      }
    }, {
      breakpoint: 991,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        arrows: false
      }
    }, {
      breakpoint: 767,
      settings: {
        slidesToShow: 1.3,
        slidesToScroll: 1,
        arrows: false,
        autoplay: false,
        centerMode: false,
        autoplaySpeed: 1000,
        infinite: false
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      } }]
  });

  $('.fade-img').slick({
    dots: false,
    arrows: false,
    infinite: true,
    fade: true,
    cssEase: 'linear',
    autoplay: true,
    speed: 500,

    responsive: [{

      breakpoint: 767,
      settings: {

        adaptiveHeight: true
      }

    }]
  });

// SLider 2 - research page slider
	  $('.slider-md-23').slick({
		      dots: false,
		      infinite: false,
		      speed: 800,
		      slidesToShow: 2.3,
		      slidesToScroll: 1,
		      variableWidth: false,
		      autoplay: false,
		      nextArrow: '<div class="next-slide"><div class="ar"></div>',
		      prevArrow: '<div class="prev-slide"><div class="ar"></div>',
		      arrows: true,
		       responsive: [{
			             breakpoint: 1400,
			             settings: {
					             slidesToShow: 2.5,
					             slidesToScroll: 1,
					             infinite: false,
					             dots: false,
					            
					           }
			           }, {
					         breakpoint: 991,
					         settings: {
							         slidesToShow: 2,
							         slidesToScroll: 1,
							         arrows: false
							       }
					       }, {
						             breakpoint: 767,
						             settings: {
								             slidesToShow: 1.3,
								             slidesToScroll: 1,
								             arrows: false,
								             autoplay: false,
								             centerMode: false,
								             autoplaySpeed: 1000,
								             infinite: false
	 // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      } }]
              
   });

});

$('body').on('click', '.accordion__head', function () {
  var $scroll = $('.accordion.active');
  $(this).parents('.accordion').find('.accordion__body').slideToggle();
  $(this).parents('.accordion').toggleClass('active');
  $('.accordion__head').not(this).parents('.accordion').find('.accordion__body').slideUp();
  $('.accordion__head').not(this).parents('.accordion').removeClass('active');
});

$('body').on('click', '.slick-nav-btn__prev', function () {
  var $curSlide = parseInt($(this).parents('section').find('.slider-arrows-slick').find('.slick-current').attr("data-slick-index"));
  $(this).parents('section').find('.slider-arrows-slick').slick('slickGoTo', $curSlide - 1);
});



$(document).ready(function () {
  $("#award .award__item").hide();
  var counter = $("#award .award__item").length;
  var counter2 = $("#award .award__item").length;

  var i = setInterval(function () {
    var EQ = $("#award .award__item").eq(counter - 1);
    $("#award .award__item").eq(counter - 1).show();
    $("#award .award__item").not(EQ).hide();
    counter--;
    if (counter === 0) {
      counter = counter2;
    }
  }, 2000);

  var $v1 = $('.popup-youtube').length;
  var $v2 = $('.popup-vimeo').length;
  var $v3 = $('.popup-gmaps').length;

  if ($v1 > 0 || $v2 > 0 || $v3 > 0) {
    $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
      disableOn: 300,
      type: 'iframe',
      // mainClass: 'mfp-fade',
      // removalDelay: 160,
      preloader: false,

      fixedContentPos: false,

      mainClass: 'mfp-with-zoom',
      zoom: {
        enabled: true,
        duration: 500,
        easing: 'ease-in-out'
      },

      gmaps: {
        index: 'google.com/maps/',
        src: '%id%'
      }
    });
  }

  //Reveal code
});

$('body').on('click', '.tab-head-item__name', function () {
  var index = $(this).index();
  //$(this).addClass('active');
  //$(this).parents('.tab-head-item').find('.tab-head-item__name').not(this).removeClass('active');
  $(this).parents('.tab-section').find('.tab-section-content').find('.tab-section-content__item').removeClass('active');
  $(this).parents('.tab-section').find('.tab-section-content').find('.tab-section-content__item').eq(index).addClass('active');

  $('.data-scroll').each(function () {
    var top_of_element = $(this).offset().top + 200;
    var bottom_of_element = $(this).offset().top + $(this).outerHeight();
    var bottom_of_screen = $(window).scrollTop() + $(window).innerHeight();
    var top_of_screen = $(window).scrollTop();

    if (bottom_of_screen > top_of_element && top_of_screen < bottom_of_element) {
      // the element is visible, do something
      $(this).css({
        "opacity": "1",
        "transform": "translateY(0)"
      });
    } else {
      // the element is not visible, do something else
    }
  });
});

$('.nav-link[data-bs-toggle="pill"]').on('shown.bs.tab', function (e) {

  $('.data-scroll').each(function () {
    var top_of_element = $(this).offset().top + 200;
    var bottom_of_element = $(this).offset().top + $(this).outerHeight();
    var bottom_of_screen = $(window).scrollTop() + $(window).innerHeight();
    var top_of_screen = $(window).scrollTop();

    if (bottom_of_screen > top_of_element && top_of_screen < bottom_of_element) {
      // the element is visible, do something
      $(this).css({
        "opacity": "1",
        "transform": "translateY(0)"
      });
    } else {
      // the element is not visible, do something else
    }
  });
});

$('body').on('click', '.f-accordion__head', function () {
  $(this).parents('.f-accordion').find('.f-accordion__body').slideToggle();
  $('.f-accordion__head').not(this).parents('.f-accordion').find('.f-accordion__body').slideUp();

  $(this).parents('.f-accordion').toggleClass('active');
  $('.f-accordion__head').not(this).parents('.f-accordion').removeClass('active');
});
    $('body').on('click', '.lollypop-tabs button', function() {

  $("html,body").animate({scrollTop: $(".tab-content").offset().top -150 }, 0);
});

// Tab swicthing

$("body").on("click", ".tab-sw-hd", function () {
    localStorage.setItem("tabNav", $(this).attr('tab-id'));
});
 


$(document).ready(function () {

 var hdlclen = $(".location-drop-list").find('.location-drop-list__item').length;

  if(hdlclen > 4) {
    $(".location-drop-list").find('.location-drop-list__item').removeClass('col-3').addClass('col-12');

    $('.location-slider').slick({
      dots: true,
      arrows: false,
      infinite: false,
      cssEase: 'linear',
      slidesToShow: 4,
      slidesToScroll: 1,
      adaptiveHeight: true,
      // autoplay: true,
      // autoplaySpeed: 2000,
    });
  }



$('body').on('click', '.tab-head-item__name', function() {
    var $index = $(this).index();
    var $scrollIndex = $(this).parents(".tab-section").find('.tab-scroll-content').find('.tab-section-content__item').eq($index);
    $(this).parents(".tab-section").find('.tab-scroll-content').find('.tab-section-content__item').removeClass('active');
    $(this).parents(".tab-section").find('.tab-scroll-content').find('.tab-section-content__item').eq($index).addClass('active');

  
    //$(this).addClass('active');
    //$(this).parents('.tab-head-item').find('.tab-head-item__name').not(this).removeClass('active');

    $('html, body').animate({
        scrollTop: $($scrollIndex).offset().top - 160,
  
      }, 150);
});



 var tab2 = localStorage.getItem("tabNav");

     
  var lentab = $('.page-head-tab').length;
  if (lentab > 0) {
    
      
if(tab2 == "null") {
	console.log("yue==")
	}

	else {
$('html, body').animate({
        scrollTop: $('.page-head-tab').offset().top,
	
      }, 150);
	

	//SLider 2 - ux research  page slider start
	    $('.slider-md-23').slick({
	    dots: false,
	    infinite: false,
	    speed: 800,
	    slidesToShow: 2.3,
	    slidesToScroll: 1,
	    variableWidth: false,
	    autoplay: false,
	    nextArrow: '<div class="next-slide"><div class="ar"></div>',
	    prevArrow: '<div class="prev-slide"><div class="ar"></div>',
	    arrows: true,
	     responsive: [{
		           breakpoint: 1400,
		           settings: {
				           slidesToShow: 2.5,
				           slidesToScroll: 1,
				           infinite: false,
				           dots: false,
				          
				         }
		         }, {
				       breakpoint: 991,
				       settings: {
					               slidesToShow: 2,
					               slidesToScroll: 1,
					               arrows: false
					             }
				     }, {
					           breakpoint: 767,
					           settings: {
							           slidesToShow: 1.3,
							           slidesToScroll: 1,
							           arrows: false,
							           autoplay: false,
							           centerMode: false,
							           autoplaySpeed: 1000,
							           infinite: false
							           // You can unslick at a given breakpoint now by adding:
							          // settings: "unslick"
							                  // instead of a settings object
							                         } }]
							                            
							                              }); //ux-research page slider end


$('.page-head-tab').find(tab2).trigger('click');

	}

        localStorage.setItem("tabNav", null);
  } else {
    return false;

  }

});

},{}]},{},[1])    //# sourceMappingURL=main.js.map