<?php
/**
 Template Name: Home
 */

get_header();
?>
<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "Service",
  "serviceType": "lollypop-design",
  "provider": {
    "@type": "Corporation",
    "name": "lollypop-design"
  },
  "hasOfferCatalog": {
    "@type": "OfferCatalog",
    "name": "lollypop-design",
    "itemListElement": [
      {
        "@type": "OfferCatalog",
        "name": "lollypop-design",
        "itemListElement": [
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Research",
	      "description": "We provide data-driven insights that represent the voice of the user and resonate with business objectives.",
	      "url":""
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Design",
	      "description": "Our team of UX-UI designers thrive to create designs that users fall in love with, are intuitive and scalable.",
	      "url":""
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Build",
	      "description": "We help you translate any kind of design into pixel perfect, adaptable and scalable digital products for businesses.",
	      "url":""
            }
          }
        ]
      }
    ]
  }
}
</script>
<style>
    .plyr__controls{display: none;}
</style>
 <main class="main">
      <!--01-->
      <section class="lp-index sec-pd pb-0" id="one">
        <div class="container">
          <div class="row"> 
            <div class="col-12 col-md-11 col-lg-10 mx-auto">
              <div class="row">
                <div class="col-12 col-md-11 offset-md-1">
                  <div class="mb-60">
                    <div class="mb-45 multi-line-text">
                      <h1 class="fnt-50 fnt-800 px-0 red-stroke red-stroke--small px-0"><?php the_field('banner_content');?></h1>
                      <div class="rw-wrapper">
                        <div class="rw-sentence">
                           <div class="lp-sudo-right__textchange fnt-60 fnt-800 clr-second fnt-50">users fall in love with</div>
                        </div>
                      </div>
                    </div>
                    <ul class="lp-number-list ps-0">
                     
                      <?php if( have_rows('banner_list') ) : while( have_rows('banner_list') ): the_row(); ?>
                      <li class="lp-number-list__item"><span class="fnt-18 fnt-800 lp-number-title"><?php the_sub_field('list');?> </span>
                        <p class="fnt-14"><?php the_sub_field('list_1');?> </p>
                      </li>
                      <?php endwhile; endif; ?>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12 mb-4">
                <div class="play-video-on-scroll">
               			<div id="play2-out" style="display:none">
                <div id="play2" data-plyr-provider="<?php the_field('video_provider');?>" data-plyr-embed-id="<?php the_field('video');?>" ></div> 
                </div>
                <video class="playvid"  autoplay="" muted="" loop="" playsinline="" provider="<?php the_field('video_provider');?>" embed-id="<?php the_field('video');?>"  poster="<?php the_field('video_poster');?>">              
                </video>                     
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--02-->
      <!-- OUR SERVICES LIST-->
      <section class="sec-pd" id="second">
	<div class="container">
          <div class="row">
            <div class="col-12 col-md-10 col-lg-8 mx-auto">
              <div class="lp-our-services mb-50">
                <h2 class="fnt-50 fnt-800 mb-2 pb-lg-1 data-scroll"><?php the_field('services_heading');?></h2>
                  <span class="fnt-24 col-md-11 col-lg-10 px-0 d-block data-scroll"><?php the_field('services_content');?></span>
              </div>
              <!--<div class="row flex-column">
                <?php if( have_rows('research_design') ) : while( have_rows('research_design') ): the_row(); ?>
                <div class="col-12">
                  <h3 class="h3 mt-4 pt-1 mt-lg-4 mb-0 data-scroll"><?php the_sub_field('title'); ?></h3>
                </div>
                <div class="col-12">
                  <ul class="lp-block-list ps-0 data-scroll">
                    <li class="lp-block-list__item">
                      <ul class="lp-list row row-cols-lg-2 flex-md-row">
                              <?php if( have_rows('list') ) : while( have_rows('list') ): the_row(); ?>
                              <li class="lp-list__item col-6 col-md-6"><?php the_sub_field('content'); ?></li>
                              <?php endwhile; endif; ?>
                              
                      </ul>
                    </li>
                  </ul>
                </div>
                  <?php endwhile; endif; ?>
              </div>-->
            </div>
          </div>
          <div class="row" id="services-listing">
           <div class="col-12 col-md-10 col-lg-8 mx-auto">
               <ul class="mb-0 services-list px-0">
                <?php if( have_rows('research_design') ) : while( have_rows('research_design') ): the_row(); ?>
                <li class="services-list__item data-scroll"> 
                  <div class="srv row"> 
                    <div class="srv__head col-12 col-md-4"> 
                      <h4 class="fnt-28 fnt-800 mb-2 mb-md-4 text-md-end pe-md-4 pe-lg-5"><?php the_sub_field('title'); ?></h4>
                    </div>
                    <div class="srv__info col-12 col-md-8"> 

                    <div class="row justify-content-between">

                    <div class="col-12 col-md-6">
                    <p class="fnt-16 mb-md-3"><?php the_sub_field('content'); ?></p>
                    <a class="hvr-line clr-second fnt-14 data-scroll tab-sw-hd d-none d-md-inline-block" tab-id="#<?php the_sub_field('title'); ?>" href="<?php the_sub_field('url'); ?>" style="opacity: 1; transform: translateY(0px);">Learn More</a>
                  </div>
                  <div class="col-12 col-md-6 col-lg-5">
                  <ul class="li-disc mb-4">
                       <?php if( have_rows('list') ) : while( have_rows('list') ): the_row(); ?>
                         <li class="fnt-16 mb-2"><?php the_sub_field('content'); ?></li>
                          <?php endwhile; endif; ?>
                      </ul>

                      <a class="hvr-line clr-second fnt-14 data-scroll tab-sw-hd d-md-none" tab-id="#<?php the_sub_field('title'); ?>" href="<?php the_sub_field('url'); ?>" style="opacity: 1; transform: translateY(0px);">Learn More</a>
                  </div>

                    </div>
                      
                     
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

      
      <section class="sec-pd" id="third">
        <div class="container"> 
          <div class="row"> 
            <div class="col-12 col-md-11 col-lg-10 mx-auto">
              <?php if( have_rows('projects') ) : while( have_rows('projects') ): the_row(); ?>
             
               
                   <a class="" href="<?php the_sub_field('url'); ?>">
                    <div class="mb-35 fluid-mb hover-img">
		<div class="reveal">
