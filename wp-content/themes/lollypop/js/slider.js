(function e(t, n, r) {
  function s(o, u) {
    if (!n[o]) {
      if (!t[o]) {
        var a = typeof require == "function" && require;
        if (!u && a) return a(o, !0);
        if (i) return i(o, !0);
        throw new Error("Cannot find module '" + o + "'");
      }
      var f = (n[o] = { exports: {} });
      t[o][0].call(
        f.exports,
        function (e) {
          var n = t[o][1][e];
          return s(n ? n : e);
        },
        f,
        f.exports,
        e,
        t,
        n,
        r
      );
    }
    return n[o].exports;
  }
  var i = typeof require == "function" && require;
  for (var o = 0; o < r.length; o++) s(r[o]);
  return s;
})(
  {
    1: [
      function (require, module, exports) {
        "use strict";

        $(document).ready(function () {
          $(".single-dot-slider").slick({
            dots: true,
            arrows: false,
            infinite: true,
            cssEase: "linear",
            slidesToShow: 1,
            slidesToScroll: 1,
            adaptiveHeight: true,
            autoplay: true,
            autoplaySpeed: 2000,
            changeDir: true,
          });

          $(".fade-div").slick({
            dots: false,
            arrows: false,
            infinite: true,
            fade: true,
            cssEase: "linear",
            autoplay: true,
            speed: 500,

            responsive: [
              {
                breakpoint: 767,
                settings: {
                  adaptiveHeight: true,
                },
              },
            ],
          });

          $(".auto-play-none").slick({
            autoplay: false,
          });
        });

        // On before slide change
        $(".slide-swap__right").on(
          "beforeChange",
          function (event, _ref, currentSlide, nextSlide) {
            var count = _ref.slideCount;

            $(this)
              .parents(".slide-swap")
              .find(".slide-swap__left")
              .slick("slickGoTo", nextSlide);
          }
        );
      },
      {},
    ],
  },
  {},
  [1]
); //# sourceMappingURL=slider.js.map
