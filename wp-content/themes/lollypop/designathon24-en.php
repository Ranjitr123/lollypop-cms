<?php

/**
 *  Template Name: DesignathonVn2024-En
 *  */
get_header();
?>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap');
    html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed, 
figure, figcaption, footer, header, hgroup, 
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
	margin: 0;
	padding: 0;
	border: 0;
	font-size: 100%;
	font: inherit;
	vertical-align: baseline;
}
/* HTML5 display-role reset for older browsers */
article, aside, details, figcaption, figure, 
footer, header, hgroup, menu, nav, section {
	display: block;
}
html{
    margin-top:0 !important;
}
body {
	line-height: 1;
    font-family: "Manrope", sans-serif;
}
ol, ul {
	list-style: none;
}
blockquote, q {
	quotes: none;
}
blockquote:before, blockquote:after,
q:before, q:after {
	content: '';
	content: none;
}
.bd-brd{
    display:none;
}
table {
	border-collapse: collapse;
	border-spacing: 0;
}
@font-face {
  font-family: "DFVN Float";
  src: url("<?php echo get_template_directory_uri(); ?>/fonts/dfvn-float.ttf") format("truetype");
  font-weight: normal;
}
    @keyframes animateHead {
        0%{
            transform:rotate(0);
        }
      
        50%{
            transform:rotate(-10deg);
        }
      
        100%{
            transform:rotate(0deg);
        }
    }
    @keyframes animateLeg{
        0%{
            transform:rotate(0);
        }
      
        50%{
            transform:rotate(-10deg);
        }
      
        100%{
            transform:rotate(0deg);
        }
    }
    @keyframes animateWave{
        0%{
            background-position-y:0px;
            /* background-position-x:100vw; */

        }
        50%{
            background-position-y:20px;
        }
        100%{
            background-position-y:0px;
            /* background-position-x:0; */
        }
    }
    @keyframes animateWave2{
        0%{
            background-position-y:0;
            /* background-position-x:0; */
        }
        50%{
            background-position-y:-20px;
        }
        100%{
            background-position-y:0;
            /* background-position-x:100vw; */
        }
    }
    @keyframes animateWave3{
        0%{
            background-position-y:0;
            /* background-position-x:0; */
        }
        50%{
            background-position-y:10px;
        }
        100%{
            background-position-y:0;
            /* background-position-x:100vw; */
        }
    }
    @keyframes animateHuman{
        0%{
            transform:translateY(0);
            /* background-position-x:0; */
        }
        50%{
            transform:translateY(-20px);

        }
        100%{
            transform:translateY(0);

            /* background-position-x:100vw; */
        }
    }
    @keyframes animateHuman2{
        0%{
            transform:translateY(0);
            /* background-position-x:0; */
        }
        50%{
            transform:translateY(-10px);

        }
        100%{
            transform:translateY(0);

            /* background-position-x:100vw; */
        }
    }
    .header {
        display: none;
    }
    .btn-mobile-res{
        display:none !important;
    }
 
    footer:not(.footer-designathon){
        display:none;
    }
    .js-page-scroll-top{
        display:none;
    }
    body {
        padding-bottom: 0 !important;
        background: #FFF;
    }
    .pink-color{
        color:#E0349E !important;
    }
    .text-center{
        text-align:center;
    }
    .white-color{
        color:#fff;
    }
    .blue-color{
        color:#300375;
    }
    .yellow-color{
        color:#FFF742;
    }
    .font-dfvn-float{
        font-family: "DFVN Float";
    }
    .heading-1{
        font-size:72px;
        line-height:80px;
    }
    .heading-2{
        font-size:54px;
        line-height:64px;
    }
    .heading-3{
        font-size:40px;
        line-height:48px;
    }
    .title-1{
        font-size:36px;
        line-height:40px;
    }
    .title-2{
        font-size:32px;
        line-height:36px;
    }
    .subtitle-1{
        font-size:24px;
        line-height:36px;
    }
    @media (max-width: 1280px) {
        .heading-1{
            font-size:60px !important;
            line-height:68px !important;
        }
        .heading-2{
            font-size:48px !important;
            line-height:54px !important;
        }
        .heading-3{
            font-size:36px !important;
            line-height:40px !important;
        }
        .title-1{
            font-size:32px !important;
            line-height:36px !important;
        }
        .title-2{
            font-size:28px !important;
            line-height:32px !important;
        }
        .subtitle-1{
            font-size:20px !important;
            line-height:32px !important;
        }
    }
    @media (max-width: 1400px) {
        .section-old-candidate .grid{
            align-items:center;
        }
    }
    @media screen (max-width:1100px){
        .section-timeline-schedule .block-timeline .timeline-item .timeline-inner-item {
            padding: 20px;
        }   
        .section-timeline-schedule .block-timeline .timeline-item .timeline-inner-item ul li .pink-color {
            width: 40px;
        }
    }
    @media screen and (min-width:1100px) and (max-width:1200px){
        .container {
            max-width: 1044px; 
            padding:0;
        }
    }
    @media screen and (min-width:1024px) and (max-width:1100px){
        .container {
            max-width: 964px; 
            padding:0;
        } 
    }
    @media (max-width: 992px) {
        .container {
            max-width: calc(100% - 80px);
            padding:0 !important;
        }
        
    }
    @media (max-width: 768px) {
        .container {
            max-width: calc(100% - 80px);
        }
        .noHover{
            pointer-events: none;
        }
        .heading-1{
            font-size:36px !important;
            line-height:40px !important;
        }
        .heading-2{
            font-size:32px !important;
            line-height:36px !important;
        }
        .heading-3{
            font-size:28px !important;
            line-height:32px !important;
        }
        .title-1{
            font-size:24px !important;
            line-height:26px !important;
        }
        .title-2{ 
            font-size:20px !important;
            line-height:22px !important;
        }
        .subtitle-1{
            font-size:18px !important;
            line-height:20px !important;
        }
    }
    @media (max-width: 576px) {
        .container, .container-sm {
            max-width: calc(100% - 32px);
            padding:0 !important;
        }
    }
    .banner-designathon24{
    
        height:200vh;
        /* height:calc(100vh - 50px); */
        /* padding-top:9.72vw; */
        position:relative;
    }
    .banner-designathon24 .block-sticky{
        position:sticky;
        top:0;
        width:100%;
        left:0;
        height:100vh;
        z-index:2;
        pointer-events:none;
    }
    .banner-designathon24 .change-lang{
        position:absolute;
        top:3.68vw;
        right:4%;
        width:fit-content;
        height:fit-content;
        background:#fff;
        border-radius:100px;
        z-index:9;
        display:flex;
        justify-content:center;
        align-items:center;
        padding:4px;
    }
    .banner-designathon24 .change-lang span{
        padding:4px 12px;
        font-size: clamp(14px, 1.1vw, 1rem); 
        line-height:24px;
        font-weight:500;
        color:#AEAEB2;
        cursor:pointer;
    }
    .banner-designathon24 .change-lang span.active{
        background:#300375;
        color:#fff;
        padding:4px 12px;
        border-radius:48px;
        font-size: clamp(14px, 1.1vw, 1rem); 

        line-height:24px;
        font-weight:500;
    }
    .banner-designathon24 .bg{
        position:absolute;
        top:0;
        left:0;
        width:100%;
        height:100%;
        background-image:url("<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/BG.svg") ;
        /* background-repeat:no-repeat; */
        background-size:cover;
        z-index:1;
    }
    /* .banner-designathon24 .block-sticky:before{
        content:'';
        position:absolute;
        top:0;
        left:0;
        width:100%;
        height:100%;
        background-image:url("<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/BG.svg") ;
        background-repeat:no-repeat;
        background-size:cover;
    } */
    .banner-designathon24 h1{
        font-size:54px;
        line-height:64px;
        margin-bottom:12px !important;
        margin-top:0;
        color:#fff;
    }
    .banner-designathon24 .dragon-right {
        position:absolute;
        right:0;
        top:0;
        width:26.56vw;
        height:21.6vw;
        overflow:hidden;
    }
    .banner-designathon24 .dragon-left{
        position:absolute;
        left:0;
        top:0;
        width:25.2vw;
        height:21.9vw;
    }
    .banner-designathon24 .dragon-left .body-dragon{
        position:absolute;
        left:0;
        top:0;
        width:100%;
        height:auto;
    }
    .banner-designathon24 .dragon-left .leg-dragon{
        position:absolute;
        left:95px;
        top:35%;
        width:10.7vw;
        height:auto;
        animation: 3s linear 0s infinite alternate animateLeg;

    }
    .banner-designathon24 .dragon-right .head-dragon{
        position:absolute;
        right:-9px;
        top:-96px;
        width:100%;
        height:auto;
        animation: 4s linear 1s infinite alternate animateHead;
        z-index:1;
    }
    .banner-designathon24 .dragon-right .body-dragon{
        position:absolute;
        right:0%;
        top:0;
        width:19.47vw;
        height:auto;
    }
    .banner-designathon24 h1:last-child{
        margin-bottom:0 !important;
    }
 
    .banner-designathon24 .container{
        position:absolute;
        top:0;
        left:50%;
        transform:translateX(-50%);
        height:100%;
        display:flex;
        flex-direction:column;
        overflow:hidden;
        z-index:1;
    }  
    .banner-designathon24 .container .block-content{
        height:100vh;
        flex-shrink:0;
        /* position:absolute; */
    }
    .banner-designathon24 .container .block-content-0{
        /* left:50%;
        transform:translateX(-50%); */
        padding-top:3.68vw;
        z-index:2;
    }
    .banner-designathon24 .container .block-content-0 .image-sponsor,.banner-designathon24 .container .block-content-0 .image-talent {
        display:flex;
        justify-content:center;
        width:66.3vw;
        height:auto;
        margin:0 auto;
    }
    .banner-designathon24 .container .block-content-0 .image-talent img{
        width:100%;
        height:100%;
        object-fit:contain;
    }
    .banner-designathon24 .container .block-content-0 .image-sponsor{
        margin-bottom:40px;
    }
    .banner-designathon24 .container .block-content-0 h2{
        font-size:72px;
        text-align:center;
    }
    .banner-designathon24 .container .block-content-1{
        position:relative;
        display:flex;
        flex-direction:column;
        gap:16px;
        height:100vh;
        z-index:9;
        padding-top:4.72vw;
        z-index:2;

    }  
    .banner-designathon24 .wave{
        position:absolute;
        top:0;
        width:100%;
        height:100vh;
        z-index:0;

    }
    .banner-designathon24 .humans{
        position:absolute;
        top:0;
        width:100%;
        height:100vh;
        z-index:0;
    }
    .banner-designathon24 .humans .human{
        position:absolute;
        width:auto;
        height:auto;
        background-size:auto;
        background-repeat:no-repeat;

    }
    .banner-designathon24 .wave .human.human-1{
        position:absolute;

        bottom:-40% !important;
        width:100%;
        height:100%;
        left:0;
        z-index:3;
        background-image:url("<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/human-1.svg");
        animation:1.8s linear 0.1s infinite alternate-reverse animateHuman;
        background-size:100% 100%;
        background-repeat:no-repeat;

    }
    .banner-designathon24 .wave .human.human-2{
        position:absolute;
        bottom:-40% !important;
        width:100%;
        height:100%;
        left:0;
        transform:translateX(-50%);
        z-index:3;
        background-image:url("<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/human-2.svg");
        animation:1.8s linear 0.1s infinite alternate-reverse animateHuman;
        background-size:100%;
        background-repeat:no-repeat;
        background-position:0;
    }
    .banner-designathon24 .wave .human.human-3{
        position:absolute;
        bottom:-40% !important;
        width:100%;
        height:100%;
        left:0;
        transform:translateX(-50%);
        z-index:-1;
        background-image:url("<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/human-3.svg");
        animation:1.8s linear 0s infinite alternate-reverse animateHuman2;
        background-size:100%;
        background-repeat:no-repeat;
        background-position:0;

    }
    .banner-designathon24 .wave .human.human-4{
        position:absolute;
        bottom:-40% !important;
        width:100%;
        height:100%;
        left:0;
        z-index:-1;
        background-image:url("<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/human-4.svg");
        animation:1.8s linear 0.2s infinite alternate-reverse animateHuman;
        background-size:100%;
        background-repeat:no-repeat;
        background-position:0 53%;
    }
    .banner-designathon24 .wave .wa{
        position:absolute;
        width:100%;
        height:100%;
        background-size:100vw 100%;
        background-repeat:no-repeat;
    }
    .banner-designathon24 .wave .wa.wave-1{
        bottom:-40%;
        background-image:url("<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/wave-2.svg");
        animation:1.8s linear 0.2s infinite alternate-reverse animateWave2;
        z-index:3;

    }
    .banner-designathon24 .wave .wa.wave-2{
        bottom:-40%;
        background-image:url("<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/wave-1.svg");
        animation:1.8s linear 0s infinite alternate-reverse animateWave2;
        z-index:4;

    }
    .banner-designathon24 .wave .wa.wave-3{
        bottom:-40%;
        background-image:url("<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/wave-3.svg");
        animation:1.8s linear 1.1s infinite alternate-reverse animateWave;
        z-index:2;

    }
    .banner-designathon24 .wave .wa.wave-4{
        bottom:-40%;
        background-image:url("<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/wave-4.svg");
        animation:1.8s linear 1.2s infinite alternate-reverse animateWave;
        z-index:1;

    }
    .banner-designathon24 .wave .wa.wave-5{
        bottom:-40%;
        background-image:url("<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/wave-5.svg");
        animation:1.8s linear 0s infinite alternate-reverse animateWave3;
        z-index:0;

    }
    .banner-designathon24 .container .description{
        width:43.8%;
        margin:0 auto;
        font-size:16px;
        line-height:24px;
    }
 
    .banner-designathon24 .container .block-detail{
        display:grid;
        grid-template-columns:repeat(3,1fr);
        margin:24px 0;
    }
    .banner-designathon24 .container .block-detail .block-item h2{
        font-size:40px;
        line-height:48px;
    }
    .banner-designathon24 .container .block-detail .block-item h3{
        font-size:24px;
        line-height:36px;
        margin-bottom:12px;
    }
    .button-designathon{
        padding:16px 40px;
        width:fit-content;
        margin:0 auto;
        font-size:18px;
        line-height:24px;
        font-weight:700;
        background-image:url("<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/Illust.png"), url("<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/Illust-right.png");
        background-repeat:no-repeat;
        background-position:left top, right top;
        cursor:pointer;
        position:relative;
        z-index:1;
        border:none;
        transition:all 0.3s ease-in-out;
    }
    .button-designathon a{
    }
    .button-designathon-active{
        padding:16px 40px;
        width:fit-content;
        margin:0 auto;
        font-size:18px;
        line-height:24px;
        font-weight:700;
        background-image:url("<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/Illust-active.png"), url("<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/Illust-active-1.png");
        background-repeat:no-repeat;
        background-position:left top, right top;
        background-color:#E0349E;
        cursor:pointer;
        position:relative;
        z-index:1;
        border:1px solid transparent;

        transition:all 0.3s ease-in-out;
    }
    .button-designathon:hover{
        background-color:#E0349E;
        color:#fff !important;
        background-image:url("<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/Illust-active.png"), url("<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/Illust-active-1.png");
    }
    .button-designathon:hover >a{
        color:#fff !important;
    }
    .button-designathon-active:hover{
        background-image:url("<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/Illust.png"), url("<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/Illust-right.png");
        color:#E0349E !important;
        background-color:#fff;
        border:1px solid #E0349E !important;

    }
    /* Section Cant miss */
    .section-cant-miss{
        padding-top:17%;
    }
    .section-cant-miss .block-content .block-item h2{
        font-size:54px;
        line-height:64px;
    }
    .section-cant-miss .block-content{
        display:flex;
        justify-content:space-between;
    }
    .section-cant-miss .block-content .block-item p{
        width:70%;
        margin-left:auto;
        color:#300375;
        font-weight:500;
    }
    .section-cant-miss .block-content .block-item{
        width:50%;
    }
    .section-slide-card {
        padding:60px 0 120px;
    }
    .section-slide-card .list-card{
        display:flex;
        gap:16px;
        flex-wrap:no-wrap;
        overflow-x:scroll;
        cursor: pointer;
        padding-right:2%;
    }
    .section-slide-card .list-card.active{
        cursor: grab;
    }
    .section-slide-card .list-card::-webkit-scrollbar {
        display: none;
    }
    .section-slide-card .list-card .card-item{
        /* width:23.88%; */
        border:1.2px solid #35007A;
        background-image:url("<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/Illus-card.png");
        background-repeat:no-repeat;
        background-position:top right;
        user-select:none;
        flex-grow: 0;
        flex-shrink: 0;
        flex-basis:21.38vw;
        transition: all 0.4s;
    }
    .section-slide-card .list-card .card-item:hover{
        flex-basis:28.88vw;
    }
    .section-slide-card .list-card .card-item:hover >.inner-card-item >p{
        transform:translateY(0);
        opacity:1;
    }
    .section-slide-card .list-card .card-item:hover >.inner-card-item >h3{
        transform:translateY(0);
        color:#E0349E;
    }
    .section-slide-card .list-card .card-item .inner-card-item{
        padding:24px;
        height:100%;
        display:flex;
        flex-direction:column;
        justify-content:space-between;
    }
    .section-slide-card .list-card .card-item .inner-card-item h3{
        /* margin-top:84px; */
        font-size:36px;
        line-height:40px;
        transform:translateY(70px);
        transition: all 0.3s;

    }
    .section-slide-card .list-card .card-item .inner-card-item p{
        transform:translateY(60px);
        opacity:0;
        transition: all 0.3s;
        margin-bottom:20px;

    }
    .section-slide-card .list-card .card-item .inner-card-item .wrapper-image{
        width:100%;
        height:280px;
    }
    .section-slide-card .list-card .card-item .inner-card-item .wrapper-image img{
        width:100%;
        height:100%;
        object-fit:cover;
        -webkit-user-drag: none;
        -khtml-user-drag: none;
        -moz-user-drag: none;
        -o-user-drag: none;
        user-drag: none;
    }
    /* section countdown */
    .section-countdown{
        padding:124px 0 140px;
    }
    .section-countdown h3{
        font-size:32px;
        line-height:36px;
        margin-bottom:8px;
        text-align:center;
    }
    .section-countdown h2{
        font-size:54px;
        line-height:64px;
        margin-bottom:16px;
        text-align:center;
    }
    .section-countdown p{
        text-align:center;
        color:#221429;
        width:55%;
        margin:0 auto;
        font-weight:500;
    }
    .section-countdown .block-countdown{
        display:flex;
        justify-content:center;
        gap:30px;
        padding: 40px 0 0;
    }
    .section-countdown .block-countdown .time-item{
        width:120px;
        height:90px;
        background:#300375;
        position:relative;
        display:flex;
        justify-content:center;
        align-items:center;
    }
    .section-countdown .block-countdown .time-item .circle{
        position:absolute;
        top:50%;
        left:-8px;
        width:16px;
        height:16px;
        background-color:#fff;
        border-radius:50%;
        transform:translateY(-50%);
    }
    .section-countdown .block-countdown .time-item .circle.right{
        left:auto;
        right:-8px;
    }
    .section-countdown .block-countdown .time-item:before{
        content:'';
        position:absolute;
        top:37%;
        right:-18px;
        width:6px;
        height:6px;
        background-color:#300375;
        border-radius:50%;
    }
    .section-countdown .block-countdown .time-item:after{
        content:'';
        position:absolute;
        bottom:37%;
        right:-18px;
        width:6px;
        height:6px;
        background-color:#300375;
        border-radius:50%;
    }
    .section-countdown .block-countdown .time-item:last-child:after,.section-countdown .block-countdown .time-item:last-child:before{
        content:none;
    }
    .section-countdown .block-countdown .time-item h4{
        font-size:54px;
        line-height:64px;
        color:#fff;
        margin-top:5px;
    }
    .section-countdown .block-title{
        display:flex;
        justify-content:center;
        gap:30px;
    }
    .section-countdown .block-title h4{
        width:120px;
        font-size:24px;
        line-height:36px;
        text-align:center;
        font-weight:700;
        margin-top:8px;
    }
    .section-countdown .button-designathon-register{
        margin-top:40px;
    }
    .section-timeline-schedule{
        padding:240px 0 140px;
        position:relative;
        
    }
    .wrapper-timelime-bg{
        background-image:url("<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/bg-wrap-timeline.svg");
        background-size:cover;
        background-repeat:no-repeat;
    }
    .section-timeline-schedule:after{
        content:'';
        position:absolute;
        top:-19vw;
        left:0;
        width:100%;
        height:100%;
        background-image:url("<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/layer-hour.svg");
        background-size:100%;
        background-repeat:no-repeat;
        pointer-events:none;

        /* opacity:0.5; */
        /* background-color:rgba(0,0,0,0.2); */
    }
    .section-timeline-schedule .block-timeline{
        display:flex;
        gap:20px;
    }
    .section-timeline-schedule .block-timeline .timeline-item{
        width:33.33%;
    }
    .section-timeline-schedule .block-timeline .timeline-item:first-child h2{
        font-size:54px;
        line-height:64px;
    }
    .section-timeline-schedule .block-timeline .timeline-item:first-child .timeline-inner-item{
        padding:0;
    }
    .section-timeline-schedule .block-timeline .timeline-item:first-child .timeline-image{
        position:absolute;
        bottom:-73px;
        right:-12%;
        width:auto;
        height:auto;
    }
    .section-timeline-schedule .timeline-image-mobile{
        display:none;
    }
    .section-timeline-schedule .block-timeline .timeline-item:not(.first){
        /* background-color: rgba(#311c56,0.6); */
        border:1.5px solid #fff;
        background-image:url("<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/iilust-timeline-1.svg");
        background-size:cover;
        background-repeat:no-repeat;
    }
    .section-timeline-schedule .block-timeline .timeline-item:last-child{
        height:fit-content;
        margin-top:auto;
    }
    .section-timeline-schedule .block-timeline .timeline-item .timeline-inner-item{
        padding:40px;
    }
    .section-timeline-schedule .block-timeline .timeline-item .timeline-inner-item .head .day{
        font-size:24px;
        line-height:36px;
    }
    .section-timeline-schedule .block-timeline .timeline-item .timeline-inner-item .head h3{
        font-size:120px;
        line-height:132px;
    }
    .section-timeline-schedule .block-timeline .timeline-item .timeline-inner-item .head{
        position:relative;
        border-bottom:1px solid #fff;
    }
    .section-timeline-schedule .block-timeline .timeline-item .timeline-inner-item .head h3 span{
        font-family: "Manrope", sans-serif;
        font-size:24px;
        line-height:36px;
        font-weight:700;
    }
    .section-timeline-schedule .block-timeline .timeline-item .timeline-inner-item ul{
        padding-top:25px;
    }
    .section-timeline-schedule .block-timeline .timeline-item .timeline-inner-item ul li{
        display:flex;
        align-items:center;
        gap:20px;
        margin-bottom:24px;
        font-weight:700;
    }
    .section-timeline-schedule .block-timeline .timeline-item .timeline-inner-item ul li .pink-color{
        width: 46px;
    }
    /* Section rules */
    .section-rules{
        padding:80px 0 136px;
        position:relative;
     
    }
    .section-rules h2{
        font-size:54px;
        line-height:64px;
        text-align:center;
        margin-bottom:60px;
    }
    .section-rules .grid-rules{
        display:flex;
        justify-content:space-between;
        gap:37px;
    }
    .section-rules .grid-rules .rule-item{
        width:30%;
        border-left:3px solid #BD9CEB;
        height:fit-content;
    }
    .section-rules .grid-rules .rule-item .inner-rule{
        padding-left:19px;
    }
    .section-rules .grid-rules .rule-item .image-rule-icon{
        margin-bottom:40px;
    }
    .section-rules .grid-rules .rule-item h3{
        font-size:36px;
        line-height:40px;
        margin-bottom:16px;
        width:80%;
    }
    .section-rules .grid-rules .rule-item p{
        margin-bottom:16px;
        font-weight:500;
    }
    .section-rules .grid-rules .rule-item:nth-child(2){
        margin-top:50px;
    }
    .section-rules .grid-rules .rule-item:nth-child(4){
        margin-top:96px;
    }
    /* section More */
    .section-research-more{
        padding:80px 0 104px;
        overflow:hidden;
    }
    .section-research-more .container .block{
        width:73.8vw;
        height:27vw;
        margin:0 auto;
        background-color:#220552;
        padding-top:4.16vw;
        position:relative;
        background-image:url("<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/layer-full.svg");
        background-size:cover;
        background-repeat:no-repeat;
    }
    .section-research-more .container .block:before{
        content:'';
        position:absolute;
        bottom:-9%;
        right:-8%;
        width:33.2vw;
        height:31.73vw;
        background-image:url("<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/layer-human-full.svg");
        background-repeat:no-repeat;
        background-size:cover;

    }
    .section-research-more .container .block h5{
        font-size:24px;
        line-height:36px;
        margin-bottom:16px;
    }
    .section-research-more .container .block h2{
        font-size:54px;
        line-height:64px;
        margin-bottom:32px;
    }
    .section-research-more .container .block button{
        margin: 0 auto;
    }
    .section-partner{
        padding:80px 0 100px;
        overflow:hidden;
        background-image:url("<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/partner-bg.svg");
        background-repeat:no-repeat;
        background-size:cover;
    }
    .section-partner .grid-partner{
        gap:160px;
    }
    .section-partner .grid-partner .image-mobile{
        display:none;
    }
    .section-partner .grid-partner .grid-item{
        /* width:50%; */
        text-align:center;
        position:relative;
    }
    .section-partner .grid-partner .grid-item:first-child{
        width:29.3%
    }
    .section-partner .grid-partner .grid-item:last-child{
        width:70.7%
    }
    .section-partner .grid-partner .grid-item:first-child .image-partner img{
        width:81%;
    }
    .section-partner .grid-partner .grid-item h3{
        font-size:32px;
        line-height:36px;
        font-weight:700;
        margin-bottom:32px;
        white-space:nowrap;
    }
    .section-partner .grid-partner .grid-item:last-child h3{
        text-align:left;
    }
    .section-partner .grid-partner .grid-item .list-image{
        display:flex;
        flex-wrap:wrap;
        row-gap:16px;
    }
    .section-partner .grid-partner .grid-item .list-image .wrapper-image{
        width:33.33%;
        height:auto;
    }
    .section-partner .grid-partner .grid-item .list-image .wrapper-image img{
        width:100%;
        height:auto;
    }
    .section-partner h2{
        font-size:54px;
        line-height:64px;
        margin-bottom:16px;
    }
    .section-partner p{
        font-size:16px;
        line-height:24px;
        margin-bottom:60px;
        width:60%;
    }
    .section-partner .image-desktop{
        display:block;
    }
    .section-partner .image-mobile{
        display:none;

    }
    /* section video */
    .section-video{
        position:relative;
        padding:80px 0 124px;
        background-image:url("<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/bg-video.svg");
        background-size:cover;
        background-repeat:no-repeat;
    }
    .section-video h2{
        font-size:54px;
        line-height:64px;
        margin-bottom:40px;
    }
    .section-video .wrapper-video{
        display:flex;
        justify-content:center;
        position:relative;
    }
    .section-video .wrapper-video .play-video{
        position:absolute;
        top:50%;
        left:50%;
        transform:translate(-50%,-50%);
        cursor:pointer;
        z-index:9;
    }
    .section-video ul{
        display:flex;
        justify-content:space-between;
        padding:0 8%;
        padding-top:40px;

    }
    .section-video ul li{
        font-size:24px;
        line-height:32px;
        position:relative;
    }
    .section-video ul li:before{
        content:'';
        position:absolute;
        left:-20px;
        width:8px;
        height:8px;
        border-radius:50%;
        background-color:#E0349E;
        top:40%;
        transform:translateY(-50%);
    }
    .section-video ul li span{
        font-size:40px;
        line-height:48px;
    }
    /* section old candidate */
    .section-old-candidate{
        padding:80px 0;
    }
    .section-old-candidate h4{
        font-size:32px;
        line-height:36px;
        text-align:center;
    }
    .section-old-candidate h2{
        font-size:54px;
        line-height:64px;
        text-align:center;
        margin-bottom:60px;
    }
    .section-old-candidate .grid{
        gap:16px;
    }
    .section-old-candidate .grid .column{
        width:33.33%;
    }
    .section-old-candidate .grid .column .post-item{
        border: 1px solid #CFD5F3;
        border-radius:3px;
        position:relative;
       margin-bottom:16px;
       cursor:pointer;
       transition:all 0.3s;
    }
    .section-old-candidate .grid .column .post-item:hover{
        border: 1px solid #6027AE;
    }
    .section-old-candidate .grid .column .post-item:before{
        content:'';
        position:absolute;
        right:0;
        top:0;
        background-image:url("<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/Illus-card.png");

        width: 45%;
        height: 45%;
        opacity: 0.4;
    }
    .section-old-candidate .grid .column .post-item .post-inner-item{
        padding:28px 16px;
    }
    .section-old-candidate .grid .column .post-item .post-inner-item .post-header{
        display:flex;
        align-items:flex-start;
        justify-content:space-between;
    }
    .section-old-candidate .grid .column .post-item .post-inner-item .post-header .block-info{
        display:flex;
        gap:8px;
    }
    .section-old-candidate .grid .column .post-item .post-inner-item .post-header .block-info .info h3{
        font-size:20px;
        line-height:27.32px;
        color:#350255;
        font-weight:600;
    }
    .section-old-candidate .grid .column .post-item .post-inner-item .post-header .block-info .info span{
        color:#350255;
        opacity:0.4;
        font-size:14px;
    }
    .section-old-candidate .grid .column .post-item .post-inner-item .post-body p{
        color:#1D0044;
        padding:16px 0 0;
    }
    .section-old-candidate .grid .column .post-item .post-inner-item .wrapper-image{
        width:100%;
        height:auto;
        margin-top:16px;
    }
    .section-old-candidate .grid .column .post-item .post-inner-item .wrapper-image img{
        width:100%;
        height:auto;
    }
    /* common question */
    .section-common-question{
        padding:120px 0 60px;
    }
    .section-common-question h2{
        font-size:54px;
        line-height:64px;
    }
    .section-common-question .accordion:after{
        content:none;
    }
    .section-common-question .accordion .accordion-item{
        border:none;
        border-bottom: 1px solid #CFD5F3;
        padding:30px 0;
    }
    .section-common-question .accordion .accordion-item .accordion-button{
        height:fit-content !important;
        color:#FF22B0;
        font-size:18px;
        line-height:32px;
        font-weight:600;
        padding:0;
        gap:32px;
        padding-bottom:8px;
        display:flex;
        align-items:flex-start;
    }
    .section-common-question .accordion .accordion-item .accordion-button:after{
        background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/expand.svg');
    }
    .section-common-question .accordion .accordion-item .accordion-button.collapsed:after{
        background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/plus.svg');
    }
    .section-common-question .accordion .accordion-item .accordion-button.collapsed{
        color:#221429;
    }
    .section-common-question .accordion .accordion-item .accordion-body{
        font-size:16px;
        line-height:24px;
        color:#1D0044;
        padding:0;

    }
    .section-common-question .accordion .grid-question{
        display:flex;
        gap:64px;
    }
    .section-common-question .accordion .grid-question .block-item{
        width:50%;
    }
    .section-common-question .contact-now{
        background:#220552;
        margin:60px 0 30px;
    }
    .section-common-question .contact-now .inner-contact{
        padding:32px;
        display:flex;
        justify-content:space-between;
        align-items:center;
    }
    .section-common-question .contact-now .inner-contact h4{
        font-size:24px;
        font-weight:700;
        line-height:36px;
        margin-bottom:8px;
    }
    .section-common-question .contact-now .inner-contact p{
        font-size:16px;
        line-height:24px;
    }
    .section-common-question .contact-now .inner-contact button{
        margin-left:auto;
        margin-right:0;
        padding:16px 64px;
    }
    /* Section register */
    .section-register{
        padding:80px 0 140px;
    }
    .section-register h3{
        font-size:32px;
        line-height:36px;
        margin-bottom:8px;
    }
    .section-register h2{
        font-size:54px;
        line-height:64px;
        margin-bottom:16px;
    }
    .section-register p{
        font-size:16px;
        line-height:24px;
        font-weight:700;
        color:#221429;
        margin:0 auto;

        margin-bottom:40px;
        width:50%;
    }
    /* footer */
    footer.footer-designathon{
        background:#000;
        padding:180px 0 56px
    }
    footer.footer-designathon .container{
        position:relative;
        z-index:9;
    }
    footer.footer-designathon:before{
        content:'';
        position:absolute;
        bottom:0;
        left:0;
        width:100%;
        height:100%;
        background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/footer-illust.svg');
        background-size:100%;
        background-repeat:no-repeat;
        z-index:1;
        pointer-events:none;
        transform:translateY(-20vw);
    }
    footer.footer-designathon h5{
        font-size:14px;
        line-height:18px;
        margin-bottom:6px; 
        color:#E9D7FE;
    }
    footer.footer-designathon h2{
        font-size:48px;
        line-height:56px;
        margin-bottom:64px;
        color:#fff;
        font-weight:500;
    }
    footer.footer-designathon .block-item:first-child{
        width:25%;
    }
    footer.footer-designathon .block-social{
        padding-bottom:40px;
        border-bottom:1px solid #7F56D9;
    }
    footer.footer-designathon .block-item{
        width:75%;
    }
    footer.footer-designathon .block-item p{
        color:#E9D7FE;
        margin-top:28px;
        font-weight:300;
    }
    footer.footer-designathon .block-item ul{
        display:flex;
        justify-content:flex-end;
    }
    footer.footer-designathon .block-item ul li{
        width:24.12%;
        text-align:center;
    }
    footer.footer-designathon .block-item ul li h6 a{
        font-size:20px;
        line-height:28px;
        color:#fff;
        font-weight:500;
        text-align:center;
    }
    footer.footer-designathon .block-item ul li h6{
        margin-top:16px;
    }
    footer.footer-designathon .block-policy{
        justify-content:flex-end;
        padding-top:40px;
    }
    footer.footer-designathon .block-policy p{
        color:#E9D7FE;
        font-size:14px;
        line-height:18px;
        font-weight:300;
    }
    footer.footer-designathon .block-policy ul{
        display:flex;
        gap:24px;
    }
    footer.footer-designathon .block-policy ul li a{
        color:#E9D7FE;
    }
    
    @media (max-width:1520px){
        .banner-designathon24 .wave .human.human-1{
            bottom:-115px;
        }
        .banner-designathon24 .wave .human.human-2{
            bottom:-17%;
        }
        .banner-designathon24 .wave .human.human-3{
            bottom:-19%;
        }
        .banner-designathon24 .wave .human.human-4{
            bottom:-10%;
        }
    }
    @media (min-width:1520px){
        .banner-designathon24 .wave .human.human-2{
            bottom:-13%;
        }
        .banner-designathon24 .wave .human.human-3{
            bottom:-16%;
        }
        .banner-designathon24 .wave .human.human-4{
            bottom:-9%;
        }
    }
    @media (min-width:1800px){
        .banner-designathon24 .wave .human.human-2{
            bottom:-10%;
        }
        .banner-designathon24 .wave .human.human-3{
            bottom:-10%;
        }
        .banner-designathon24 .wave .human.human-4{
            bottom:-5%;
        }
    }
    @media (min-width:1600px){
        /* footer.footer-designathon:before{
            top:-48%;
        } */
        /* .banner-designathon24 .wave .human.human-2{
            bottom:-19vh;
        } */
    }
    @media (min-width:1800px){
        /* footer.footer-designathon:before{
            top:-58%;
        } */
    }
    @media (max-width:1280px){
        .banner-designathon24 .dragon-right{
            right: 0px;
            top: -4px;
            width: 26.56vw;
        }
        .banner-designathon24 .dragon-right .head-dragon{
            right: 0;
            top: -31%;
        }
        .banner-designathon24 .dragon-right .body-dragon{
            width: 19.47vw;
        }
        .banner-designathon24 .dragon-left{
            width: 27.2vw;
        }
        .banner-designathon24 .dragon-left .leg-dragon{
            width: 12.7vw;
            left: 24%;
            top: 39%;
        }
        .banner-designathon24 .container{
            max-width:100%;
        }
        .section-slide-card .list-card .card-item{
            flex-basis: 27.38vw;
        }
        .section-cant-miss .block-content{
            display:block;
        }
        .section-cant-miss .block-content .block-item{
            width:100%;
        }
        .section-cant-miss .block-content .block-item p{
            width:100%;
        }
        .section-timeline-schedule .block-timeline .timeline-item:first-child .timeline-image{
            width:100%;
        }
        .section-timeline-schedule .block-timeline .timeline-item:first-child h2{
            font-size: 48px;
            line-height: 56px;
        }
        .section-timeline-schedule .block-timeline .timeline-item .timeline-inner-item {
            padding: 30px;
        }
        .section-timeline-schedule .block-timeline .timeline-item .timeline-inner-item .head h3 {
            font-size: 8.3vw;
            line-height: 116%;
        }
        .section-timeline-schedule .block-timeline .timeline-item:first-child h2 {
            font-size: 3.75vw;
            line-height: 110%;
        }
        .section-research-more .container .block h2{
            font-size:3.75vw;
            line-height:100%;
        }
        .section-research-more .container .block h5{
            font-size:20px;
            line-height:100%;
        }
        .section-research-more .container .block button{
            padding:14px 36px;
            font-size: 16px;
            line-height: 24px;
        }
        .section-old-candidate .grid .column .post-item .post-inner-item{
            padding: 24px 16px;
        }
        .section-old-candidate .grid .column .post-item .post-inner-item .post-header .block-info .avatar img{
            width:40px;
            height:40px;
        }
        .section-old-candidate .grid .column .post-item .post-inner-item .post-header .block-info .info h3{
            font-size: 18px;
            line-height: 22px;
        }
        .section-old-candidate .grid .column .post-item .post-inner-item .post-body p{
            font-size: 15px;
            line-height: 22px;
            padding: 8px 0 0;
        }
        .section-old-candidate .grid .column .post-item .post-inner-item .wrapper-image{
            margin-top:8px;
        }
        .section-old-candidate .grid{
            align-items:center
        }
        .section-old-candidate .grid .column .post-item:last-child{
            margin-bottom:0;
        }
        .section-common-question{
            padding: 80px 0 60px;
        }
    }
    /* tablet */

    @media(max-width:1024px){
        .banner-designathon24 .dragon-right{
            width: 30.56vw;
            height: 25.6vw;
        }
        .banner-designathon24 .dragon-right .body-dragon{
            width: 24.2vw;
        }
        .banner-designathon24 .dragon-left{
            width: 29.2vw;
        }
        .banner-designathon24 .dragon-left .leg-dragon{
            width: 12.7vw;
            left: 21%;
            top: 38%;
        }
        .banner-designathon24 .container .block-content-0{
            padding-top: 5.68vw;
        }
        .banner-designathon24 .change-lang{
            top:5.68vw;
        }
        .banner-designathon24 .container .block-content-1{
            justify-content:center;
            padding-top:0;
        }
        .banner-designathon24 .container .block-content-0 .image-talent{
            width: 75.3vw;
        }
        .banner-designathon24 .wave .human.human-1{
            background-size: 120%;
            background-position: 22% 50%;
        }
        .banner-designathon24 .wave .human.human-2{
            background-size: 120%;
            background-position: 55%;
        }
        .banner-designathon24 .wave .human.human-3{
            background-size: 120%;
            background-position: 57%;
        }
        .banner-designathon24 .wave .human.human-4{
            background-size: 120%;
            background-position: 80%;
        }
        .section-slide-card .list-card .card-item{
            flex-basis: 36.38vw;
        }
        .section-slide-card .list-card .card-item:hover{
            flex-basis: 38.38vw;

        }
        .section-rules .grid-rules .rule-item h3{
            width:100%;
        }
    }
    @media screen and  (max-width:1024px) and (min-height:1080px){
        .banner-designathon24 .container .block-content-0{
            padding-top: 19.68vw;
        }
        .banner-designathon24 .container .block-content-0 .image-talent {
            width: 90.3vw;
        }
    }
    @media(max-width:992px){
        .section-timeline-schedule .block-timeline{
            flex-wrap:wrap;
        }
        .section-timeline-schedule .block-timeline .timeline-item:first-child{
            width:100%;
        }
        .section-timeline-schedule .block-timeline .timeline-item:first-child .timeline-image{
            display:none;
        }
        .section-timeline-schedule .block-timeline .timeline-item:not(:first-child){
            flex:1;
        }
        .section-timeline-schedule .block-timeline .timeline-item:first-child h2{
            text-align:center;
        }
        .section-rules h2{
            font-size:3.75vw;
            line-height:110%;
        }
        .section-rules .grid-rules .rule-item{
            width:50%;
            margin-top:0;
            margin-bottom:40px;
        }
        .section-rules .grid-rules{
            gap:0;
            flex-wrap:wrap;
        }
        .section-rules .grid-rules .rule-item:nth-child(2),.section-rules .grid-rules .rule-item:nth-child(4){
            margin-top:0;
        }
        .section-rules .grid-rules .rule-item:nth-child(2n + 1) .inner-rule{
            padding-right:32px;
        }
        .section-rules .grid-rules .rule-item h3{
            font-size:24px;
            line-height:26.4px;
            margin-bottom:8px;
        }
        .section-rules .grid-rules .rule-item .image-rule-icon{
            width:60px;
            height:60px;
            margin-bottom:16px;
        }
       
        .section-rules .grid-rules .rule-item p{
            font-size:14px;
            line-height:18px;
            margin-bottom:8px;
        }
        .section-rules .grid-rules .rule-item .inner-rule{
            padding-left:16px;
        }
        .section-rules .grid-rules .rule-item img{
            width:100%;
            height:100%;
            object-fit:cover;
        }
        .section-timeline-schedule .timeline-image-mobile{
            display: block;
        }
        .section-research-more .container .block button {
            padding: 10px 30px;
            font-size: 14px;
            line-height: 20px;
        }
        .section-timeline-schedule .timeline-image-mobile{
            width:42.8vw;
        }
        .banner-designathon24 .block-sticky{
            position:absolute;
        }
        .section-old-candidate .grid{
            overflow-x:scroll;
            align-items: stretch;
        }
        .section-old-candidate .grid .column{
            flex-shrink:0;
            flex-basis:40%;
            display:flex;
            gap:16px;
        }
        .section-old-candidate .grid .column:nth-child(2){
            margin-left: 34%;
        }
        .section-old-candidate .grid .column:nth-child(3){
            margin-left: 72%;
        }
        .section-old-candidate .grid .column .post-item{
            flex-shrink:0;
            flex-basis:90%;
            margin-bottom:0;
        }
        .section-old-candidate .grid::-webkit-scrollbar{
            display:none;
        }
        .section-old-candidate .container{
            margin-right:0;
            max-width:100%;
        }
        .section-old-candidate .grid .column:first-child{
            margin-left:40px;
        }
        .section-common-question .contact-now .inner-contact button{
            white-space:nowrap;
        }
        .section-common-question .contact-now .inner-contact .item{
            padding-right:5%;
        }
        .section-video ul{
            flex-direction: column;
            padding: 0;
            width: fit-content;
            margin: 0 auto;
            margin-top: 40px;
        }
    }
    @media(max-width:768px){
        .banner-designathon24 .dragon-right{
            width: 42.27vw;
            top:1%;
            bottom:auto;
            height: 34.6vw;
        }
        .banner-designathon24 .dragon-right .body-dragon{
            width: 31.3vw;
            top: 0%;
            
        }
        .banner-designathon24 .dragon-left{
            width: 51vw;
            height: 42.5vw;
            
        }
        .banner-designathon24 .dragon-left .body-dragon{
            left: -23%;
            
        }
        .banner-designathon24 .dragon-left .leg-dragon{
            width: 40vw;
            height: 18.27vw;
            left: -35%;
            top: 35%;
        }
        .banner-designathon24 .container .block-content-0 .image-sponsor img{
            width: 28.1vw;
        }
        .banner-designathon24 .container .block-content-0 h2 {
            font-size: 60px;
            line-height: 80px;
        }
        .banner-designathon24 .wave .human.human-1{
            background-position: 28% -4%;
            background-size: 200%;
        }
        .banner-designathon24 .wave .human.human-2{
            background-size: 200%;
            background-position: 45% -7%;
        }
        .banner-designathon24 .wave .human.human-3{
            background-position: 43% -11%;
            background-size: 200%;
        }
        .banner-designathon24 .wave .wa{
            background-size:150%;
        }
        .banner-designathon24 .wave{
            top:33%;
        }
        .banner-designathon24 .wave .human.human-4{
            display:none;
        }
        .banner-designathon24 .container .block-content-0{
            padding-top: 23.68vw;
        }
        .banner-designathon24 .container .block-content-0 .image-talent {
            width: 91.3vw;
        }
               /* section cant miss */
               .section-cant-miss{
            padding-top:90px;
            position:relative;
            z-index:1;
        }
        .section-cant-miss .block-content{
            display:block;
        }
        .section-cant-miss .block-content .block-item h2{
            font-size:32px;
            line-height:36px;
            margin-bottom:16px;
        }
        .section-cant-miss .block-content .block-item p{
            font-size:14px;
            line-height:18px;
        }
        .section-cant-miss .block-content .block-item{
            width:100%;
        }
        .section-cant-miss .block-content .block-item p{
            width:100%;
        }
        .section-slide-card{
            position:relative;
            z-index:9;
            padding:40px 0 60px;
        }
        .section-slide-card .list-card .card-item{
            flex-basis:65.55vw;
        }
        .section-slide-card .list-card .card-item:hover{
            flex-basis:65.55vw;
        }
        .section-slide-card .list-card .card-item .inner-card-item h3{
            font-size:24px;
            line-height:26.4px;
            transform:translateY(0);
            color:#E0349E;
        }
        .section-slide-card .list-card .card-item .inner-card-item p{
            font-size:14px;
            line-height:18px;
            font-weight:500;
            transform:translateY(0);
            opacity:1;
        }
        .section-slide-card .list-card .card-item .inner-card-item{
            padding:16px;
        }
        /* section countdown */
        .section-countdown{
            padding:60px 0 200px;
        }
        .section-countdown h3{
            font-size:20px;
            line-height:22px;
        }
        .section-countdown h2{
            font-size:32px;
            line-height:36px;
            margin-bottom:16px;
        }
        .section-countdown p{
            width:100%;
            font-size:14px;
            line-height:18px;
        }
        .section-countdown .block-countdown .time-item{
            width:67px;
            height:50px;
        }
        .section-countdown .block-countdown .time-item h4{
            font-size:32px;
            line-height:36px;
        }
        .section-countdown .block-title h4{
            font-size:18px;
            line-height:22px;
            width:67px;
        }
        .section-timeline-schedule{
            padding:180px 0 68px;
        }
        .section-timeline-schedule:after{
            top:-19vw;
        }
        .section-timeline-schedule .block-timeline{
            display:flex;
        }
        .section-timeline-schedule .block-timeline .timeline-item:first-child h2{
            font-size:32px;
            line-height:36px;
            text-align:center;
            margin-bottom:40px;
        }
        .section-timeline-schedule .block-timeline .timeline-item .timeline-inner-item .head h3{
            font-size:80px;
            line-height:88px;
        }
        .section-timeline-schedule .block-timeline .timeline-item .timeline-inner-item .head h3 span{
            font-family: "Manrope", sans-serif;
            font-size:18px;
            line-height:20px;
            font-weight:600;
        }
        .section-timeline-schedule .block-timeline .timeline-item .timeline-inner-item ul li{
            font-size:14px;
            line-height:18px;
            margin-bottom:16px;
            gap:8px;
        }
        .section-timeline-schedule .block-timeline .timeline-item .timeline-inner-item ul li:last-child{
            margin-bottom:0;
        }
        .section-timeline-schedule .block-timeline .timeline-item .timeline-inner-item{
            padding:24px 16px;
        }
        .section-timeline-schedule .block-timeline .timeline-item{
            margin-bottom:16px;
            width:100%;
        }
        .section-timeline-schedule .block-timeline .timeline-item:first-child .timeline-image{
            display:none;
        }
        .section-timeline-schedule .timeline-image-mobile{
            display:block;
            width:58vw;
            height:auto;
        }
        .section-rules{
            padding:60px 0 80px;
        }
        .section-rules h2{
            font-size:32px;
            line-height:36px;
            margin-bottom:40px;
        }
        .section-rules .grid-rules{
            display:flex;
        }
        .section-rules .grid-rules .rule-item{
            width:50%;
            margin-bottom:32px;
            margin-top:0 !important;
        }
        .section-rules .grid-rules .rule-item .image-rule-icon{
            width:60px;
            height:60px;
            margin-bottom:16px;
        }
        .section-rules .grid-rules .rule-item h3{
            font-size:24px;
            line-height:26.4px;
            margin-bottom:8px;
            width:100%;
        }
        .section-rules .grid-rules .rule-item p{
            font-size:14px;
            line-height:18px;
            margin-bottom:8px;
        }
        .section-rules .grid-rules .rule-item .inner-rule{
            padding-left:16px;
        }
        .section-rules .grid-rules .rule-item img{
            width:100%;
            height:100%;
            object-fit:cover;
        }
        
        
        .section-rules .grid-rules-mobile .rule-item{
            margin-bottom:32px;
        }
        .section-research-more{
            padding:80px 0 0;
        }
        .section-research-more .container .block{
            width:100%;
            height:58.125vh;
            background-image:url("<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/layer-full-mobile.svg");
            background-size:cover;
            background-repeat:no-repeat;
            background-position:0 bottom;
            background-color:transparent !important;
            padding:100px 12px 0;
        }
      
        .section-research-more .container .block h5{
            font-size:18px;
            line-height:20px;
        }
        .section-research-more .container .block h2{
            font-size:32px;
            line-height:36px;
        }
        .section-research-more .container .block:before{
            width: 58.05vw;
            height: 53.4vw;
            background-size: cover;
            bottom: 1%;
            right: -10%;
        }
        .section-research-more .container .block button{
            font-size:16px;
            line-height:24px;
            height:44px;
        }
        .section-partner h2{
            font-size:32px;
            line-height:36px;
            margin-bottom:8px
        }
        .section-partner p{
            font-size:14px;
            line-height:18px;
            width:100%;
            margin-bottom:40px;
        }
       
        .section-partner .grid-partner{
            display:block !important;
        }
        .section-partner .grid-partner .grid-item{
            width:100% !important;
        }
        .section-partner .grid-partner .grid-item:last-child h3{
            text-align:center;
        }
        .section-partner .grid-partner .grid-item{
            width:100%;
            margin-bottom:32px;
        }
        .section-partner .image-desktop{
            display:none;
        }
        .section-partner .grid-partner .image-mobile{
            display:block;
        }
        .section-partner .grid-partner .grid-item .list-image{
            row-gap:0;
        }
        .section-partner .grid-partner .grid-item:first-child .image-partner img{
            width: 72%;
        }
        .section-partner .grid-partner .grid-item:first-child:before{
            content:none;
        }
        .section-partner .grid-partner .grid-item h3{
            font-size:20px;
            line-height:22px;
            margin-bottom:16px;
        }
        
        .section-partner .image-mobile{
            margin:0 auto;
        }
        
        .section-partner{
            padding:80px 0 85px;
        }
        .section-video{
            padding:80px 0;
        }
        .section-video h2{
            font-size:32px;
            line-height:36px;
        }
        .section-video .wrapper-video iframe{
            width:100%;
            height:51.11vw;
        }
        .section-video ul{
            flex-direction:column;
            padding:0;
            width:fit-content;
            margin: 0 auto;
            margin-top:40px;
        }
        .section-video ul li span{
            font-size:28px;
            line-height:32px;
        }
        .section-old-candidate{
            overflow:hidden;
            padding:60px 0;
        }
        .section-old-candidate .container {
            padding: 0 !important;
            margin: 0 !important;
        }
        .section-old-candidate .grid .column:first-child{
            margin-left:40px;
        }
        .section-old-candidate .container{
            padding:0 !important;
            margin:0 !important;
            margin-left:36px;
        }
        .section-old-candidate h4{
            font-size:20px;
            line-height:22px;
            margin-bottom:4px;
        }
        .section-old-candidate h2{
            font-size:32px;
            line-height:36px;
            width:60%;
            margin:0 auto;
            margin-bottom:40px;
        }
        .section-old-candidate .grid .column{
            flex-basis: 60%;
        }
        .section-old-candidate .grid .column:nth-child(2) {
            margin-left: 51%;
        }
        .section-old-candidate .grid .column:nth-child(3) {
             margin-left: 107%;
        }
        .section-common-question{
            padding:60px 0 40px;
        }
        .section-common-question h2{
            font-size:32px;
            line-height:36px;
        }
        .section-common-question .accordion .grid-question{
            display:block;
        }
        .section-common-question .accordion .grid-question .block-item{
            width:100%;
        }
        .section-common-question .accordion .accordion-item .accordion-button{
            font-size:16px;
            line-height:22px;
            padding-bottom:0;
        }
        .section-common-question .accordion .accordion-item .accordion-body{
            font-size:14px;
            line-height:18px;
            margin-top:8px;
        }
        .section-common-question .accordion .accordion-item{
            padding:16px 0;
        }
        .section-common-question .contact-now{
            margin:40px 0 60px;
        }
        .section-common-question .contact-now .inner-contact h4{
            font-size:18px;
            line-height:22px;
        }
        .section-common-question .contact-now .inner-contact p{
            font-size:14px;
            line-height:18px;
        }
        .section-common-question .contact-now .inner-contact{
            flex-direction:column;
            gap:32px;
            padding:24px 16px;
        }
        .section-common-question .contact-now .inner-contact .item{
            padding-right:0;
        }
        .section-common-question .contact-now .inner-contact h4{
            text-align:center;
        }
        .section-common-question .contact-now .inner-contact p{
            text-align:center;
            width:100%;
            margin:0 auto;
        }
        .section-common-question .contact-now .inner-contact button{
            margin:0 auto;
            width:100%;
            font-size:16px;
            line-height:24px;
            height:44px;
            padding:10px 40px;
        }
        .section-register{
            padding:60px 0 193px;
        }
        .section-register h2{
            font-size:32px;
            line-height:36px;
        }
        .section-register h3{
            font-size:20px;
            line-height:22px;
        }
        .section-register p{
            font-size:14px;
            line-height:18px;
            width:100%;
        }
        footer.footer-designathon{
        padding:100px 0 28px

        }
       
        footer.footer-designathon h5{
            font-size:12px;
            line-height:16.39px;
        }
        footer.footer-designathon h2{
            font-size:28px;
            line-height:38.25px;
            margin-bottom:24px;
        }
        footer.footer-designathon .block-social{
            flex-direction:column;
            padding-bottom:24px;
        }
        footer.footer-designathon .block-policy{
            justify-content:center;
        }
        footer.footer-designathon .block-item:first-child{
            width:100%;
        }
        footer.footer-designathon .block-item ul{
            width:100%;
            justify-content:space-between;
        }
        footer.footer-designathon .block-item{
            width:100%;
        }
        footer.footer-designathon .block-item p{
            font-size:14px;
            line-height:19.12px;
            padding-bottom:24px;
        }
        footer.footer-designathon .block-item ul li{
            width:100%;
        }
        footer.footer-designathon .block-item ul li img{
            width:40px;
            height:40px;
        }
        footer.footer-designathon .block-item ul li h6{
            margin-top:8px;
        }
        footer.footer-designathon .block-item ul{
            border-top:1px solid #7F56D9;
            padding-top:24px;
        }
        footer.footer-designathon .block-item ul li h6 a{
            font-size:14px;
            line-height:19.12px;
        }
    }
    /* mobile */
  
    @media(max-width:520px){
   
        .banner-designathon24 .dragon-right {
            width:55.27vw;
            bottom:13%;
            top:auto;
            height: 51.6vw;
        }
        .banner-designathon24 .dragon-right .head-dragon{
            top: -1%;

        }
        .banner-designathon24{
            height:200vh;
            overflow:hidden;
        }
        .banner-designathon24 .block-sticky{
            position:absolute;
            overflow:visible;
        }
        .banner-designathon24 .dragon-right .body-dragon{
            width:37.3vw;
            top: 20%;
        }
        .banner-designathon24 .dragon-left{
            width:58vw;
            height:42.5vw;
        }
        .banner-designathon24 .dragon-left .body-dragon{
            left:-37%;
        }
        .banner-designathon24 .dragon-left .leg-dragon{
            width: 29vw;
            height: 20.27vw;
            left: -19%;
            top: 42%;
        }
        .banner-designathon24 .container .block-content-0 .image-sponsor img{
            width:41.1vw;
        }
        .banner-designathon24 .container .block-content-0{
            padding-top:21.67%;
        }
        .banner-designathon24 .container .block-content-0 h2{
            font-size:36px;
            line-height:40px;
        }
        .banner-designathon24 .change-lang span{
            font-size:12px !important;
            line-height:18px !important;
            padding:2px 8px !important;
        }
        .banner-designathon24 .change-lang{
            top:18px;
        }
        .banner-designathon24 .container .block-content-0 .image-talent img{
            width:91.38vw;
            height:auto;
        }
        .banner-designathon24 .container .block-content-1{
            padding-top:33.72vw;
        }
        .banner-designathon24 .wave .wa{
            bottom:-80% !important;
            background-size:200%;
        }
        .banner-designathon24 .wave{
            z-index:1;
            top:0;
        }
        .banner-designathon24 .wave .human.human-1{
            background-size:270%;
            width:100%;
            height:100%;
            bottom: -80% !important;
            left: 0;
            background-position: 23% -4%;
        }
        .banner-designathon24 .wave .human.human-2{
            background-size:240%;
            width:100%;
            height:100%;
            bottom: -80% !important;
            left: 0;
            background-position: 40% -5%;
        }
        .banner-designathon24 .wave .human.human-3{
            background-size:240%;
            width:100%;
            height:100%;
            bottom: -80% !important;
            left: 0;
            background-position: 44% -6%;
        }
        .banner-designathon24 .wave .human.human-4{
            display:none;
        }
        .banner-designathon24 .container .block-content-0 .image-sponsor{
            margin-bottom:28px;
        }
        .banner-designathon24 h1{
            font-size:32px;
            line-height:36px;
        }
        .banner-designathon24 .container .description{
            font-size:14px;
            line-height:18px;
            width:100%;
        }
        .banner-designathon24 .container .block-detail{
            display:block;
        }
        .banner-designathon24 .container .block-detail .block-item{
            margin-bottom:16px;
        }
        .banner-designathon24 .container .block-detail .block-item h3{
            font-size:18px;
            line-height:20px;
            margin-bottom:4px;
        }
        .banner-designathon24 .container .block-detail .block-item h2{
            font-size:28px;
            line-height:32px;
        }
        .button-designathon{
            padding:10px 38.5px;
            font-size:16px;
            line-height:24px;
        }
        .button-designathon-active{
            padding:10px 38.5px;
            font-size:16px;
            line-height:24px;
        }
        .section-timeline-schedule .block-timeline{
            display:block;
        }
        .section-timeline-schedule{
            padding: 120px 0 68px;
        }
        .section-rules .grid-rules{
            display:block;
        }
        .section-rules .grid-rules .rule-item{
            width:100%;
        }
        footer.footer-designathon:before{
            transform:translateY(-40vw);
            background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/footer-illust-mobile.svg');
        }
        .section-timeline-schedule:after{
            background-image:url("<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/layer-hour-mobile.svg");
            top:-38vw;
        }
        .section-old-candidate .grid{
            overflow-x:scroll;
        }
        .section-old-candidate .grid::-webkit-scrollbar{
            display:none;
        }
        .section-old-candidate .grid .column{
            flex-shrink:0;
            flex-basis:90%;
            display:flex;
            gap:16px;
        }
        .section-old-candidate .grid .column:nth-child(2){
            margin-left:76%;
        }
        .section-old-candidate .grid .column:nth-child(3){
            margin-left:163%;
        }
        .section-old-candidate .grid .column .post-item{
            flex-shrink:0;
            flex-basis:90%;
        }
        .section-old-candidate .grid .column .post-item .post-inner-item{
            padding:24px 16px;
        }
        .section-old-candidate .grid .column .post-item .post-inner-item .post-header .block-info .info h3{
            font-size:16px;
            line-height:24px;
            white-space:nowrap;
        }
        .section-old-candidate .grid .column .post-item .post-inner-item .post-header .block-info .info span{
            font-size:12px;
            line-height:16.39px;
        }
        .section-old-candidate .grid .column .post-item .post-inner-item .post-body p{
            font-size:14px;
            line-height:18px;
        }
        .section-old-candidate .grid .column .post-item .post-inner-item .post-header .block-info .avatar img{
            width:40px;
            height:40px;
        }
    }
    @media(max-width:390px){
        .banner-designathon24{
            height:218vh;
        }
    }
    @media(max-width:375px){
        .banner-designathon24 .dragon-right{
            bottom:13%;
        }
    }
    @media(max-width:374px){
        .banner-designathon24{
            height:275vh;
        }
    }
    @media(max-width:320px){
        .banner-designathon24 .dragon-right{
            display:none;
        }
        .banner-designathon24 .dragon-left{
        }
    }
