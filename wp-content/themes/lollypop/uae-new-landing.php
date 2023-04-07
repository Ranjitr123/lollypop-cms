<?php
/**
 * * Template Name: USA Landing Locations new
 * *
 * * @package WordPress
 * */

get_header();
?>

<style>
.card-white-bg{
  background: #FFFFFF;
  padding:10px 18px 30px 25px;
  max-width:100%;
  
}
.sec-2{
  max-width:638px;
}
.card-white-bg p{
  font-family: 'Manrope';
  font-style: normal;
  font-weight: 400;
  font-size: 14px;
  line-height: 160%;
  display: flex;
  align-items: center;
  color: #221429;
}
.card-white-bg h6{
  font-family: 'Manrope';
  font-style: normal;
  font-weight: 800;
  font-size: 18px;
  line-height: 120%;
  letter-spacing: -0.02em;
  color: #221429;

}
.have-calss{
  padding-top:50px;
}

.arabic-slider figcaption{
  font-family: 'Manrope';
  font-style: normal;
  font-weight: 400;
  font-size: 24px;
  line-height: 36px;
  color: #FFFFFF;

}

.case-study-slider{
  background-repeat: no-repeat;
  width: 100%;
  height: 593px;
  position:relative;
  background-size: cover;
}
.case-study-slider-1{
  background-image:url("<?php echo get_template_directory_uri(); ?>/assets/images/uae-new-landing/emar.webp");
}
.case-study-slider-2{
  background-image:url("<?php echo get_template_directory_uri(); ?>/assets/images/uae-new-landing/rankbank.webp");
}
.case-study-slider-3{
  background-image:url("<?php echo get_template_directory_uri(); ?>/assets/images/uae-new-landing/turk.webp");
}
.case-study-slider span{
  font-family: 'Manrope';
  font-style: normal;
  font-weight: 800;
  font-size: 20px;
  line-height: 120%;
  display: flex;
  align-items: center;
  letter-spacing: -1px;
  color: #FFFFFF;
}
.case-study-slider h6{
  font-family: 'Manrope';
font-style: normal;
font-weight: 800;
font-size: 42px;
line-height: 120%;
display: flex;
align-items: center;
letter-spacing: -2px;
color: #FFFFFF;
}
.case-study-slider .hvr-line-re{
  font-family: 'Manrope';
font-style: normal;
font-weight: 400;
font-size: 20px;
line-height: 120%;
display: flex;
align-items: center;
text-decoration-line: underline;
color: #FFFFFF;
opacity: 0.7 !important;
cursor: pointer;
}
.case-study-slider .case-slider-content{
  position:absolute;
  bottom:8%;
  padding-left:36px;
  padding-right:37px;
}

.width-container{
  width: calc(100% - 45px);
  margin-left: 45px !important;
}

.arabic-slider img{
   width:100%;
}
 .slick-initialized .slick-slide {padding-left:19px !important; }

@media(max-width:767px){
   /* .arabic-slider{
    margin-right:1rem;
   } */
   .width-container {
    width: auto;
    margin-left:0px !important;
   }
   .arabic-slider figcaption {
     font-size:16px;
   }
   .case-study-slider{
    margin-right:1rem;
    width:auto;
   }
   .case-study-slider .case-slider-content
    {
    padding-left: 24px;
    padding-right: 24px;
  }  
  .case-study-slider h6 {font-size: 16px;line-height: 100%; letter-spacing: -1px;}
  .case-study-slider h6 br{display:none;}
  .case-study-slider span {font-size: 18px;}
  .case-study-slider .hvr-line-re {font-size: 14px;}
  .card-white-bg h6 {font-size:16px;}
}

@media screen and (min-width:768px) and (max-width:1023px){
  .card-white-bg{
      height:200px;
  }
  .card-bg-tab{
     margin-top:1.4rem;
  }
  .case-study-slider h6 {
    font-size: 32px;
    line-height: 100%;
    letter-spacing: -1px;
}

}


@media (min-width: 992px){
.logo-list__item img {
    max-width: 100%!important;
}}
@media (min-width: 992px){
.sec-pd1 {
    padding: 45px 0;
}}

</style>
<main class="main">
 
