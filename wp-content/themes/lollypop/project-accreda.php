<?php

/**
 *
 *Template Name: Accreda
 *Template post type: projects
 **/

get_header();
?>
<style>
  .fnt-playfair {
    font-family: 'Playfair Display';
  }

  .li-disc {
    margin-top: 15px;
  }

  .li-disc li::before {
    width: 5px;
    height: 5px;
  }

  .conclustion p,
  .conclustion ul {
    margin-bottom: 20px !important;
  }

  .conclusion-pad {
    padding-top: 80px;
  }

  .project-type span {
    margin-right: 15px;
  }

  .fnt-14 {
    font-size: 14px;
  }

  .fnt-22 {
    font-size: 22px;
  }

  .clr-white {
    color: #FFFFFF;
  }

  .clr-purple {
    color: #EEAAE5;
  }

  .clr-yellow-brown {
    color: #FEF3E3;
  }

  .bg-purple {
    background: #5C1A53;
  }

  .bg-yellow-brown {
    background: #CD9E55;
  }

  .bg-purple,
  .bg-yellow-brown {
    padding: 24px;
  }

  .mb-r-12 {
    padding-bottom: 12px;
  }

  .wf-wrapper {
    position: relative;
  }

  .blur-white {
    position: absolute;
    height: 235px;
    bottom: -1px;
    width: 100%;
    background: url("<?php echo get_template_directory_uri(); ?>/assets/images/accreda/white-blur.png");
    z-index: 1;
  }

  /* typography */
  .mt-120 {
    margin-top: 120px;
  }

  .typography-bg {
    background: #5C1A53;
    padding: 80px 94px;
  }

  .clr-typo {
    color: #BA96B5;
  }

  .typo-rule {
    border: 1px dashed #DAA75B;
    margin-top: 72px;
    margin-bottom: 40px;
  }

  /* Colour */

  .clr-lightblack {
    color: #221429;
  }

  .mt-48 {
    margin-top: 48px;
  }

  .mt-40 {
    margin-top: 40px;
  }

  .item-img:nth-child(2) {
    width: 100px;
  }

  .mt-30 {
    margin-top: 30px;
  }

  .mt-28 {
    margin-top: 28px;
  }

  /* development */
  .dev-bg {
    background: url("<?php echo get_template_directory_uri(); ?>/assets/images/accreda/dev-top.svg"),
      url("<?php echo get_template_directory_uri(); ?>/assets/images/accreda/dev-bottom.svg");
    background-position: right top, left bottom;
    background-repeat: no-repeat, no-repeat;
    background-color: #fcf8f2;
    padding: 50px 54px 42px 50px;
  }

  .clr-purple {
    color: #5C1A53;
  }

  .fnt-800 {}

  .dev-title {
    font-family: Playfair Display;
    color: #CD9E55;
    margin-top: 24px;
  }

  .dev-heading {
    color: #5C1A53;
    font-weight: 800;
    margin-top: 4px;
    margin-bottom: 8px;
  }

  .dev-content {
    color: #221429;
    font-size: 14px;
    line-height: 22px;
  }

  .mt-32 {
    margin-top: 32px;
  }

  .mt-28 {
    margin-top: 28px;
  }

  .clr-strategies {
    color: #EEAAE5;
    opacity: 80%;
  }

  .fnt-key-detail__title {
    margin-bottom: 6px;
    line-height: 27px;
  }

  .pd-bt-12 {
    padding-bottom: 12px;
  }

  .mt-20 {
    margin-top: 20px;
  }

  .sec-wireframe {
    margin-top: 120px;
  }

  .prj-scope {
    text-align: left;
  }

  @media(max-width:768px) {
    .typography-bg {
      padding: 32px;
    }

    .dev-bg {
      padding: 50px 54px 42px 20px;
    }

    .prj-scope {
      text-align: center;
    }

    .sec-wireframe {
      margin-top: 48px;
    }

    .mt-120 {
      margin-top: 60px;
    }
  }
</style>