</style>
<!-- Apply right away! -->

<main class="main">
    <!-- Section banner -->
  <section class="banner-designathon24 position-relative">
    <div class="bg"></div>
    <div class="change-lang">
        <a href="https://lollypop.design/designathonvn-2024"><span>VIE</span></a>
        <a href="https://lollypop.design/designathonvn-2024-eng"><span class="active">EN</span></a>
    </div>
    <div class="block-sticky">
        <div class="wave">
            <div class="wa wave-1"></div>
            <div class="wa wave-2"></div>
            <div class="human human-1"></div>
            <div class="human human-2"></div>
            <div class="wa wave-3"></div>
            <div class="wa wave-4"></div>
            <div class="wa wave-5"></div>
            <div class="human human-3"></div>
            <div class="human human-4"></div>
        </div>
        <!-- <div class="humans">
        
            <div class="human human-3"></div>
            <div class="human human-4"></div>
         
        </div> -->
        <div class="dragon-right">
            <img class="head-dragon" src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/head-dragon.svg" alt="head"/>
            <img class="body-dragon" src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/body-dragon.svg" alt="body"/>
        </div>
        <div class="dragon-left">
            <img class="body-dragon" src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/body-left.svg" alt="head"/>
            <img class="leg-dragon" src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/leg.svg" alt="body"/>
        </div>
    </div>
    <div class="container">
        <div class="block-content block-content-0">
            <div class="image-sponsor">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/sponsor.svg" alt=""/>
            </div>
            <h2 class="font-dfvn-float white-color text-limit heading-1">break limits</h2>
            <div class="image-talent">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/text-talent-en.svg" alt=""/>
            </div>
        </div>
        <div class="block-content block-content-1">
        <div class="block position-relative"> 
            <h1 class="text-center white-color font-dfvn-float heading-2">Lollypop Designathon Vietnam</h1>
            <h1 class="text-center pink-color font-dfvn-float heading-2">Is Officially Back!!</h1>
        </div>
        <p class="text-center white-color description">
        After the resounding success of Designathon 2023, Designathon 2024 is back, bringing even greater values. This is the golden opportunity for talented designers to 
        push their boundaries and pave the way for future success.
        </p>
        <div class="block-detail">
            <div class="block-item">
                <h3 class="text-center white-color subtitle-1">Participants</h3>
                <h2 class="text-center white-color font-dfvn-float heading-3">100+ designers</h2>
            </div>
            <div class="block-item">
                <h3 class="text-center white-color subtitle-1">Working Duration</h3>
                <h2 class="text-center white-color font-dfvn-float heading-3">24 hours</h2>
            </div>
            <div class="block-item">
                <h3 class="text-center white-color subtitle-1">Dates</h3>
                <h2 class="text-center white-color font-dfvn-float heading-3">21-22/09/2024</h2>
            </div>
        </div>
        <a class="pink-color mx-auto" href="https://forms.gle/DreCF31xKDsyzgTV8" target="_blank"><button class="button-designathon pink-color">Register Now</button></a>
        </div>

    </div>
  </section>
  <!-- Section Why u cant miss -->
   <section class="section-cant-miss">
    <div class="container">
       <div class="block-content">
        <div class="block-item">
            <h2 class="blue-color font-dfvn-float heading-2">
            A true playground for <br/> cho <span class="pink-color">UI/UX designers</span>
            </h2>
        </div>
        <div class="block-item">
            <p>Lollypop Designathon is one of Vietnam's largest competitions for nurturing UI/UX design solutions. With over 24 hours of intense yet exciting co-design experience, participants will learn valuable lessons by utilizing their skills in research, design, and critical thinking under the mentoring of industry experts.</p>
        </div>
       </div> 
    </div>
   </section>
   <section class="section-slide-card">
        <div class="list-card">
            <div class="card-item noHover">
                <div class="inner-card-item">
                    <h3 class="font-dfvn-float blue-color title-1">Talent <br/>Gathering</h3>
                    <p class="blue-color">Connect and cross-learn with 100+ designers with various strengths in User Research, UI Design and UX Design.</p>
                    <div class="wrapper-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/slide-card-1.jpg" alt=""/>
                    </div>
                </div>
            </div>
            <div class="card-item noHover">
                <div class="inner-card-item">
                    <h3 class="font-dfvn-float blue-color title-1">24-Hour <br/>Challenge</h3>
                    <p class="blue-color">Experience 24 hours of an iterative loop of eat - sleep - design, and push your boundaries to create effective design solutions.</p>

                    <div class="wrapper-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/slide-card-2.jpg" alt=""/>
                    </div>
                </div>
            </div>
            <div class="card-item noHover">
                <div class="inner-card-item">
                    <h3 class="font-dfvn-float blue-color title-1">Enthusiast  <br/>Mentorship</h3>
                    <p class="blue-color">Be ready to gain valued knowledge and design insights under the mentorship from Lollypop.</p>

                    <div class="wrapper-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/slide-card-3.jpg" alt=""/>
                    </div>
                </div>
            </div>
            <div class="card-item noHover">
                <div class="inner-card-item">
                    <h3 class="font-dfvn-float blue-color title-1">UI/UX Design <br/>     
                    Framework</h3>
                    <p class="blue-color">Attend exclusive workshop and explore the “UI/UX Design Framework” that has helped Lollypop succeed in hundreds of projects. </p>

                    <div class="wrapper-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/slide-card-4.jpg" alt=""/>
                    </div>
                </div>
            </div>
            <div class="card-item noHover">
                <div class="inner-card-item">
                    <h3 class="font-dfvn-float blue-color title-1">Internship <br/>Opportunities</h3>
                    <p class="blue-color">Get the chance to be a part of Lollypop Design Studio - the top UI/UX Design Studio in APAC region to learn and sharpen your design skills.</p>

                    <div class="wrapper-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/slide-card-5.jpg" alt=""/>
                    </div>
                </div>
            </div>
        </div>
   </section>
   <!-- Section countdown -->
   <section class="section-countdown">
    <div class="container">
        <h3 class="font-dfvn-float blue-color title-2">“Dragons & Snakes ascend to the clouds”</h3>
        <h2 class="font-dfvn-float pink-color heading-2">Challenges abound, all around!</h2>
        <p>Seize the opportunity to participate in Designathon 2024 to join 100 talented designers in conquering challenges, breaking limits and unlocking potential!</p>
        <div class="block-countdown">
            <div class="time-item">
                <span class="circle"></span>
                <h4 id="date" class="font-dfvn-float heading-2">00</h4>
                <span class="circle right"></span>
            </div>
            <div class="time-item">
                <span class="circle"></span>
                <h4 id="hour" class="font-dfvn-float heading-2">00</h4>
                <span class="circle right"></span>
            </div>
            <div class="time-item">
                <span class="circle"></span>
                <h4 id="minute" class="font-dfvn-float heading-2">00</h4>
                <span class="circle right"></span>
            </div>
            <div class="time-item">
                <span class="circle"></span>
                <h4 id="second" class="font-dfvn-float heading-2">00</h4>
                <span class="circle right"></span>
            </div>
            
        </div>
        <div class="block-title">
            <h4 class="blue-color subtitle-1">Days</h4>
            <h4 class="blue-color subtitle-1">Hours</h4>
            <h4 class="blue-color subtitle-1">Minutes</h4>
            <h4 class="blue-color subtitle-1">Seconds</h4>
        </div>
        <div class="button-designathon-register text-center">
        <a class="pink-color mx-auto" href="https://forms.gle/DreCF31xKDsyzgTV8" target="_blank"><button class="button-designathon-active white-color">Register Now</button></a>
        </div>
    </div>
   </section>
   <div class="wrapper-timelime-bg">
