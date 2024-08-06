<?php

/**
 *  Template Name: Designathon2024-2
 *  */
get_header();
?>
<style>
    @import url('https://fonts.cdnfonts.com/css/switzer');
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
    footer:not(.footer-designathon){
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
    .font-dfvn-float{
        font-family: "DFVN Float";
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
        top:2%;
        right:5%;
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
        font-size:16px;
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
        font-size:16px;
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
    }
    .banner-designathon24 .container .block-content-0 .image-talent img{
        width:74.3vw;
        height:15.833vw;
        object-fit:contain;
    }
    .banner-designathon24 .container .block-content-0 .image-sponsor{
        margin-bottom:40px;
    }
    .banner-designathon24 .container .block-content-1{
        position:relative;
        display:flex;
        flex-direction:column;
        gap:24px;
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

        bottom:-55px;
        width:336px;
        height:325px;
        left:20%;
        z-index:3;
        background-image:url("<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/human-1.png");
        animation:1.8s linear 0.1s infinite alternate-reverse animateHuman;
        background-size:17.5vw 12.76vw;
        background-repeat:no-repeat;

    }
    .banner-designathon24 .wave .human.human-2{
        position:absolute;
        bottom:-10vh;
        width:336px;
        height:325px;
        left:47%;
        transform:translateX(-50%);
        z-index:3;
        background-image:url("<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/human-2.png");
        animation:1.8s linear 0.1s infinite alternate-reverse animateHuman;
        background-size:13.38vw 8.43vw;
        background-repeat:no-repeat;
    }
    .banner-designathon24 .wave .human.human-3{
        position:absolute;
        bottom:-95px;
        width:336px;
        height:325px;
        left:64.5%;
        transform:translateX(-50%);
        z-index:-1;
        background-image:url("<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/human-3.png");
        animation:1.8s linear 0s infinite alternate-reverse animateHuman2;
        background-size:10.4vw 8.125vw;
        background-repeat:no-repeat;
    }
    .banner-designathon24 .wave .human.human-4{
        position:absolute;
        bottom:-29px;
        width:336px;
        height:325px;
        left:80%;
        z-index:-1;
        background-image:url("<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/human-4.png");
        animation:1.8s linear 0.2s infinite alternate-reverse animateHuman;
        background-size:7.239vw 7.39vw;
        background-repeat:no-repeat;
        background-position:center;
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
        margin-top:8px;
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
        border:none;
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
    }
    /* Section Cant miss */
    .section-cant-miss{
        padding-top:12%;
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
        /* opacity:0.5; */
        /* background-color:rgba(0,0,0,0.2); */
    }
    .section-timeline-schedule .block-timeline{
        display:grid;
        grid-template-columns:repeat(3,1fr);
        column-gap:20px;
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
        background-color:#311c56;
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
    }
    .section-rules .grid-rules-mobile{
        display:none;
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
        width:478px;
        height:457px;
        background-image:url("<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/layer-human-full.svg");
        background-repeat:no-repeat;

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
    }
    .section-partner h2{
        font-size:54px;
        line-height:64px;
        margin-bottom:16px;
    }
    .section-partner p{
        font-size:16px;
        line-height:24px;
        margin:0 auto;
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
        top:-43%;
        left:0;
        width:100%;
        height:100%;
        background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/footer-illust.svg');
        background-size:100%;
        background-repeat:no-repeat;
        z-index:1;
        pointer-events:none;
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
        footer.footer-designathon:before{
            top:-48%;
        }
        /* .banner-designathon24 .wave .human.human-2{
            bottom:-19vh;
        } */
    }
    @media (min-width:1800px){
        footer.footer-designathon:before{
            top:-58%;
        }
    }
    /* mobile */
    @media(max-width:768px){
        .banner-designathon24 .dragon-right {
            width:55.27vw;
            bottom:22%;
            top:auto;
        }
        .banner-designathon24 .dragon-right .body-dragon{
            width:37.3vw;
            top:-51%;
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
            width:54.1vw;
        }
        .banner-designathon24 .container .block-content-0{
            padding-top:16.67%;
        }
        .banner-designathon24 .change-lang span{
            font-size:14px !important;
            line-height:18px !important;
            padding:4px 8px !important;
        }
        .banner-designathon24 .change-lang{
            top:16px;
        }
        .banner-designathon24 .container .block-content-0 .image-talent img{
            width:91.38vw;
            height:23.8vw;
        }
        .banner-designathon24 .wave .wa{
            bottom:-80% !important;
            background-size:200%;
        }
        .banner-designathon24 .wave{
            z-index:1;
        }
        .banner-designathon24 .wave .human.human-1{
            background-size:43.46vw 31.6vw;
            width:43.46vw;
            height:31.6vw;
            bottom: -2%;
            left: 6%;
        }
        .banner-designathon24 .wave .human.human-2{
            background-size:33.88vw 21.38vw;
            width:33.88vw;
            height:21.38vw;
            bottom: 2%;
            left: 45%;
        }
        .banner-designathon24 .wave .human.human-3{
            background-size:28.88vw 22.22vw;
            width:28.88vw;
            height:22.22vw;
            bottom: 4%;
            left: 73%;
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
        }
        .section-timeline-schedule{
            padding:120px 0 68px;
        }
        .section-timeline-schedule:after{
            background-image:url("<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/layer-hour-mobile.svg");
            top:-38vw;
        }
        .section-timeline-schedule .block-timeline{
            display:block;
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
        }
        .section-timeline-schedule .block-timeline .timeline-item .timeline-inner-item ul li:last-child{
            margin-bottom:0;
        }
        .section-timeline-schedule .block-timeline .timeline-item .timeline-inner-item{
            padding:24px 16px;
        }
        .section-timeline-schedule .block-timeline .timeline-item{
            margin-bottom:16px;
        }
        .section-timeline-schedule .block-timeline .timeline-item:first-child .timeline-image{
            display:none;
        }
        .section-timeline-schedule .timeline-image-mobile{
            display:block;
            width:85vw;
            height:auto;
        }
        .section-rules h2{
            font-size:32px;
            line-height:36px;
        }
        .section-rules .grid-rules{
            display:block;
        }
        .section-rules .grid-rules .rule-item{
            width:91.11vw;
            height:444px;
        }
        .section-rules .grid-rules .rule-item img{
            width:100%;
            height:100%;
            object-fit:cover;
        }
        .section-rules .grid-rules{
            display:none;
        }
        .section-rules .grid-rules-mobile{
            display:block;
        }
        .section-rules .grid-rules-mobile .rule-item{
            margin-bottom:32px;
        }
       
        .section-research-more .container .block{
            width:100%;
            height:58.125vh;
            background-image:url("<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/layer-full-mobile.svg");
            background-size:cover;
            background-repeat:no-repeat;
            background-position:0 bottom;
            background-color:transparent !important;
            padding-top:100px;
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
            width:81.05vw;
            height:81.4vw;
            background-size:80.05vw 77.4vw;
            bottom: -5%;
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
        .section-partner .image-mobile{
            display:block;
        }
        .section-partner .image-mobile{
            margin:0 auto;
        }
        .section-partner .image-desktop{
            display:none;
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
        .section-common-question .contact-now .inner-contact button{
            margin:0 auto;
            width:100%;
            font-size:16px;
            line-height:24px;
            height:44px;
            padding:10px 0;
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
        footer.footer-designathon:before{
            top:-28%;
            background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/footer-illust-mobile.svg');

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
</style>
<!-- Apply right away! -->

<main class="main">
    <!-- Section banner -->
  <section class="banner-designathon24 position-relative">
    <div class="bg"></div>
    <div class="change-lang">
        <span class="active">VIE</span>
        <span>EN</span>
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
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/sponsor.png" alt=""/>
            </div>
            <div class="image-talent">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/text-talent.png" alt=""/>
            </div>
        </div>
        <div class="block-content block-content-1">
        <div class="block position-relative"> 
            <h1 class="text-center white-color font-dfvn-float">Lollypop Designathon Việt Nam</h1>
            <h1 class="text-center pink-color font-dfvn-float">Chính Thức Trở Lại!!</h1>
        </div>
        <p class="text-center white-color description">
        Tiếp nối thành công rực rỡ của Designathon 2023, Designathon 2024 đã chính thức trở lại với phiên bản mới hoành tráng và thú vị hơn. Đây là cơ hội vàng để cho các Designer tài năng được thử sức và toả sáng.
        </p>
        <div class="block-detail">
            <div class="block-item">
                <h3 class="text-center white-color">Số lượng</h3>
                <h2 class="text-center white-color font-dfvn-float">100+ thí sinh</h2>
            </div>
            <div class="block-item">
                <h3 class="text-center white-color">Thời gian giải đề</h3>
                <h2 class="text-center white-color font-dfvn-float">24 giờ</h2>
            </div>
            <div class="block-item">
                <h3 class="text-center white-color">Ngày thi đấu</h3>
                <h2 class="text-center white-color font-dfvn-float">21-22/09/2024</h2>
            </div>
        </div>
        <a class="pink-color mx-auto" href="https://forms.gle/DreCF31xKDsyzgTV8" target="_blank"><button class="button-designathon pink-color">Đăng Ký Ngay</button></a>
        </div>

    </div>
  </section>
  <!-- Section Why u cant miss -->
   <section class="section-cant-miss">
    <div class="container">
       <div class="block-content">
        <div class="block-item">
            <h2 class="blue-color font-dfvn-float">
            Sân chơi dành riêng <br/> cho <span class="pink-color">Thiết kế UI/UX</span>
            </h2>
        </div>
        <div class="block-item">
            <p>Lollypop Designathon là một trong những cuộc thi lớn nhất Việt Nam, nơi nảy mầm các giải pháp thiết kế UI/UX. Trải qua 24 giờ căng thẳng nhưng đầy thú vị, thí sinh sẽ được học - hỏi và phát huy tối đa kỹ năng nghiên cứu, thiết kế, phản biện dưới sự cố vấn của các chuyên gia hàng đầu.</p>
        </div>
       </div> 
    </div>
   </section>
   <section class="section-slide-card">
        <div class="list-card">
            <div class="card-item">
                <div class="inner-card-item">
                    <h3 class="font-dfvn-float blue-color">Nhân tài <br/> hội tụ</h3>
                    <p class="blue-color">Kết nối - Hợp tác cùng các tài năng thiết kế toàn quốc, nâng cao kỹ năng chuyên môn và mở rộng các mối quan hệ trong cộng đồng thiết kế.</p>
                    <div class="wrapper-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/slide-card-1.png" alt=""/>
                    </div>
                </div>
            </div>
            <div class="card-item">
                <div class="inner-card-item">
                    <h3 class="font-dfvn-float blue-color">24 giờ <br/>
                    thử thách</h3>
                    <p class="blue-color">Ăn - Ngủ cùng cuộc thi xuyên suốt 24 giờ, mang đến giải pháp sáng tạo đột phá giúp giải quyết vấn đề hóc búa đến từ đề thi. </p>

                    <div class="wrapper-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/slide-card-2.png" alt=""/>
                    </div>
                </div>
            </div>
            <div class="card-item">
                <div class="inner-card-item">
                    <h3 class="font-dfvn-float blue-color">Cố vấn<br/>
                    chuyên môn</h3>
                    <p class="blue-color">Sáng tạo dưới sự dẫn dắt từ dàn cố vấn chuyên môn từ Lollypop và UEH, tiếp thu kinh nghiệm đắt giá và phát triển định hướng sự nghiệp.</p>

                    <div class="wrapper-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/slide-card-3.png" alt=""/>
                    </div>
                </div>
            </div>
            <div class="card-item">
                <div class="inner-card-item">
                    <h3 class="font-dfvn-float blue-color">UI/UX Design <br/>     
                    Framework</h3>
                    <p class="blue-color">Tham gia buổi Workshop chuyên biệt và học hỏi UI/UX Design Framework đã giúp Lollypop chinh phục hàng trăm dự án thành công.</p>

                    <div class="wrapper-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/slide-card-4.png" alt=""/>
                    </div>
                </div>
            </div>
            <div class="card-item">
                <div class="inner-card-item">
                    <h3 class="font-dfvn-float blue-color">Cơ hội <br/>
                    thực tập</h3>
                    <p class="blue-color">Cơ hội học tập và rèn giũa phát triển kỹ năng thiết kế giải pháp tại Lollypop Design Studio - Top UI/UX Design Studio hàng đầu APAC.</p>

                    <div class="wrapper-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/slide-card-5.png" alt=""/>
                    </div>
                </div>
            </div>
        </div>
   </section>
   <!-- Section countdown -->
   <section class="section-countdown">
    <div class="container">
        <h3 class="font-dfvn-float blue-color">“Rồng Rắn Lên Mây”</h3>
        <h2 class="font-dfvn-float pink-color">Đến Đây Thử Thách!</h2>
        <p>Nắm bắt cơ hội tham gia Designathon 2024 để cùng 100 nhà thiết kế sáng giá “chinh phục thử thách, phá bỏ giới hạn và mở khóa tiềm năng!”</p>
        <div class="block-countdown">
            <div class="time-item">
                <span class="circle"></span>
                <h4 id="date" class="font-dfvn-float">00</h4>
                <span class="circle right"></span>
            </div>
            <div class="time-item">
                <span class="circle"></span>
                <h4 id="hour" class="font-dfvn-float">00</h4>
                <span class="circle right"></span>
            </div>
            <div class="time-item">
                <span class="circle"></span>
                <h4 id="minute" class="font-dfvn-float">00</h4>
                <span class="circle right"></span>
            </div>
            <div class="time-item">
                <span class="circle"></span>
                <h4 id="second" class="font-dfvn-float">00</h4>
                <span class="circle right"></span>
            </div>
            
        </div>
        <div class="block-title">
            <h4 class="blue-color">Ngày</h4>
            <h4 class="blue-color">Giờ</h4>
            <h4 class="blue-color">Phút</h4>
            <h4 class="blue-color">Giây</h4>
        </div>
        <div class="button-designathon-register text-center">
        <a class="pink-color mx-auto" href="https://forms.gle/DreCF31xKDsyzgTV8" target="_blank"><button class="button-designathon-active white-color">Đăng Ký Ngay</button></a>
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
                        <h2 class="font-dfvn-float pink-color">
                        Mốc Thời Gian<br/>
                        <span class="white-color">& Lịch Trình</span>
                        </h2>
                        <img class="timeline-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/timeline-image.png" alt=""/>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-inner-item">
                        <div class="head">
                            <span class="day white-color">Thứ Bảy</span>
                            <h3 class="font-dfvn-float white-color">21 <span class="white-color">09/2024</span></h3>
                        </div>
                        <ul class="position-relative">
                            <li><span class="pink-color">08:00</span><span class="white-color">Check-in</span></li>
                            <li><span class="pink-color">09:30</span><span class="white-color">Công bố đề thi</span></li>
                            <li><span class="pink-color">10:00</span><span class="white-color">Bắt đầu giải đề</span></li>
                            <li><span class="pink-color">11:30</span><span class="white-color">Nghỉ ngơi - ăn trưa</span></li>
                            <li><span class="pink-color">08:00</span><span class="white-color">Cố vấn chuyên môn vòng 1</span></li>
                            <li><span class="pink-color">08:00</span><span class="white-color">Nghỉ ngơi - ăn tối</span></li>
                            <li><span class="pink-color">08:00</span><span class="white-color">Cố vấn chuyên môn vòng 2</span></li>
                        </ul>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-inner-item">
                        <div class="head">
                            <span class="day white-color">Chủ Nhật</span>
                            <h3 class="font-dfvn-float white-color">22 <span class="white-color">09/2024</span></h3>
                        </div>
                        <ul class="position-relative">
                            <li><span class="pink-color">06:30</span><span class="white-color">Ăn sáng</span></li>
                            <li><span class="pink-color">09:00</span><span class="white-color">Nộp bài thi</span></li>
                            <li><span class="pink-color">09:30</span><span class="white-color">Thuyết trình giải pháp</span></li>
                            <li><span class="pink-color">12:30</span><span class="white-color">Công bố kết quả & trao giải</span></li>
                        </ul>
                    </div>
                </div>
                
            </div>
       </div>
    <img class="timeline-image-mobile" src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/timeline-image.png" alt=""/>
    </section>
<!-- Section Rules -->
 <section class="section-rules">
    <div class="container position-relative">
        <h2 class="font-dfvn-float pink-color">Thể Lệ <span class="white-color">Cuộc Thi</span></h2>
        <div class="grid-rules">
            <div class="rule-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/rule-1.png" alt=""/>
            </div>
            <div class="rule-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/rule-2.png" alt=""/>
            </div>
            <div class="rule-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/rule-3.png" alt=""/>
            </div>
            <div class="rule-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/rule-4.png" alt=""/>
            </div>
        </div>
        <div class="grid-rules-mobile">
            <div class="rule-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/rule-1-mobile.svg" alt=""/>
            </div>
            <div class="rule-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/rule-2-mobile.svg" alt=""/>
            </div>
            <div class="rule-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/rule-3-mobile.svg" alt=""/>
            </div>
            <div class="rule-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/rule-4-mobile.svg" alt=""/>
            </div>
        </div>
    </div>
 </section>
   </div>

 <!-- Section Research more -->
  <section class="section-research-more">
    <div class="container">
        <div class="block">
              
            <h5 class="white-color text-center">Tìm hiểu thêm</h5>
            <h2 class="font-dfvn-float pink-color text-center">Quy định <span class="white-color">Designathon 2024</span></h2>
            <div class="d-flex justify-content-center">
         <button class="button-designathon pink-color">Tải Xuống PDF</button>
        </div>
        </div>
    </div>
  </section>
  <!-- Section Partner -->
    <section class="section-partner">
        <div class="container">
            <h2 class="font-dfvn-float pink-color text-center">Nhà tài trợ <span class="blue-color">& Đối tác</span></h2>
            <p class="text-center">Để Designathon 2024 thực sự hoành tráng và đầy giá trị, sự đồng hành của các Nhà tài trợ và Đối tác uy tín là yếu tố không thể thiếu xuyên suốt hành trình tổ chức cuộc thi.</p>
            <div class="wrapper-image">
            <img class="image-desktop" src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/image-partner.png" alt=""/>
            <img class="image-mobile" src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/image-partner-mobile.svg" alt=""/>
            </div>
        </div>
    </section>
     <!-- Section Video -->
     <section class="section-video">
        <div class="container">
            <h2 class="font-dfvn-float pink-color text-center"><span class="white-color">Cùng nhìn lại “sức nóng"</span>
            <br/><span class="pink-color">Designathon Việt Nam 2023</span></h2>
            <div class="wrapper-video">

            <iframe width="848" height="477" id="video-designathon" src="https://www.youtube.com/embed/F5qvBLJbx6M?si=8PPSwZzGVAiJNcOt&amp;controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <ul>
                <li class="white-color"><span class="pink-color font-dfvn-float">50</span> thí sinh tài năng</li>
                <li class="white-color"><span class="pink-color font-dfvn-float">8</span> giờ phát triển giải pháp</li>
                <li class="white-color">Trải nghiệm có <span class="pink-color font-dfvn-float">1-0-2</span></li>
            </ul>
        </div>
    </section>
    <!-- Section Old Candidate -->
     <section class="section-old-candidate">
        <div class="container">
            <h4 class="font-dfvn-float blue-color">Cựu thí sinh nói gì về</h4>
            <h2 class="font-dfvn-float pink-color">Designathon Việt Nam?</h2>
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
                                <p>I joined the Designathon Vietnam 2023 competition, alongside numerous other talented individuals, and embarked on a truly memorable journey. It was a transformative experience where I acquired valuable knowledge, conquered challenges, and fostered innovative... <span class="pink-color">Xem thêm</span></p>
                            </div>
                            <div class="wrapper-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/candidate-1.png" alt=""/>
                            </div>
                        </div>
                    </a>
                    </div>
                    <div class="post-item">
                    <a href="https://www.linkedin.com/posts/vananhkhoa_designathonvietnam2023-uiux-lollypopvietnam-activity-7112993639370289153-uJbG?utm_source=share&utm_medium=member_desktop" target="_blank">
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
                                It's an incredible opportunity for learning and a personal challenge for me. Through this competition, I'm excited to absorb knowledge from fellow teammates, buddies, mentors, ... <span class="pink-color">Xem thêm</span></p>
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
                    <a href="https://www.linkedin.com/posts/vohoangvy_lollypopdesignathon2023-activity-7112418320657645568-me81?utm_source=share&utm_medium=member_desktop" target="_blank">
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
                    <a href="https://www.linkedin.com/posts/long-giang-5183ab216_designathon2023-lollypopstudio-uiuxdesign-activity-7112089405447712770-x9LO?utm_source=share&utm_medium=member_desktop" target="_blank">
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
                                <p>Alongside many other creative souls, I participated in the Designathon Vietnam 2023 competition and went through an unforgettable journey. This is where I learned, overcame challenges, and generated groundbreaking ideas....<span class="pink-color">Xem thêm</span></p>
                            </div>
                            <div class="wrapper-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/candidate-3.png" alt=""/>
                            </div>
                        </div>
                    </a>
                    </div> <div class="post-item">
                    <a href="https://www.linkedin.com/posts/khanh-nguyen-65b036274_designathonvietnam2023-uiux-lollypopvietnam-activity-7112677995110096896-agGM?utm_source=share&utm_medium=member_desktop" target="_blank">
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
                                <p>I am thrilled to share that I recently participated in Lollypop Designathon competition 2023 and it was an incredible experience! <br/>Throughout the competition, I had the opportunity to learn and acquire valuable knowledge about Ui/Ux design. It was a journey filled with creativity, problem-solving, and pushing the boun...<span class="pink-color">Xem thêm</span></p>
                            </div>                         
                        </div>
                    </a>
                    </div>
                </div>
                <div class="column">
                    <div class="post-item">
                    <a href="https://www.linkedin.com/posts/nguyen-anh-duy-130666249_a-sweet-journey-at-lollypop-designathon-2023-activity-7112437896900485120-wXk6?utm_source=share&utm_medium=member_desktop" target="_blank">
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
                                <p>thrilled to be part of the Lollypop Designathon 2023! ✨ <br/>participating in the competition was the opportunity for me to compete against other talented individuals, not only allowed...<span class="pink-color">Xem thêm</span></p>
                            </div>
                            <div class="wrapper-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/candidate-4.png" alt=""/>
                            </div>
                        </div>
                    </a>
                    </div>
                    <div class="post-item">
                    <a href="https://www.linkedin.com/posts/hieu-nguyen-2459091a9_designathon-vietnam-2023-arenas-student-activity-7122232903110987776-BUyi?utm_source=share&utm_medium=member_desktop" target="_blank">
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
                                <p>A Sweet Journey at Lollypop Designathon 2023 🍭✨  Welcome everyone to a story I can't help but share! This past weekend, I had the privilege to participate in a memorable experience at the Lollypop Designathon 2023. This wasn't just a competition, but a colorful and creative journey...<span class="pink-color">Xem thêm</span></p>
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
            <h2 class="font-dfvn-float pink-color text-center">Câu Hỏi <span class="blue-color">Thường Gặp</span></h2>
            <div class="accordion" id="accordionExample">
                <div class="grid-question">
                    <div class="block-item">
                        <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Đây là sự kiện tổ chức Online hay Offline?
                        </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Designathon 2024 là sự kiện Offline được tổ chức tại Đại học Kinh tế TP. Hồ Chí Minh (UEH) - 279 Nguyễn Tri Phương, Phường 5, Quận 10, Hồ Chí Minh. 
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                            Điều kiện để tham gia Designathon là gì?
                        </button>
                            </h2>
                        <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                         <div class="accordion-body">
                           Đối tượng tham gia cuộc thi là các bạn Fresher, Designers có kinh nghiệm làm việc dưới 1 năm hoặc mới chuyển ngành (dưới 2 năm), Sinh viên của các trường Đại học, Cao đẳng, Học viện, Trung tâm trên cả nước.
                        </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                        Tôi không sinh sống và làm việc tại TP. Hồ Chí Minh thì có thể tham gia không?
                        </button>
                            </h2>
                        <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                         <div class="accordion-body">
                         Lollypop luôn chào đón tất cả sinh viên, Designer từ tất cả mọi nơi đến tham dự cuộc thi. Tuy nhiên, BTC sẽ không thể hỗ trợ chi phí di chuyển, vì vậy các bạn sẽ phải tự túc các khoản phí đi lại.
                        </div>
                        </div>
                    </div>


                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                        Có bất kỳ chi phí tham gia cuộc thi không?
                        </button>
                            </h2>
                        <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                         <div class="accordion-body">
                         Cuộc thi Designathon 2024 hoàn toàn miễn phí cho tất cả mọi người.
                        </div>
                        </div>
                    </div>

                    </div>
                    <div class="block-item">
                    <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                            BTC có cung cấp bữa ăn và chỗ ngủ cho thí sinh trong quá trình diễn ra Designathon 2024 không?
                            </button>
                            </h2>
                            <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            BTC sẽ chuẩn bị đầy đủ đồ ăn thức uống (kể cả đồ ăn đêm) cho các thí sinh trong suốt thời gian diễn ra cuộc thi. Tuy nhiên, do tính chất của cuộc thi thiết kế xuyên suốt 24 giờ, BTC không thể cung cấp chỗ nghỉ riêng biệt cho từng thí sinh. Nếu cảm thấy mệt, các bạn có thể nghỉ ngơi tại chỗ để hồi sức.
                            </div>
                            </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                        Hạn chót đăng ký thi Designathon là khi nào?
                        </button>
                            </h2>
                        <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                         <div class="accordion-body">
                         Hạn chót đăng ký là ngày 21/08/2024. Tuy nhiên, BTC có thể dừng nhận đơn đăng ký sớm hơn dự kiến nếu đủ thí sinh.
                        </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                        Tôi có thể tham gia theo nhóm được không?
                        </button>
                            </h2>
                        <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                         <div class="accordion-body">
                         Rất tiếc là không thể. Bạn phải đăng ký tham gia dưới hình thức dự thi cá nhân và sẽ được BTC sắp xếp đội trước ngày diễn ra cuộc thi.
                        </div>
                        </div>
                    </div>

                    
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                        Tôi cần mang theo những gì khi đi thi?
                        </button>
                            </h2>
                        <div id="collapse8" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                         <div class="accordion-body">
                         Các thí sinh khi tham gia cuộc thi cần mang theo laptop cá nhân. Các vật dụng khác (Bút chì, tẩy, giấy notes,...) cũng như mạng wifi đều đã được BTC chuẩn bị sẵn đầy đủ.
                        </div>
                        </div>
                    </div>
                    
                    </div>
                    </div>
                </div>

            <div class="contact-now">
                <div class="inner-contact">
                    <div class="item">
                        <h4 class="white-color">Vẫn còn băn khoăn?</h4>
                        <p class="white-color">Không tìm thấy thông tin bạn cần? Liên hệ ngay với BTC để được hỗ trợ kịp thời!</p>
                    </div>
                    <a class="pink-color" href="https://www.messenger.com/t/103174649365111" target="_blank"><button class="button-designathon pink-color">Liên Hệ Ngay</button></a>
                </div>
            </div>
        </div>
     </section>
     <!-- Section register -->
      <section class="section-register">
        <div class="container">
            <h3 class="blue-color font-dfvn-float text-center">“Rồng Rắn Lên Mây”</h3>
            <h2 class="pink-color font-dfvn-float text-center">Cùng Xây Giải Pháp</h2>
            <p class="text-center">Tham gia Designathon 2024 ngay để nhận <span class="pink-color">những giá trị thực!</span >
            Giải quyết đề bài thực tế, học hỏi từ chuyên gia thực chiến, và chiến thắng giải thưởng thực sự hấp dẫn! Đăng ký ngay hôm nay và bứt phá mọi giới hạn!</p>
            <div class="d-flex justify-content-center">
            <a class="pink-color mx-auto" href="https://forms.gle/DreCF31xKDsyzgTV8" target="_blank"><button class="button-designathon-active white-color">Đăng Ký Ngay</button></a>
            </div>
        </div>
      </section>
</main>
<footer class="footer-designathon position-relative">
    <div class="container">
         <div class="inner-block">
             <h5>TÌM HIỂU THÊM VỀ LOLLYPOP?</h5>
             <h2>Kết nối với Lollypop trên mọi nền tảng!</h2>
             <div class="d-flex block-social">
                <div class="block-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/logo-footer.svg" alt=""/>
                    <p>Lollypop là top agency tạo ra các trải nghiệm người dùng mượt mà thông qua quá trình Nghiên cứu, Thiết kế, và Phát triển sản phẩm.</p>
                </div>
                <div class="block-item">
                    <ul>
                        <li>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/logo-linkedin.svg" alt=""/>
                            <h6><a href=''>LinkedIn</a></h6>
                        </li>
                        <li>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/logo-insta.svg" alt=""/>
                            <h6><a href=''>Instagram</a></h6>
                        </li>
                        <li>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon24/logo-facebook.svg" alt=""/>
                            <h6><a href=''>Facebook</a></h6>
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