<!--img class="portfolio-img" width="1076px"height="472px" src="<?php the_sub_field('project_image'); ?>" alt="<?php the_sub_field('project_image'); ?>"-->
  <img class="portfolio-img" srcset="<?php the_sub_field('project_image'); ?> 480w, <?php the_sub_field('project_image'); ?> 1076w" sizes="(max-width: 600px) 480px,
            1076px" src="<?php the_sub_field('project_image'); ?>"alt="<?php the_sub_field('project_image'); ?>">
</div>
              </div>
                   <div class="d-flex flex-wrap px-md-4 px-xl-5">
                    <div class="col-12 px-md-12 col-md-4 mb-3 mb-md-0 d-flex flex-column"><span class="d-inline-block fnt-16 data-scroll mt-0 text-rpd portfolio-title"><?php the_sub_field('company_name'); ?></span></div>
                    <div class="col-12 px-md-12 col-md-8 data-scroll pb-md-3">
                      <div class="px-md-3">
                        <div class="mb-2 pb-lg-0">
                          <h2 class="fnt-40 fnt-800 mb-3"><?php the_sub_field('title'); ?></h2>
                          <p><?php the_sub_field('content'); ?></p>
                        </div>
                      </div>
                       </div></div> </a>
                  <div class="px-md-4 px-xl-5">
                    <div class="col-12 px-md-12 col-md-5 offset-md-4">
                      <div class="px-md-3"><a class="data-scroll fnt-14 lp-link lp-link--pri hvr-line" href="<?php the_sub_field('url'); ?>">View Project</a></div>
                    </div>
                  </div>
              <?php endwhile; endif; ?>
            </div>
          </div>
        </div>
      </section>
      
      <!--04-->
      <section class="sec-pd sec-pb" id="fourth">
        <div class="container">
         
            <div class="row"> 
              <div class="col-12 col-md-10 col-lg-8 mx-auto">
                <div class="row">
                  <div class="col-12 mb-50">
                    <h2 class="fnt-50 fnt-800 mb-3 mb-md-2 pb-lg-1 data-scroll col-md-10 col-xl-8 px-0"><?php the_field('client_heading');?></h2><span class="fnt-24 mb-2 mb-md-0 col-md-8 d-block col-lg- 8-0 data-scroll"><?php the_field('client_content');?></span>
                  </div>
                  <div class="col-12">
                    <div class="full-mb">
                      <div class="row mb-45 single-mb-slider">
                              <?php if( have_rows('top_clients') ) : while( have_rows('top_clients') ): the_row(); ?>
                              <div class="col-6 col-md-4 lp-thumbnial lp-thumbnial--sm d-md-flex mb-md-4 mb-lg-0">
				<div class="lp-thumbnial__info data-scroll client-cards border-0 align-items-start text-center lp-thumbnial-borderlft">
