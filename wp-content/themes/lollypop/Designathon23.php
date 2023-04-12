<?php 
/**
 *  Template Name: Designathon23
 *  */

get_header('designathon23');
?>
<style>
body{padding-bottom: 0 !important;
  background-color:#0D0EA3 !important;
}
.plyr__control--overlaid{
opacity:0;
}
.athon-header .h-li-nav{
opacity:0;
pointer-events:none !important;
}
.jury__img::after {display: none;}
.plyr__controls{
opacity:0;
display:none !important;
}
.jury-quote{
position:absolute;
top: -30px;
left: -5px;
}
.our-sponser:before{content:'';position:absolute;width: 141px;height: 104px;margin-left: -11px;background-image:url("<?php echo get_template_directory_uri(); ?>/assets/images/designathon23/upsrok-slide-lines.svg") !important;background-repeat:no-repeat;background-size:contain;z-index: -1;}

/*designathon23-css-mithun-bl*/
.event-Details {padding: 180px 0 120px 0;}
.event-Details .details-width{width: 100%;max-width:765px;margin: 0 auto;}
.event-Details h2{font-size: 48px;font-weight: 800;line-height: 1;color: #FF3500;position: relative;z-index: 0;}
.event-Details h2::before{content:'';position:absolute;width: 141px;height: 104px;top: -5px;left:-27px;background-image:url("<?php echo get_template_directory_uri(); ?>/assets/images/designathon23/red-event-dots.svg");background-repeat:no-repeat;background-size:contain;z-index: -1;}
.event-Details .register-process h4{font-size: 24px;font-weight: 700;line-height: 1.2;color: #FFFFFF;}
.event-Details .register-process p{font-weight: 400;line-height: 1.45;color: rgba(255, 255, 255, 0.7) !important;width: 100%;max-width:446px ;}
.event-Details .register-process span{font-weight: 700;color:#fff !important;}
.event-Details label{font-size: 20px;font-weight:700;color: #FF3500;line-height: 37px;
    font-style: normal;
         font-family: 'Cairo', sans-serif;}
.btn-red{display: inline-block;text-decoration: none;padding: 14px 36px;background: #FF3500;font-size: 18px;font-weight: 700;color: #FFFFFF;margin: 8px 0 0 0;position: relative;line-height:1.0;height: 50px;clip-path: polygon(8% 0%, 100% 0%, 100% 0%, 100% 75%, 92% 100%, 0 100%, 0 100%, 0 25%);-webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    transition: all 0.3s ease;}
.btn-red:hover{color:#fff; clip-path:polygon(6.8% 0%, 100% 0%, 100% 0%, 100% 75%, 92% 100%, 0 100%, 0 100%, 0 25%);}
.design-cities-hacks{padding:130px 0 60px 0;}
.design-cities-hacks h2{font-size: 48px;font-weight: 800;line-height: 1;color: #FF3500;position: relative;margin-bottom:82px;z-index: 0; margin-left: 28px;}
.design-cities-hacks h2:before{content:'';position:absolute;width: 141px;height: 67px;top: -7px;left:-19px;background-repeat:no-repeat;background-size:cover;z-index: -1;}
.hack-Cities{width: 100%; margin:0 auto;}
.imgBdr{border: 1px solid #FF3500;margin-right: 53px;}
    figure .slide:hover {-webkit-transition: all 700ms cubic-bezier(.25, .46, .45, .94);
    transition: all 700ms cubic-bezier(.25, .46, .45, .94); transform: translate(0rem, -0rem);}
figure .slide{-webkit-transform: translate(-1.1rem, -1.0rem);
    -ms-transform: translate(-1.1rem, -1.0rem);
    transform: translate(1.1rem, -1.0rem); transition: all 700ms cubic-bezier(.25, .46, .45, .94);}
.last-Design{padding: 0px 0 100px 0;}
.last-Design h2{font-size: 48px;font-weight: 800;line-height: 1;color: #FF3500;width: 100%;max-width:676px;margin: 0 auto 40px;}
.btn-red .white_arrow{display:none;}
/* .btn-red:hover .white_arrow{display: inline-block;padding-left:10px;} */
.event-details-content{padding-left:60px;}
.our-sponser h3{position:relative;}
.athon-prize-list__item h6{
   font-family: 'Cairo', sans-serif;
}

.download-btn{
  margin: 0 auto;
    max-width: 198px;
    background-color: #fff;
    clip-path: polygon(8% 0%, 100% 0%, 100% 0%, 100% 75%, 92% 100%, 0 100%, 0 100%, 0 25%);
    padding: 1px;
}
.download-btn:hover{max-width: 227px;}
.download-btn .btn-red{display: flex; padding: 15px 36px; justify-content: space-between;}
.download-btn .btn-red:hover{    clip-path: polygon(7.8% 0%, 100% 0%, 100% 0%, 100% 75%, 92% 100%, 0 100%, 0 100%, 0 25%);}

/* designathon */
.footer {
  background: #191919 !important;
}
.ft-social-links__item a, .footer p{
  color: #FFFFFF !important;
}
.banner-designathon23{
   background-image:url("<?php echo get_template_directory_uri(); ?>/assets/images/designathon23/banner-top-dots.png");
   background-repeat: no-repeat;background-size: contain;
    top: -21px;
    left: 11px;
}
/* .sec-pd-designathonfaq{
  background-image:url("<?php echo get_template_directory_uri(); ?>/assets/images/designathon23/faq-Bottom-dots.svg");
   background-repeat: no-repeat;background-size: contain;
} */
.design23-head{
  color: #FFFFFF;
  text-transform: uppercase;
}
.clr-yel-92a{
  color: #FF3500 !important;
}
.clr-white{
  color: #FFFFFF;
}
.clr-gray{
  background: #EAE6E1;
}
p, h6{
  color: #FFFFFF !important;
}
 .banner-side-img{
    width: 537px;
    top: 21px;
    position: absolute;
    right: 0;
    
 }
 .design-content-p{
  max-width:600px;
  margin-bottom:3rem;
 }
 .sponsor-img__item-content{
   margin-top:120px;
   margin-bottom:144px;
 }
 .faq-ac__item {
    margin-bottom: 50px !important;
}
.faq-ac__item:last-child {
    margin-bottom: 0 !important;
}
.clr-blue{
  color: #0D0EA3 !important;
}
.slider-content{
  font-family: 'Manrope';
font-style: normal;
font-weight: 800;
font-size: 40px;
line-height: 120%;
text-align: center;
text-transform: capitalize;
color: #0D0EA3;
}

.dots-red .slick-dots, .single-dot-slider .slick-dots {
   display:none !important;
}
.lines-imgs-bottom{
  position: relative;
}
.lines-img-top{
  position: relative;
}
.lines-img-top img{
   margin-left:7.5rem;
   margin-bottom:-45px;
}
.lines-img-top:before{
   background-image:url("<?php echo get_template_directory_uri(); ?>/assets/images/designathon23/why-p-botto.svg");
   width: 88px;
    content: "";
    position: absolute;
    background-repeat: no-repeat;
    height: 120px;
    z-index: 1;
    left: 44px;
    top: 0;
}
.lines-imgs-bottom img{
  position: absolute;
    right: 126px;
    top: -33px;
    z-index: -1;
}
.lines-imgs-bottom:before{
   background-image:url("<?php echo get_template_directory_uri(); ?>/assets/images/designathon23/why-p-top-des.svg");
   width: 88px;
    content: "";
    position: absolute;
    background-repeat: no-repeat;
    height: 120px;
    z-index: 1;
    right: 40px;
    top: -57px;
}
.sec-participate-23{
   padding-top:50px;
   padding-bottom:100px;
}
.footer-nav-links span{
  color: #FFFFFF !important;
}

.participate-slider .slick-slide {
  height:100% !important;
}

.sec-athon-text-bg {
    padding-top: 100px !important;
}

.dots-image{
  margin-top: -7%;
}
.why-txt h2{
  margin-bottom:4rem;
  font-family: 'Manrope';
font-style: normal;
font-weight: 700;
font-size: 20px;
line-height: 120%;
color: #FF3500;
}
.why-txt p{
  
  font-family: 'Manrope';
font-style: normal;
font-weight: 800;
font-size: 40px;
line-height: 120%;
text-align: center;
/* text-transform: capitalize; */
color: #0D0EA3 !important;
  }
  .why-txt{
    
    margin-top: -30rem;
    text-align: center;
    width: 70%;
    margin-left: auto;
    margin-right: auto;
  }

.register-btn a{
  margin-top:65px;
}
.keen-head{
   margin-bottom:70px !important;
}
.sec-pd-designathon2{
  padding-bottom:150px !important;
}
@media(max-width: 767px){
  .white_arrow{display: inline-block !important;}
  .event-Details{padding: 180px 0 72px 0;}
.event-Details h2{font-size:24px;line-height:1.0;margin-bottom:36px;}
.event-Details h2::before{width: 95px; height: 48px;top: -10px;background-size:inherit;}
.event-Details .register-process p{max-width:100%;}
.event-Details .register-process h4{font-size:20px;}
.event-Details label{font-size:14px;margin-top:20px;}
.btn-red{font-size:14px;line-height:19px;height:43px;}
.design-cities-hacks{padding: 0px 0;}
.design-cities-hacks h2{font-size:24px;width:100%;margin-bottom:58px ;}
.design-cities-hacks h2:before{width:95px;max-width:69px;}
.imgBdr{margin-right: 0px;margin-bottom:34px ;}
.last-Design{padding: 0px 0 72px 0;}
.last-Design h2{font-size:24px;max-width:323px;}
.one-slide{ max-width:230px;
    margin:0 auto;}
    .sponsor-sec{flex-direction:column;}
    .footer-slide-img{width:80px; margin-left:0px !important;}
    .event-details-content{padding-left:15px;}
    .our-sponser:before{content:'';position:absolute;width: 141px;height: 104px; top: -15px; background-image:url("<?php echo get_template_directory_uri(); ?>/assets/images/designathon23/upsrok-slide-lines.svg") !important;background-repeat:no-repeat;background-size:contain;z-index: -1;}
    .sponsor-sec img{height: 78px;}
    figure .slide, figure .slide:hover{
      transition: none;
    }
    figure .slide:hover{
      /* transform:none; */
      transform: translate(1.1rem, -1rem);
    }
    .keen-head{
   margin-bottom:70px !important;
}
.sec-pd-designathon2{
  padding-bottom:60px !important;
}

}

/*designathon23-css-mithun-bl*/




@media(max-width: 768px){
  .our-sponser:before{display: none;}
  .design-cities-hacks .our-sponser:before, .sec-pd-designathon2 .our-sponser:before{display: block;}
  .sec-pd-designathon2 .our-sponser{position: relative;text-align: left !important}
  .download-btn .btn-red {padding: 12px 36px !important;}
  .download-btn {max-width:200px !important;}
  .data-scroll{padding: 40px 0 !important}
  .download-btn:hover {
    max-width: 240px !important;
  }

.register-red-btn img {
    opacity: 1 !important;
    display: inherit !important;
    width: auto !important;
    visibility: visible !important;}
    .btn-red img{margin-left: 10px !important;}
.faq-el--athon{
margin-top: -70px;
}
/* design */
.design-logo{
   width:100px !important;
}
.banner-side-img{
   width:136px !important;
   height:223px !important;

}
.design23-head{font-family: 'Cairo', sans-serif;
  font-size: 24px !important;
line-height: 130% !important;
font-weight:700 !important;
}
.design__p{
  font-size: 14px !important;
}
.athon-prize-list__item h6{
   font-size:20px !important;
   font-family: 'Cairo', sans-serif;
}
.athon-prize-list__item p{
   font-size:12px !important;
}
.lines-img-top img {
  margin-left:0rem !important;
  width: 119px !important;
}
.lines-img-top:before {
   background-image:url("<?php echo get_template_directory_uri(); ?>/assets/images/designathon23/red-top.svg") !important;
   left: -26px !important;
    top: 5px !important;
    width: 39px !important;

}
.lines-imgs-bottom:before{
   background-image:url("<?php echo get_template_directory_uri(); ?>/assets/images/designathon23/red-bottom.svg") !important;
   width: 39px !important;
    content: "";
    position: absolute;
    background-repeat: no-repeat;
    height: 120px;
    right: -15px !important;
    top: -27px !important;
    top: 0;
}
.lines-imgs-bottom img{
  position: absolute;
    right: 24px !important;
    top: -33px !important;
    z-index: -1;
    width:119px !important;
}
.slider-content {
  font-size:20px !important;
}
.sec-participate-23 {
   padding-top:0px !important;
   padding-bottom:0px !important;
}

.footer-slide-img{
  width: 45px !important;
  bottom: 0rem !important;
}
.sponsor-img__item-content {
    margin-top: 100px;
  }

  .why-txt p{
  
font-size: 20px !important;
margin-top:0rem !important;
/* max-width: 250px; */
margin-bottom:2rem;
}
.why-txt{
  
    text-align: center;
    width: 80%;
    margin: 0 auto;
    margin-top: -20rem !important;
}
.register-btn a{
  margin-top:0px !important;
}
.one-slide br{
  display:none !important;
}
.why-txt h2{
  margin-bottom:2rem !important;
}
.keen-head{
   margin-bottom:0px !important;
}
.banner-designathon23{
  left:0 !important;
}
.banner-side-img{
  padding:0px !important;
}
.banner-designathon23 {
  background-size: auto;
}
p br{
  display:none !important;
}

}


/* small device */
@media screen and (min-width: 320px) and (max-width:420px) {
  .footer-slide-img {
    width: 45px !important;
    bottom: 0rem !important;
  }
  
}

.register-red-btn{
  -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    transition: all 0.3s ease;
}
.register-red-btn img{
  opacity: 0;display: inherit !important;
    width: 0;
    visibility: hidden;
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    transition: all 0.3s ease;
}
/* .register-red-btn:hover img{
  opacity: 1;
    visibility: visible;
    width: auto;
} */
.download-btnd:hover .white_arrow {
    display: inline-block !important;
    padding-left: 10px;
}
.download-btn .btn-red:hover .white_arrow {
    display: inline-block !important;
}

</style>

<main class="main">
  <!-- 01 -->
      <section class="sec-pd-designathon pt-lg-5  pb-2 position-relative banner-designathon23">
        <div class="container">
          <div class="row"> 
            <div class="col-12 col-md-12 col-lg-12 mx-auto mt-5">
               <img class="img-fluid mb-5 design-logo d-none d-md-block" src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon23/LOGO WEB.svg" alt="logo">
               <img class="img-fluid mb-5 design-logo d-block d-md-none" src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon23/LOGO MOB.svg" alt="logo">
              <div class="col-md-10 px-0">
                 <p class="fnt-20 mb-0 fnt-700 clr-yel-92a mt-5 design__p">Designathon 2023 is here!</p>
                <h2 class="fnt-800 fnt-50  mb-3 mb-lg-4 col-12 col-md-10 col-lg-9 px-0 design23-head">Bigger<span class=" clr-yel-92a">.</span> Grander<span class=" clr-yel-92a">.</span> crazier<span class=" clr-yel-92a">.</span></h2>
                <p class="col-lg-11 col-xxl-10 px-0 fnt-16 design-content-p">An in-person action packed design hackathon where students and aspiring designers are given a platform to experience real-life design problems and master the art of creating usable, viable, and empathetic design solutions while having a great deal of fun for 24 hours straight. </p>
              </div>
              <ul class="px-0 d-flex  athon-prize-list">
                <li class="athon-prize-list__item"> 
                  <p class="fnt-20 mb-0 fnt-400 clr-yel-92a ">Date</p>
                  <h6 class="fnt-700 fnt-24 mb-0">28 - 29th April</h6>
                </li>
                <li class="athon-prize-list__item"> 
                  <p class="fnt-20 mb-0 fnt-400 clr-yel-92a ">Duration</p>
                  <h6 class="fnt-700 fnt-24 mb-0">24 Hours</h6>
                </li>
                <li class="athon-prize-list__item"> 
                  <p class="fnt-20 mb-0 fnt-400 clr-yel-92a ">Designers</p>
                  <h6 class="fnt-700 fnt-24  mb-0">150+ Participants</h6>
                </li>
              </ul>
            </div>
            <img class="img-fluid mb-5 banner-side-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon23/banner-right-img.png" alt="logo">
          </div>
        </div>
      </section>

      <!-- 02 -->

      <section class="design-cities-hacks">
        <div class="container">
            <div class="hack-Cities row">
               <div class="col-12 col-md-12 col-lg-12 mx-auto">
                  <h2 class="our-sponser">The hack is back in 3 cities now!</h2>
                  <div class="d-md-flex d-block">
                    <div class="col-md-4">
                      <figure class="imgBdr">
                          <img class=" img-fluid slide" src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon23/bng.svg" alt="bangaluru">
                        </figure> 
                    </div>
                    <div class="col-md-4">
                    <figure class="imgBdr">
                        <img  class=" img-fluid slide" src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon23/hyd.svg" alt="hyderabad">
                      </figure>
                    </div>
                    <div class="col-md-4">
                    <figure class="imgBdr">
                        <img  class=" img-fluid slide" src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon23/chennai.svg" alt="hyderabad">
                      </figure>
                    </div>
                  </div>
                </div>
            </div>
        </div>
      </section>

      <!-- why participants slick -->
      <section>
        <div class="container">
           <div class="row">
             <div class="col-md-12 col-12">
             <div class="slick-img position-relative">
              <img class="img-fluid d-none d-md-block m-auto" src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon23/slick-bg.svg" alt="logo">
              <img class="img-fluid d-block d-md-none m-auto" src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon23/slick-bg-mobile.svg" alt="logo">
                <div class="why-txt">
                    <h2>Why Participate?</h2>
                  <div class="one">
                        <div>
                             <p class="one-slide">Collaborate and network with <br>budding <span class="clr-yel-92a">designers</span> from across the <br> country!</p>
                        </div>
                        <div>
                             <p>Get mentored by <span class="clr-yel-92a"> top industry </span> <br> pioneers!</p>
                        </div>
                        <div>
                             <p>Win cash prizes of up to <br> <span class="clr-yel-92a"> Rs. 2,00,000 </span> </p>
                        </div>
                  </div>
                   <div class="text-center register-btn"> 
                   <!-- href="https://docs.google.com/forms/d/e/1FAIpQLSdhHLKU1rsZ0tFOcvsT2l6BVtDNUF2WXz59m23aUFIhBmJyBg/viewform" -->
                   <a target="_blank" class="btn-red register-red-btn" >Registrations Closed  <img class="img-fluid white_arrow" src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon23/arrow.png" alt="arrow"></a>
                   </div>
                </div>
             </div>
           </div>
       </div>
     </section>
         
      <!-- event details -->
       <section class="event-Details">
        <img class="position-absolute d-none d-md-block img-fluid" style="left:0%; top: 30%;" src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon23/event-side.svg" alt="">
        <div class="container">
          <div class="col-12 col-md-12 col-lg-8 mx-auto">
          <div class="row">
            <div class="col-md-4">
              <h2>Event Details</h2>
            </div>
            <div class="col-md-8 event-details-content">
              <div class="register-process mb-4 mb-md-5">
                <h4>Registration Process</h4>
                 <p>Registration starts on 4th April & closes on <span>9th April. </span> Since we have limited seats, there will be a selection process, and if you’re selected, you will receive an email confirming your selection!</p>
              </div>
              <div class="register-process mb-4 mb-md-5">
                <h4>Date and Time</h4>
                <p>Designathon will take place on from <span>28th-29th April, 2023.</span> The duration of the event is 24 hours.</p>
              </div>
              <div class="register-process mb-4 mb-md-5">
                <h4>Location Preference </h4>
                <p>During the registration process, choose the city you want to participate in, and we'll do our best to fit you there. If all available seats in your preferred city are filled, we will accommodate you in your next preferred location. You will receive all the information confirming which city you will be participating in the same email. </p>
              </div>
              <div class="register-process mb-4 mb-md-5">
                <h4>Team Allocation</h4>
                <p>You will be allotted your team and the problem statement on the 28th of April, the same day you arrive at the venue.</p>
              </div>
              <div class="register-process mb-4 mb-md-5">
                <h4>Awards</h4>
                  <p>The award ceremony will take place after the final presentation to the jury members, on 29th April.</p>
              </div>

              <label class="mt-4">So what are you waiting for?</label>
              <div>
                <a target="_blank" class="btn-red register-red-btn">Registrations Closed  <img class="img-fluid white_arrow" src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon23/arrow.png" alt="arrow"></a>
              </div>
            </div>
            </div>
          </div>
        </div>
      </section>

      <!-- vedio -->

      <section class="last-Design">
        <div class="container">
          <div class="text-center col-12 col-md-11 col-lg-9 col-xl-10 mx-auto">
            <h2>Here is a sneak peak of Designathon’22</h2>
            <a href="https://youtu.be/2ZO_TVnvTBI" data-fancybox>
              <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon23/vedio-design-logo.webp" alt="video">
            </a>
          </div>
        </div>
      </section>
     

      <!-- pdf -->
      <section class="sec-participate-23">
        <div class="container"> 
          <div class="row mx-auto"> 
            <div class="col-12 col-md-11 col-lg-9 col-xl-9 mx-auto">
              <div class=" pt-md-5 data-scroll" style="background: #1718AD;opacity: 1; transform: translateY(0px); position: relative;padding-bottom:65px;">
                <div class="d-flex align-items-center justify-content-center">
                  <div class="col-12 col-md-8 col-lg-7 px-0 d-inline-block clr-white text-center" style="position: relative;z-index: 100;"> 
                    <div class="mb-45"><span class="d-block fnt-20 mb-5 pb-2 mb-md-4 pb-md-0 mt-2 keen-head">Keen to know more?</span>
                      <h2 class="fnt-40 fnt-800  mb-0 clr-yel-92a">Rules and regulations</h2>
                      <h2 class="fnt-40 fnt-800 clr-yel-92a">to get you started </h2>
		               </div>
                  <div class="download-btn-container">
                     <div class="download-btn">
                        <a href="https://lollypop.design/wp-content/uploads/2023/04/Designathon-23_-Rules-Regs_compressed.pdf" target="_blank" class="btn-red" style="background: #1718AD;margin: 0;">Download PDF <img class="img-fluid white_arrow" src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon23/down-arrow.svg" alt="arrow"></a>
                     </div>
                 </div>
                </div>
                </div>
                <img class="img-fluid" style="position: absolute;bottom: 0;" src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon23/why-p-dots.svg" alt="dots">
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- sponsers -->

      <section class="sec-pd-designathon2 pt-5 pb-5">
        <div class="container">
          <div class="row justify-content-center">
              <h3 class="fnt-50 fnt-800 pb-md-4 clr-yel-92a text-center mb-5 our-sponser">Our Sponsors</h3>	  
                    <div class="sponsor-img mb-5 mx-auto">
                      <div class="col-12 col-md-11 col-lg-9 col-xl-9 mx-auto d-flex sponsor-sec">
                          <div class="col-md-3">
                            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon23/In-app use.png" alt="Image">
                          </div>
                          <div class="col-md-10 mx-md-5">
                            <p style="color: rgba(255, 255, 255, 0.7)!important;">Upstox is one of India's biggest digital investment platforms, with a mission of making financial investing simple, equitable, and accessible to everyone. Upstox transforms the digital brokerage market with cutting-edge technological innovations, empowering Indians to engage comfortably in the equity market and create generational wealth through the power of compounding. The tech-enabled platform equips investors with an easy-to-use interface, handpicked market insights, and a wide range of investment choices. Today, Upstox is one of India's largest digital investing platforms, boasting over 10 million customers and unicorn status.</p>
                          </div>
                      </div>
                    </div> 
                    <div class="sponsor-img mx-auto">
                    <div class="d-flex col-12 col-md-11 col-lg-9 col-xl-9 mx-auto  sponsor-sec">
                      <div class="col-md-3">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon23/cred.svg" alt="Image">
                      </div>
                        <div class="col-md-10 mx-md-5">
                             <p style="color: rgba(255, 255, 255, 0.7)!important;">Introducing Prefr(originally Creditvidya) an embedded lending-as-a-service platform that utilizes AI-driven underwriting to provide accessible unsecured loans for underserved customers. With a decade of experience in credit scoring, Prefr empowers internet platforms to acquire, engage, and monetize users, while partnering with lenders to expand their reach at a marginal cost. Together, they are bridging the financial gap for those earning under 50k and driving the future of inclusive lending.</p>
                          </div>
                      </div>
                    </div> 
                </div>
             </div>
          </div>
        </div>
      </section>

     <!-- faq -->
     <section class="sec-pd-designathonfaq pt-2 pb-0 position-relative">
        <div class="container"> 
          <div class="row"> 
            <div class="col-12 col-md-10 col-lg-10 col-xl-9 mx-auto">
              <div class="d-athon-mision row mb-5 mb-md-0 justify-content-center">
              </div>
              <div class="faq-el faq-el--athon" style="background: #1718AD;">
                <div class="faq-el__head mb-40"><span class="d-block clr-white fnt-700">Frequently asked questions</span>
                  <h2 class="fnt-50 fnt-800 col-md-6 col-lg-7 px-0 mb-0 clr-yel-92a mb-5">When in doubt, always ask</h2>
                </div>
                <div class="faq-el__body"> 
                  <ul class="px-0 mb-0 faq-ac row justify-content-between">
                    <li class="faq-ac__item col-12">
                      <div class="f-accordion">
                        <div class="f-accordion__head">
                          <h6 class="fnt-16 fnt-800 mb-0">Is this an online or in-house Event?</h6>
                        </div>
                        <div class="f-accordion__body"> 
                          <p class="fnt-18 mb-0" style="color: rgba(255, 255, 255, 0.7)  !important;">Being an in-house event at our studios in Bengaluru, Hyderabad, and Chennai, Designathon 2023 is back with a bang!
                            </p>
                        </div>
                      </div>
                    </li>
                    <li class="faq-ac__item col-12">
                      <div class="f-accordion">
                        <div class="f-accordion__head">
                          <h6 class="fnt-16 fnt-800 mb-0">What is the Eligibility Criteria?</h6>
                        </div>
                        <div class="f-accordion__body"> 
                          <p class="fnt-18 mb-0" style="color: rgba(255, 255, 255, 0.7)  !important;">To participate in the competition, you must be a design student at any stage of your university career, from undergraduate to postgraduate studies, with not more than 1-year of experience in the same.</p>
                        </div>
                      </div>
                    </li>
                    <li class="faq-ac__item col-12">
                      <div class="f-accordion">
                        <div class="f-accordion__head">
                          <h6 class="fnt-16 fnt-800 mb-0">When and where will Designathon be conducted?</h6>
                        </div>
                        <div class="f-accordion__body"> 
                          <p class="fnt-18 mb-0" style="color: rgba(255, 255, 255, 0.7)  !important;">Designathon is a 24-hour-in-person Design Hackathon scheduled on 28th April at our studios in Hyderabad, Bengaluru, and Chennai.</p>
                        </div>
                      </div>
                    </li>
                    <li class="faq-ac__item col-12">
                      <div class="f-accordion">
                        <div class="f-accordion__head">
                          <h6 class="fnt-16 fnt-800 mb-0">I am from a non-design background but would like to participate, can I?</h6>
                        </div>
                        <div class="f-accordion__body"> 
                          <p class="fnt-18 mb-0" style="color: rgba(255, 255, 255, 0.7) !important;">This competition is open for Design students & professionals only.</p>
                        </div>
                      </div>
                    </li>
                    <li class="faq-ac__item col-12">
                      <div class="f-accordion">
                        <div class="f-accordion__head">
                          <h6 class="fnt-16 fnt-800 mb-0">Are students living outside India eligible to participate in this competition?</h6>
                        </div>
                        <div class="f-accordion__body"> 
                          <p class="fnt-18 mb-0" style="color: rgba(255, 255, 255, 0.7)  !important;">Yes, you are eligible. Your nationality doesn't matter as long as you are a design student.</p>
                        </div>
                      </div>
                    </li>
                    <li class="faq-ac__item col-12">
                      <div class="f-accordion">
                        <div class="f-accordion__head">
                          <h6 class="fnt-16 fnt-800 mb-0">Will travel and accommodation compensation be provided?</h6>
                        </div>
                        <div class="f-accordion__body"> 
                          <p class="fnt-18 mb-0" style="color: rgba(255, 255, 255, 0.7) !important;">You will have to reach our studio in Hyderabad, Bengaluru, and Chennai at your own expense, after that, we will take care of everything.</p>
                        </div>
                      </div>
                    </li>
                    <li class="faq-ac__item col-12">
                      <div class="f-accordion">
                        <div class="f-accordion__head">
                          <h6 class="fnt-16 fnt-800 mb-0">What is the process for Registration?</h6>
                        </div>
                        <div class="f-accordion__body"> 
                          <p class="fnt-18 mb-0" style="color: rgba(255, 255, 255, 0.7)  !important;">You need to fill out the form which is listed on this page. Click on Register Now button.</p>
                        </div>
                      </div>
                    </li>
                    <li class="faq-ac__item col-12">
                      <div class="f-accordion">
                        <div class="f-accordion__head">
                          <h6 class="fnt-16 fnt-800 mb-0">Do we have to pay to participate in the competition?</h6>
                        </div>
                        <div class="f-accordion__body"> 
                          <p class="fnt-18 mb-0" style="color: rgba(255, 255, 255, 0.7) !important;">No. Designathon 2023 is free for all.</p>
                        </div>
                      </div>
                    </li>
                    <li class="faq-ac__item col-12">
                      <div class="f-accordion">
                        <div class="f-accordion__head">
                          <h6 class="fnt-16 fnt-800 mb-0">What is the last date for Registration?</h6>
                        </div>
                        <div class="f-accordion__body"> 
                          <p class="fnt-18 mb-0" style="color: rgba(255, 255, 255, 0.7)  !important;">The last date for registration is at 6 PM, 9th April.</p>
                        </div>
                      </div>
                    </li>
                    <li class="faq-ac__item col-12">
                      <div class="f-accordion">
                        <div class="f-accordion__head">
                          <h6 class="fnt-16 fnt-800 mb-0">Are we allowed to form our teams?</h6>
                        </div>
                        <div class="f-accordion__body"> 
                          <p class="fnt-18 mb-0" style="color: rgba(255, 255, 255, 0.7)  !important;">No, you are required to register as an individual, and you will be allocated your team on the day of the event.</p>
                        </div>
                      </div>
                    </li>
                    <li class="faq-ac__item col-12">
                      <div class="f-accordion">
                        <div class="f-accordion__head">
                          <h6 class="fnt-16 fnt-800 mb-0">Will the required resources be provided to the participants?</h6>
                        </div>
                        <div class="f-accordion__body"> 
                          <p class="fnt-18 mb-0" style="color: rgba(255, 255, 255, 0.7) !important;">Participants have to carry their laptops with all the necessary design tools installed. You'll be provided with the required stationery and internet connectivity for the competition by the Lollypop team.</p>
                        </div>
                      </div>
                    </li>
                    <li class="faq-ac__item col-12">
                      <div class="f-accordion">
                        <div class="f-accordion__head">
                          <h6 class="fnt-16 fnt-800 mb-0">Will there be any particular format in which we need to submit our designs?</h6>
                        </div>
                        <div class="f-accordion__body"> 
                          <p class="fnt-18 mb-0" style="color: rgba(255, 255, 255, 0.7)  !important;">Yes, you will be expected to submit your designs in a specified format. The format will be explained to you before the start of the event.</p>
                        </div>
                      </div>
                    </li>
                    <li class="faq-ac__item col-12">
                      <div class="f-accordion">
                        <div class="f-accordion__head">
                          <h6 class="fnt-16 fnt-800 mb-0">Do we have any prize money for the Designathon winner team?</h6>
                        </div>
                        <div class="f-accordion__body"> 
                          <p class="fnt-18 mb-0" style="color: rgba(255, 255, 255, 0.7)  !important;">The winning teams will get super exciting cash prizes!</p>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <img class="img-fluid footer-slide-img  position-absolute" style="width:320px; bottom:0rem;" src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon23/faq-slide.svg" alt="logo" >
        <img class="img-fluid position-relative" style=" width:100%;" src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon23/faq-Bottom-dots.svg" alt="logo">
    </section>
     
</main>

<?php
get_footer('designathon23');
?>

<script src="<?php echo get_template_directory_uri(); ?>/js/athon23.js"></script>
