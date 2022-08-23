(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);throw new Error("Cannot find module '"+o+"'")}var f=n[o]={exports:{}};t[o][0].call(f.exports,function(e){var n=t[o][1][e];return s(n?n:e)},f,f.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){
"use strict";

//var swiper = new Swiper(".mySwiper", {
//	slidesPerView: 1,
//	grabCursor: true,
//	spaceBetween: 30,
//	keyboard: {
//		enabled: true
//	},
//	breakpoints: {
//		320: {
//			slidesPerView: 1.3
//		},
//		769: {
//			slidesPerView: 2
//		}
//	},
//	navigation: {
//		nextEl: ".swiper-button-next",
//		prevEl: ".swiper-button-prev"
//	}
//});

$(function () {
	var words = ['users fall in love with', 'scale businesses', 'win hearts and awards'],
	    i = 0; // i for counting

	setInterval(function () {
		$('.lp-sudo-right__textchange').fadeOut(function () {
			//fadeout text
			$(this).html(words[i = (i + 1) % words.length]).fadeIn(); //update, count and fadeIn
		});
	}, 2500); //2s

});
	$(function () {
			var words = ['Websites', 'Mobile Apps', 'AR/ VR', 'Metaverse', 'NFTs', 'Wearable Tech', 'Arabic Experiences', 'Multi-lingual Experiences'],
				    i = 0; // i for counting

			setInterval(function () {
						$('.lp-sudo-dubai-ae__textchange').fadeOut(function () {
										//fadeout text
										$(this).html(words[i = (i + 1) % words.length]).fadeIn(); //update, count and fadeIn
											});
												}, 2500); //2s
							
													});


	$(function () {
			var words = ['design.','research.','and development.'],
				    i = 0; // i for counting

			setInterval(function () {
						$('.lp-sudo-dubai-design__textchange').fadeOut(function () {
										//fadeout text
										$(this).html(words[i = (i + 1) % words.length]).fadeIn(); //update, count and fadeIn
												});
													}, 2500); //2s
							
													});

$(document).ready(function () {

	$('.fade-award').slick({
		dots: false,
		arrows: false,
		infinite: true,
		fade: true,
		// cssEase: 'linear',
		autoplay: true,
		autoplaySpeed: 3000
	});

	const player = new Plyr('#player', {
  autoplay: true,
muted: true,

});
player.media.addEventListener('ended', function() {
  player.play();
});
});

$(window).scroll(function () {
	var seclen = $(".bg-wrapper--purple").length;
	if (seclen > 0) {
		var top_of_element = $(".bg-wrapper--purple").offset().top;
		var bottom_of_element = $(".bg-wrapper--purple").offset().top + $(".bg-wrapper--purple").outerHeight();
		var bottom_of_screen = $(window).scrollTop() + $(window).innerHeight();
		var top_of_screen = $(window).scrollTop();

		if (bottom_of_screen > top_of_element && top_of_screen < bottom_of_element) {
			// the element is visible, do something
			$(".bg-wrapper--purple").addClass('active');
		} else {
			// the element is not visible, do something else
		}
	}
});

},{}]},{},[1])//# sourceMappingURL=home.js.map
