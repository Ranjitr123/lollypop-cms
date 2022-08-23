(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);throw new Error("Cannot find module '"+o+"'")}var f=n[o]={exports:{}};t[o][0].call(f.exports,function(e){var n=t[o][1][e];return s(n?n:e)},f,f.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){

// $(window).scroll(function() {

//     // calculate the percentage the user has scrolled down the page
//     var scrollwin = $(window).scrollTop();
//     var articleheight = $('.blog-detail-content').outerHeight(true);
//     var windowWidth = $(window).width();
//     if(scrollwin >= $('.blog-detail-content').offset().top){
//         if(scrollwin <= ($('.blog-detail-content').offset().top + articleheight)){
//         $('.blog-reading-progress').css('width', ((scrollwin - $('.blog-detail-content').offset().top) / articleheight) * 100 + "%"  );
//         $('.blog-reading-progress').css('transform',"translateY(0)");
//         }else{
//             $('.blog-reading-progress').css('width',"100%");

//             if(scrollwin > ($('.blog-detail-content').offset().top + articleheight)){
//               $('.blog-reading-progress').css('transform',"translateY(100%)");
//             }

//             else {
//               $('.blog-reading-progress').css('transform',"translateY(0)");
//             }
//         }
//     }else{
//         $('.blog-reading-progress').css('width',"0px");
//     }


//   });
"use strict";

},{}]},{},[1])//# sourceMappingURL=blog.js.map