<!-- Section Timeline and Schedule -->
<section class="section-timeline-schedule">
       <div class="container">
            <div class="block-timeline">
                <div class="timeline-item position-relative first">
                    <div class="timeline-inner-item">
                        <h2 class="font-dfvn-float pink-color heading-2">
                        Timeline<br/>
                        <span class="white-color">& Activities</span>
                        </h2>
                        <img class="timeline-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/timeline-image.svg" alt=""/>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-inner-item">
                        <div class="head">
                            <span class="day white-color">Saturday</span>
                            <h3 class="font-dfvn-float white-color">21 <span class="white-color">09/2024</span></h3>
                        </div>
                        <ul class="position-relative">
                            <li><span class="pink-color">08:00</span><span class="white-color">Check-in</span></li>
                            <li><span class="pink-color">09:30</span><span class="white-color">Announce Problem Statement</span></li>
                            <li><span class="pink-color">10:00</span><span class="white-color">Clock starts!</span></li>
                            <li><span class="pink-color">11:30</span><span class="white-color">Break - Lunch time</span></li>
                            <li><span class="pink-color">14:00</span><span class="white-color">Mentoring Round 1</span></li>
                            <li><span class="pink-color">18:00</span><span class="white-color">Break - Dinner time</span></li>
                            <li><span class="pink-color">19:00</span><span class="white-color">Mentoring Round 2</span></li>
                        </ul>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-inner-item">
                        <div class="head">
                            <span class="day white-color">Sunday</span>
                            <h3 class="font-dfvn-float white-color">22 <span class="white-color">09/2024</span></h3>
                        </div>
                        <ul class="position-relative">
                            <li><span class="pink-color">06:30</span><span class="white-color">Breakfast</span></li>
                            <li><span class="pink-color">09:00</span><span class="white-color">Solutions Submit</span></li>
                            <li><span class="pink-color">09:30</span><span class="white-color">Pitching</span></li>
                            <li><span class="pink-color">12:30</span><span class="white-color">Announce Final Results</span></li>
                        </ul>
                    </div>
                </div>
                
            </div>
       </div>
    <img class="timeline-image-mobile" src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/timeline-image.svg" alt=""/>
    </section>