<!-- 01 -->
<section class="lp-index sec-pd pb-0" id="one">
   <div class="container">
      <div class="row">
         <div class="col-12 col-md-11 col-lg-10 mx-auto">
            <div class="row">
               <div class="col-12 col-md-11 offset-md-1">
                  <div class="mb-60">
                     <div class="mb-45 multi-line-text">
                        <h1 class="fnt-50 fnt-800 px-0 red-stroke red-stroke--small px-0"> The best UX/UI Design Services in the Middle East </h1>
                        <p class="fnt-24 col-md-10 col-lg-8">We are a leading UI/UX design agency in the Middle East working to enable companies transform their digital ecosystem.</p>
                     </div>
                     <ul class="lp-number-list ps-0">
                        <li class="lp-number-list__item">
                           <span class="fnt-18 fnt-800 lp-number-title">220+</span>
                           <p class="fnt-14">Creative minds</p>
                        </li>
                        <li class="lp-number-list__item">
                           <span class="fnt-18 fnt-800 lp-number-title">08</span>
                           <p class="fnt-14">Global locations</p>
                        </li>
                        <li class="lp-number-list__item">
                           <span class="fnt-18 fnt-800 lp-number-title">25+ </span>
                           <p class="fnt-14">Awards</p>
                        </li>
                     </ul>
                     <div class="hvr-line fnt-14 clr-second data-scroll d-inline-block" style="opacity:1; transform: translateY(0px);"><a href=" https://lollypop.design/projects/" style="text-transform: capitalize;color: #FD2E35;">Learn more about our clients</a></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- 02 -->
<section>
  <div class="container">
    <div class="row">

    </div>
  </div>
</section>


<!-- 03 -->
<section class="sec-pd sec-pb">
   <div class="container">
      <div class="row">
         <div class="col-12 col-md-9 col-lg-7 mx-auto">
            <div class="mb-5">
               <h5 class="fnt-40 fnt-800 data-scroll px-0" style="opacity: 1; transform: translateY(0px);">From start ups to fortune 500s in the UAE, we have served everyone.</h5>
               <p class="fnt-24">Some of the clients we have worked with in the Middle East.</p>
            </div>
            <ul class="px-0 logo-list row mb-0">
               <li class="logo-list__item col-4 col-md-3">
                  <img class="img-fluid grayscale lazyloaded" src="https://lollypop.design/wp-content/uploads/2023/01/Tamkeen.svg" alt="Image" data-ll-status="loaded">
               </li>
               <li class="logo-list__item col-4 col-md-3">
                  <img class="img-fluid grayscale lazyloaded" src="https://lollypop.design/wp-content/uploads/2023/01/Rakbank.svg" alt="Image" data-ll-status="loaded">
                 
               </li>
               <li class="logo-list__item col-4 col-md-3">
                  <img class="img-fluid grayscale lazyloaded" src="https://lollypop.design/wp-content/uploads/2023/01/Trukkin.svg" alt="Image" data-ll-status="loaded">
               </li>
               <li class="logo-list__item col-4 col-md-3">
                  <img class="img-fluid grayscale lazyloaded" src="https://lollypop.design/wp-content/uploads/2023/01/Tasdeeq.svg" alt="Image" data-ll-status="loaded">
                  <noscript><img
                     class="img-fluid grayscale lazy" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" data-src=https://lollypop.design/wp-content/uploads/2023/01/Tasdeeq.svg alt=Image></noscript>
               </li>
               <li class="logo-list__item col-4 col-md-3">
                  <img class="img-fluid grayscale lazyloaded" src="https://lollypop.design/wp-content/uploads/2023/01/GOvernment-of-Dubai.svg" alt="Image" data-ll-status="loaded">
                  <noscript><img
                     class="img-fluid grayscale lazy" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" data-src=https://lollypop.design/wp-content/uploads/2023/01/GOvernment-of-Dubai.svg alt=Image></noscript>
               </li>
               <li class="logo-list__item col-4 col-md-3">
                  <img class="img-fluid grayscale lazyloaded" src="https://lollypop.design/wp-content/uploads/2023/01/International-SOS.svg" alt="Image" data-ll-status="loaded">
                  <noscript><img
                     class="img-fluid grayscale lazy" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" data-src=https://lollypop.design/wp-content/uploads/2023/01/International-SOS.svg alt=Image></noscript>
               </li>
               <li class="logo-list__item col-4 col-md-3">
                  <img class="img-fluid grayscale lazyloaded" src="https://lollypop.design/wp-content/uploads/2023/01/Emaar.svg" alt="Image" data-ll-status="loaded">
                  <noscript><img
                     class="img-fluid grayscale lazy" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" data-src=https://lollypop.design/wp-content/uploads/2023/01/Emaar.svg alt=Image></noscript>
               </li>
               <li class="logo-list__item col-4 col-md-3">
                  <img class="img-fluid grayscale lazyloaded" src="https://lollypop.design/wp-content/uploads/2023/01/HUkoomi.svg" alt="Image" data-ll-status="loaded">
                  <noscript><img
                     class="img-fluid grayscale lazy" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" data-src=https://lollypop.design/wp-content/uploads/2023/01/HUkoomi.svg alt=Image></noscript>
               </li>
            </ul>
         </div>
      </div>
   </div>
