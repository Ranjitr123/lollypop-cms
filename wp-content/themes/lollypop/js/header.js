!(function o(a, n, r) {
  function l(s, e) {
    if (!n[s]) {
      if (!a[s]) {
        var t = "function" == typeof require && require;
        if (!e && t) return t(s, !0);
        if (i) return i(s, !0);
        throw new Error("Cannot find module '" + s + "'");
      }
      e = n[s] = { exports: {} };
      a[s][0].call(
        e.exports,
        function (e) {
          var t = a[s][1][e];
          return l(t || e);
        },
        e,
        e.exports,
        o,
        a,
        n,
        r
      );
    }
    return n[s].exports;
  }
  for (
    var i = "function" == typeof require && require, e = 0;
    e < r.length;
    e++
  )
    l(r[e]);
  return l;
})(
  {
    1: [
      function (require, e, exports) {
        "use strict";
        var t,
          s = void 0;
        $(document).ready(function () {
          t = parseInt(
            $(window).width() -
              ($(".lp-hamberg").offset().left + $(".lp-hamberg").outerWidth())
          );
          767 < $(window).width() && $(window).width() < 991
            ? (s = "translate(" + (t - 10 + "px") + ", -50%)")
            : 991 < $(window).width() &&
              (s = "translate(" + (t - 30 + "px") + ", -50%)");
        });
        $(window).scroll(function () {
          var e = $(window).scrollTop();
          if (0 < e) {
            $("header").addClass("sticky");
            $(".lines").addClass("active");
            $("#progress").addClass("active");
            $("#progress").removeClass("end");
            $(".lp-hamberg").css({ transform: s });
            $(".menu--location").removeClass("active visible");
          } else {
            $("header").removeClass("sticky");
            $(".lp-hamberg").css({ transform: "translate(25px, -50%)" });
            $("#progress").removeClass("active");
            $("#progress").addClass("end");
            $(".lines").removeClass("active");
          }
          $(".menu--location").removeClass("active visible");
          $("header").removeClass("h-transparent");
          $(".main").removeClass("op-main-0");
          if (parseInt($(window).height()) < e) {
            (e = parseInt($(".lp-hamberg").offset().left)),
              (e =
                ($(".js-page-scroll-top").addClass("active"), 10 + e + "px"));
            $(".js-page-scroll-top").css({ left: e });
          } else $(".js-page-scroll-top").removeClass("active");
        });
        $("body").on("click", ".js-page-scroll-top", function () {
          $("html,body").animate({ scrollTop: $("html").offset().top }, 0);
        });
        $("body").on("click", ".js-location-dropdown__ar", function (e) {
          $(".menu--location").toggleClass("active visible");
          $("header").toggleClass("h-transparent");
        });
        $("body").on("click", ".lp-hamberg", function (e) {
          e.preventDefault();
          $(".main").toggleClass("active");
          $(".lp-hamberg").toggleClass("active");
          $(".desktop-menu").toggleClass("active");
          $("header")
            .find(".js-toggle")
            .not(
              ".navbar,.pos-row,.container,.lp-hamberg,.lp-hamberg__line,.lp-hamberg__line,.desktop-menu"
            )
            .toggleClass("js-hide");
          $("header").toggleClass("menu-open");
          $(".menu--location").removeClass("active visible");
          setTimeout(function () {
            $(".menu-link").toggleClass("active");
          }, 10);
          setTimeout(function () {
            $(".desktop-menu__item").toggleClass("active");
            $(".js-toggle").toggleClass("op-0");
            $(".menu--location").removeClass("active visible");
            $("header").removeClass("h-transparent");
            $(".main").removeClass("op-main-0");
          }, 300);
        });
        window.onscroll = function () {
          var e = document.getElementById("progress"),
            t = document.documentElement.scrollTop,
            s =
              document.documentElement.scrollHeight -
              document.documentElement.clientHeight,
            t = Math.round((100 * t) / s);
          if ($(window).width() < 768)
            if (97 <= t) {
              t = 100;
              $(".lp-hamberg").addClass("active-red");
            } else $(".lp-hamberg").removeClass("active-red");
          else
            100 == t
              ? $(".lp-hamberg").addClass("active-red")
              : $(".lp-hamberg").removeClass("active-red");
          e.style.background =
            "conic-gradient(#FD2E35\n        " +
            t +
            "%, #ffffff\n        " +
            t +
            "%)";
        };
      },
      {},
    ],
  },
  {},
  [1]
);


