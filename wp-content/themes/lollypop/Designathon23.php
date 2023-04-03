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
.our-sponser:before{content:'';position:absolute;width: 141px;height: 104px;left:33%;background-image:url("<?php echo get_template_directory_uri(); ?>/assets/images/designathon23/upsrok-slide-lines.svg") !important;background-repeat:no-repeat;background-size:contain;z-index: -1;}

/*designathon23-css-mithun-bl*/
.event-Details {padding: 180px 0;}
.event-Details .details-width{width: 100%;max-width:765px;margin: 0 auto;}
.event-Details h2{font-size: 48px;font-weight: 800;line-height: 1;color: #FF3500;position: relative;z-index: 0;}
.event-Details h2::before{content:'';position:absolute;width: 141px;height: 104px;top: -5px;left:-27px;background-image:url("<?php echo get_template_directory_uri(); ?>/assets/images/designathon23/red-event-dots.svg");background-repeat:no-repeat;background-size:contain;z-index: -1;}
.event-Details .register-process h4{font-size: 24px;font-weight: 700;line-height: 1.2;color: #FFFFFF;}
.event-Details .register-process p{font-weight: 400;line-height: 1.45;color: rgba(255, 255, 255, 0.7) !important;width: 100%;max-width:446px ;}
.event-Details .register-process span{font-weight: 700;color:#fff !important;}
.event-Details label{font-size: 20px;font-weight:700;color: #FF3500;line-height:1}
.btn-red{display: inline-block;text-decoration: none;padding: 12px 36px;background: #FF3500;font-size: 18px;font-weight: 700;color: #FFFFFF;margin: 8px 0 0 0;position: relative;line-height:1.0;height: 50px;clip-path: polygon(8% 0%, 100% 0%, 100% 0%, 100% 75%, 92% 100%, 0 100%, 0 100%, 0 25%);}
.btn-red:hover{color:#fff;}
.design-cities-hacks{padding:130px 0 60px 0;}
.design-cities-hacks h2{font-size: 48px;font-weight: 800;line-height: 1;color: #FF3500;position: relative;margin-bottom:82px;z-index: 0;}
.design-cities-hacks h2:before{content:'';position:absolute;width: 141px;height: 67px;top: -7px;left:-31px;background-repeat:no-repeat;background-size:cover;z-index: -1;}
.hack-Cities{width: 100%;max-width:931px; margin:0 auto;}
.imgBdr{border: 1px solid #FF3500;margin-right: 30px}
    figure .slide:hover {-webkit-transition: all 700ms cubic-bezier(.25, .46, .45, .94);
    transition: all 700ms cubic-bezier(.25, .46, .45, .94); transform: translate(0rem, -0rem);}
figure .slide{-webkit-transform: translate(-1.1rem, -1.0rem);
    -ms-transform: translate(-1.1rem, -1.0rem);
    transform: translate(1.1rem, -1.0rem); transition: all 700ms cubic-bezier(.25, .46, .45, .94);}
.last-Design{padding: 50px 0 100px 0;}
.last-Design{padding: 50px 0 100px 0;}
.last-Design h2{font-size: 48px;font-weight: 800;line-height: 1;color: #FF3500;width: 100%;max-width:676px;margin: 0 auto 40px;}
.btn-red .white_arrow{display:none;}
.btn-red:hover .white_arrow{display: inline-block;padding-left:10px;}


@media(max-width: 767px){
  .event-Details{padding: 90px 0 72px 0;}
.event-Details h2{font-size:24px;line-height:1.0;margin-bottom:36px;}
.event-Details h2::before{width: 95px; height: 48px;top: -10px;background-size:inherit;}
.event-Details .register-process p{max-width:100%;}
.event-Details .register-process h4{font-size:20px;}
.event-Details label{font-size:14px;margin-top:20px;}
.btn-red{font-size:14px;line-height:19px;height:43px;}
.design-cities-hacks{padding: 0px 0;}
.design-cities-hacks h2{font-size:24px;width:100%;max-width:201px;margin-bottom:35px ;}
.design-cities-hacks h2:before{width:95px;max-width:69px;}
.imgBdr{margin-right: 0px;margin-bottom:34px ;}
.last-Design{padding: 0px 0 72px 0;}
.last-Design h2{font-size:24px;max-width:323px;}
}

/*designathon23-css-mithun-bl*/




@media(max-width: 768px){
.faq-el--athon{
margin-top: -70px;
}
/* design */
.design-logo{
   width:100px !important;
}
.banner-side-img{
   width:136px !important;
   height:233px !important;

}
.design23-head{
  font-size: 20px !important;
line-height: 130% !important;
font-weight:700 !important;
}
.design__p{

}
.athon-prize-list__item h6{
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

.our-sponser:before {
    content: '';
    position: absolute;
    width: 95px;
    height: 48px;
    top: -4px;
    left: 21%;
}
.footer-slide-img{
margin-left: -20px !important;
width: 80px !important;
}
.sponsor-img__item-content {
    margin-top: 100px;
  }

  .why-txt p{
  
font-size: 14px !important;
margin-top:0rem !important;
}
.why-txt{
  
  margin-top: -16rem !important;
    margin-left: -3% !important;
    text-align: center;
}
.register-btn a{
  margin-top:0px !important;
}
.one-slide br{
  display:none !important;
}
}

/* designathon */
.footer {
  background: #191919 !important;
}
.ft-social-links__item a, .footer p{
  color: #FFFFFF !important;
}
.banner-designathon23{
   background-image:url("<?php echo get_template_directory_uri(); ?>/assets/images/designathon23/banner-top-dots.png");
   background-repeat: no-repeat;
    top: -21px;
    left: 11px;
}
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
    top: 0;
    position: absolute;
    right: 0;
 }
 .design-content-p{
  max-width:600px;
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
   padding-bottom:150px;
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
  margin-bottom:4rem !important;
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
text-transform: capitalize;
color: #0D0EA3 !important;
  }
  .why-txt{
    
    margin-top: -28rem !important;
      margin-left: -5% !important;
      text-align: center;
  }

.register-btn a{
  margin-top:65px;
}

</style>

<main class="main">
  <!-- 01 -->
      <section class="sec-pd-designathon pt-lg-5  pb-2 position-relative banner-designathon23">
        <div class="container">
          <div class="row"> 
            <div class="col-12 col-md-12 col-lg-12 mx-auto mt-5">
               <img class="img-fluid mb-5 design-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon23/Frame1171278150.svg" alt="logo">
              <div class="col-md-10 px-0">
                 <p class="fnt-20 mb-0 fnt-700 clr-yel-92a mt-5 design__p">Designathon 2023 is here!</p>
                <h2 class="fnt-800 fnt-50  mb-3 mb-lg-4 col-12 col-md-10 col-lg-9 px-0 design23-head">Bigger<span class=" clr-yel-92a">.</span> Grander<span class=" clr-yel-92a">.</span> crazier<span class=" clr-yel-92a">.</span></h2>
                <p class="col-lg-11 col-xxl-10 px-0 fnt-16 design-content-p">An in-person action packed design hackathon where students and aspiring designers are given a platform to experience real-life design problems and master the art of creating usable, viable, and empathetic design solutions while having a great deal of fun for 24 hours straight. </p>
              </div>
              <ul class="px-0 d-flex flex-wrap athon-prize-list">
                <li class="athon-prize-list__item"> 
                  <p class="fnt-20 mb-0 fnt-400 clr-yel-92a ">Date</p>
                  <h6 class="fnt-700 fnt-24 mb-0">28 - 29th April</h6>
                </li>
                <li class="athon-prize-list__item"> 
                  <p class="fnt-20 mb-0 fnt-400 clr-yel-92a ">Duration</p>
                  <h6 class="fnt-700 fnt-24 mb-0">24 hours</h6>
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
            <div class="hack-Cities">
              <h2 class="our-sponser">The hack is back in 2 cities now!</h2>
              <div class="d-md-flex d-block">
                  <figure class="imgBdr">
                    <img class=" img-fluid slide" src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon23/bng.svg" alt="bangaluru">
                  </figure> 
                  <figure class="imgBdr">
                    <img  class=" img-fluid slide" src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon23/hyd.svg" alt="hyderabad">
                  </figure>
                  <figure class="imgBdr">
                    <img  class=" img-fluid slide" src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon23/chennai.svg" alt="hyderabad">
                  </figure>
             </div>
            </div>
        </div>
      </section>

      <!-- why participants slick -->
      <section>
        <div class="container">
           <div class="slick-img position-relative">
              <img class="img-fluid d-none d-md-block" src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon23/slick-bg.svg" alt="logo">
              <img class="img-fluid d-block d-md-none" src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon23/slick-bg-mobile.svg" alt="logo">
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
                   <a href="#" class="btn-red" >Register Now  <img class="img-fluid white_arrow" src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon23/arrow.png" alt="arrow"></a>
                   </div>
                </div>

      <!-- <section class="sec-pd-designathonposition-relative sec-athon-text-bg">
        <div class="container"> 
          <div class="row"> 
                <div class="lines-img-top">
                   <img class="img-fluid" style="width:194px;" src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon23/why-p-top-lines.svg" alt="logo">
                 </div>
              <div class="col-12 col-md-10 col-lg-10 mx-auto clr-gray p-0 ">
              <ul class="px-0 participate-slider dots-red dots-red--wide mb-0 clr-gray pb-0">
                <li class="participate-slider__item text-center clr-gray">
                  <div class="col-md-10 px-0 text-center mx-auto">
                    <p class=" clr-yel-92a fnt-20 mb-3 mb-md-4 fnt-800">Why Participate?</p>
                    <p class="clr-blue fnt-40 mb-0 fnt-20  px-0 mx-auto fnt-800 slider-content" style="max-width:736px; margin-top:91px;">Collaborate and network with budding <span class="clr-yel-92a">designers</span> from across the country!</p>
                  </div>
                  <a href="#" class="btn-red" style="margin-top:65px;">Register Now  <img class="img-fluid white_arrow" src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon23/arrow.png" alt="arrow"></a>
                  <img class="img-fluid dots-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon23/why-p-dots.svg" alt="dots">
                </li>
                <li class="participate-slider__item text-center clr-gray">
                  <div class="col-md-8 px-0 text-center mx-auto">
                    <p class=" clr-yel-92a fnt-20 mb-3 mb-md-4 fnt-800">Why Participate?</p>
                    <p class="clr-blue fnt-40 mb-0 fnt-20  px-0 mx-auto fnt-800 slider-content" style="max-width:736px; margin-top:91px;">Get mentored by top industry <span class="clr-yel-92a">top industry</span> pioneers!</p>
                  </div>
                  <a href="#" class="btn-red" style="margin-top:65px;">Register Now  <img class="img-fluid white_arrow" src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon23/arrow.png" alt="arrow"></a>
                  <img class="img-fluid dots-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon23/why-p-dots.svg" alt="dots">
                </li>
                <li class="participate-slider__item text-center clr-gray">
                  <div class="col-md-6 px-0 text-center mx-auto">
                    <p class="clr-yel-92a  fnt-20 mb-3 mb-md-4 fnt-800">Why Participate?</p>
                    <p class="clr-blue fnt-40 mb-0 fnt-20  px-0 mx-auto fnt-800 slider-content" style="max-width:736px; margin-top:91px;">Win cash prizes of up to <span class="clr-yel-92a">Rs. 2,00,000</span></p>
                  </div>
                  <a href="#" class="btn-red" style="margin-top:65px;">Register Now  <img class="img-fluid white_arrow" src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon23/arrow.png" alt="arrow"></a>
                  <img class="img-fluid dots-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon23/why-p-dots.svg" alt="dots">
                </li>
              </ul>
            </div>
            <div class="lines-imgs-bottom">
                   <img class="img-fluid" style="width:194px;" src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon23/why-p-bot-lines.svg" alt="logo">
             </div>
          </div>
        </div>
      </section> -->

      <!-- event details -->
       <section class="event-Details position-relative">
        <img class="position-absolute d-none d-md-block img-fluid" style="left:-9%; top: 25%;" src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon23/event-side.svg" alt="">
        <div class="container">
          <div class="details-width">
          <div class="row">
            <div class="col-md-4">
              <h2>Event Details</h2>
            </div>
            <div class="col-md-8">
              <div class="register-process mb-4 mb-md-5">
                <h4>Registration Process</h4>
                <p>Registration starts on 30th March & closes on <span> 5th April .</span>
                Since we have limited seats, there will be a selection process, and if you’re selected, you will receive an email confirming your selection!</p>
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
                <p>The Award Ceremony will take place after the final presentation to the jury members, on 29th April. </p>
              </div>

              <label>So what are you waiting for?</label>
              <div>
                <a href="#" class="btn-red">Register Now  <img class="img-fluid white_arrow" src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon23/arrow.png" alt="arrow"></a>
               
              </div>
            </div>
            </div>
          </div>
        </div>
      </section>

      <!-- vedio -->

      <section class="last-Design">
        <div class="container">
          <div class="text-center">
            <h2>In the meantime enjoy last year Designathon’22</h2>
            <a href="https://youtu.be/2ZO_TVnvTBI" data-fancybox>
              <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon23/lollypop-design-video.svg" alt="video">
            </a>
          </div>
        </div>
      </section>
     

      <!-- pdf -->
      <section class="sec-participate-23">
        <div class="container"> 
          <div class="row"> 
            <div class="col-12 col-md-11 col-lg-9 col-xl-10 mx-auto">
              <div class=" pt-md-5 px-3 data-scroll" style="background: #1718AD;opacity: 1; transform: translateY(0px);">
                <div class="d-flex align-items-center justify-content-center">
                  <div class="col-12 col-md-8 col-lg-7 px-0 d-inline-block clr-white text-center"> 
                    <div class="mb-45"><span class="d-block fnt-20 mb-5 pb-2 mb-md-4 pb-md-0 mt-2" style="margin-bottom:70px !important;">Keen to know more?</span>
                      <h2 class="fnt-40 fnt-800  mb-0 clr-yel-92a" style="text-transform: capitalize;">Rules and regulations</h2>
                      <h2 class="fnt-40 fnt-800 clr-yel-92a" style="text-transform: capitalize;">to get you started </h2>
		               </div>
                  <div>
                  <a href="#" class="btn-red" style="background: #1718AD;border: 1px solid #FFFFFF;">Download PDF <img class="img-fluid white_arrow" src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon23/arrow.png" alt="arrow"></a>
                 </div>
                </div>
                </div>
                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon23/why-p-dots.svg" alt="dots">
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- sponsers -->

      <section class="sec-pd-designathon2 pt-5 pb-5">
        <div class="container">
          <div class="row">
              <h3 class="fnt-50 fnt-800 mb-0 clr-yel-92a text-center mb-5 our-sponser">Our Sponsor</h3>	  
                    <div class=" row sponsor-img">
                      <div class="col-md-5">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon23/In-app use.png" alt="Image">
                      </div>
                        <div class="col-md-7">
                             <p style="color: rgba(255, 255, 255, 0.7)!important;">Upstox is one of India's biggest digital investment platforms, with a mission of making financial investing simple, equitable, and accessible to everyone. Upstox transforms the digital brokerage market with cutting-edge technological innovations, empowering Indians to engage comfortably in the equity market and create generational wealth through the power of compounding. The tech-enabled platform equips investors with an easy-to-use interface, handpicked market insights, and a wide range of investment choices. Today, Upstox is one of India's largest digital investing platforms, boasting over 10 million customers and unicorn status.</p>
                          </div>
                    </div> 
                    <div class=" row sponsor-img">
                      <div class="col-md-5">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon23/cred.svg" alt="Image">
                      </div>
                        <div class="col-md-7">
                             <p style="color: rgba(255, 255, 255, 0.7)!important;">CreditVidya is India's industry leader in alternative credit scoring space in India. They deploy artificial intelligence (AI), machine learning, and alternative data to facilitate institutional credit for marginalized populations. Their products are helping a large section of the salaried and self-employed population become visible to lenders, by making it financially viable for banks and NBFC's to underwrite customers for much smaller unsecured loans. They are dedicated to their mission of making affordable credit accessible to more than 3 billion under-served people, and over 55 leading banks and NBFCs rely on their products to manage the credit cycle end-to-end.</p>

                          </div>
                    </div> 
                </div>
             </div>
          </div>
        </div>
      </section>

     <!-- faq -->
     <section class="sec-pd-designathon2 pt-2 pb-0">
        <div class="container"> 
          <div class="row"> 
            <div class="col-12 col-md-10 col-lg-10 col-xl-9 mx-auto">
              <div class="d-athon-mision row mb-5 mb-md-0 justify-content-center">
                <!-- <div class="d-athon-mision__item col-12 col-md-11">
                  <div class="mb-4 d-inline-block mx-auto">
                    <h3 class="fnt-50 fnt-800 mb-0 clr-yel-92a text-center our-sponser position-relative">Our Sponsor</h3>	  
                    <div class="text-center sponsor-img">
                      <div class="sponsor-img__item mt-5">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon23/In-app use.png" alt="Image">
                      </div>
                        <div class="sponsor-img__item-content">
                             <p>Upstox is one of India's biggest digital investment platforms, with a mission of making financial investing simple, equitable, and accessible to everyone. Upstox transforms the digital brokerage market with cutting-edge technological innovations, empowering Indians to engage comfortably in the equity market and create generational wealth through the power of compounding. The tech-enabled platform equips investors with an easy-to-use interface, handpicked market insights, and a wide range of investment choices. Today, Upstox is one of India's largest digital investing platforms, boasting over 10 million customers and unicorn status.</p>
                          </div>
                    </div> 
                </div> -->
              </div>
              <div class="faq-el faq-el--athon" style="background: #1718AD;">
                <div class="faq-el__head mb-40"><span class="d-block clr-white fnt-700">Frequently asked questions</span>
                  <h2 class="fnt-50 fnt-800 col-md-6 col-lg-6 px-0 mb-0 clr-yel-92a mb-5">When in doubt, always ask</h2>
                </div>
                <div class="faq-el__body"> 
                  <ul class="px-0 mb-0 faq-ac row justify-content-between">
                    <li class="faq-ac__item col-12">
                      <div class="f-accordion">
                        <div class="f-accordion__head">
                          <h6 class="fnt-16 fnt-800 mb-0">Is this an online or in-house Event?</h6>
                        </div>
                        <div class="f-accordion__body"> 
                          <p class="fnt-18 mb-0" style="color: rgba(255, 255, 255, 0.7)  !important;">Being an in-house event, Designathon 2022 is back with a bang!</p>
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
                          <p class="fnt-18 mb-0" style="color: rgba(255, 255, 255, 0.7)  !important;">Designathon is a 24-hour-in-person Design Hackathon scheduled on 22nd April at Lollypop Design Studio, Bangalore.</p>
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
                          <p class="fnt-18 mb-0" style="color: rgba(255, 255, 255, 0.7) !important;">You will have to reach our studio in Bangalore at your own expense, after that, we will take care of everything.</p>
                        </div>
                      </div>
                    </li>
                    <li class="faq-ac__item col-12">
                      <div class="f-accordion">
                        <div class="f-accordion__head">
                          <h6 class="fnt-16 fnt-800 mb-0">What is the process for Registration?</h6>
                        </div>
                        <div class="f-accordion__body"> 
                          <p class="fnt-18 mb-0" style="color: rgba(255, 255, 255, 0.7)  !important;">You need to fill out the form which is listed on this page. Click on Register now button.</p>
                        </div>
                      </div>
                    </li>
                    <li class="faq-ac__item col-12">
                      <div class="f-accordion">
                        <div class="f-accordion__head">
                          <h6 class="fnt-16 fnt-800 mb-0">Do we have to pay to participate in the competition?</h6>
                        </div>
                        <div class="f-accordion__body"> 
                          <p class="fnt-18 mb-0" style="color: rgba(255, 255, 255, 0.7) !important;">No. Designathon 2022 is free for all.</p>
                        </div>
                      </div>
                    </li>
                    <li class="faq-ac__item col-12">
                      <div class="f-accordion">
                        <div class="f-accordion__head">
                          <h6 class="fnt-16 fnt-800 mb-0">What is the last date for Registration?</h6>
                        </div>
                        <div class="f-accordion__body"> 
                          <p class="fnt-18 mb-0" style="color: rgba(255, 255, 255, 0.7)  !important;">The last date of registration is 5th April.</p>
                        </div>
                      </div>
                    </li>
                    <li class="faq-ac__item col-12">
                      <div class="f-accordion">
                        <div class="f-accordion__head">
                          <h6 class="fnt-16 fnt-800 mb-0">Are we allowed to form our teams?</h6>
                        </div>
                        <div class="f-accordion__body"> 
                          <p class="fnt-18 mb-0" style="color: rgba(255, 255, 255, 0.7)  !important;">No, you are required to register as an individual, and you will be allocated into teams on the day of the event.</p>
                        </div>
                      </div>
                    </li>
                    <li class="faq-ac__item col-12">
                      <div class="f-accordion">
                        <div class="f-accordion__head">
                          <h6 class="fnt-16 fnt-800 mb-0">Will the required resources are provided to the participants?</h6>
                        </div>
                        <div class="f-accordion__body"> 
                          <p class="fnt-18 mb-0" style="color: rgba(255, 255, 255, 0.7) !important;">Participants have to carry their Laptops with all the necessary design tools installed. You'll be provided with the required stationery for the competition by the Lollypop team.</p>
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
                          <p class="fnt-18 mb-0" style="color: rgba(255, 255, 255, 0.7) !important;">The Winning team will get a cash prize worth Rs 1,50,000 and Rs 50,000 for the runner-up team.</p>
                        </div>
                      </div>
                    </li>
                    <li class="faq-ac__item col-12">
                      <div class="f-accordion">
                        <div class="f-accordion__head">
                          <h6 class="fnt-16 fnt-800 mb-0">Do we have any prize money for the Designathon winner team?</h6>
                        </div>
                        <div class="f-accordion__body"> 
                          <p class="fnt-18 mb-0"style="color: rgba(255, 255, 255, 0.7) !important;" >The Winning team will get a cash prize worth Rs 1,50,000 and Rs 50,000 for the runner-up team.</p>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <img class="img-fluid footer-slide-img" style="margin-left: -98px; width:320px;" src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon23/faq-slide.svg" alt="logo">
        </div>
    </section>
     
</main>

<?php
get_footer('designathon23');
?>

<script src="<?php echo get_template_directory_uri(); ?>/js/athon.js"></script>
