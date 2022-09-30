<?php
/**
 Template Name: About Us
 */

get_header();
?>

<style>
    .plyr__poster{background: none;}
</style>
  <main class="main">
      <!--01-->
      <!-- About us head-->
      <section class="sec-pd sec-bnr" id="one">
        <div class="container"> 
          <div class="row">
            <div class="col-12 col-md-11 col-lg-10 mx-auto">
              <div class="mb-40">
                <div class="row"> 
                  <div class="col-12 col-md-11 offset-md-1"><span class="d-block fnt-14 text-capitalize mb-2 clr-default">about us</span>
                    <div class="red-stroke red-stroke--small13 px-md-0">
                      <h1 class="fnt-78 fnt-800 mb-3 mb-md-4">
                       <?php the_field('banner_heading');?></h1>
                      <p class="fnt-24 col-10 col-md-8 col-lg-6 px-0"> <?php the_field('banner_content');?></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="lp-video-wrap">
                <div class="play-video-on-scroll">
                  <div id="play2-out" style="display:none">
                      <div id="play2" data-plyr-provider="<?php the_field('banner_video_provider'); ?>" data-plyr-embed-id="<?php the_field('banner_video');?>"></div>
                  </div>
                  <video class="playvid" autoplay="" muted="" loop="" playsinline="" provider="<?php the_field('banner_video_provider'); ?>" embed-id="<?php the_field('banner_video');?>" poster="<?php the_field('banner_video_poster'); ?>">
                  </video>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </section>
      <!--02-->
      <!-- Lollypop Moments-->
      <section class="sec-pd" id="two">
        <div class="container"> 
          <div class="row"> 
            <div class="col-12 col-md-10 col-lg-9 mx-auto">
              <ul class="val-li px-0 m-0">
               <?php if( have_rows('about_moments') ) : while( have_rows('about_moments') ): the_row(); ?>
                <li class="val-li__item row">
                  <div class="col-12 col-md-3 mb-head mb-md-0"> 
                      <h3 class="fnt-40 fnt-800 data-scroll"><?php the_sub_field('title');?></h3>
                  </div>
                  <div class="col-12 col-md-8 offset-md-1">
                    <ul class="moment-list m-0 p-0">
                      <?php if( have_rows('list') ) : while( have_rows('list') ): the_row(); ?>
                      <li class="moment-list__item data-scroll">
                        <h4 class="fnt-24 fnt-800"><?php the_sub_field('content');?></h4>
                      </li>
                       <?php endwhile; endif; ?>
                    </ul>
                     <?php if(get_sub_field('cta_name') !=''){ ?>
                    <a class="hvr-line fnt-14 clr-second mt-4 d-inline-block data-scroll" href="<?php the_sub_field('cta_url');?>"><?php the_sub_field('cta_name');?></a>
                    <?php } ?>
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
            <div class="col-12 col-md-10 col-lg-12 mx-auto text-center">
            <img class="img-fluid" src="<?php the_field('about_image');?>" alt="">
            </div>
          </div>
        </div>
      </section>
      <!--04-->
      <!-- Clients-->
      <section class="sec-pd sec-pb" id="fourth">
        <div class="container">
          <div class="row"> 
            <div class="col-12 col-md-10 col-lg-9 mx-auto"> 
              <div class="row"> 
                <div class="col-12 col-md-4 mb-head mb-md-0"> 
                    <h3 class="fnt-40 fnt-800 data-scroll"><?php the_field('client_heading');?></h3>
                </div>
                <div class="col-12 col-md-6 offset-md-2">
                  <ul class="px-0 m-0 client-list single-mb-dot-slider">
                   <?php if( have_rows('our_clients') ) : while( have_rows('our_clients') ): the_row(); ?>
                    <li class="client-list__item data-scroll"> <a class="clnt d-block" href="javascript:void(0)">
                        <div class="clnt__logo"><img class="grayscale" src="<?php the_sub_field('client_logo'); ?>" alt="Image"></div>
                        <div class="clnt__info"> 
                          <p class="col-11 col-lg-10 px-0 fnt-24"><?php the_sub_field('content'); ?></p>
                        </div>
                        <div class="clnt__profile">
                          <div class="d-flex"> 
                             <div class="col-8 ms-2 ms-lg-3"> <span class="d-block fnt-14"><?php the_sub_field('client_name'); ?></span><span class="d-block fnt-14"><?php the_sub_field('client_position'); ?></span></div>
                          </div>
                        </div></a></li>
                        <?php endwhile; endif; ?>
                    
                  </ul><a class="hvr-line fnt-14 clr-second mt-4 mt-lg-5 pt-lg-3 d-inline-block data-scroll" href="<?php the_field('client_cta_url');?>"><?php the_field('client_cta_name');?></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--05-->
      <!-- Team-->
      <section class="sec-pd sec-pt pb-0" id="fifth" style="background: #221429;">
        <div class="container"> 
          <div class="row"> 
            <div class="col-12 col-md-11 col-lg-9 mx-auto">
              <div class="tean-head col-12 col-md-7 col-lg-8 col-xl-7 px-0 mb-45"> 
                <h2 class="fnt-50 l-3 clr-white fnt-800 mb-3 data-scroll"><?php the_field('leader_heading');?>

           </h2>
                <p class="fnt-26 clr-white my-4 d-block max-width-480 data-scroll"><?php the_field('leader_content');?></p>
              </div>
              <!-- Team list-->
              <div class="team"> 
                <div class="team__head"> 
                  <h3 class="fnt-40 fnt-800 clr-white data-scroll"><?php the_field('pioneers_leader'); ?></h3>
                </div>
                <div class="team__members"> 
                  <ul class="team-list px-0 row"> 
                   	 <?php 
                            $args = array(
                                'post_type'=>'about', // Your post type name
                                'posts_per_page' => -1,
                                'category_name' => 'mentors-leaders',
                                 
                            );
                    $about = new WP_Query( $args );
                    if ( $about->have_posts() ) : while ( $about->have_posts() ) : $about->the_post(); ?>
                   
                    <li class="team-list__item col-6 col-md-4"> 
                      <div class="team-profile">
                       <a href="<?php the_permalink(); ?>">
                        <div class="team-profile__img animated data-scroll"> <img class="img-fluid" src="<?php the_field('thumbnail_image'); ?>" alt="Image"></div>
                        <div class="team-profile__name"> 
                          <h5 class="fnt-22 fnt-800 clr-white mb-0 text-capitalize data-scroll"><?php the_title(); ?></h5><span class="d-block fnt-14 clr-white data-scroll"><?php the_field('destination'); ?></span>
                           </div></a>
                      </div>
                    </li>
                
                    <?php  wp_reset_postdata(); endwhile; endif; ?>
                    
                  </ul>
                </div>
              </div>
              <!-- Tribe Leaders-->
              <div class="team"> 
                <div class="team__head"> 
                  <h3 class="fnt-40 fnt-800 clr-white data-scroll"><?php the_field('tribe_leader');?></h3>
                </div>
                <div class="team__members"> 
                  <ul class="team-list px-0 row"> 
                    <?php 
                            $args = array(
                                'post_type'=>'about', // Your post type name
                                'posts_per_page' => -1,
								'category_name' => 'tribe-leaders',                                 
                            );
                    $about = new WP_Query( $args );
                    if ( $about->have_posts() ) : while ( $about->have_posts() ) : $about->the_post(); ?>
                   
                    <li class="team-list__item col-6 col-md-4"> 
                      <div class="team-profile">
                       <a href="<?php the_permalink(); ?>">
                        <div class="team-profile__img animated data-scroll"> <img class="img-fluid" src="<?php the_field('thumbnail_image'); ?>" alt="Image"></div>
                        <div class="team-profile__name"> 
                          <h5 class="fnt-22 fnt-800 clr-white mb-0 text-capitalize data-scroll"><?php the_title(); ?></h5><span class="d-block fnt-14 clr-white data-scroll"><?php the_field('destination'); ?></span>
                        </div>
                          </a>
                      </div>
                    </li>
                    
                    <?php  wp_reset_postdata(); endwhile; endif; ?>
                   
                  </ul>
                </div>
              </div>
            </div>
          </div>
           </div>
     <div class="container"> 
        <div class="row mt-4 mt-md-5 pt-md-5"> 
            <div class="col-12 col-md-11 col-lg-9 mx-auto"> 
              <div class="col-md-10 col-lg-9 px-0 clr-white">
                <div class="mb-35">
                  <h3 class="fnt-50 fnt-800 clr-white mb-2 pb-md-1 data-scroll col-12 col-md-8 px-0"><?php the_field('join_heading') ?></h3>
                  <p class="col-md-10 fnt-26 col-lg-8 px-0 data-scroll"><?php the_field('join_content') ?></p>
                </div><a class="web-btn web-btn--primary data-scroll" href="<?php the_field('cta_url') ?>"><?php the_field('cta_name') ?></a>
              </div>
            </div>
          </div>
          </div>
          <div class="sec-pd sec-pt">
  <div class="fluid-width">
          <div class="row">
            <div class="col-12 px-md-0">
              <ul class="px-0 lp-awards-list d-flex four-card-slider">
               <?php if( have_rows('location_slider') ) : while( have_rows('location_slider') ): the_row(); ?>
                <li class="lp-awards-list__item">
                  <div class="award-info"><img class="img mb-3" src="<?php the_sub_field('image') ?>" alt="Image">
                    <div class="col-12 col-md-8 ps-lg-4"><span class="fnt-14 clr-white d-block mb-1"><?php the_sub_field('location_name') ?></span><span class="d-block mb-0 col-md-10 px-0 fnt-18 clr-white"><?php the_sub_field('content') ?></span></div>
                  </div>
                </li>
                  <?php endwhile; endif; ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
      </section>
    </main>

		    <script type="application/ld+json">
		        {
				        "@context": "https://schema.org",
							
							"headline":"We believe in crafting sweet experiences",
								"description":"We believe in crafting sweet experiences",
									"url":"https://lollypop.design/about/",
									        "@type": "Webpage",
										        "image": {
											                "@type": "ImageObject",
														                "url": "https://lollypop.design/wp-content/uploads/2022/02/About-Us-Illustration.webp",
																                "width": "1116",
																		                "height": "448"
																				        }
					    }
			</script>

		    <script type="application/ld+json">
		    {
  "@context": "https://schema.org/",
  "@type": "Service",
  "serviceType": "IT services",
 
    "hasOfferCatalog": {
        "@type": "OfferCatalog",
		    "name": "IT services",
		        "itemListElement": [
				      {
					              "@type": "OfferCatalog",
							              "name": "IT services",
								              "itemListElement": [
										                {
													            "@type": "Offer",
															                "itemOffered": {
																	              "@type": "Service",
																			                    "name": "Research"
																					                }
														              },
																                {
																			            "@type": "Offer",
																					                "itemOffered": {
																							              "@type": "Service",
																									                    "name": "Design"
																											                }
																				              },
																					                {
																								            "@type": "Offer",
																										                "itemOffered": {
																												              "@type": "Service",
																														                    "name": "Build"
																																                }
																									              }
						              ]
								            }
	    ]
		      }
		    }
		    </script>


		    <script type="application/ld+json">
		    {
			        "@context": "https://schema.org",
					    "@type": "Person",
					        "@id": "https://lollypop.design/about/",
						    "name": "Lollypop design",
						        "brand": [
								        {
										            "@type": "Person",
												                "name": "Renil Komitla",
														            "@id": "https://lollypop.design/wp-content/uploads/2021/12/Renil-Final.webp"
															            },
																	            {
																			                "@type": "Person",
																						            "name": "Rama Kini",
																							                "@id": "https://lollypop.design/wp-content/uploads/2021/12/Rama-Final.webp"
																									        }
				        ,
						        {
								            "@type": "Person",
										                "name": "Dr.Devi Shetty",
												            "@id": "	https://lollypop.design/wp-content/uploads/2021/12/Dr-Shetty.webp"
													            },
														            {
																                "@type": "Person",
																			            "name": "Ash Bhardwaj",
																				                "@id": "https://lollypop.design/wp-content/uploads/2021/12/Ash-Bhardwaj.webp"
																						        }
				        ,
						        {
								            "@type": "Person",
										                "name": "Katie Fifer",
												            "@id": "https://lollypop.design/wp-content/uploads/2022/01/Katie.webp"
													            }
				    ]
		    }
		    </script>

		    <script type="application/ld+json">
		    {
			        "@context": "https://schema.org",
					    "@type": "Person",
					        "@id": "https://lollypop.design/about/",
						    "name": "Lollypop design",
						        "brand": [
								        {
										            "@type": "Person",
												                "name": "Anil Reddy",
														            "@id": "https://lollypop.design/wp-content/uploads/2021/12/Anil.webp"
															            },
																	            {
																			                "@type": "Person",
																						            "name": "Rajesh Vasanth",
																							                "@id": "https://lollypop.design/wp-content/uploads/2021/12/Rajesh.webp"
																									        }
				        ,
						        {
								            "@type": "Person",
										                "name": "Kruthi Reddy",
												            "@id": "https://lollypop.design/wp-content/uploads/2021/12/kruti.webp"
													            },
														            {
																                "@type": "Person",
																			            "name": "Anjali Ajit Deswandikar",
																				                "@id": "https://lollypop.design/wp-content/uploads/2022/02/Anjali.webp"
																						        }
				        ,
						        {
								            "@type": "Person",
										                "name": "Thammaiah Aiyappa",
												            "@id": "https://lollypop.design/wp-content/uploads/2021/12/003-1.jpg"
													            },
														             {
																                 "@type": "Person",
																			             "name": "Haymkarran S Bhalla",
																				                 "@id": "https://lollypop.design/wp-content/uploads/2022/02/karan.webp"
																						         },
																							          {
																									              "@type": "Person",
																											                  "name": "Arvind Appanna",
																													              "@id": "https://lollypop.design/wp-content/uploads/2021/12/Arvind.webp"
																														              },
																															               {
																																	                   "@type": "Person",
																																				               "name": "Adesh Bhansali",
																																					                   "@id": "https://lollypop.design/wp-content/uploads/2021/12/Adesh.webp"
																																							           }
				    ]
		    }
		    </script>
<?php
get_footer();
?>
