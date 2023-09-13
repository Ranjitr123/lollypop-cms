<?php

/**
 *
 *Template Name: project coveiot
 *Template post type: projects
 **/

get_header();
?>
<style>
  .color-pallet,
  .typography,
  .ui-direction {
    padding-top: 96px;
    padding-bottom: 96px;
  }

  .pt-56 {
    padding-top: 56px;
  }

  .pt-80 {
    padding-top: 80px;
  }

  .pt-140 {
    padding-top: 140px;
  }

  .pl-150 {
    padding-left: 150px;
  }

  .pr-150 {
    padding-right: 150px;
  }

  .project-step__item {
    margin-bottom: 56px;
  }

  .project-step-disc__item p {
    margin-bottom: 0px !important;
  }

  .iot-title {
    width: 80%;
  }

  ol>li:first-child {
    padding-top: 16px;
  }

  .color-pallet-banner h3,
  .typography-banner h3,
  .ui-direction-banner h3 {
    color: #181636;
    text-align: center;
    font-family: Manrope;
    font-size: 138px;
    font-style: normal;
    font-weight: 800;
    line-height: 93.5%;
    letter-spacing: -4.14px;
    opacity: 0.1;
  }

  .color-pallet-banner h6,
  .typography-banner h6,
  .ui-direction-banner h6 {
    color: #111;
    text-align: center;
    font-family: Manrope;
    font-size: 40px;
    font-style: normal;
    font-weight: 800;
    line-height: normal;
    z-index: 1;
    position: relative;
    margin-top: -50px;
  }


  .ui-direction-banner h6 {
    color: #111;
    text-align: center;
    font-family: Manrope;
    font-size: 40px;
    font-style: normal;
    font-weight: 800;
    line-height: normal;
    z-index: 1;
    position: relative;
    margin-top: -50px;
  }

  .description-item h3 {
    color: var(--LLY-Black, #221429);
    font-family: Manrope;
    font-size: 22.09px;
    font-style: normal;
    font-weight: 800;
    line-height: 135%;
    letter-spacing: -0.663px;
  }

  .description-item p {
    color: var(--LLY-Black, #221429);
    font-family: Manrope;
    font-size: 14px;
    font-style: normal;
    font-weight: 400;
    line-height: 160%;
  }

  .final-sec-01 {
    margin-top: 96px;
  }

  .final-ui-banner h3 {
    color: #FFF;
    text-align: center;
    font-family: Manrope;
    font-size: 138px;
    font-style: normal;
    font-weight: 800;
    line-height: 180px;
    letter-spacing: -4.14px;
    opacity: 0.1;

  }

  .final-ui-banner h6 {
    color: #FFF;
    text-align: center;
    font-family: Manrope;
    font-size: 40px;
    font-style: normal;
    font-weight: 800;
    line-height: normal;
    z-index: 1;
    position: relative;
    margin-top: -105px;
  }

  .final-ui-bg {
    background: #222;
    padding-top: 96px;
    padding-bottom: 140px;
  }

  .final-title-item {
    height: 235px;
  }

  .final-title-item-left {
    left: 5%;
    position: relative;
  }

  .final-title-item-right {
    right: 2%;
    position: relative;
  }

  .final-title-bg01 h3::before {
    content: "";
    background: url("<?php echo get_template_directory_uri(); ?>/assets/images/coveiot/sec01.png") no-repeat;
    position: absolute;
    background-size: 235px 235px;
    width: 235px;
    height: 235px;
    z-index: -1;
    top: -90px;
    left: -50px;
  }

  .col-12.col-md-4.mb-3.mb-md-0.final-title-bg02.final-title-item.final-title-item-right {
    right: 0px;
  }

  .final-title-bg02 h3::before {
    content: "";
    background: url("<?php echo get_template_directory_uri(); ?>/assets/images/coveiot/sec02.png") no-repeat;
    position: absolute;
    background-size: 235px 235px;
    width: 235px;
    height: 235px;
    z-index: -1;
    top: -90px;
    right: -75px;
  }



  .final-title-bg03 h3::before {
    content: "";
    background: url("<?php echo get_template_directory_uri(); ?>/assets/images/coveiot/sec03.png") no-repeat;
    position: absolute;
    background-size: 235px 235px;
    width: 235px;
    height: 235px;
    z-index: -1;
    top: -90px;
    left: -50px;
  }

  .final-title-bg04 h3::before {
    content: "";
    background: url("<?php echo get_template_directory_uri(); ?>/assets/images/coveiot/sec04.png") no-repeat;
    position: absolute;
    background-size: 235px 235px;
    width: 235px;
    height: 235px;
    z-index: -1;
    top: -90px;
    right: -50px;
  }

  .final-title-item h3 {
    color: #FFF;
    font-family: Barlow;
    font-size: 40px;
    font-style: normal;
    font-weight: 800;
    line-height: 52px;
    letter-spacing: 0.6px;
    text-transform: capitalize;
    top: 75px;
    position: relative;
    z-index: 0;
    width: max-content;
  }

  .fn-title h4 {
    color: #FFF;
    font-family: Manrope;
    font-size: 24px;
    font-style: normal;
    font-weight: 700;
    line-height: 130%;
    text-transform: lowercase;
  }

  .fn-title-left h4 {
    text-align: left;
  }

  .fn-title-right h4 {
    text-align: right;
  }

  .fn-title h4::first-letter {
    text-transform: uppercase;
  }

  .fn-image-left,
  .fn-image-right {
    padding-top: 24px;
    gap: 32px
  }

  .fn-image-grid-left {
    display: grid;
  }

  .conclustion ul li {
    list-style: outside;
    padding-top: 18px;
  }

  .project-step-disc__item ol li {
    list-style: decimal;
  }

  .project-step-disc__item ul li {
    list-style: outside;
  }

  @media only screen and (max-width: 1280px) {
    .iot-title {
      width: 100%;
    }

    .final-title-item h3 {
      font-size: 36px;
    }

    .color-pallet-banner h3,
    .typography-banner h3,
    .ui-direction-banner h3 {
      font-size: 118px;
    }

    .final-title-bg01 h3::before {
      background-size: 156px 156px;
      width: 156px;
      height: 156px;
      top: -55px;
      left: -30px !important;
    }

    .final-title-bg02 h3::before {
      background-size: 135px 135px;
      width: 135px;
      height: 135px;
      top: -40px;
      right: -56px;
    }

    .final-title-bg03 h3::before {
      background-size: 156px 156px;
      width: 156px;
      height: 156px;
      top: -55px;
      left: -30px !important;
    }

    .final-title-bg04 h3::before {
      background-size: 135px 135px;
      width: 135px;
      height: 135px;
      top: -40px;
      right: -40px;
    }


  }


  @media only screen and (max-width: 884px) and (min-width: 768px) {

    .typography-banner h3,
    .color-pallet-banner h3,
    .ui-direction-banner h3 {
      font-size: 90px;
    }

    .iot-title {
      width: 100%;
    }

    .final-title-bg02.final-title-item.final-title-item-right {
      right: 16% !important;
    }

    .final-title-bg04.final-title-item.final-title-item-right {
      right: 19% !important;
    }
  }

  /* media query */
  @media only screen and (max-width: 428px) and (min-width: 320px) {

    .iot-title {
      width: 100%;
    }

    .mx-5 {
      margin-right: 0rem !important;
      margin-left: 0rem !important;
    }

    .pl-150 {
      padding-left: 10px;
    }

    .pr-150 {
      padding-right: 10px;
    }

    .pt-80 {
      padding-top: 20px;
    }

    .pt-140 {
      padding-top: 48px;
    }

    .mb-3 {
      margin-bottom: 0.5rem !important;
    }


    .flex-mobile {
      display: flex;
      flex-direction: column-reverse;
    }


    .project-step__item {
      margin-bottom: 23px;
    }

    .color-pallet,
    .typography,
    .ui-direction {
      padding-top: 29px;
      padding-bottom: 29px;
    }

    .color-pallet-banner h3 {
      font-size: 55px;
    }

    .color-pallet-banner h6 {
      font-size: 25px;
      margin-top: -35px;
    }

    .ui-direction-banner h3 {
      font-size: 55px;
    }

    .ui-direction-banner h6 {
      font-size: 25px;
      margin-top: -35px;
    }

    .typography-banner h3 {
      font-size: 55px;
    }

    .typography-banner h6 {
      font-size: 25px;
      margin-top: -35px;
    }

    .final-title-item h3 {
      font-size: 32px;
    }

    .fn-title h4 {
      font-size: 21px;
    }

    .final-ui-banner h3 {
      font-size: 55px;
    }

    .final-ui-banner h6 {
      font-size: 25px;
      margin-top: -35px;
    }

    .final-ui-bg {
      padding-top: 32px;
      padding-bottom: 64px;
    }

    .fn-image-left,
    .fn-image-right {
      padding-top: 12px;
      gap: 5px;
    }

    .final-title-item {
      height: 185px;
    }

    .final-title-item-left {
      left: 30px;
    }

    .final-title-bg01 h3::before {
      background-size: 156px 156px;
      width: 156px;
      height: 156px;
      top: -55px;
      left: -30px !important;
    }

    .final-title-bg02 h3::before {
      background-size: 135px 135px;
      width: 135px;
      height: 135px;
      top: -40px;
      right: 0px;
    }

    .final-title-item h3 {
      padding-right: 45px;
    }

    .final-title-bg03 h3::before {
      background-size: 156px 156px;
      width: 156px;
      height: 156px;
      top: -55px;
      left: -30px !important;
    }

    .final-title-bg04 h3::before {
      background-size: 135px 135px;
      width: 135px;
      height: 135px;
      top: -40px;
      right: 0px;
    }

    .final-title-item-right {
      display: flex;
      justify-content: flex-end;
    }

    .final-title-bg03 h3::before {
      left: -22px !important;
    }

    .fn-sec-03 {
      left: 23px;
    }
  }

  @media only screen and (max-width: 390px) {
    /* .final-title-bg02.final-title-item.final-title-item-right {
      right: -145px !important;
    } */

    /* .final-title-bg04.final-title-item.final-title-item-right {
      right: -105px !important;
    } */
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
              <div class="mb-r-80 col-md-12 col-lg-12 px-0"> <span class="d-block fnt-14 text-capitalize mb-2 clr-default"><?php echo the_field('iot_company_name'); ?></span>
                <h1 class="fnt-50 fnt-800 mb-3 mb-md-4 red-stroke red-stroke--small13 px-md-0 iot-title"><?php the_title(); ?></h1>
                <p class="fnt-24"><?php echo the_field('short_description'); ?></p>
                <div class="project-type">
                  <?php if (have_rows('iot_tags')) : while (have_rows('iot_tags')) : the_row(); ?>
                      <span class="fnt-14 clr-black354"><?php echo the_sub_field('tag_list'); ?></span>
                  <?php endwhile;
                  endif; ?>
                </div>
              </div>
            </div>
          </div>
          <div class="reveal-project">
            <?php $galImage = get_the_post_thumbnail_url(); ?>
            <?php if ($galImage != '') { ?>
              <img class="wpdm-img" src="<?php echo the_post_thumbnail_url('post_thumbnail') ?>" alt="Image">
              <!-- <img class="wpdm-img" src="https://staging.terralogic.com/lollypop-cms/wp-content/uploads/2023/07/Miko-banner-1.gif" alt="Image"> -->
            <?php } ?>

            <?php $bannerVideos = get_field('iot_banner_video_link') ?>
            <?php if ($bannerVideos != '') { ?>
              <div class="play-video-on-scroll">
                <div id="play2-out" style="display:none">
                  <div id="play2" data-plyr-provider="<?php the_field('iot_banner_video_provider'); ?>" data-plyr-embed-id="<?php the_field('m_banner_video_links'); ?>"></div>
                </div>
                <video class="playvid" autoplay="" muted="" loop="" playsinline="" embed-id="<?php the_field('m_banner_video_link'); ?>" provider="<?php the_field('m_banner_video_provider'); ?>" poster="<?php the_field('iot_banner_video_poster'); ?>">
                </video>
              </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- second section -->
  <section class="p-r-80 pb-0 pare-define">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-11 col-lg-10 mx-auto">
          <div>
            <div class="col-md-10 px-0 mx-auto">
              <div class="project-step">
                <?php if (have_rows('iot_brief_descriptions')) : while (have_rows('iot_brief_descriptions')) : the_row(); ?>
                    <div class="project-step__item row">
                      <div class="col-12 col-md-4 mb-3 mb-md-0"> <span class="clr-second fnt-18 d-inline-block fnt-700 text-uppercase data-scroll disc-head text-rpd text-rpd--more"><?php the_sub_field('descr_title'); ?></span></div>
                      <div class="col-12 col-md-8 project-step-disc">
                        <div class="project-step-disc__item">
                          <?php the_sub_field('descr_content'); ?>
                        </div>
                        <?php if (get_sub_field('cta_name') != '') { ?>
                          <a class="hvr-line fnt-14 clr-second mt-4 d-inline-block data-scroll" href="<?php the_sub_field('cta_url'); ?>"><?php the_sub_field('cta_name'); ?></a>
                        <?php } ?>
                      </div>
                    </div>
                <?php endwhile;
                endif; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <?php if (have_rows('m_web_image')) : while (have_rows('m_web_image')) : the_row();
          $webImage = get_sub_field('m_project_gallery');
          if ($webImage != '') { ?>
            <div class="mb-r-80 m-img emar project-gallery"><img class="img-project-dtl data-scroll" src="<?php the_sub_field('m_project_gallery'); ?>" alt="Image"></div>
          <?php } ?>
      <?php endwhile;
      endif; ?>
    </div>
  </section>

  <!-- Color pallet -->
  <section class="color-pallet">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10 col-lg-8 col-12 mx-auto">
          <div class="color-pallet-banner mx-5">
            <h3><?php echo the_field('color_pallet_title') ?></h3>
            <h6><?php echo the_field('color_pallet_title') ?></h6>
          </div>
          <div class="color-pallet-img text-center pt-56">
            <img class="img-fluid" src="<?php echo the_field('color_pallet_image') ?>" alt="logo">
          </div>
        </div>
      </div>
      <div class="row pt-56">
        <div class="col-12 col-md-11 col-lg-10 mx-auto">
          <div class="col-md-10 px-0 mx-auto">
            <div class="project-step">
              <?php if (have_rows('color_pallet_descriptions')) : while (have_rows('color_pallet_descriptions')) : the_row(); ?>
                  <div class="project-step__item row">
                    <div class="col-12 col-md-4 mb-3 mb-md-0"> <span class="clr-second fnt-18 d-inline-block fnt-700 text-uppercase data-scroll disc-head text-rpd text-rpd--more"><?php the_sub_field('color_pallet_descr_title'); ?></span></div>
                    <div class="col-12 col-md-8 project-step-disc">
                      <div class="project-step-disc__item">
                        <?php the_sub_field('color_pallet_descr_content'); ?>
                      </div>
                    </div>
                  </div>
              <?php endwhile;
              endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Typography -->
  <section class="typography">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10 col-lg-8 col-12 mx-auto">
          <div class="typography-banner mx-5">
            <h3><?php echo the_field('typography_title') ?></h3>
            <h6><?php echo the_field('typography_title') ?></h6>
          </div>
          <div class="typography-img pt-56 text-center">
            <img class="img-fluid" src="<?php echo the_field('typography_image') ?>" alt="logo">
          </div>
        </div>
      </div>
      <div class="row pt-56">
        <div class="col-12 col-md-11 col-lg-10 mx-auto">
          <div class="col-md-10 px-0 mx-auto">
            <div class="project-step">
              <?php if (have_rows('typography_descriptions')) : while (have_rows('typography_descriptions')) : the_row(); ?>
                  <div class="project-step__item row">
                    <div class="col-12 col-md-4 mb-3 mb-md-0"> <span class="clr-second fnt-18 d-inline-block fnt-700 text-uppercase data-scroll disc-head text-rpd text-rpd--more"><?php the_sub_field('typography_descr_title'); ?></span></div>
                    <div class="col-12 col-md-8 project-step-disc">
                      <div class="project-step-disc__item">
                        <?php the_sub_field('typography_descr_content'); ?>
                      </div>
                    </div>
                  </div>
              <?php endwhile;
              endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- UI Direction -->
  <section class="ui-direction">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-11 col-lg-10 col-12 mx-auto">
          <div class="ui-direction-banner mx-5">
            <h3><?php echo the_field('ui-direction_title') ?></h3>
            <h6><?php echo the_field('ui-direction_title') ?></h6>
          </div>
          <?php if (have_rows('ui-direction-images')) : while (have_rows('ui-direction-images')) : the_row(); ?>
              <div class="ui-direction-img pt-56 text-center">
                <img class="img-fluid" src="<?php the_sub_field('ui-direction-image-item') ?>" alt="logo">
              </div>
          <?php endwhile;
          endif; ?>
        </div>
      </div>
      <div class="row pt-56">
        <div class="col-12 col-md-11 col-lg-10 mx-auto">
          <div class="col-md-10 px-0 mx-auto">
            <div class="project-step">
              <?php if (have_rows('ui_direction_descriptions')) : while (have_rows('ui_direction_descriptions')) : the_row(); ?>
                  <div class="project-step__item row">
                    <div class="col-12 col-md-4 mb-3 mb-md-0"> <span class="clr-second fnt-18 d-inline-block fnt-700 text-uppercase data-scroll disc-head text-rpd text-rpd--more"><?php the_sub_field('ui_direction_descr_title'); ?></span></div>
                    <div class="col-12 col-md-8 project-step-disc">
                      <div class="project-step-disc__item">
                        <?php
                        the_sub_field('ui_direction_descr_main');
                        ?>
                        <div class="row d-flex justify-content-start">
                          <?php
                          if (have_rows('ui_direction_descr_details')) :
                            while (have_rows('ui_direction_descr_details')) :
                              the_row();
                          ?>
                              <div class="col-md-6 mt-3 description-item">
                                <h3><?php the_sub_field('ui_direction_detail_heading'); ?></h3>
                                <p><?php the_sub_field('ui_direction_detail_content'); ?></p>
                              </div>
                          <?php endwhile;
                          endif; ?>
                        </div>
                      </div>
                    </div>
                  </div>
              <?php endwhile;
              endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Final UI -->
  <section class="final-ui">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-10 col-12 mx-auto final-ui-bg">
          <div class="final-ui-banner justify-content-center mx-5">
            <h3><?php echo the_field('final_ui_title') ?></h3>
            <h6><?php echo the_field('final_ui_title') ?></h6>
          </div>
          <div class="final-ui-img pt-56 text-center">
            <img class="img-fluid" src="<?php echo the_field('final_ui_image') ?>" alt="logo">
          </div>

          <div class="final-sec-01 col-md-10 px-0 mx-auto">
            <!-- 01 -->
            <?php if (have_rows('section_1')) : while (have_rows('section_1')) : the_row(); ?>
                <div class="project-step">
                  <div class="row">
                    <div class="col-12 col-md-4 mb-3 mb-md-0 final-title-bg01 final-title-item final-title-item-left">
                      <h3><?php the_sub_field('section_title') ?></h3>
                    </div>
                    <div class="col-12 col-md-8 project-step-disc pl-150 d-flex align-items-center">
                      <p class="text-white"><?php the_sub_field('section_content') ?></p>
                    </div>
                  </div>
                  <div class="project-step__item pt-80 row">
                    <div class="col-12 col-md-12 mb-3 mb-md-0 fn-title fn-title-left">
                      <h4><?php the_sub_field('section_heading_1') ?></h4>
                    </div>
                    <div class="col-12 col-md-12 project-step-disc">
                      <div class="project-step-disc__item fn-image-left d-flex justify-content-start">
                        <?php if (have_rows('section_images_list_1')) : while (have_rows('section_images_list_1')) : the_row(); ?>
                            <div class="img-item">
                              <img class="img-fluid mb-3" src="<?php the_sub_field('images_list_1_item') ?>" alt="logo" />
                            </div>
                        <?php endwhile;
                        endif; ?>
                      </div>
                    </div>
                  </div>
                  <div class="project-step__item row">
                    <div class="col-12 col-md-12 mb-3 mb-md-0 fn-title fn-title-right">
                      <h4><?php the_sub_field('section_heading_2') ?></h4>
                    </div>
                    <div class="col-12 col-md-12 project-step-disc">
                      <div class="project-step-disc__item fn-image-left d-flex justify-content-end">

                        <?php if (have_rows('section_images_list_2')) : while (have_rows('section_images_list_2')) : the_row(); ?>
                            <div class="img-item">
                              <img class="img-fluid mb-3" src="<?php the_sub_field('images_list_2_item') ?>" alt="logo" />
                            </div>
                        <?php endwhile;
                        endif; ?>
                      </div>
                    </div>
                  </div>
                </div>
            <?php endwhile;
            endif; ?>

            <!-- 02 -->
            <?php if (have_rows('section_2')) : while (have_rows('section_2')) : the_row(); ?>
                <div class="project-step pt-140">
                  <div class="row flex-mobile">
                    <div class="col-12 col-md-8 project-step-disc pr-150 d-flex align-items-center">
                      <p class="text-white"><?php the_sub_field('section_content') ?></p>
                    </div>
                    <div class="col-12 col-md-4 mb-3 mb-md-0 final-title-bg02 final-title-item final-title-item-right">
                      <h3><?php the_sub_field('section_title') ?></h3>
                    </div>
                  </div>
                  <div class="project-step__item row">
                    <div class="col-12 col-md-12 mb-3 mb-md-0 pt-80 fn-title fn-title-right">
                      <h4><?php the_sub_field('section_heading_1') ?></h4>
                    </div>
                    <div class="col-12 col-md-12 project-step-disc">
                      <div class="project-step-disc__item fn-image-left d-flex justify-content-end">
                        <?php if (have_rows('section_images_list_1')) : while (have_rows('section_images_list_1')) : the_row(); ?>

                            <div class="img-item">
                              <img class="img-fluid mb-3" src="<?php the_sub_field('images_list_1_item') ?>" alt="logo" />
                            </div>
                        <?php endwhile;
                        endif; ?>
                      </div>
                    </div>
                  </div>
                  <div class="project-step__item row">
                    <div class="col-12 col-md-12 mb-3 mb-md-0 fn-title fn-title-left">
                      <h4><?php the_sub_field('section_heading_2') ?></h4>
                    </div>
                    <div class="col-12 col-md-12 project-step-disc">
                      <div class="project-step-disc__item fn-image-left d-flex justify-content-start">
                        <?php if (have_rows('section_images_list_2')) : while (have_rows('section_images_list_2')) : the_row(); ?>

                            <div class="img-item">
                              <img class="img-fluid mb-3" src="<?php the_sub_field('images_list_2_item') ?>" alt="logo" />
                            </div>
                        <?php endwhile;
                        endif; ?>
                      </div>
                    </div>
                  </div>
                </div>
            <?php endwhile;
            endif; ?>

            <!-- 03 -->
            <?php if (have_rows('section_3')) : while (have_rows('section_3')) : the_row(); ?>
                <div class="project-step pt-140">
                  <div class="row">
                    <div class="col-12 col-md-4 mb-3 mb-md-0  final-title-bg03 final-title-item final-title-item-left fn-sec-03">
                      <h3><?php the_sub_field('section_title') ?></h3>
                    </div>
                    <div class="col-12 col-md-8 project-step-disc pl-150 d-flex align-items-center">
                      <p class="text-white"><?php the_sub_field('section_content') ?></p>
                    </div>
                  </div>
                  <div class="project-step__item pt-80 row">
                    <div class="col-12 col-md-12 mb-3 mb-md-0 fn-title fn-title-left">
                      <h4><?php the_sub_field('section_heading_1') ?></h4>
                    </div>
                    <div class="col-12 col-md-12 project-step-disc">
                      <div class="project-step-disc__item fn-image-left d-flex justify-content-start">

                        <?php if (have_rows('section_images_list_1')) : while (have_rows('section_images_list_1')) : the_row(); ?>
                            <div class="img-item">
                              <img class="img-fluid mb-3" src="<?php the_sub_field('images_list_1_item') ?>" alt="logo" />
                            </div>
                        <?php endwhile;
                        endif; ?>
                      </div>
                    </div>
                  </div>
                  <div class="project-step__item row">
                    <div class="col-12 col-md-12 mb-3 mb-md-0 fn-title fn-title-right">
                      <h4><?php the_sub_field('section_heading_2') ?></h4>
                    </div>
                    <div class="col-12 col-md-12 project-step-disc">
                      <div class="project-step-disc__item fn-image-left d-flex justify-content-end">
                        <?php if (have_rows('section_images_list_2')) : while (have_rows('section_images_list_2')) : the_row(); ?>
                            <div class="img-item">
                              <img class="img-fluid mb-3" src="<?php the_sub_field('images_list_2_item') ?>" alt="logo" />
                            </div>
                        <?php endwhile;
                        endif; ?>
                      </div>
                    </div>
                  </div>
                </div>
            <?php endwhile;
            endif; ?>

            <!-- 04 -->
            <?php if (have_rows('section_4')) : while (have_rows('section_4')) : the_row(); ?>
                <div class="project-step pt-140">
                  <div class="row flex-mobile">
                    <div class="col-12 col-md-8 project-step-disc pr-150 d-flex align-items-center">
                      <p class="text-white"><?php the_sub_field('section_content') ?></p>
                    </div>
                    <div class="col-12 col-md-4 mb-3 mb-md-0 final-title-bg04 final-title-item final-title-item-right">
                      <h3><?php the_sub_field('section_title') ?></h3>
                    </div>

                  </div>
                  <div class="project-step__item row">
                    <div class="col-12 col-md-12 mb-3 mb-md-0 pt-80 fn-title fn-title-right">
                      <h4><?php the_sub_field('section_heading_1') ?></h4>
                    </div>
                    <div class="col-12 col-md-12 project-step-disc">
                      <div class="project-step-disc__item fn-image-left d-flex justify-content-end">
                        <?php if (have_rows('section_images_list_1')) : while (have_rows('section_images_list_1')) : the_row(); ?>
                            <div class="img-item">
                              <img class="img-fluid mb-3" src="<?php the_sub_field('images_list_1_item') ?>" alt="logo" />
                            </div>
                        <?php endwhile;
                        endif; ?>
                      </div>
                    </div>
                  </div>
                  <div class="project-step__item row">
                    <div class="col-12 col-md-12 mb-3 mb-md-0 fn-title fn-title-left">
                      <h4><?php the_sub_field('section_heading_2') ?></h4>
                    </div>
                    <div class="col-12 col-md-12 project-step-disc">
                      <div class="project-step-disc__item fn-image-left d-flex justify-content-start">

                        <?php if (have_rows('section_images_list_2')) : while (have_rows('section_images_list_2')) : the_row(); ?>
                            <div class="img-item">
                              <img class="img-fluid mb-3" src="<?php the_sub_field('images_list_2_item') ?>" alt="logo" />
                            </div>
                        <?php endwhile;
                        endif; ?>

                      </div>
                    </div>
                  </div>
                </div>
            <?php endwhile;
            endif; ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Conclusion -->
  <?php if (get_field('iot_conclusion') != '') {  ?>
    <section class="conclusion-pad sec-pt">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-11 col-lg-12 mt-5">
            <div class="col-md-10 px-0 mx-auto">
              <div>
                <div class="col-md-10 px-0 mx-auto">
                  <div class="mb-r-80">
                    <div class="project-step">
                      <div class="project-step__item row">
                        <div class="col-12 mb-4">
                          <h3 class="clr-second fnt-40 text-left fnt-800 d-inline-block data-scroll">Conclusion</h3>
                        </div>
                        <div class="col-12 col-md-10 project-step-disc">
                          <div class="project-step-disc__item conclustion">
                            <?php the_field('iot_conclusion'); ?>

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
  <?php  } ?>

  <section class="sec-pd pt-2">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-11 col-lg-10 mx-auto">
          <div class="col-md-10 px-0 mx-auto">
            <div class="projects-nav d-flex flex-column flex-md-row justify-content-between">
              <div class="projects-nav__prev">
                <div class="d-flex">
                  <?php $nextPost = get_next_post();
                  if ($nextPost) { ?>
                    <div class="pt-2"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-red-leftAr.svg" alt="Image"></div>
                    <div class="ps-4">
                      <?php
                      $destination = get_field('company_name', $nextPost->ID);
                      next_post_link('%link', '                       
                            <h4 class="fnt-28 fnt-800">' . $destination . '</h4> '); ?>
                    </div>
                  <?php } ?>
                </div>
              </div>


              <div class="projects-nav__next">
                <div class="d-flex ms-auto">
                  <?php
                  $prevPost = get_previous_post();
                  if ($prevPost) { ?>
                    <div class="pe-4">

                      <?php
                      $destination = get_field('company_name', $prevPost->ID);
                      previous_post_link('%link',  ' <h4 class="fnt-28 fnt-800">' . $destination . '</h4>');  ?>
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