<?php

/**
 *
 *Template Name: salesforce landing
 *
 **/

get_header();
?>

<style>
    .some_stories{padding-top:100px;}
    .sales-cards{display:flex; padding:0px;}
    .sales-cards li{margin-right:1rem; display: flex;
    flex-direction: column;
    align-items: center;
    padding: 40px 16px 40px 16px;
    max-width:240px;}
    .sales-cards li p {text-align:center;}
    .sales-cards li:last-child{margin-right:0px;}
    .bg-blue-sec{padding-top:100px;padding-bottom:100px;}
    .domians-card{display:flex;flex-wrap:wrap;}
    .domains-card-list{display:flex; align-items:baseline; justify-content:center; padding:1rem;background: #FFFFFF;width:100%; margin-right:1rem; margin-bottom:3rem; max-width:229px;}
    /* .domains-card-list:last-child{margin-right:0px;} */
    @media(max-width:767px) {
     .sales-cards {
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
        }
        .sales-cards li {margin-bottom:1rem; margin-right:0px; max-width: 100%;}
        .domians-card{justify-content: space-between; }
        .domains-card-list {margin-right:0rem;}
        .need_data2 {margin-top:0px;}
    }
    @media(max-width:480px)
    {
        .domains-card-list {width:100%; margin: 16px auto; max-width:100%}
    }

    @media(min-width:768px) and (max-width:1024px)
    {
        .domains-card-list { max-width:100%}
        .sales-cards {display:block;}
        .sales-cards li {max-width:100%; margin-bottom:1rem; margin-right:0px;}
    }
  

</style>
<main class="main">
<!-- 01 -->
<section class="sec-pd pb-0 sec-bnr">
   <div class="container">
      <div class="row">
         <div class="col-12 col-md-11 col-lg-11 mx-auto">
            <div class="row">
               <div class="col-12 col-md-11 offset-md-1">
                  <div class="page-head">
                     <span class="d-block fnt-14 text-capitalize mb-2 clr-default"><?php the_field('small_title') ?></span>
                     <h1 class="fnt-50 fnt-800 mb-3 mb-md-4 red-stroke red-stroke--small13 px-md-0">
                       <?php the_field('title1') ?>
                     </h1>
                     <p class="fnt-24 col-md-10 col-lg-10"><?php the_field('description') ?></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class='col-12 col-lg-10 col-md-10 mx-auto'>
            <div class="play-video-on-scroll">
              <div id="play2-out" style="display:none">
                <div id="play2" data-plyr-provider="<?php echo get_field('video_provider')?>" data-plyr-embed-id="<?php echo get_field('video_link')?>"></div>
              </div>
              <video class="playvid" autoplay="" muted="" loop="" playsinline="" provider=" <?php echo get_field('video_provider')?>" embed-id="<?php echo get_field('video_link')?>" poster="<?php echo get_field('video_image')?>">
              </video>
            </div>
          </div>
   </div>
</section>
<!-- 02 -->
  <section class="some_stories">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-10 col-lg-7 mx-auto">
                    <p class="firstp"><?php echo get_field('titles')?></p>
                    <div class="row">
                        <?php while(have_rows('social_icons_section')){the_row();?>
                        <div class="col-md-3 col-6">
                            <img src="<?php echo get_sub_field('image')?>" class="img-fluid" alt="...">
                        </div>
                        <?php } ?>   

                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- 03 -->
<section class="sec-pd sec-md-pt" id="sixth">
   <div class="container">
      <div class="row">
         <div class="col-12 col-md-10 col-lg-9 offset-3 mx-auto">
            <div class="mb-90 data-scroll" style="opacity: 1; transform: translateY(0px);">
               <h2 class="fnt-50 fnt-800 mb-16 col-md-6 col-lg-11">Why Companies Choose Lollypop for Salesforce Integration?</h2>
               <p class="fnt-24 col-md-8 col-lg-8 px-0">With experience completing over 500 projects and a 97% client satisfaction rate, Lollypop is the right partner for many leading brands.</p>
            </div>
         </div>
         <div class="col-12 col-md-10 col-lg-9 offset-3 mx-auto">
            <ul class="indutstry-list px-0 ul-mb-60 row justify-content-between">
               <li class="indutstry-list__item col-12 col-md-6 data-scroll">
                  <div class="industry col-10 col-md-11 col-lg-10 col-xl-8 px-0">
                     <h3 class="fnt-22 fnt-800 mb-2">Experienced Salesforce Partner</h3>
                     <p class="mb-22 col-12 col-md-12">Experts in various Salesforce products and industry verticals combined with an experienced resource pool.</p>
                  </div>
               </li>
               <li class="indutstry-list__item col-12 col-md-6 data-scroll">
                  <div class="industry col-10 col-md-11 col-lg-10 col-xl-8 px-0">
                     <h3 class="fnt-22 fnt-800 mb-2">Experienced Salesforce Partner</h3>
                     <p class="mb-22 col-12 col-md-12">Experts in various Salesforce products and industry verticals combined with an experienced resource pool.</p>
                  </div>
               </li>
               <li class="indutstry-list__item col-12 col-md-6 data-scroll">
                  <div class="industry col-10 col-md-11 col-lg-10 col-xl-8 px-0">
                     <h3 class="fnt-22 fnt-800 mb-2">Experienced Salesforce Partner</h3>
                     <p class="mb-22 col-12 col-md-12">Experts in various Salesforce products and industry verticals combined with an experienced resource pool.</p>
                  </div>
               </li>
               <li class="indutstry-list__item col-12 col-md-6 data-scroll">
                  <div class="industry col-10 col-md-11 col-lg-10 col-xl-8 px-0">
                     <h3 class="fnt-22 fnt-800 mb-2">Experienced Salesforce Partner</h3>
                     <p class="mb-22 col-12 col-md-12">Experts in various Salesforce products and industry verticals combined with an experienced resource pool.</p>
                  </div>
               </li>
            </ul>
         </div>
      </div>
   </div>
</section>

<!-- 04 -->
<section class="bg-blue-sec" style="background: #221429;">
<div class="container">
    <div class="row">
        <div class="col-md-8 col-12 col-lg-8 clr-white mx-auto">
            <span class="d-block fnt-14 text-capitalize mb-2">Services and Solutions</span>
            <h4 class="fnt-40 fnt-800 mb-3">What you get with our Salesforce Managed Services</h4>
            <p class="col-md-7 col-lg-10 mb-5 fnt-24">We offer tailored managed services plans for Salesforce that  are specifically designed to provide the <br> appropriate expertise.</p>
        </div>
    </div>
    <ul class="col-md-8 col-lg-8 col-12 sales-cards mx-auto">
        <li style="background: #FFFFFF;">
           <figure>
             <img src="<?php echo get_template_directory_uri(); ?>/assets/images/salesforce/system.svg" alt="">
           </figure>
            <figcaption class="fnt-800 fnt-20 text-center mb-2">Salesforce Consulting</figcaption>
             <p>We Analyse Your Business Requirements And Suggest Solutions Using Salesforce.</p>
        </li>
        <li style="background: #FFFFFF;">
           <figure>
             <img src="<?php echo get_template_directory_uri(); ?>/assets/images/salesforce/system.svg" alt="">
           </figure>
            <figcaption class="fnt-800 fnt-20 text-center mb-2">Salesforce Implementation</figcaption>
             <p>We Implement Salesforce Clouds Along With 3rd Party Apps Including Sales Cloud, Service Cloud.</p>
        </li>
        <li style="background: #FFFFFF;">
           <figure>
             <img src="<?php echo get_template_directory_uri(); ?>/assets/images/salesforce/system.svg" alt="">
           </figure>
            <figcaption class="fnt-800 fnt-20 text-center mb-2">Salesforce Integration</figcaption>
            <p>We Provide Seamless Integration Services Where Businesses Can Interconnect.</p>
        </li>
    </ul>
</div>

</section>

<!-- 05 -->
<section class="sec-pd sec-md-pt">
   <div class="container">
      <div class="row">
         <div class="col-12 col-md-8 col-lg-8 mx-auto">
            <div class="mb-90 data-scroll" style="opacity: 1; transform: translateY(0px);">
               <h2 class="fnt-50 fnt-800 mb-16 col-md-12">Benefits of Having a Salesforce for your Business</h2>
               <p class="fnt-24 col-md-9 col-lg-9 col-12">With experience completing over 500 projects and a 97% client satisfaction rate, Lollypop is the right partner for many leading brands.</p>
            </div>
         </div>
         <div class="col-12 col-md-8 col-lg-8 mx-auto">
            <ul class="indutstry-list px-0 ul-mb-60 row justify-content-between">
               <li class="indutstry-list__item col-12 col-md-6 data-scroll" style="opacity: 1; transform: translateY(0px);">
                  <div class="industry col-10 col-md-11 col-lg-10 col-xl-8 px-0">
                     <h3 class="fnt-22 fnt-800 mb-2">Ultimate Accessibility </h3>
                     <p class="mb-22">Experts in various Salesforce products and industry verticals combined with an experienced resource pool.</p>
                  </div>
               </li>
               <li class="indutstry-list__item col-12 col-md-6 data-scroll" style="opacity: 1; transform: translateY(0px);">
                  <div class="industry col-10 col-md-11 col-lg-10 col-xl-9 px-0">
                     <h3 class="fnt-22 fnt-800 mb-2">Better Time Management</h3>
                     <p class="mb-22">Experts in various Salesforce products and industry verticals combined with an experienced resource pool.</p>
                  </div>
               </li>
               <li class="indutstry-list__item col-12 col-md-6 data-scroll" style="opacity: 1; transform: translateY(0px);">
                  <div class="industry col-10 col-md-11 col-lg-10 col-xl-8 px-0">
                     <h3 class="fnt-22 fnt-800 mb-2">Increased Revenue</h3>
                     <p class="mb-22">Experts in various Salesforce products and industry verticals combined with an experienced resource pool.</p>
                  </div>
               </li>
               <li class="indutstry-list__item col-12 col-md-6 data-scroll" style="opacity: 1; transform: translateY(0px);">
                  <div class="industry col-10 col-md-11 col-lg-10 col-xl-8 px-0">
                     <h3 class="fnt-22 fnt-800 mb-2">Trusted Reporting</h3>
                     <p class="mb-22">Experts in various Salesforce products and industry verticals combined with an experienced resource pool.</p>
                  </div>
               </li>
            </ul>
            <a class="clr-second fnt-14 hvr-line data-scroll" href="https://lollypop.design/project-enquiry/" style="opacity: 1; transform: translateY(0px);">Get in Touch</a>
         </div>
      </div>
   </div>
</section>

<!-- 06 domains -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-8 col-12 mx-auto">
               <h2 class="fnt-50 fnt-800 mb-16 col-md-12">We have covered all industries across the domain</h2>
               <p class="fnt-24 col-md-9 col-lg-9 col-12">From startups to known brands we have many stories to tell</p>
            </div>
        </div>
        <div class="row">
            <ul class="col-md-8 col-lg-8 col-12 domians-card mx-auto">
               <li class="domains-card-list">
                  <figure>
                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/salesforce/system.svg" alt="">
                  </figure>
                  <figcaption class="fnt-800 fnt-20 mx-2">Healthcare</figcaption>
               </li>
               <li class="domains-card-list">
                  <figure>
                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/salesforce/system.svg" alt="">
                  </figure>
                  <figcaption class="fnt-800 fnt-20 mx-2">Retail</figcaption>
               </li>
               <li class="domains-card-list">
                  <figure>
                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/salesforce/system.svg" alt="">
                  </figure>
                  <figcaption class="fnt-800 fnt-20 mx-2">Manfacturing</figcaption>
               </li>
               <li class="domains-card-list">
                  <figure>
                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/salesforce/system.svg" alt="">
                  </figure>
                  <figcaption class="fnt-800 fnt-20 mx-2">EdTech</figcaption>
               </li>
               <li class="domains-card-list">
                  <figure>
                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/salesforce/system.svg" alt="">
                  </figure>
                  <figcaption class="fnt-800 fnt-20 mx-2">FinTech</figcaption>
               </li>
               <li class="domains-card-list">
                  <figure>
                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/salesforce/system.svg" alt="">
                  </figure>
                  <figcaption class="fnt-800 fnt-20 mx-2">Media</figcaption>
               </li>
            </ul>
        </div>
    </div>
</section>


<!-- faq -->

<section>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-10 col-lg-10 mx-auto">
                <div class="need_data2">
                    <div class="row">
                        <div class="col-12 col-md-10 col-lg-9 mx-auto">
                            <p>FAQ</p>
                            <h2><?php echo get_field('main_title')?></h2>
                            <div class="accordion" id="accordionExample">
                                <?php $count = 0; while(have_rows('faq_section')){the_row();?>
								<div class="accordion-item">
                                    <h3 class="accordion-header" id="heading<?php echo $count; ?>">
                                    <button class="accordion-button position-relative plus" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $count; ?>" aria-expanded="<?php if($count == 0){echo 'true';} else {echo 'false';}?>" aria-controls="collapse<?php echo $count; ?>">
                                        <?php echo get_sub_field('question')?>
                                    </button>
                                    </h3>
                                    <div id="collapse<?php echo $count; ?>" class="accordion-collapse collapse <?php if($count == 0){echo 'show';}?>" aria-labelledby="heading<?php echo $count; ?>" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p><?php echo get_sub_field('answer')?></p>
                                    </div>
                                    </div>
                                </div>
								<?php $count++; } ?>
                                
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
            

 <section class="sec-footer-trans footmar">
        <div class="container z-1">
          <div class="row"> 
            <div class="col-12 col-md-11 col-lg-10 mx-auto">
              <div class="py-70 px-3 data-scroll" style="background: #221429;">
                <div class="d-flex align-items-center justify-content-center">
                  <div class="col-11 col-md-8 col-lg-8 px-0 d-inline-block clr-white text-center"> 
                    <div class="mb-45"><span class="d-block fnt-24 mb-2 pb-2 mb-md-4 pb-md-0">Want impactful data insights?</span>
                      <h2 class="fnt-50 fnt-800 clr-white">Let's talk about your <br>Data Visualisation needs.</h2>
                    </div><a class="web-btn web-btn--red" href="<?php echo site_url(); ?>/project-enquiry/">GET IN TOUCH</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


</main>



<div class="js-page-scroll-top"><img src="<?php echo get_template_directory_uri(); ?>/img/pg-scroll.svg" alt="Image"></div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/ScrollTrigger.min.js"></script>
<script src="https://cdn.plyr.io/3.6.12/plyr.polyfilled.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/TweenMax.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/plugins/slick.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/plugins/maginific-poup.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/header.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/plugins/parsley.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/aha.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/video-player.js"></script>
<?php get_footer(); ?>