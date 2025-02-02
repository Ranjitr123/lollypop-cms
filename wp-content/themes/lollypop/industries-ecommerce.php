<?php

/**
 * Template Name: E-commerce
 * Template post type: industries
 */

get_header();
?>
<style>
  section.sec-pd51.last {
    padding-bottom: 160px;
  }

  section.sec-pd51 {
    padding-bottom: 160px;
  }

  .cta {
    margin-bottom: 80px;
    padding-left: 40px;
    padding-top: 30px;
    padding-bottom: 26px;
    border-left: 5px solid #FD2E35;
    background: linear-gradient(90deg, #F1EDEA 0%, #F7F5F3 100%);
  }

  .cta_box {
    display: flex;
    width: 846px;
    height: 188px;
    padding: 19px 40px;
    flex-direction: column;
    justify-content: center;
    align-items: flex-start;
    gap: 10px;
    flex-shrink: 0;
    border-left: 4px solid #FD2E35;
    background: linear-gradient(90deg, #F1EDEA -0.84%, rgba(247, 245, 243, 0.00) 91.2%);
  }

  .cta-text {
    color: #221429;
    font-size: 28px;
    font-style: normal;
    font-weight: 800;
    line-height: 130%;
    /* 36.4px */
    letter-spacing: -1.12px;
  }

  .cta-des {
    color: #221429;
    font-size: 24px;
    font-style: normal;
    font-weight: 400;
    line-height: 130%;
    /* 31.2px */
    letter-spacing: -0.96px;
  }

  .cta-link {
    color: #FD2E35;
    font-family: Manrope;
    font-size: 14px;
    font-style: normal;
    font-weight: 400;
    line-height: 160%;
    /* 22.4px */
    text-transform: capitalize;
  }

  .sec-pd1 {
    padding-bottom: 40px;
  }

  .sec-top {
    padding-top: 40px;
  }

  .sec-pd1 .approach_style {
    width: 100%;
    max-width: 845px;
    margin: 0 auto;
  }

  .sec-pd1 .approach_style .col-md-2 p {
    color: #FD2E35;
    font-size: 16px;
    font-weight: 700;
  }

  .sec-pd1 .approach_style .space p:first-child {
    color: #221429;
    font-size: 18px;
    font-weight: 400;
    max-width: 548px;
    padding-bottom: 25px;
    line-height: 26px;
  }

  .sec-pd1 .space1 h3 {
    font-size: 22px;
    font-weight: 800;
    line-height: 30px;
  }

  .sec-pd1 .space1 p {
    max-width: 266px;
    font-size: 16px;
    font-weight: 400;
    color: #221429;
    line-height: 26px;
  }

  .pb-5 {
    padding-bottom: 4rem !important;
  }

  .pb-70 {
    padding-bottom: 70px;
  }

  /* Our Client */

  .client-logo {
    display: grid;
    grid-template-columns: repeat(5, 20%);
    column-gap: 15px;
    row-gap: 70px;
  }

  .client-logo__item {
    padding-top: 15px;
  }

  .fnt-30 {
    color: var(--LLY-Black---Heading, #221429);
    font-size: 30px;
  }

  .fnt-clr {
    color: var(--LLY-Black, #221429);
  }

  .fnt-sub-heading {
    color: var(--black-200, #A7A1A9);
    font-family: Manrope;
    font-size: 12px;
    font-style: normal;
    font-weight: 800;
  }

  .pd-12 {
    padding: 12px 0px;
  }

  .story_list__item {
    padding-bottom: 48px;
  }

  .fnt-12 {
    font-size: 12px;
  }

  .sec-story {
    padding-bottom: 120px;
  }

  .pr-60 {
    padding-right: 60px !important;
  }

  .px-50 {
    padding: 0px 50px;
  }

  .pl-40 {
    padding-left: 40px;
  }

  .text-upper {
    text-transform: uppercase !important;
  }

  @media(max-width:767px) {
    .sec-pd51 {
      padding-bottom: 71px !important;
    }
  }

  @media screen and (max-width: 428px) {
    .client-logo {
      grid-template-columns: repeat(2, 50%);
      column-gap: 0px;
      row-gap: 50px;
    }

    .fnt-sub-heading {
      padding-top: 12px;
    }

    .pl-40 {
      padding-left: 12px;
    }

  }

  .pd-210 {
    padding-top: 210px;
  }
</style>

<main class="main">
  <!--01-->
  <section class="sec-pd pb-0 sec-bnr">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-11 col-lg-10 mx-auto">
          <div class="row">
            <div class="col-12 col-md-11 offset-md-1">
              <div class="page-head"><span class="d-block fnt-14 text-capitalize mb-2 clr-default">
                  <a href="<?php echo site_url(); ?>/industries/">Industries</a>/<?php the_field('category_name'); ?>
                </span>
                <h1 class="fnt-50 fnt-800 mb-3 mb-md-4 red-stroke red-stroke--small13 px-md-0 col-md-11 col-lg-9 px-0"><?php the_field('heading'); ?></h1>
                <p class="fnt-24 col-md-10 col-lg-9 px-0"><?php the_field('short_title_description'); ?></p>
                <?php if (get_field('cta_heading')) : ?>
                  <div class="cta_box col-lg-10">
                    <span class="cta-text"><?php the_field('cta_heading'); ?></span>
                    <span class="cta-des"><?php the_field('cta_short_title_description'); ?></span>
                    <a class="clr-second  d-inline-block fnt-14 data-scroll hvr-line cta-link" href="<?php echo site_url(); ?>/project-enquiry/">Let’s Talk</a>
                  </div>
                <?php endif ?>
              </div>
            </div>
          </div>
          <!-- <div class=""><img class="wpdm-img" src="<?php the_field('banner'); ?>" alt="Image"></div> -->
          <div class="reveal-project <?php if (!get_field('cta_heading')) : echo "pd-210"; endif ?> ">
            <?php $galImage = get_field('banner'); ?>
            <?php if ($galImage != '') { ?>
              <img class="wpdm-img" src="<?php the_field('banner'); ?>" alt="Image">
            <?php } ?>

            <?php $bannerVideo = get_field('banner_video_link'); ?>
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
  <section class="sec-pd">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-10 col-lg-7 mx-auto">
          <div class="mb-4 pb-md-2 col-md-11 px-0">
            <?php if (have_rows('our_expertise')) : while (have_rows('our_expertise')) : the_row(); ?>
                <h3 class="col-md-12 fnt-50 fnt-800 fnt-clr mb-4 data-scroll">
                  <?php the_sub_field('title'); ?></h3>
                <p class="fnt-24 col-md-10 col-lg-11 px-0 data-scroll"><?php the_sub_field('content'); ?></p>
            <?php endwhile;
            endif; ?>
          </div>
          <ul class="px-0 values-list row justify-content-between mb-0">
            <?php if (have_rows('our_expertise_list')) : while (have_rows('our_expertise_list')) : the_row(); ?>
                <li class="values-list__item col-12 col-md-5 data-scroll">
                  <h6 class="fnt-800 fnt-clr mb-1"><?php the_sub_field('title'); ?></h6>
                  <p class="fnt-clr  col-11 col-lg-12 px-0 mb-0"><?php the_sub_field('content'); ?></p>
                </li>
            <?php endwhile;
            endif; ?>
          </ul><a class="clr-second mt-4 mt-md-5 d-inline-block fnt-14 data-scroll hvr-line" href="<?php echo site_url(); ?>/project-enquiry/">Let’s Talk</a>
        </div>
      </div>
    </div>
  </section>

  <!--03 Our Client-->
  <section class="sec-pd sec-client">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-10 col-lg-8 mx-auto">
          <div class="mb-4 pb-md-2 col-md-11 px-0">
            <?php if (have_rows('our_client_description')) : while (have_rows('our_client_description')) : the_row(); ?>
                <h3 class="fnt-50 fnt-800 fnt-clr  mb-4 px-0 data-scroll">
                  <?php the_sub_field('our_client_tittle'); ?></h3>
                <p class="fnt-24 fnt-clr  col-md-9 col-lg-8 px-0 data-scroll"><?php the_sub_field('our_client_content'); ?></p>
            <?php endwhile;
            endif; ?>
          </div>

          <div class="px-0 client-logo row">
            <?php if (have_rows('client_logo_list')) : while (have_rows('client_logo_list')) : the_row(); ?>
                <div class="client-logo__item"><img class="img-fluid" src="<?php the_sub_field('client_logo'); ?>" alt="logo"></div>
            <?php endwhile;
            endif; ?>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!--04 Designing-->
  <section class="sec-designing pb-0">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-11 col-lg-10 mx-auto">
          <div class="reveal-project">
            <img class="wpdm-img" src="<?php the_field('designing_image'); ?>" alt="Image">
          </div>
          <div class="row mt-5 mx-auto ms-3">
            <div class="mb-4 pb-md-2 row d-flex px-0">
              <div class="mb-md-4 mb-0 pb-md-2 col-md-4 col-12 px-0 text-md-center">
                <p><?php the_field('small_title') ?></p>
              </div>
              <div class="mb-4 pb-md-2 col-md-7 col-12 px-0">
                <h3 class="fnt-40 fnt-800 fnt-clr mb-4 col-11 data-scroll"><?php the_field('designing_title') ?></h3>
                <p class="fnt-clr  col-md-8 col-lg-8 px-0 data-scroll"><?php the_field('designing_content') ?></p>
                <a class="clr-second mt-4 mt-md-5 d-inline-block fnt-14 data-scroll hvr-line" href="<?php the_field('designing_cta_link') ?>" style="opacity: 1; transform: translateY(0px);"><?php the_field('designing_cta_text') ?></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--05 Research-->
  <section class="sec-pd sec-research">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-10 col-lg-7 mx-auto">
          <div class="mb-4 pb-md-2 col-md-9 px-0">
            <h3 class="fnt-50 fnt-800 fnt-clr mb-4 data-scroll">
              <?php the_field('research_title'); ?></h3>
          </div>

          <div class="px-0 values-list row justify-content-between mb-0">
            <?php if (have_rows('research_items')) : while (have_rows('research_items')) : the_row(); ?>
                <div class="values-list__item col-12 col-md-5 data-scroll">
                  <h6 class="fnt-clr fnt-800 mb-1"><?php the_sub_field('title'); ?></h6>
                  <p class="fnt-clr col-11 col-lg-12 px-0 mb-0"><?php the_sub_field('content'); ?></p>
                </div>
            <?php endwhile;
            endif; ?>
          </div>
          <a class="clr-second mt-4 mt-md-5 d-inline-block fnt-14 data-scroll hvr-line" href="<?php echo site_url(); ?>/project-enquiry/">Get in Touch</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Our Stories -->
  <section class="sec-pd sec-pb" id="seventh">
    <div class="container">
      <div class="pb-md-4 pb-lg-5 mb-lg-5">
        <div class="row">
          <div class="col-md-10 col-lg-8 mx-auto">
            <div class="mb-50 data-scroll">
              <h2 class="fnt-50 fnt-800 mb-16"><?php the_field('story_title') ?></h2>
              <p class="fnt-24 fnt-clr col-md-10 col-lg-8 px-0 data-scroll"><?php the_field('story_content') ?></p>
            </div>
            <!-- White papers-->
            <ul class="px-0 home-artical-list mt-">
              <?php
              $args = array(
                'post_type' => 'whitepapers', // Your post type name
                'posts_per_page' => 1,
              );
              $whitepaper = new WP_Query($args);

              if ($whitepaper->have_posts()) : while ($whitepaper->have_posts()) : $whitepaper->the_post(); ?>

                  <li class="home-artical-list__item data-scroll"> <a class="home-artical" href="<?php the_permalink(); ?>">
                      <div class="row">
                        <div class="col-12 col-md-3 col-lg-5">
                          <div class="revealnone h-100">
                            <img class="home-artical-img mb-3 mb-md-0" srcset="<?php the_field('home_page_thumbnail') ?> 500w, <?php the_field('home_page_thumbnail') ?> 343w" sizes="(max-width: 600px) 500px,
              343px" src="<?php the_field('home_page_thumbnail') ?>" alt="Blog Images">
                          </div>
                        </div>
                        <div class="col-12 col-md-7">
                          <div class="px-lg-4"><span class="text-uppercase mb-2 d-block fnt-12 fnt-800">white paper</span>
                            <h3 class="fnt-30 fnt-800 mb-2 pb-lg-1"><?php the_title(); ?> </h3>
                            <p class="clr-gray col-lg-11 mt-1 mt-md-0 mb-1 mb-md-3"><?php echo wp_trim_words(get_field('landing_content'), 35); ?></p><span class="d-block fnt-12">Posted on <?php the_field('date') ?></span>
                          </div>
                        </div>
                      </div>
                    </a></li>
              <?php wp_reset_postdata();
                endwhile;
              endif; ?>
            </ul>
            <a class="clr-second fnt-14 hvr-line data-scroll" href="<?php echo site_url() ?>/whitepapers/">View all Whitepapers</a>

            <!-- Blogs -->
            <ul class="px-0 home-artical-list pb-4 pb-md-5 mb-md-3 whitFetext">
              <?php
              $args = array(
                'post_type' => 'post', // Your post type name
                'posts_per_page' => 1,
                'orderby' => 'post_date',
                'order' => 'DESC'
              );
              $blog = new WP_Query($args);
              if ($blog->have_posts()) : while ($blog->have_posts()) : $blog->the_post(); ?>

                  <li class="home-artical-list__item data-scroll"> <a class="home-artical" href="<?php the_permalink(); ?>">
                      <div class="row">
                        <div class="col-12 col-md-3 col-lg-5">
                          <div class="revealnone h-100">
                            <img class="home-artical-img mb-3 mb-md-0" srcset="<?php echo the_post_thumbnail_url('post_thumbnail') ?> 500w, <?php echo the_post_thumbnail_url('post_thumbnail') ?> 343w" sizes="(max-width: 600px) 500px,
              343px" src="<?php echo the_post_thumbnail_url('post_thumbnail') ?>" alt="Blog Images">
                          </div>
                        </div>
                        <div class="col-12 col-md-7">
                          <div class="px-lg-4"><span class="text-uppercase d-block mb-2 fnt-12 fnt-800">blog</span>
                            <h3 class="fnt-30 fnt-800 mb-2 pb-lg-1"><?php the_title(); ?></h3>
                            <p class="clr-gray col-11 mt-1 mt-md-0 mb-1 mb-md-3"><?php the_field('short_descriptions') ?></p><span class="d-block fnt-12">By <?php if (have_rows('author_details')) : while (have_rows('author_details')) : the_row(); ?><?php the_sub_field('author'); ?> <?php endwhile;
                                                                                                                                                                                                                                                                                        endif; ?>
                          on <?php the_time('j F, Y'); ?></span>
                          </div>
                        </div>
                      </div>
                    </a></li>
              <?php wp_reset_postdata();
                endwhile;
              endif; ?>
            </ul>
            <a class="clr-second fnt-14 hvr-line data-scroll" href="<?php echo site_url() ?>/blogs/">View All Blogs</a>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!--07-->
  <section class="sec-footer-trans">
    <div class="container z-1">
      <div class="row">
        <div class="col-12 col-md-11 col-lg-10 mx-auto">
          <div class="py-70 px-3 data-scroll" style="background: #221429;">
            <div class="d-flex align-items-center justify-content-center">
              <div class="col-12 col-md-8 col-lg-8 px-0 d-inline-block clr-white text-center">
                <div class="mb-45"><span class="d-block fnt-24 mb-2 pb-2 mb-md-4 pb-md-0"><?php the_field('last_small_title'); ?></span>
                  <h2 class="fnt-50 fnt-800 clr-white px-50"><?php the_field('last_heading'); ?></h2>
                </div><a class="web-btn web-btn--red" href="<?php the_field('last_cta_link'); ?>"><?php the_field('last_cta_text'); ?></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>


<?php
get_footer();
?>