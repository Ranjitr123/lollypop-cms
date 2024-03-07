<?php

/**
 *
 *Template Name: Accreda
 *Template post type: projects
 **/

get_header();
?>
<style>
  .define {
    margin-top: 30px;
  }

  @media only screen and (min-width: 768px) {
    .define {
      margin-top: 60px;
    }
  }

  @media only screen and (min-width: 992px) {
    .projects-sec-pd {
      padding-top: 70px
    }

    .define {
      margin-top: 80px;
    }
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
            <div class="mb-r-80">
              <div class="project-step">
                <?php if (have_rows('brief_descriptions')) : while (have_rows('brief_descriptions')) : the_row(); ?>
                    <div class="project-step__item row">
                      <div class="col-12 col-md-4 mb-3 mb-md-0">
                        <span class="clr-second fnt-18 d-inline-block fnt-700 text-uppercase data-scroll disc-head text-rpd text-rpd text-rpd--more"><?php the_sub_field('title'); ?></span>
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
            <div class="mb-r-80">
              <div class="project-step">
                <?php if (have_rows('project_scope')) : while (have_rows('project_scope')) : the_row(); ?>
                    <div class="project-step__item row">
                      <div class="col-12 col-md-6 mb-3 mb-md-0">
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
                    <div class="row mb-3">
                      <div class="col-12 col-md-12 d-flex justify-content-center project-step-disc">
                        <span class="clr-second fnt-18 d-inline-block fnt-700 text-uppercase data-scroll disc-head">
                          <?php the_sub_field('title'); ?>
                        </span>
                      </div>
                    </div>
                    <div class="project-step__item row">
                      <?php if (have_rows('key_1')) : while (have_rows('key_1')) : the_row(); ?>
                          <div class="col-12 col-md-6 project-step-disc">
                            <div class="bg-purple">
                              <span class="clr-second d-inline-block fnt-22 fnt-500 clr-white data-scroll disc-head">
                                <?php the_sub_field('heading'); ?>
                              </span>
                              <div class="project-step-disc__item fnt-14 fnt-400 clr-purple">
                                <?php the_sub_field('content'); ?>
                              </div>
                            </div>
                          </div>
                      <?php endwhile;
                      endif; ?>
                      <?php if (have_rows('key_2')) : while (have_rows('key_2')) : the_row(); ?>
                          <div class="col-12 col-md-6 mt-md-0 mt-4 project-step-disc">
                            <div class="bg-yellow-brown">
                              <span class="clr-second d-inline-block fnt-22 fnt-500 clr-white data-scroll disc-head">
                                <?php the_sub_field('heading'); ?>
                              </span>
                              <div class="project-step-disc__item fnt-14 fnt-400 clr-yellow-brown">
                                <?php the_sub_field('content'); ?>
                              </div>
                            </div>
                          </div>
                      <?php endwhile;
                      endif; ?>
                      <?php if (have_rows('key_3')) : while (have_rows('key_3')) : the_row(); ?>
                          <div class="col-12 col-md-6 mt-4 project-step-disc">
                            <div class="bg-yellow-brown">
                              <span class="clr-second d-inline-block fnt-22 fnt-500 clr-white data-scroll disc-head">
                                <?php the_sub_field('heading'); ?>
                              </span>
                              <div class="project-step-disc__item fnt-14 fnt-400 clr-yellow-brown">
                                <?php the_sub_field('content'); ?>
                              </div>
                            </div>
                          </div>
                      <?php endwhile;
                      endif; ?>
                      <?php if (have_rows('key_4')) : while (have_rows('key_4')) : the_row(); ?>

                          <div class="col-12 col-md-6 mt-4 project-step-disc">
                            <div class="bg-purple">
                              <span class="clr-second d-inline-block fnt-22 fnt-500 clr-white data-scroll disc-head">
                                <?php the_sub_field('heading'); ?>
                              </span>
                              <div class="project-step-disc__item fnt-14 fnt-400 clr-purple">
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
          </div>
      <?php endwhile;
      endif; ?>
    </div>
  </section>

  <!-- Atul Sharma  -->

  <!-- Wireframes for Web -->
  <section class="sec-pd sec-bnr p-r-80">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-11 col-lg-10 mx-auto">
          <div class="row justify-content-center">
            <div class="col-6 col-md-5">
              <div class="mb-r-12 col-12 col-md-12 col-lg-12">
                <span class="mb-2 mt-5 clr-second d-inline-block fnt-22 fnt-500 text-uppercase  data-scroll disc-head">
                  Wireframes for Web
                </span>
                <p>
                  Using the research as reference, we started creating wireframes.
                  Throughout the design process, we kept the users in mind,
                  ensuring that their objectives and challenges were taken into account.
                  Low-fidelity wireframes and high-fidelity prototypes were created to
                  visualize the user interface and gather feedback. Take a look at the
                  wireframes created by our UX tribe.
                </p>
              </div>
              <div class="col-12 col-md-12 col-lg-12">
                <?php if (have_rows('left_images')) : while (have_rows('left_images')) : the_row(); ?>
                    <img class="mt-3" src="<?php the_sub_field('image'); ?>" alt="logo" />
                <?php endwhile;
                endif; ?>
              </div>
              <div class="blur-white col-12 col-md-12 col-lg-12">
                blur-white
              </div>
            </div>
            <div class="col-6 col-md-5">
              <div class="col-12 col-md-12 col-lg-12">
                <?php if (have_rows('right_images')) : while (have_rows('right_images')) : the_row(); ?>
                    <img class="mt-3" src="<?php the_sub_field('image'); ?>" alt="logo" />
                <?php endwhile;
                endif; ?>
              </div>
              <div class="blur-white col-12 col-md-12 col-lg-12">
                blur-white
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

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