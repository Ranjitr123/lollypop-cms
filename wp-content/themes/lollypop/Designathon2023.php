<?php

/**
 *  Template Name: Designathon2023
 *  */

get_header('designathon23');
?>
<style>
  body {
    padding-bottom: 0 !important;
  }

  .plyr__control--overlaid {
    opacity: 0;
  }

  .athon-header .h-li-nav {
    opacity: 0;
    pointer-events: none !important;
  }

  .jury__img::after {
    display: none;
  }

  .participate-slider .slick-slide {
    height: 100% !important;
  }

  .btn-yellow {
    display: inline-block;
    text-decoration: none;
    padding: 12px 36px;
    background: #FFDB00;
    font-size: 18px;
    font-weight: 700;
    color: #A30800;
    margin: 8px 0 0 0;
    position: relative;
    line-height: 1.0;
    height: 50px;
    clip-path: polygon(8% 0%, 100% 0%, 100% 0%, 100% 75%, 92% 100%, 0 100%, 0 100%, 0 25%);
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    transition: all 0.3s ease;
    line-height: 25px;
  }

  .btn-yellow:hover {
    color: #fff;
    clip-path: polygon(6.8% 0%, 100% 0%, 100% 0%, 100% 75%, 92% 100%, 0 100%, 0 100%, 0 25%);
  }

  .btn-red {
    display: inline-block;
    text-decoration: none;
    padding: 12px 36px;
    background: #E00;
    font-size: 18px;
    font-weight: 700;
    color: #FFF;
    margin: 8px 0 0 0;
    position: relative;
    line-height: 1.0;
    height: 50px;
    clip-path: polygon(8% 0%, 100% 0%, 100% 0%, 100% 75%, 92% 100%, 0 100%, 0 100%, 0 25%);
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    transition: all 0.3s ease;
    line-height: 25px;
  }

  .btn-yellow .white_arrow {
    display: none !important;
  }

  /* designathon footer */
  .footer {
    background: #191919 !important;
  }

  .ft-social-links__item a,
  .footer p {
    color: #FFFFFF !important;
  }

  .sec-banner {
    background-color: #A30800 !important;
    background-image: url("<?php echo get_template_directory_uri(); ?>/assets/images/designathon23/banner-top-dots.png");
    background-repeat: no-repeat;
    background-size: cover;
    top: -40px;
    height: 105vh;
  }

  .design23-head {
    color: #FFFFFF;
    text-transform: none;
    font-family: 'Manrope';
    font-size: 80px;
    font-style: normal;
    font-weight: 800;
    letter-spacing: -0.8px;
  }

  .fnt-24 {
    font-size: 28px !important;
    line-height: 24px !important;
  }

  .fnt-20 {
    font-size: 16px;
    line-height: 30px;
  }

  .clr-yel-92a {
    color: #FFDB00 !important;
  }

  .banner-side-img {
    width: fit-content;
    margin-top: 165px;
  }

  .banner-side-logo {
    width: 15%;
    padding-top: 5rem;
    margin-left: auto;
  }


  .footer-nav-links span {
    color: #FFFFFF !important;
  }

  .text-red {
    color: #E00B00 !important;
    font-weight: 700;
  }

  .text-yellow {
    color: #FFDB00;
  }

  .fnt-header {
    font-family: 'Manrope';
    font-size: 28px;
    font-style: normal;
    font-weight: 700;
    line-height: 32px
  }

  .fnt-countdown {
    font-size: 56px !important;
  }

  .mb-countdown {
    margin-bottom: 50px;
  }


  .sec-border {
    position: relative;
  }

  .sec-border::after {
    background: url("<?php echo get_template_directory_uri(); ?>/assets/images/new-designathon23/pattern.png") repeat-y left, 
    url("<?php echo get_template_directory_uri(); ?>/assets/images/new-designathon23/pattern.png") repeat-y right;
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -1;
  }

  .sec-reason-feel {
    margin-top: -2rem;
    height: 100rem;
  }

  .sec-countdown {
    background-color: #A30800 !important;
    background-size: contain;
    top: -45px;
    height: 40rem;
  }

  .sec-countdown {
    position: relative;
    background: url("<?php echo get_template_directory_uri(); ?>/assets/images/new-designathon23/coundown-bottom.png") repeat-x bottom;
    background-position-y: 90%;
  }

  .sec-countdown::before {
    content: "";
    position: absolute;
    bottom: 0;
    left: 0;
    background: url("<?php echo get_template_directory_uri(); ?>/assets/images/new-designathon23/human-hourglass.png") no-repeat;
    background-position: 20% 72%;
    background-size: 250px 250px;
    width: 60%;
    height: 100%;
  }

  .sec-countdown::after {
    content: "";
    position: absolute;
    bottom: 0;
    right: 0%;
    background: url("<?php echo get_template_directory_uri(); ?>/assets/images/new-designathon23/human-hourglass.png") no-repeat;
    background-position: 20% 72%;
    background-size: 250px 250px;
    width: 60%;
    height: 100%;
    transform: scaleX(-1);
  }

  .sec-countdown .item {
    background: url("<?php echo get_template_directory_uri(); ?>/assets/images/new-designathon23/Subtract.png") no-repeat;
    height: 100px;
    width: 140px;
  }

  .img-flip {
    -webkit-transform: scaleX(-1);
    transform: scaleX(-1);
  }

  .bg-frame {
    background: url("<?php echo get_template_directory_uri(); ?>/assets/images/new-designathon23/Frame-background.png") no-repeat;
    width: 325px;
    padding: 20px;
    background-size: 325px;
  }

  .countdown-dot {
    padding: 0 50px;
  }

  .event-time {
    background: black;
    border-radius: 5px;
    color: white;
    margin-left: 10px;
  }

  .sec-event-rule {
    margin-top: 160px;
    height: 40vh !important;
    padding-top: 10vh;
    margin-bottom: 10vh;
  }

  .sec-event-rule.has-tag {
    position: relative;
  }

  .sec-event-rule.has-tag:before {
    content: "";
    position: absolute;
    top: -45px;
    right: -18px;
    background: url("<?php echo get_template_directory_uri(); ?>/assets/images/new-designathon23/gibbon.png") no-repeat;
    width: 100%;
    height: 100%;
    background-position: 100% 0;
    background-size: 159px 60px;
  }

  .sec-event-rule.has-tag:after {
    content: "";
    position: absolute;
    bottom: -45px;
    left: -18px;
    background: url("<?php echo get_template_directory_uri(); ?>/assets/images/new-designathon23/gibbon.png") no-repeat;
    width: 100%;
    height: 100%;
    background-position: 100% 0%;
    background-size: 159px 60px;
    transform: rotate(-180deg);
  }

  .download-btn {
    margin: 0 auto;
    max-width: 200px;
    background-color: #fff;
    clip-path: polygon(8% 0%, 100% 0%, 100% 0%, 100% 75%, 92% 100%, 0 100%, 0 100%, 0 25%);
    padding: 1px;
  }

  .download-btn-item {
    display: inline-block;
    text-decoration: none;
    padding: 12px 36px;
    background: #FF3500;
    font-size: 18px;
    font-weight: 700;
    color: #FFFFFF;
    margin: 8px 0 0 0;
    position: relative;
    line-height: 1.0;
    height: 50px;
    clip-path: polygon(8% 0%, 100% 0%, 100% 0%, 100% 75%, 92% 100%, 0 100%, 0 100%, 0 25%);
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    transition: all 0.3s ease;
    line-height: 25px;
  }

  .event-rule-img {
    width: 75%;
    margin-top: 35px;
    margin-bottom: 40px;
  }

  .faq-head>p {
    width: 75%;
    margin-bottom: initial;
    margin-top: 24px
  }

  .faq-img {
    width: 55% !important;
  }

  @media screen and (max-width: 1536px) {
    .banner-side-img {
      margin-top: 125px;
    }

  }

  @media screen and (max-width: 992px) {
    .fnt-800 {
      letter-spacing: -0.8px !important;
    }
  }

  @media(max-width: 767px) {
    .our-sponser {
      margin-left: 21px !important;
    }

    .event-Details label {
      font-size: 14px;
      margin-top: 20px;
    }

    .btn-yellow {
      font-size: 14px;
      line-height: 19px;
      height: 43px;
    }

    .footer-slide-img {
      width: 80px;
      margin-left: 0px !important;
    }
  }


  @media(max-width: 768px) {
    .our-sponser:before {
      display: none;
    }

    .sec-banner {
      height: 100vh;
    }

    .register-btn a {
      margin-top: 2rem;
    }

    .btn-yellow .white_arrow {
      display: none !important;
    }

    .btn-yellow img {
      margin-left: 10px !important;
    }

    .banner-side-img {
      width: 104px !important;
      height: 205px !important;

    }

    .footer-slide-img {
      width: 45px !important;
      bottom: 0rem !important;
    }

    .banner-side-img {
      padding: 0px !important;
    }

    .sec-banner {
      background-size: auto;
    }

  }

  /* small device */
  @media screen and (min-width: 320px) and (max-width:420px) {
    .sec-border::after {
      background: none;
      z-index: -1;
    }

    .sec-reason-feel {
      margin-top: 0rem;
    }

    .banner-side-logo {
      width: 30%;
      padding-top: 5rem;
      margin-left: auto;
    }

    .sec-banner {
      height: 120vh;
    }

    .btn-yellow {
      width: -webkit-fill-available;
      clip-path: polygon(5% 0%, 100% 0%, 100% 0%, 100% 75%, 95% 100%, 0 100%, 0 100%, 0 25%);
    }

    .btn-red {
      width: -webkit-fill-available;
      clip-path: polygon(5% 0%, 100% 0%, 100% 0%, 100% 75%, 95% 100%, 0 100%, 0 100%, 0 25%);
    }

    .mt-5 {
      margin: 0px !important;
    }

    .design23-head {
      font-size: 48px;
      letter-spacing: -0.48px;
    }

    .banner-side-img {
      display: none;
    }

    .sec-countdown {
      top: 125px;
      height: 60vh;
      background: none
    }

    .sec-countdown::before {
      background: none;
    }

    .sec-countdown::after {
      background: none;
    }

    .footer-slide-img {
      width: 45px !important;
      bottom: 0rem !important;
    }

    .countdown-dot {
      padding: 6px 15px;
    }

    .sec-countdown .item {
      background-size: 100% 100%;
      height: 50px;
      width: 70px;
    }

    .fnt-countdown {
      font-size: 32px !important;
    }

    .fnt-header {
      font-size: 23px !important;
    }

    .fnt-header-28 {
      font-size: 28px !important;
    }

    .event-rule {
      margin-top: 50px;
    }

    .event-rule-img {
      width: 85%;
      margin-top: 15px;
      margin-bottom: 40px;
    }

    .sec-event {
      top: 200px
    }

    .event-title {
      display: flex;
    }

    .item-detail {
      margin-top: 25px;
    }

    .item-detail>h3 {
      color: #221429;
      font-family: Manrope;
      font-size: 20px;
      font-style: normal;
      font-weight: 700;
      line-height: 28px;
    }

    .item-detail>p {
      color: #221429;
      font-family: Manrope;
      font-style: normal;
      font-weight: 500;
      line-height: 22px;
    }

    .sec-faq {
      height: 160vh;
    }

    .fnt-24 {
      font-size: 20px !important;
      font-style: normal;
      font-weight: 700;
      line-height: 28px;
    }

    .text-yellow-white {
      color: #FFF;
      text-align: center;
      font-family: Manrope;
      font-size: 24px;
      font-style: normal;
      font-weight: 700;
    }

    .register-btn a {
      margin-top: 1rem;
    }

    .sec-event-rule {
      margin-top: 100px;
      height: 40vh !important;
      padding-top: 10vh;
      margin-bottom: 10vh;
    }

    .download-btn {
      margin: 0 auto;
      max-width: 200px;
      background-color: #fff;
      clip-path: polygon(8% 0%, 100% 0%, 100% 0%, 100% 75%, 92% 100%, 0 100%, 0 100%, 0 25%);
      padding: 1px;
    }

    .sec-event-rule.has-tag:before {
      background: none;
    }

    .sec-event-rule.has-tag:after {
      background: none;
    }
  }
