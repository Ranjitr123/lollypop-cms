<?php

/**
 *
 *Template Name: aha
 *Template post type: projects
 *
 **/

get_header();
?>
<style>
  .plyr__controls {
    display: none;
  }

  .playvid[poster] {
    width: 100%;
    margin: auto;
  }

  .stroke {
    background-color: #F77E00 !important;
  }

  dot {
    width: 7.9px;
    height: 8px;
    border-radius: 9.71px;
    display: inline-block;
    background-color: #221429;
  }

  .not-active {
    opacity: 0.2;
  }

  .product-image {
    width: 360px;
    height: 360px;
  }

  .product-content {
    margin-left: calc(100% - 88%);
  }

  .w-18 {
    width: 18rem !important;
  }

  next-slider {
    float: right;
  }

  .img-fit {
    object-fit: cover;
    max-width: 100%;
  }

  .h-600 {
    height: 600px;
  }

  .img-hw {
    height: 175px;
    width: 175px;
  }

  @media screen and (max-width : 500px) {
    .img-hw {
      height: 96px;
      width: 96px;
    }
  }

  @media (min-width: 992px) {
    .lp-awards-list__item:nth-child(odd) {
      min-width: auto;
    }

    .lp-awards-list__item:nth-child(even) {
      min-width: auto;
    }
  }
  
  .AhaTitle {
    font-size: 65px;
    line-height: 76px;
    letter-spacing: -3px;
  }
  @media (max-width: 991.98px) { 
    .AhaTitle {
      font-size: 45px;
      line-height: 55px!important;
      letter-spacing: -2px!important;
    }
   }
   @media (max-width: 767.98px) { 
     .AhaTitle {
      font-size: 32px;
      line-height: 38px!important;
      letter-spacing: -1px!important;
     }
    }
    @media (max-width: 450px) {
     .AhaTitle {
      font-size: 28px;

     }
    }
  .secbottom{margin-bottom:80px;}
  .float-end {
    float: left!important;
	}
   .colsec{padding-bottom:35px;}	
