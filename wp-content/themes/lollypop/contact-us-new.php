<?php
/**
 Template Name: Contact Us new
 */ 

get_header();
?>
 
 <style>
   .fnt-78.h1, h1.fnt-78.fnt30{font-size: 30px !important;line-height: 50px !important;}
 </style>

 <main class="main">
      <!--01-->
      <!-- Banner-->
      <section class="sec-pd sec-pt"> 
     
        <div class="container"> 
          <div class="row"> 
            <div class="col-12 col-md-11 col-lg-10 mx-auto"> 
              <div class="contact-bnr">
                <div class="d-flex flex-column align-items-center text-center">
                  <div class="col-8 col-md-4 col-lg-6 mb-2"><img class="img-fluid" src="<?php the_field('banner_image'); ?>" alt="Image" data-aos="zoom-in-down" data-aos-duration="2500"></div>
                  <div class="col-12 col-md-6">
                    <h1 class="fnt-78 fnt-800 fnt30" data-aos="fade-up" data-aos-duration="500"><?php the_field('banner_title'); ?></h1>
                    <p class="fnt-24" data-aos="fade-up" data-aos-duration="500"><?php the_field('banner_content'); ?></p>
                  </div>
                </div>
              </div>
              <!-- Banner contact list-->
              <ul class="px-0 contat-list contat-list--bnr mb-0 row">
                <?php if( have_rows('enquires') ) : while( have_rows('enquires') ): the_row(); ?>
                <li class="contat-list__item col-12 col-md-4 data-scroll">
                   <a class="contact d-flex flex-column bg-white card-hvr" href="<?php the_sub_field('cta_url'); ?>">
		            <div class="mb-40">
                        <h3 class="fnt-30 fnt-800 mb-2 pb-md-1"><?php the_sub_field('title');?></h3>
                        <p> <?php the_sub_field('content'); ?></p> 
                    </div>
                    <div class="mt-auto"> <span class="hvr-line clr-second text-capitalize" href="<?php the_sub_field('cta_url'); ?>"><?php the_sub_field('cta_button'); ?></span></div></a></li>
                     <?php endwhile; endif; ?>
               <!-- <li class="contat-list__item col-12 col-md-4 data-scroll"><a class="contact d-flex flex-column bg-white card-hvr" href="<?php echo site_url(); ?>/careers/">
                    <div class="mb-40"> 
                      <h3 class="fnt-30 fnt-800 mb-2 pb-md-1">Work with us</h3>
                      <p class="fnt-20">Want to be a part of our tribe?</p>
                    </div>
                    <div class="mt-auto"> <span class="hvr-line clr-second text-capitalize" href="#">Join Us</span></div></a></li>
                <li class="contat-list__item col-12 col-md-4 data-scroll"><a class="contact d-flex flex-column bg-white card-hvr" href="<?php echo site_url(); ?>/project-enquiry/">
                    <div class="mb-40"> 
                      <h3 class="fnt-30 fnt-800 mb-2 pb-md-1">General</h3>
                      <p class="fnt-20">Can't find what you are looking for?</p>
                    </div>
                    <div class="mt-auto"> <span class="hvr-line clr-second text-capitalize" href="#">Say hi!</span></div></a></li>-->
              </ul>
            </div>
          </div>
        </div>
      </section>
      <!--02-->
      <!-- Contact by place-->
     
      <!--03-->
      <!-- <section class="sec-footer-trans">
        <div class="container z-1">
          <div class="row"> 
            <div class="col-12 col-md-11 col-lg-10 mx-auto">
              <div class="py-70 px-3 data-scroll" style="background: #221429;">
                <div class="d-flex align-items-center justify-content-center">
                 <div class="col-12 col-md-8 col-lg-7 px-0 d-inline-block clr-white text-center"> 
                    <div class="mb-45"><span class="d-block fnt-24 mb-2 pb-2 mb-md-4 pb-md-0">Got An Idea?</span>
                      <h2 class="fnt-50 fnt-800 clr-white">Let’s craft brilliance together!</h2>
                    </div><a class="web-btn web-btn--red" href="<?php echo site_url(); ?>/project-enquiry/">Get In Touch</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> -->
    </main>



<?php
get_footer();
?>