<!--img class="img-fluid mx-auto mb-4" src="<?php the_sub_field('client_image'); ?>" alt="<?php the_sub_field('title'); ?>"-->
<img class="img-fluid mx-auto mb-4" srcset="<?php the_sub_field('client_image'); ?> 200w, <?php the_sub_field('client_image'); ?> 202w" sizes="(max-width: 600px) 200px,
            202px" src="<?php the_sub_field('client_image'); ?>"alt="<?php the_sub_field('title'); ?>">
                                  <div class="lp-thumbnial__body pt-2 pt-md-4">
                                    <h6 class="lp-thumbnial__heading"><?php the_sub_field('title'); ?></h6>
                                    <p class="lp-thumbnial__text mb-0"><?php the_sub_field('content'); ?></p>
                                  </div>
                                </div>
                              </div>
                              <?php endwhile; endif; ?>
                      </div>
                    </div>
                    <div class="d-flex flex-wrap data-scroll"><!--<span class="fnt-16 me-3">+300 happy clients</span>--><a class="lp-link lp-link--pri hvr-line fnt-16" href="<?php echo site_url(); ?>/clients/">View All Clients</a></div>
                  </div>
                </div>
              </div>
            </div>
          
        </div>
      </section>
      <!--05-->
      <!-- AWARS MIXIN-->
      <!-- AWARS-->
     
      <!--06-->
      
       <section class="sec-pd sec-pt" id="fifth" style="background: #221429;">
        <div class="container z-1">
          <div class="row"> 
            <div class="col-12 col-md-10 col-lg-8 mx-auto mb-4 pb-2 mb-md-0 pb-md-0">
              <div class="row mb-45 justify-content-between">
                <div class="col-md-6 col-lg-10 fluid-offset"> 
                  <div class="lp-awards__left">
                    <h2 class="fnt-50 l-3 clr-white fnt-800 data-scroll"><?php the_field('design_studio_heading'); ?></h2><span class="fnt-24 clr-white my-4 d-block max-width-480 data-scroll"><?php the_field('design_studio_content'); ?></span>
                  </div>
		  <div class="px-0 d-flex flex-wrap culture-slider-nav mb-35 data-scroll">
