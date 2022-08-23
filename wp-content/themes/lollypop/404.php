<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

get_header(); ?>

 <main class="main">
      <!--01-->
      <!-- Banner-->
      <section class="sec-pd pb-0 sec-bnr"> 
        <div class="container"> 
          <div class="row"> 
            <div class="col-12 col-md-11 col-lg-10 mx-auto"> 
              <div class="contact-bnr">
                <div class="d-flex flex-column align-items-center text-center">
                  <div class="col-8 col-md-6 col-lg-3 mb-2"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/404.png" data-aos="zoom-in-down" data-aos-duration="2500"></div>
                  <div class="col-12 col-md-8">
                    <h1 class="fnt-40 fnt-800 mb-3 mb-lg-4" data-aos="fade-up" data-aos-duration="500">Uh oh! Looks like you have reached opposite side of Lollypop!</h1>
                    <p class="fnt24">Let us help you to get out of this place safely!</p>
                  </div>
                </div>
              </div>
              <!-- Banner contact list-->
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
                    <div class="mt-auto"> <span class="hvr-line clr-second text-capitalize">Blogs and Whitepapers</span></div></a></li>
                <li class="contat-list__item col-12 col-md-4 data-scroll"><a class="contact d-flex flex-column bg-white card-hvr" href="<?php echo site_url(); ?>/careers/">
                    <div class="mb-40"> 
                      <h3 class="fnt-30 fnt-800 mb-2 pb-md-1">Join Tribe</h3>
                      <p class="fnt-20">Do you wish to be a part of our tribe?</p>
                    </div>
                    <div class="mt-auto"> <span class="hvr-line clr-second text-capitalize">Careers</span></div></a></li>
              </ul>
            </div>
          </div>
        </div>
      </section>
    </main>

<?php
get_footer();
