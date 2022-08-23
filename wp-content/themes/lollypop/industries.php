<?php
/**
 Template Name: Industries
 */

get_header();
?>
<style>
.logo-list__item img{
max-width:100% !important;
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
                    <h1 class="fnt-50 fnt-800 mb-3 mb-md-4 red-stroke red-stroke--small13 px-md-0 col-12 col-md-10">
                      <?php the_field('banner_heading'); ?></h1>
                    <p class="fnt-24 col-md-10 col-lg-10 px-0"><?php the_field('banner_content'); ?></p>
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
              <ul class="px-0 image-text-list">
                <?php
            $args = array(
            'post_type' => 'industries',
            'posts_per_page' => -1,
            );
           
$indus = new WP_Query( $args );
            ?>
               <?php if ( $indus->have_posts() ) : while ( $indus->have_posts() ) :   $indus->the_post();  ?>
                <li class="image-text-list__item" data-aos="fade-up" data-aos-duration="500"> 
                 <a href="<?php the_permalink(); ?>">
                  <div class="row"> 
                    <div class="col-12 col-md-6 col-lg-5 hover-img"> 
                      <div class="img reveal"><img src="<?php the_field('front_banner'); ?>"></div>
                    </div>
                    <div class="col-12 col-md-6"> 
                      <div class="text">
                        <div class="mb-3"> <span class="data-scroll d-block text-uppercase fnt-12 fnt-800"><?php the_field('category_name'); ?></span></div>
                        <div class="mb-3"> 
                          <h3 class="fnt-30 fnt-800 mb-2 data-scroll"><?php the_title(); ?></h3>
                          <p class="fnt-16 data-scroll"><?php the_field('short_description'); ?></p>
                        </div>
                        <div class="indus-logo">
                            <ul class="px-0 logo-list logo-list--3 row mt-5 mb-5">
                               <?php if( have_rows('clients_logo_list') ) : while( have_rows('clients_logo_list') ): the_row(); ?>
                               <li class="logo-list__item col-4"><img class="img-fluid grayscale" src="<?php the_sub_field('logos'); ?>"></li>
                                 <?php endwhile; endif; ?>
                               </ul>
                        </div>
                        <div> <div class="hvr-line fnt-14 clr-second data-scroll d-inline-block">Read More</div></div>
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
      <!--03-->
      <section class="sec-pd sec-pb">
        <div class="container"> 
          <div class="row"> 
            <div class="col-12 col-md-11 col-lg-10 mx-auto"> 
              <div class="mb-80">
                <div class="col-12 col-md-6 px-0">
                  <h2 class="fnt-50 fnt-800 mb-3"><?php the_field('client_heading'); ?></h2>
                  <p class="fnt-24"><?php the_field('client_content'); ?></p>
                </div>
              </div>
              <ul class="px-0 industry-list">
               <?php if( have_rows('industries_list') ) : while( have_rows('industries_list') ): the_row(); ?> 
                <li class="industry-list__item row">
                  <div class="col-12 col-md-4">
                    <h3 class="fnt-24 fnt-800 mb-2 data-scroll"><?php the_sub_field('title'); ?></h3>
                  </div>
                  <div class="col-12 col-md-7 offset-md-1">
                    <ul class="px-0 row data-scroll"> 
                      <?php if( have_rows('list') ) : while( have_rows('list') ): the_row(); ?>
                      <li class="col-6 col-md-4 ly-6"><?php the_sub_field('content'); ?></li>
                       <?php endwhile; endif; ?>
                    </ul>
                  </div>
                </li>
                 <?php endwhile; endif; ?>
               
              </ul>
            </div>
          </div>
        </div>
      </section>
      <!--04-->
      <section class="sec-footer-trans">
        <div class="container z-1">
          <div class="row"> 
            <div class="col-12 col-md-11 col-lg-10 mx-auto">
              <div class="py-70 px-3 data-scroll" style="background: #221429;">
                <div class="d-flex align-items-center justify-content-center">
                  <div class="col-12 col-md-8 col-lg-7 px-0 d-inline-block clr-white text-center"> 
                    <div class="mb-45"><span class="d-block fnt-24 mb-2 pb-2 mb-md-4 pb-md-0">Got an idea?</span>
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
   $(".logo-list__item").hide(); 
   $(".logo-list__item:nth-child(1), .logo-list__item:nth-child(2), .logo-list__item:nth-child(3)").show(); 
});
</script>

<!--ImageObject schema-->
<script type="application/ld+json">
{
	 "@context": "https://schema.org",
		  "@type": "ImageObject",
		  "image": {
		                  "@type": "ImageObject",
					                  "url": "https://lollypop.design/wp-content/uploads/2022/01/Healthcare-1-1.webp",
							                  "width": "338",
									                  "height": "334"
											          }
}
</script>

<script type="application/ld+json">
    {
	            "@context": "https://schema.org",
			    	
			    	"headline":"HEALTHCARE-Using Design to Empower the Healthcare Industry.",
					"description":"Leveraging design and technology to improve patient experiences and outcomes",
						"url":"https://lollypop.design/industries/",
						        "@type": "Webpage",
							        "image": {
								                "@type": "ImageObject",
											                "url": "https://lollypop.design/industries/",
													                "width": "338",
															                "height": "354"
																	        }
		        }
    </script>
<?php
get_footer();
?>
