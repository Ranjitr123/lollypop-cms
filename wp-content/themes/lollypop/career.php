<?php
/**
 Template Name: Career
 */

get_header();
?>
<style>
.lp-mainheader--white .nav-item:last-child .nav-link{
display: none;
}
.quotes {display: none;}
 </style>

<main class="main" style="background: #221429;">
      <!--01-->
      <!-- Section Banner-->
      <section class="sec-pd sec-pb sec-bnr" style="background: #FD2E35;">
        <div class="container"> 
          <div class="row"> 
            <div class="col-12 col-md-11 col-lg-10 mx-auto car-bnr"> 
              <div class="d-flex flex-column align-items-center justify-content-center"><img class="car-bnr-img" src="<?php the_field('banner_image'); ?>" alt="career-artist" data-aos="zoom-in-down" data-aos-duration="2000">
              <?php if( have_rows('banner_content') ) : while( have_rows('banner_content') ): the_row(); ?>
              <div class=" col-md-10 mx-auto">
                <h1 class="fnt-78 fnt-800 clr-white text-center head-text mb-35" data-aos="fade-up" data-aos-duration="500">
                 <span class="d-block"><?php the_sub_field('title'); ?></span>
					
                  <div class="d-flex flex-wrap justify-content-center">
                   <?php if( have_rows('slide_content') ) : while( have_rows('slide_content') ): the_row(); ?>
                  <span class="quotes" style="color:#221429;">&nbsp;<?php the_sub_field('list'); ?></span>
                   <?php endwhile; endif; ?>
                 
                  </div>
                </h1>
                <span class="d-block car-bnr__info clr-w mx-auto fnt-24 col-md-7 text-center px-0" data-aos="fade-up" data-aos-duration="1500"><?php the_sub_field('content'); ?></span>
              </div>
                <?php endwhile; endif; ?>
                </div>
            </div>
          </div>
        </div>
      </section>
      <!--02-->
      <!-- Section Whats Going-->
      <section class="sec-pd sec-pt">
        <div class="container"> 
          <div class="row">
            <div class="col-12 col-md-10 col-lg-8 mx-auto">
              <div class="mb-60 data-scroll"><span class="clr-white fnt-800 fnt-40 d-block mb-2"><?php the_field('career_design'); ?></span>
                <h2 class="fnt-78 fnt-800 clr-white d-flex flex-wrap">
                  <?php the_field('career_driversity'); ?>
                  </h2>
              </div>
        </div>
            
            <div class="col-12 col-md-11 col-lg-10 mx-auto mb-112">
              <div class="play-video-on-scroll">
                <div id="play2-out" style="display:none">
                <div id="play2" data-plyr-provider="<?php the_field('career_video_provider');?>" data-plyr-embed-id="<?php the_field('career_video');?>" ></div> 
                </div>
                <video class="playvid"  autoplay="" muted="" loop="" playsinline="" provider="<?php the_field('career_video_provider');?>" embed-id="<?php the_field('career_video');?>" poster="<?php the_field('career_video_poster');?>">                    
                </video>
              </div>
            </div>


            <div class="col-12 col-md-8 mx-auto">
              <div class="mb-4 pb-2 pb-md-3 mb-lg-5 pb-lg-0 data-scroll">
                <h2 class="d-block fnt-50 fnt-800 mb-3 mb-md-4 pb-lg-1 clr-white">
                   <?php the_field('career_culture'); ?></h2><span class="d-block clr-white fnt-24 col-lg-7 px-0"><?php the_field('culture_content'); ?></span>
              </div>
              <ul class="px-0 popshare-list mb-0 row justify-content-left data-scroll">
                <?php if( have_rows('culture_list') ) : while( have_rows('culture_list') ): the_row(); ?>
                <li class="popshare-list__item col-12 col-md-5">
                 <div class="md-4">
                     <img src="<?php the_sub_field('image'); ?>" class="img-fluid">
                 </div>
                  <h3 class="fnt-22 clr-white fnt-800"><?php the_sub_field('title'); ?></h3>
                  <p class="fnt-16 clr-white mb-0 col-12 col-md-9"><?php the_sub_field('content'); ?></p>
                </li>
                 <?php endwhile; endif; ?>
                
              </ul>
            </div>
          </div>
        </div>
      </section>
      <!--03-->
      <!-- Section Locations-->
      <section class="sec-pd">
        <div class="container"> 
          <div class="row"> 
            <div class="col-12 col-md-10 col-lg-8 mx-auto">
              <div class="col-md-11 col-lg-10 px-0 mb-60 pb-lg-1 data-scroll">
                <h2 class="fnt-50 clr-white fnt-800 mb-3 pb-lg-1">
                 <?php the_field('country_title'); ?></h2>
                  <span class="d-block clr-white fnt-24 col-lg-7 px-0"><?php the_field('country_content'); ?></span>
              </div>
            </div>
          </div>
          <div class="row"> 
            <div class="col-12 col-md-11 col-lg-10 mx-auto">
              <ul class="px-0 mb-0 location-list d-flex flex-wrap justify-content-between">
                 <?php if( have_rows('career_location_slider') ) : while( have_rows('career_location_slider') ): the_row(); ?>
                <li class="location-list__item"><a class="location d-flex flex-column bg-card" href="<?php the_sub_field('location_url'); ?>">
                    <div class="reveal"> <img class="loc-img" src="<?php the_sub_field('image'); ?>"></div>
                    <div class="location__info col-11 col-md-10 col-lg-9 data-scroll px-0"> 
                      <h4 class="fnt-40 clr-white fnt-800 mb-0"><?php the_sub_field('country_name'); ?></h4><span class="d-block fnt-14 clr-white"><?php the_sub_field('location_name'); ?></span>
                    </div></a></li>
                     <?php endwhile; endif; ?>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <!--04-->
     
      <!-- Section Open Tickets-->
      <section class="sec-pd pb-0" id="career-job">
        <div class="container"> 
          <div class="row"> 
            <div class="col-12 col-md-10 col-lg-8 mx-auto"> 
              <div class="col-md-11 col-lg-10 mb-60 data-scroll">
                <h2 class="fnt-50 fnt-800 clr-white">
                  <?php the_field('join_title'); ?></h2><span class="d-block clr-white fnt-24 col-lg-8 px-0"><?php the_field('join_content'); ?></span>
              </div>
              <div class="row"> 
                <div class="col-12 col-md-10 col-lg-8 accordions">
                  <div class="accordion active data-scroll">
                    <div class="accordion__head">
                      <h3 class="fnt-40 fnt-800 clr-second"><?php the_field('design'); ?></h3>
                    </div>
                    <div class="accordion__body pt-3"> 
                      <p class="fnt-16 clr-white mb-30 col-12 col-md-11"><?php the_field('design_content'); ?></p>
                      <ul class="px-0 mb-0 open-ticket-list">
                        <?php 
                            $args = array(
                            'post_type'=>'careers', // Your post type name
                            'posts_per_page' => -1,
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'career_category',
                                    'field' => 'slug',
                                    'terms' => 'design'

                                ),
                            ), 
                               
                                 
                            );
                    $career = new WP_Query( $args );
                    if ( $career->have_posts() ) : while ( $career->have_posts() ) : $career->the_post(); ?>
                        <li class="open-ticket-list__item"><a class="d-flex" href="<?php the_permalink(); ?>">
                            <div class="col-6 px-0 d-flex align-items-center"> 
                              <h6 class="fnt-18 clr-white fnt-600 m-0"><?php the_title(); ?></h6>
                            </div>
                            <div class="col-6 px-0 d-flex align-items-center justify-content-end"> <span class="d-inline-block fnt-400 fnt-14 clr-white text-right"><?php the_field('locations'); ?></span></div></a></li>
                            <?php wp_reset_postdata(); endwhile; endif;?>
                       
                      </ul>
                    </div>
                  </div>
                  <div class="accordion data-scroll">
                    <div class="accordion__head">
                      <h3 class="fnt-40 fnt-800 clr-second"><?php the_field('technology'); ?></h3>
                    </div>
                    <div class="accordion__body pt-3"> 
                      <p class="fnt-16 clr-white mb-30"><?php the_field('technology_content'); ?></p>
                       <ul class="px-0 mb-0 open-ticket-list">
                        <?php 
                            $args = array(
                            'post_type'=>'careers', // Your post type name
                            'posts_per_page' => -1,
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'career_category',
                                    'field' => 'slug',
                                    'terms' => 'technology'

                                ),
                            ), 
                               
                                 
                            );
                    $career = new WP_Query( $args );
                    if ( $career->have_posts() ) : while ( $career->have_posts() ) : $career->the_post(); ?>
                        <li class="open-ticket-list__item"><a class="d-flex" href="<?php the_permalink(); ?>">
                            <div class="col-6 px-0 d-flex align-items-center"> 
                              <h6 class="fnt-18 clr-white fnt-600 m-0"><?php the_title(); ?></h6>
                            </div>
			    <div class="col-6 px-0 d-flex align-items-center justify-content-end"> <span class="d-inline-block fnt-400 fnt-14 clr-white text-right"><?php the_field('locations')?></span></div></a></li>
                            <?php wp_reset_postdata(); endwhile; endif;?>
                       
                      </ul>
                    </div>
                  </div>
                  <div class="accordion data-scroll">
                    <div class="accordion__head">
                      <h3 class="fnt-40 fnt-800 clr-second"><?php the_field('sales_marketing'); ?></h3>
                    </div>
                    <div class="accordion__body pt-3"> 
                      <p class="fnt-16 clr-white mb-30 col-12 col-md-11"><?php the_field('sales_marketing_content'); ?></p>
                       <ul class="px-0 mb-0 open-ticket-list">
                        <?php 
                            $args = array(
                            'post_type'=>'careers', // Your post type name
                            'posts_per_page' => -1,
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'career_category',
                                    'field' => 'slug',
                                    'terms' => 'operations'

                                ), 
                            ), 
                               
                                 
                            );
                    $career = new WP_Query( $args );
                    if ( $career->have_posts() ) : while ( $career->have_posts() ) : $career->the_post(); ?>
                        <li class="open-ticket-list__item"><a class="d-flex" href="<?php the_permalink(); ?>">
                            <div class="col-6 px-0 d-flex align-items-center"> 
                              <h6 class="fnt-18 clr-white fnt-600 m-0"><?php the_title(); ?></h6>
                            </div>
			    <div class="col-6 px-0 d-flex align-items-center justify-content-end"> <span class="d-inline-block fnt-400 fnt-14 clr-white text-right"><?php the_field('locations'); ?></span></div></a></li>
                            <?php wp_reset_postdata(); endwhile; endif;?>
                       
		      </ul>

                    </div>
                  </div>
		</div>
