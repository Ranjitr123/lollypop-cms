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
  .wireframe-banner-design {
    text-align: center;
  }

  .wireframe-banner h3 {
    font-family: 'Manrope';
    font-style: normal;
    color: #E5F2F9;
    font-size: 128px;
    font-family: Manrope;
    font-style: normal;
    font-weight: 800;
    line-height: 140px;
    letter-spacing: -5.12px;
  }

  .wireframe-banner p {
    max-width: 737px;
    margin: 0 auto;
    text-align: left;
  }

  /* second section */
  .project-gallery {
    max-width: 1076px;
  }

  /* information structure */

  .information-banner h3 {
    color: #E5F2F9;
    font-size: 128px;
    font-family: Manrope;
    font-style: normal;
    font-weight: 800;
    line-height: 140px;
    letter-spacing: -5.12px;
  }

  /* typo graphy */
  .type-sec-h3 {
    margin-bottom: -226px;
    text-align: start;
    transform: rotate(4deg);
    margin-left: 91px;
    width: 521.896px;
    font-size: 120px;
  }

  /* icongraphy */
  .icon-div p {
    max-width: 377px;
    margin: 0 auto;
    font-family: Manrope;
    font-style: normal;
  }

  /* colors */
  .color-banner p {
    max-width: 603px;
    margin: 0 auto;
    font-family: Manrope;
    font-style: normal;
  }

  .icons-p {
    margin: inherit !important;
    margin-top: 20px !important;
    /* margin-left: 60px !important; */
    margin-bottom: 20px !important;
    font-size: 16px;
    font-family: 'Montserrat', sans-serif !important;
    font-style: normal;
    font-weight: 400;
    line-height: 168%;

  }

  .icon-img {
    margin-top: -139px;
    margin-left: 20px;
  }

  .img-fluid-color {
    max-width: 65%;
    height: 65%;
  }

  .conclustion li,
  ul {
    list-style: outside;
  }

  .project-step-disc__item li {
    list-style: disc;
  }

  .mb-n1 {
    margin-bottom: -20px;
  }

  /* media query */
  @media (max-width: 767px) {
    .mb-n1 {
      margin-bottom: -10px;
    }

    .information-banner h3 {
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
      margin: 0 auto !important;
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
                <p class="fnt-24"><?php echo the_field('m_short_descriptions'); ?></p>
                <div class="project-type">
                  <?php if (have_rows('m_tags')) : while (have_rows('m_tags')) : the_row(); ?>
                      <span class="fnt-14 clr-black354"><?php echo the_sub_field('m_list'); ?></span>
                  <?php endwhile;
                  endif; ?>
                </div>
              </div>
            </div>
          </div>

          <img class="wpdm-img" src="<?php the_field('banner_image') ?>" alt="Image">
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
              <div class="mb-r-80">
                <div class="project-step">
                  <?php if (have_rows('infos')) : while (have_rows('infos')) : the_row(); ?>
                      <div class="project-step__item row">
                        <div class="col-12 col-md-4 mb-3 mb-md-0"> <span class="clr-second fnt-18 d-inline-block fnt-700 text-uppercase data-scroll disc-head text-rpd--more"><?php the_sub_field('info_title'); ?></span></div>
                        <div class="col-12 col-md-8 project-step-disc">
                          <div class="project-step-disc__item">
                            <?php the_sub_field('info_content'); ?>
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
    </div>
    <div class="container">
      <?php if (have_rows('gallery_images')) : while (have_rows('gallery_images')) : the_row();
      ?>
          <div class="row">
            <div class="col-12 col-md-11 col-lg-10 mx-auto">
              <div class="row mx-auto w-100">
                <div class=" col-7"><img class="w-100" src="<?php the_sub_field('left_image'); ?>" alt="Image"></div>
                <div class="col-5 d-flex flex-column gap-4 justify-content-end mb-n1">
                  <?php
                  $images = get_sub_field('right_images');

                  if (!empty($images)) {
                    foreach ($images as $image) {
                      echo '<img  class="w-100" src="' . $image . '" alt="Image">';
                    }
                  }
                  ?>
                </div>
              </div>
            </div>
          </div>
      <?php endwhile;
      endif; ?>
    </div>
  </section>

  <!-- information structure -->
  <section class="information-sec pt-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-12 col-lg-11 col-12 mx-auto">
          <div class="information-banner mx-5">
            <h3><?php echo the_field('m_information_structure_title') ?></h3>
          </div>
          <div class="information-img text-center">
            <img class="img-fluid" src="<?php echo the_field('m_information_structure_image') ?>" alt="logo">
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- wireframe section -->
  <section calss="wireframe-sec">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-12 col-lg-11 col-12">
          <div class="wireframe-banner text-center">
            <h3><?php the_field('m_wireframe_title'); ?></h3>
            <p class="mt-md-4 text-md-left"><?php the_field('m_wireframe_description'); ?></p>
          </div>
          <div class="wireframe-img text-center mt-5">
            <img class="img-fluid" src="<?php the_field('m_wireframe_image'); ?>" alt="logo">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- type face -->
  <section calss="logo-sec type-sec">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10 col-lg-10 col-12">
          <div class="wireframe-img logo-img">
            <img class="img-fluid" src="<?php the_field('m_typeface_image'); ?>" alt="logo">
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
          <div class="wireframe-banner color-banner">
            <h3><?php the_field('m_colors_title'); ?></h3>
            <p class="icons-p"><?php the_field('m_colors_description'); ?></p>
          </div>
          <div class="wireframe-img color-img pt-md-5 pb-md-5">
            <img class="mt-md-5 pb-md-5 img-fluid img-fluid-color" src="<?php the_field('m_colors_image'); ?>" alt="logo">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- icon sec -->
  <section calss="icon-sec">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-11 col-lg-10 col-12 mt-5">
          <div class="wireframe-banner icon-div px-5">
            <h3><?php the_field('m_iconography_title'); ?></h3>
            <p class="icons-p"><?php the_field('m_iconography_description'); ?></p>
          </div>
          <div class="wireframe-img color-img  pb-md-5">
            <img class="pb-md-5 img-fluid icon-img" src="<?php the_field('m_iconography_image'); ?>" alt="logo">
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Mobile UI design -->
  <section calss="mobileui-sec">
    <div class="container">
      <div class="row justify-content-center ">
        <div class="col-md-11 col-lg-10 col-12 mobile-row">
          <div class="wireframe-banner mobile-banner wireframe-banner-design pt-md-0 pt-5 mb-md-4">
            <h3><?php the_field('m_mobile_ui_title'); ?></h3>
            <p class="mt-md-4"><?php the_field('m_mobile_ui_description'); ?></p>
          </div>
          <div class="wireframe-img mobile-img mt-md-4">
            <?php
            $m_mobile = get_field('m_mobile_ui_image');

            if (!empty($m_mobile)) {
              foreach ($m_mobile as $image) {
                echo '<img  class="img-fluid w-100" src="' . $image . '" alt="Image">';
              }
            }
            ?>

          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Miko Exciting animation -->
  <?php if (get_field('m_exciting_animation') != '') { ?>
    <section calss="mobileui-sec">
      <div class="container">
        <div class="row justify-content-center ">
          <div class="col-md-11 col-lg-10 col-12 mobile-row">
            <div class="wireframe-img mobile-img">
              <img class="img-fluid" src="<?php the_field('m_exciting_animation'); ?>" alt="logo">
            </div>
          </div>
        </div>
      </div>
    </section>
  <?php } ?>

  <?php if (get_field('conclusion') != '') { ?>
    <section class="conclusion-pad sec-pt">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-11 col-lg-10 mt-5">
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
<script>
  $("h4").addClass("fnt-28 fnt-800 mb-2 data-scroll");
  $('.bd-brd').css('border-color', '#f7f4f2');
  $(".project-step-disc__item h4").addClass('fnt-28 fnt-800 mb-2 data-scroll')
  $(".project-step-disc__item ul").addClass('m-0')
  $(".project-step-disc ul").addClass('li-disc m-4')
  $(".project-step-disc__item ul li").addClass('fnt-16 clr-black-354 data-scroll my-4')
</script>
<?php get_footer(); ?>