<?php
/**
 Template Name: Dubai event Thank You
 */

get_header();
?>
<style>
@media (max-width:767px) {.tha-max{max-width:280px}}
</style>
 <div id="success-form">
           <section class="sec-pd sec-bnr">
        <div class="container"> 
          <div class="row mb-4 mb-md-5 pb-lg-3"> 
            <div class="col-12 col-md-9 col-lg-7 mx-auto">
              <div class="col-lg-7 col-xl-8 col-xxl-12 px-0 mx-auto d-flex flex-column align-items-center justify-content-center text-center"><img class="img-fluid mb-40" src="<?php echo get_template_directory_uri(); ?>/img/thank-you.webp" alt="Image" data-aos="zoom-in-down" data-aos-duration="2000"></div>
              <div class="text-center col-md-11 col-lg-11 mx-auto">
                <h3 class="fnt-40 fnt-800 mb-2 data-scroll">Thanks for getting in touch!</h3>
                <p class="fnt-24 data-scroll col-lg-11 col-xxl-9 mx-auto tha-max">We have received your inquiry and our Design Consultant will reach out to you soon</p>
              </div>
            </div>
          </div>
           <div class="row"> 
            <div class="col-12 col-md-11 col-lg-10 mx-auto"> 
           <ul class="px-0 contat-list contat-list--bnr mb-0 row">
                <li class="contat-list__item col-12 col-md-4 data-scroll"><a class="contact d-flex flex-column bg-white card-hvr" href="<?php echo site_url(); ?>">
                    <div class="mb-40"> 
                      <h3 class="fnt-30 fnt-800 mb-2 pb-md-1">Homepage</h3>
                      <p class="fnt-20">Start from the start. Know more about us.</p>
                    </div>
                    <div class="mt-auto"> <span class="hvr-line clr-second text-capitalize">Homepage</span></div></a></li>
                <li class="contat-list__item col-12 col-md-4 data-scroll"><a class="contact d-flex flex-column bg-white card-hvr" href="<?php echo site_url(); ?>/blogs/">
                    <div class="mb-40"> 
                      <h3 class="fnt-30 fnt-800 mb-2 pb-md-1">Blogs</h3>
                      <p class="fnt-20">Read our curated articles for designers</p>
                    </div>
                    <div class="mt-auto"> <span class="hvr-line clr-second text-capitalize">Explore blogs</span></div></a></li>
                <li class="contat-list__item col-12 col-md-4 data-scroll"><a class="contact d-flex flex-column bg-white card-hvr" href="<?php echo site_url(); ?>/projects/">
                    <div class="mb-40"> 
                      <h3 class="fnt-30 fnt-800 mb-2 pb-md-1">Projects</h3>
                      <p class="fnt-20">Deep-drive into our recognized projects</p>
                    </div>
                    <div class="mt-auto"> <span class="hvr-line clr-second text-capitalize">Projects</span></div></a></li>
              </ul>
              </div>
              </div>
        </div>
      </section>
      </div>
      
     <?php
get_footer();
?>