<p class="fnt-16 clr-white mt-5 carmail">If your profile is not listed above, send your resume <a class="clr-second hvr-line clr-second" href="mailto:hr-ind@terralogic.com">here!</a> </p>
              </div>
            </div>
          </div>
        </div>
      </section>
       <section class="sec-pd sec-pt">  
          <div class="fluid-width">
          <div class="row">
            <div class="col-12 px-md-0">
              <ul class="px-0 lp-awards-list d-flex four-card-slider">
               <?php if( have_rows('location_slider') ) : while( have_rows('location_slider') ): the_row(); ?>
                <li class="lp-awards-list__item">
                  <div class="award-info"><img class="img mb-3" src="<?php the_sub_field('image') ?>">
                    <div class="col-12 col-md-8 ps-lg-4"><span class="fnt-14 clr-white d-block mb-1"><?php the_sub_field('location_name') ?></span><span class="d-block mb-0 col-md-10 px-0 fnt-18 clr-white"><?php the_sub_field('content') ?></span></div>
                  </div>
                </li>
                  <?php endwhile; endif; ?>
              </ul>
            </div>
          </div>
        </div>
      </section>
    </main>
    
<script>
$(document).ready(function(){
    $("header").addClass("lp-mainheader--white");
    $(".lines").removeClass("white-bg");
})
</script>

		    <script type="application/ld+json">
		        {
				        "@context": "https://schema.org",
							
							"headline":"Were a Tribe of artists architects, writers,Join our diverse team to challenge the status quo and craft brilliance together. engineers",
								"description":"Join our diverse team to challenge the status quo and craft brilliance together.",
									"url":"https://lollypop.design/careers/",
									        "@type": "Webpage",
										        "image": {
											                "@type": "ImageObject",
														                "url": "https://lollypop.design/wp-content/uploads/2022/02/career-banner-1",
																                "width": "926",
																		                "height": "447"
																				        }
					    }
			</script>

		    <script type="application/ld+json">
		    {
			     "@context": "https://schema.org",
				      "@type": "ImageObject",
				      "image": {
				                      "@type": "ImageObject",
							                      "url": "https://lollypop.design/wp-content/uploads/2022/02/career-banner-1.webp",
									                      "width": "926",
											                      "height": "447"
													              }
		    }
		    </script>

<?php
get_footer();
?>
<script src="<?php echo get_template_directory_uri(); ?>/js/career.js" defer></script>