<a class="culture-slider-nav__item hvr hvr--white fnt-16 fnt-400 clr-white" href="<?php echo site_url(); ?>/ui-ux-design/">India</a><a class="culture-slider-nav__item hvr hvr--white fnt-16 fnt-400 clr-white" href="<?php echo site_url(); ?>/ui-ux-design-agency-in-usa/">USA</a><a class="culture-slider-nav__item hvr hvr--white fnt-16 fnt-400 clr-white" href="<?php echo site_url(); ?>/ae/">Dubai</a><a class="culture-slider-nav__item hvr hvr--white fnt-16 fnt-400 clr-white" href="<?php echo site_url(); ?>/ui-ux-design-agency-vietnam/">Vietnam</a></div><a class="clr-second fnt-16 hvr-line d-inline-block data-scroll" href="<?php echo site_url(); ?>/about/">About Us</a>
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
                  <div class="award-info"><img class="img mb-3" src="<?php the_sub_field('image') ?>" alt="<?php the_sub_field('image') ?>">
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
              <div class="play-video-on-scroll">
                	<div id="play1-out" style="display:none">
                <div id="play1" data-plyr-provider="<?php the_field('video_provider');?>" data-plyr-embed-id="<?php the_sub_field('video_url');?>" ></div> 
                </div>
                      <video class="playvid"  autoplay="" muted="" loop="" playsinline="" provider="<?php the_sub_field('video_provider');?>" embed-id="<?php the_sub_field('video_url');?>" poster="<?php the_sub_field('video_url_poster');?>">                          
                      </video>
              </div>
            </div>
            <?php endwhile; endif; ?>
          </div>
        </div>
      </section>
      <section class="sec-pd sec-pt" id="sixth">
        <div class="container">
          <div class="row"> 
            <div class="col-12 col-md-10 col-lg-8 mx-auto">
              <div class="mb-50 data-scroll">
                <h2 class="fnt-50 fnt-800 mb-16 col-md-10 col-lg-10"><?php the_field('industries_heading') ?></h2><span class="fnt-24 col-md-10 col-lg-7 px-0"><?php the_field('industries_content') ?></span>
              </div>
            </div>
            <div class="col-12 col-md-10 col-lg-8 mx-auto">
              <ul class="indutstry-list px-0 mb-4 row justify-content-between"> 
                <?php if( have_rows('industries') ) : while( have_rows('industries') ): the_row(); ?>
                <li class="indutstry-list__item col-12 col-md-6 col-lg-5 data-scroll"> 
                  <a href="<?php the_sub_field('url') ?>" class="industry col-10 col-md-11 col-lg-10 col-xl-8 px-0"> 
                    <h3 class="fnt-22 fnt-800 mb-2">
                       <?php the_sub_field('title') ?></h3>
                    <p class=""><?php the_sub_field('content') ?></p>
                    <!--<div class="fade-img">
                      <?php if( have_rows('industries_image') ) : while( have_rows('industries_image') ): the_row(); ?>
                      <div class="fade-img__item"><img class="img-fluid" src="<?php the_sub_field('images') ?>"></div>
                      <?php endwhile; endif; ?>
                      
                    </div>-->
                  </a>
                </li>
               <?php endwhile; endif; ?>
              </ul><a class="clr-second fnt-14 hvr-line data-scroll" href="<?php echo site_url()?>/industrie/">View All Industries</a>
            </div>
          </div>
        </div>
      </section>
      
      <!--08-->
      <section class="sec-pd sec-pb" id="seventh">
        <div class="container">
          <div class="pb-md-4 pb-lg-5 mb-lg-5"> 
            <div class="row"> 
              <div class="col-md-10 col-lg-8 mx-auto">
                <div class="mb-50 data-scroll">
                  <h2 class="fnt-50 fnt-800 mb-16"><?php the_field('blogs_heading') ?></h2><span class="fnt-24 col-md-10 col-lg-9 px-0"><?php the_field('blog_content') ?></span>
                </div>
                <!-- White papers-->
                <ul class="px-0 home-artical-list mt-">
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
                 
                  <li class="home-artical-list__item data-scroll"> <a class="home-artical" href="<?php the_permalink(); ?>">
                      <div class="row">
                        <div class="col-12 col-md-3 col-lg-5">
			  <div class="revealnone h-100">
<!--img class="home-artical-img mb-3 mb-md-0" src="<?php the_field('home_page_thumbnail') ?>"-->
<img class="home-artical-img mb-3 mb-md-0" srcset="<?php the_field('home_page_thumbnail') ?> 500w, <?php the_field('home_page_thumbnail') ?> 343w" sizes="(max-width: 600px) 500px,
            343px" src="<?php the_field('home_page_thumbnail') ?>"alt="Blog Images">
