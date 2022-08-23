<?php
/**
 Template Name: Whitepaper Detail
 */

get_header();
?>

<style>
    h3{margin-top: 30px;}
</style>
<main class="main">
      <!--01-->
       <div id="whitepaperForm">
      <section class="sec-pd pb-0 sec-bnr-ptsm">
        <div class="container"> 
          <div class="row">
            <div class="col-12 col-md-11 col-lg-10 mx-auto">
              <div class="row"> 
                <div class="col-12 col-md-10 col-lg-9 offset-md-1">
                  <div class="page-head"><span class="d-block fnt-14 text-capitalize mb-2 clr-default"><?php the_field('category_name'); ?></span>
                    <h1 class="fnt-50 fnt-800 mb-3 mb-md-4 red-stroke red-stroke--small13 px-md-0 col-md-10 col-lg-8"><?php the_title(); ?></h1>
                    <p class="fnt-24 col-md-10 px-0"><?php the_field('small_title'); ?></p>
                  </div> 
                </div>
              </div>
              <div class="reveal"><img class="wpdm-img" src="<?php echo the_post_thumbnail_url( 'post_thumbnail' ) ?>"></div>
            </div>
          </div>
        </div>
      </section>
      <!--02-->
      <section class="sec-pd sec-paper-detail"> 
        <div class="container">
          <div class="row"> 
            <div class="col-12 col-md-11 col-lg-10 mx-auto">
              <div class="row"> 
                <div class="col-12 col-md-3 col-xxl-2 pe-lg-4 pe-xxl-0 d-none d-md-block">
                  <!-- Trending Blogs-->
                  <ul class="px-0 trending-blogs sticky-desktop">
                   <?php 
                            $args = array(
                                'post_type'=>'whitepapers', // Your post type name
                                'posts_per_page' => 2,
                                //'meta_key'			=> 'date',
                                //'orderby'			=> 'meta_value',
								//'order'				=> 'ASC' ,
                            );
                    $whitepaper = new WP_Query( $args );
                if ( $whitepaper->have_posts() ) : while ( $whitepaper->have_posts() ) : $whitepaper->the_post(); ?>
                    <li class="trending-blogs__item data-scroll"> <a class="d-block" href="<?php the_permalink(); ?>">
                        <h4 class="fnt-22 fnt-800 mb-2"><?php the_title(); ?></h4>
                        <div> <span class="fnt-12 me-4">Published on: <?php the_field('date') ?></span></div></a></li>
                    <?php wp_reset_postdata(); endwhile; endif; ?>
                  </ul>
                </div>
                <div class="col-12 col-md-8 offset-md-1 mb-4 mb-md-0">
                  <div class="paper-detail">
                    <?php the_content(); ?>
                  </div>
                </div>
                <!-- Mobile view-->
                <div class="col-12 d-md-none">
                  <!-- Trending Blogs-->
                  <ul class="px-0 trending-blogs sticky-desktop">
                   <?php 
                            $args = array(
                                'post_type'=>'whitepapers', // Your post type name
                                'posts_per_page' => 2,
                                //'meta_key'			=> 'date',
                                //'orderby'			=> 'meta_value',
								//'order'				=> 'ASC' ,
                            );
                    $whitepaper = new WP_Query( $args );
                if ( $whitepaper->have_posts() ) : while ( $whitepaper->have_posts() ) : $whitepaper->the_post(); ?>
                    <li class="trending-blogs__item data-scroll"> <a class="d-block" href="<?php the_permalink(); ?>">
                        <h4 class="fnt-22 fnt-800 mb-2"><?php the_title(); ?></h4>
                        <div> <span class="fnt-12 me-4">Published on: <?php the_field('date') ?></span></div></a></li>
                         <?php wp_reset_postdata(); endwhile; endif; ?>
                   
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--03-->
      <!--Subscribe-->
       <section class="sec-footer-trans">
        <div class="container z-1">
          <div class="row"> 
            <div class="col-12 col-md-11 col-lg-10 mx-auto">
              <div class="py-70 px-3 data-scroll" style="background: #221429;">
                <div class="d-flex align-items-center justify-content-center">
                  <div class="col-12 col-md-8 px-0 d-inline-block clr-white text-center"> 
                    <div class="mb-45 pb-lg-3"><span class="d-block fnt-24 mb-2 pb-2 mb-md-4 pb-md-0">Want to read more?</span>
                      <h2 class="fnt-50 fnt-800 clr-white">Reach out, and we’ll send it to you right away!</h2>
                    </div>
                    <form id="whitepaper" data-parsley-validate="">
                      <div class="subscribe-input col-12 mx-auto col-md-10 col-lg-8 px-0 d-flex flex-column flex-md-row align-items-center">
                        <input class="fnt-16 fnt-400" id="email" name="email" type="email" placeholder="Your Email Address" required>
                        <input type="hidden" id="whitepaper_title" name="whitepaper_title" value="<?php the_title(); ?>">
                        <input type="hidden" name="pdf_attach" value="<?php the_field('pdf_attach'); ?>">
                        <input type="hidden" name="whitepaper-content" value="<?php the_field('landing_content'); ?>">
                        <button class="web-btn web-btn--red subscribe-input__btn hvr-none" type="submit">Submit</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>    
          </div>
        </div>
      </section>
      <!--<section class="sec-footer-trans" id="nine">
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
      </section>-->
    </div>
    </main>

 <script src="<?php echo get_template_directory_uri(); ?>/js/white-loader.js" defer></script>
<script>
    
$('body').css('background', 'rgb(255, 255, 255)');
    $('.bd-brd').css('border-color', '#f7f4f2');
    $("h5").addClass('rd-stroke');
    $("h5").addClass('data-scroll');
    $("h6").addClass('data-scroll');
</script>
<?php
get_footer();
?>