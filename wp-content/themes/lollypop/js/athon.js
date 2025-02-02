$(document).ready(function () {
  $("header").addClass("lp-mainheader--white athon-header"),
    // $("footer").css({ background: "#f8e1af", "padding-top": "0" }),
    $("footer").find(".container").addClass("lp-container1000"),
    $("body").addClass("sec-yel-bg"),
    // $("footer").addClass("athon-footer"),
    $(".img-card-slider").slick({
      dots: !1,
      infinite: !0,
      speed: 800,
      slidesToShow: 2,
      slidesToScroll: 1,
      autoplay: !0,
      nextArrow: '<div class="next-slide"><div class="ar"></div>',
      prevArrow: '<div class="prev-slide"><div class="ar"></div>',
      arrows: !0,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            infinite: !0,
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
            slidesToShow: 1.1,
            slidesToScroll: 1,
            arrows: !1,
            autoplay: !1,
            centerMode: !0,
            autoplaySpeed: 1e3,
            infinite: !1,
            dots: !1,
          },
        },
      ],
    });
  Array.from(document.querySelectorAll(".js-play")).map(
    (o) =>
      new Plyr(o, {
        autoplay: !0,
        debug: !0,
        volume: 0,
        muted: !0,
        hideControls: !0,
        loop: !0,
        controls: [""],
        quality: {
          default: 100,
          options: [4320, 2880, 2160, 1440, 1080, 720, 576, 480, 360, 240],
        },
        loop: { active: !0 },
      })
  );
  $(".plyr__control--overlaid").trigger("click"),
    $(".participate-slider").slick({
      infinite: !1,
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: !0,
      arrows: !1,
      autoplay: !0,
      adaptiveHeight: !0,
    });

    $(".one").slick({
        infinite: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        arrows:false,
        speed:600,
        autoplay: !0,
      
      });
});
