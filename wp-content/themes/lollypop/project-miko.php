<?php

/**
 *
 *Template Name: project miko
 *Template post type: projects
 **/

get_header();
?>
<style>
   /* wireframe  */
    .wireframe-banner h3{
        font-family: 'Manrope';
        font-style: normal;
        color: #E5F2F9;
        font-size: 128px;
        font-family: Manrope;
        font-style: normal;
        font-weight: 800;
        line-height: 140px;
        letter-spacing: -5.12px;
        text-align:center;
    }
    .wireframe-banner p{
        max-width:737px;
        margin:0 auto;
    }
    /* information structure */

    .information-banner h3{
        color: #E5F2F9;
        font-size: 128px;
        font-family: Manrope;
        font-style: normal;
        font-weight: 800;
        line-height: 140px;
        letter-spacing: -5.12px;
        text-align:center;
    }
    /* typo graphy */
    .type-sec-h3{
        margin-bottom: -226px;
        text-align: start;
        transform: rotate(4deg);
        margin-left: 91px;
        width: 521.896px;
        font-size: 120px;
    }
    /* icongraphy */
    .icon-div p{
        max-width:377px;
        margin:0 auto;
        font-family: Manrope;
        font-style: normal; 
    }
    /* colors */
    .color-banner p{
        max-width:603px;
        margin:0 auto;
        font-family: Manrope;
        font-style: normal; 
    }

    .icons-p{
        margin: inherit !important;
        margin-top:20px !important; 
        margin-left: 60px !important;
        margin-bottom:20px !important;
        font-size: 16px;
        font-family:'Montserrat', sans-serif !important;
        font-style: normal;
        font-weight: 400;
        line-height: 168%;
        
    }
    .icon-img{
        margin-top: -139px;
        margin-left: 20px;
    }
    
	
    /* media query */
    @media (max-width: 767px)
    {
        .information-banner h3{
            font-size: 24px;
            line-height: 24px;
            letter-spacing: 0.88px;
        }
        .wireframe-banner p {
            max-width: 280px;
        }
        .wireframe-banner h3 {
           font-size: 24px;
           line-height: 24px;
           letter-spacing: 0.88px;
        }
        .icons-p {
            margin:0 auto !important;
        }
        .icon-img {
            margin-top: 0;
            margin-left: 0;
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
                  <div class="mb-r-80 col-md-12 col-lg-12 px-0"> <span class="d-block fnt-14 text-capitalize mb-2 clr-default"><?php echo the_field('mcompany_name'); ?></span>
                    <h1 class="fnt-50 fnt-800 mb-3 mb-md-4 red-stroke red-stroke--small13 px-md-0"><?php the_title(); ?></h1>                 
                    <p class="fnt-24"><?php echo the_field('short_descriptionss'); ?></p>                     
                    <div class="project-type">
                        <?php if( have_rows('tagss') ) : while( have_rows('tagss') ): the_row(); ?> 
                        <span class="fnt-14 clr-black354"><?php echo the_sub_field('lists'); ?></span>
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
                        <div class="col-12 col-md-4 mb-3 mb-md-0"> <span class="clr-second fnt-18 d-inline-block fnt-700 text-uppercase data-scroll disc-head text-rpd text-rpd text-rpd--more"><?php the_sub_field('titles'); ?></span></div>
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

<!-- information structure -->
<section calss="information-sec">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-12 col-12 mx-auto">
                <div class="information-banner">
                    <h3> Structuring the information</h3>
                </div>
                <div class="information-img text-center">
                    <img class="img-fluid" src="http://localhost/cms/lollypop-cms/wp-content/uploads/2023/07/Group-1171279291.webp" alt="logo">
                </div>
            </div>
        </div>
    </div>
</section>


<!-- wireframe section -->
<section calss="wireframe-sec">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-12 col-12">
                <div class="wireframe-banner text-center">
                    <h3>Wireframes<?php the_field('wireframe_title'); ?></h3>
                    <p class="mt-md-4 text-center"> Using the information architecture as reference, we started created wireframes. Throughout the design process, we kept the personas in mind, ensuring that their objectives and challenges were taken into account. Once the wireframes were completed, we presented them to the client for feedback and ensured that we were aligned before proceeding with the visual design phase.<?php the_field('wireframe_description'); ?></p>
                </div>
                <div class="wireframe-img text-center mt-5">
                    <img class="img-fluid" src="http://localhost/cms/lollypop-cms/wp-content/uploads/2023/07/Group-1171279298.webp" alt="logo">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- type face -->
<section calss="logo-sec type-sec">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-9 col-12">
                <div class="wireframe-img logo-img">
                    <img class="img-fluid" src="http://localhost/cms/lollypop-cms/wp-content/uploads/2023/07/MIKO-typeface.png" alt="logo">
                </div>
            </div>
        </div>
    </div>
</section>


<!-- colors sec -->
<section calss="logo-sec color-sec">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-9 col-12">
                <div class="wireframe-banner  color-banner">
                    <h3>Colors<?php the_field('colors_title'); ?></h3>
                    <p>The combination is inherently aesthetically playful with red’s representation of life and energy, and blue’s representation of trust and calmness. The vibrant usage of secondary colours act as a support in accentuating the content of the application.
                           While Dark green and black can be standard for text usage throughout the app.<?php the_field('colors_description'); ?></p>
                </div>
                <div class="wireframe-img color-img pt-md-5 pb-md-5">
                    <img class="mt-md-5 pb-md-5 img-fluid" src="http://localhost/cms/lollypop-cms/wp-content/uploads/2023/07/Group-1171279265.webp" alt="logo">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- icon sec -->
<section calss="icon-sec">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-9 col-12 mt-5">
                <div class="wireframe-banner icon-div">
                    <h3>Iconography<?php the_field('iconography_title'); ?></h3>
                    <p class="icons-p">Keeping in mind the target users, we used Iconography to visually simplify the content of the App, making it instantly accessible to users.  Elegant & simple icons have the power to attract attention and keep users engaged. We created meaningful icons that help in reducing content and used it suitably to enhance usability.<?php the_field('iconography_description'); ?></p>
                </div>
                <div class="wireframe-img color-img  pb-md-5">
                    <img class="pb-md-5 img-fluid icon-img" src="http://localhost/cms/lollypop-cms/wp-content/uploads/2023/07/Group-1171279301.webp" alt="logo">
                </div>
            </div>
        </div>
    </div>
</section>


<!-- UI design -->
<section calss="mobileui-sec">
    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-md-10 col-lg-9 col-12 mobile-row">
                <div class="wireframe-banner mobile-banner pt-md-0 pt-5">
                    <h3>UI Design<?php the_field('mobile_ui_title'); ?></h3>
                    <p class="mt-md-4">We adhered to the design language that was consistent with Miko’s brand guidelines.We wanted the app to look bold, fun, playful and evoke a premium feel. We curated an intuitive and lively interface that helped users achieve their goals faster. 
                       <?php the_field('mobile_ui_description'); ?></p>
                </div>
                <div class="wireframe-img mobile-img">
                    <img class="img-fluid" src="http://localhost/cms/lollypop-cms/wp-content/uploads/2023/07/Group-1171279300-3.webp" alt="logo">
                </div>
            </div>
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
                <div class="col-md-10 px-0 mx-auto">
                  <div class="mb-r-80">
                    <div class="project-step">
                      <div class="project-step__item row"> 
                        <div class="col-12 mb-4"> <h3 class="clr-second fnt-40 text-left fnt-800 d-inline-block text-uppercase data-scroll">Conclusion</h3></div>
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