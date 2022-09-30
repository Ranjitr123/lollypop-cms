<?php
/**
 Template Name: Whitepaper
 */

get_header();
?>
<main class="main">
      <!--01-->
      <section class="sec-pd pb-0 sec-bnr-ptsm">
        <div class="container"> 
          <div class="row">
            <div class="col-12 col-md-11 col-lg-10 mx-auto">
              <div class="row"> 
                <div class="col-12 col-md-11 offset-md-1">
                  <div><span class="d-block fnt-14 text-capitalize mb-2 clr-default">Whitepaper</span>
                    <h1 class="fnt-50 fnt-800 mb-3 mb-md-4 red-stroke red-stroke--small13 px-md-0">
                      <?php the_field('whitepaper_title');?></h1>
                    <p class="fnt-24 col-md-10 px-0 mb-0"> <?php the_field('whitepaper_content');?> </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--02-->
      <!-- Cards-->
      <section class="sec-pd"> 
        <div class="container"> 
          <div class="row"> 
            <div class="col-12 col-md-11 col-lg-10 mx-auto">
              <ul class="px-0 image-text-list mb-0">
                 <?php 
                            $args = array(
                                'post_type'=>'whitepapers', // Your post type name
                                'posts_per_page' => -1,
                                //'meta_key'			=> 'date',
                                //'orderby'			=> 'meta_value',
								                //'order'				=> 'ASC' ,
                            );
                    $whitepaper = new WP_Query( $args );
                if ( $whitepaper->have_posts() ) : while ( $whitepaper->have_posts() ) : $whitepaper->the_post(); ?>
                <li class="image-text-list__item" data-aos="fade-up" data-aos-duration="500"> 
                 <a href="<?php the_permalink(); ?>">
                  <div class="row">
                    <div class="col-12 col-md-6 col-lg-5 hover-img"> 
                      <div class="img reveal"><img src="<?php the_field('landing_image') ?>" alt="Image"></div>
                    </div>
                    <div class="col-12 col-md-6"> 
                      <div class="text">
                        <div class="mb-3"> <span class="data-scroll d-block text-uppercase fnt-12 fnt-800"><?php the_field('category_name') ?></span></div>
                        <div class="mb-3">
                          <h3 class="fnt-30 fnt-800 mb-2 data-scroll"><?php the_title(); ?></h3>
                          <p class="fnt-16 data-scroll"><?php the_field('landing_content') ; ?></p>
                        </div>
                        <div class="mb-2 mb-md-3"> <span class="fnt-12 d-block data-scroll">Published on: <?php the_field('date') ?></span></div>
                        <div> <div class="hvr-line text-capitalize fnt-14 clr-second data-scroll d-inline-block">view paper</div></div>
                      </div>
                    </div>
                     </div></a>
                  </li>
                 <?php wp_reset_postdata(); endwhile; endif; ?>             
              </ul>
            </div>
          </div>
        </div>
      </section>   
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
<script type="application/ld+json">
    {
	            "@context": "https://schema.org",
			    	
			    	"headline":"Stay inspired with our Whitepapers.",
					"description":"Keep up with the changing technology, user's behaviour and design",
						"url":"https://lollypop.design/whitepapers/",
						        "@type": "Webpage",
							        "image": {
								                "@type": "ImageObject",
											                "url": "https://lollypop.design/wp-content/uploads/2021/12/fintech-thumbnail.png",
													                "width": "338",
															                "height": "369"
																	        }
		        }
    </script>

<script type="application/ld+json">
		{
			 "@context": "https://schema.org",
				  "@type": "ImageObject",
				  "image": {
				                  "@type": "ImageObject",
							                  "url": "https://lollypop.design/wp-content/uploads/2021/12/thumbnail-1.webp",
									                  "width": "338",
											                  "height": "470"
													          }
		}
</script>
<?php
get_footer();
?>
