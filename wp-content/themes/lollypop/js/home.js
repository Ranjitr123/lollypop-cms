!(function n(o, i, a) {
  function p(t, e) {
    if (!i[t]) {
      if (!o[t]) {
        var r = "function" == typeof require && require;
        if (!e && r) return r(t, !0);
        if (u) return u(t, !0);
        throw new Error("Cannot find module '" + t + "'");
      }
      e = i[t] = { exports: {} };
      o[t][0].call(
        e.exports,
        function (e) {
          var r = o[t][1][e];
          return p(r || e);
        },
        e,
        e.exports,
        n,
        o,
        i,
        a
      );
    }
    return i[t].exports;
  }
  for (
    var u = "function" == typeof require && require, e = 0;
    e < a.length;
    e++
  )
    p(a[e]);
  return p;
})(
  {
    1: [
      function (require, e, exports) {
        "use strict";
        $(function () {
          var e = [
              "users fall in love with",
              "scale businesses",
              "win hearts and awards",
            ],
            r = 0;
          setInterval(function () {
            $(".lp-sudo-right__textchange").fadeOut(function () {
              $(this)
                .html(e[(r = (r + 1) % e.length)])
                .fadeIn();
            });
          }, 2500);
        });
        $(document).ready(function () {
          $(".fade-award").slick({
            dots: !1,
            arrows: !1,
            infinite: !0,
            fade: !0,
            autoplay: !0,
            autoplaySpeed: 3e3,
          });
          if ($("#player").length) {
            const e = new Plyr("#player", { autoplay: !0, muted: !0 });
            e.media.addEventListener("ended", function () {
              e.play();
            });
          }
          $(".bg-wrapper--purple").length &&
            $(window).scroll(function () {
              if (0 < $(".bg-wrapper--purple").length) {
                var e = $(".bg-wrapper--purple").offset().top,
                  r =
                    $(".bg-wrapper--purple").offset().top +
                    $(".bg-wrapper--purple").outerHeight(),
                  t = $(window).scrollTop() + $(window).innerHeight(),
                  n = $(window).scrollTop();
                e < t && n < r && $(".bg-wrapper--purple").addClass("active");
              }
            });
        });
      },
      {},
    ],
  },
  {},
  [1]
);
