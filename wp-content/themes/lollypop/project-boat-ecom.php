<?php

/**
 *
 *Template Name: boAt e-commerce
 *Template post type: projects
 **/

get_header();
?>
<style>
  /* common */
  .pb-54 {
    padding-bottom: 54px;
  }

  .pt-120 {
    padding-top: 120px;
  }

  .pt-64 {
    padding-top: 64px;
  }

  .project-step__item {
    margin-bottom: 56px;
  }

  .project-step-disc__item p {
    margin-bottom: 0px !important;
  }

  .short-description,
  .iot-title {
    width: 80%;
  }

  ol>li:first-child {
    padding-top: 16px;
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


  .item-wrapper {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 40px;
  }

  .item_bg {
    background: #FFF;
    border-radius: 12px;
    padding-left: 26px;
    padding-right: 24px;
  }

  .title-line {
    position: relative;
  }

  .title-line::after {
    position: absolute;
    content: "";
    bottom: -5px;
    left: 0;
    width: 25px;
    height: 5px;
    background: #f77e00;
  }

  /* section Research and Insights */
  .sec-research-insight {
    margin-top: 100px;
  }

  .bg-black {
    background: #1B1B1B;
    border-radius: 48px;
    padding-bottom: 36px;
  }

  .research-title {
    color: #FFF;
    font-size: 40px;
    font-weight: 800;
    padding-bottom: 28px;

  }

  .research-heading {
    color: #FFF;
    padding-bottom: 36px;
    font-weight: 700;
    font-size: 24px;
  }

  .content-title {
    color: #FFF;
    font-size: 15.72px;
    font-weight: 700;
    text-transform: uppercase;
  }

  .content-desc {
    color: #FFF;
    font-size: 15.72px;
    font-weight: 400;
  }

  .right-item {
    background: #FFFFFF;
    height: 207px;
    width: 207px;
    margin-bottom: 20px;
    align-self: self-end;
  }

  .right-item>p {
    padding: 16px;
    font-size: 13.77px;
  }

  /* PERSONAS */

  .sec-personas {
    padding-top: 120px;
  }

  .personas-title {
    color: #FD2E35;
    font-size: 18px;
    font-weight: 700;
    padding-bottom: 64px;
  }

  .personas {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 40px;
  }

  .img-main>img {
    border-radius: 32px;
  }

  .personas-1,
  .personas-2,
  .personas-3 {
    width: 336px;
    height: auto;
    position: relative;
    border-radius: 41px;
  }

  .img-quotes {
    position: absolute;
    top: -30px;
  }

  .personas-content {
    padding: 0 24px;
  }

  .fnt-white {
    color: #FFF;
  }

  .personas-content>h5 {
    size: 20px;
    font-weight: 800;
  }

  .personas-content>p {
    size: 18px;
    font-weight: 400;
  }

  .personas-1 {
    background-color: #2A444D;
  }

  .personas-2 {
    background-color: #957D5F;
  }

  .personas-3 {
    background-color: #84A580;
  }

  .typography-image>img {
    border-radius: 40px;
  }

  /* Metropolis */

  .metropolis-title {
    font-size: 64px;
    font-weight: 600;
    color: #1D1D1D;
  }

  .metropolis-heading {
    font-size: 24px;
    font-weight: 200;
    color: #1D1D1D;
  }

  .colours {
    display: grid;
    grid-template-columns: repeat(7, 1fr);
    column-gap: 16px;
  }

  .color-item>img {
    width: 112px;
    height: auto;
  }

  .uidesign-image>img {
    margin-bottom: -2px;
  }

  @media only screen and (max-width: 1280px) {
    .iot-title {
      width: 100%;
    }
  }

  @media (max-width: 768px) {
    .pb-54 {
      padding-bottom: 27px;
    }

    .pt-120 {
      padding-top: 60px;
    }

    .pt-64 {
      padding-top: 32px;
    }

    .item-wrapper {
      display: grid;
      grid-template-columns: repeat(1, 1fr);
      gap: 8px;
    }

    .right-item {
      width: 280px;
      align-self: center;
    }

    .personas {
      display: grid;
      grid-template-columns: repeat(1, 1fr);
      gap: 40px;
    }

    .metropolis-image>img {
      width: 100%;
    }

    .colours {
      grid-template-columns: repeat(3, 1fr);
      gap: 16px;
      grid-gap: 20px;
    }

    .grid-item {
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .research-title {
      padding-bottom: 0px;
    }
  }
</style>

<main class="main" style="background:#F7F5F3;">
  <!-- banner section -->
  <section class="sec-pd sec-bnr p-r-80">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-11 col-lg-10 mx-auto">
          <div class="row">
            <div class="col-12 col-md-11 offset-md-1">
              <div class="mb-r-80 col-md-12 col-lg-12 px-0"> <span class="d-block fnt-14 text-capitalize mb-2 clr-default"><?php echo the_field('iot_company_name'); ?></span>
                <h1 class="fnt-50 fnt-800 mb-3 mb-md-4 red-stroke red-stroke--small13 px-md-0 iot-title"><?php the_title(); ?></h1>
                <p class="fnt-24 short-description"><?php echo the_field('short_description'); ?></p>
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

            <?php $galImage = get_the_post_thumbnail_url();
            ?>
            <?php if ($galImage != '') {
            ?>
              <img class="wpdm-img" src="<?php echo the_post_thumbnail_url('post_thumbnail')
                                          ?>" alt="Image">
            <?php  }
            ?>

            <?php $bannerVideos = get_field('iot_banner_video_link') ?>
            <?php if ($bannerVideos != '') { ?>
              <div class="play-video-on-scroll">
                <div id="play2-out" style="display:none">
                  <div id="play2" data-plyr-provider="<?php the_field('iot_banner_video_provider'); ?>" data-plyr-embed-id="<?php the_field('iot_banner_video_link'); ?>"></div>
                </div>
                <video class="playvid" autoplay="" muted="" loop="" playsinline="" embed-id="<?php the_field('iot_banner_video_link'); ?>" provider="<?php the_field('iot_banner_video_provider'); ?>" poster="<?php the_field('iot_banner_video_poster'); ?>">
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
    <div class="container pb-5">
      <div class="row">
        <div class="col-12 col-md-11 col-lg-10 mx-auto">
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
    <div class="container pt-5">
      <div class="row">
        <div class="col-12 col-md-11 col-lg-10 mx-auto">
          <div class="col-md-10 px-0 mx-auto">
            <div class="row">
              <div class="item-wrapper">
                <?php if (have_rows('6_items')) : while (have_rows('6_items')) : the_row(); ?>
                    <div class="col-12 col-md-12 mb-3 mb-md-0 pt-4 item_bg">
                      <div class="row">
                        <div class="col-8 d-flex align-items-end">
                          <h5 class="title-line"><?php the_sub_field('title'); ?></h5>
                        </div>
                        <div class="col-4 pt-4 pb-4 d-flex justify-content-end">
                          <img src="<?php the_sub_field('icon'); ?>" alt="llp" />
                        </div>
                      </div>
                      <div class="row mt-2">
                        <p>
                          <?php the_sub_field('description'); ?>
                        </p>
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
  </section>

  <!-- Research and Insights -->
  <section class="p-r-80 pb-0 pare-define sec-research-insight">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-10 col-lg-10 mx-auto bg-black">
          <div class="row text-center mt-5 mb-5">
            <h2 class="research-title"><?php the_field('research_title') ?></h2>
          </div>
          <div class="row d-flex justify-content-center">
            <div class="col-10 col-md-6 col-lg-7">
              <h4 class="research-heading"><?php the_field('research_heading') ?></h4>
              <?php if (have_rows('left_content')) : while (have_rows('left_content')) : the_row(); ?>
                  <div class="row pb-54">
                    <div class="col-2 col-lg-1">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/new-boat/right-arrow.svg" alt="" />
                    </div>
                    <div class="col-10 col-lg-11">
                      <h6 class="content-title"><?php the_sub_field('title') ?><h6>
                          <p class="content-desc"><?php the_sub_field('description') ?></p>
                    </div>
                  </div>
              <?php endwhile;
              endif; ?>
            </div>

            <div class="col-12 col-md-4 col-lg-3 d-flex flex-column">
              <?php if (have_rows('right_content')) : while (have_rows('right_content')) : the_row(); ?>
                  <div class="right-item">
                    <p>
                      <?php the_sub_field('description') ?>
                    </p>
                  </div>
              <?php endwhile;
              endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- PERSONAS -->
  <section class="p-r-80 pb-0 pt-120">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-10 col-lg-10 mx-auto">
          <div class="row text-center mt-5 mb-5">
            <h3 class="personas-title"><?php the_field('personas_title') ?></h3>
          </div>
        </div>
        <!-- 3 Personas -->
        <div class="col-12 col-md-10 col-lg-10 mx-auto">
          <div class="col-4 col-md-4">
            <div class="personas">
              <?php if (have_rows('personas_1')) : while (have_rows('personas_1')) : the_row(); ?>
                  <div class="personas-1 col-md-3 col-12">
                    <div class="img-quotes">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/new-boat/quotes.svg" alt="" />
                    </div>
                    <div class="img-main">
                      <img class="img-fluid" src="<?php the_sub_field('image') ?>" alt="logo">
                    </div>
                    <div class="personas-content">
                      <h5 class="mt-4 mb-5 fnt-white"><?php the_sub_field('bio') ?></h5>
                      <p class="pb-4 fnt-white"><?php the_sub_field('role') ?></p>
                    </div>
                  </div>
              <?php endwhile;
              endif; ?>

              <!-- 2 -->
              <?php if (have_rows('personas_2')) : while (have_rows('personas_2')) : the_row(); ?>
                  <div class="personas-2 col-md-3 col-12">
                    <div class="img-quotes">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/new-boat/quotes.svg" alt="" />
                    </div>
                    <div class="img-main">
                      <img class="img-fluid" src="<?php the_sub_field('image') ?>" alt="logo">
                    </div>
                    <div class="personas-content">
                      <h5 class="mt-4 mb-5 fnt-white"><?php the_sub_field('bio') ?></h5>
                      <p class="pb-4 fnt-white"><?php the_sub_field('role') ?></p>
                    </div>
                  </div>
              <?php endwhile;
              endif; ?>

              <!-- 3 -->
              <?php if (have_rows('personas_3')) : while (have_rows('personas_3')) : the_row(); ?>
                  <div class="personas-3 col-md-3 col-12">
                    <div class="img-quotes">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/new-boat/quotes.svg" alt="" />
                    </div>
                    <div class="img-main">
                      <img class="img-fluid" src="<?php the_sub_field('image') ?>" alt="logo">
                    </div>
                    <div class="personas-content">
                      <h5 class="mt-4 mb-5 fnt-white"><?php the_sub_field('bio') ?></h5>
                      <p class="pb-4 fnt-white"><?php the_sub_field('role') ?></p>
                    </div>
                  </div>
              <?php endwhile;
              endif; ?>
            </div>
          </div>
        </div>
        <!-- Personas Description -->
        <div class="col-12 col-md-11 col-lg-10 mx-auto pt-120">
          <div class="col-md-10 px-0 mx-auto">
            <div class="project-step">
              <?php if (have_rows('personas_brief_descriptions')) : while (have_rows('personas_brief_descriptions')) : the_row(); ?>
                  <div class="project-step__item row">
                    <div class="col-12 col-md-4 mb-3 mb-md-0"> <span class="clr-second fnt-18 d-inline-block fnt-700 text-uppercase data-scroll disc-head text-rpd text-rpd--more"><?php the_sub_field('descr_title'); ?></span></div>
                    <div class="col-12 col-md-8 project-step-disc">
                      <div class="project-step-disc__item">
                        <?php the_sub_field('descr_content'); ?>
                      </div>
                    </div>
                  </div>
              <?php endwhile;
              endif; ?>
            </div>
          </div>
        </div>
        <!-- Typography Image -->
        <div class="col-12 col-md-10 col-lg-10 mx-auto pt-120">
          <div class="row text-center typography-image">
            <img src="<?php the_field('typography_image') ?>" alt="Image">
          </div>
        </div>
        <!-- Typography Description -->
        <div class="col-12 col-md-11 col-lg-10 mx-auto pt-120">
          <div class="col-md-10 px-0 mx-auto">
            <div class="project-step">
              <?php if (have_rows('typography_brief_descriptions')) : while (have_rows('typography_brief_descriptions')) : the_row(); ?>
                  <div class="project-step__item row">
                    <div class="col-12 col-md-4 mb-3 mb-md-0"> <span class="clr-second fnt-18 d-inline-block fnt-700 text-uppercase data-scroll disc-head text-rpd text-rpd--more"><?php the_sub_field('descr_title'); ?></span></div>
                    <div class="col-12 col-md-8 project-step-disc">
                      <div class="project-step-disc__item">
                        <?php the_sub_field('descr_content'); ?>
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

  <!-- Metropolis -->
  <section class="p-r-80 pb-0 pt-64">
    <div class="container">
      <div class="row">
        <!-- Title -->
        <div class="col-12 col-md-10 col-lg-10 mx-auto">
          <div class="row d-flex justify-content-center">
            <div class="col-12 col-lg-6">
              <div class="metropolis-image">
                <img src="<?php the_field('metropolis_image') ?>" alt="metropolis" />
              </div>
            </div>
            <div class="col-12 col-lg-4 d-flex flex-column justify-content-center align-items-center">
              <h3 class="metropolis-title"><?php the_field('metropolis_title') ?></h3>
              <h3 class="metropolis-heading"><?php the_field('metropolis_heading') ?></h3>
            </div>
          </div>
        </div>
      </div>

      <!-- Colours Description -->
      <div class="row">
        <div class="col-12 col-md-11 col-lg-10 mx-auto pt-120">
          <div class="col-md-10 px-0 mx-auto">
            <div class="project-step">
              <?php if (have_rows('metropolis_descriptions')) : while (have_rows('metropolis_descriptions')) : the_row(); ?>
                  <div class="project-step__item row">
                    <div class="col-12 col-md-4 mb-3 mb-md-0">
                      <span class="clr-second fnt-18 d-inline-block fnt-700 text-uppercase data-scroll disc-head text-rpd text-rpd--more">
                        <?php the_sub_field('title'); ?>
                      </span>
                    </div>
                    <div class="col-12 col-md-8 project-step-disc">
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

      <!-- Colours Items -->
      <div class="row pt-64">
        <div class="col-12 col-md-10 col-lg-10 mx-auto">
          <div class="row d-flex justify-content-center">
            <div class="col-12 col-md-10 col-lg-10">
              <div class="colours">
                <?php if (have_rows('metropolis_image_colours')) : while (have_rows('metropolis_image_colours')) : the_row(); ?>
                    <div class="color-item">
                      <img class="img-fluid" src="<?php the_sub_field('colours') ?>" alt="logo">
                    </div>
                <?php endwhile;
                endif; ?>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- UIDesign Description -->
      <div class="row">
        <div class="col-12 col-md-11 col-lg-10 mx-auto pt-120">
          <div class="col-md-10 px-0 mx-auto">
            <div class="project-step">
              <?php if (have_rows('metropolis_ui_descriptions')) : while (have_rows('metropolis_ui_descriptions')) : the_row(); ?>
                  <div class="project-step__item row">
                    <div class="col-12 col-md-4 mb-3 mb-md-0"> <span class="clr-second fnt-18 d-inline-block fnt-700 text-uppercase data-scroll disc-head text-rpd text-rpd--more"><?php the_sub_field('descr_title'); ?></span></div>
                    <div class="col-12 col-md-8 project-step-disc">
                      <div class="project-step-disc__item">
                        <?php the_sub_field('descr_content'); ?>
                      </div>
                    </div>
                  </div>
              <?php endwhile;
              endif; ?>
            </div>
          </div>
        </div>

        <!-- UiDesign Image -->
        <div class="col-12 col-md-10 col-lg-10 mx-auto pt-64">
          <div class="row text-center uidesign-image">
            <?php if (have_rows('metropolis_uidesign_images')) : while (have_rows('metropolis_uidesign_images')) : the_row(); ?>
                <img src="<?php the_sub_field('image') ?>" alt="Image">
            <?php endwhile;
            endif; ?>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Conclusion -->
  <?php if (get_field('iot_conclusion') != '') {  ?>
    <section class="conclusion-pad sec-pt pt-120">
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