</section>
<!-- 04 -->
<section class="sec-pd sec-pb">
   <div class="container">
      <div class="row">
         <div class="col-12 col-md-9 mx-auto">
            <div class="mb-5">
               <h5 class="fnt-40 fnt-800 data-scroll px-0 sec-2" style="opacity: 0.5; transform: translateY(0px);">Celebrating two years in the Middle East and serving clients across the MENA region.</h5>
               <p class="fnt-24 sec-2">As we move across the Middle East, we are curating experiences accordingly based on user behaviour.</p>
            </div>
          </div>
       </div>
       <div class="row px-0">
       <div class="col-12 col-md-9 mx-auto">
        <div class="row px-0">
            <div class="col-xs-6 col-md-6 col-lg-4 mb-4 mb-md-0">
                  <div class="card-white-bg">
                      <img  class="mb-3" src="<?php echo get_template_directory_uri(); ?>/assets/images/uae-new-landing/flag-1.svg" alt="flage">
                      <h6 class="fnt-800 fnt-18">UAE</h6>
                      <p class="fnt-14 fnt-400">Domain Experience: Fintech, Real Estate, Logistics, Government, Entertainment, </p>
                  </div>
              </div>
              <div class="col-xs-6 col-md-6 col-lg-4 mb-4 mb-md-0">
                  <div class="card-white-bg">
                      <img class="mb-3" src="<?php echo get_template_directory_uri(); ?>/assets/images/uae-new-landing/flag-2.svg" alt="flage">
                      <h6 class="fnt-800 fnt-18">Kingdom of Saudi Arabia</h6>
                      <p class="fnt-14 fnt-400">Domain Experience: Telecommunications, Insurance, Health-Tech </p>
                  </div>
                </div>
                <div class="col-xs-6 col-md-6 col-lg-4 mb-4 mb-md-0">
                  <div class="card-white-bg card-bg-tab">
                      <img class="mb-3" src="<?php echo get_template_directory_uri(); ?>/assets/images/uae-new-landing/flag-3.svg" alt="flage">
                      <h6 class="fnt-800 fnt-18">Qatar</h6>
                      <p class="fnt-14 fnt-400">Domain Experience: Government Entities, E-commerce, Financial Services </p>
                  </div>
                </div>
                <div class="col-xs-6 col-md-6 col-lg-4 mt-0 mt-md-4">
                  <div class="card-white-bg">
                      <img class="mb-3" src="<?php echo get_template_directory_uri(); ?>/assets/images/uae-new-landing/flag-4.svg" alt="flage">
                      <h6 class="fnt-800 fnt-18">Bahrain</h6>
                      <p class="fnt-14 fnt-400">Domain Experience: Ed-tech, Health-Tech, Supply Chain </p>
                  </div>
                </div>
          </div>

          <div class="have-calss">
           <div class="fnt-18 fnt-800">Have a project in mind?</div>
           <div class="hvr-line fnt-14 clr-second data-scroll d-inline-block" style="opacity:0.6; transform: translateY(0px);"><a href="https://lollypop.design/project-enquiry/">Yalla! Let’s work together</a></div>
        </div>
       </div>
        
    </div>
     </div>
   </div>
 </section>
 <!-- 05 -->
 <section class="sec-pd sec-pt" id="fifth" style="background: #221429;">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-10 col-lg-8 mx-auto mb-4 pb-2 mb-md-0 pb-md-0">
          <div class="row mb-45 justify-content-between">
              <div class="col-md-10 col-lg-10 fluid-offset">
                <div class="lp-awards__left">
                    <h2 class="fnt-50 l-3 clr-white fnt-800 data-scroll" style="opacity: 1; transform: translateY(0px);">We are not only design-first but Arabic first</h2>
                    <span class="fnt-24 clr-white my-4 d-block data-scroll" style="opacity: 1; transform: translateY(0px);">We're a group of 200+ creative minds spread across 4 countries touching billions of lives through design.</span>
                </div>
          </div>
        </div>
      </div>
    </div>
   </div>
    <div class="col-md-11 mx-auto width-container">
     <div class="arabic-sliders-container">
       <div>
          <div class="arabic-slider">
              <figure>
                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/uae-new-landing/arabic-slider.svg" alt="arabic-slider">
                <figcaption>Lollypop at LEAP 2023</figcaption>
            </figure>
          </div>
       </div>
       <div>
          <div class="arabic-slider">
              <figure>
                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/uae-new-landing/arabic-slider.svg" alt="arabic-slider">
                <figcaption>Fun moments at Dubai studio</figcaption>
            </figure>
          </div>
       </div>
       <div>
          <div class="arabic-slider">
              <figure>
                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/uae-new-landing/arabic-slider.svg" alt="arabic-slider">
                <figcaption>STEP 2023 Event</figcaption>
            </figure>
          </div>
       </div>
     </div>
    </div>
