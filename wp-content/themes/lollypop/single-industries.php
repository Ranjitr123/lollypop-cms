<?php

get_header();
?>
<style>
.cta{
margin-bottom:80px;
padding-left:40px;
padding-top:30px;
padding-bottom:26px;
border-left: 5px solid #FD2E35;
background: linear-gradient(90deg, #F1EDEA 0%, #F7F5F3 100%);
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
                  <div class="page-head"><span class="d-block fnt-14 text-capitalize mb-2 clr-default">Industries</span>
                    <h1 class="fnt-50 fnt-800 mb-3 mb-md-4 red-stroke red-stroke--small13 px-md-0 col-md-10 col-lg-9 px-0"><?php the_field('heading'); ?></h1>
                    <p class="fnt-24 col-md-10 col-lg-8 px-0"><?php the_field('short_title_description'); ?></p>
		  </div>
<div class="cta">
      <h2 class="fnt-28 fnt-800 mb-3"><?php the_field('cta_heading'); ?></h2>
    <p class="fnt-24"><?php the_field('cta_short_title_description'); ?></p> 
    <a class="clr-second mt-4 mt-md-5 fnt-14 data-scroll hvr-line" href="<?php echo site_url(); ?>/project-enquiry/">Get in Touch</a>
</div>
                </div>
              </div>
              <div class=""><img class="wpdm-img" src="<?php the_field('banner'); ?>" alt="Image"></div>
            </div>
          </div>
        </div>
      </section>
      <!--02-->
      <section class="sec-pd"> 
        <div class="container"> 
          <div class="row"> 
            <div class="col-12 col-md-10 col-lg-8 mx-auto">
              <div class="mb-4 pb-md-2 col-md-11 px-0">
               <?php if( have_rows('our_expertise') ) : while( have_rows('our_expertise') ): the_row(); ?>
                <h3 class="fnt-50 fnt-800 mb-4 data-scroll">
                  <?php the_sub_field('title'); ?></h3>
                <p class="fnt-24 col-md-10 col-lg-11 px-0 data-scroll"><?php the_sub_field('content'); ?></p>
                <?php endwhile; endif; ?>
              </div>
              <ul class="px-0 values-list row justify-content-between mb-0"> 
               <?php if( have_rows('our_expertise_list') ) : while( have_rows('our_expertise_list') ): the_row(); ?>
                <li class="values-list__item col-12 col-md-5 data-scroll"> 
                  <h6 class="fnt-800 mb-1"><?php the_sub_field('title'); ?></h6>
                  <p class="col-11 col-lg-10 px-0 mb-0"><?php the_sub_field('content'); ?></p>
                </li>
                <?php endwhile; endif; ?>
              </ul><a class="clr-second mt-4 mt-md-5 d-inline-block fnt-14 data-scroll hvr-line" href="<?php echo site_url(); ?>/project-enquiry/">Let’s Talk</a>
            </div>
          </div>
        </div>
      </section>
      <!--03-->
      <section class="sec-pd"> 
        <div class="container"> 
          <div class="row"> 
            <div class="col-12 col-md-10 col-lg-8 mx-auto">
              <div class="mb-4 pb-md-2 col-md-11 px-0">
               <?php if( have_rows('clients_logo_description') ) : while( have_rows('clients_logo_description') ): the_row(); ?>
                <h3 class="fnt-50 fnt-800 mb-4 px-0 data-scroll">
                   <?php the_sub_field('title'); ?></h3>
                <p class="fnt-24 col-md-9 col-lg-8 px-0 data-scroll"><?php the_sub_field('content'); ?></p>
                <?php endwhile; endif; ?>
              </div>
              <?php if( have_rows('clients_logo_list') ) : while( have_rows('clients_logo_list') ): the_row(); 
                $induLogo = get_sub_field('logos'); 
                endwhile; endif;
                if($induLogo !=''){ ?>
              <ul class="px-0 logo-list logo-list--3 row">
               <?php if( have_rows('clients_logo_list') ) : while( have_rows('clients_logo_list') ): the_row(); ?>
                <li class="logo-list__item col-4"><img class="img-fluid grayscale" src="<?php the_sub_field('logos'); ?>" alt="Image"></li>
                 <?php endwhile; endif; ?>
              </ul>
               <?php } ?>
            </div>
          </div>
        </div>
      </section>
      <!--04-->
      
      
      <section class="sec-pd" id="third">
        <div class="container"> 
          <div class="row"> 
            <div class="col-12 col-md-11 col-lg-10 mx-auto">
              <?php if( have_rows('portfolio') ) : while( have_rows('portfolio') ): the_row(); ?>
              <div class="row"> 
                <div class="col-12 col-md-11 mx-auto">
                   <a class="" href="<?php the_sub_field('url'); ?>">
                    <div class="mb-35 fluid-mb">
                <div class="reveal"><img class="portfolio-img" src="<?php the_sub_field('image'); ?>" alt="Image"></div>
              </div>
                   <div class="d-flex flex-wrap px-md-4 px-xl-5">
                    <div class="col-12 px-md-12 col-md-4 mb-3 mb-md-0 d-flex flex-column"><span class="d-inline-block fnt-16 data-scroll mt-0 text-rpd portfolio-title"><?php the_sub_field('company_name'); ?></span></div>
                    <div class="col-12 px-md-12 col-md-8 data-scroll pb-md-3">
                      <div class="px-md-3">
                        <div class="mb-2 pb-lg-0">
                          <h2 class="fnt-40 fnt-800 mb-3"> <span class="d-block"><?php the_sub_field('title'); ?></span></h2>
                          <p><?php the_sub_field('content'); ?></p>
                        </div>
                      </div>
                       </div></div> </a>
                  <div class="px-md-4 px-xl-5">
                    <div class="col-12 px-md-12 col-md-5 offset-md-4">
		      <div class="px-md-3"><a class="data-scroll fnt-14 lp-link lp-link--pri hvr-line" href="<?php the_sub_field('url')?>">View Project</a></div>
                    </div>
                  </div>
                </div>
              </div>
              <?php endwhile; endif; ?>
            </div>
          </div>
        </div>
      </section>
      
      <!--05-->
      <?php if( have_rows('case_studies') ) : while( have_rows('case_studies') ): the_row(); ?>
      <?php $caseStudy = get_sub_field('title'); ?>
      <?php endwhile; endif; ?>
      <?php if($caseStudy !=''){ ?>
      <section class="sec-pd sec-pt sec-pb" style="background: #221429">
        <div class="container"> 
          <div class="row">
            <div class="col-12 col-md-10 col-lg-8 mx-auto">
              <?php if( have_rows('case_studies') ) : while( have_rows('case_studies') ): the_row(); ?>
              <div class="col-12 col-md-8 col-lg-7 px-0 mb-4 pb-3 mb-lg-5 pb-lg-2">
                <h2 class="fnt-50 fnt-800 clr-white mb-4 data-scroll"><?php the_sub_field('title'); ?></h2>
                <p class="data-scroll clr-white col-12 col-md-8 px-0"><?php the_sub_field('content'); ?></p><a class="clr-second hvr-line d-inline-block data-scroll fnt-14" href="<?php the_sub_field('cta_url'); ?>"><?php the_sub_field('cta_name'); ?></a>
              </div>
               <!--<a class="video-img position-relative popup-vimeo d-block" href="<?php the_sub_field('video'); ?>">
                <div class="reveal"><img src="<?php the_sub_field('image'); ?>"></div>
		<div class="play-icon play-icon"><i class="icon-play"></i></div></a>old--->
			<!--<div class="play-video-on-scroll">
                <div class="plyr__video-embed" id="player2">
                  <iframe src="<?php the_sub_field('video'); ?>" allowfullscreen allowtransparency allow="autoplay" hideControls="true"></iframe>
                </div>
              </div>new-->
				
			<div class="play-video-on-scroll">
              <div id="play2-out" style="display:none">
                <div id="play2" data-plyr-provider="vimeo" data-plyr-embed-id="<?php the_sub_field('video'); ?>"></div>
              </div>
              <video class="playvid" autoplay="" muted="" loop="" playsinline="" provider=" vimeo" embed-id="<?php the_sub_field('video'); ?>" poster="<?php the_sub_field('image'); ?>">
              </video>
            </div>
				
                <?php endwhile; endif; ?>
            </div>
          </div>
        </div>
      </section>
      <?php } ?>
      <!--06-->
      <section class="sec-pd sec-pb"> 
        <div class="container"> 
          <div class="row"> 
            <div class="col-12 col-md-10 col-lg-8 mx-auto">
              <div class="mb-4 pb-md-2 col-md-11 px-0">
                <?php if( have_rows('our_clients_descrptions') ) : while( have_rows('our_clients_descrptions') ): the_row(); ?>
                <h3 class="fnt-50 fnt-800 mb-4 data-scroll">
                  <?php the_sub_field('title'); ?></h3>
                <p class="fnt-24 col-md-10 col-lg-11 px-0 data-scroll"><?php the_sub_field('content'); ?></p>
                <?php endwhile; endif; ?>
              </div>
              <ul class="px-0 values-list row justify-content-between mb-0"> 
                <?php if( have_rows('our_client_list') ) : while( have_rows('our_client_list') ): the_row(); ?>
                <li class="values-list__item col-12 col-md-5 data-scroll"> 
                  <h6 class="fnt-800 mb-1"><?php the_sub_field('title'); ?></h6>
                  <p class="col-11 col-lg-10 px-0 mb-0"><?php the_sub_field('content'); ?></p>
                </li>
                <?php endwhile; endif; ?>
               
              </ul>
              <a class="clr-second mt-4 mt-md-5 d-inline-block fnt-14 data-scroll hvr-line" href="<?php echo get_site_url(); ?>/project-enquiry/">Let’s talk</a>
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

<script type=application/ld+json>{
	"@context": "https://schema.org/",
	"@type": "Service",
	"serviceType": "IT services",
	"provider": {
	"@type": "Organization",
	"name": "Enabling growth in Edtech"
	},
	"hasOfferCatalog": {
	"@type": "OfferCatalog",
	"name": "IT services",
	"itemListElement": [
	{
	"@type": "OfferCatalog",
	"name": "IT Services",
	"itemListElement": [
	{
	"@type": "Offer",
	"itemOffered": {
	"@type": "Service",
	"name": "Enabling a complete digital immersion",
	"Description":"Leveraging digital design and AI based learning to provide the best methods for engaging students in the educational process."
	}
	},
	{
	"@type": "Offer",
	"itemOffered": {
	"@type": "Service",
	"name": "Increasing accessibility and usability",
	"Description":"Offering anytime, everywhere access platforms for improved usability and accessibility."
	}
	},
	{
	"@type": "Offer",
	"itemOffered": {
	"@type": "Service",
	"name": "Designing an engaging simulation of a classroom",
	"Description":"Infusing a youthful energy in our designs to make learning, sharing, and teaching fun in a digital learning environment."
	}
	},
	{
	"@type": "Offer",
	"itemOffered": {
	"@type": "Service",
	"name": "Democratizing education",
	"Description":"Ensuring that students from all over the world have access to educational possibilities by providing them with endless opportunities."
		}
	}
	
	]
	}
	]
	}
}</script>

<?php
get_footer();
?>
