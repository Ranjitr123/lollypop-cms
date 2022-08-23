(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);throw new Error("Cannot find module '"+o+"'")}var f=n[o]={exports:{}};t[o][0].call(f.exports,function(e){var n=t[o][1][e];return s(n?n:e)},f,f.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){
'use strict';

var mr = void 0;
var sr = void 0;
var srr = void 0;

$(document).ready(function () {
    mr = parseInt($(window).width() - ($('.lp-hamberg').offset().left + $('.lp-hamberg').outerWidth()));

    if ($(window).width() > 767 && $(window).width() < 991) {
        sr = mr - 10 + 'px';
        srr = 'translate(' + sr + ', -50%)';
    } else if ($(window).width() > 991) {
        sr = mr - 30 + 'px';

        srr = 'translate(' + sr + ', -50%)';
    }
});

$(window).scroll(function () {
    var scroll = $(window).scrollTop();
    if (scroll > 0) {
        $('header').addClass('sticky');
        $('.lines').addClass('active');
        $('#progress').addClass('active');
        $('#progress').removeClass('end');
        $('.lp-hamberg').css({
            "transform": srr
        });
	    $('.menu--location').removeClass('active visible');
    } else {
        $('header').removeClass('sticky');
        var sr = 'translate(25px, -50%)';
        $('.lp-hamberg').css({
            "transform": sr
        });

        $('#progress').removeClass('active');
        $('#progress').addClass('end');
        $('.lines').removeClass('active');
    }

    //$('.ui.dropdown').dropdown('hide');
$('.menu--location').removeClass('active visible');
    $('header').removeClass('h-transparent');
    $('.main').removeClass("op-main-0");

    // Page scroll offset

    var $pgH = parseInt($(window).height());

    if (scroll > $pgH) {
        var $ham = parseInt($('.lp-hamberg').offset().left);
        $('.js-page-scroll-top').addClass('active');
        var $lfpg = 10 + $ham + "px";
        $('.js-page-scroll-top').css({
            "left": $lfpg
        });
    } else {
        $('.js-page-scroll-top').removeClass('active');
    }
});

$("body").on('click', '.js-page-scroll-top', function () {
    $("html,body").animate({ scrollTop: $("html").offset().top }, 0);
});

//$("body").on('click', '.menu--location', function (e) {

//    var headerdropdown = $('.js-location-dropdown').dropdown('is visible');

  //  if (!headerdropdown) {
    //    $('header').removeClass('h-transparent');
      //  $('.main').removeClass("op-main-0");
   // } else {

     //   setTimeout(function () {

       //     $('header').addClass('h-transparent');
         //    $('.main').addClass("op-main-0");
        //}, 10);
    //}
//});

$("body").on('click', '.js-location-dropdown__ar', function (e) {
      //$('.ui.dropdown')
	//  .dropdown();
	$('.menu--location').toggleClass('active visible');
		$('header').toggleClass('h-transparent');
//    var headerdropdown = $('.js-location-dropdown').dropdown('is visible');

  //  if (headerdropdown) {
    //    $('header').removeClass('h-transparent');
 //       $('.main').removeClass("op-main-0");
 //   } else {

 //       setTimeout(function () {

 //           $('header').addClass('h-transparent');
 //            $('.main').addClass("op-main-0");
 //       }, 10);
 //   }
});

//$("body").on('click', function (e) {
   // var headerdropdown = $('.js-location-dropdown').dropdown('is hidden');

 //   if (!headerdropdown) {
 //       $('header').removeClass('h-transparent');
 //        $('.main').removeClass("op-main-0");
 //   }
//});

$('body').on('click', '.lp-hamberg', function (e) {
    e.preventDefault();
    $('.main').toggleClass('active');
    $('.lp-hamberg').toggleClass('active');
    $('.desktop-menu').toggleClass('active');
    $('header').find('.js-toggle').not('.navbar,.pos-row,.container,.lp-hamberg,.lp-hamberg__line,.lp-hamberg__line,.desktop-menu').toggleClass('js-hide');

    $('header').toggleClass('menu-open');
$('.menu--location').removeClass('active visible');
    setTimeout(function () {
        $('.menu-link').toggleClass('active');
    }, 10);

    setTimeout(function () {
        $('.desktop-menu__item').toggleClass('active');
        $('.js-toggle').toggleClass('op-0');

        //$('.ui.dropdown').dropdown('hide');
$('.menu--location').removeClass('active visible');
        $('header').removeClass('h-transparent');
         $('.main').removeClass("op-main-0");
    }, 300);
});

var scrollPercentage = function scrollPercentage() {
    var scrollProgress = document.getElementById("progress");
    var pos = document.documentElement.scrollTop;
    var calcHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    var scrollValue = Math.round(pos * 100 / calcHeight);
    // console.log(scrolValue)


    if ($(window).width() < 768) {
        if (scrollValue >= 97) {
            scrollValue = 100;
            $('.lp-hamberg').addClass('active-red');
        } else {
            $('.lp-hamberg').removeClass('active-red');
        }
    } else {
        if (scrollValue == 100) {
            $('.lp-hamberg').addClass('active-red');
        } else {
            $('.lp-hamberg').removeClass('active-red');
        }
    }

    scrollProgress.style.background = 'conic-gradient(#FD2E35\n        ' + scrollValue + '%, #ffffff\n        ' + scrollValue + '%)';
};

window.onscroll = scrollPercentage;

},{}]},{},[1])//# sourceMappingURL=header.js.map
