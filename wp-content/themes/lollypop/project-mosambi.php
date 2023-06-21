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
        background-size: contain;
        position: relative;
        right: 0;
        width: 876px;
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
    .wireframe-banner h3:before, .color-banner h3:before{
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
    .wireframe-banner p{
        max-width:531px;
    }
    .wireframe-img img{
        width: 876px;
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
        background-image:url('https://lollypop.design/wp-content/uploads/2023/06/Fill-26.svg');
        position: absolute;
        background-repeat: no-repeat;
        z-index: -1;
    }
    .logo-banner, .mobile-banner, .color-banner{
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
        width:734px;
    }

    .mobile-img {
        max-width: 734px;
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
        max-width:876px;
        margin:0 auto;
    }
    .compontent-img img{
        width:876px;
    }
    .type-banner{
        height: auto;
        padding-bottom: 2rem;
    }
    .color-banner{
        padding-top:154px;
    }
    
    .color-img img{
        width: 100%;
        height: 100%;
    }
    .icon-banner h3:before{
        background-image:url('https://lollypop.design/wp-content/uploads/2023/06/Fill-31.svg');
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
         max-width:950px;
         padding-bottom:146px;
    }
    .icon-container img{
        width: 924px;
        height: 464px;
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
        .logo-banner, .mobile-banner, .color-banner{
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
        .color-banner {
             padding-top: 0px;
       }
       .icon-container {
            padding-bottom: 0px;
        }
        .icon-container img {
            width: 100%;
            height: 100%;
        }
        .icon-banner, .color-banner{
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
                  <div class="mb-r-80 col-md-11 col-lg-11 px-0"> <span class="d-block fnt-14 text-capitalize mb-2 clr-default">projects</span>
                    <h1 class="fnt-50 fnt-800 mb-3 mb-md-4 red-stroke red-stroke--small13 px-md-0"><?php the_title(); ?></h1>                 
                    <p class="fnt-24"><?php the_field('short_descriptions'); ?></p>                     
                    <div class="project-type">
                        <?php if( have_rows('tags') ) : while( have_rows('tags') ): the_row(); ?> 
                        <span class="fnt-14 clr-black354"><?php the_sub_field('list'); ?></span>
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
              
               <?php $bannerVideo = get_field('banner_video_link') ?>
              <?php if($bannerVideo !=''){ ?>
                <div class="play-video-on-scroll">
                  <div id="play2-out" style="display:none">
                    <div id="play2" data-plyr-provider="<?php the_field('banner_video_provider');?>" data-plyr-embed-id="<?php the_field('banner_video_link');?>"></div>
                  </div>
                  <video class="playvid" autoplay="" muted="" loop="" playsinline="" embed-id="<?php the_field('banner_video_link');?>" provider="<?php the_field('banner_video_provider');?>" poster="<?php the_field('banner_video_poster');?>">
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
                      <?php if( have_rows('brief_descriptions') ) : while( have_rows('brief_descriptions') ): the_row(); ?> 
                      <div class="project-step__item row"> 
                        <div class="col-12 col-md-4 mb-3 mb-md-0"> <span class="clr-second fnt-18 d-inline-block fnt-700 text-uppercase data-scroll disc-head text-rpd text-rpd text-rpd--more"><?php the_sub_field('title'); ?></span></div>
                        <div class="col-12 col-md-8 project-step-disc">
                          <div class="project-step-disc__item"> 
                            <?php the_sub_field('content'); ?>
                          </div>
                          <?php if(get_sub_field('cta_name') !=''){ ?>
                            <a class="hvr-line fnt-14 clr-second mt-4 d-inline-block data-scroll" href="<?php the_sub_field('cta_url');?>"><?php the_sub_field('cta_name');?></a>
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
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-9 col-12">
                <div class="wireframe-banner">
                    <h3>Wireframes</h3>
                    <p class="mt-md-4">Using the research as reference, we started created wireframes. Throughout the design process, we kept the the users in mind, ensuring that their objectives and challenges were taken into account.</p>
                </div>
                <div class="wireframe-img">
                    <img class="img-fluid" src="https://lollypop.design/wp-content/uploads/2023/06/image-2.webp" alt="logo">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- logos -->

<section calss="logo-sec">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-9 col-12">
                <div class="wireframe-banner logo-banner">
                    <h3>Logo</h3>
                    <p class="mt-md-4">We adhered a consistent design language. Keeping the original version, we simplified it and created an abstract, visually appealing logo design.</p>
                </div>
                <div class="wireframe-img logo-img">
                    <img class="img-fluid" src="https://lollypop.design/wp-content/uploads/2023/06/image-3.webp" alt="logo">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- mobile UI -->
<section calss="mobileui-sec">
    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-md-10 col-lg-9 col-12 mobile-row">
                <div class="wireframe-banner mobile-banner">
                    <h3>Mobile UI</h3>
                    <p class="mt-md-4">We created engaging and colorful UI screens for the Mosambee app, showcasing bars, graphs and other visuals which is easier and more impactful for the users.</p>
                </div>
                <div class="wireframe-img mobile-img">
                    <img class="img-fluid" src="https://lollypop.design/wp-content/uploads/2023/06/image-4.webp" alt="logo">
                </div>
            </div>
        </div>
        <div class="row justify-content-center ">
            <div class="col-md-10 col-lg-9 col-12">
                <div class="compents-head">
                    <h3>UI Components</h3>
                    <div class="compontent-img">
                        <img class="img-fluid" src="https://lollypop.design/wp-content/uploads/2023/06/image-5.webp" alt="logo">
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
                <div class="wireframe-banner color-banner">
                    <h3>Typeface</h3>
                </div>
                <div class="wireframe-img logo-img">
                    <img class="img-fluid" src="https://lollypop.design/wp-content/uploads/2023/06/Group-1171279521.svg" alt="logo">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- colors sec -->
<section calss="logo-sec color-sec">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-9 col-12 mt-5">
                <div class="wireframe-banner  color-banner">
                    <h3>Colors</h3>
                    <p>The color palette of the design we created matched with the one stop solution idea behind the app, interlinking the reliable, easy-to-use look and feel of Mosambee.</p>
                </div>
                <div class="wireframe-img color-img pt-md-5 pb-md-5">
                    <img class="mt-md-5 pb-md-5 img-fluid" src="https://lollypop.design/wp-content/uploads/2023/06/image-7.webp" alt="logo">
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
                <div class="wireframe-banner icon-banner color-banner">
                    <h3>Iconography</h3>
                    <p>We designed easy to understand icons for different features make the app more reliable for the users..</p>
                </div>
                <div class="wireframe-img color-img pt-md-5 pb-md-5">
                    <img class="mt-md-5 pb-md-5 img-fluid" src="https://lollypop.design/wp-content/uploads/2023/06/image-8.webp" alt="logo">
                </div>
            </div>
        </div>
        <div class="mt-5 mx-auto icon-container">
            <img class="img-fluid" src="https://lollypop.design/wp-content/uploads/2023/06/image-9.webp" alt="logo">
        </div>
    </div>
</section>

</main>







<?php get_footer(); ?>