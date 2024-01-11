<?php

/**
 *
 *Template Name: Shukria
 *Template post type: projects
 **/

get_header();
?>
<style>
  .ui-direction {
    padding-top: 96px;
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

  .personas {
    height: auto;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    gap: 45px;
  }

  .personas-item {
    position: relative;
    border-radius: 24px;
    overflow: hidden;
  }

  .personas-item .personas-content {
    position: absolute;
    left: 12px;
    bottom: 0;
    z-index: 1;
    color: #fff;
  }

  .personas-item .personas-content h3 {
    font-size: 16px;
    font-weight: 700;
    margin-bottom: 8px;
    width: 60%;
  }

  .personas-item .personas-content h5 {
    font-size: 14px;
    color: rgba(222, 158, 121, 1);
    margin-bottom: 28px;
  }

  .personas-item .personas-content p {
    font-size: 14px;
    color: #fff;
  }

  .img-main {
    width: 100%;
    height: auto;
  }

  .img-main img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  .img-bg {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
  }

  .img-bg-header {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: auto;
  }

  .img-bg-header img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  .img-bg img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 0 0 24px 24px;

  }

  .fnt-red {
    color: #FD2E35;
  }

  @media only screen and (max-width: 1320px) {
    .iot-title {
      width: 100%;
    }

    .personas {
      gap: 35px;
    }

    .personas img {
      height: 90% !important;
    }

    .personas-item .personas-content h3 {
      font-size: 14px;
    }

    .personas-item .personas-content h5 {
      font-size: 12px;
      margin-bottom: 10px;
    }

    .personas-item .personas-content p {
      font-size: 12px;
    }
  }

  @media only screen and (max-width: 884px) and (min-width: 768px) {
    .iot-title {
      width: 100%;
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

    .img-main {
      width: 100%;
    }

    .flex-mobile {
      display: flex;
      flex-direction: column-reverse;
    }


    .project-step__item {
      margin-bottom: 23px;
    }

    .ui-direction {
      padding-top: 29px;
      padding-bottom: 29px;
    }

    .personas-item .personas-content {
      left: 24px;
      right: 24px;
      bottom: 35px;
    }

    .personas-item .personas-content h3 {
      font-size: 18px;
    }

    .personas-item .personas-content h5 {
      font-size: 16px;
      margin-bottom: 60px;
    }

    .personas-item .personas-content p {
      font-size: 16px;
    }
  }

  @media only screen and (max-width: 428px) {
    .personas {
      display: flex;
      flex-direction: column;
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
              <div class="mb-r-80 col-md-12 col-lg-12 px-0"> 
                <span class="d-block fnt-14 text-capitalize mb-2 clr-default">
                  <?php echo the_field('shukria_company_name'); ?>
                </span>
                <h1 class="fnt-50 fnt-800 mb-3 mb-md-4 red-stroke red-stroke--small13 px-md-0 iot-title"><?php the_title(); ?></h1>
                <p class="fnt-24"><?php echo the_field('short_description'); ?></p>
                <div class="project-type">
                  <?php if (have_rows('shukria_tags')) : while (have_rows('shukria_tags')) : the_row(); ?>
                      <span class="fnt-14 clr-black354"><?php echo the_sub_field('tag'); ?></span>
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
            <?php  } ?>

            <?php $bannerVideos = get_field('shukria_banner_video_link') ?>
            <?php if ($bannerVideos != '') { ?>
              <div class="play-video-on-scroll">
                <div id="play2-out" style="display:none">
                  <div id="play2" data-plyr-provider="<?php the_field('shukria_banner_video_provider'); ?>" data-plyr-embed-id="<?php the_field('shukria_banner_video_link'); ?>"></div>
                </div>
                <video class="playvid" autoplay="" muted="" loop="" playsinline="" embed-id="<?php the_field('shukria_banner_video_link'); ?>" provider="<?php the_field('shukria_banner_video_provider'); ?>" poster="<?php the_field('iot_banner_video_poster'); ?>">
                </video>
              </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Banner brief descriptions -->
  <section class="p-r-80 pb-0 pare-define">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-11 col-lg-11 mx-auto">
          <div class="col-md-10 px-0 mx-auto">
            <div class="project-step">
              <?php if (have_rows('shukria_brief_descriptions')) : while (have_rows('shukria_brief_descriptions')) : the_row(); ?>
                  <div class="project-step__item row">
                    <div class="col-12 col-md-4 mb-3 mb-md-0"> <span class="clr-second fnt-18 d-inline-block fnt-700 text-uppercase data-scroll disc-head text-rpd text-rpd--more">
                        <?php the_sub_field('title'); ?></span></div>
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

  <!-- Four Personas -->
  <section class="sec-bnr">
    <div class="container">
      <!-- title -->
      <div class="row">
        <div class="col-12 col-md-10 col-lg-10 mx-auto">
          <div class="col-12 col-md-11 offset-md-1">
            <div class="mb-r-80 col-md-12 col-lg-12 px-0">
              <h1 class="fnt-40 fnt-800 mb-3 mb-md-4 red-stroke red-stroke--small13 px-md-0 iot-title"><?php the_field('personas_title'); ?></h1>
            </div>
          </div>
        </div>
      </div>
      <!-- 4 image -->
      <div class="row">
        <div class="col-12 col-md-10 col-lg-10">
          <div class="col-12 col-md-11 offset-md-1">
            <div class="personas">
              <?php if (have_rows('personas_images')) : while (have_rows('personas_images')) : the_row(); ?>
                  <div class="personas-item col-md-3 col-12">
                    <div class="img-main">
                      <img class="img-fluid" src="<?php the_sub_field('image') ?>" alt="logo">
                    </div>
                    <div class="img-bg">
                      <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/shukria/img-footer.png" alt="logo">
                    </div>
                    <div class="img-bg-header">
                      <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/shukria/img-header.png" alt="logo">
                    </div>
                    <div class="personas-content">
                      <h3><?php the_sub_field('heading_1') ?></h3>
                      <h5><?php the_sub_field('heading_2') ?></h5>
                      <p><?php the_sub_field('description') ?></p>
                    </div>
                  </div>
              <?php endwhile;
              endif; ?>
            </div>
          </div>
        </div>
      </div>

      <div class="row pt-56">
        <div class="col-12 col-md-10 col-lg-10 mx-auto">
          <div class="project-step">
            <?php if (have_rows('personas_brief_descriptions')) : while (have_rows('personas_brief_descriptions')) : the_row(); ?>
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
      <div class="pt-80 text-center">
        <div class="col-12 col-md-10 col-lg-10 mx-auto">
          <img class="img-fluid" src="<?php the_field('personas_image') ?>" alt="logo">
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

  <!-- TYPOGRAPHY -->
  <section class="ui-direction">
    <div class="container">
      <div class="row pt-56">
        <div class="col-12 col-md-11 col-lg-11 mx-auto">
          <div class="col-md-10 px-0 mx-auto">
            <div class="project-step">
              <?php if (have_rows('typography_brief_descriptions')) : while (have_rows('typography_brief_descriptions')) : the_row(); ?>
                  <div class="project-step__item row">
                    <div class="col-12 col-md-4 mb-3 mb-md-0"> <span class="clr-second fnt-18 d-inline-block fnt-700 text-uppercase data-scroll disc-head text-rpd text-rpd--more">
                        <?php the_sub_field('title'); ?></span>
                    </div>
                    <div class="col-12 col-md-8 project-step-disc">
                      <div class="project-step-disc__item">
                        <?php
                        the_sub_field('content');
                        ?>
                      </div>
                    </div>
                  </div>
              <?php endwhile;
              endif; ?>
            </div>
          </div>
        </div>
        <div class="pt-80 text-center">
          <div class="col-12 col-md-10 col-lg-10 mx-auto">
            <img class="img-fluid" src="<?php the_field('typography_image') ?>" alt="logo">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Colors -->
  <section class="ui-direction">
    <div class="container">

      <div class="row pt-56">
        <div class="col-12 col-md-11 col-lg-11 mx-auto">
          <div class="col-md-10 px-0 mx-auto">
            <div class="project-step">
              <?php if (have_rows('colors_brief_descriptions')) : while (have_rows('colors_brief_descriptions')) : the_row(); ?>
                  <div class="project-step__item row">
                    <div class="col-12 col-md-4 mb-3 mb-md-0"> <span class="clr-second fnt-18 d-inline-block fnt-700 text-uppercase data-scroll disc-head text-rpd text-rpd--more">
                        <?php the_sub_field('title'); ?></span>
                    </div>
                    <div class="col-12 col-md-8 project-step-disc">
                      <div class="project-step-disc__item">
                        <?php
                        the_sub_field('content');
                        ?>
                      </div>
                    </div>
                  </div>
              <?php endwhile;
              endif; ?>
            </div>
          </div>
        </div>
        <div class="pt-56 text-center">
          <div class="col-12 col-md-10 col-lg-10 mx-auto">
            <img class="img-fluid" src="<?php the_field('colors_image') ?>" alt="logo">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- UI Design -->
  <section class="ui-direction">
    <div class="container">
      <div class="row pt-56">
        <div class="col-12 col-md-11 col-lg-11 mx-auto">
          <div class="col-md-10 px-0 mx-auto">
            <div class="project-step">
              <?php if (have_rows('ui_brief_descriptions')) : while (have_rows('ui_brief_descriptions')) : the_row(); ?>
                  <div class="project-step__item row">
                    <div class="col-12 col-md-4 mb-3 mb-md-0"> <span class="clr-second fnt-18 d-inline-block fnt-700 text-uppercase data-scroll disc-head text-rpd text-rpd--more">
                        <?php the_sub_field('title'); ?></span>
                    </div>
                    <div class="col-12 col-md-8 project-step-disc">
                      <div class="project-step-disc__item">
                        <?php
                        the_sub_field('content');
                        ?>
                      </div>
                    </div>
                  </div>
              <?php endwhile;
              endif; ?>
            </div>
          </div>
        </div>
        <?php if (have_rows('ui_images')) : while (have_rows('ui_images')) : the_row(); ?>
            <div class="pt-80 text-center">
              <div class="col-12 col-md-10 col-lg-10 mx-auto">
                <img class="img-fluid" src="<?php the_sub_field('image') ?>" alt="logo">
              </div>
            </div>
        <?php endwhile;
        endif; ?>
      </div>
    </div>
  </section>

  <!-- Conclusion -->
  <?php if (get_field('conclusion') != '') {  ?>
    <section class="conclusion-pad sec-pt pt-80">
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
                            <?php the_field('shukria_conclusion'); ?>

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