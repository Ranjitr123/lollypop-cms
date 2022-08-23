(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);throw new Error("Cannot find module '"+o+"'")}var f=n[o]={exports:{}};t[o][0].call(f.exports,function(e){var n=t[o][1][e];return s(n?n:e)},f,f.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){
'use strict';

// Shout out to ihatetomatoes
// https://www.youtube.com/watch?v=QpedXxC0e5o

$(document).ready(function () {
	var controller = new ScrollMagic.Controller();

	var one = new ScrollMagic.Scene({
		triggerElement: '#one',
		duration: $('#one').outerHeight()
		// triggerHook: 0.1,
	}).setClassToggle('body', 'color-gray').addTo(controller);
	var one = new ScrollMagic.Scene({
		triggerElement: '#one',
		duration: $('#one').outerHeight()
		// triggerHook: 0.1,
	}).setClassToggle('#one', 'active').addTo(controller);

	var second = new ScrollMagic.Scene({
		triggerElement: '#second',
		duration: $('#second').outerHeight()
		// triggerHook: 0.1,
	}).setClassToggle('body', 'color-gray').addTo(controller);
	var second = new ScrollMagic.Scene({
		triggerElement: '#second',
		duration: $('#second').outerHeight()
		// triggerHook: 0.1,
	}).setClassToggle('#second', 'active').addTo(controller);

	var third = new ScrollMagic.Scene({
		triggerElement: '#third',
		duration: $('#third').outerHeight()
		// triggerHook: 0.1,
	}).setClassToggle('body', 'color-purple').addTo(controller);

	var third = new ScrollMagic.Scene({
		triggerElement: '#third',
		duration: $('#third').outerHeight()
		// triggerHook: 0.1,
	}).setClassToggle('#third', 'active').addTo(controller);

	var fourth = new ScrollMagic.Scene({
		triggerElement: '#fourth',
		duration: $('#fourth').outerHeight()
		// triggerHook: 0.1,
	}).setClassToggle('body', 'color-gray').addTo(controller);
	var fourth = new ScrollMagic.Scene({
		triggerElement: '#fourth',
		duration: $('#fourth').outerHeight()
		// triggerHook: 0.1,
	}).setClassToggle('#fourth', 'active').addTo(controller);

	var fifth = new ScrollMagic.Scene({
		triggerElement: '#fifth',
		duration: $('#fifth').outerHeight()
		// triggerHook: 0.1,
	}).setClassToggle('body', 'color-gray').addTo(controller);
	var fifth = new ScrollMagic.Scene({
		triggerElement: '#fifth',
		duration: $('#fifth').outerHeight()
		// triggerHook: 0.1,
	}).setClassToggle('#fifth', 'active').addTo(controller);
});

},{}]},{},[1])//# sourceMappingURL=client-scroll-animation.js.map