<!-- Section Rules -->
 <section class="section-rules">
    <div class="container position-relative">
        <h2 class="font-dfvn-float pink-color heading-2">Event <span class="white-color">Details</span></h2>
        <div class="grid-rules">
            <div class="rule-item">
                <div class="inner-rule">
                    <div class="image-rule-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/rule-1.svg" alt="rule-1"/>
                    </div>
                    <h3 class="font-dfvn-float pink-color title-1">Event Format</h3>
                    <p class="white-color">Offline, spanning 2 days from September 21-22, 2024, in Ho Chi Minh City, Vietnam.</span> </p>
                    <p class="white-color">Each team has 24 hours to ideate, research, and complete solutions.</p>
                </div>
            </div>
            <div class="rule-item">
                <div class="inner-rule">
                    <div class="image-rule-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/rule-2.svg" alt="rule-1"/>
                    </div>
                    <h3 class="font-dfvn-float pink-color title-1">Registration Timeline</h3>
                    <p class="white-color">Registration Period: <span class="yellow-color">10/08/2024 - 26/08/2024.</span></p>
                    <p class="white-color">Due to limited slots, early and suitable applicants will be prioritized. Results will be sent to each participant via email.</p>
                </div>
            </div>
            <div class="rule-item">
                <div class="inner-rule">
                    <div class="image-rule-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/rule-3.svg" alt="rule-1"/>
                    </div>
                    <h3 class="font-dfvn-float pink-color title-1">Participant Qualifications</h3>
                    <p class="white-color">Students who currently studying design major at universities, colleges, academies, or centers across Vietnam, or those with less than two years of professional design experience.</p>
                </div>
            </div>
            <div class="rule-item">
                <div class="inner-rule">
                    <div class="image-rule-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/rule-4.svg" alt="rule-1"/>
                    </div>
                    <h3 class="font-dfvn-float pink-color title-1">Awards</h3>
                    <p class="white-color">Attractive rewards including 30 Million VND in cash, 1-on-1 mentoring with experts, exclusive gift sets, and certificates from Lollypop Design Studio.</p>
                </div>
            </div>
        </div>
        
    </div>
 </section>
   </div>

 <!-- Section Research more -->
  <section class="section-research-more">
    <div class="container">
        <div class="block">
              
            <h5 class="white-color text-center subtitle-1">Curious to know more?</h5>
            <h2 class="font-dfvn-float pink-color text-center">Rules of <span class="white-color">Designathon 2024</span></h2>
            <div class="d-flex justify-content-center">
                <a href="<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/Quy-Dinh-Designathon-24.pdf"  download><button class="button-designathon pink-color">Download PDF</button></a>
            </div>
        </div>
    </div>
  </section>
  <!-- Section Partner -->
    <section class="section-partner">
        <div class="container">
            <h2 class="font-dfvn-float pink-color heading-2">Sponsors <span class="blue-color">& Partners</span></h2>
            <p>Prestigious Sponsors and Partners are crucial to the grand success of Designathon 2024. Their unwavering support helps elevate the competition to new heights, making it a truly valuable experience for all participants.</p>
            <div class="grid-partner d-flex">
                <div class="grid-item">
                    <h3 class="blue-color title-2">In-kind sponsor</h3>
                    <div class="image-partner">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/coolmate.svg" alt=""/>
                    </div>
                </div>
                <div class="grid-item">
                    <h3 class="blue-color title-2">Our Media Partners</h3>
                    <div class="list-image">
                        <div class="wrapper-image">
                            <img class="image-desktop" src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/logo-partner-1.svg" alt=""/>
                        </div>
                        <div class="wrapper-image">
                            <img class="image-desktop" src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/logo-partner-2.svg" alt=""/>
                        </div>
                        <div class="wrapper-image">
                            <img class="image-desktop" src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/logo-partner-3.svg" alt=""/>
                        </div>
                        <div class="wrapper-image">
                            <img class="image-desktop" src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/logo-partner-4.svg" alt=""/>
                        </div>
                        <div class="wrapper-image">
                            <img class="image-desktop" src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/logo-partner-5.svg" alt=""/>
                        </div>
                        <div class="wrapper-image">
                            <img class="image-desktop" src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/logo-partner-6.svg" alt=""/>
                        </div>
                        <div class="wrapper-image">
                            <img class="image-mobile" src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/logo-partner-1-mobile.svg" alt=""/>
                        </div>
                        <div class="wrapper-image">
                            <img class="image-mobile" src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/logo-partner-2-mobile.png" alt=""/>
                        </div>
                        <div class="wrapper-image">
                            <img class="image-mobile" src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/logo-partner-3-mobile.svg" alt=""/>
                        </div>
                        <div class="wrapper-image">
                            <img class="image-mobile" src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/logo-partner-4-mobile.svg" alt=""/>
                        </div>
                        <div class="wrapper-image">
                            <img class="image-mobile" src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/logo-partner-5-mobile.svg" alt=""/>
                        </div>
                        <div class="wrapper-image">
                            <img class="image-mobile" src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/logo-partner-6-mobile.svg" alt=""/>
                        </div>
                    </div>
                </div>
            </div>
         
        </div>
    </section>
     <!-- Section Video -->
     <section class="section-video">
        <div class="container">
            <h2 class="font-dfvn-float pink-color text-center heading-2"><span class="white-color">Feel the heat of</span>
            <br/><span class="pink-color">Designathon Vietnam 2023</span></h2>
            <div class="wrapper-video">

            <iframe width="848" height="477" id="video-designathon" src="https://www.youtube.com/embed/F5qvBLJbx6M?si=8PPSwZzGVAiJNcOt&amp;controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <ul>
                <li class="white-color subtitle-1"><span class="pink-color font-dfvn-float heading-3">50</span> talented designers</li>
                <li class="white-color subtitle-1"><span class="pink-color font-dfvn-float heading-3">8</span> hours of crafting solutions</li>
                <li class="white-color subtitle-1"> <span class="pink-color font-dfvn-float heading-3">A</span> unique experiences</li>
            </ul>
        </div>
    </section>
    <!-- Section Old Candidate -->
     <section class="section-old-candidate">
        <div class="container">
            <h4 class="font-dfvn-float blue-color title-2">Hear from our ex-contestants of</h4>
            <h2 class="font-dfvn-float pink-color heading-2">Designathon Vietnam?</h2>
            <div class="d-flex grid">
                <div class="column">
                    <div class="post-item">
                    <a href="https://www.linkedin.com/posts/vananhkhoa_designathonvietnam2023-uiux-lollypopvietnam-activity-7112993639370289153-uJbG?utm_source=share&utm_medium=member_desktop" target="_blank">
                        <div class="post-inner-item">
                            <div class="post-header">
                                <div class="block-info">
                                    <div class="avatar">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/avatar-1.svg" alt=""/>
                                    </div>
                                    <div class="info">
                                        <h3>Văn Anh Khoa</h3>
                                        <span>UX/UI Designer</span> 
                                    </div>
                                </div>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/linkedin.svg" alt=""/>
                            </div>
                            <div class="post-body">
                                <p>I joined the Designathon Vietnam 2023 competition, alongside numerous other talented individuals, and embarked on a truly memorable journey. It was a transformative experience where I acquired valuable knowledge, conquered challenges, and fostered innovative... <span class="pink-color">more</span></p>
                            </div>
                            <div class="wrapper-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/candidate-1.png" alt=""/>
                            </div>
                        </div>
                    </a>
                    </div>
                    <div class="post-item">
                    <a href="https://www.linkedin.com/posts/long-giang-5183ab216_designathon2023-lollypopstudio-uiuxdesign-activity-7112089405447712770-x9LO?utm_source=share&utm_medium=member_desktop" target="_blank">
                        <div class="post-inner-item">
                            <div class="post-header">
                                <div class="block-info">
                                    <div class="avatar">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/avatar-1.svg" alt=""/>
                                    </div>
                                    <div class="info">
                                        <h3>Long Giang</h3>
                                        <span>Product Designer</span> 
                                    </div>
                                </div>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/linkedin.svg" alt=""/>
                            </div>
                            <div class="post-body">
                                <p>Thrilled to be part of the exhilarating Designathon 2023! 🎉
                                It's an incredible opportunity for learning and a personal challenge for me. Through this competition, I'm excited to absorb knowledge from fellow teammates, buddies, mentors, ... <span class="pink-color">more</span></p>
                            </div>
                            <div class="wrapper-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/candidate-2.png" alt=""/>
                            </div>
                        </div>
                    </a>
                    </div>
                </div>
                <div class="column">
                    <div class="post-item">
                        <a href="https://www.linkedin.com/posts/dieu-thi-nguyen-ngoc-bion-14b82821a_designathon2023-lollypopstudio-uiuxdesign-activity-7112775920960106496-0xTe?utm_source=share&utm_medium=member_desktop" target="_blank">
                            <div class="post-inner-item">
                                <div class="post-header">
                                    <div class="block-info">
                                        <div class="avatar">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/avatar-1.svg" alt=""/>
                                        </div>
                                        <div class="info">
                                            <h3>Dieu Thi Nguyen Ngoc</h3>
                                            <span>UI Designer / Visual Designer</span> 
                                        </div>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/linkedin.svg" alt=""/>
                                </div>
                                <div class="post-body">
                                    <p>This’s my first experience with a design marathon competition, and it has truly provided me with valuable lessons and unforgettable memories. I’ve learned a lot and had the opportunity to connect with my team members. Additionally, we had a lovely buddy who guided and supported us enthusiastically~ yah 💁♀︎ I find this experience incredibly valuable for my journey to become a Product Designer in the near future. I would like to express my gratitude to Lollypop Design Studio Vietnam for organizing this competition. They created a great contest, with both passion and love💕.
                                <br/><span class="pink-color">#Designathon2023 #Lollypopstudio</span> <br/> <span class="pink-color">#UIUXDesign <span></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-item">
                        <a href="https://www.linkedin.com/posts/khanh-nguyen-65b036274_designathonvietnam2023-uiux-lollypopvietnam-activity-7112677995110096896-agGM?utm_source=share&utm_medium=member_desktop" target="_blank">
                            <div class="post-inner-item">
                                <div class="post-header">
                                    <div class="block-info">
                                        <div class="avatar">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/avatar-1.svg" alt=""/>
                                        </div>
                                        <div class="info">
                                            <h3>Khanh Nguyen</h3>
                                            <span>UI Designer</span> 
                                        </div>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/linkedin.svg" alt=""/>
                                </div>
                                <div class="post-body">
                                    <p>Alongside many other creative souls, I participated in the Designathon Vietnam 2023 competition and went through an unforgettable journey. This is where I learned, overcame challenges, and generated groundbreaking ideas....<span class="pink-color">more</span></p>
                                </div>
                                <div class="wrapper-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/candidate-3.png" alt=""/>
                                </div>
                            </div>
                        </a>
                    </div> <div class="post-item">
                    <a href="https://www.linkedin.com/posts/hieu-nguyen-2459091a9_designathon-vietnam-2023-arenas-student-activity-7122232903110987776-BUyi?utm_source=share&utm_medium=member_desktop" target="_blank">
                        <div class="post-inner-item">
                            <div class="post-header">
                                <div class="block-info">
                                    <div class="avatar">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/avatar-1.svg" alt=""/>
                                    </div>
                                    <div class="info">
                                        <h3>Hieu Nguyen</h3>
                                        <span>Graphic Designer</span> 
                                    </div>
                                </div>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/linkedin.svg" alt=""/>
                            </div>
                            <div class="post-body">
                                <p>I am thrilled to share that I recently participated in Lollypop Designathon competition 2023 and it was an incredible experience! <br/>Throughout the competition, I had the opportunity to learn and acquire valuable knowledge about Ui/Ux design. It was a journey filled with creativity, problem-solving, and pushing the boun...<span class="pink-color">more</span></p>
                            </div>                         
                        </div>
                    </a>
                    </div>
                </div>
                <div class="column">
                    <div class="post-item">
                        <a href="https://www.linkedin.com/posts/vohoangvy_lollypopdesignathon2023-activity-7112418320657645568-me81?utm_source=share&utm_medium=member_desktop" target="_blank">
                            <div class="post-inner-item">
                                <div class="post-header">
                                    <div class="block-info">
                                        <div class="avatar">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/avatar-1.svg" alt=""/>
                                        </div>
                                        <div class="info">
                                            <h3>Hoang Vy Vo</h3>
                                            <span>UX/UI Designer</span> 
                                        </div>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/linkedin.svg" alt=""/>
                                </div>
                                <div class="post-body">
                                    <p>thrilled to be part of the Lollypop Designathon 2023! ✨ <br/>participating in the competition was the opportunity for me to compete against other talented individuals, not only allowed...<span class="pink-color">more</span></p>
                                </div>
                                <div class="wrapper-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/candidate-4.png" alt=""/>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-item">
                        <a href="https://www.linkedin.com/posts/nguyen-anh-duy-130666249_a-sweet-journey-at-lollypop-designathon-2023-activity-7112437896900485120-wXk6?utm_source=share&utm_medium=member_desktop" target="_blank">
                            <div class="post-inner-item">
                                <div class="post-header">
                                    <div class="block-info">
                                        <div class="avatar">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/avatar-1.svg" alt=""/>
                                        </div>
                                        <div class="info">
                                            <h3>Nguyen Anh Duy</h3>
                                            <span>UI/UX Designer</span> 
                                        </div>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/linkedin.svg" alt=""/>
                                </div>
                                <div class="post-body">
                                    <p>A Sweet Journey at Lollypop Designathon 2023 🍭✨  Welcome everyone to a story I can't help but share! This past weekend, I had the privilege to participate in a memorable experience at the Lollypop Designathon 2023. This wasn't just a competition, but a colorful and creative journey...<span class="pink-color">more</span></p>
                                </div>
                                <div class="wrapper-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/candidate-5.png" alt=""/>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>  
            </div>
        </div>
     </section>
     <!-- Section Common Question -->
     <section class="section-common-question">
        <div class="container">
            <h2 class="font-dfvn-float pink-color text-center heading-2">Frequently <span class="blue-color">Ask Questions</span></h2>
            <div class="accordion" id="accordionExample">
                <div class="grid-question">
                    <div class="block-item">
                        <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Is it an Online or Offline Event?
                        </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        Designathon 2024 is an Offline event organized in Ho Chi Minh City
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                        What are the participation conditions?
                        </button>
                            </h2>
                        <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                         <div class="accordion-body">
                         Participants are freshers, junior designers less than 1 year of working experience, or those just changing academic majors (less than 2 years), and students of universities, colleges, institutes, or centers in Vietnam.
                        </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                        Can I participate if I don't live in Ho Chi Minh City?
                        </button>
                            </h2>
                        <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                         <div class="accordion-body">
                         Yes, Lollypop welcomes students and designers from all regions across the country to participate. However, we cannot cover travel costs, so you will need to arrange and pay for your travel expenses to attend.
                        </div>
                        </div>
                    </div>


                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                        Do I have to pay to participate in the event?
                        </button>
                            </h2>
                        <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                         <div class="accordion-body">
                         Absolutely not, the Designathon 2024 is completely free for everyone.
                        </div>
                        </div>
                    </div>

                    </div>
                    <div class="block-item">
                    <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                            Will the organizers provide food and sleeping accommodations for contestants during Designathon 2024?
                            </button>
                            </h2>
                            <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            We ensure adequate food and beverages, including late-night snacks, for all contestants throughout the event. However, due to the 24-hour nature of the design competition, we cannot offer separate sleeping accommodations. If you feel tired, you can rest on the spot to regain energy.
                            </div>
                            </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                        What is the registration deadline?
                        </button>
                            </h2>
                        <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                         <div class="accordion-body">
                         The registration deadline for Designathon 2024 is August 26, 2024. However, the organizers reserve the right to close the registration form earlier than the stated deadline if they receive a sufficient number of qualified contestants.
                        </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                        Can I form my own team?
                        </button>
                            </h2>
                        <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                         <div class="accordion-body">
                         No, you are required to register as an individual participant and will be allocated to the team by the Organizer before the event date.
                        </div>
                        </div>
                    </div>

                    
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                        What do I need to bring to the event?
                        </button>
                            </h2>
                        <div id="collapse8" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                         <div class="accordion-body">
                              You need to bring your laptops. Wifi connection or other items (Pencils, Erasers, Notes,...) are already well-prepared!
                        </div>
                        </div>
                    </div>
                    
                    </div>
                    </div>
                </div>

            <div class="contact-now">
                <div class="inner-contact">
                    <div class="item">
                        <h4 class="white-color subtitle-1">Not getting the information you need?</h4>
                        <p class="white-color">Contact us for any inquiry about partnering or participating Designathon 2024!</p>
                    </div>
                    <a class="pink-color" href="https://www.messenger.com/t/103174649365111" target="_blank"><button class="button-designathon pink-color">Contact Us</button></a>
                </div>
            </div>
        </div>
     </section>
     <!-- Section register -->
      <section class="section-register">
        <div class="container">
            <h3 class="blue-color font-dfvn-float text-center title-2">“Dragons & Snakes ascend to the clouds”</h3>
            <h2 class="pink-color font-dfvn-float text-center heading-2">Innovate solutions with no bound</h2>
            <p class="text-center">Be a part of Designathon 2024 to unlock your full potential through solving real-life problems, learning from seasoned experts, and winning remarkable prizes! 
            Register today and break your limits!</p>
            <div class="d-flex justify-content-center">
            <a class="pink-color mx-auto" href="https://forms.gle/DreCF31xKDsyzgTV8" target="_blank"><button class="button-designathon-active white-color">Register Now</button></a>
            </div>
        </div>
      </section>
