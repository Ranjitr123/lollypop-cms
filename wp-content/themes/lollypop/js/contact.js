(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);throw new Error("Cannot find module '"+o+"'")}var f=n[o]={exports:{}};t[o][0].call(f.exports,function(e){var n=t[o][1][e];return s(n?n:e)},f,f.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){
'use strict';

$(window).scroll(function () {

    // calculate the percentage the user has scrolled down the page
    var scrollwin = $(window).scrollTop();

    $('.contat-list').each(function () {
        var articleheight = $(this).outerHeight(true);
        var windowWidth = $(window).width();
        if (scrollwin >= $(this).offset().top - 180) {
            if (scrollwin <= $(this).offset().top + articleheight) {
                $('.contct-place__item').removeClass("active");
                $(this).parents('.contct-place__item').addClass("active");
                var $place = $('.contct-place__item.active').find('.contact-title').html();
                if ($place == undefined) {
                    $('.mb-contact-head').html('');
                } else {
                    $('.mb-contact-head').html('<span>' + $place + '</span>');
                }
            } else {

                if (scrollwin > $(this).offset().top + articleheight) {

                    $(this).parents('.contct-place__item').removeClass("active");
                } else {}
            }
        } else {

            $(this).parents('.contat-list__item').removeClass("active");
        }
    });

    $('.contct-place').each(function () {
        var articleheight = $(this).outerHeight(true);
        var windowWidth = $(window).width();
        if (scrollwin >= $(this).offset().top - 180) {
            if (scrollwin <= $(this).offset().top + articleheight) {

                $('.mb-contact-head').addClass("active");
            } else {

                $('.mb-contact-head').removeClass("active");
            }
        } else {

            $('.mb-contact-head').removeClass("active");
        }
    });
});

var input = document.getElementById('file-upload');
var infoArea = document.getElementById('filename');

if (typeof(input) != 'undefined' && input != null)
{
    input.addEventListener('change', showFileName);
}


function showFileName(event) {

    // the change event gives us the input it occurred in 
    var input = event.srcElement;

    // the input has an array of files in the `files` property, each one has a name that you can use. We're just using the name here.
    var fileName = input.files[0].name;

    // use fileName however fits your app best, i.e. add it into a div
    infoArea.textContent = fileName;
}

$('#file-upload').on('change', function () {
    var $file = $(this).val();
    if (!$file) {
        $('.file-reset').addClass('d-none');
    } else {
        $('.file-reset').removeClass('d-none');
    }
});

$('body').on('click', '.file-reset', function () {
    $('#file-upload').val('');
    $('#filename').html('Attach your Document');
    $(this).addClass('d-none');
});

$('body').on('input', '.input input, textarea', function () {
    var $val = $(this).parsley().isValid();
    if (!$val) {
        $(this).parents('.input').find('.input__require').removeClass('d-none');
    } else {
        $(this).parents('.input').find('.input__require').addClass('d-none');
    }

    var $valid = $(this).parents('form').parsley().isValid();

    if ($valid) {
        $(this).parents('form').find('.js-submit').addClass('valid');
        // $('.js-submit--btn').addClass('d-none');
        // $('.js-submit--link').removeClass('d-none').addClass('d-inline-block');
    } else {
        $(this).parents('form').find('.js-submit').removeClass('valid');
        // $('.js-submit--btn').removeClass('d-none');
        // $('.js-submit--link').addClass('d-none').removeClass('d-inline-block');
    }
});

},{}]},{},[1])//# sourceMappingURL=contact.js.map
