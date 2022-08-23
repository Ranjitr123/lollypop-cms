<?php

get_header();
?>
    <main class="main">
      <!--01-->
      <!-- Section Banner-->
      <section class="sec-sm-pd sec-bnr-ptsm">
        <div class="container"> 
          <div class="row"> 
            <div class="col-12 col-md-10 mx-auto car-bnr"> 
              <div class="d-flex flex-column align-items-center justify-content-center text-center"><img class="img-fluid mb-40" src="https://lollypop.design/wp-content/uploads/2022/02/About-Us-Illustration.webp" alt="career-artist" data-aos="zoom-in-down" data-aos-duration="2000">
                <div class="mb-40"><span class="d-block fnt-14 mb-1 mb-md-2" data-aos="fade-up" data-aos-duration="500">Job Role</span>
                  <h1 class="fnt-50 fnt-800" data-aos="fade-up" data-aos-duration="1000"><?php the_title(); ?></h1>
                </div>
                <div data-aos="fade-up" data-aos-duration="1500"> <span class="fnt-16 fnt-800 text-capitalize">Location</span>
                  <p class="fnt-16m-0"><?php the_field('locations'); ?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--02-->
      <!-- <section class="sec-sm-pd pt-0"> 
        <div class="container"> 
          <div class="row"> 
            <div class="col-12 col-md-11 col-lg-10 mx-auto">
              <div class="img-hvr"><img class="img-fluid mx-auto d-inline-block" src="<?php echo the_post_thumbnail_url( 'post_thumbnail' ) ?>"></div>
            </div>
          </div>
        </div>
      </section> -->
      <!--03-->
      <section class="sec-sm-pd">
        <div class="container"> 
          <div class="row"> 
            <div class="col-12 col-md-11 col-lg-10 mx-auto"> 
              <div class="row"> 
                <div class="col-12 col-md-8 mb-4 pb-2 mb-md-0 pb-md-0"> 
                  <div class="job-detail">
                    <div class="job-detail__item">
                      <?php the_content(); ?>
                    </div>
                    
                  </div>
                </div>
                <div class="col-12 col-md-4">
                  <div class="sticky-desktop js-apply-now d-flex justify-content-center justify-content-md-end"> <a class="data-scroll d-inline-block web-btn web-btn--red" href="<?php the_field('apply_now_url');?>" target="_blank">Apply now!     </a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--04-->
      <!--<section class="bg-white sec-footer-trans">
        <div class="container z-1">
          <div class="row"> 
            <div class="col-12 col-md-11 col-lg-10 mx-auto">
              <div class="py-70 px-3 data-scroll" style="background: #221429;">
                <div class="d-flex align-items-center justify-content-center">
                  <div class="col-12 col-md-8 col-lg-7 px-0 d-inline-block clr-white text-center"> 
                    <div class="mb-45"><span class="d-block fnt-24 mb-2 pb-2 mb-md-4 pb-md-0">Become a part of us!</span>
                      <h2 class="fnt-50 fnt-800 clr-white">Join the tribe and let’s dance in.</h2>
                    </div><a class="web-btn web-btn--red" href="#">Apply now!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>-->
    </main>
     <script src="<?php echo get_template_directory_uri(); ?>/js/white-loader.js" defer></script>
    <script>
$('body').css('background', 'rgb(255, 255, 255)');
    $('.bd-brd').css('border-color', '#f7f4f2');

    $(window).on('scroll', function() {
      
     
      var $this = $('.footer');
      var top_of_element = $this.offset().top;
      console.log(top_of_element)
      var bottom_of_element = $this.offset().top + $this.outerHeight();
      var bottom_of_screen = $(window).scrollTop() + $(window).innerHeight();
      var top_of_screen = $(window).scrollTop();

      if (bottom_of_screen > top_of_element && top_of_screen < bottom_of_element) {
        $('.js-apply-now').addClass("active");
       
      } 
      else {
        $('.js-apply-now').removeClass("active");
        
      }
    });

</script>
   <?php
get_footer();
?>
