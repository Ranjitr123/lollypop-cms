<?php

/**
 *  Template Name: Designathon2024
 *  */

get_header('designathon23');
?>
<style>
    @import url('https://fonts.cdnfonts.com/css/switzer');

    body {
        padding-bottom: 0 !important;
        background: #FFF;
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
    .btn-mobile-res{
        display: none !important;
    }

    .jury__img::after {
        display: none;
    }

    /* common */
    .clr-orange {
        color: #F45B01;
    }

    .clr-yellow-brown {
        color: #E6CFAD;
    }

    .fnt-60 {
        font-size: 60px;
    }

    .fnt-700 {
        font-weight: 700;
    }

    .fnt-18 {
        font-size: 18px;
    }

    .fnt-600 {
        font-weight: 600;
    }

    .fnt-400 {
        font-weight: 400;
    }

    .mt-20 {
        margin-top: 20px;
    }

    .btn-register {
        background-color: #F45B01;
        height: 50px;
        min-width: 228px;
        text-align: center;
        padding-top: 11px;
        border-radius: 6px;
    }

    .mt-title {
        margin-top: 46px;
    }

    .pt-56 {
        padding-top: 56px;
    }

    .mt-content {
        margin-top: 24px;
    }

    .mt-btn {
        margin-top: 32px;
    }

    .pt-32 {
        padding-top: 32px;
    }

    .lh-0 {
        line-height: 0px;
    }

    .fnt-switzer {
        font-family: Switzer;
    }

    .clr-darkblue {
        color: #02323E;
    }

    .mt-124 {
        margin-top: 124px;
    }

    .fnt-20 {
        line-height: 32px;
    }

    /* Bannder */
    .sec-banner {
        background: url("<?php echo get_template_directory_uri(); ?>/assets/images/designathon2024/banner-vector.svg") no-repeat;
        background-color: #02323E !important;
        background-size: contain;
        content: "";
        top: 0;
        left: 0;
        width: 100%;
        height: auto;
        border-top-left-radius: 16px;
        border-top-right-radius: 16px;
    }

    .logo {
        margin-top: 56px;
    }

    .fnt-title {
        font-family: Clash Grotesk;
        line-height: 64px;
        text-align: center;
        font-size: 60px;
        font-style: normal;
        font-weight: 700;
        line-height: 64px; /* 106.667% */
        letter-spacing: 1.2px;
        text-transform: uppercase;
    }

    .fnt-content {
        font-family: Switzer;
        line-height: 26px;
    }

    .btn-orange {
        display: inline-block;
        text-decoration: none;
        padding: 12px 20px;
        background: #F45B01;
        font-size: 18px;
        position: relative;
        height: 48px;
        -moz-transition: all 0.3s ease;
        -o-transition: all 0.3s ease;
        -ms-transition: all 0.3s ease;
        transition: all 0.3s ease;
        line-height: 25px;
        min-width: 228px;
        text-align: center;
        border-radius: 6px;
    }

    .btn-orange:hover {
        color: #fff;
    }

    .v-line {
        height: 32px;
        width: 1px;
        border: 1px solid #F45B01;
        align-self: center;
    }

    /* 04 Cities */

    .section-04cities {
        margin-top: 100px;
    }

    .fnt-130 {
        font-size: 130px;
    }

    .pb-98 {
        padding-bottom: 98px;
    }

    .mt-32 {
        margin-top: 32px;
    }

    .fnt-clash {
        font-family: Clash Grotesk;
    }

    .fnt-cities {
        opacity: 30%;
        font-size: 98px;
        color: #E6CFAD;
    }

    .cities-height {
        height: 200px;
    }

    .cities-wrapper {
        position: relative;
    }

    .cities {
        position: absolute;
        top: 17px;
        left: 50%;
        transform: translateX(-50%);
    }

    .cities-sm {
        position: relative;
        top: -35px;
        text-align: center;
        font-family: "Clash Grotesk";
        font-size: 26px;
        font-style: normal;
        font-weight: 700;
        line-height: 26px; /* 100% */
        letter-spacing: 5.2px;
        text-transform: uppercase;
    }

    .city-bengaluru,
    .city-mumbai,
    .city-chennai,
    .city-hyderabad {
        border-radius: 16px;
        width: 100%;
        height: auto;
        padding-top: 32px;
        padding-left: 32px;
    }


    .city-bengaluru {
        background: url("<?php echo get_template_directory_uri(); ?>/assets/images/designathon2024/bengaluru.svg") no-repeat;
        background-size: auto;
        background-color: #F8F1E7;
        background-position-x: right;
        background-position-y: bottom;
    }

    .city-mumbai {
        background: url("<?php echo get_template_directory_uri(); ?>/assets/images/designathon2024/mumbai.svg") no-repeat;
        background-size: auto;
        background-color: #F8F1E7;
        background-position-x: right;
        background-position-y: bottom;
    }

    .city-chennai {
        background: url("<?php echo get_template_directory_uri(); ?>/assets/images/designathon2024/chennai.svg") no-repeat;
        background-size: auto;
        background-color: #F8F1E7;
        background-position-x: right;
        background-position-y: bottom;
    }

    .city-hyderabad {
        background: url("<?php echo get_template_directory_uri(); ?>/assets/images/designathon2024/hyderabad.svg") no-repeat;
        background-size: auto;
        background-color: #F8F1E7;
        background-position-x: right;
        background-position-y: bottom;
    }

    /* Participate */

    .fnt-56 {
        font-size: 56px;
    }

    .section-participate {
        margin-top: 120px;
    }
    .section-apply {
        margin-top: 120px;
    }

    .participate-wrapper {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 24px;
        height: 100%;
        place-items: center;
        padding: 0px 30px;
    }

    .participate-item > img {
        border-radius: 16px;
    }

    .fnt-32 {
        font-size: 32px;
        line-height: 36px;
    }

    .participate-item {
        position: relative;
    }

    .participate-content {
        position: absolute;
        bottom: 88px;
        z-index: 10;
        width: 100%;
        padding: 0 24px;
        max-height: 50%;
    }

    .participate-content > p {
        width: 100%;
        text-align: center;
    }

    .participate-bg {
        position: absolute;
        height: 100%;
        top: 0;
        width: 100%;
        background: linear-gradient(180deg, rgba(0, 0, 0, 0), black);
        z-index: 1;
        border-radius: 16px;
    }

    .participate-bg::after {
        background: url("<?php echo get_template_directory_uri(); ?>/assets/images/designathon2024/bg-participate.svg") no-repeat;
        content: "";
        position: absolute;
        width: 100%;
        height: 100%;
        background-size: contain;
        background-position-y: bottom;
    }

    /* Event details */

    .section-event {
        padding-top: 120px;
    }

    .event-bg {
        background: #FAF5EF;
        border-radius: 24px;
        padding-top: 80px;
        padding-bottom: 100px;
    }

    .fnt-28 {
        font-size: 28px;
        line-height: 28px;
    }

    .rule {
        border-bottom: 1px solid #F45B01;
        opacity: 40%;
        margin: 20px 0;
    }

    .btn-event {
        width: 288px;
        margin-top: 20px;
        height: 48px;
    }

    /* Designathon23 */
    .section-designathon23 {
        margin-top: 120px;
    }

    /* Rule */

    .section-rule {
        margin-top: 120px;
    }

    .rule-wrapper {
        position: relative;

    }

    .rule-info {
        position: absolute;
        top: 66px;
        bottom: 66px;
        left: 64px;
    }

    .rule-wrapper > img {
        width: 100%;
        height: auto;
        border-radius: 24px;
    }

    /* Sponsor"> */

    .sec-sponsor {
        margin-top: 120px;
    }

    .sponsor-item {
        border: 1px solid #E6CFAD99;
        border-radius: 16px;
        padding: 40px 64px;
    }
    .sponsor-item-img{
        height: 80px;
    }

    .mt-64 {
        margin-top: 64px;
    }

    .mt-80 {
        margin-top: 80px;
    }

    /* FAQ */
    .sec-faq {
        margin-top: 120px;
    }

    /* footer */
    .section-footer {
        margin-top: 120px;
    }

    .img-footer {
        background: url("<?php echo get_template_directory_uri(); ?>/assets/images/designathon2024/footer.svg") no-repeat;
        background-size: 100%;
        padding-top: 135px;
    }

    .fnt-banner-20 {
        font-size: 20px;
        line-height: 28px;
    }

    .fnt-llp {
        font-size: 18px;
        line-height: 18px;
    }

    .fnt-city {
        font-size: 24px;
        line-height: 24px;
    }

    .fnt-banner-14 {
        font-size: 14px;
        line-height: 22px;
    }

    .lh-20 {
        line-height: 20px;
    }

    .lh-24 {
        line-height: 24px;
    }

    .lh-56 {
        line-height: 56px;
    }

    .mt-40 {
        margin-top: 40px;
    }

    .mb-40 {
        margin-top: 40px;
    }

    .op-70 {
        opacity: 70%;
    }

    .op-80 {
        opacity: 80%;
    }

    .lh-24 {
        line-height: 24px;
    }

    .lh-56 {
        line-height: 56px;
    }

    .lh-64 {
        line-height: 64px;
    }

    .mt-event {
        margin-top: 12px;
    }

    .logo-img {
        width: 65%;
    }

    .langual {
        padding-top: 56px;
        left: 36px;
        position: absolute;
        z-index: 1;
    }


    .faq-el--athon .f-accordion__head::after {
        background-color: #02323E !important;
    }

    .faq-el--athon .f-accordion__head::before {
        background-color: #02323E !important;
    }

    .f-accordion__body {
        padding-top: 20px;
        padding-bottom: 0px;
    }

    li:last-child > hr {
        display: none;
    }
    .apply-sub-title{
        align-self: stretch;
        color: var(--Green, #02323E);
        text-align: center;
        font-family: Switzer;
        font-size: 16px;
        font-style: normal;
        font-weight: 400;
        line-height: 24px; /* 150% */
        opacity: 0.7;
        width: 600px;
    }
    .apply-sub-div{
        width: 600px;
    }
    .apply-card-right{
        width: 502px;
        height: 368px;
        display: flex;
        padding: 40px 46px 48px 46px;
        flex-direction: column;
        align-items: center;
        gap: 32px;
        border-radius: 20px;
        background: #F7F1E6;
        backdrop-filter: blur(21px);
    }
    .apply-card-left{
        border-radius: 20px 0 0 20px;;
        background: #02323E;
        backdrop-filter: blur(21px);
        width: 320px;
        height: 288px;
        flex-shrink: 0;
        padding: 40px 30px;
    }
    .apply-left-title-fix{
        color: var(--Orange, #F45B01);
        text-align: center;
        font-family: "Clash Grotesk";
        font-size: 22px;
        font-style: normal;
        font-weight: 600;
        line-height: 26px; /* 118.75% */
        letter-spacing: -0.16px;
    }
    .apply-left-title{
        color: var(--Peach, #E6CFAD);
        font-family: "Clash Grotesk";
        font-size: 22px;
        font-style: normal;
        font-weight: 600;
        line-height: 26px;
        letter-spacing: -0.16px;
    }
    .apply-left-sub-title{
        color: var(--Peach, #E6CFAD);
        text-align: center;
        font-family: Switzer;
        font-size: 18px;
        font-style: normal;
        font-weight: 400;
        line-height: 100%; /* 18px */
        letter-spacing: -0.09px;
    }
    .apply-left-content{
        color: var(--Peach, #E6CFAD);
        text-align: center;
        font-family: "Clash Grotesk";
        font-size: 14px;
        font-style: normal;
        font-weight: 400;
        line-height: 100%; /* 18px */
        margin-top: 40px;
    }
    .apply-left-content-fix{
        color: var(--Peach, #E6CFAD);
        font-family: "Clash Grotesk";
        font-size: 40px;
        font-style: normal;
        font-weight: 600;
        line-height: 100%;
    }
    .apply-card-left .mt-btn{
        margin-top: 48px;
    }
    .logo-fix{
        height: 190px;
        width: auto;
        object-fit: cover;
    }
    .apply-card-right-title{
        color: var(--Green, #02323E);
        text-align: center;
        font-family: "Clash Grotesk";
        font-size: 32px;
        font-style: normal;
        font-weight: 600;
        line-height: 38px; /* 118.182% */
        letter-spacing: -0.11px;
    }
    .apply-card-right-title-sub{
        color: var(--Green, #02323E);
        text-align: center;
        font-family: Switzer;
        font-size: 18px;
        font-style: normal;
        font-weight: 400;
        line-height: 18px; /* 150% */
        letter-spacing: -0.06px;
    }
    .rule-info__heading {
        color: var(--White, #FFFAF1);
        font-family: "Clash Grotesk";
        font-size: 32px;
        font-style: normal;
        font-weight: 600;
        line-height: 40px;
    }
    .card-enable{
        opacity: 1;
    }
    .card-disable{
        opacity: 0.4;
    }
    .card-disable .mt-btn{
        pointer-events: none;
    }
    .card-disable .header-btn{
        pointer-events: none;
    }
    .height-100{
        height: 100%;
    }
    .apply-card-right-content{
        color: var(--Green, #02323E);
        text-align: center;
        font-family: "Clash Grotesk";
        font-size: 18px;
        font-style: normal;
        font-weight: 400;
        line-height: 100%; /* 14px */
        padding: 32px 0;
    }
    .apply-card-right-content-fix{
        color: var(--Green, #02323E);
        font-family: "Clash Grotesk";
        font-size: 64px;
        font-style: normal;
        font-weight: 600;
        line-height: 100%;
    }
    .apply-card-right .mt-btn{
        margin-top: 0;
    }
    .position-sticky-fix{
        position: sticky;
        top: 60px;
    }
    .img-event{
        margin-left: -20px;
    }
    .img-event img{
        height: 380px;
    }
    .participate-title{
        color: var(--White, #FFFAF1);
        text-align: center;
        font-family: "Clash Grotesk";
        font-size: 32px;
        font-style: normal;
        font-weight: 600;
        line-height: 36px; /* 112.5% */
        letter-spacing: -0.16px;
    }
    .participate-title-sub{
        display: none;
    }
    .participate-item:hover .participate-title-sub{
        display: block !important;
    }
    .participate-item:hover .participate-content{
        height: 100%;
        max-height: 100%;
        transition: max-height 0.25s ease;
        background: linear-gradient(345deg, rgba(0, 26, 33, 0.95) 6.85%, rgba(2, 74, 92, 0.85) 96.37%);
        bottom: 0;
        display: flex;
        justify-content: center;
        flex-direction: column;
        border-radius: 16px;
    }
    .top-line{
        display: flex;
        width: max-content;
        height: 56px;
        justify-content: flex-end;
        align-items: center;
        flex-shrink: 0;
        background: var(--Peach, #E6CFAD);
        overflow: hidden;
    }
    .text-top-line{
        color: var(--Green, #02323E);
        text-align: center;
        font-family: "Clash Grotesk";
        font-size: 16px;
        font-style: normal;
        font-weight: 500;
        line-height: 24px; /* 150% */
        letter-spacing: 0.32px;
        padding: 0 0 0 32px
    }
    .text-top-line-fix{
        color: var(--Green, #02323E);
        font-family: "Clash Grotesk";
        font-size: 16px;
        font-style: normal;
        font-weight: 700;
        line-height: 24px;
        letter-spacing: 0.32px;
    }
    .leftToRight {
        display: flex;
        gap: 24px;
        will-change: transform;
        animation: moveSlideshow 30s linear infinite;
    }
    @keyframes moveSlideshow {
        from {
            transform: translateX(0);
        }
        to {
            transform: translateX(-100%);
        }
    }
    .top-item-text{
        display: flex;
        width: 100%;
        align-items: center;
    }
    .img-top-line{
        height: 16px;
        width: 16px;
        font-size: 16px;
    }
    .top-banner{
        overflow: hidden;
        width: 100%;
        border-bottom-left-radius: 16px;
        border-bottom-right-radius: 16px;
        /*position: relative;*/
    }
    .apply-box{
        display: flex;
        @media (max-width: 768px) {
            flex-direction: column;
            padding: 0 15px;
        }
    }

    .lotti-logo {
        width: 100% !important;
        height: auto !important;
    }
    .partner-sub{
        color: var(--Green, #02323E);
        font-family: "Clash Grotesk";
        font-size: 24px;
        font-style: normal;
        font-weight: 500;
        line-height: 100%; /* 24px */
        letter-spacing: 0.48px;
        text-transform: uppercase;
        margin-top: 12px;
    }
    .header-btn{
        background: #F45B01;
    }
    .header-btn:hover{
        background: #E6CFAD;
        transition: background-color .25s step-start;
        color: #F45B01;
    }
    .dl-btn{
        background: #F45B01;
    }
    .dl-btn:hover{
        background: #02323E;
        transition: background-color .25s step-start;
    }
    .rule-info__btn {
        width: 228px;
    }
    @media (max-width: 1536px) {
        .rule-info {
            top: 15%;
        }

        .participate-content {
            bottom: 50px;
        }
    }

    @media (max-width: 768px) {

        .lh-56,
        .lh-64 {
            line-height: 44px;
        }

        .mt-event {
            margin-top: 16px;
        }

        .langual {
            padding-top: 32px !important;
            left: 6px !important;
        }

        .logo-img {
            width: 60%;
        }

        .fnt-banner-14 {
            font-size: 12px;
            line-height: 20px;
        }

        .fnt-sm-14 {
            font-size: 14px;
            font-weight: 400;
            /* color: #ffffff; */
        }

        .lh-26 {
            line-height: 26px;
        }

        .fnt-banner-20 {
            font-size: 18px;
            line-height: 26px;
        }

        .fnt-llp {
            font-size: 16px;
            line-height: 16px;
        }

        .fnt-city {
            font-size: 18px;
            line-height: 18px;
        }

        .section-04cities {
            margin-top: 56px;
        }

        .section-event {
            padding-top: 0;
        }

        .section-event,
        .section-designathon23,
        .sec-sponsor,
        .section-rule,
        .section-participate {
            margin-top: 64px;
        }

        .section-apply {
            margin-top: 64px;
        }
        .pt-120 {
            padding-top: 56px;
        }

        .fnt-60 {
            font-size: 56px;
        }

        .fnt-56 {
            font-size: 36px;
        }

        .mt-124 {
            margin-top: 28px;
        }

        .mt-sm-20,
        .mt-32 {
            margin-top: 20px;
        }

        .mt-title {
            margin-top: 36px;
        }

        .mt-content {
            margin-top: 12px;
        }

        .mt-btn {
            margin-top: 20px;
        }

        .pt-56 {
            padding-top: 28px;
        }

        .fnt-32 {
            font-size: 26px;
            line-height: 32px;
        }

        .logo {
            margin-top: 48px;
        }

        .fnt-title {
            font-size: 32px;
            line-height: 40px;
        }

        .fnt-content {
            font-size: 14px;
            line-height: 24px;
        }

        .banner_duration {
            width: 50%;
            align-self: start;
        }

        .v-line {
            align-self: start;
        }

        .cities-height {
            height: fit-content;
            flex-direction: column-reverse;
            margin-bottom: 45px;
        }

        .citi-desc {
            margin-top: 0px;
            align-items: center;
        }

        .city-bengaluru,
        .city-mumbai,
        .city-chennai,
        .city-hyderabad {
            padding-top: 16px;
            padding-left: 16px;
        }

        .city-bengaluru,
        .city-mumbai,
        .city-chennai,
        .city-hyderabad {
            background-size: 60%;
        }

        .participate-wrapper {
            grid-template-columns: repeat(1, 100%);
            height: 100%;
            padding: 0;
            gap: 20px;
        }

        .participate-content {
            padding: 0 12px;
            width: 100%;
            bottom: 50px;
        }

        .participate-item > img {
            width: 100%;
        }

        .participate-bg {
            width: 100%;
        }

        .participate-content > p {
            width: 100%;
        }

        .event-wrapper > h3 {
            font-size: 36px;
            line-height: 44px;
        }

        .rule-info {
            top: 24px;
            left: 36px;
            width: 90%;
        }

        .rule-info__faq {
            font-size: 14px;
            margin-bottom: 0px;
            line-height: 16px;
        }

        .rule-info__heading {
            font-size: 24px;
            line-height: 32px;
            margin-top: 4px;
            margin-bottom: 20px;
            color: var(--White, #FFFAF1);
            font-family: "Clash Grotesk";
            font-style: normal;
            font-weight: 600;

        }

        .rule-info__btn {
            padding: 10px 0px;
            font-size: 16px;
            font-weight: 500;
            height: 46px;
            width: 194px;
            left: 12px;
        }

        .rule {
            margin: 16px 0;
        }

        .fnt-rule {
            font-size: 14px;
            margin-top: 8px;
        }

        .event-details {
            margin-top: 32px;
        }

        .sponsor-item {
            padding: 20px 16px;
        }

        .img-footer {
            padding-top: 30px;
        }

        .event-bg {
            padding-top: 40px;
            padding-bottom: 50px;
        }

        .event-register {
            display: flex;
            flex-direction: column;
        }

        .fnt-28 {
            font-size: 24px;
            line-height: 24px;
        }

        .fnt-24 {
            font-size: 20px;
        }

        .btn-event {
            width: 100%;
        }

        .mt-64 {
            margin-top: 32px;
        }

        .mt-sm-32 {
            margin-top: 32px;
        }

        .mt-40 {
            margin-top: 32px;
        }

        .mb-40 {
            margin-top: 32px;
        }
        .apply-card-left{
            width: 80%;
            border-radius: 20px 20px 0 0;
            height: auto;
        }
        .apply-card-left .mt-btn{
            margin-top: 20px;
        }
        .apply-left-content{
            margin-top: 20px;
        }
        .apply-card-right{
            width: 100%;
        }
        .apply-sub-div{
            width: 100%;
            padding: 0 15px;
        }
        .apply-left-title{
         font-size: 18px;
            text-align: center;
        }
        .apply-card-right-title{
            font-size: 26px;
            text-align: center;
        }
        .apply-card-left{
            padding: 20px 23px;
        }
        .apply-card-right{
            padding: 44px 23px;
        }
        .citi-desc{
            text-align: center;
        }
        .txt-flex-mobile{
            display: flex;
            flex-direction: column;
        }
        .btn-mobile-res{
            display: flex !important;
            position: sticky;
            bottom: 16px;
            z-index: 999;
            width: 100%;
        }
        .btn-mobile-none{
            display: none !important;
        }
        .top-banner{
            border-radius: unset;
        }
        .sec-banner{
            border-radius: unset;
        }
    }
</style>
<!-- Apply right away! -->
<?php
date_default_timezone_set("Asia/Kolkata");
$date = date('Y-m-d H:i:s');
$targetDate = '2024-04-14 18:00:00';
$outOfDate = $date >= $targetDate;
$registerClass = '';
if ($outOfDate) {
    $registerClass = 'card-disable';
} else {
    $registerClass = 'card-enable';
}
?>
<main class="main">
    <!-- 01 -->
    <section class="sec-banner pt-lg-7 position-relative">
        <div class="row langual mx-0">
            <a href="<?php echo get_site_url() ?>">
                <img class="img-fluid logo-img"
                     src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon2024/llp.svg" alt="logo">
            </a>
        </div>
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-12 text-center logo px-0">
                    <img class="img-fluid"
                         src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon2024/lollypop.svg"
                         alt="logo"/>
                </div>
                <div class="col-10 col-lg-5 text-center mt-3 px-0">
                    <img class="img-fluid logo-fix" src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon2024/logo_designathon24.png" alt="logo" />
                    <!-- <img class="img-fluid" src="<?php //the_field('logo') ?>" alt="logo" /> -->
                    <!--                    <lottie-player class="lotti-logo"-->
                    <!--                                   src="--><?php //echo get_template_directory_uri(); ?><!--/assets/images/designathon2024/designathon.json"-->
                    <!--                                   background="transparent" speed="1" style="width: 300px; height: 300px;" loop-->
                    <!--                                   autoplay></lottie-player>-->
                </div>
<!--                <div class="col-12 text-center px-0">-->
<!--                    <img class="img-fluid"-->
<!--                         src="--><?php //echo get_template_directory_uri(); ?><!--/assets/images/designathon2024/upstox-act.svg"-->
<!--                         alt="logo"/>-->
<!--                </div>-->
                <div class="col-12 text-center d-flex justify-content-center mt-title">
                    <h3 class="col-12 col-lg-7 fnt-700 fnt-title text-uppercase clr-yellow-brown mb-0">The <span
                                class="clr-orange">ULTIMATE</span> Design Hackathon is back!</h3>
                </div>
                <div class="col-12 text-center d-flex justify-content-center mt-content">
                    <p class="col-12 col-lg-7 clr-white fnt-400 fnt-switzer fnt-content mb-0 op-80">
                        Unleash your inner design passion at our action-packed design hackathon!
                        Meet fellow creative minds, ignite ideas, and conquer real-world challenges — all within a mere
                        24 hours!
                    </p>
                </div>
                <div class="col-8 col-lg-3 text-center d-flex justify-content-center mt-btn">
<!--                    <a id="banner_registration_form" target="_blank" href="--><?php //the_field('button_register') ?><!--"-->
<!--                       class="text-center btn-orange text-uppercase fnt-600 fnt-switzer clr-white header-btn">Register Now</a>-->
                </div>

                <div class="row d-flex justify-content-center pt-56">
                    <div class="col-12 col-lg-7">
                        <div class="row">
                            <div class="col-4 d-flex flex-column text-lg-center text-start">
                                <p class="clr-orange text-uppercase fnt-banner-14 fnt-600 fnt-switzer lh-0 mb-2">
                                    Date</p>
                                <p class="clr-white fnt-banner-20 fnt-700 fnt-switzer txt-flex-mobile">3rd - 4th <span
                                            class="text-uppercase fnt-sm-14">May</span></p>
                                <div class="v-line"></div>
                            </div>
                            <div class="col-4 d-flex flex-column text-lg-center text-start">
                                <p class="clr-orange text-uppercase fnt-banner-14 fnt-600 lh-0 fnt-switzer mb-2">
                                    Duration</p>
                                <p class="clr-white text-uppercase fnt-banner-20 fnt-700 fnt-switzer banner_duration">24
                                    <span class="fnt-sm-14">Hours</span></p>
                                <div class="v-line"></div>
                            </div>
                            <div class="col-4 d-flex flex-column text-lg-center text-start">
                                <p class="clr-orange text-uppercase fnt-banner-14 fnt-600 lh-0 fnt-switzer mb-2">
                                    Designers</p>
                                <p class="clr-white text-uppercase fnt-banner-20 fnt-700 fnt-switzer">200+ <span
                                            class="fnt-sm-14">Participants</span></p>
                                <div class="v-line"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="top-banner">
        <div class="top-line">
            <div class="leftToRight">
                <?php for ($i = 0; $i < 8; ++$i) { ?>
                    <div class="top-item-text">
                        <img class="img-fluid d-sm-block d-md-block d-lg-block img-top-line"
                             src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon2024/check_top.svg"
                             alt="logo"/>
                        <?php if ($outOfDate) { ?>
                            <span class="text-top-line">Registration closed April 14!</span>
                        <?php } else { ?>
                            <span class="text-top-line">Hurry up! Registrations closing on 14th April!</span>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
            <div class="leftToRight" style="margin-left: 32px">
                <?php for ($i = 0; $i < 8; ++$i) { ?>
                    <div class="top-item-text">
                        <img class="img-fluid d-sm-bloc d-md-block d-lg-block img-top-line"
                             src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon2024/check_top.svg"
                             alt="logo"/>
                        <?php if ($outOfDate) { ?>
                            <span class="text-top-line">Registration closed April 14!</span>
                        <?php } else { ?>
                            <span class="text-top-line">Hurry up! Registrations closing on 14th April!</span></span>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- 2 Cities -->
    <section class="section-04cities">
        <div class="container">
            <div class="row d-flex justify-content-center cities-height">
                <div class="col-12 col-md-5 col-lg-5 text-center d-flex flex-column">
                    <div class="cities-wrapper">
                        <h3 class="fnt-cities text-uppercase fnt-clash fnt-700">Cities</h3>
                        <div class="cities">
                            <h3 class="fnt-clash clr-darkblue text-uppercase fnt-130 fnt-700">02</h3>
                            <h3 class="fnt-26 clr-orange fnt-700 text-uppercase cities-sm">Cities</h3>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-5 col-lg-5 d-flex flex-column justify-content-center citi-desc">
                    <p class="fnt-20 fnt-500 lh-26 fnt-switzer clr-darkblue mb-0">Designathon returns with a bang, hitting the City of Dreams, Mumbai for the very first time this year! Mumbai and Bengaluru, get ready for a creative storm!</p>
                </div>
            </div>
            <div class="row d-flex justify-content-center pt-56">
                <div class="col-12 col-md-5 col-lg-5 d-flex flex-column pt-32 px-auto pe-3">
                    <div class="city-bengaluru">
                        <div class="city-info">
                            <h3 class="fnt-32 fnt-700 clr-orange">ಬೆಂಗಳೂರು</h3>
                            <p class="fnt-llp mb-2 mb-lg-3 mt-2 op-80 clr-darkblue">Lollypop Design Studio</p>
                            <h3 class="pb-98 fnt-city fnt-600 fnt-clash clr-darkblue">Bengaluru</h3>
                        </div>
                    </div>
<!--                    <div class="city-mumbai mt-32">-->
<!--                        <div class="city-info">-->
<!--                            <h3 class="fnt-32 fnt-700 clr-orange mb-0">मुंबई</h3>-->
<!--                            <p class="fnt-llp mb-2 mb-lg-3 mt-2 op-80 clr-darkblue">Lollypop Design Studio</p>-->
<!--                            <h3 class="pb-98 fnt-city fnt-600 fnt-clash clr-darkblue">Mumbai</h3>-->
<!--                        </div>-->
<!--                    </div>-->
                </div>
                <div class="col-12 col-md-5 col-lg-5 d-flex flex-column px-auto ps-3 mt-sm-20">
                    <div class="city-mumbai mt-32">
                        <div class="city-info">
                            <h3 class="fnt-32 fnt-700 clr-orange mb-0">मुंबई</h3>
                            <p class="fnt-llp mb-2 mb-lg-3 mt-2 op-80 clr-darkblue">Lollypop Design Studio</p>
                            <h3 class="pb-98 fnt-city fnt-600 fnt-clash clr-darkblue">Mumbai</h3>
                        </div>
                    </div>
<!--                    <div class="city-chennai">-->
<!--                        <div class="city-info">-->
<!--                            <h3 class="fnt-32 fnt-700 clr-orange mb-0">சென்னை</h3>-->
<!--                            <p class="fnt-llp mb-2 mb-lg-3 mt-2 op-80 clr-darkblue">Lollypop Design Studio</p>-->
<!--                            <h3 class="pb-98 fnt-city fnt-600 fnt-clash clr-darkblue">Chennai</h3>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="city-hyderabad mt-32">-->
<!--                        <div class="city-info">-->
<!--                            <h3 class="fnt-32 fnt-700 clr-orange mb-0">హైదరాబాద్</h3>-->
<!--                            <p class="fnt-llp mb-2 mb-lg-3 mt-2 op-80 clr-darkblue">Lollypop Design Studio</p>-->
<!--                            <h3 class="pb-98 fnt-city fnt-600 fnt-clash clr-darkblue">Hyderabad</h3>-->
<!--                        </div>-->
<!--                    </div>-->
                </div>
            </div>
        </div>
    </section>
    <!-- Apply right away! -->
    <?php
        $leftClass = '';
        $rightClass = '';
        if($outOfDate){
            $leftClass = 'card-disable';
            $rightClass = 'card-disable';
        }else{
            $leftClass = 'card-disable';
            $rightClass = 'card-enable';
        }
    ?>
    <section class="section-apply">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-12 text-center d-flex flex-column align-items-center">
                    <h3 class="fnt-56 fnt-700 clr-darkblue fnt-clash lh-56 text-uppercase mb-0">Apply right away!</h3>
                    <div class="apply-sub-div">
                        <span class="apply-sub-title">Submit your registration now, pay later once you get selected as a participant! There’s no cost for just applying!</span>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center pt-56">
                <div class="mx-auto justify-content-center align-items-center apply-box">
                    <div class="apply-card-left">
                        <div class="align-items-center d-flex justify-content-center flex-column height-100 <?php echo $leftClass ?>">
                            <div class="apply-left-title"><span class="apply-left-title-fix">Early Bird</span> Registrations</div>
                            <div class="apply-left-sub-title mt-2">8 - 10th APRIL</div>
                            <div class="apply-left-content">INR <span class="apply-left-content-fix">699</span> per person</div>
                            <div class="text-center d-flex justify-content-center mt-btn" style="z-index: 999;">
                                <a id="banner_registration_form" target="_blank" href="<?php the_field('button_register') ?>"
                                   class="text-center btn-orange text-uppercase fnt-600 fnt-switzer clr-white header-btn"><?php if($outOfDate) {
                                       echo 'Registration closed!';
                                   }
                                   else {
                                       echo 'Now closed!';
                                   } ?></a>
                            </div>
                        </div>
                        <div class="img-event" style="position: absolute; bottom: 0">
                            <img class="img-fluid d-sm-block  d-md-block  d-lg-block"
                                 src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon2024/apply-bg.svg"
                                 alt="logo"/>
                        </div>
                    </div>
                    <div class="apply-card-right">
                        <div class="align-items-center d-flex justify-content-center flex-column height-100 <?php echo $rightClass ?>">
                            <div class="apply-card-right-title">Regular Registrations</div>
                            <div class="apply-card-right-title-sub">11 - 14th APRIL</div>
                            <div class="apply-card-right-content">INR <span class="apply-card-right-content-fix">999</span> per person</div>
                            <div class="text-center d-flex justify-content-center mt-btn">
                                <a id="banner_registration_form" target="_blank" href="<?php the_field('button_register') ?>"
                                   class="text-center btn-orange text-uppercase fnt-600 fnt-switzer clr-white dl-btn"><?php if($outOfDate) {
                                        echo 'Registration closed!';
                                    }
                                    else {
                                        echo 'Register Now';
                                    } ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Participate? -->
    <section class="section-participate">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-12 text-center">
                    <h3 class="fnt-56 fnt-700 clr-darkblue fnt-clash lh-56 text-uppercase mb-0">Why Participate?</h3>
                </div>
            </div>
            <div class="row d-flex justify-content-center pt-56">
                <div class="col-12 col-md-12 col-lg-12 mx-auto">
                    <div class="participate-wrapper">

                        <div class="participate-item">
                            <img class="img-fluid"
                                 src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon2024/budding.png"
                                 alt="logo"/>
                            <div class="participate-content">
                                <p class="fnt-32 fnt-600 clr-white participate-title">Collaborate & network with <span class="clr-orange">budding designers</span>
                                </p>
                                <p class="fnt-sm-14 clr-white lh-20 participate-title-sub">Ready to design your destiny? Team up with some of the coolest talents, spark collaboration, and scheme to rule the design industry together!</p>
                            </div>
                            <div class="participate-bg">
                            </div>
                        </div>

                        <div class="participate-item">
                            <img class="img-fluid"
                                 src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon2024/prize.png"
                                 style="background-color: #011517;" alt="logo"/>
                            <div class="participate-content">
                                <p class="fnt-32 fnt-600 clr-white participate-title">Win cash prizes of up to <span class="clr-orange">Rs. 3,00,000 </span>
                                </p>
                                <p class="fnt-sm-14 clr-white lh-20 participate-title-sub">Win cash prizes up to Rs. 3,00,000! Team up, compete against other teams, make your mark and seize exciting rewards!</p>
                            </div>
                            <div class="participate-bg">
                            </div>
                        </div>

                        <div class="participate-item">
                            <img class="img-fluid"
                                 src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon2024/pioneer.png"
                                 alt="logo"/>
                            <div class="participate-content">
                                <p class="fnt-32 fnt-600 clr-white participate-title">Get mentored by top <span class="clr-orange">industry pioneers!</span>
                                </p>
                                <p class="fnt-sm-14 clr-white lh-20 participate-title-sub">Cater to your curiosity and discover how the design industry works in the real world, chat with the top leaders, and lay the groundwork for your dream career.</p>
                            </div>
                            <div class="participate-bg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Evvent Details -->
    <section class="section-event">
        <div class="container">
            <div class="row event-bg d-flex justify-content-center mx-auto">
                <div class="col-12 col-lg-6 px-0 d-flex flex-column">
                    <div class=" row d-flex justify-content-center mx-auto position-sticky-fix">
                        <div class="col-12 col-lg-6 event-wrapper">
                            <h3 class="fnt-56 fnt-700 lh-64 clr-darkblue text-uppercase fnt-clash mb-0">Event
                                Details</h3>
                            <p class="fnt-switzer clr-darkblue mb-0 lh-24 op-70 mt-event">Unlock all the details about
                                Designathon right here, right now! It's a must-know, so don't even think about skipping
                                it!</p>
                        </div>
                        <div class="img-event">
                            <img class="img-fluid d-none d-sm-block d-sm-none d-md-block d-md-none d-lg-block"
                                 src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon2024/event-vector.svg"
                                 alt="logo"/>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 px-0 d-flex flex-column">
                    <div class="row mx-auto">
                        <div class="col-12 col-lg-8 event-details">
                            <h3 class="fnt-20  fnt-600 clr-orange text-uppercase fnt-clash">01</h3>
                            <div class="rule"></div>
                            <h3 class="fnt-clash clr-darkblue text-capitalize fnt-28 fnt-600 mb-0">registration
                                process</h3>
                            <p class="fnt-rule fnt-switzer fnt-400 clr-darkblue mb-0 mt-20 lh-24 op-70">Limited seats, big dreams! It's like winning the lottery. Stay tuned for that email confirmation if you are the chosen one. Registrations start on 8th April and closes on 14th April.</p>
                        </div>
                    </div>

                    <div class="row mx-auto pt-56">
                        <div class="col-12 col-lg-8">
                            <h3 class="fnt-20  fnt-600 clr-orange text-uppercase fnt-clash">02</h3>
                            <div class="rule"></div>
                            <h3 class="fnt-clash clr-darkblue text-capitalize fnt-28 fnt-600 mb-0">Date and Time</h3>
                            <p class="fnt-rule fnt-switzer fnt-400 clr-darkblue mb-0 mt-20 lh-24 op-70">Mark your calendars for Designathon happening on the 3rd-4th of May, 2024. Buckle up for a non-stop 24-hour ride through the world of design!</p>
                        </div>
                    </div>

                    <div class="row mx-auto pt-56">
                        <div class="col-12 col-lg-8">
                            <h3 class="fnt-20  fnt-600 clr-orange text-uppercase fnt-clash">03</h3>
                            <div class="rule"></div>
                            <h3 class="fnt-clash clr-darkblue text-capitalize fnt-28 fnt-600 mb-0">Pricing details</h3>
                            <p class="fnt-rule fnt-switzer  fnt-400 clr-darkblue mb-0 mt-20 lh-24 op-70">Snag your spot at the biggest design event of the country at just INR 699 when you register within the first three days of registering. Any day later than that, you will be required to pay INR 999.</p>
                        </div>
                    </div>

                    <div class="row mx-auto pt-56">
                        <div class="col-12 col-lg-8">
                            <h3 class="fnt-20  fnt-600 clr-orange text-uppercase fnt-clash">04</h3>
                            <div class="rule"></div>
                            <h3 class="fnt-clash clr-darkblue text-capitalize fnt-28 fnt-600 mb-0">Location
                                Preference</h3>
                            <p class="fnt-rule fnt-switzer  fnt-400 clr-darkblue mb-0 mt-20 lh-24 op-70">When registering, simply pick the city you'd like to participate in, and we'll work to make it happen. If your preferred city choice is full, you'll have to participate from the other location.</p>
                        </div>
                    </div>

                    <div class="row mx-auto pt-56">
                        <div class="col-12 col-lg-8">
                            <h3 class="fnt-20  fnt-600 clr-orange text-uppercase fnt-clash">05</h3>
                            <div class="rule"></div>
                            <h3 class="fnt-clash clr-darkblue text-capitalize fnt-28 fnt-600 mb-0">Team Allocation</h3>
                            <p class="fnt-rule fnt-switzer  fnt-400 clr-darkblue mb-0 mt-20 lh-24 op-70">You will be allotted your team and the problem statement on the 3rd of May, the same day you arrive at the venue.</p>
                        </div>
                    </div>

                    <div class="row mx-auto pt-56">
                        <div class="col-12 col-lg-8">
                            <h3 class="fnt-20  fnt-600 clr-orange text-uppercase fnt-clash">06</h3>
                            <div class="rule"></div>
                            <h3 class="fnt-clash clr-darkblue text-capitalize fnt-28 fnt-600 mb-0">Awards</h3>
                            <p class="fnt-rule fnt-switzer  fnt-400 clr-darkblue mb-0 mt-20 lh-24 op-70">Drumroll please!! The award ceremony will take place after the final presentation to the jury members, on 4th May.</p>
                        </div>
                    </div>

                    <div class="row mx-0 pt-56">
                        <div class="col-12 col-lg-8 event-register">
                            <div class="rule"></div>
                            <h3 class="fnt-clash clr-darkblue fnt-24 lh-24 fnt-600 mb-0">So what are you waiting
                                for?</h3>
                            <div class="<?php echo $registerClass?>">
                                <a target="_blank" href="<?php the_field('button_register') ?>"
                                   class="text-center btn-orange btn-event text-uppercase fnt-switzer clr-white dl-btn mt-btn"><?php if($outOfDate) {
                                        echo 'Registration closed!';
                                    }
                                    else {
                                        echo 'Register Now';
                                    } ?></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Designathon’23 -->
    <section class="section-designathon23">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-lg-8 text-center">
                    <h3 class="fnt-56 fnt-700 clr-darkblue fnt-clash lh-56 text-uppercase">Here is a sneak peak of
                        Designathon’23</h3>
                </div>
            </div>
            <div class="row d-flex justify-content-center pt-32">
                <div class="col-12 col-md-12 col-lg-12 mx-auto">
                    <div class="sec-video">
                        <div class="text-center col-12 col-md-12 col-lg-12 col-xl-12 mx-auto">
                            <a href="https://www.youtube.com/watch?v=o5qzJV9YGck" data-fancybox="">
                                <img class="img-fluid lazyloaded"
                                     src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon2024/designathon2023.png"
                                     alt="video"></noscript>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Rule -->
    <section class="section-rule">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="rule-wrapper d-flex justify-content-center">
                    <div class="col-12 text-center">
                        <div class="row">
                            <img class="img-fluid d-none d-sm-block d-sm-none d-md-block d-md-none d-lg-block"
                                 src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon2024/rule1.png"
                                 alt="rule">
                            <img class="img-fluid d-xl-none d-lg-none d-xl-block"
                                 src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon2024/sm-rule.png"
                                 alt="rule">
                        </div>
                    </div>
                    <div class="rule-info">
                        <div class="row d-flex flex-column">
                            <p class="fnt-switzer rule-info__faq op-70" style="color: #FFFAF1; font-weight: 400;">Keen
                                to know more?</p>
                            <h3 class="col-11 col-lg-8 fnt-32 fnt-600 clr-white rule-info__heading">Rules and
                                regulations to get you started</h3>
                            <a target="_blank" href="<?php the_field('button_download') ?>"
                               class="text-center btn-orange text-uppercase fnt-switzer clr-white ms-lg-3 mt-lg-4 ms-0 mt-0 header-btn rule-info__btn">Download
                                Pdf</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- OUR SPONSORS -->
    <section class="sec-sponsor">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-10 text-center">
                    <div class="row">
                        <h3 class="fnt-56 fnt-700 fnt-clash clr-darkblue lh-56 mb-0">DESIGNATHON MUMBAI</h3>
                        <p class="partner-sub">IN PARTNERSHIP WITH</p>
                    </div>
                </div>
                <div class="sponsor-info mt-64">
                    <div class="row d-flex justify-content-center">
                        <div class="col-12 col-lg-12 px-0">
                            <div class="sponsor-item me-lg-3 ms-lg-0 ms-3 me-3 d-flex flex-column align-items-center">
                                <img class="sponsor-item-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon2024/sponsors.png"
                                     alt="upstock"/>
                                <p class="fnt-switzer fnt-400 fnt-sm-14 clr-darkblue lh-24 pt-32 has-text-align-center" style="opacity: 70%;">
                                    The ISDI School of Design and Innovation is revolutionizing education by embracing design and innovation as catalysts for societal change. Located in Mumbai, a city known for its vibrant energy and rich cultural heritage, ISDI provides an inspiring backdrop for creative exploration. Students are encouraged to draw inspiration from their surroundings and engage with real-world challenges. By fostering collaboration and interdisciplinary exchange, ISDI empowers individuals to make a meaningful impact on society through design.
                                </p>
                            </div>
                        </div>
<!--                        <div class="col-12 col-lg-6 px-0 mt-sm-32">-->
<!--                            <div class="sponsor-item me-lg-0 ms-lg-3 ms-3 me-3">-->
<!--                                <img src="--><?php //echo get_template_directory_uri(); ?><!--/assets/images/designathon2024/creditvidya.png"-->
<!--                                     alt="creditvidya"/>-->
<!--                                <p class="fnt-switzer fnt-400 fnt-sm-14 clr-darkblue lh-24 pt-32" style="opacity: 70%;">-->
<!--                                    Introducing Prefr(originally Creditvidya) an embedded lending-as-a-service platform-->
<!--                                    that utilizes AI-driven underwriting to provide accessible unsecured loans for-->
<!--                                    underserved customers.-->
<!--                                    <br><br>With a decade of experience in credit scoring, Prefr empowers internet-->
<!--                                    platforms to acquire, engage, and monetize users, while partnering with lenders to-->
<!--                                    expand their reach at a marginal cost.-->
<!--                                    <br><br>Together, they are bridging the financial gap for those earning under 50k-->
<!--                                    and driving the future of inclusive lending.-->
<!--                                </p>-->
<!--                            </div>-->
<!--                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FAQ -->
    <section class="sec-faq">
        <div class="container">
            <div class=" faq-head col-12 text-center">
                <h6 class="fnt-56 fnt-700 fnt-clash lh-56 clr-darkblue">WHEN IN DOUBT, ALWAYS ASK</h6>
            </div>
            <div class="row d-flex justify-content-center mt-80 mx-0">
                <div class="col-12 col-md-7 col-lg-7 d-flex flex-column px-0">
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
                                                    <h6 class="fnt-20 fnt-600 clr-darkblue fnt-switzer mb-0"><?php the_sub_field('faq_question') ?></h6>
                                                </div>
                                                <div class="f-accordion__body clr-darkblue fnt-400 fnt-switzer op-70"
                                                     style="<?php if ($i == 0) {
                                                         echo "display: block;";
                                                     } ?>">
                                                    <?php the_sub_field('faq_answer') ?>
                                                </div>
                                            </div>
                                            <hr class="mt-40 mb-40">
                                        </li>
                                        <?php $i++;
                                    endwhile;
                                endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- Footer -->
    <section class="section-footer">
        <div class="img-footer"></div>
    </section>
</main>

<?php
get_footer('designathon2024');
?>
<?php if(!$outOfDate) {?>
<div class="col-8 col-lg-3 text-center d-flex justify-content-center mt-btn btn-mobile-res <?php echo $registerClass?>">
    <a id="banner_registration_form" target="_blank" href="<?php the_field('button_register') ?>"
       class="text-center btn-orange text-uppercase fnt-600 fnt-switzer clr-white header-btn"><?php if($outOfDate) {
            echo 'Registration closed!';
        }
        else {
            echo 'Register Now';
        } ?></a>
</div>
<?php } ?>
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

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

    // // Set the date we're counting down to
    // var countDownDate = new Date("Sep 13, 2023 23:59:59").getTime();

    // // Update the count down every 1 second
    // var x = setInterval(function() {

    //   // Get today's date and time
    //   var now = new Date().getTime();

    //   // Find the distance between now and the count down date
    //   var distance = countDownDate - now;

    //   // Time calculations for days, hours, minutes and seconds
    //   var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    //   var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    //   var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    //   var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    //   // Output the result in an element with id="demo"
    //   document.getElementById("cdate").innerHTML = days < 10 ? '0' + days : days;
    //   document.getElementById("chour").innerHTML = hours < 10 ? '0' + hours : hours;
    //   document.getElementById("cminute").innerHTML = minutes < 10 ? '0' + minutes : minutes;
    //   document.getElementById("csecond").innerHTML = seconds < 10 ? '0' + seconds : seconds;

    //   // If the count down is over, write some text
    //   if (distance < 0) {
    //     clearInterval(x);
    //     document.getElementById("cdate").innerHTML = 00;
    //     document.getElementById("chour").innerHTML = 00;
    //     document.getElementById("cminute").innerHTML = 00;
    //     document.getElementById("csecond").innerHTML = 00;
    //     document.getElementById("banner_registration_form").innerHTML = "Kết thúc đăng ký"
    //     document.getElementById("countdown_registration_form").innerHTML = "Kết thúc đăng ký"
    //     document.getElementById("event_registration_form").innerHTML = "Kết thúc đăng ký"
    //     document.getElementById("banner_registration_form").removeAttribute("href");
    //     document.getElementById("countdown_registration_form").removeAttribute("href");
    //     document.getElementById("event_registration_form").removeAttribute("href");
    //   }
    // }, 1000);
</script>