<main class="main" style="background:#ffffff;">
  <!--01-->
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
                  <?php if (have_rows('tags')) : while (have_rows('tags')) : the_row(); ?>
                      <span class="fnt-14 clr-black354"><?php the_sub_field('list'); ?></span>
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
            <?php } ?>

            <?php $bannerVideo = get_field('banner_video_link') ?>
            <?php if ($bannerVideo != '') { ?>
              <div class="play-video-on-scroll">
                <div id="play2-out" style="display:none">
                  <div id="play2" data-plyr-provider="<?php the_field('banner_video_provider'); ?>" data-plyr-embed-id="<?php the_field('banner_video_link'); ?>"></div>
                </div>
                <video class="playvid" autoplay="" muted="" loop="" playsinline="" embed-id="<?php the_field('banner_video_link'); ?>" provider="<?php the_field('banner_video_provider'); ?>" poster="<?php the_field('banner_video_poster'); ?>">
                </video>
              </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--02-->
  <section class="p-r-80 pb-0 pare-define">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-11 col-lg-10 mx-auto">
          <div class="col-md-10 px-0 mx-auto">
            <div class="mb-r-120">
              <div class="project-step">
                <?php if (have_rows('brief_descriptions')) : while (have_rows('brief_descriptions')) : the_row(); ?>
                    <div class="project-step__item row">
                      <div class="col-12 col-md-4 mb-3 mb-md-0">
                        <span class="clr-second fnt-18 d-inline-block fnt-700 text-uppercase data-scroll disc-head text-rpd text-rpd--more"><?php the_sub_field('title'); ?></span>
                      </div>
                      <div class="col-12 col-md-8 project-step-disc">
                        <div class="project-step-disc__item">
                          <?php the_sub_field('content'); ?>
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
      <!-- Project Scope and Objectives  -->
      <div class="row">
        <div class="col-12 col-md-11 col-lg-10 mx-auto">
          <div class="col-md-10 px-0 mx-auto">
            <div class="mb-r-120">
              <div class="project-step">
                <?php if (have_rows('project_scope')) : while (have_rows('project_scope')) : the_row(); ?>
                    <div class="project-step__item row">
                      <div class="col-12 col-md-6 mb-3 mb-md-0 px-0 prj-scope">
                        <img src="<?php the_sub_field('image'); ?>" alt="logo" />
                      </div>
                      <div class="col-12 col-md-6 project-step-disc">
                        <div class="mb-4">
                          <span class="clr-second fnt-18 d-inline-block fnt-700 text-uppercase data-scroll disc-head"><?php the_sub_field('heading'); ?></span>
                        </div>
                        <div class="project-step-disc__item">
                          <?php the_sub_field('content'); ?>
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
      <!--  Key Strategies -->
      <?php if (have_rows('key_strategies')) : while (have_rows('key_strategies')) : the_row(); ?>
          <div class="row">
            <div class="col-12 col-md-11 col-lg-8 mx-auto">
              <div class="col-md-11 px-0 mx-auto">
                <div class="mb-r-80">
                  <div class="project-step">
                    <div class="row">
                      <div class="col-12 col-md-12 d-flex justify-content-center project-step-disc">
                        <span class="clr-second fnt-18 d-inline-block fnt-700 text-uppercase data-scroll disc-head">
                          <?php the_sub_field('title'); ?>
                        </span>
                      </div>
                    </div>
                    <div class="project-step__item row mt-32">
                      <?php if (have_rows('key_1')) : while (have_rows('key_1')) : the_row(); ?>
                          <div class="col-12 col-md-6 project-step-disc">
                            <div class="bg-purple">
                              <h3 class="clr-second d-inline-block fnt-22 fnt-500 clr-white data-scroll disc-head fnt-playfair">
                                <?php the_sub_field('heading'); ?>
                              </h3>
                              <div class="project-step-disc__item">
                                <p class="fnt-14 fnt-400 clr-strategies"><?php the_sub_field('content'); ?> </p>
                              </div>
                            </div>
                          </div>
                      <?php endwhile;
                      endif; ?>
                      <?php if (have_rows('key_2')) : while (have_rows('key_2')) : the_row(); ?>
                          <div class="col-12 col-md-6 mt-md-0 mt-4 project-step-disc">
                            <div class="bg-yellow-brown">
                              <h3 class="clr-second d-inline-block fnt-22 fnt-500 clr-white data-scroll disc-head fnt-playfair">
                                <?php the_sub_field('heading'); ?>
                              </h3>
                              <div class="project-step-disc__item fnt-14 fnt-400 clr-yellow-brown">
                                <p class="fnt-14 fnt-400 clr-yellow-brown"><?php the_sub_field('content'); ?> </p>
                              </div>
                            </div>
                          </div>
                      <?php endwhile;
                      endif; ?>
                      <?php if (have_rows('key_3')) : while (have_rows('key_3')) : the_row(); ?>
                          <div class="col-12 col-md-6 mt-4 project-step-disc">
                            <div class="bg-yellow-brown">
                              <h3 class="clr-second d-inline-block fnt-22 fnt-500 clr-white data-scroll disc-head fnt-playfair">
                                <?php the_sub_field('heading'); ?>
                              </h3>
                              <div class="project-step-disc__item">
                                <p class="fnt-14 fnt-400 clr-yellow-brown"><?php the_sub_field('content'); ?> </p>
                              </div>
                            </div>
                          </div>
                      <?php endwhile;
                      endif; ?>
                      <?php if (have_rows('key_4')) : while (have_rows('key_4')) : the_row(); ?>

                          <div class="col-12 col-md-6 mt-4 project-step-disc">
                            <div class="bg-purple">
                              <h3 class="clr-second d-inline-block fnt-22 fnt-500 clr-white data-scroll disc-head fnt-playfair">
                                <?php the_sub_field('heading'); ?>
                              </h3>
                              <div class="project-step-disc__item fnt-14 fnt-400 clr-purple">
                                <p class="fnt-14 fnt-400 clr-strategies"><?php the_sub_field('content'); ?></p>
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
          </div>
      <?php endwhile;
      endif; ?>
    </div>
  </section>

  <!-- Atul Sharma  -->

  <section class="p-r-80 pb-0 pare-define">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-11 col-lg-10 mx-auto">
          <div class="col-md-12 px-0 mx-auto">
            <div class="project-step">
              <img class="img-fluid" src="<?php the_field('atul_lavleen') ?>" alt="" />
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md-11 col-lg-10 mx-auto">
          <div class="col-md-10 px-0 mx-auto">
            <div class="project-step">
              <?php if (have_rows('key_descriptions')) : while (have_rows('key_descriptions')) : the_row();
              ?>
                  <div class="project-step__item row">
                    <div class="col-12 col-md-4 mb-3 mb-md-0">
                      <span class="clr-second fnt-18 d-inline-block fnt-700 text-uppercase data-scroll disc-head text-rpd text-rpd--more">
                        <?php the_sub_field('title'); ?>
                      </span>
                    </div>
                    <div class="col-12 col-md-8 project-step-disc">
                      <div class="project-step-disc__item">
                        <p class="pd-bt-12"><?php the_sub_field('key_info'); ?></p>
                        <div class="row">
                          <?php if (have_rows('details')) : while (have_rows('details')) : the_row();
                          ?>
                              <div class="col-12 col-lg-6 mt-20">
                                <h3 class="fnt-20 fnt-800 fnt-key-detail__title"><?php the_sub_field('title'); ?></h3>
                                <p class="fnt-14"><?php the_sub_field('description'); ?></p>
                              </div>
                          <?php endwhile;
                          endif;
                          ?>
                        </div>
                      </div>
                      <!-- <?php if (get_sub_field('cta_name') != '') { ?>
                          <a class="hvr-line fnt-14 clr-second mt-4 d-inline-block data-scroll" href="<?php the_sub_field('cta_url'); ?>"><?php the_sub_field('cta_name'); ?></a>
                        <?php } ?> -->
                    </div>
                  </div>
              <?php endwhile;
              endif;
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Wireframes for Web -->
  <section class="sec-wireframe">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-11 col-lg-11 mx-auto">
          <div class="row justify-content-center">
            <div class="col-12 col-md-5 wf-wrapper">
              <div class="mb-r-12 col-12 col-md-12 col-lg-12">
                <span class="mb-2 mt-28 clr-second d-inline-block fnt-22 fnt-500 text-uppercase  data-scroll disc-head">
                  <?php the_field('wfr_title') ?>
                </span>
                <p>
                  <?php the_field('wfr_content') ?>
                </p>
              </div>
              <div class="col-12 col-md-12 col-lg-12 mt-40">
                <?php if (have_rows('left_images')) : $i = 0;
                  while (have_rows('left_images')) : the_row(); ?>
                    <img class="img-fluid <?php echo $i > 0 ? 'mt-2' : '' ?>" src="<?php the_sub_field('image'); ?>" alt="logo" />
                <?php $i++;
                  endwhile;
                endif; ?>
              </div>
              <div class="blur-white col-12 col-md-12 col-lg-12"></div>
            </div>
            <div class="col-12 col-md-5 wf-wrapper">
              <div class="col-12 col-md-12 col-lg-12">
                <?php if (have_rows('right_images')) : $i = 0;
                  while (have_rows('right_images')) : the_row(); ?>
                    <img class="img-fluid <?php echo $i > 0 ? 'mt-2' : '' ?>" src="<?php the_sub_field('image'); ?>" alt="logo" />
                <?php $i++;
                  endwhile;
                endif; ?>
              </div>
              <div class="blur-white col-12 col-md-12 col-lg-12"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Typography -->
  <section class="sec-typo mt-120">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-11 col-lg-11 mx-auto">
          <div class="row d-flex justify-content-center">
            <div class="col-11 col-lg-10 typography-bg ms-0">
              <div class="row">
                <div class="col-12 col-md-5 px-0">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/accreda/typography-vector.svg" alt="typo" />
                  <h3 class="clr-white mt-5"><?php the_field('typo_title'); ?></h3>
                </div>
                <div class="col-12 col-md-7 px-0">
                  <p class="clr-typo text-end fnt-400"><?php the_field('typo_content'); ?></p>
                </div>
              </div>
              <div class="row">
                <div class="col-12 px-0 typo-rule">
                </div>
              </div>
              <div class="row">
                <div class="col-12 col-lg-10 px-0">
                  <img class="img-fluid" src="<?php the_field('typo_img'); ?>" alt="typo" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Colors -->
  <section class="sec-colo mt-120">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-11 col-lg-10 mx-auto">
          <div class="row d-flex justify-content-center">
            <div class="col-12 col-lg-6">
              <div class="row">
                <div class="col-12 col-md-12 px-0">
                  <h3 class="clr-second text-uppercase text-center fnt-18 fnt-700"><?php the_field('color_title'); ?></h3>
                </div>
                <div class="col-12 col-md-12 px-0">
                  <p class="clr-lightblack text-center fnt-400"><?php the_field('color_content'); ?></p>
                </div>
              </div>
              <div class="row mt-48">
                <div class="col-12">
                  <img class="img-fluid" src="<?php the_field('color_img'); ?>" alt="typo" />
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Web UI -->
  <section class="sec-web-ui mt-120">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-11 col-lg-10 mx-auto">
          <div class="row d-flex justify-content-center">
            <div class="col-11">
              <div class="row d-flex justify-content-center">
                <div class="col-12 col-md-12 px-0">
                  <h3 class="clr-second text-uppercase text-center fnt-18 fnt-700"><?php the_field('ui_title'); ?></h3>
                </div>
                <div class="col-12 col-md-7 px-0">
                  <p class="clr-lightblack text-center fnt-400"><?php the_field('ui_content'); ?></p>
                </div>
              </div>

              <div class="row mt-48">
                <div class="col-12 d-flex flex-column justify-content-center px-0 ui-items ">
                  <?php if (have_rows('ui_images')) : while (have_rows('ui_images')) : the_row(); ?>
                      <img class="img-fluid" src="<?php the_sub_field('image_1'); ?>" alt="typo" />
                      <img class="img-fluid" src="<?php the_sub_field('image_2'); ?>" alt="typo" />
                      <img class="img-fluid mt-30" src="<?php the_sub_field('image_3'); ?>" alt="typo" />
                      <img class="img-fluid mt-120" src="<?php the_sub_field('image_4'); ?>" alt="typo" />
                      <img class="img-fluid mt-120" src="<?php the_sub_field('image_5'); ?>" alt="typo" />
                  <?php endwhile;
                  endif; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Development Process -->
  <section class="sec-development mt-120">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-11 col-lg-10 mx-auto">
          <div class="row d-flex justify-content-center">
            <div class="col-11">
              <div class="row d-flex justify-content-center">
                <div class="col-12 col-md-12 px-0">
                  <h3 class="clr-second text-uppercase text-center fnt-18 fnt-700"><?php the_field('development_heading'); ?></h3>
                </div>
              </div>
              <?php if (have_rows('development_process')) : while (have_rows('development_process')) : the_row(); ?>
                  <div class="row mt-32">
                    <div class="col-12 dev-bg">
                      <div class="row mt-2 mt-lg-4">
                        <div class="col-12 col-lg-6">
                          <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/accreda/dev-vector.svg" alt="" />
                          <h3 class="dev-title"><?php the_sub_field('devvelopment_heading') ?></h3>
                        </div>
                      </div>
                      <div class="row mt-2 mt-lg-4">
                        <?php if (have_rows('development_items')) : $i = 0;
                          while (have_rows('development_items')) : the_row(); ?>
                            <div class="col-12 col-lg-5  <?php echo $i > 0 ? 'pe-0' : '' ?>">
                              <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/accreda/dev-bullet.svg" alt="" />
                              <p class="dev-heading"><?php the_sub_field('title') ?></p>
                              <p class="dev-content"><?php the_sub_field('description') ?></p>
                            </div>
                        <?php $i++;
                          endwhile;
                        endif; ?>
                      </div>
                      <div class="row">
                        <div class="col-12 col-lg-6 mt-3 mt-lg-4">
                          <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/accreda/dev-vector.svg" alt="" />
                          <h3 class="dev-title"><?php the_sub_field('challenges_and_solutions_heading') ?></h3>
                        </div>
                      </div>
                      <div class="row mt-2 mt-lg-4">
                        <?php if (have_rows('chanllenges_and_solutions')) :
                          while (have_rows('chanllenges_and_solutions')) : the_row(); ?>
                            <div class="col-12 col-lg-4">
                              <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/accreda/dev-bullet.svg" alt="" />
                              <p class="dev-heading"><?php the_sub_field('title') ?></p>
                              <p class="dev-content"><?php the_sub_field('description') ?></p>
                            </div>
                        <?php
                          endwhile;
                        endif; ?>
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
  <!-- Architecture -->
  <section class="sec-architecture mt-120">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-11 col-lg-10 mx-auto">
          <div class="row d-flex justify-content-center">
            <div class="col-12 col-lg-10 ">
              <div class="row d-flex justify-content-center">
                <div class="col-12 col-md-12 px-0">
                  <h3 class="clr-second text-uppercase text-center fnt-18 fnt-700"><?php the_field('architecture_title'); ?></h3>
                </div>
              </div>
              <div class="row mt-48">
                <div class="col-12 ui-items">
                  <img class="img-fluid" src="<?php the_field('architecture_img'); ?>" alt="typo" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Comlcusion -->
  <?php if (get_field('accreda_conclusion') != '') {  ?>
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
                            <?php the_field('accreda_conclusion'); ?>
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
  <!--05-->
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


<script>
  $("h4").addClass("fnt-28 fnt-800 mb-2 data-scroll");
  $('.bd-brd').css('border-color', '#f7f4f2');
  $(".project-step-disc__item h4").addClass('fnt-28 fnt-800 mb-2 data-scroll')
  $(".project-step-disc__item ul").addClass('li-disc m-0')
  $(".project-step-disc ul").addClass('li-disc m-0')
  $(".project-step-disc__item ul li").addClass('fnt-16 clr-black-354 data-scroll')
  $(".m-img").removeClass('mb-r-80');
  $(".m-img:last-child").addClass('mb-r-80');
  //  $(".define").addClass('projects-sec-pd');
  //   $(".define:nth-child(1)").removeClass('projects-sec-pd');
</script>
<?php
get_footer();
?>