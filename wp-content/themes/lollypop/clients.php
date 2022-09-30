<?php

/**
 Template Name: Clients
 */
get_header();
?>
<main class="main">
  <!--01-->
  <!--Faq-->
  <section class="sec-pd sec-bnr-ptsm" id="one">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-11 col-lg-10 mx-auto">
          <div class="col-12 col-md-12 px-0 ">
            <div class="row">
              <?php if (have_rows('client_banner_content')) : while (have_rows('client_banner_content')) : the_row(); ?>
                  <div class="col-12 col-md-10 col-lg-10 offset-md-1"><span class="d-block fnt-14 text-capitalize mb-2 clr-default ms-lg-1">Clients</span>
                    <h1 class="fnt-78 fnt-800 mb-3 mb-md-4 pb-md-3 col-md-10 col-lg-10 col-xl-8 px-md-0 red-stroke red-stroke--small13 px-md-0"><?php the_sub_field('title'); ?></h1>
                    <h2 class="fnt-40 fnt-800 mb-3 mb-md-4 pb-md-3"><?php the_sub_field('shot_title'); ?></h2>
                    <p class="fnt-24"><?php the_sub_field('content'); ?></p><a class="hvr-line clr-second fnt-14" href="<?php echo site_url(); ?>/projects/">See our portfolio</a>
                  </div>
              <?php wp_reset_postdata();
                endwhile;
              endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--02-->
  <section class="sec-pd pt-0 sec-pb" id="second">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-11 col-lg-10 mx-auto">
          <div class="col-12 col-md-10 px-0 offset-md-1">
            <h2 class="fnt-40 fnt-800 mb-3 data-scroll">Clients who trust us</h2>
            <div class="tab-content mt-4 mt-lg-5" id="v-pills-tabContent">
              <div class="tab-pane fade show active" id="v-pills-brands" role="tabpanel" aria-labelledby="v-pills-brands-tab">
                <ul class="px-0 logo-list row">
                  <?php if (have_rows('top_logos')) : while (have_rows('top_logos')) : the_row(); ?>
                      <li class="logo-list__item col-4 col-md-3 data-scroll"><img class="img-fluid grayscale" src="<?php the_sub_field('images'); ?>" alt="Image"></li>
                  <?php wp_reset_postdata();
                    endwhile;
                  endif; ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--03-->
  <section class="sec-pd sec-pb" style="background: #221429">
    <div class="container">
      <div class="row">
        <?php if (have_rows('case_studies')) : while (have_rows('case_studies')) : the_row(); ?>
            <div class="col-12 col-md-10 col-lg-8 mx-auto">
              <div class="col-12 col-md-10 col-lg-9 px-0 mb-4 pb-3 mb-lg-5 pb-lg-2">
                <h2 class="fnt-50 fnt-800 clr-white mb-4 data-scroll"><?php the_sub_field('title') ?></h2>
                <p class="data-scroll clr-white col-12 col-md-9 px-0 fnt-24"><?php the_sub_field('content') ?></p>
              </div>
              <div class="controls-hide play-video-on-scroll">
                <div id="play1-out">
                  <div id="play1" data-plyr-provider="<?php the_sub_field('video_provider'); ?>" data-plyr-embed-id="<?php the_sub_field('video_url'); ?>"></div>
                </div>
                <video class="playvid" autoplay="" muted="" loop="" playsinline="" provider="<?php the_sub_field('video_provider'); ?>" embed-id="<?php the_sub_field('video_url'); ?>" poster="<?php the_sub_field('video_poster'); ?>">
                </video>
              </div>
            </div>
        <?php endwhile;
        endif; ?>
      </div>
    </div>
  </section>
  <!--04-->
  <section class="sec-pd sec-pt" id="fourth">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-11 col-lg-10 mx-auto">
          <div class="col-12 col-md-10 px-0 offset-md-1">
            <div class="col-md-10 col-lg-8 col-xl-7 sec-head px-0">
              <?php if (have_rows('awards_heading')) : while (have_rows('awards_heading')) : the_row(); ?>
                  <h3 class="fnt-40 fnt-800 mb-3 data-scroll"><?php the_sub_field('title'); ?></h3>
                  <p class="fnt-24 data-scroll"><?php the_sub_field('content'); ?></p>
              <?php wp_reset_postdata();
                endwhile;
              endif; ?>
            </div>
            <ul class="award-list px-0 mb-0 row">
              <?php if (have_rows('award_list')) : while (have_rows('award_list')) : the_row(); ?>
                  <li class="award-list__item col-6 col-md-4 data-scroll">
                    <div class="award">
                      <div class="award__icon text-center"> <img class="img-fluid" src="<?php the_sub_field('image'); ?>" alt="Image"></div>
                      <div class="award__info text-center">
                        <h6 class="fnt-16 fnt-400 text-center mb-1"><?php the_sub_field('title'); ?></h6>
                        <div> <span class="d-block text-center fnt-12"><?php the_sub_field('content'); ?></span><span class="d-block text-center fnt-12"><?php the_sub_field('year'); ?></span></div>
                      </div>
                    </div>
                  </li>
              <?php wp_reset_postdata();
                endwhile;
              endif; ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--05-->
  <section class="sec-pd" id="fifth">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-11 col-lg-10 mx-auto">
          <div class="col-12 col-md-10 px-0 offset-md-1">
            <div class="sec-head">
              <div class="col-12 col-lg-8 col-xl-7 px-0">
                <?php if (have_rows('industries_heading')) : while (have_rows('industries_heading')) : the_row(); ?>
                    <h2 class="fnt-50 fnt-800 mb-3 data-scroll"><?php the_sub_field('title'); ?></h2>
                    <p class="fnt-24 data-scroll"><?php the_sub_field('content'); ?></p>
                <?php endwhile;
                endif; ?>
              </div>
            </div>
            <ul class="px-0 industry-list">
              <?php if (have_rows('industries_list')) : while (have_rows('industries_list')) : the_row(); ?>
                  <li class="industry-list__item row">
                    <div class="col-12 col-md-3">
                      <h3 class="fnt-22 fnt-800 mb-2 data-scroll"><?php the_sub_field('title'); ?></h3>
                    </div>
                    <div class="col-12 col-md-8 offset-md-1">
                      <ul class="px-0 row data-scroll">
                        <?php if (have_rows('list')) : while (have_rows('list')) : the_row(); ?>
                            <li class="col-6 col-md-4 ly-6"><?php the_sub_field('content'); ?></li>
                        <?php wp_reset_postdata();
                          endwhile;
                        endif; ?>
                      </ul>
                    </div>
                  </li>
              <?php wp_reset_postdata();
                endwhile;
              endif; ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--06-->
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
  $(document).ready(function() {
    const players = Plyr.setup('.js-player');
    players.muted = false;
    players.volume = 1;
  });
</script>

<script type="application/ld+json">
  {
    "@context": "https://schema.org",

    "headline": "It's more than just business - Weve worked with renowned brands, start-ups, NGOs, investors & advisors.",
    "description": "From turning ideas into enriched digital experiences, simplifying technology for customers , saving costs for diverse organisation, our comprehensive creative services is set up to tackle challenges & grow businesses.",
    "url": "https://lollypop.design/clients/",
    "@type": "Webpage"

  }
</script>

<?php
get_footer();
?>