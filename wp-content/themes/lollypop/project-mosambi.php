<?php

/**
 *
 *Template Name: project mosambi
 *Template post type: projects
 **/

get_header();
?>
<style>
    .wireframe-banner{
        background-image:url('https://lollypop.design/wp-content/uploads/2023/06/Group-1153.svg');
        background-size: cover;
        position: relative;
        right: 0;
        width: 100%;
        height: 249.6px;
    }
    .wireframe-banner h3{
        font-family: 'Manrope';
        font-style: normal;
        font-weight: 800;
        font-size: 48px;
        line-height: 56px;
        letter-spacing: -0.04em;
        color: #221429;
        position: relative;
        z-index: 0;
    }
    .wireframe-banner h3:before, .type-banner h3:before{
        content:" ";
        top: -7px;
        background-size: contain;
        left: -29px;
        width: 92.3px;
        height: 67.77px;
        background-image:url('https://lollypop.design/wp-content/uploads/2023/06/Fill-26.svg');
        position: absolute;
        background-repeat: no-repeat;
        z-index: -1;
    }
    .wireframe-banner p{
        max-width:531px;
    }
    .wireframe-img img{
        width: 100%;
        height:100%;
    }

    /* logo */
    .logo-banner h3:before{
        content:" ";
        top: -7px;
        background-size: contain;
        left: -29px;
        width: 92.3px;
        height: 67.77px;
        background-image:url('https://lollypop.design/wp-content/uploads/2023/06/Fill-29.svg');
        position: absolute;
        background-repeat: no-repeat;
        z-index: -1;
    }
    .logo-banner, .mobile-banner, .type-banner{
        background-image:none;
    }
    /* mobile UI */
    .mobile-banner h3:before{
        content:" ";
        top: -66px;
        background-size: contain;
        left: -44px;
        width: 321.4px;
        height: 235.96px;
        background-image:url('https://lollypop.design/wp-content/uploads/2023/06/Fill-27.svg');
        position: absolute;
        background-repeat: no-repeat;
        z-index: -1;
        border-radius: 22px;
    }
    .mobile-row{
        background: #F2F5F5;
        border-radius: 22px;
        margin-top: 138px;
        /* width: auto; */
    }
    .mobile-banner p{
        position: relative;
    }
    .mobile-banner{
        position: relative;
        top: 6%;
        left: 4%;
    }
    .mobile-img img{
        width:auto;
    }

    .mobile-img {
        max-width: auto;
        margin:0 auto;
    }

    /* componet */
    .compents-head h3{
        font-weight: 700;
        font-size: 40px;
        line-height: 140%;
        display: flex;
        align-items: center;
        color: #373232;
        margin-top:48px;
        text-align:center;
        justify-content: center;
    }
    .compontent-img{
        width:auto;
        margin:0 auto;
    }
    .compontent-img img{
        width:100%;
    }
    .type-banner{
        height: auto;
        padding-bottom: 2rem;
        padding-top:125px;
    }
    
    .color-img img{
        width: 100%;
        height: 100%;
    }
    .icon-banner h3:before{
        background-image:url('https://lollypop.design/wp-content/uploads/2023/06/Fill-31.svg');
    }
    .color-banner h3:before{
        background-image:url('https://lollypop.design/wp-content/uploads/2023/06/Fill-29.svg');
    }
    .icon-banner p{
        font-family: 'Manrope';
        font-style: normal;
        font-weight: 400;
        font-size: 16px;
        line-height: 168%;
        color: #5A5A5A;
    }

    .icon-container{
         max-width:1076px;
         padding-bottom:140px;
    }
    .icon-container img{
        width: 1076px;
        height: auto;
    }

    .mobile-banner h3:before{
      top: -73px;
      left: -54px;
    }

    .pl-30 {
      padding-left: 30px;
    }

    .pl-25{
      padding-left: 25px;
    }
    .pr-15 {
      padding-right: 15px;
    }

    .pl-75 {
      padding-left: 75px !important;
    }

    .mobileui-px {
      padding-left: 40px;
      padding-right: 15px;
    }

    /* media query */
    @media (max-width: 767px)
    {

        .wireframe-banner p {
            max-width: 280px;
        }
        .wireframe-banner {
            background-image: url(https://lollypop.design/wp-content/uploads/2023/06/Group-1153.svg);
            background-size: contain;
            position: relative;
            right: 0;
            width: 100%;
            height: 249.6px;
            background-repeat: no-repeat;
        }
        .wireframe-banner h3 {
           font-size: 24px;
        }
        .logo-banner, .mobile-banner, .type-banner{
            background-image:none;
       }
       .mobile-banner h3:before {
            content: " ";
            top: -31px;
            background-size: contain;
            left: -22px;
            width: 150.4px;
            height: 190.96px;
            background-image: url(https://lollypop.design/wp-content/uploads/2023/06/Fill-27.svg);
            position: absolute;
            background-repeat: no-repeat;
            z-index: -1;
            border-radius: 22px;
        }
        .compents-head h3 {
            font-size: 24px;
        }
        .type-banner {
             padding-top: 0px;
       }
       .icon-container {
            padding-bottom: 0px;
        }
        .icon-container img {
            width: 100%;
            height: 100%;
        }
        .icon-banner, .type-banner{
            height:auto;
        }
   
    }


</style>

<main class="main" style="background:#ffffff;">
<!-- banner section -->
    <section class="sec-pd sec-bnr p-r-80"> 
        <div class="container"> 
          <div class="row">
            <div class="col-12 col-md-11 col-lg-10 mx-auto">
              <div class="row">
                <div class="col-12 col-md-11 offset-md-1">
                  <div class="mb-r-80 col-md-12 col-lg-12 px-0"> <span class="d-block fnt-14 text-capitalize mb-2 clr-default"><?php the_field('company_names'); ?></span>
                    <h1 class="fnt-50 fnt-800 mb-3 mb-md-4 red-stroke red-stroke--small13 px-md-0"><?php the_title(); ?></h1>                 
                    <p class="fnt-24"><?php the_field('short_descriptionss'); ?></p>                     
                    <div class="project-type">
                        <?php if( have_rows('tagss') ) : while( have_rows('tagss') ): the_row(); ?> 
                        <span class="fnt-14 clr-black354"><?php the_sub_field('lists'); ?></span>
                    <?php endwhile; endif; ?>
                  </div>
                  </div>
                </div>
              </div>             
              <div class="reveal-project">
               <?php $galImage = get_the_post_thumbnail_url(); ?>
              <?php if($galImage !=''){ ?>
              <img class="wpdm-img" src="<?php echo the_post_thumbnail_url('post_thumbnail') ?>" alt="Image">
              <?php } ?>
              
               <?php $bannerVideos = get_field('banner_video_links') ?>
              <?php if($bannerVideos !=''){ ?>
                <div class="play-video-on-scroll">
                  <div id="play2-out" style="display:none">
                    <div id="play2" data-plyr-provider="<?php the_field('banner_video_providers');?>" data-plyr-embed-id="<?php the_field('banner_video_links');?>"></div>
                  </div>
                  <video class="playvid" autoplay="" muted="" loop="" playsinline="" embed-id="<?php the_field('banner_video_links');?>" provider="<?php the_field('banner_video_providers');?>" poster="<?php the_field('banner_video_posters');?>">
                  </video>
                </div>
               <?php } ?>
              </div>
            </div>
          </div>
        </div>
    </section>

<!-- second section -->
      <!--02-->
      <section class="p-r-80 pb-0 pare-define"> 
        <div class="container"> 
          <div class="row"> 
            <div class="col-12 col-md-11 col-lg-10 mx-auto">
              <div>
                <div class="col-md-10 px-0 mx-auto">
                  <div class="mb-r-80">
                    <div class="project-step">
                      <?php if( have_rows('brief_descriptionss') ) : while( have_rows('brief_descriptionss') ): the_row(); ?> 
                      <div class="project-step__item row"> 
                        <div class="col-12 col-md-4 mb-3 mb-md-0"> <span class="pl-25 clr-second fnt-18 d-inline-block fnt-700 text-uppercase data-scroll disc-head text-rpd--more"><?php the_sub_field('titles'); ?></span></div>
                        <div class="col-12 col-md-8 project-step-disc">
                          <div class="project-step-disc__item"> 
                            <?php the_sub_field('contents'); ?>
                          </div>
                          <?php if(get_sub_field('cta_names') !=''){ ?>
                            <a class="hvr-line fnt-14 clr-second mt-4 d-inline-block data-scroll" href="<?php the_sub_field('cta_urls');?>"><?php the_sub_field('cta_names');?></a>
                            <?php } ?>
                        </div>
                      </div>
                       <?php endwhile; endif; ?>
                    </div>
                  </div>
                </div>    	  
                     
              </div>

            </div>
          </div>
        </div>
      </section>
	  

<!-- wireframe section -->
<section calss="wireframe-sec">
    <div class="container">
        <div class="row justify-content-center pl-25">
            <div class="col-md-11 col-lg-10 col-12">
                <div class="wireframe-banner color-banner ps-5 pl-75">
                    <h3><?php the_field('wireframe_title'); ?></h3>
                    <p class="mt-md-4"><?php the_field('wireframe_description'); ?></p>
                </div>
                <div class="wireframe-img">
                    <img class="img-fluid" src="<?php the_field('wireframe_image'); ?>" alt="logo">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- logos -->

<section calss="logo-sec">
    <div class="container">
        <div class="row justify-content-center pl-25">
            <div class="col-md-11 col-lg-10 col-12">
                <div class="wireframe-banner type-banner mx-4 p-5">
                    <h3><?php the_field('logos_title'); ?></h3>
                    <p class="mt-md-4"><?php the_field('logos_description'); ?></p>
                </div>
                <div class="wireframe-img logo-img d-flex flex-column align-items-center">
                    <img class="img-fluid" src="<?php the_field('logos_image'); ?>" alt="logo">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- mobile UI -->
<section calss="mobileui-sec">
    <div class="container">
        <div class="row justify-content-center mobileui-px">
            <div class="col-md-11 col-lg-10 col-12 mobile-row">
                <div class="wireframe-banner mobile-banner">
                    <h3><?php the_field('mobile_ui_title'); ?></h3>
                    <p class="mt-md-4"><?php the_field('mobile_ui_description'); ?></p>
                </div>
                <div class="wireframe-img mobile-img">
                    <img class="img-fluid" src="<?php the_field('mobile_ui_image'); ?>" alt="logo">
                </div>
            </div>
        </div>
        <div class="row justify-content-center pl-25">
            <div class="col-md-11 col-lg-10 col-12">
                <div class="compents-head">
                    <h3><?php the_field('ui_components_title'); ?></h3>
                    <div class="compontent-img">
                        <img class="img-fluid" src="<?php the_field('ui_components_image'); ?>" alt="logo">
                    </div>
                </div>
        </div>
    </div>
</section>

<!-- type face -->
<section calss="logo-sec type-sec">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-11 col-lg-10 col-12">
                <div class="wireframe-banner type-banner ps-5 mx-5">
                    <h3><?php the_field('typeface_title'); ?></h3>
                </div>
                <div class="wireframe-img logo-img d-flex flex-column align-items-center ps-5 ms-5">
                    <img class="img-fluid" src="<?php the_field('typeface_image'); ?>" alt="logo">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- colors sec -->
<section calss="logo-sec color-sec">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-11 col-lg-10 col-12 mt-5">
                <div class="wireframe-banner type-banner color-banner ps-5 mx-5">
                    <h3><?php the_field('colors_title'); ?></h3>
                    <p><?php the_field('colors_description'); ?></p>
                </div>
                <div class="wireframe-img color-img">
                    <img class="mx-5 px-5 img-fluid" src="<?php the_field('colors_image'); ?>" alt="logo">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- icon sec -->
<section class="icon-sec">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-11 col-lg-10 col-12 mt-5">
                <div class="wireframe-banner type-banner icon-banner ps-5 ms-5">
                    <h3><?php the_field('iconography_title'); ?></h3>
                    <p><?php the_field('iconography_description'); ?></p>
                </div>
                <div class="wireframe-img color-img pb-md-5 ps-5 ms-5">
                    <img class="img-fluid" src="<?php the_field('iconography_image'); ?>" alt="logo">
                </div>
            </div>
        </div>
        <div class="mt-5 mx-auto icon-container">
            <img class="img-fluid" src="<?php the_field('last_banner_image'); ?>" alt="logo">
        </div>
    </div>
</section>

<?php if( get_field('conclusion') !=''){?>
          <section class="conclusion-pad sec-pt">
        <div class="container"> 
          <div class="row"> 
          <div class="col-12 col-md-11 col-lg-10 mx-auto"> 
                <div class="col-md-10 px-0 mx-auto"> 
                 <div>
                <div class="col-md-12">
                  <div class="mb-r-80">
                    <div class="project-step">
                      <div class="project-step__item row"> 
                        <div class="col-12 mb-4"> <h3 class="clr-second fnt-40 text-left fnt-800 d-inline-block data-scroll">Conclusion</h3></div>
                        <div class="col-12 col-md-10 project-step-disc">
                          <div class="project-step-disc__item conclustion"> 
                           <?php the_field('conclusion'); ?>
                        
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
                  </div>
              </div>
            </div>
              </div>
      </section>
    <?php } ?>
	<section class="sec-pd pt-0">
        <div class="container">
          <div class="row"> 
            <div class="col-12 col-md-11 col-lg-10 mx-auto">
              <div class="col-md-10 px-0 mx-auto">
                <div class="projects-nav d-flex flex-column flex-md-row justify-content-between">
                  <div class="projects-nav__prev">
                     <div class="d-flex">
                      <?php $nextPost = get_next_post();
                            if($nextPost) { ?>
                      <div class="pt-2"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-red-leftAr.svg" alt="Image"></div>
                      <div class="ps-4">
                        <?php
                         $destination = get_field('company_name', $nextPost->ID);                               
                         next_post_link( '%link', '                       
                            <h4 class="fnt-28 fnt-800">'. $destination .'</h4> ' ); ?>                           
                      </div>
                      <?php }?>
                      </div>
                      </div>
                      
                      
                  <div class="projects-nav__next">
                      <div class="d-flex ms-auto">
                      <?php 
                  $prevPost = get_previous_post();
                  if($prevPost) { ?>
                      <div class="pe-4"> 
                         
                   <?php
                        $destination = get_field('company_name', $prevPost->ID);
                         previous_post_link( '%link',  ' <h4 class="fnt-28 fnt-800">'. $destination .'</h4>' );  ?>
                      </div>
                      <div class="pt-2"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-red-rightAr.svg" alt="Image"></div>
                      <?php } ?>
                      </div>
                      </div>
                </div>
  
              </div>
            </div>
          </div>
        </div>
      </section>
	  <section class="sec-footer-trans">
        <div class="container z-1">
          <div class="row"> 
            <div class="col-12 col-md-11 col-lg-10 mx-auto">
              <div class="py-70 px-3 data-scroll" style="background: #221429;">
                <div class="d-flex align-items-center justify-content-center">
                  <div class="col-11 col-md-8 col-lg-7 px-0 d-inline-block clr-white text-center"> 
                    <div class="mb-45"><span class="d-block fnt-24 mb-2 pb-2 mb-md-4 pb-md-0">Got An Idea?</span>
                      <h2 class="fnt-50 fnt-800 clr-white">Let’s craft brilliance together!</h2>
                    </div><a class="web-btn web-btn--red" href="<?php echo site_url(); ?>/project-enquiry/">Get In Touch</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

</main>







<?php get_footer(); ?>