</style>
<main class="main">

  <section class="sec-pd p-r-80 sec-bnr">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-11 col-lg-10 mx-auto">
          <div class="row">
            <div class="col-12 col-md-11 offset-md-1">
              <div class="page-head"><span class="d-block fnt-14 text-lowercase mb-2 clr-default"><?php echo get_field('top_title') ?></span>
                <h1 class="fnt-800 mb-3 mb-md-4 red-stroke red-stroke--small13 px-md-0 AhaTitle">
                  <?php echo get_field('top_heading') ?></h1>
                <p class="fnt-24"> <?php echo get_field('top_description') ?></p>
              </div>
            </div>
          </div>
          <?php if( get_field('top-image') ): ?>
            <div class="w-100 h-auto">
            <iframe class="w-100" height="500" src="<?php echo get_field('top_image') ?>">
            </iframe>
          </div>
          <?php endif; ?>
          <?php if( get_field('top_video') ): ?>
          <div class='col-12 mb-4'>
            <div class="play-video-on-scroll">
              <div id="play2-out" style="display:none">
                <div id="play2" data-plyr-provider="<?php the_field('top_video_provider'); ?>" data-plyr-embed-id="<?php the_field('top_video'); ?>"></div>
              </div>
              <video class="playvid" autoplay="" muted="" loop="" playsinline="" provider="<?php the_field('top_video_provider'); ?>" embed-id="<?php the_field('top_video'); ?>" poster="<?php the_field('top_video_poster'); ?>">
              </video>
            </div>
          </div>
          <?php endif; ?>
        </div>
      </div>
  </section>
  <section class="p-r-80 pb-0"><!----removed mb-80------->
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-11 col-lg-10 mx-auto">
          <div>
            <div class="col-md-10 px-0 mx-auto">
              <div class="mb-60">
                <div class="project-step">
                  <div class="project-step__item row">
                    <div class="col-12 col-md-4 mb-3 mb-md-0"><span class="clr-second fnt-18 text-rpd text-rpd--more d-inline-block fnt-700 text-uppercase disc-head"><?php echo get_field('brief_title') ?></span></div>
                    <div class="col-12 col-md-8 project-step-disc">
                      <div class="project-step-disc__item">
                        <p class="fnt-16 clr-black354"><?php echo get_field('brief_heading') ?></p>
                      </div>
                      <div class="project-step-disc__item">
                        <ul class="li-disc ms-2">
                          <?php echo get_field('brief_description') ?>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="project-step__item row">
                    <div class="col-12 col-md-4 mb-3 mb-md-0"><span class="clr-second fnt-18 text-rpd text-rpd--more d-inline-block fnt-700 text-uppercase disc-head"><?php echo get_field('discover_tab_text') ?></span></div>
                    <div class="col-12 col-md-8 project-step-disc">
                      <div class="project-step-disc__item">
                        <p class="fnt-24"><?php echo get_field('discover_title') ?></p>
                      </div>
                      <div class="project-step-disc__item">
                        <p class="fnt-16 clr-black354"> <?php echo get_field('discover_heading') ?></p>
                      </div>
                      <div class="project-step-disc__item">
                        <ul class="li-disc ms-2">
                          <?php echo get_field('discover_description') ?>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <ul class="px-0 mb-0 thing-list row">
                <?php while (have_rows('second_fold_repeater')) {
                  the_row(); ?>
                  <li class="thing-list__item col-12 col-md-4 mt-3">
                    <div class="disc"><span class="disc__stroke stroke"> </span>
                      <h4 class="fnt-20 fnt-800"><?php echo get_sub_field('second_heading') ?></h4>
                      <p class="fnt-14 mb-0"><?php echo get_sub_field('second_decription') ?></p>
                    </div>
                  </li>
                <?php } ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="sec-pd sec-pt sec-pb sec-client mb-60" id="third" style="background: #1A1D1E;">
    <div class="container">
      <div class="row">
        <div class="col-112 col-md-10 col-lg-10 mx-auto">
          <div class="d-flex justify-conttent-between align-items-center flex-wrap">
            <div class="col-8 px-0">
              <h2 class="fnt-50 fnt-800 mb-3 clr-white"><?php echo get_field('product_title') ?></h2>
            </div>
            <div class="col-4">
              <div class="float-end" id="next-slider"> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="fluid-width mt-4">
      <div class="row">
        <div class="col-12 offset-md-1 px-md-0">

          <ul class="px-0 lp-awards-list d-flex mb-0 mt-3 four-card-sliders">
            <?php while (have_rows('product_repeater')) {
              the_row(); ?>
              <li class="lp-awards-list__item w-auto">
                <div class="award-info"><img class="product-image" src="<?php echo get_sub_field('product_image') ?>" alt="Image">
                  <div class="col-12 col-md-8 px-0"><span class="fnt-22 clr-white d-block mb-1 mt-4 fnt-800imp"><?php echo get_sub_field('product_heading') ?></span><span class="w-18 d-block mb-0 fnt-16 clr-white mt-2"> <?php echo get_sub_field('product_description') ?></span></div>
                </div>
              </li>
            <?php } ?>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section class="p-r-80 pb-0">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-11 col-lg-10 mx-auto">
          <p class="fnt-40 fnt-800imp text-center"><?php echo get_field('covered_title') ?></p>
        </div>
        <div class="col-12 col-md-11 col-lg-11 mx-auto mb-60">
          <ul class="px-0 home-artical-list mt-5">
		    <?php while (have_rows('we_covered_repeater')) {
                  the_row(); ?>
            <li class="home-artical-list__item bg-white p-3 p-lg-5">
              <div class="home-artical">
                  <div class="row">
                    <div class="col-6 col-md-3">
                      <div class="w-100 h-auto mt-3"> <img class="home-artical-img mb-3 mb-md-0 img-fluid img-fit img-hw" src="<?php echo get_sub_field('covered_image') ?>" alt="Image"></div>
                    </div>
                    <div class="col-12 col-md-9">
                      <div class="mt-2">
                        <h3 class="fnt-30 fnt-800 mb-2 pb-lg-1"><?php echo get_sub_field('covered_heading') ?></h3>
                        <p class="mt-1 mt-md-3 mb-1 mb-md-3 fnt-14"><?php echo get_sub_field('covered_age') ?></p>
                        <p class="mt-1 mt-md-3 mb-1 mb-md-3 fnt-14"><?php echo get_sub_field('covered_description') ?></p>
                      </div>
                      <div class="row mt-4 mt-lg-5">
                        <div class="col-md-4">
                          <div class="row">
                            <div class="col-md-12 col-6">
                              <p class="mb-0 fnt-14"><?php echo get_sub_field('covered_watch') ?> </p>
                            </div>
                            <div class="col-md-12 col-6">
                              <p class="mb-0 fnt-18 fnt-800imp float-end float-md-start"><?php echo get_sub_field('covered_hrs') ?></p>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="row">
                            <div class="col-md-12 col-6">
                              <p class="mb-0 fnt-14"><?php echo get_sub_field('covered_device') ?></p>
                            </div>
                            <div class="col-md-12 col-6">
                              <p class="mb-0 fnt-18 fnt-800imp float-end float-md-start"><?php echo get_sub_field('covered_model') ?></p>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="row">
                            <div class="col-md-12 col-6">
                              <p class="mb-0 fnt-14"><?php echo get_sub_field('covered_tech') ?></p>
                            </div>
                            <div class="col-md-12 col-6">
                              <div class="float-end float-md-start"><span class="ms-1" id="dot"></span><span class="ms-1" id="dot"></span><span class="ms-1" id="dot"></span><span class="ms-1" id="dot"></span><span class="ms-1 not-active" id="dot"></span></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row mt-lg-4 mt-2">
                        <div class="col-md-4">
                          <p class="mb-0 mb-lg-3 mt-3 mt-lg-0 clr-yel-92a fnt-28 fnt-800imp"><?php echo get_sub_field('behaviour_title') ?></p>
                          <ul class="li-disc ms-2 ms-lg-0">
                            <?php while (have_rows('behaviour_repeater')) {
                              the_row(); ?>
                              <li class="fnt-14 clr-black-354"><?php echo get_sub_field('behaviour_points') ?></li>
                            <?php  } ?>
                          </ul>
                        </div>
                        <div class="col-md-4">
                          <p class="mb-0 mb-lg-3 mt-3 mt-lg-0 clr-yel-92a fnt-28 fnt-800imp"><?php echo get_sub_field('pain_points_heading') ?></p>
                          <ul class="li-disc ms-2 ms-lg-0">
                            <?php while (have_rows('pain_repeater')) {
                              the_row(); ?>
                              <li class="fnt-14 clr-black-354"><?php echo get_sub_field('pain_points') ?></li>
                            <?php  } ?>
                          </ul>
                        </div>
                        <div class="col-md-4 mb-3 mb-lg-0">
                          <p class="mb-0 mb-lg-3 mt-3 mt-lg-0 clr-yel-92a fnt-28 fnt-800imp"><?php echo get_sub_field('takeaways_heading') ?></p>
                          <ul class="li-disc ms-2 ms-lg-0">
                            <?php while (have_rows('takeaways_repeater')) {
                              the_row(); ?>
                              <li class="fnt-14 clr-black-354"><?php echo get_sub_field('takeaways_points') ?> </li>
                            <?php  } ?>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
            </li>
			<?php  } ?>
          </ul>
        </div>
        <div class="col-12 col-md-11 col-lg-10 mx-auto">
          <div>
            <div class="mb-r-80">
              <div class="project-step">
                <div class="project-step__item row">
                  <div class="col-12 col-md-4 mb-3 mb-md-0"><span class="clr-second fnt-18 text-rpd text-rpd--more d-inline-block fnt-700 text-uppercase disc-head"><?php echo get_field('approach_title') ?></span></div>
                  <div class="col-12 col-md-8 project-step-disc">
                    <div class="mb-4 pb-md-2 col-md-11 px-0">
                      <p class="fnt-24 col-md-10 col-lg-11 px-0"><?php echo get_field('approach_heading') ?></p>
                    </div>
                    <ul class="px-0 values-list row justify-content-between mb-0">
                      <?php while (have_rows('approach_repater')) {
                        the_row(); ?>
                        <li class="values-list__item col-12 col-md-5">
                          <h6 class="fnt-800 mb-1"><?php echo get_sub_field('app_heading') ?></h6>
                          <p class="col-11 col-lg-10 px-0 mb-0"><?php echo get_sub_field('app_description') ?></p>
                        </li>
                      <?php } ?>
                    </ul>
                  </div>
                </div>
                <div class="project-step__item row">
                  <div class="col-12 col-md-4 mb-3 mb-md-0"><span class="clr-second fnt-18 text-rpd text-rpd--more d-inline-block fnt-700 text-uppercase disc-head"><?php echo get_field('define_heading') ?></span></div>
                  <div class="col-12 col-md-8 project-step-disc">
                    <?php echo get_field('define_description') ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="pt-2 pt-md-5" id="third" style="background: #FFFFFF;">
    <div class="container-md">
      <div class="row">
        <div class="col-112 col-md-9 col-lg-10 mx-auto">
          <div class="sec-head">
            <div class="d-flex justify-conttent-between align-items-center flex-wrap ms-4">
              <div class="col-md-5 px-0">
                <h2 class="fnt-40 fnt-800imp mb-0 mb-md-3"><?php echo get_field('structuring_title') ?></h2>
              </div>
              <div class="col-md-7 px-0">
                <p class="fnt-24 float-end mb-md-0">
                  <?php echo get_field('structuring_heading') ?> <br class="d-none d-lg-block"><?php echo get_field('structuring_description') ?></p>
              </div>
            </div>
            <div class="w-100 h-auto"><img class="wpdm-img img-fluid img-fit" src="<?php echo get_field('structuring_image') ?>" alt="Image"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="mb-80 mt-5">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-11 col-lg-10 mx-auto">
          <div>
            <div class="col-md-10 px-0 mx-auto">
              <div class="mb-r-80">
                <div class="project-step">
                  <div class="project-step__item row">
                    <div class="col-12 col-md-4 mb-3 mb-md-0"><span class="clr-second fnt-18 text-rpd text-rpd--more d-inline-block fnt-700 text-uppercase disc-head"><?php echo get_field('wireframes_title') ?></span></div>
                    <div class="col-12 col-md-8 project-step-disc">
                      <div class="project-step-disc__item">
                        <p class="fnt-16 clr-black354"><?php echo get_field('wireframes_description') ?></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="w-100 h-auto"><img class="wpdm-img img-fluid img-fit" src="<?php echo get_field('wireframes_image1') ?>" alt="Image"></div>
              </div>
              <div class="col-md-6 mt-3 mt-md-0">
                <div class="w-100 h-auto"><img class="wpdm-img img-fluid img-fit" src="<?php echo get_field('wireframes_image2') ?>" alt="Image"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="third" style="background: #FFFFFF;">
    <div class="container">
      <div class="row">
        <div class="col-112 col-md-9 col-lg-10 mx-auto py-5">
          <div class="w-100 h-auto d-none d-md-block"><img class="wpdm-img img-fit" src="<?php echo get_field('chat_image1') ?>" alt="Image"></div>
          <div class="w-100 h-auto d-block d-md-none"><img class="wpdm-img img-fit" src="<?php echo get_field('chat_image2') ?>" alt="Image"></div>
        </div>
      </div>
    </div>
  </section>
  <section class="p-r-80 pb-0 mb-60 mt-5">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-11 col-lg-10 mx-auto">
          <div>
            <div class="col-md-10 px-0 mx-auto">
              <div class="mb-r-80">
                <div class="project-step">
                  <div class="project-step__item row">
                    <div class="col-12 col-md-4 mb-3 mb-md-0"><span class="clr-second fnt-18 text-rpd text-rpd--more d-inline-block fnt-700 text-uppercase disc-head"><?php echo get_field('typography_title') ?></span></div>
                    <div class="col-12 col-md-8 project-step-disc">
                      <div class="project-step-disc__item">
                        <?php echo get_field('typography_description') ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="w-100 h-auto d-none d-md-block"><img class="img-fluid img-fit" src="<?php echo get_field('typography_image') ?>" alt="Image"></div>
                <div class="w-100 h-auto d-block d-md-none"><img class="img-fluid img-fit" src="<?php echo get_field('typography_mobile_image') ?>" alt="Image"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-11 col-lg-10 mx-auto">
          <div>
            <div class="col-md-10 px-0 mx-auto">
              <div class="mb-r-80">
                <div class="project-step">
                  <div class="project-step__item row">
                    <div class="col-12 col-md-4 mb-3 mb-md-0"><span class="clr-second fnt-18 text-rpd text-rpd--more d-inline-block fnt-700 text-uppercase disc-head"><?php echo get_field('colours_tilte') ?></span></div>
                    <div class="col-12 col-md-8 project-step-disc">
                      <div class="project-step-disc__item">
                        <p class="fnt-24 clr-black354"><?php echo get_field('colours_description') ?></p>
                        <div class="col-md-12 mt-5">
                          <div class="row">
                            <?php while (have_rows('colours_repeater')) {
                              the_row(); ?>
                              <div class="col-md-4 col-sm-4 col-4 colsec"><img src="<?php echo get_sub_field('colours_image') ?>" class="img-fluid" alt="Image">
                                <div class="mt-4">
                                  <p class="mb-0 fnt-800imp fnt-22"><?php echo get_sub_field('colours_name') ?></p>
                                  <p class="fnt-14"><?php echo get_sub_field('colours_num') ?></p>
                                </div>
                              </div>
                            <?php } ?>
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
    </div>
  </section>
  <section id="third">
    <div class="w-100 h-auto"><img class="wpdm-img img-fluid img-fit" src="<?php echo get_field('ui_image') ?>" alt="Image"></div>
  </section>
  <section class="p-r-80 pb-0 mt-5">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-11 col-lg-10 mx-auto">
          <div>
            <div class="col-md-10 px-0 mx-auto">
              <div class="mb-r-80">
                <div class="project-step">
                  <div class="project-step__item row">
                    <div class="col-12 col-md-4 mb-3 mb-md-0"><span class="clr-second fnt-18 text-rpd text-rpd--more d-inline-block fnt-700 text-uppercase disc-head"><?php echo get_field('ui_title') ?></span></div>
                    <div class="col-12 col-md-8 project-step-disc">
                      <div class="project-step-disc__item">
                        <p class="fnt-16 clr-black354"><?php echo get_field('ui_heading') ?></p>
                        <p class="fnt-16 clr-black354"><?php echo get_field('ui_description') ?></p>
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
  <section class="mb-80">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-11 col-lg-10 mx-auto">
          <div class="row">
            <div class="col-md-5 col-12">
              <p class="fnt-50 fnt-800imp mt-0 mt-md-5"><?php echo get_field('language_title') ?></p>
              <ul class="li-disc mt-4 ms-2 ms-md-0">
                <li class="fnt-14 clr-black-354"><?php echo get_field('language_point_1') ?></li>
                <li class="fnt-14 clr-black-354 mt-3"><?php echo get_field('language_point_2') ?></li>
              </ul>
            </div>
            <div class="col-md-6 offset-md-1 col-12">
              <div class="mt-4 mt-md-0 ms-3 d-flex">
                <div class="w-100 h-auto"><img class="wpdm-img img-fluid img-fit" src="<?php echo get_field('language_image1') ?>" alt="Image"></div>
                <div class="w-100 h-auto"> <img class="wpdm-img img-fluid img-fit" src="<?php echo get_field('language_image2') ?>" alt="Image"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="mb-80">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-11 col-lg-10 mx-auto">
          <div class="row">
            <div class="col-md-5 offset-md-1 col-12 order-md-2">
              <p class="fnt-50 fnt-800imp mt-0 mt-md-3"><?php echo get_field('login_title') ?></p>
              <ul class="li-disc mt-4 ms-2 ms-md-0">
                <?php echo get_field('login_description') ?>
              </ul>
            </div>
            <div class="col-md-6 col-12 order-md-1">
              <div class="mt-4 mt-md-0 ms-3 d-flex">
                <div class="w-100 h-auto"><img class="wpdm-img img-fluid img-fit" src="<?php echo get_field('login_image_1') ?>" alt="Image"></div>
                <div class="w-100 h-auto"> <img class="wpdm-img img-fluid img-fit" src="<?php echo get_field('login_image_2') ?>" alt="Image"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="mb-80">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-11 col-lg-10 mx-auto">
          <p class="fnt-800imp fnt-50"><?php echo get_field('home_title') ?></p>
        </div>
        <div class="col-md-12">
          <div class="row mt-4 three-card-slider">
            <?php while (have_rows('home_repeater')) {
              the_row(); ?>
              <div class="col-md-3 offset-md-1">
                <div class="w-100 h-auto"><img class="wpdm-img img-fluid img-fit" src="<?php echo get_sub_field('home_image') ?>" alt="Image"></div>
                <div class="ms-2 ms-md-5">
                  <p class="fnt-22 fnt-800imp"><?php echo get_sub_field('home_heading') ?></p>
                  <p class="fnt-14"><?php echo get_sub_field('home_description') ?></p>
                </div>
              </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="mb-80">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-11 col-lg-10 mx-auto">
          <div class="row">
            <div class="col-md-5 offset-md-1 col-12 order-md-2">
              <p class="fnt-50 fnt-800imp mt-0 mt-md-3"><?php echo get_field('profile_title') ?></p>
              <ul class="li-disc mt-4 ms-2 ms-md-0">
                <li class="fnt-14 clr-black-354"><?php echo get_field('profile_heading') ?></li>
                <li class="fnt-14 clr-black-354 mt-3"><?php echo get_field('profile_description') ?></li>
              </ul>
            </div>
            <div class="col-md-6 col-12 order-md-1">
              <div class="w-100 h-auto mt-4 mt-md-0"><img class="wpdm-img img-fluid img-fit" src="<?php echo get_field('profile_image') ?>" alt="Image"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="sec-pd mb-60" id="third" style="background: linear-gradient(180deg, #A5B4BD 0%, #CDC9BE 38.35%, #F2CD9B 100%);">
    <div class="container">
      <div class="row">
        <div class="col-112 col-md-9 col-lg-9 mx-auto">
          <p class="fnt-40 fnt-800imp text-center mt-4">
            <?php echo get_field('aha_title') ?> <br class="d-none d-lg-block"><?php echo get_field('aha_line_2') ?> <br class="d-none d-lg-block"><?php echo get_field('aha_line_3') ?></p>
        </div>
      </div>
      <div class="container">
        <div class="w-100 h-auto"><img class="wpdm-img img-fluid img-fit" src="<?php echo get_field('aha_image') ?>" alt="Image"></div>
      </div>
    </div>
  </section>
  <section class="p-r-80 pb-0 mb-80">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-11 col-lg-10 mx-auto">
          <p class="fnt-40 fnt-800imp clr-second"><?php echo get_field('conclusion_title') ?></p>
          <p class="fnt-28 fnt-800imp"><?php echo get_field('conclusion_heading') ?></p>
          <div class="project-step-disc__item">
            <ul class="li-disc ms-2">
              <?php while (have_rows('conclusion_repeater')) {
                the_row(); ?>
                <li class="fnt-16 clr-black-354"><?php echo get_sub_field('conclusion_points') ?></li>
              <?php } ?>

            </ul>
          </div>
          <p class="fnt-28 fnt-800imp"><?php echo get_field('points_heading') ?></p>
          <div class="project-step-disc__item">
            <ul class="li-disc ms-2">
              <?php while (have_rows('points_repeater')) {
                the_row(); ?>
                <li class="fnt-16 clr-black-354"><?php echo get_sub_field('list_points') ?></li>
              <?php } ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="sec-footer-trans">
    <div class="container z-1">
      <div class="row">
        <div class="col-12 col-md-11 col-lg-10 mx-auto">
          <div class="py-70 px-3" style="background: #221429;">
            <div class="d-flex align-items-center justify-content-center">
              <div class="col-12 col-md-8 col-lg-7 px-0 d-inline-block clr-white text-center">
                <div class="mb-45"><span class="d-block fnt-24 mb-2 pb-2 mb-md-4 pb-md-0"><?php echo get_field('thinking_title') ?></span>
                  <h2 class="fnt-50 fnt-800 clr-white"><?php echo get_field('thinking_heading') ?></h2>
                  <?php
                  $findamazinglink = get_field('thinking_link');
                  if ($findamazinglink) :
                    $link_url = $findamazinglink['url'];
                    $link_title = $findamazinglink['title'];
                    $link_target = $findamazinglink['target'] ? $findamazinglink['target'] : '_self';
                  ?>
                </div><a class="web-btn web-btn--red clr-white" href="<?= $link_url ?>" style="color:#FFF!important"><?php echo $link_title ?> </a>
              <?php endif; ?>
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