</section>
<section class="project-sec pt-5">
   <div class="col-md-11 mx-auto width-container">
  <div class="case-study-container">
     <div>
        <div class="case-study-slider case-study-slider-1">
            <div class="case-slider-content">
              <span style="color: #FFFFFF;">Emaar group</span>
              <h6 style="color: #FFFFFF;">Seamless <br> experience for <br>entertainment</h6>
              <div class="hvr-line-re fnt-14  d-inline-block">View case study</div>
            </div>
        </div>
     </div>
     <div>
        <div class="case-study-slider case-study-slider-2 ">
           <div class="case-slider-content">
              <span style="color: #FFFFFF;">RAKBANK</span>
              <h6 style="color: #FFFFFF;">Creating <br>marketplace to help<br> SME’s scale</h6>
              <div class="hvr-line-re fnt-14 d-inline-block">View case study</div>
           </div>
          </div>
     </div>
     <div>
        <div class="case-study-slider case-study-slider-3">
            <div class="case-slider-content">
              <span style="color: #FFFFFF;">Trukkin</span>
              <h6 style="color: #FFFFFF;">Empowering ocal <br> Middle East maret<br> player go global</h6>
              <div class="hvr-line-re fnt-14 d-inline-block">View case study</div>
            </div>
        </div>
     </div>
  </div>
  </div>
</section>
</main>

<script>
  $(document).ready(function () {

    $(".arabic-sliders-container").slick({
      infinite: false,
      slidesToShow:2.8,
      slidesToScroll: 1,
      dots: false,
      arrows:false,
      autoplay:0,
    
      responsive: [
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 1.2,
            slidesToScroll: 1,
          },
        },

        {
          breakpoint: 991,
          settings: { slidesToShow: 1.6, slidesToScroll: 1, },
        },

        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
          },
        },
        {
          breakpoint: 1400,
          settings:{
            slidesToShow: 2.8,
            slidesToScroll: 1,
          },
        },

      ],
    
    });

    $(".case-study-container").slick({
      infinite: false,
      slidesToShow: 2.5,
      slidesToScroll: 1,
      dots: false,
      arrows:false,
      autoplay:0,
      mobileFirst:false,
      centerMode: false,

      responsive: [
        {
          breakpoint: 1400,
          settings:{
            slidesToShow:2.5,
            slidesToScroll: 1,
          },
        },

        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
           
          },
        },

        {
          breakpoint: 991,
          settings: { slidesToShow:2, slidesToScroll: 1, },
        },
       
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          },
        },
      ],
    
    });

  });
</script>
<?php
get_footer();
?>
