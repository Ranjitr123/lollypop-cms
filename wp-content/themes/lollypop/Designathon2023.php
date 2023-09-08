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

  .js-page-scroll-top,
  .header {
    display: none;
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
    color: #000;
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
    width: 40%;
  }

  .event-btn-yellow {
    width: 25% !important;
  }

  .btn-yellow:hover {
    color: #000;
    background: #FFF;
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
    width: 275px;
  }

  .btn-red:hover {
    color: #FFF;
    background: #A30800;
    clip-path: polygon(6.8% 0%, 100% 0%, 100% 0%, 100% 75%, 92% 100%, 0 100%, 0 100%, 0 25%);
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
    height: auto;
    padding-bottom: 80px !important;
  }

  .sec-banner::after {
    background: url("<?php echo get_template_directory_uri(); ?>/assets/images/new-designathon23/logo.png") no-repeat right;
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 90%;
    height: 70%;
    background-size: 400px 400px;
  }

  .sec-event-rule-banner {
    top: -40px;
    background-color: #A30800 !important;
  }

  .design23-head {
    color: #FFFFFF;
    text-transform: none;
    font-family: 'Manrope';
    font-size: 80px;
    font-style: normal;
    font-weight: 800;
    line-height: 88px;
    letter-spacing: -0.8px;
  }

  .fnt-24 {
    font-size: 28px !important;
    line-height: 32px !important;
    padding-top: 4px;
  }

  .fnt-20 {
    font-size: 16px;
    line-height: 24px;
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
    margin-right: -50px;
  }


  .footer-nav-links span {
    color: #FFFFFF !important;
  }

  .text-red {
    color: #E00B00 !important;
    font-weight: 700;
  }

  .text-yellow {
    color: #FFDB00 !important;
  }

  .fnt-header {
    color: #221429;
    font-family: 'Manrope';
    font-size: 40px;
    font-style: normal;
    font-weight: 700;
    line-height: 32px;
    padding-top: 4px;
  }

  .fnt-countdown {
    font-size: 56px !important;
    color: #A30800;
    text-align: center;
    font-family: Manrope;
    font-style: normal;
    font-weight: 800;
    line-height: 120%;
  }

  .mb-countdown {
    margin-bottom: 65px;
  }


  .sec-border {
    position: relative;
  }

  .mt-24 {
    margin-bottom: initial;
    margin-top: 24px;
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
    background-color: #FFF9EC;
    z-index: -1;
  }

  .sec-reason-feel {
    margin-top: -2.8rem;
    height: auto;
    padding-bottom: 160px !important;
  }

  .sec-countdown {
    background-color: #A30800 !important;
    background-size: contain;
    top: -45px;
    height: 655px;
  }

  .sec-countdown {
    position: relative;
    background: url("<?php echo get_template_directory_uri(); ?>/assets/images/new-designathon23/coundown-bottom.png") repeat-x bottom;
    background-position-y: 555px;
    z-index: 1;
  }

  .sec-countdown::before {
    content: "";
    position: absolute;
    bottom: 0;
    left: 0;
    background: url("<?php echo get_template_directory_uri(); ?>/assets/images/new-designathon23/human-hourglass.png") no-repeat;
    background-position: 70% 77%;
    background-size: 225px 225px;
    width: 33%;
    height: 100%;
    z-index: -10;
  }

  .sec-countdown::after {
    content: "";
    position: absolute;
    bottom: 0;
    right: 0%;
    background: url("<?php echo get_template_directory_uri(); ?>/assets/images/new-designathon23/human-hourglass.png") no-repeat;
    background-position: 70% 77%;
    background-size: 225px 225px;
    width: 33%;
    height: 100%;
    transform: scaleX(-1);
    z-index: -1000;
  }

  .sec-countdown .item {
    background: url("<?php echo get_template_directory_uri(); ?>/assets/images/new-designathon23/countdown.png") no-repeat;
    height: 90px;
    width: 120px;
  }

  .img-flip {
    -webkit-transform: scaleX(-1);
    transform: scaleX(-1);
  }

  .bg-frame {
    background: url("<?php echo get_template_directory_uri(); ?>/assets/images/new-designathon23/Frame-background.png") no-repeat;
    /* width: 325px; */
    padding: 20px;
    background-size: 92%;
  }

  .bg-frame>p {
    width: 90%;
  }

  .img-reason {
    max-width: 91% !important;
  }

  .bg-bgk {
    background: url("<?php echo get_template_directory_uri(); ?>/assets/images/new-designathon23/bgk-background.png") no-repeat;
    width: 325px;
    padding: 20px;
    background-size: 325px;
    background-position-y: 191px;
  }

  .countdown-dot {
    padding: 0 32px;
  }

  .event-time {
    background: black;
    border-radius: 5px;
    color: white;
    margin-left: 10px;
    font-size: 18px;
    width: 75px;
  }

  .countdown-datetime {
    font-size: 24px !important;
    font-weight: 700;
    line-height: 120%;
  }

  .sec-event-rule {
    margin-top: 160px;
    height: auto !important;
    padding-top: 56px;
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
    width: 20%;
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
    width: 20%;
    height: 100%;
    background-position: 100% 0%;
    background-size: 159px 60px;
    transform: rotate(-180deg);
  }

  .download-btn {
    margin: 0 auto;
    max-width: 280px;
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
    width: 277px;
  }

  .download-btn-item:hover {
    color: #FFDB00;
    background: #A30800;
  }

  .download-btn:hover {
    background: #FFDB00;
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

  .sec-bgk {
    margin-top: 125px;
  }

  .sec-partner {
    background-color: #A30800 !important;
    content: "";
    background: url("<?php echo get_template_directory_uri(); ?>/assets/images/new-designathon23/bg-partner.png") no-repeat right;
    position: absolute;
    background-position-y: inherit;
    width: 100%;
    height: 100%;
  }

  .sec-event-detail {
    margin-top: -45px;
    height: auto;
    padding-top: 160px;
  }

  .sec-event {
    margin-top: -2px !important;
    height: auto !important;
    padding-top: 51px;
  }

  .img-gap {
    gap: 48px;
  }

  .row-slider {
    display: grid;
    grid-template-columns: repeat(3, 33.3%);
    gap: 15px;
    height: calc(100% + 50px);
  }

  .faq-el--athon .f-accordion__head::before {
    background-color: #000 !important;
  }

  .faq-el--athon .f-accordion__head::after {
    background-color: #000 !important;
  }

  .banner-desc-pt {
    padding-top: 28px;
  }

  .fnt-16 {
    line-height: 26px !important;
    font-weight: 500;
  }

  .fnt-20 {
    font-weight: 400;
  }

  .mt-48 {
    margin-top: 40px;
  }

  .sec-feel {
    display: flex;
    justify-content: center;
    margin-top: 112px !important;
    margin-bottom: 56px !important;
  }

  .sec-video {
    /* padding-bottom: 160px; */
  }

  .countdown-register-btn {
    padding-top: 40px;
  }

  .event-rule-item {
    color: #221429;
    font-family: Manrope;
    font-size: 24px;
    font-style: normal;
    font-weight: 700;
    line-height: 32px;
  }

  .item-detail {
    margin-top: 32px;
  }

  .item-detail>p {
    color: #221429;
    font-family: Manrope;
    font-size: 16px;
    font-style: normal;
    font-weight: 500;
    line-height: 22px;
  }

  .item-detail>span {
    font-weight: 800;
  }

  .fnt-fdm {
    color: #FFF;
    font-family: Manrope;
    font-size: 20px;
    font-style: normal;
    font-weight: 700;
    line-height: normal;
    padding-bottom: 24px;
  }

  .download-btn-mb {
    padding-bottom: 56px;
  }

  .sec-faq {
    padding-top: 80px;
    padding-bottom: 100px;
  }

  .fnt-18 {
    color: #221429;
    font-family: Manrope;
    font-size: 18px;
    font-style: normal;
    line-height: 24px;
  }

  .fnt-700 {
    font-weight: 700;
  }

  .event-detail {
    color: #221429;
    font-family: Manrope;
    font-size: 20px;
    font-style: normal;
    font-weight: 500;
  }

  .even-timeline {
    padding-bottom: 160px;
  }

  .partner-grid {
    display: grid;
    grid-template-columns: repeat(5, 20%);
    gap: 24px;
    padding-top: 12px;
  }

  .partner-logos {
    padding-bottom: 60px;
  }

  .pt-80 {
    padding-top: 80px;
  }

  .fnt-media {
    color: #FFF;
    font-family: Manrope;
    font-size: 24px;
    font-style: normal;
    font-weight: 700
  }

  .partner-item {
    padding-top: 48px;
  }

  .arena-img {
    width: 90%;
    height: 90%;
  }

  .timeline_descr {
    width: 298px;
  }

  @media screen and (max-width: 1536px) {
    .banner-side-img {
      margin-top: 175px;
    }

    .sec-countdown::before,
    .sec-countdown::after {
      background-position: 85px 325px;
      background-size: 225px 225px;
    }

    .banner-side-logo {
      margin-right: -50px;
    }

    .sec-event-detail {
      height: auto;
      margin-bottom: 0px;
    }

    .sec-faq {
      height: auto;
    }

    .sec-countdown {
      height: 645px;
      background-position-y: 550px;
    }
  }

  @media screen and (max-width: 1400px) {
    .sec-faq {
      height: 160vh;
    }
  }

  @media screen and (max-width: 1280px) {
    .banner-side-img {
      margin-top: 240px;
      padding-right: 50px;
    }

    .btn-yellow {
      width: 35%;
    }

    .banner-side-logo {
      margin-right: 15px;
    }

    .sec-event-detail {
      height: auto;
      margin-bottom: 0px;
    }

    .sec-faq {
      height: auto;
    }

    .design23-head {
      font-size: 70px;
    }

    .sec-countdown::before,
    .sec-countdown::after {
      background-position: 60px 328px;
      background-size: 170px 170px;
    }

    .partner-grid {
      gap: 0px;
    }

    .sec-countdown {
      height: 570px;
      background-position-y: 498px;
    }

    .countdown-register-btn {
      padding-top: 30px;
    }

    .mt-5 {
      margin-top: 1rem !important;
    }

  }

  @media screen and (max-width: 992px) {
    .fnt-800 {
      letter-spacing: -0.8px !important;
    }

    .sec-event-detail {
      height: 125vh;
    }
  }

  @media(max-width: 767px) {
    .our-sponser {
      margin-left: 21px !important;
    }

    .sec-event-detail {
      height: auto;
      margin-bottom: 15px;
    }

    .event-Details label {
      font-size: 14px;
      margin-top: 20px;
    }

    .btn-yellow {
      font-size: 18px;
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

    .sec-event-detail {
      height: auto;
      margin-bottom: 15px;
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
  @media screen and (min-width: 320px) and (max-width:600px) {
    .sec-border::after {
      background: none;
      z-index: -1;
    }

    .row-slider {
      grid-template-columns: none;
      height: 100%;
    }

    .sec-reason-feel {
      margin-top: 0rem;
      height: auto;
      /* padding-bottom: 96px !important; */

    }

    .banner-side-logo {
      width: 30%;
      padding-top: 5rem;
      /* margin-right: 30px; */
    }

    .sec-banner {
      height: auto;
    }

    .banner-register-btn {
      padding-bottom: 0px;
    }

    .btn-yellow {
      clip-path: polygon(5% 0%, 100% 0%, 100% 0%, 100% 75%, 95% 100%, 0 100%, 0 100%, 0 25%);
      width: -webkit-fill-available !important;
      height: 56px;
      padding-top: 18px;
    }

    .btn-red {
      width: -webkit-fill-available;
      clip-path: polygon(5% 0%, 100% 0%, 100% 0%, 100% 75%, 95% 100%, 0 100%, 0 100%, 0 25%);
      height: 56px;
      padding-top: 16px;
    }

    .mt-5 {
      margin: 0px !important;
      padding-top: 1rem;

    }

    .design23-head {
      font-size: 48px;
      letter-spacing: -0.48px;
      line-height: 56px;
    }

    .sec-event-detail {
      margin-top: 1rem;
      height: auto;
      margin-bottom: 15px;
      padding-top: 48px;
    }

    .banner-side-img {
      display: none;
    }

    .sec-countdown {
      height: auto;
      background: none
    }

    .countdown-register-btn {
      padding-top: 40px;
      padding-bottom: 48px;
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
      padding: 5px 6px;
      margin-bottom: 52px;
    }

    .sec-countdown .item {
      background-size: 100% 100%;
      height: 50px;
      width: 70px;
    }

    .fnt-countdown {
      font-size: 32px !important;
      margin-bottom: 0.3rem !important;
    }

    .fnt-header {
      font-size: 24px !important;
      margin-bottom: 0px !important;
    }

    .fnt-header-28 {
      font-size: 28px !important;
    }

    .event-rule {
      margin-top: 8vh;
    }

    .event-rule-img {
      width: 85%;
      margin-top: 15px;
      margin-bottom: 40px;
    }

    .sec-event {
      margin-top: -45px !important;
      height: auto !important;
      padding-bottom: 50px;
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

    /* .item-detail>p {
      color: #221429;
      font-family: Manrope;
      font-style: normal;
      font-weight: 500;
      line-height: 22px;
    } */

    .sec-faq {
      height: auto;
      padding-bottom: 25px;
    }

    .fnt-24 {
      font-size: 20px !important;
      font-style: normal;
      font-weight: 700;
      line-height: 24px !important;
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
      margin-top: 0rem;
    }

    .sec-event-rule {
      margin-top: 100px;
      height: auto !important;
      padding-top: 48px;
      margin-bottom: 10vh;
      margin-top: 100px;
    }

    .download-btn {
      margin: 0 auto;
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

    .sec-partner {
      /* margin-top: 155vh; */
      background: none;
    }

    .sec-bgk {
      margin-top: 50px;
      height: 100vh;
    }

    .img-gap {
      gap: 15px;
    }

    .container-event-rule {
      position: relative;
      width: calc(100vw + 40px);
      left: -40px;
    }

    .bg-frame {
      background-size: 100% 95%;
    }

    .event-btn-yellow {
      width: -webkit-fill-available !important;
      height: 56px;
      padding-top: 16px;
    }

    .bg-frame>p {
      width: 100%;
    }

    .img-reason {
      max-width: 100% !important;
    }

    .banner-desc-pt {
      padding-top: 24px;
    }

    .fnt-16 {
      line-height: 20px !important;
    }

    .mt-48 {
      margin-top: 20px;
    }

    .sec-feel {
      display: block;
      margin-top: 80px !important;
    }

    .sec-reason-feel {
      padding-bottom: 96px !important;
    }

    .event-rule-item {
      font-size: 24px;
      line-height: 32px;
    }

    .fnt-fdm {
      font-size: 18px;
      padding-bottom: 16px;
    }

    .sec-faq {
      padding-top: 0px;
    }

    .event-time {
      height: fit-content;
    }

    .even-timeline {
      padding-bottom: 96px;
    }

    .partner-grid {
      display: grid;
      grid-template-columns: repeat(2, 50%);
      gap: 0px;
      padding-top: 12px;
    }

    .partner-logos {
      padding-bottom: 48px;
      padding-left: inherit;
    }

    .fnt-media {
      font-size: 18px;
      margin-top: 12px;
    }

    .pb-12 {
      padding-bottom: 12px;
    }

    .download-btn-item {
      padding-bottom: 15px;
    }

    .banner_heading_2 {
      width: auto !important;
    }

    .langual {
      padding-bottom: 35px;
      right: 0px !important;
      text-align: right;
      padding-right: 50px;
      padding-top: 20px;
      position: inherit;
      z-index: 1;
    }

    .banner-register-btn {
      position: relative;
      z-index: 1;
    }

    .sec-banner::after {
      background-size: 175px 175px;
      width: 375px;
      height: 200px;
    }

    .langual {
      text-align: left !important;
      padding-left: 20px;
    }
  }

  .main-slash>div:first-child {
    display: none !important;
  }

  .banner_heading_2 {
    width: max-content;
  }

  .langual {
    padding-bottom: 135px;
    right: 0px !important;
    text-align: right;
    padding-right: 50px;
    padding-top: 20px;
    position: inherit;
    z-index: 1;
  }

  .banner-register-btn {
    position: relative;
    z-index: 1;
  }
</style>

<main class="main">
  <!-- 01 -->
  <section class="sec-banner pt-lg-7 pb-2 position-relative">
    <div class="row langual">

      <?php $current_slug = add_query_arg(array(), $wp->request);
      if ($current_slug == 'designathonvn-2023') { ?>
        <a href="<?php echo get_site_url()?>/designathonvn-2023-eng/"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/new-designathon23/Frame-ENG.png" alt="logo"> </a>
      <?php } else { ?>
        <a href="<?php echo get_site_url()?>/designathonvn-2023/"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/new-designathon23/Frame-VIE.png" alt="logo"> </a>
      <?php } ?>
    </div>
    <div class="container">


      <div class="row">
        <div class="col-12 col-md-9 col-lg-8 mx-auto">
          <div class="col-md-10 px-0">
            <h2 class="col-12 col-md-10 col-lg-9 px-0 design23-head text-white"><?php the_field('banner_heading_1') ?><span class="clr-yel-92a">.</span></h2>
            <h2 class="mb-3 mb-lg-4 col-12 col-md-10 col-lg-9 px-0 design23-head text-white banner_heading_2"><?php the_field('banner_heading_2') ?><span class=" clr-yel-92a">.</span> </h2>
            <p class="col-lg-11 col-xxl-10 px-0 fnt-16 banner-desc-pt text-white">
              <?php the_field('banner_description') ?>
            </p>
          </div>

          <ul class="row px-0">
            <?php if (have_rows('banner_details')) : while (have_rows('banner_details')) : the_row(); ?>
                <li class="col-6 col-md-4 col-lg-4 mt-4">
                  <p class="fnt-20 text-white " style="margin-bottom: initial;"><?php the_sub_field('banner_detail_title'); ?></p>
                  <h6 class=" fnt-24 text-white"><?php the_sub_field('banner_detail_content'); ?></h6>
                </li>
            <?php endwhile;
            endif; ?>
          </ul>
          <div class="register-btn banner-register-btn mt-5">
            <a id="banner_registration_form" target="_blank" href="<?php the_field('banner_button_url') ?>" class="text-center btn-yellow "><?php the_field('banner_button_text') ?></a>
          </div>
        </div>
        <div class="col-3 col-md-3 col-lg-4">
          <div class="row">

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- three-reason-and-feel -->
  <section class="sec-reason-feel sec-border pt-lg-7 pb-2">
    <!-- three-reason -->
    <div class="container mb-5 pt-5">
      <div class="row">
        <div class="col-12 col-md-12 offset-lg-1 col-lg-5 mt-5 d-flex flex-column">
          <h6 class="fnt-header"><?php the_field('reason_black_heading') ?></h6>
          <h6 class="text-red fnt-header"><?php the_field('reason_red_heading') ?></h6>
        </div>
        <div class="col-12 col-md-12 col-lg-4 mx-auto mt-3 d-flex align-items-center">
          <p class="me-5"><?php the_field('reason_descr') ?></p>
        </div>
      </div>
      <div class="row mt-48 mb-5">
        <div class="col-12 col-md-9 col-lg-10 mx-auto">
          <div class="row-slider px-0 img-gap">

            <?php if (have_rows('reason_images')) : while (have_rows('reason_images')) : the_row(); ?>
                <div class="column-slider pr-5 bg-frame">
                  <div class="designation-slider">
                    <div class="slider-item">
                      <img class="img-fluid img-reason mb-3" src="<?php the_sub_field('reason_image_img') ?>" alt="logo" />
                    </div>
                  </div>
                  <h6 class=" fnt-24 text-red"><?php the_sub_field('reason_image_title') ?></h6>
                  <p class="fnt-20"><?php the_sub_field('reason_image_descr') ?></p>
                </div>
            <?php endwhile;
            endif; ?>
          </div>
        </div>

      </div>
    </div>
    <!-- sec-feel-->
    <div class="container">
      <div class="mt-5 sec-feel">
        <div class="col-12 col-md-12 offset-lg-1 col-lg-5 mt-5 d-flex flex-column">
          <h6 class="fnt-header"><?php the_field('yt_black_heading') ?></h6>
          <h6 class="text-red fnt-header"><?php the_field('yt_red_heading') ?></h6>
        </div>
        <div class="col-12 col-md-12 col-lg-4 mx-auto mt-5 d-flex flex-row">
          <p><?php the_field('yt_description') ?></p>
        </div>
      </div>
      <div class="mt-4 sec-video">
        <div class="text-center col-12 col-md-11 col-lg-9 col-xl-10 mx-auto">
          <a href="<?php the_field('video_url') ?>" data-fancybox="">
            <img class="img-fluid lazyloaded" src="<?php the_field('yt_image') ?>" alt="video"></noscript>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- sec-countdown -->
  <section class="sec-countdown pt-lg-7 pb-2 mt-5 pt-5 position-relative">
    <div class="container">
      <div class="row">

        <div class="col-12 col-lg-12 text-center mt-5 d-flex flex-column">
          <h6 class="fnt-header text-yellow"> <?php the_field('cd_yellow_heading') ?></h6>
          <p class="text-white mt-3 mb-5"><?php the_field('cd_content') ?></p>
          <div class="d-flex justify-content-center">
            <div class="countdown-item ">
              <div class="item  d-flex align-items-center justify-content-center">
                <h6 id="cdate" class="text-red fnt-header fnt-countdown">00</h6>
              </div>
              <div class="d-flex align-items-center justify-content-center mt-2">
                <h6 class="text-white fnt-header countdown-datetime"><?php the_field('cd_date') ?></h6>
              </div>
            </div>
            <div class="countdown-dot d-flex align-items-center justify-content-center">
              <span class="text-white fnt-header fnt-countdown mb-countdown">:</span>
            </div>
            <div class="countdown-item ">
              <div class="item  d-flex align-items-center justify-content-center">
                <h6 id="chour" class="text-red fnt-header fnt-countdown">00</h6>
              </div>
              <div class="d-flex align-items-center justify-content-center mt-2">
                <h6 class="text-white fnt-header countdown-datetime"><?php the_field('cd_time') ?></h6>
              </div>
            </div>
            <div class="countdown-dot d-flex align-items-center justify-content-center">
              <span class="text-white fnt-header fnt-countdown mb-countdown">:</span>
            </div>
            <div class="countdown-item ">
              <div class="item  d-flex align-items-center justify-content-center">
                <h6 id="cminute" class="text-red fnt-header fnt-countdown">00</h6>
              </div>
              <div class="d-flex align-items-center justify-content-center mt-2">
                <h6 class="text-white fnt-header countdown-datetime"><?php the_field('cd_minute') ?></h6>
              </div>
            </div>
            <div class="countdown-dot d-flex align-items-center justify-content-center">
              <span class="text-white fnt-header fnt-countdown mb-countdown">:</span>
            </div>
            <div class="countdown-item ">
              <div class="item  d-flex align-items-center justify-content-center">
                <h6 id="csecond" class="text-red fnt-header fnt-countdown">00</h6>
              </div>
              <div class="d-flex align-items-center justify-content-center mt-2">
                <h6 class="text-white fnt-header countdown-datetime"><?php the_field('cd_second') ?></h6>
              </div>
            </div>
          </div>

          <div class="register-btn countdown-register-btn">
            <a id="countdown_registration_form" target="_blank" href="<?php the_field('banner_button_url') ?>" class="text-center btn-yellow event-btn-yellow"><?php the_field('banner_button_text') ?></a>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- sec-3nd -->
  <section class="sec-event-detail sec-border pt-lg-7 pb-2">
    <!-- event-detail -->
    <div class="container">
      <div class="row even-timeline">
        <div class="col-12 col-md-12 offset-lg-1 col-lg-4 mb-4 d-flex flex-column">
          <div class="event-title">
            <h6 class="fnt-header fnt-header-28"><?php the_field('timeline_black_heading') ?> &nbsp; </h6>
            <h6 class="text-red fnt-header fnt-header-28"><?php the_field('timeline_red_heading') ?></h6>
          </div>
          <p class="mt-24 timeline_descr"><?php the_field('timeline_descr') ?></p>
        </div>
        <div class="col-12 col-md-12 col-lg-5 d-flex flex-column main-slash">
          <?php if (have_rows('times')) : while (have_rows('times')) : the_row(); ?>
              <div class="row d-flex mb-2">
                <span class="col-2" style="margin-left: 10px; color: black;">|</span>
              </div>
              <div class="row d-flex align-items-center mb-2">
                <span class="event-time col-2"><?php the_sub_field('timeline_time') ?></span> <span class="event-detail col-9"><?php the_sub_field('timeline_content') ?></span>
              </div>
          <?php endwhile;
          endif; ?>
        </div>
      </div>
      <!-- sec-bgk -->

      <!-- <div class="sec-bgk">
        <div class="row">
          <div class="col-12 col-md-12 offset-lg-1 col-lg-5 mt-5 d-flex flex-column">
            <h6 class="fnt-header">Ban Giám khảo</h6>
            <h6 class="text-red fnt-header">Designathon 2023</h6>
          </div>
          <div class="col-12 col-md-12 col-lg-4 mt-5 d-flex flex-row">
            <p>Những Designers hàng đầu trong ngành hội tụ để đánh giá và chia sẻ kinh nghiệm.</p>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-12 col-md-9 col-lg-10 mx-auto">
            <ul class="row px-0 img-gap">
              <li class="col-12 col-md-3 col-lg-4 pr-5 bg-bgk">
                <div class="designation-slider">
                  <div class="slider-item">
                    <img class="img-fluid mb-3" src="http://localhost/lollypop-cms/wp-content/uploads/2023/08/Rectangle-34624211.png" alt="" />
                  </div>
                </div>
                <h6 class=" fnt-24 text-red">Anil Reddy</h6>
                <p class="fnt-20 mt-24">Founder & Design Director</p>
                <p class="fnt-20"> <b> Lollypop Design Studio </b></p>
              </li>
              <li class="col-12 col-md-3 col-lg-4 pr-5 bg-bgk">
                <div class="designation-slider">
                  <div class="slider-item">
                    <img class="img-fluid mb-3" src="http://localhost/lollypop-cms/wp-content/uploads/2023/08/Rectangle-34624211-1.png" alt="" />
                  </div>
                </div>
                <h6 class=" fnt-24 text-red">Duy Le</h6>
                <p class="fnt-20 mt-24">Head of HCI Research Division</p>
                <p class="fnt-20"><b>HCM University of Science</b></p>
              </li>

              <li class="col-12 col-md-3 col-lg-4 col-sm-12 pr-5 bg-bgk">
                <div class="designation-slider">
                  <div class="slider-item">
                    <img class="img-fluid mb-3" src="http://localhost/lollypop-cms/wp-content/uploads/2023/08/Rectangle-34624211-2.png" alt="" />
                  </div>
                </div>
                <h6 class=" fnt-24 text-red">Alex Tran</h6>
                <p class="fnt-20 mt-24">Senior Product Manager</p>
                <p class="fnt-20 "><b>ShopBack</b></p>
              </li>
            </ul>
          </div>
        </div>
      </div> -->
    </div>
  </section>

  <section class="sec-partner pt-lg-7 pb-2  position-relative">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-12 d-flex flex-column">
          <div class="row pt-80">
            <div class="col-12 col-md-12 offset-lg-1 col-lg-5 d-flex flex-column">
              <h6 class="fnt-header text-white"> <?php the_field('partner_heading_1') ?></h6>
              <h6 class="fnt-header text-white"><?php the_field('partner_heading_2') ?></h6>
            </div>
            <div class="col-12 col-md-12 col-lg-4 d-flex flex-row">
              <p class="text-white mt-24"><?php the_field('partner_content') ?></p>
            </div>
          </div>

          <div class="row partner-item">
            <div class="col-12 col-md-12 offset-lg-1 col-lg-4 mb-4 d-flex flex-column">
              <div class="event-title">
                <h6 class="fnt-media text-white"><?php the_field('sponsor_heading') ?></h6>
              </div>
              <img class="img-fluid arena-img" src="<?php the_field('sponsor_image'); ?>" alt="logo" />
            </div>

            <div class="col-12 col-md-12 col-lg-6 d-flex justify-contents-center">
              <div class="row d-flex align-items-center pt-3">
                <?php the_field('sponsor_description') ?>
              </div>
            </div>
          </div>

          <div class="row mt-5">
            <div class="col-12 col-md-9 col-lg-10 mx-auto partner-logos">
              <h6 class="fnt-media text-white"><?php the_field('media_partner_heading') ?></h6>
              <ul class="row px-0 partner-grid">
                <?php if (have_rows('partner_logos')) : while (have_rows('partner_logos')) : the_row(); ?>
                    <li>
                      <img class="img-fluid mb-3" src="<?php the_sub_field('image_logo') ?>" alt="logo" />
                    </li>
                <?php endwhile;
                endif; ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- event-rule -->
  <section class="sec-event sec-border pt-lg-7 pb-2">
    <!-- event-detail -->
    <div class="container">
      <div class="row event-rule">
        <div class="col-12 col-md-12 offset-lg-1 col-lg-4 mt-5 d-flex flex-column">
          <div class="event-title">
            <h6 class="fnt-header fnt-header-28"><?php the_field('evr_black_heading') ?> &nbsp;</h6>
            <h6 class="text-red fnt-header fnt-header-28"><?php the_field('evr_red_heading') ?></h6>
          </div>
          <img class="img-fluid event-rule-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/new-designathon23/two-poeple-computer.png" alt="logo">
        </div>
        <div class="col-12 col-md-12 col-lg-6 mt-5 d-flex flex-column">
          <?php if (have_rows('event_items')) : $i = 0;
            while (have_rows('event_items')) : the_row(); ?>
              <div class="row <?php if ($i > 0) {
                                echo "item-detail";
                              } ?>">
                <h3 class="event-rule-item"><?php the_sub_field('event_item_title') ?></h3>
                <div class="">
                  <?php the_sub_field('event_item_content') ?>
                </div>
              </div>
          <?php $i++;
            endwhile;
          endif; ?>
        </div>
      </div>
      <!-- </div> -->

      <!--  -->

      <div class="container container-event-rule">
        <div class="row text-center ">
          <div class="col-12 col-md-12 offset-lg-1 col-lg-10 mb-5 d-flex flex-column sec-event-rule-banner sec-event-rule has-tag">
            <h6 class="fnt-fdm text-white"><?php the_field('km_heading_1') ?></h6>
            <h6 class="text-red fnt-header"> <?php the_field('km_heading_2') ?> </h6>

            <div class="countdown-register-btn download-btn-mb d-flex justify-content-center align-items-center mt-2">
              <div class="countdown-item ">
                <div class="item  d-flex align-items-center justify-content-center">
                  <img class="img-fluid d-none d-sm-block lazyloaded" src="<?php echo get_template_directory_uri(); ?>/assets/images/new-designathon23/Group72.png" alt="logo">
                </div>
              </div>
              <div class=" d-flex align-items-center justify-content-center px-4">
                <div class="download-btn mb-countdown">
                  <a target="_blank" href="<?php the_field('km_button_url') ?>" class="text-center download-btn-item" style="background: #A30800;margin: 0;"><?php the_field('km_button_text') ?></a>
                </div>
              </div>
              <div class="countdown-item ">
                <div class="item  d-flex align-items-center justify-content-center">
                  <img class="img-fluid d-none d-sm-block lazyloaded" src="<?php echo get_template_directory_uri(); ?>/assets/images/new-designathon23/Group72.png" alt="logo">
                </div>
              </div>
            </div>
          </div>


        </div>
      </div>
      <!-- faq -->
      <div class="sec-faq">
        <div class="row faq-info">
          <div class=" faq-head col-12 col-md-12 offset-lg-1 col-lg-4 d-flex flex-column">
            <div class="event-title">
              <h6 class="text-red fnt-header fnt-header-28"><?php the_field('faq_red_heading') ?> &nbsp;</h6>
              <h6 class="fnt-header fnt-header-28"><?php the_field('faq_black_heading') ?></h6>
            </div>
            <p><?php the_field('faq_description') ?></p>
            <img class="img-fluid faq-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/new-designathon23/faq-bird.png" alt="logo">
          </div>
          <div class="col-12 col-md-12 col-lg-6 d-flex flex-column">
            <div class="d-athon-mision row mb-5 mb-md-0 justify-content-center">
            </div>
            <div class="faq-el--athon">
              <div class="faq-el__body">
                <ul class="px-0 mb-0 faq-ac row justify-content-between">
                  <?php if (have_rows('qa')) : $i = 0;
                    while (have_rows('qa')) : the_row(); ?>
                      <li class=" col-12">
                        <div class="f-accordion <?php if ($i == 0) {
                                                  echo " active";
                                                } ?>">
                          <div class="f-accordion__head">
                            <h6 class="fnt-18 fnt-700 mb-0"><?php the_sub_field('faq_question') ?></h6>
                          </div>
                          <div class="f-accordion__body" style="<?php if ($i == 0) {
                                                                  echo "display: block;";
                                                                } ?>">
                            <!-- <p class="fnt-18 mb-0"></p> -->
                            <?php the_sub_field('faq_answer') ?>
                          </div>
                        </div>
                        <hr>
                      </li>
                  <?php $i++;
                    endwhile;
                  endif; ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br />
      <br />
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

  // Set the date we're counting down to
  var countDownDate = new Date("Sep 13, 2023 23:59:59").getTime();

  // Update the count down every 1 second
  var x = setInterval(function() {

    // Get today's date and time
    var now = new Date().getTime();

    // Find the distance between now and the count down date
    var distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    // Output the result in an element with id="demo"
    document.getElementById("cdate").innerHTML = days < 10 ? '0' + days : days;
    document.getElementById("chour").innerHTML = hours < 10 ? '0' + hours : hours;
    document.getElementById("cminute").innerHTML = minutes < 10 ? '0' + minutes : minutes;
    document.getElementById("csecond").innerHTML = seconds < 10 ? '0' + seconds : seconds;

    // If the count down is over, write some text 
    if (distance < 0) {
      clearInterval(x);
      document.getElementById("cdate").innerHTML = 00;
      document.getElementById("chour").innerHTML = 00;
      document.getElementById("cminute").innerHTML = 00;
      document.getElementById("csecond").innerHTML = 00;
      document.getElementById("banner_registration_form").innerHTML = "Kết thúc đăng ký"
      document.getElementById("countdown_registration_form").innerHTML = "Kết thúc đăng ký"
      document.getElementById("event_registration_form").innerHTML = "Kết thúc đăng ký"
      document.getElementById("banner_registration_form").removeAttribute("href");
      document.getElementById("countdown_registration_form").removeAttribute("href");
      document.getElementById("event_registration_form").removeAttribute("href");
    }
  }, 1000);
</script>