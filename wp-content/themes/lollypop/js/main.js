!(function e(s, n, a) {
  function r(i, o) {
    if (!n[i]) {
      if (!s[i]) {
        var t = "function" == typeof require && require;
        if (!o && t) return t(i, !0);
        if (l) return l(i, !0);
        throw new Error("Cannot find module '" + i + "'");
      }
      o = n[i] = { exports: {} };
      s[i][0].call(
        o.exports,
        function (o) {
          var t = s[i][1][o];
          return r(t || o);
        },
        o,
        o.exports,
        e,
        s,
        n,
        a
      );
    }
    return n[i].exports;
  }
  for (
    var l = "function" == typeof require && require, o = 0;
    o < a.length;
    o++
  )
    r(a[o]);
  return r;
})(
  {
    1: [
      function (require, o, exports) {
        "use strict";
        $(window).on("load", function () {
          $(".sec-pd").last().addClass("last");
          $(".sec-sm-pd").last().addClass("last");
          setTimeout(function () {
            $(".loader").addClass("active");
            $(".data-scroll").each(function () {
              var o = $(this).offset().top,
                t = $(this).offset().top + $(this).outerHeight(),
                i = $(window).scrollTop() + $(window).innerHeight(),
                e = $(window).scrollTop();
              o < i &&
                e < t &&
                $(this).css({ opacity: "1", transform: "translateY(0)" });
            });
          }, 1e3);
        });
        $(window).on("scroll", function () {
          if (0 < $(".data-scroll").length) {
            $(".data-scroll").each(function () {
              var o = $(this).offset().top + 25,
                t = $(this).offset().top + $(this).outerHeight(),
                i = $(window).scrollTop() + $(window).innerHeight(),
                e = $(window).scrollTop();
              o < i &&
                e < t &&
                $(this).css({ opacity: "1", transform: "translateY(0)" });
            });
            $(".img-scroll").each(function () {
              var o = $(this).offset().top + 200,
                t = $(this).offset().top + $(this).outerHeight(),
                i = $(window).scrollTop() + $(window).innerHeight(),
                e = $(window).scrollTop();
              o < i && e < t
                ? $(this).find("img").css({ transform: "translateY(0)" })
                : $(this).find("img").removeClass("img");
            });
          }
        });
        $(document).ready(function () {
          $("body").trigger("click");
        });
        $(document).ready(function () {
          AOS.init({ once: !0 });
          gsap.registerPlugin(ScrollTrigger);
          let o = document.querySelectorAll(".reveal");
          o.forEach((o) => {
            var t = o.querySelector("img");
            let i = gsap.timeline({ scrollTrigger: { trigger: o } });
            i.set(o, { autoAlpha: 1 });
            i.from(o, 1, {
              xPercent: -100,
              start: "bottom center",
              ease: Power2.out,
            });
            i.from(t, 1, {
              xPercent: 100,
              scale: 1.3,
              delay: -1,
              start: "bottom center",
              ease: Power2.out,
            });
          });
          if (0 < $(".fluid-width").length) {
            $("section").width();
            var t = $(".container").offset().left;
            console.log(t + "offset");
            if (!(0 < $(".fluid-width").length)) return !1;
            var i = $(".container").not(".header-container").width(),
              t = ($("body").width(), t + 5 + "px"),
              i = t + i + "px";
            console.log(t);
            $(".fluid-width").css({
              "padding-left": t,
              "min-width": i,
              "max-width": i,
            });
          }
          if ($(window).width() <= 767) {
            $(".single-mb-slider").slick({
              dots: !1,
              arrows: !1,
              infinite: !1,
              cssEase: "linear",
              slidesToShow: 1.2,
              slidesToScroll: 1,
            });
            $(".fade-mb-slider").slick({
              dots: !1,
              arrows: !1,
              infinite: !1,
              cssEase: "linear",
              slidesToShow: 1.05,
              slidesToScroll: 1,
            });
            $(".single-mb-dot-slider").slick({
              dots: !0,
              arrows: !1,
              infinite: !1,
              cssEase: "linear",
              slidesToShow: 1,
              slidesToScroll: 1,
              adaptiveHeight: !0,
            });
          }
          $(".photo").slick({
            dots: !1,
            infinite: !1,
            speed: 300,
            slidesToShow: 1.5,
            slidesToScroll: 1,
            responsive: [
              {
                breakpoint: 480,
                settings: { slidesToShow: 1.2, slidesToScroll: 1 },
              },
            ],
          });
          $(".four-card-slider").slick({
            dots: !1,
            infinite: !1,
            speed: 800,
            slidesToShow: 2,
            slidesToScroll: 1,
            variableWidth: !0,
            autoplay: !1,
            nextArrow: '<div class="next-slide"><div class="ar"></div>',
            prevArrow: '<div class="prev-slide"><div class="ar"></div>',
            arrows: !0,
            responsive: [
              {
                breakpoint: 1024,
                settings: {
                  slidesToShow: 2,
                  slidesToScroll: 1,
                  infinite: !1,
                  dots: !1,
                  arrows: !1,
                },
              },
              {
                breakpoint: 991,
                settings: { slidesToShow: 2, slidesToScroll: 1, arrows: !1 },
              },
              {
                breakpoint: 767,
                settings: {
                  slidesToShow: 1.3,
                  slidesToScroll: 1,
                  arrows: !1,
                  autoplay: !1,
                  centerMode: !1,
                  autoplaySpeed: 1e3,
                  infinite: !1,
                },
              },
            ],
          });
          $(".fade-img").slick({
            dots: !1,
            arrows: !1,
            infinite: !0,
            fade: !0,
            cssEase: "linear",
            autoplay: !0,
            speed: 500,
            responsive: [{ breakpoint: 767, settings: { adaptiveHeight: !0 } }],
          });
          $(".slider-md-23").slick({
            dots: !1,
            infinite: !1,
            speed: 800,
            slidesToShow: 2.3,
            slidesToScroll: 1,
            variableWidth: !1,
            autoplay: !1,
            nextArrow: '<div class="next-slide"><div class="ar"></div>',
            prevArrow: '<div class="prev-slide"><div class="ar"></div>',
            arrows: !0,
            responsive: [
              {
                breakpoint: 1400,
                settings: {
                  slidesToShow: 2.5,
                  slidesToScroll: 1,
                  infinite: !1,
                  dots: !1,
                },
              },
              {
                breakpoint: 991,
                settings: { slidesToShow: 2, slidesToScroll: 1, arrows: !1 },
              },
              {
                breakpoint: 767,
                settings: {
                  slidesToShow: 1.3,
                  slidesToScroll: 1,
                  arrows: !1,
                  autoplay: !1,
                  centerMode: !1,
                  autoplaySpeed: 1e3,
                  infinite: !1,
                },
              },
            ],
          });
        });

        $(".second-slider2").slick({
            dots: false,
            infinite: false,
            speed: 800,
            slidesToShow: 1.8,
            slidesToScroll: 1,
            variableWidth: true,
            autoplay: false,
			touchThreshold:100,
            nextArrow: '<div class="next-slide"><div class="ar"></div>',
            prevArrow: '<div class="prev-slide"><div class="ar"></div>',
            arrows: true,
            responsive: [
              {
                breakpoint: 1024,
                settings: {
                  slidesToShow: 2,
                  slidesToScroll: 1,
                  infinite: true,
                  dots: false,
                  arrows: false,
                },
              },
              {
                breakpoint: 991,
                settings: { slidesToShow: 2, slidesToScroll: 1, arrows: false },
              },
              {
                breakpoint: 767,
                settings: {
                  slidesToShow: 1.3,
                  slidesToScroll: 1,
                  arrows: false,
                  autoplay: false,
                  centerMode: false,
				  touchThreshold:100,
                  autoplaySpeed: 1000,
                  infinite: true,
                },
              },
            ],
          });
          
        $("body").on("click", ".accordion__head", function () {
          $(".accordion.active");
          $(this).parents(".accordion").find(".accordion__body").slideToggle();
          $(this).parents(".accordion").toggleClass("active");
          $(".accordion__head")
            .not(this)
            .parents(".accordion")
            .find(".accordion__body")
            .slideUp();
          $(".accordion__head")
            .not(this)
            .parents(".accordion")
            .removeClass("active");
        });
        $("body").on("click", ".slick-nav-btn__prev", function () {
          var o = parseInt(
            $(this)
              .parents("section")
              .find(".slider-arrows-slick")
              .find(".slick-current")
              .attr("data-slick-index")
          );
          $(this)
            .parents("section")
            .find(".slider-arrows-slick")
            .slick("slickGoTo", o - 1);
        });
        $(document).ready(function () {
          $("#award .award__item").hide();
          var t = $("#award .award__item").length,
            i = $("#award .award__item").length,
            o =
              (setInterval(function () {
                var o = $("#award .award__item").eq(t - 1);
                $("#award .award__item")
                  .eq(t - 1)
                  .show();
                $("#award .award__item").not(o).hide();
                0 === --t && (t = i);
              }, 2e3),
              $(".popup-youtube").length),
            e = $(".popup-vimeo").length,
            s = $(".popup-gmaps").length;
          (0 < o || 0 < e || 0 < s) &&
            $(".popup-youtube, .popup-vimeo, .popup-gmaps").magnificPopup({
              disableOn: 300,
              type: "iframe",
              preloader: !1,
              fixedContentPos: !1,
              mainClass: "mfp-with-zoom",
              zoom: { enabled: !0, duration: 500, easing: "ease-in-out" },
              gmaps: { index: "google.com/maps/", src: "%id%" },
            });
        });
        $("body").on("click", ".tab-head-item__name", function () {
          var o = $(this).index();
          $(this)
            .parents(".tab-section")
            .find(".tab-section-content")
            .find(".tab-section-content__item")
            .removeClass("active");
          $(this)
            .parents(".tab-section")
            .find(".tab-section-content")
            .find(".tab-section-content__item")
            .eq(o)
            .addClass("active");
          $(".data-scroll").each(function () {
            var o = $(this).offset().top + 200,
              t = $(this).offset().top + $(this).outerHeight(),
              i = $(window).scrollTop() + $(window).innerHeight(),
              e = $(window).scrollTop();
            o < i &&
              e < t &&
              $(this).css({ opacity: "1", transform: "translateY(0)" });
          });
        });
        $('.nav-link[data-bs-toggle="pill"]').on("shown.bs.tab", function (o) {
          $(".data-scroll").each(function () {
            var o = $(this).offset().top + 200,
              t = $(this).offset().top + $(this).outerHeight(),
              i = $(window).scrollTop() + $(window).innerHeight(),
              e = $(window).scrollTop();
            o < i &&
              e < t &&
              $(this).css({ opacity: "1", transform: "translateY(0)" });
          });
        });
        $("body").on("click", ".f-accordion__head", function () {
          $(this)
            .parents(".f-accordion")
            .find(".f-accordion__body")
            .slideToggle();
          $(".f-accordion__head")
            .not(this)
            .parents(".f-accordion")
            .find(".f-accordion__body")
            .slideUp();
          $(this).parents(".f-accordion").toggleClass("active");
          $(".f-accordion__head")
            .not(this)
            .parents(".f-accordion")
            .removeClass("active");
        });
        $("body").on("click", ".lollypop-tabs button", function () {
          $("html,body").animate(
            { scrollTop: $(".tab-content").offset().top - 150 },
            0
          );
        });
        $("body").on("click", ".tab-sw-hd", function () {
          localStorage.setItem("tabNav", $(this).attr("tab-id"));
        });
        $(document).ready(function () {
          if (
            4 <
            $(".location-drop-list").find(".location-drop-list__item").length
          ) {
            $(".location-drop-list")
              .find(".location-drop-list__item")
              .removeClass("col-3")
              .addClass("col-12");
            $(".location-slider").slick({
              dots: !0,
              arrows: !1,
              infinite: !1,
              cssEase: "linear",
              slidesToShow: 4,
              slidesToScroll: 1,
              adaptiveHeight: !0,
            });
          }
          $("body").on("click", ".tab-head-item__name", function () {
            var o = $(this).index(),
              t = $(this)
                .parents(".tab-section")
                .find(".tab-scroll-content")
                .find(".tab-section-content__item")
                .eq(o);
            $(this)
              .parents(".tab-section")
              .find(".tab-scroll-content")
              .find(".tab-section-content__item")
              .removeClass("active");
            $(this)
              .parents(".tab-section")
              .find(".tab-scroll-content")
              .find(".tab-section-content__item")
              .eq(o)
              .addClass("active");
            $("html, body").animate(
              { scrollTop: $(t).offset().top - 160 },
              150
            );
          });
          var o = localStorage.getItem("tabNav");
          if (!(0 < $(".page-head-tab").length)) return !1;
          if ("null" == o) console.log("yue==");
          else {
            $("html, body").animate(
              { scrollTop: $(".page-head-tab").offset().top },
              150
            );
            $(".slider-md-23").slick({
              dots: !1,
              infinite: !1,
              speed: 800,
              slidesToShow: 2.3,
              slidesToScroll: 1,
              variableWidth: !1,
              autoplay: !1,
              nextArrow: '<div class="next-slide"><div class="ar"></div>',
              prevArrow: '<div class="prev-slide"><div class="ar"></div>',
              arrows: !0,
              responsive: [
                {
                  breakpoint: 1400,
                  settings: {
                    slidesToShow: 2.5,
                    slidesToScroll: 1,
                    infinite: !1,
                    dots: !1,
                  },
                },
                {
                  breakpoint: 991,
                  settings: { slidesToShow: 2, slidesToScroll: 1, arrows: !1 },
                },
                {
                  breakpoint: 767,
                  settings: {
                    slidesToShow: 1.3,
                    slidesToScroll: 1,
                    arrows: !1,
                    autoplay: !1,
                    centerMode: !1,
                    autoplaySpeed: 1e3,
                    infinite: !1,
                  },
                },
              ],
            });
            $(".page-head-tab").find(o).trigger("click");
          }
          localStorage.setItem("tabNav", null);
        });
      },
      {},
    ],
  },
  {},
  [1]
);