</style>

<main class="main">
  <!-- 01 -->
  <section class="sec-banner pt-lg-7 pb-2 position-relative">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-12 col-lg-12 mx-auto mt-5 d-flex flex-row">
          <img class="img-fluid mb-5 banner-side-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/new-designathon23/Logo.png" alt="logo">
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md-9 col-lg-8 mx-auto">
          <div class="col-md-10 px-0">
            <h2 class="mb-3 mb-lg-4 col-12 col-md-10 col-lg-9 px-0 design23-head text-white">
              Mở tư duy<span class="clr-yel-92a">.</span> </h2>
            <h2 class="mb-3 mb-lg-4 col-12 col-md-10 col-lg-9 px-0 design23-head text-white">Bật giải pháp<span class=" clr-yel-92a">.</span> </h2>
            <p class="col-lg-11 col-xxl-10 px-0 fnt-16 design-content-p text-white">Với 3 mùa thành công vang dội tại đất nước “tỷ dân” - Ấn Độ, Lollypop Designathon đã chính thức có mặt tại Viêt Nam. Designathon hứa hẹn sẽ là một sân chơi bổ ích dành cho những Designer “tay mơ” thử sức 1 ngày hóa thân thành Designer “tay to” để giải quyết đề bài cân não thông qua thiết kế.</p>
          </div>
          <ul class="row px-0">
            <li class="col-6 col-md-4 col-lg-4 mt-5">
              <p class="fnt-20 text-white ">Ngày tham gia</p>
              <h6 class=" fnt-24 text-white">23/09/2023</h6>
            </li>
            <li class="col-6 col-md-4 col-lg-4 mt-5">
              <p class="fnt-20  text-white ">Thời gian</p>
              <h6 class=" fnt-24 text-white">9AM - 9PM</h6>
            </li>
            <li class="col-6 col-md-4 col-lg-4 mt-5">
              <p class="fnt-20 text-white ">Designers</p>
              <h6 class=" fnt-24 text-white">50+ thí sinh</h6>
            </li>
          </ul>
          <div class="register-btn">
            <a target="_blank" class="text-center btn-yellow ">Đăng ký ngay</a>
          </div>
        </div>
        <div class="col-3 col-md-3 col-lg-4">
          <div class="row">
            <img class="img-fluid mb-5 banner-side-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/new-designathon23/banner-bird.png" alt="logo">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- three-reason-and-feel -->
  <section class="sec-reason-feel sec-border pt-lg-7 pb-2">
    <!-- three-reason -->
    <div class="container">
      <div class="row reason-info">
        <div class="col-12 col-md-12 offset-lg-1 col-lg-4 mx-auto mt-5 d-flex flex-column">
          <h6 class="fnt-header">3 lý do không nên bỏ lỡ</h6>
          <h6 class="text-red fnt-header">Designathon 2023</h6>
        </div>
        <div class="col-12 col-md-12 col-lg-4 mx-auto mt-5 d-flex flex-row">
          <p>Với 3 mùa thành công vang dội tại Ấn Độ, Designathon là sự kiện thiết kế thường niên do Lollypop tổ chức.</p>
        </div>
      </div>
      <div class="row reason-detail mt-5 mb-5">
        <div class="col-12 col-md-9 col-lg-10 mx-auto">
          <ul class="row px-0" style="gap: 48px;">
            <li class="col-12 col-md-3 col-lg-4 pr-5 bg-frame">
              <div class="designation-slider">
                <div class="slider-item">
                  <img class="img-fluid mb-3" src="http://localhost/lollypop-cms/wp-content/uploads/2023/08/Rectangle-34624211.png" alt="" />
                </div>
              </div>
              <h6 class=" fnt-24 text-red">Giao lưu - tranh tài</h6>
              <p class="fnt-20">cùng những bộ óc sáng tạo trong ngành thiết kế</p>
            </li>
            <li class="col-12 col-md-3 col-lg-4 pr-5 bg-frame">
              <div class="designation-slider">
                <div class="slider-item">
                  <img class="img-fluid mb-3" src="http://localhost/lollypop-cms/wp-content/uploads/2023/08/Rectangle-34624211-1.png" alt="" />
                </div>
              </div>
              <h6 class=" fnt-24 text-red">Học - Hỏi</h6>
              <p class="fnt-20">cùng chuyên gia trong ngành để vỡ lẽ những bài học đắt giá</p>
            </li>

            <li class="col-12 col-md-3 col-lg-4 col-sm-12 pr-5 bg-frame">
              <div class="designation-slider">
                <div class="slider-item">
                  <img class="img-fluid mb-3" src="http://localhost/lollypop-cms/wp-content/uploads/2023/08/Rectangle-34624211-2.png" alt="" />
                </div>
              </div>
              <h6 class=" fnt-24 text-red">Mentoring 1 - 1</h6>
              <p class="fnt-20 ">với thủ lĩnh nhà Lollypop để đi nhanh hơn trong sự nghiệp</p>
            </li>
          </ul>
        </div>

      </div>
    </div>
    <!-- sec-feel-->
    <div class="container">
      <div class="row mt-5">
        <div class="col-12 col-md-12 offset-lg-1 col-lg-4 mx-auto mt-5 d-flex flex-column">
          <h6 class="fnt-header">Xem để cảm nhận sức nóng</h6>
          <h6 class="text-red fnt-header">Designathon India 2023</h6>
        </div>
        <div class="col-12 col-md-12 col-lg-4 mx-auto mt-5 d-flex flex-row">
          <p>Hơn 1,200+ lượt đăng ký chỉ sau 24h mở đơn, Designathon - một cơn lốc thực thụ trong cộng đồng Designer khắp nước Ấn!</p>
        </div>
      </div>
      <div class="row mt-5">
        <div class="text-center col-12 col-md-11 col-lg-9 col-xl-10 mx-auto">
          <a href="https://www.youtube.com/watch?v=2ZO_TVnvTBI&ab_channel=LollypopDesignStudio" data-fancybox="">
            <img class="img-fluid lazyloaded" src="<?php echo get_template_directory_uri(); ?>/assets/images/new-designathon23/youtube.png" alt="video"></noscript>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- sec-countdown -->
  <section class="sec-countdown pt-lg-7 pb-2 mt-5 pt-5 position-relative">
    <div class="container">
      <div class="row">

        <div class="col-12 col-lg-12 text-center d-flex flex-column">
          <h6 class="fnt-header text-yellow text-yellow-white"> Không bây giờ thì bao giờ? </h6>
          <p class="text-white mb-5">Chớp ngay cơ hội tham gia cuộc thử sức nảy lửa để tôi luyện ngòi bút thiết kế</p>

          <div class="d-flex justify-content-center mt-5 mb-5">
            <div class="countdown-item ">
              <div class="item  d-flex align-items-center justify-content-center">
                <h6 class="text-red fnt-header fnt-countdown">12</h6>
              </div>
              <div class="d-flex align-items-center justify-content-center">
                <h6 class="text-white fnt-header">Ngày</h6>
              </div>
            </div>
            <div class="countdown-dot d-flex align-items-center justify-content-center">
              <span class="text-white fnt-header fnt-countdown mb-countdown">:</span>
            </div>
            <div class="countdown-item ">
              <div class="item  d-flex align-items-center justify-content-center">
                <h6 class="text-red fnt-header fnt-countdown">22</h6>
              </div>
              <div class="d-flex align-items-center justify-content-center">
                <h6 class="text-white fnt-header">Giờ</h6>
              </div>
            </div>
            <div class="countdown-dot d-flex align-items-center justify-content-center">
              <span class="text-white fnt-header fnt-countdown mb-countdown">:</span>
            </div>
            <div class="countdown-item ">
              <div class="item  d-flex align-items-center justify-content-center">
                <h6 class="text-red fnt-header fnt-countdown">09</h6>
              </div>
              <div class="d-flex align-items-center justify-content-center">
                <h6 class="text-white fnt-header">Phút</h6>
              </div>
            </div>
          </div>

          <div class="register-btn mt-5 mb-5">
            <a target="_blank" class="text-center btn-yellow ">Đăng ký ngay</a>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- sec-3nd -->
  <section class="sec-event sec-border pt-lg-7 pb-2">
    <!-- event-detail -->
    <div class="container">
      <div class="row reason-info">
        <div class="col-12 col-md-12 offset-lg-1 col-lg-4 mt-5 mb-5 d-flex flex-column">
          <div class="event-title">
            <h6 class="fnt-header fnt-header-28">Hơn cả &nbsp; </h6>
            <h6 class="text-red fnt-header fnt-header-28">một cuộc thi</h6>
          </div>
          <p style="margin-bottom: initial; margin-top: 24px">Tham gia Designathon ngay để được</p>
          <p>Học hỏi - Giao lưu - Thiết kế - Tiệc tùng.</p>
        </div>

        <div class="col-12 col-md-12 col-lg-4 mt-5 d-flex flex-column">
          <div class="row d-flex mb-2">
            <span class="event-time col-2">08:30</span> <span class="event-detail col-9">Checkin</span>
          </div>
          <div class="row d-flex  mb-2">
            <span class="col-2" style="margin-left: 10px; color: black; height: 24px">|</span>
          </div>
          <div class="row d-flex  mb-2">
            <span class="event-time col-2">09:00</span> <span class="event-detail col-9">Tập hợp đội hình</span>
          </div>
          <div class="row d-flex  mb-2">
            <span class="col-2" style="margin-left: 10px; color: black;">|</span>
          </div>
          <div class="row d-flex mb-2">
            <span class="event-time col-2">09:30</span> <span class="event-detail col-9">Workshop cùng chuyên gia UI/UX</span>
          </div>
          <div class="row d-flex mb-2">
            <span class="col-2" style="margin-left: 10px; color: black;">|</span>
          </div>
          <div class="row d-flex mb-2">
            <span class="event-time col-2">10:15</span> <span class="event-detail col-9">Khai mạc Designathon 2023</span>
          </div>
          <div class="row d-flex mb-2">
            <span class="col-2" style="margin-left: 10px; color: black;">|</span>
          </div>
          <div class="row d-flex mb-2">
            <span class="event-time col-2">18:00</span> <span class="event-detail col-9">Trình làng giải pháp</span>
          </div>
          <div class="row d-flex mb-2">
            <span class="col-2" style="margin-left: 10px; color: black;">|</span>
          </div>
          <div class="row d-flex mb-2">
            <span class="event-time col-2">20:00</span> <span class="event-detail col-9">Công bố & Trao thưởng</span>
          </div>
          <div class="row d-flex mb-2">
            <span class="col-2" style="margin-left: 10px; color: black;">|</span>
          </div>
          <div class="row d-flex mb-2">
            <span class="event-time col-2">20:30</span> <span class="event-detail col-9">Quẩy tới bến</span>
          </div>
        </div>
      </div>

      <div class="row event-rule">
        <div class="col-12 col-md-12 offset-lg-1 col-lg-4 mt-5 d-flex flex-column">
          <div class="event-title">
            <h6 class="fnt-header fnt-header-28">Thể lệ &nbsp;</h6>
            <h6 class="text-red fnt-header fnt-header-28">Cuộc thi</h6>
          </div>
          <img class="img-fluid event-rule-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/new-designathon23/two-poeple-computer.png" alt="logo">
        </div>
        <div class="col-12 col-md-12 col-lg-4 mt-5 d-flex flex-column">
          <div class="row item-detail">
            <h3>Hình thức tổ chức:</h3>
            <div class="">
              <p style="margin-bottom: initial;">Offline, 22-23/09/2023 tại MG Building (1/12 Hoàng Việt, Phường 4, Tân Bình, TP. HCM)</p>
              <p>Mỗi đội sẽ có 12h để lên ý tưởng và hoàn thành giải pháp thiết kế theo đề bài BTC đưa ra.</p>
            </div>
          </div>

          <div class="row item-detail">
            <h3>Mở đơn đăng kí:</h3>
            <div class="">
              <p>Thời gian đăng ký: 26/08/2023 -10/09/2023</p>
              <p>Vì số lượng tham dự có hạn nên sau khi xem xét portfolio, BTC sẽ ưu tiên chọn những thí sinh đăng ký sớm nhất và gửi email xác nhận đăng ký.</p>
            </div>
          </div>

          <div class="row item-detail">
            <h3>Đối tượng tham gia:</h3>
            <div class="">
              <p>Fresher, Designers có kinh nghiệm làm việc dưới 1 năm , Sinh viên của các trường Đại học, Cao đẳng, Học viện, Trung tâm trên cả nước.</p>
            </div>
          </div>

          <div class="row item-detail">
            <h3>Giải thưởng:</h3>
            <div class="">
              <p>Cơ hội thắng các giải thưởng hấp dẫn bao gồm: <span class="text-red">10 TRIỆU</span> đồng tiền mặt, <span class="text-red">Mentoring 1 - 1</span> với chuyên gia , <span class="text-red">Bộ quà tặng</span> (Limited Edition) & <span class="text-red">Certificate</span> đến từ Lollypop.</p>
            </div>
          </div>
          <div class="row item-detail">
            <p class="text-red">Bạn còn chần chờ gì nữa?</p>
            <div class="register-btn">
              <a target="_blank" class="text-center btn-red ">Đăng ký ngay</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- event-rule-->
    <div class="container sec-banner sec-event-rule has-tag">
      <div class="row text-center ">
        <div class="col-12 col-md-12 offset-lg-1 col-lg-10 mx-auto mt-5 d-flex flex-column">
          <h6 class="fnt-header text-white">Tìm hiểu thêm</h6>
          <h6 class="text-red fnt-header"> <span class="text-yellow"> Quy định</span> <span class="text-white"> Designathon 2023 </span></h6>
        </div>

        <div class="d-flex justify-content-center mt-5 mb-5">
          <div class="countdown-item ">
            <div class="item  d-flex align-items-center justify-content-center">
              <img class="img-fluid d-none d-sm-block" src="<?php echo get_template_directory_uri(); ?>/assets/images/new-designathon23/Group72.png" alt="logo">
            </div>

          </div>
          <div class="countdown-dot d-flex align-items-center justify-content-center">
            <div class="download-btn mb-countdown">
              <a target="_blank" class="text-center download-btn-item" style="background: #A30800;margin: 0;">Tải xuống PDF</a>
            </div>
          </div>
          <div class="countdown-item ">
            <div class="item  d-flex align-items-center justify-content-center">
              <img class="img-fluid d-none d-sm-block" src="<?php echo get_template_directory_uri(); ?>/assets/images/new-designathon23/Group72.png" alt="logo">
            </div>
          </div>
        </div>
      </div>

    </div>
    <!-- faq -->
    <div class="container sec-faq">
      <div class="row faq-info">
        <div class=" faq-head col-12 col-md-12 offset-lg-1 col-lg-4 mt-5 d-flex flex-column">
          <div class="event-title">
            <h6 class="text-red fnt-header fnt-header-28">Câu hỏi</h6>
            <h6 class="fnt-header fnt-header-28">Thường gặp</h6>
          </div>
          <p> Những câu hỏi thường gặp để giải đáp những thắc mắc về cuộc thi Designathon.</p>
          <img class="img-fluid faq-img d-none d-sm-block" src="<?php echo get_template_directory_uri(); ?>/assets/images/new-designathon23/faq-bird.png" alt="logo">
        </div>
        <div class="col-12 col-md-12 col-lg-7 mt-5 d-flex flex-column">
          <div class="d-athon-mision row mb-5 mb-md-0 justify-content-center">
          </div>
          <div class="faq-el--athon">
            <div class="faq-el__body">
              <ul class="px-0 mb-0 faq-ac row justify-content-between">
                <li class="faq-ac__item col-12">
                  <div class="f-accordion">
                    <div class="f-accordion__head">
                      <h6 class="fnt-16 fnt-800 mb-0">Đây là sự kiện Online hay Offline?</h6>
                    </div>
                    <div class="f-accordion__body">
                      <p class="fnt-18 mb-0">Designathon 2023 là sự kiện offline được tổ chức tại văn phòng Lollypop Design Studio. Tất cả những gì bạn cần làm từ SÁNG đến TỐI đơn giản là: Eat-Design-Chill-Repeat. Những thứ khác đã có BTC lo hết!
                      </p>
                    </div>
                  </div>
                </li>
                <li class="faq-ac__item col-12">
                  <div class="f-accordion">
                    <div class="f-accordion__head">
                      <h6 class="fnt-16 fnt-800 mb-0">Điều kiện tham gia là gì?</h6>
                    </div>
                    <div class="f-accordion__body">
                      <p class="fnt-18 mb-0">Đối tượng tham gia cuộc thi là các bạn Fresher, Designers có kinh nghiệm làm việc dưới 1 năm hoặc mới chuyển ngành, Sinh viên của các trường Đại học, Cao đẳng, Học viện, Trung tâm trên cả nước.</p>
                    </div>
                  </div>
                </li>
                <li class="faq-ac__item col-12">
                  <div class="f-accordion">
                    <div class="f-accordion__head">
                      <h6 class="fnt-16 fnt-800 mb-0">Thời gian và địa điểm tổ chức Designathon ở đâu?</h6>
                    </div>
                    <div class="f-accordion__body">
                      <p class="fnt-18 mb-0">Đây là cuộc thi tổ chức Offline, diễn ra từ ngày 22-23/09/2023 tại MG Building (1/12 Hoàng Việt, Phường 4, Tân Bình, TP. HCM).</p>
                    </div>
                  </div>
                </li>
                <li class="faq-ac__item col-12">
                  <div class="f-accordion">
                    <div class="f-accordion__head">
                      <h6 class="fnt-16 fnt-800 mb-0">Tôi không phải là dân trong ngành thiết kế thì có thể tham gia được không?</h6>
                    </div>
                    <div class="f-accordion__body">
                      <p class="fnt-18 mb-0" style="color: rgba(255, 255, 255, 0.7) !important;">Cuộc thi này chỉ dành cho các bạn Fresher, Designers có kinh nghiệm làm việc dưới 1 năm hoặc mới chuyển ngành, Sinh viên của các trường Đại học, Cao đẳng, Học viện, Trung tâm trên cả nước.</p>
                    </div>
                  </div>
                </li>
                <li class="faq-ac__item col-12">
                  <div class="f-accordion">
                    <div class="f-accordion__head">
                      <h6 class="fnt-16 fnt-800 mb-0">Tôi không sinh sống và làm việc tại TP.HCM thì có thể tham gia không?</h6>
                    </div>
                    <div class="f-accordion__body">
                      <p class="fnt-18 mb-0">Lollypop luôn chào đón tất cả sinh viên, Designer từ tất cả mọi nơi đến tham dự cuộc thi</p>
                    </div>
                  </div>
                </li>
                <li class="faq-ac__item col-12">
                  <div class="f-accordion">
                    <div class="f-accordion__head">
                      <h6 class="fnt-16 fnt-800 mb-0">Tôi có được hỗ trợ chi phí đi lại và lưu trú không?</h6>
                    </div>
                    <div class="f-accordion__body">
                      <p class="fnt-18 mb-0" style="color: rgba(255, 255, 255, 0.7) !important;">Bạn sẽ tự chi trả chi phí di chuyển đến địa điểm tổ chức, sau đó chúng tôi sẽ hỗ trợ khu vực nghỉ ngơi trong suốt quá trình thi.</p>
                    </div>
                  </div>
                </li>
                <li class="faq-ac__item col-12">
                  <div class="f-accordion">
                    <div class="f-accordion__head">
                      <h6 class="fnt-16 fnt-800 mb-0">Quy trình Đăng ký như thế nào?</h6>
                    </div>
                    <div class="f-accordion__body">
                      <p class="fnt-18 mb-0">Để đăng ký, bạn cần điền vào Form đăng ký trên website. Nhấp vào nút Đăng ký ngay.</p>
                    </div>
                  </div>
                </li>
                <li class="faq-ac__item col-12">
                  <div class="f-accordion">
                    <div class="f-accordion__head">
                      <h6 class="fnt-16 fnt-800 mb-0">Tôi có phải trả tiền để tham gia cuộc thi không?</h6>
                    </div>
                    <div class="f-accordion__body">
                      <p class="fnt-18 mb-0" style="color: rgba(255, 255, 255, 0.7) !important;">Không, cuộc thi Designathon 2023 hoàn toàn miễn phí cho tất cả mọi người.</p>
                    </div>
                  </div>
                </li>
                <li class="faq-ac__item col-12">
                  <div class="f-accordion">
                    <div class="f-accordion__head">
                      <h6 class="fnt-16 fnt-800 mb-0">Hạn chót đăng ký thi là khi nào?</h6>
                    </div>
                    <div class="f-accordion__body">
                      <p class="fnt-18 mb-0">Hạn chót đăng ký là xx giờ ngày XX tháng 8.</p>
                    </div>
                  </div>
                </li>
                <li class="faq-ac__item col-12">
                  <div class="f-accordion">
                    <div class="f-accordion__head">
                      <h6 class="fnt-16 fnt-800 mb-0"> Tôi có cần chuẩn bị mang theo những gì khi đi thi?</h6>
                    </div>
                    <div class="f-accordion__body">
                      <p class="fnt-18 mb-0">Các thí sinh cần mang theo laptop cá nhân. Kết nối Wifi và các vật dụng khác (Bút chì, Tẩy, Giấy notes,...) đều đã được BTC chuẩn bị sẵn!</p>
                    </div>
                  </div>
                </li>
                <li class="faq-ac__item col-12">
                  <div class="f-accordion">
                    <div class="f-accordion__head">
                      <h6 class="fnt-16 fnt-800 mb-0"> Tôi cần nộp bài thi thiết kế dưới định dạng gì?</h6>
                    </div>
                    <div class="f-accordion__body">
                      <p class="fnt-18 mb-0" style="color: rgba(255, 255, 255, 0.7) !important;">Bạn sẽ được BTC phổ biến cụ thể về định dạng nộp bài và tiêu chí chấm điểm phần thi trước khi sự kiện bắt đầu</p>
                    </div>
                  </div>
                </li>
                <li class="faq-ac__item col-12">
                  <div class="f-accordion">
                    <div class="f-accordion__head">
                      <h6 class="fnt-16 fnt-800 mb-0">Tôi có được nhận tiền thưởng cho đội chiến thắng của Designathon không?</h6>
                    </div>
                    <div class="f-accordion__body">
                      <p class="fnt-18 mb-0">Đội chiến thắng sẽ nhận được giải thưởng tiền mặt hấp dẫn!</p>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php
get_footer('designathon23');
?>

<script>
  // $(document).ready(function() {

  //   $(".designation-slider").slick({
  //     infinite: true,
  //     slidesToShow: 1,
  //     slidesToScroll: 1,
  //     dots: false,
  //     arrows: false,
  //     speed: 600,
  //     autoplay: !0,

  //   });
  // });
</script>