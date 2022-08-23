(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);throw new Error("Cannot find module '"+o+"'")}var f=n[o]={exports:{}};t[o][0].call(f.exports,function(e){var n=t[o][1][e];return s(n?n:e)},f,f.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){
'use strict';

var player2 = void 0;

$(document).ready(function () {
  $('header').addClass('lp-mainheader--white');

  var counter = $(".quote .quote__item").length;
  var counter2 = $(".quote .quote__item").length;

  var i = setInterval(function () {
    var EQ = $(".quote .quote__item").eq(counter - 1);
    $(".quote .quote__item").eq(counter - 1).addClass('active');
    $(".quote .quote__item").not(EQ).removeClass('active');
    counter--;
    if (counter === 0) {
      counter = counter2;
    }
  }, 2000);

 // player2 = new Plyr('#player2');
});

/*$(window).on('scroll', function () {

  $('.play-video-on-scroll').each(function () {

    var $this = $(this);
    var top_of_element = $(this).offset().top;
    var bottom_of_element = $(this).offset().top + $(this).outerHeight();
    var bottom_of_screen = $(window).scrollTop() + $(window).innerHeight();
    var top_of_screen = $(window).scrollTop();

    if (bottom_of_screen > top_of_element && top_of_screen < bottom_of_element) {
      player2.muted = false;player2.play();
    } else {
      player2.muted = true;player2.pause();
    }
  });
});*/

},{}]},{},[1])//# sourceMappingURL=career.js.map
