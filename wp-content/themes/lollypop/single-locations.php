 <?php


get_header();
?>
     <main class="main">
      <!--01-->
      <section class="sec-pd sec-bnr p-r-80"> 
        <div class="container"> 
          <div class="row">
            <div class="col-12 col-md-11 col-lg-10 mx-auto">
              <div class="row">
                <div class="col-12 col-md-11 offset-md-1">
                  <div class="mb-r-80 col-lg-10 px-0"> <span class="d-block fnt-14 text-capitalize mb-2 clr-default locations"><?php the_field('locations'); ?></span>
                    <h1 class="fnt-50 fnt-800 mb-3 mb-md-4 red-stroke red-stroke--small13 px-md-0 col-md-10 col-lg-12"><?php the_field('heading'); ?></h1>
                    <div class="fnt-24 col-md-10 col-lg-8"><?php the_field('short_description'); ?></div>
                  </div>
                </div>
                 <div class="hover-img">
         <?php if( have_rows('slider') ) : while( have_rows('slider') ): the_row(); ?>
        <img class="wpdm-img" src="<?php the_sub_field('images'); ?>">
         <?php endwhile; endif; ?>
        </div>
              </div>
            </div>
          </div>
        </div>
        <!--<div class="fluid-width p-0">
          <div class="row">
            <div class="col-12 col-md-11 col-lg-10 offset-md-2 px-md-0">
              <ul class="px-0 lp-awards-list d-flex four-card-slider">
                <?php if( have_rows('slider') ) : while( have_rows('slider') ): the_row(); ?>
                <li class="lp-awards-list__item col-12">
                  <div class="award-info"><img class="img mb-3" src="<?php the_sub_field('images'); ?>"></div>
                </li>
                 <?php endwhile; endif; ?>
              </ul>
            </div>
          </div>
        </div>-->
       
      </section>
      <!--02-->
      <section class="sec-pd">
        <div class="container">
          <div class="row"> 
            <div class="col-12 col-md-9 col-lg-7 mx-auto">
              <!-- Team profile-->
              <div class="row">
               <?php if( have_rows('client_challenges') ) : while( have_rows('client_challenges') ): the_row(); ?>
                <div class="col-12 col-md-5 mb-4 mb-md-0 hover-img">
                  <div class="reveal team-profile-img"><img src="<?php the_sub_field('image'); ?>" alt=""></div>
                </div>
                <div class="col-12 col-md-7">
                  <div class="profile d-flex flex-column">
                    <div class="profile__about"> 
                      <p class="fnt-16 clr-black-354 data-scroll"><?php the_sub_field('content'); ?></p>
                    </div>
                    <div>
                     <!-- <h6 class="fnt-800 fnt-22 mb-0">Lets' Talk</h6>
                      <a class="data-scroll d-inline-block fnt-14 hvr-link" href="mailto:<?php the_sub_field('mail_id'); ?>"><?php the_sub_field('mail_id'); ?></a>-->
                      <a class="web-btn web-btn--primary data-scroll mt-3" href="<?php the_sub_field('cta_url'); ?>" style="opacity: 1; transform: translateY(0px);"><?php the_sub_field('cta_name'); ?></a>
                    </div>
                  </div>
                </div>
                   <?php endwhile; endif; ?>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--03-->
      <section class="sec-pd sec-pb">
        <div class="container"> 
          <div class="row"> 
            <?php if( have_rows('client_logos') ) : while( have_rows('client_logos') ): the_row(); ?>
            <div class="col-12 col-md-9 col-lg-7 mx-auto">
              <div class="mb-5"> 
                <h5 class="fnt-40 fnt-800 data-scroll px-0"><?php the_sub_field('title'); ?></h5>
                <p class="fnt-24"><?php the_sub_field('content'); ?></p>
              </div>
              <ul class="px-0 logo-list row mb-0">
               <?php if( have_rows('logos') ) : while( have_rows('logos') ): the_row(); ?>
                <li class="logo-list__item col-4 col-md-3"><img class="img-fluid grayscale" src="<?php the_sub_field('images'); ?>"></li>
                  <?php endwhile; endif; ?>
               
              </ul>
            </div>
            <?php endwhile; endif; ?>
          </div>
        </div>
      </section>
      <!--04-->
     <!-- <section class="sec-pd sec-pt sec-pb" style="background: #221429;">
        <div class="container"> 
          <div class="row">
            <div class="col-12 col-md-11 col-lg-10 mx-auto">
              <?php if( have_rows('investors') ) : while( have_rows('investors') ): the_row(); ?>
              <div class="row"> 
                <div class="col-12 col-md-5 mb-4 mb-md-0">
                  <div class="reveal w-100 h-100"><img class="img-text-wrap" src="<?php the_sub_field('image'); ?>"></div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="ps-md-4 ps-lg-5"><span class="d-block fnt-14 clr-white data-scroll"><?php the_sub_field('small_title'); ?>  </span>
                    <h3 class="fnt-40 fnt-800 clr-white data-scroll"><?php the_sub_field('title'); ?></h3>
                    <p class="fnt-24 clr-white data-scroll"><?php the_sub_field('content'); ?></p><a class="hvr-line clr-second fnt-14 data-scroll" href="<?php the_sub_field('url'); ?>"><?php the_sub_field('lets_talk'); ?></a>
                  </div>
                </div>
              </div>
               <?php endwhile; endif; ?>
            </div>
          </div>
        </div>
      </section>
      -->
      
     <!-- <section class="sec-pd sec-pt sec-pb" style="background: #221429;">
        <div class="container"> 
          <div class="row">
            <div class="col-12 col-md-11 col-lg-10 mx-auto slide-swap">
             <?php if( have_rows('investors') ) : while( have_rows('investors') ): the_row(); ?>
              <div class="row"> 
                <div class="col-12 col-md-5 mb-4 mb-md-0">
                  <div class="fade-div slide-swap__left auto-play-none">
                   <?php if( have_rows('slider') ) : while( have_rows('slider') ): the_row(); ?>
                    <div class="single-dot-slider__item"><img class="img-text-wrap" src="<?php the_sub_field('image'); ?>"></div>
                     <?php endwhile; endif;?>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="ps-md-4 ps-lg-5 data-scroll dots-align"><span class="d-block fnt-14 clr-white"><?php the_sub_field('small_title'); ?> </span>
                    <div class="single-dot-slider slide-swap__right single-dot-slider--leftdots">
                     <?php if( have_rows('slider') ) : while( have_rows('slider') ): the_row(); ?>
                      <div class="single-dot-slider__item">
                        <h3 class="fnt-40 fnt-800 clr-white"><?php the_sub_field('title'); ?></h3>
                        <p class="fnt-24 clr-white"><?php the_sub_field('content'); ?></p>
                      </div>
                       <?php endwhile; endif;?>
                    </div><a class="hvr-line clr-second fnt-14" href="<?php the_sub_field('url'); ?>"><?php the_sub_field('lets_talk'); ?></a>
                  </div>
                </div>
              </div>
               <?php endwhile; endif; ?>
            </div>
          </div>
        </div>
      </section>-->
      
      <section class="sec-pd sec-pt" id="fifth" style="background: #221429;">
        <div class="container z-1">
          <div class="row"> 
            <div class="col-12 col-md-10 col-lg-8 mx-auto pb-2 mb-md-0 pb-md-0">
              <div class="row mb-45 justify-content-between">
                <div class="col-md-6 col-lg-8 fluid-offset"> 
                  <div class="lp-awards__left">
                    <h2 class="fnt-50 l-3 clr-white fnt-800 data-scroll"><?php the_field('design_studio_heading'); ?></h2><span class="fnt-24 clr-white my-4 d-block max-width-480 data-scroll"><?php the_field('design_studio_content'); ?></span>
                  </div>
                  <!--<div class="px-0 d-flex flex-wrap culture-slider-nav mb-35 data-scroll"><a class="culture-slider-nav__item hvr hvr--white fnt-16 fnt-400 clr-white" href="javascript:void(0);">India</a><a class="culture-slider-nav__item hvr hvr--white fnt-16 fnt-400 clr-white" href="<?php echo site_url(); ?>/usa/">USA</a><a class="culture-slider-nav__item hvr hvr--white fnt-16 fnt-400 clr-white" href="<?php echo site_url(); ?>/uae/">Dubai</a><a class="culture-slider-nav__item hvr hvr--white fnt-16 fnt-400 clr-white" href="<?php echo site_url(); ?>/vietnam/">Vietnam</a></div>-->
                  <a class="clr-second fnt-16 hvr-line d-inline-block data-scroll" href="<?php echo site_url(); ?>/about-us/">About Us</a>
                </div>
                <!--<div class="col-12 col-md-3 d-flex align-items-center justify-content-center">
                 <div class="h-100 d-flex align-items-center justify-content-center" id="award">
                 <?php if( have_rows('winners') ) : while( have_rows('winners') ): the_row(); ?>
                 <div class="award__item">
                  <div class="lp-awards__right text-lg-center h-100 d-flex align-items-center justify-content-md-end">
                    <div class="d-inline-block ml-md-auto"><img class="icon-awards mx-auto" src="<?php the_sub_field('image'); ?>" alt="Awards">
                      <div class="d-flex flex-column mx-lg-auto text-center">
                        <h5 class="fnt-16 my-2 clr-white"><?php the_sub_field('title'); ?></h5>
                        <p class="fnt-12 max-width-100 mx-lg-auto clr-white"><?php the_sub_field('content'); ?></p>
                      </div>
                    </div>
                  </div>
                  </div>
                   <?php endwhile; endif; ?>
                  </div>
                </div>-->
                
              </div>
            </div>
          </div>
        </div>
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
      
       <section class="sec-pd" style="background: #221429;">
        <div class="container z-1">
          <div class="row"> 
            <div class="col-12 col-md-10 col-lg-8 mx-auto mb-4 pb-2 mb-md-0 pb-md-0">
              <div class="row mb-45 justify-content-between">
                <div class="col-md-8 mb-4 mb-md-0 fluid-offset"> 
                  <div class="lp-awards__left">
                    <h2 class="fnt-50 l-3 mb-2 clr-white fnt-800 data-scroll"><?php the_field('achievements_heading'); ?></h2><span class="fnt-24 clr-white d-block max-width-480 data-scroll"><?php the_field('achievements_content'); ?>

