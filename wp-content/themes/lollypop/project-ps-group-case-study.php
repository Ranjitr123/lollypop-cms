<?php

/**
 *
 *Template Name: project-ps-group-case-study
 *Template post type: projects
 **/

get_header();
?>
<style>
.conclusions p{
    margin-bottom: 15px;
    color:#221429;
}
.ui-web{
    padding:56px 0;
}
.project-step-disc__item ul {
    padding-top: 20px;
}
.project-step-disc__item ul li{
    margin-bottom:16px;
}

.wpdm-img {
    width: 100%;
    max-width: 100%;
    height: auto;
}

@media (max-width: 768px) {
    .ui-web{
        padding:24px 0;
    }

    .titleSection {
        font-size: 24px;
        line-height: 30px;
    }


    .titleBlue::before {
        width: 20px;
        height: 20px;
        left: -8px;
        top: 0;
    }

    .titleSection__subtitle {
        text-align: center;
    }

    .wireframe_images {
        flex-direction: column;
        gap: 1rem;
    }

}
</style>
<main class="main" style="background:#FFFFFF;">
    <!-- Section Project Info -->
    <section class="sec-pd sec-bnr p-r-80">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-11 col-lg-10 mx-auto">
                    <div class="row">
                        <div class="col-12 col-md-11 offset-md-1">
                            <div class="mb-r-80 col-md-12 col-lg-12 px-0"> <span
                                    class="d-block fnt-14 text-capitalize mb-2 clr-default"><?php echo the_field('project_name'); ?></span>
                                <h1 class="fnt-50 fnt-800 mb-3 mb-md-4 red-stroke red-stroke--small13 px-md-0">
                                    <?php the_title(); ?></h1>
                                <p class="fnt-24"><?php echo the_field('project_description'); ?></p>
                                <div class="project-type">
                                    <?php if (have_rows('project_tags')) : while (have_rows('project_tags')) : the_row(); ?>
                                    <span class="fnt-14 clr-black354"><?php echo the_sub_field('tag'); ?></span>
                                    <?php endwhile;
                                    endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img class="wpdm-img" src="<?php the_field('project_banner') ?>" alt="Image">
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- project overview -->
    <section class="p-r-80 pb-0 pare-define">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-11 col-lg-10 mx-auto">
                    <div>
                        <div class="col-md-10 px-0 mx-auto">
                            <div class="mb-r-80">
                                <div class="project-step">
                                    <?php if (have_rows('project_overview')) : while (have_rows('project_overview')) : the_row(); ?>
                                    <div class="project-step__item row">
                                        <div class="col-12 col-md-4 mb-3 mb-md-0"> <span
                                                class="clr-second fnt-18 d-inline-block fnt-700 text-uppercase data-scroll disc-head text-rpd--more"><?php the_sub_field('title'); ?></span>
                                        </div>
                                        <div class="col-12 col-md-8 project-step-disc">
                                            <div class="project-step-disc__item overview2 data-scroll">
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
        </div>
    </section>

    <!-- Testimonial Images -->
    <section class="container">
        <div class="row justify-content-center pt-5 pb-4 g-0">
            <div class="col-12 col-md-10 col-lg-10 mx-auto">
                <div class="testimonial_images">
                    <?php if (have_rows('testimonial_images')) : while (have_rows('testimonial_images')) : the_row(); ?>
                    <div class="mb-4 text-center">
                        <img class="w-100 data-scroll" src="<?php echo the_sub_field('testimonial_image'); ?>"
                            alt="information image">
                    </div>
                    <?php endwhile;endif; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Key overview -->
    <section class="p-r-80 pb-0 pare-define">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-11 col-lg-10 mx-auto">
                    <div>
                        <div class="col-md-10 px-0 mx-auto">
                            <div class="mb-r-80">
                                <div class="project-step">
                                    <?php if (have_rows('key_overview')) : while (have_rows('key_overview')) : the_row(); ?>
                                    <div class="project-step__item row">
                                        <div class="col-12 col-md-4 mb-3 mb-md-0"> <span
                                                class="clr-second fnt-18 d-inline-block fnt-700 text-uppercase data-scroll disc-head text-rpd--more"><?php the_sub_field('title'); ?></span>
                                        </div>
                                        <div class="col-12 col-md-8 project-step-disc">
                                            <div class="project-step-disc__item overview2 data-scroll">
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
        </div>
    </section>

  <!-- Colours  -->
  <?php while (have_rows('color_and_typeface')) : the_row(); ?>
    <section class="container">
        <div class="row justify-content-center py-5 g-0">
            <div class="col-12 col-md-11 col-lg-10 mx-auto">
                <div class="mb-4 text-center">
                    <img class="w-100 data-scroll"  src="<?php echo the_sub_field('color'); ?>" alt="information image">
                </div>
            </div>
            <div class="col-12 col-md-11 col-lg-10 mx-auto">
                <div class="mt-5 text-center">
                    <img class="w-100 data-scroll" src="<?php echo the_sub_field('typeface'); ?>" alt="information image">
                </div>
            </div>
        </div>
    
    </section>
    <?php endwhile; ?>

    <!-- UI Web -->

    <section class="container">
        <div class="row justify-content-center py-3 g-0">
            <div class="col-12 col-md-11 col-lg-10 mx-auto my-4">
         <?php if (have_rows('ui_website')) : while (have_rows('ui_website')) : the_row(); ?>
                <div class="text-center ui-web">
                    <img class="w-100 data-scroll"  src="<?php echo the_sub_field('image_web'); ?>" alt="image_web image">
                </div>
                <?php endwhile; endif; ?> 
            </div>
        </div>
    </section>
    <!-- Conclusions -->
    <?php if (get_field('conclusions') != '') { ?>
        <section class="conclusion-pad sec-pt">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mt-5">
                        <div class="col-md-10 px-0 mx-auto">
                            <div>
                                <div class="col-md-10 px-0 mx-auto">
                                    <div class="mb-r-80">
                                        <div class="project-step">
                                            <div class="project-step__item row">
                                                <div class="col-12">
                                                    <h3 class="clr-second fnt-40 text-left fnt-800 d-inline-block data-scroll">Conclusion</h3>
                                                </div>
                                                <div class="col-md-12 project-step-disc mt-4">
                                                    <div class="project-step-disc__item conclusions data-scroll">
                                                        <?php echo the_field('conclusions'); ?>
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