</div>
                        </div>
                        <div class="col-12 col-md-7">
                          <div class="px-lg-4"><span class="text-uppercase mb-2 d-block fnt-12 fnt-800">white paper</span>
                            <h3 class="fnt-30 fnt-800 mb-2 pb-lg-1"><?php the_title(); ?> </h3>
                            <p class="clr-gray col-lg-11 mt-1 mt-md-0 mb-1 mb-md-3"><?php echo wp_trim_words(get_field('landing_content'), 35); ?></p><span class="d-block fnt-12">Posted on <?php the_field('date') ?></span> 
                          </div>
                        </div>
                      </div></a></li>
                      <?php wp_reset_postdata(); endwhile; endif;?>
		</ul>
			<a class="clr-second fnt-14 hvr-line data-scroll" href="<?php echo site_url()?>/whitepapers/">View all Whitepapers</a>
                <!-- Blogs-->
                <ul class="px-0 home-artical-list pb-4 pb-md-5 mb-md-3">
                  <?php 
                            $args = array(
                            'post_type'=>'post', // Your post type name
                                'posts_per_page' => 1,
                                //  'category_name' => 'top-blogs'
                                'orderby'=> 'post_date',
                                'order' => 'DESC'
                               
                                 
                            );
                    $blog = new WP_Query( $args );
                    if ( $blog->have_posts() ) : while ( $blog->have_posts() ) : $blog->the_post(); ?>

                  <li class="home-artical-list__item data-scroll"> <a class="home-artical" href="<?php the_permalink(); ?>">
                      <div class="row">
                        <div class="col-12 col-md-3 col-lg-5">
			  <div class="revealnone h-100">
<!--img class="home-artical-img mb-3 mb-md-0" src="<?php echo the_post_thumbnail_url( 'post_thumbnail' ) ?>"-->
<img class="home-artical-img mb-3 mb-md-0" srcset="<?php echo the_post_thumbnail_url( 'post_thumbnail' ) ?> 500w, <?php echo the_post_thumbnail_url( 'post_thumbnail' ) ?> 343w" sizes="(max-width: 600px) 500px,
            343px" src="<?php echo the_post_thumbnail_url( 'post_thumbnail' ) ?>"alt="Blog Images">
</div>
                        </div>
                        <div class="col-12 col-md-7">
                          <div class="px-lg-4"><span class="text-uppercase d-block mb-2 fnt-12 fnt-800">blog</span>
                            <h3 class="fnt-30 fnt-800 mb-2 pb-lg-1"><?php the_title(); ?></h3>
                            <p class="clr-gray col-11 mt-1 mt-md-0 mb-1 mb-md-3"><?php the_field('short_descriptions') ?></p><span class="d-block fnt-12">By <?php if( have_rows('author_details') ) : while( have_rows('author_details') ): the_row(); ?><?php the_sub_field('author'); ?> <?php endwhile; endif; ?> 
                             on <?php the_time('j F, Y'); ?></span>
                          </div>
                        </div>
                      </div></a></li>
                      <?php wp_reset_postdata(); endwhile; endif;?>
                </ul>
                <a class="clr-second fnt-14 hvr-line data-scroll" href="<?php echo site_url()?>/blogs/">View All Blogs</a>
                
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--09-->
      <section class="sec-footer-trans" id="nine">
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
<script>
    $(document).ready(function(){
$(".menus .nav-link ").removeClass('active');
       /* const players = Plyr.setup('.js-player');
        players.muted=false;
        players.volume = 1;*/
        });
</script>

		    <script type="application/ld+json">
		        {
				        "@context": "https://schema.org",
							
							"headline":"We're a global design agency curating experiences that win hearts and awards",
								"description":"From concept to launch, we can help you at every stage!
								We are a UI/UX design company that brings ideas to life
								through scalable, sustainable and futuristic design solutions.",
									"url":"https://lollypop.design/",
									        "@type": "Webpage",
										        "image": {
											                "@type": "ImageObject",
														                "url": "https://lollypop.design/wp-content/uploads/2022/02/Anjali-Discussion.webp",
																                "width": "638",
																		                "height": "450"
																				        }
					    }
			</script>

		    <script type="application/ld+json">
		    {
			      "@context": "https://schema.org",
				        "@type": "CreativeWork",
					  "author": "Lollypop Design",
					    "contentRating": "Mature",
					      "image": "https://lollypop.design/wp-content/uploads/2022/02/image-24-1-2.webp",
					        "name": "Vodafone Idea-Changing the face of design for telecom in India"
		    }
		    </script>

		    <script type="application/ld+json">
		    {
			     "@context": "https://schema.org",
				      "@type": "ImageObject",
				      "image": {
				                      "@type": "ImageObject",
							                      "url": "https://lollypop.design/wp-content/uploads/2022/02/Anjali-Discussion.webp",
									                      "width": "638",
											                      "height": "450"
													              }
		    }
		    </script>

<?php
get_footer();
?>