</span>
                  </div>
                </div>
              </div>
              <ul class="awrad-list px-0 mb-0 row"> 
               <?php if( have_rows('winners') ) : while( have_rows('winners') ): the_row(); ?>
                <li class="awrad-list__item col-6 col-md-4 data-scroll"> 
                  <div class="award text-center"><img class="icon-awards mx-auto mb-2 pb-1" src="<?php the_sub_field('image') ?>">
                    <div class="award__name"> 
                      <h6 class="fnt-18 fnt-800 clr-white mb-1"><?php the_sub_field('title') ?></h6>
                      <p class="fnt-12 clr-white mb-0"><?php the_sub_field('content') ?></p>
                    </div>
                  </div>
                </li>
                <?php endwhile; endif; ?>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <!--07-->
      <section class="sec-pd sec-pb" style="background: #221429">
        <div class="container"> 
          <div class="row">
            <?php if( have_rows('case_studies') ) : while( have_rows('case_studies') ): the_row(); ?>
            <div class="col-12 col-md-10 col-lg-8 mx-auto">
              <div class="col-12 col-md-10 col-lg-9 px-0 mb-4 pb-3 mb-lg-5 pb-lg-2">
                <h2 class="fnt-50 fnt-800 clr-white mb-4 data-scroll"><?php the_sub_field('title') ?></h2>
                <p class="data-scroll clr-white col-12 col-md-9 px-0 fnt-24"><?php the_sub_field('content') ?></p>
                <!--<a class="clr-second hvr-line d-inline-block data-scroll fnt-14" href="<?php the_sub_field('url') ?>">View Project</a>-->
              </div>
               <!--<a class="video-img position-relative popup-vimeo popup-youtube d-block" href="<?php the_sub_field('video_url') ?>">
                <div class="reveal"> <img src="<?php the_sub_field('image') ?>"></div>
                <div class="play-icon play-icon--red"><i class="icon-play"></i></div>
                </a>-->
                <div class="controls-hide">
                <div class="plyr__video-embed js-player">
                  <!--<iframe src="<?php the_sub_field('video_url') ?>" allowfullscreen allowtransparency allow="autoplay" hideControls="true" volume="1"></iframe>-->
                  <?php the_sub_field('video_url') ?>
                </div>
                </div>
            </div>
            <?php endwhile; endif; ?>
          </div>
        </div>
      </section>
      
      <!--05-->
      <section class="sec-pd sec-pt">
        <div class="container"> 
          <div class="row  mb-4 pb-md-3 mb-lg-5 pb-lg-0">
           <?php if( have_rows('our_services') ) : while( have_rows('our_services') ): the_row(); ?>
            <div class="col-12 col-md-11 col-lg-8 mx-auto">
              
                <h5 class="fnt-40 fnt-800 data-scroll px-0"><?php the_sub_field('title'); ?></h5>
                <p class="fnt-24 data-scroll col-md-11 col-lg-10 px-0"><?php the_sub_field('content'); ?></p>
              
              <!-- <ul class="d-flex mb-0 flex-wrap services-list bg-white">
                <?php if( have_rows('our_services_list') ) : while( have_rows('our_services_list') ): the_row(); ?>
                <li class="services-list__item col-12 col-md-4"> 
                  <div class="srv d-flex flex-column"> 
                    <div class="srv__head"> 
                      <h4 class="fnt-30 fnt-800 mb-2 mb-md-4"><?php the_sub_field('title'); ?></h4>
                    </div>
                    <div class="srv__info"> 
                      <p class="fnt-16"><?php the_sub_field('content'); ?></p>
                      <ul class="li-disc mb-4">
                       <?php if( have_rows('list') ) : while( have_rows('list') ): the_row(); ?>
                         <li class="fnt-16 mb-1"><?php the_sub_field('content'); ?></li>
                          <?php endwhile; endif; ?>
                      </ul>
                    </div>
                    <div class="srv__ft mt-auto"> <a class="hvr-line clr-second fnt-14 data-scroll" href="<?php the_sub_field('learn_more_url'); ?>">Learn More</a></div>
                  </div>
                </li>
               <?php endwhile; endif; ?>
              </ul> -->
            </div>
             <?php endwhile; endif; ?>
          </div>




          <div class="row">
            <div class="col-12 col-md-11 col-lg-8 mx-auto">
            <?php if( have_rows('our_services') ) : while( have_rows('our_services') ): the_row(); ?>
           
              <ul class="mb-0 services-list px-0">
                <?php if( have_rows('our_services_list') ) : while( have_rows('our_services_list') ): the_row(); ?>
                <li class="services-list__item"> 
                  <div class="srv row"> 
                    <div class="srv__head col-12 col-md-4"> 
                      <h4 class="fnt-28 fnt-800 mb-2 mb-md-4 text-md-end pe-md-4 pe-lg-5"><?php the_sub_field('title'); ?></h4>
                    </div>
                    <div class="srv__info col-12 col-md-8"> 


                    <div class="row justify-content-between">

                    <div class="col-12 col-md-6">
                    <p class="fnt-16 mb-md-3"><?php the_sub_field('content'); ?></p>
                    <a class="hvr-line clr-second fnt-14 data-scroll tab-sw-hd d-none d-md-inline-block" tab-id="#<?php the_sub_field('title'); ?>" href="<?php the_sub_field('learn_more_url'); ?>">Learn More</a>
                  </div>

                  <div class="col-12 col-md-5">

                  <ul class="li-disc mb-4">
                       <?php if( have_rows('list') ) : while( have_rows('list') ): the_row(); ?>
                         <li class="fnt-16 mb-2"><?php the_sub_field('content'); ?></li>
                          <?php endwhile; endif; ?>
                      </ul>
                      <a class="hvr-line clr-second fnt-14 data-scroll tab-sw-hd d-md-none" tab-id="#<?php the_sub_field('title'); ?>" href="<?php the_sub_field('learn_more_url'); ?>">Learn More</a>
                  </div>

                  </div>



                     
                      
                    </div>


                    <div class="srv__ft mt-auto"> </div>


                  </div>
                </li>
               <?php endwhile; endif; ?>
              </ul>
            </div>
             <?php endwhile; endif; ?>
            
          </div>
          </div>
        </div>
      </section>
      <!--06-->
      <!--<section class="sec-pd" id="third">
        <div class="container"> 
          <div class="row"> 
           <?php if( have_rows('projects') ) : while( have_rows('projects') ): the_row(); ?>
            <div class="col-12 col-md-11 col-lg-10 mx-auto">     
              <div class="mb-35 fluid-mb">
               <a href="<?php the_sub_field('url'); ?>">
                <div class="reveal"><img class="portfolio-img" src="<?php the_sub_field('project_image'); ?>"></div>
                  </a>
              </div>
              <div class="d-flex flex-wrap px-md-4 px-xl-5"> 
                <div class="col-12 col-md-10 col-lg-8 col-xl-7 data-scroll pb-md-4">
                  <div class="mb-4">
                    <p class="fnt-16 mb-2"><?php the_sub_field('company_name'); ?></p>
                    <h2 class="fnt-40 fnt-800 mb-1"><?php the_sub_field('title'); ?></h2>
                    <p><?php the_sub_field('content'); ?></p>
                  </div><a class="data-scroll fnt-14 lp-link lp-link--pri hvr-line" href="<?php echo site_url(); ?>/portfolio/">View portfolio</a>
                </div>
              </div>
            </div>
             <?php endwhile; endif; ?>
          </div>
        </div>
      </section>-->
      
      <section class="sec-pd" id="third">
        <div class="container"> 
          <div class="row"> 
            <div class="col-12 col-md-11 col-lg-10 mx-auto">
              <?php if( have_rows('projects') ) : while( have_rows('projects') ): the_row(); ?>
              <div class="row"> 
                <div class="col-12 col-md-12 mx-auto">
                   <a class="" href="<?php the_sub_field('url'); ?>">
                    <div class="mb-35 fluid-mb hover-img">
                <div class="reveal"><img class="portfolio-img" src="<?php the_sub_field('project_image'); ?>"></div>
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
                      <div class="px-md-3"><a class="data-scroll fnt-14 lp-link lp-link--pri hvr-line" href="<?php the_sub_field('url'); ?>">View Project</a></div>
                    </div>
                  </div>
                </div>
              </div>
              <?php endwhile; endif; ?>
            </div>
          </div>
        </div>
      </section>
      
      <!--07-->
      <!--07-->
      <section class="sec-pd sec-pb">
        <div class="container">
          <div class="row"> 
            <div class="col-md-10 col-lg-8 mx-auto">
              <div class="mb-90 data-scroll">
               <?php if( have_rows('our_stories') ) : while( have_rows('our_stories') ): the_row(); ?>
                <h2 class="fnt-50 fnt-800 mb-16"><?php the_sub_field('title'); ?></h2><span class="fnt-24 col-md-10 col-lg-9 px-0"><?php the_sub_field('content'); ?></span>
                <?php endwhile; endif; ?>
              </div>
              <!-- White papers-->
              <ul class="px-0 home-artical-list">
                  <?php 
                            $args = array(
                                'post_type'=>'whitepapers', // Your post type name
                                'posts_per_page' => 1,
                                //'meta_key'			=> 'date',
                                //'orderby'			=> 'meta_value',
								//'order'				=> 'ASC' ,
                            );
                    $whitepaper = new WP_Query( $args );
                if ( $whitepaper->have_posts() ) : while ( $whitepaper->have_posts() ) : $whitepaper->the_post(); ?>
                 <li class="home-artical-list__item"> <a class="home-artical" href="<?php the_permalink(); ?>">
                      <div class="row">
                        <div class="col-12 col-md-3 col-lg-5">
                          <div class="revealnone h-100"> <img class="home-artical-img mb-3 mb-md-0" src="<?php the_field('home_page_thumbnail') ?>"></div>
                        </div>
                        <div class="col-12 col-md-7">
                          <div class="px-lg-4"><span class="text-uppercase d-block mb-2 fnt-12 fnt-800">white paper</span>
                            <h3 class="fnt-30 fnt-800 mb-2 pb-lg-1"><?php the_title(); ?> </h3>
                            <p class="clr-gray col-lg-11 mt-1 mt-md-0 mb-1 mb-md-3"><?php echo wp_trim_words(get_field('landing_content'), 35); ?></p><span class="d-block fnt-12">Posted on <?php the_field('date') ?></span> 
                          </div>
                        </div>
                      </div></a></li>
                      <?php wp_reset_postdata(); endwhile; endif;?>
                </ul>
              <!-- Blogs-->
              <ul class="px-0 home-artical-list">
                  <?php if( have_rows('blogs') ) : while( have_rows('blogs') ): the_row(); ?>
                  <li class="home-artical-list__item"> <a class="home-artical" href="<?php the_sub_field('url'); ?>">
                      <div class="row">
                        <div class="col-12 col-md-3 col-lg-5">
                          <div class="revealnone  h-100"><img class="home-artical-img mb-3 mb-md-0" src="<?php the_sub_field('blog_image'); ?>"></div>
                        </div>
                        <div class="col-12 col-md-7">
                          <div class="px-lg-4"><span class="text-uppercase d-block mb-2 fnt-12 fnt-800">blog</span>
                            <h3 class="fnt-30 fnt-800 mb-2 pb-lg-1"><?php the_sub_field('title'); ?></h3>
                            <p class="clr-gray col-lg-11 mt-1 mt-md-0 mb-1 mb-md-3"><?php the_sub_field('content'); ?></p><span class="d-block fnt-12">By 
                        <?php the_sub_field('author'); ?> on <?php the_sub_field('date'); ?></span>
                          </div>
                        </div>
                      </div></a></li>
                     <?php endwhile; endif; ?>
                </ul>
            </div>
          </div>
        </div>
      </section>
      <!--08-->
      <section class="sec-footer-trans">
        <div class="container z-1">
          <div class="row"> 
            <div class="col-12 col-md-11 col-lg-10 mx-auto">
              <div class="py-70 px-3 data-scroll" style="background: #221429;">
                <div class="d-flex align-items-center justify-content-center">
                  <div class="col-12 col-md-8 col-lg-7 px-0 d-inline-block clr-white text-center">
                    <?php if( have_rows('get_in_touch') ) : while( have_rows('get_in_touch') ): the_row(); ?>
                    <div class="mb-45"><span class="d-block fnt-24 mb-2 pb-2 mb-md-4 pb-md-0"><?php the_sub_field('small_title'); ?></span>
                      <h2 class="fnt-50 fnt-800 clr-white"><?php the_sub_field('title'); ?></h2>
                    </div><a class="web-btn web-btn--red" href="<?php the_sub_field('cta_url'); ?>">Get In Touch</a>
                      <?php wp_reset_postdata(); endwhile; endif;?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <p class="locations_name d-none"><?php the_field('locations_name'); ?></p>
    <script src="<?php echo get_template_directory_uri(); ?>/js/slider.js" defer></script>
    <script>
        var locas = $('.locations_name').text();
   $('.nav-dropdown-text').text(locas);
</script>
   <?php
get_footer();
?>
