<?php
/**
 Template Name: Contact Us
 */ 

get_header();
?>
 

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
                    <h1 class="fnt-78 fnt-800" data-aos="fade-up" data-aos-duration="500"><?php the_field('banner_title'); ?></h1>
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
		    <p><?php the_sub_field('title');?></p> 
                      <h3 class="fnt-30 fnt-800 mb-2 pb-md-1"><?php the_sub_field('content'); ?></h3>
                      
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
      <section class="sec-pd sec-pb">
        <div class="container"> 
          <div class="row"> 
            <div class="col-12 col-md-10 col-lg-9 mx-auto">
              <div class="contact-head">
                <h2 class="fnt-50 fnt-800 data-scroll">
                  <?php the_field('location_heading'); ?></h2>
              </div>
              <div class="mb-contact-head d-md-none"> <span>India</span></div>
              <ul class="px-0 contct-place">
                 <?php if( have_rows('locations') ) : while( have_rows('locations') ): the_row(); ?>
                <li class="contct-place__item">
                  <div class="row">
                    <div class="col-12 col-md-3">
                      <div class="place-name"> 
                        <h2 class="fnt-50 fnt-800 data-scroll contact-title"><?php the_sub_field('country'); ?></h2>
                      </div>
                    </div>
                    <div class="col-12 col-md-8 offset-md-1">
                      <ul class="px-0 contat-list row">
                        <?php if( have_rows('location_list') ) : while( have_rows('location_list') ): the_row(); ?>
                        <li class="contat-list__item col-12 col-md-6 data-scroll">
                          <div class="contact d-flex flex-column p-0">
                            <div class="mb-0"> 
                              <h3 class="fnt-30 fnt-800 mb-1"><?php the_sub_field('location_name'); ?></h3>
                              <p class="fnt-16 clr-gray mb-2">
                               <?php if( have_rows('location_address') ) : while( have_rows('location_address') ): the_row(); ?>
                              <span class="d-block"><?php the_sub_field('address'); ?></span>
                             <?php endwhile; endif; ?>
                              </p>
                            </div>
                            <div class="mt-auto">
                              <!-- Embed map adress by https://www.embedgooglemap.net/--><a class="popup-gmaps hvr-line clr-second text-capitalize" href="<?php the_sub_field('map_url'); ?>">See Map</a>
                            </div>
                          </div>
                        </li>
                         <?php endwhile; endif; ?>
                      </ul>
                    </div>
                  </div>
                </li>
                 <?php endwhile; endif; ?>
            
              </ul>
            </div>
          </div>
        </div>
      </section>
      <!--03-->
      <section class="sec-footer-trans">
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
      </section>
    </main>



<?php
get_footer();
?>
