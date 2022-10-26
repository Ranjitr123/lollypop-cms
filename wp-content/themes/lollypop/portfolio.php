<?php
/**
 Template Name: Portfolio
 */

get_header();
?>

<style>
    @media screen and (min-width: 1200px) { 
        .portfolio_thubmnail{width: 948px;}
    }
</style>
 <main class="bg-white main">
      <!--01-->
      <!-- Portfolio head-->
      <section class="sec-pd">
        <div class="container"> 
          <div class="row"> 
            <div class="col-12 col-md-11 col-lg-10 mx-auto">
              <div class="row">
                <div class="col-12 col-md-11 offset-md-1"> 
                  <h1 class="fnt-60 fnt-800 col-12 col-md-11 col-lg-10 red-stroke red-stroke--small13 px-0 mb-22" data-aos="fade-up" data-aos-duration="500 col-12 col-md-8">Story telling with <br> creative courage</h1>
                  <div class="d-md-flex flex-wrap justify-content-between" data-aos="fade-up" data-aos-duration="500">
                    <p class="fnt-24 m-0 col-12 col-md-8 col-lg-6 px-0 mb-3 mb-md-0">First hand insight into how our processes have been implemented in all the projects we’ve worked on.</p>
                    <!--<div>
                      <div class="red-stroke red-stroke--mb"><span class="d-block">Look book</span><span class="d-block">2016-20</span></div>
                    </div>-->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--<section class="sec-portfolio" itemscope itemtype="https://schema.org/CreativeWork" >
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-11 col-lg-9 portfolio_thubmnail mx-auto"><a class="d-block" href="https://lollypop.design/projects/aha/" itemprop="url">
                <div class="mb-35 overflow-hidden hover-img">
                <div class="revealnone">
                <img class="portfolio-img" src="https://lollypop.design/wp-content/uploads/2022/05/slice-1.webp" alt="Image" itemprop="image"></div>
                </div>
                <div class="row">
                  <div class="col-12 col-md-11 mx-auto">
                    <div class="d-flex flex-wrap justify-content-center">
                      <div class="col-12 col-md-3 mb-3 mb-md-0 d-flex flex-column"><span class="d-inline-block fnt-16 data-scroll portfolio-title text-rpd">Aha</span></div>
                      <div class="col-12 col-md-9 col-xl-8 data-scroll">
                        <div class="px-md-3">
                          <h2 class="fnt-40 fnt-800 mb-3"  itemprop="name">Designing 100% Regional OTT Platform</h2>
                          <p class="fnt-16 col-lg-10 px-0 mb-0"  itemprop="description">Aha is a unique OTT platform which delivers regional content all over the world. It aims to be one of the largest platforms that deliver content to users in their native language.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div></a></div>
          </div>
        </div>
      </section>-->
      
  <!--02-->
                            <?php 
                            $args = array(
                                'post_type'=>'projects', // Your post type name
                                'posts_per_page' => -1,
                                'orderby'=> 'post_date',
                                'order' => 'DESC'
                                //'meta_key'			=> 'date',
                                //'orderby'			=> 'meta_value',
								//'order'				=> 'ASC' ,
                            );
                    $project = new WP_Query( $args );
     $count = 0 ;
                if ( $project->have_posts() ) : while ( $project->have_posts() ) : $project->the_post();
      if($count < 4){
     ?>
      <section class="sec-portfolio" itemscope itemtype="https://schema.org/CreativeWork">
        <div class="container">
          <div class="row"> 
            <div class="col-12 col-md-11 col-lg-10 col-xl-9 portfolio_thubmnail  mx-auto"><a class="d-block" href="<?php the_permalink(); ?>" itemprop="url">
                <div class="mb-35 overflow-hidden hover-img">
                <div class="revealnone">
                <img class="portfolio-img" src="<?php the_field('thumbnail_image'); ?>" alt="Image" itemprop="image" ></div>
                </div>
                 <div class="row"> 
                  <div class="col-12 col-md-11 mx-auto">
                    <div class="d-flex flex-wrap justify-content-center">
                      <div class="col-12 col-md-3 mb-3 mb-md-0 d-flex flex-column"><span class="d-inline-block fnt-16 data-scroll portfolio-title text-rpd"><?php the_field('company_name'); ?> </span></div>
                      <div class="col-12 col-md-9 col-xl-8 data-scroll">
                        <div class="px-md-3">
                          <h2 class="fnt-40 fnt-800 mb-3" itemprop="name"><?php the_title(); ?></h2>
                          <p class="fnt-16 col-lg-10 px-0 mb-0" itemprop="description" ><?php the_field('short_descriptions'); ?></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div></a></div>
          </div>
        </div>
      </section>
       <?php } wp_reset_postdata(); $count++; endwhile; endif; ?>
	   
      <!--03-->
     
      <!--04-->
      <!--Clents varying-->
      <section class="sec-pd pt-md-0"> 
        <div class="container"> 
          <div class="row"> 
            <div class="col-12 col-md-9 mx-auto">
              <div class="mb-60 text-center"> 
                <h6 class="fnt-400 fnt-16"><?php the_field('client_content'); ?></h6>
              </div>
              <ul class="px-0 mb-0 clients-logo row">
               <?php if( have_rows('clients_logos') ) : while( have_rows('clients_logos') ): the_row(); ?>
                <li class="clients-logo__item col-4 col-md-3 data-scroll">
                  <div class="cl-logo text-center"><img class="img-fluid" src="<?php the_sub_field('logo'); ?>" alt="Image"></div>
                </li>
                <?php  endwhile; endif; ?>
              </ul>
              <div class="mt-5 text-center">
              <a class="data-scroll fnt-14 lp-link lp-link--pri hvr-line d-inline-block" href="<?php echo site_url(); ?>/clients/" style="opacity: 1; transform: translateY(0px);">View All Clients</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--04-->
        <div class="projects-list">
     <?php 
        $args = array(
            'post_type'=>'projects', // Your post type name
            'posts_per_page' => -1,
            'orderby'=> 'post_date',
            'order' => 'DESC'
            //'meta_key'			=> 'date',
            //'orderby'			=> 'meta_value',
            //'order'				=> 'ASC' ,
        );
        $project = new WP_Query( $args );
		$counts = 0 ;
        if ( $project->have_posts() ) : while ( $project->have_posts() ) : $project->the_post(); 
		if($counts > 5){ 
		?>
      <section class="sec-portfolio" itemscope itemtype="https://schema.org/CreativeWork" >
        <div class="container">
          <div class="row"> 
            <div class="col-12 col-md-11 col-lg-9 portfolio_thubmnail mx-auto">
				<a class="d-block" href="<?php the_permalink(); ?>" itemprop="url">
                <div class="mb-35 overflow-hidden hover-img">
                <div class="revealnone">
                <img class="portfolio-img" src="<?php the_field('thumbnail_image'); ?>" alt="Image" itemprop="image"></div>
                </div>
                <div class="row"> 
                  <div class="col-12 col-md-11 mx-auto">
                    <div class="d-flex flex-wrap justify-content-center">
                      <div class="col-12 col-md-3 mb-3 mb-md-0 d-flex flex-column"><span class="d-inline-block fnt-16 data-scroll portfolio-title text-rpd"><?php the_field('company_name'); ?> </span></div>
                      <div class="col-12 col-md-9 col-xl-8 data-scroll">
                        <div class="px-md-3">
                          <h2 class="fnt-40 fnt-800 mb-3"  itemprop="name"><?php the_title(); ?></h2>
                          <p class="fnt-16 col-lg-10 px-0 mb-0"  itemprop="description"><?php the_field('short_descriptions'); ?></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div></a></div>
          </div>
        </div>
      </section>
		<?php  }wp_reset_postdata(); $counts++; endwhile; endif; ?>
       </div>
      <!--09-->
      <section class="sec-footer-trans">
        <div class="container z-1">
          <div class="row"> 
            <div class="col-12 col-md-10 mx-auto">
              <div class="py-70 px-mb-15" style="background: #221429;" data-aos="fade-up" data-aos-duration="500">
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
    <script>
$('.projects-list .sec-portfolio:nth-child(1)').hide();
$('.projects-list .sec-portfolio:nth-child(2)').hide();
$('.projects-list .sec-portfolio:nth-child(3)').hide();
$(document).ready(function() {
	  $('.bd-brd').addClass('bd-brd--gray');
});
</script>


	<script type="application/ld+json">
	{
		 "@context": "https://schema.org",
			  "@type": "ImageObject",
			  "image": {
			                  "@type": "ImageObject",
						                  "url": "https://lollypop.design/wp-content/uploads/2022/02/Impress-AI.webp",
								                  "width": "924",
										                  "height": "472"
												          }
	}
	</script>

	<script type="application/ld+json">
	    {
		            "@context": "https://schema.org",
				    	
				    	"headline":"Story telling with creative courage",
						"description":"First hand insight into how our processes have been implemented in all the projects weve worked on.",
							"url":"https://lollypop.design/projects/",
							        "@type": "Webpage",
								        "image": {
									                "@type": "ImageObject",
												                "url": "https://lollypop.design/wp-content/uploads/2022/02/Recalc_thumbnail_02-1.webp",
														                "width": "924",
																                "height": "472"
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
<?php
get_footer();
?>