</main>
<footer class="footer-designathon position-relative">
    <div class="container">
         <div class="inner-block">
             <h5>Keen to know more about Lollypop?</h5>
             <h2>Connect with us across all platforms!</h2>
             <div class="d-flex block-social">
                <div class="block-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/logo-footer.svg" alt=""/>
                    <p>Lollypop is the leading agency in crafting meaningful experiences through Research, Design and Development.</p>
                </div>
                <div class="block-item">
                    <ul>
                        <li>
                            <a href="https://www.linkedin.com/company/lollypop-vietnam/" target="_blank">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/logo-linkedin.svg" alt=""/>
                                <h6><a href=''>LinkedIn</a></h6>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/lollypop_vn/" target="_blank">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/logo-insta.svg" alt=""/>
                                <h6><a href=''>Instagram</a></h6>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/lollypopvietnam" target="_blank">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/logo-facebook.svg" alt=""/>
                                <h6><a href=''>Facebook</a></h6>
                            </a>
                        </li>
                    </ul>
                </div>
             </div>
             <div class="d-flex block-policy">
                <p>© 2024 Lollypop - A Terralogic company</p>
                
             </div>
         </div>
    </div>
</footer>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollTrigger/1.0.6/ScrollTrigger.js" integrity="sha512-alUs/9QWS9TdxYygQKopHrjMK9T+Tun55+1EKgiG8lCSHSL2Br7p69RsCFCycu2T2I707/8Y0vkyjTVGHdfHUw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/Observer.min.js" integrity="sha512-pLJlXRr/H5t+k+Tjc+Qe0Z6u6psPak7rvYBdsZ0Z+kG84jn/zifMNTQBZKZlwZC1z23bifGoQWzGnI0eWBJKPQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    $(document).ready(function () {
        gsap.registerPlugin(ScrollTrigger);
        gsap.registerPlugin(Observer);
        function spaceListCard(){
            const widthList = $('.section-cant-miss .container').width();
            const screenWidth = $(window).width();
            const slideWidth = $('.section-slide-card').width();
            const space = (screenWidth - widthList) /2
            $('.section-slide-card .card-item:first-child').css('margin-left',`${space}px`);
            // $('.section-slide-card').css('transform',`translateX(${space}px)`);

            // $('.section-slide-card').css('width',`${slideWidth + space}px`);

        }
        spaceListCard();
        let isDown = false;
        let startX;
        let scrollLeft;
    const slider = document.querySelector('.list-card, .section-old-candidate .grid');

    const end = () => {
	    isDown = false;
    slider.classList.remove('active');
    }

    const start = (e) => {
    isDown = true;
    slider.classList.add('active');
    startX = e.pageX || e.touches[0].pageX - slider.offsetLeft;
    scrollLeft = slider.scrollLeft;	
    }

    const move = (e) => {
    if(!isDown) return;
    e.preventDefault();
    const x = e.pageX || e.touches[0].pageX - slider.offsetLeft;
    const dist = (x - startX);
    
    slider.scrollLeft = scrollLeft - dist;
    }

(() => {
	slider.addEventListener('mousedown', start);
	slider.addEventListener('touchstart', start);

	slider.addEventListener('mousemove', move);
	slider.addEventListener('touchmove', move);

	slider.addEventListener('mouseleave', end);
	slider.addEventListener('mouseup', end);
	slider.addEventListener('touchend', end);
})();
    // Set the date we're counting down to
    const countDownDate = new Date("Aug 26, 2024 23:59:59").getTime();

    // Update the count down every 1 second
    const x = setInterval(function() {
        const now = new Date().getTime();

      // Find the distance between now and the count down date
      const distance = countDownDate - now;

      // Time calculations for days, hours, minutes and seconds
      const days = Math.floor(distance / (1000 * 60 * 60 * 24));
      const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      const seconds = Math.floor((distance % (1000 * 60)) / 1000);
      // Output the result in an element with id="demo"
      $('#date').html(`${days < 10 ? '0' + days : days}`)
      $('#hour').html(`${hours < 10 ? '0' + hours : hours}`);
      $('#minute').html(`${minutes < 10 ? '0' + minutes : minutes}`);
      $('#second').html(`${seconds < 10 ? '0' + seconds : seconds}`);

      // If the count down is over, write some text
      if (distance < 0) {
        clearInterval(x);
        $('#date').html(`00`)
        $('#hour').html(`00`);
        $('#minute').html(`00`);
        $('#second').html(`00`);
      }
    }, 1000);

//     // scroll trigger
//     let animating;
//     let currentIndex = -1;
//     let sections = gsap.utils.toArray(".banner-designathon24 .block-content");
//     let  wrap = gsap.utils.wrap(0, sections.length);
    

//     let ob = Observer.create({
//     type: "wheel,touch,pointer",
//     wheelSpeed: -1,
//     onDown: () => !animating && gotoSection(currentIndex - 1, -1),
//     onUp: () => !animating && gotoSection(currentIndex + 1, 1),
//     tolerance: 10,
//     preventDefault: true,
    
//     onPress: self => {
//     // on touch devices like iOS, if we want to prevent scrolling, we must call preventDefault() on the touchstart (Observer doesn't do that because that would also prevent side-scrolling which is undesirable in most cases)
//     ScrollTrigger.isTouch && self.event.preventDefault()
//   }
//     });
//     function gotoSection(index, direction) {
//     index = wrap(index);
//     animating = true;
//     const t = gsap.timeline({
//         defaults: { duration: 0.55, ease: "power1.inOut" },
//         onComplete: () => {
//             animating = false}
//       });
//     //   const checkIndex = curr
//     if(direction === 1 ){
//         if(currentIndex === 1){
//             ob.disable();      
//         }
//         if(currentIndex === 0){
//             t.to(`.banner-designathon24 .block-content-${currentIndex}`,{yPercent:-100}).to(`.banner-designathon24 .block-content-${index}`,{yPercent:-100});
//         }
//     }else{
//       console.log('sdasd');

//         if(currentIndex === 1){
//             t.to(`.banner-designathon24 .block-content-${currentIndex}`,{yPercent:100}).to(`.banner-designathon24 .block-content-${index}`,{yPercent:0});
//         }
//     }
//     currentIndex = index;
// }
// ob.disable();
// const tl = gsap.timeline({
//         scrollTrigger:{
//             trigger:'.banner-designathon24',
//             start:'top 30%',
//             end:'bottom 50%',
//             markers:true,
//            onEnter:()=>{
//             // ob.enable();
//             console.log('ádasd')
//            },
//            onLeaveBack:()=>{
//                 ob.enable();
//                 console.log('asdasd')
//             }
//         }
//     });

    $('.play-video').click(function (e) { 
        e.preventDefault();
        document.getElementById('video-designathon').play();
        document.getElementById('video-designathon').setAttribute('controls',true);
        $(this).hide();
    });
 
});
  

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