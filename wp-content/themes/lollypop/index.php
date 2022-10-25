<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

get_header(); ?>

<style>
.terra-load-blogs {
    display: none;
}
    .hide{display: none !important;}
    .data-scroll:first-word{ display:none;}
    .blog-info span.comas__item:last-child{opacity: 0 !important;}
    /* @media only screen and (max-width: 768px) {
        .blogs-load-more{transform: translateY(-30px) !important;}
    } */
.blog-whitepaper{display:none}
.first-blog{display:none !important;}
</style>
 <main class="main">
      <!--01-->
      <!-- Blog banner-->
      
      <section class="sec-pd" data-aos="fade-up" data-aos-duration="3000"> 
        <div class="container pb-md-4">
          <div class="row"> 
            <div class="col-12 col-md-11 col-lg-10 mx-auto">
              <div class="row"> 
                <div class="col-12 col-md-10 col-lg-9 offset-md-1 mb-80"><span class="d-block fnt-14 text-capitalize mb-2 ms-md-1 clr-default">Blogs</span>
                
                    <h1 class="fnt-50 fnt-800 red-stroke red-stroke--small13 px-md-0">Our stories
</h1>
                  
                </div>
              </div>
              <?php 
                            $args = array(
                                'post_type'=>'post', // Your post type name
                                'posts_per_page' => 1,
                               // 'orderby'=> 'post_date',
                                //'order' => 'DESC'
				'rewrite' => true,
				'tax_query' => array(
                                 array (
				 'taxonomy' => 'blogs_category',
				  'field'    => 'slug',
				  'terms'    => 'banner-blog',  // this is slug
																					                              )
																								                                  ),
                                
                            );
                    $blog = new WP_Query( $args );
                    if ( $blog->have_posts() ) : while ( $blog->have_posts() ) : $blog->the_post(); ?>
              
              <div class="blog-main-img position-relative">
               <a href="<?php the_permalink(); ?>">
                <div class="reveal blog-main-img__img"><img class="img-fluid" src="<?php the_field('banner_image') ?>" alt="Image"></div>
                <div class="blog-info col-12 col-md-5">
                  <div class="d-flex flex-column">
                    <div>
                        <div class="fnt-14 d-block comas">
                                <!--div class="auth-nm">By
                                <?php if( have_rows('author_details') ){ ?>
                                <?php while( have_rows('author_details') ): the_row(); ?>
                               <span class="auth-nm__item"> 
                               <?php the_sub_field('author');?></span> <?php endwhile;?>
                                <?php } else { ?>
                                 <span class="auth-nm__item"> Anil Reddy </span>
                                 <?php } ?>
                                 </div-->
                              <span class="fnt-14">  Posted on <?php the_time('j F, Y'); ?></span></div>
                      <h3 class="fnt-28 fnt-800 main-blog-title"><?php the_title(); ?></h3>
                      <p class="blog-pera"><?php the_field('short_descriptions') ?></p>
                    </div>
                    <div class="mt-auto"> <div class="lp-link fnt-14 lp-link--pri text-capitalize hvr-line d-inline-block">read more</div></div>
                  </div>
                </div>
                  </a>
              </div>
              <?php wp_reset_postdata(); endwhile; endif; ?>
            </div>
          </div>
        </div>
      </section>
      <!--02-->
      <!-- Articles-->
      <section class="sec-pd second-artical sec-mb-0"> 
        <div class="container"> 
          <div class="row article-div"> 
            <div class="col-12 col-md-10 col-lg-8 mx-auto">
              <h2 class="fnt-40 fnt-800 mb-head">Must Read Articles</h2>
              <ul class="px-0 blog-list blog-list--topmost">
               <?php 
                            $args = array(
                                'post_type'=>'post', // Your post type name
                                'posts_per_page' => 4,
                               // 'orderby'=> 'post_date',
                               // 'order' => 'DESC'
                                'rewrite' => true,
                                'category_name' => 'top-blogs'
                            );
                    $blog = new WP_Query( $args );
                    if ( $blog->have_posts() ) : while ( $blog->have_posts() ) : $blog->the_post(); ?>
                <li class="blog-list__item second-article"><a class="blog row" href="<?php the_permalink(); ?>">
		    <div class="blog-img col-12 col-md-5 col-lg-5 mb-img mb-md-0">
			<div class="hover-img w-100 h-100">
                      <div class="reveal"><img src="<?php echo the_post_thumbnail_url( 'post_thumbnail' ) ?>" alt="Image"></div>
                    </div></div>
                    <div class="blog-info col-12 col-md-7 col-lg-6">
                      <div class="d-flex flex-column">
                        <div> 
                          <h3 class="mb-2 fnt-800 blog-titile data-scroll"><?php the_title(); ?></h3>
                       
                        </div>
                        <div class="data-scroll">  <span class="fnt-14">By <?php if( have_rows('author_details') ) : while( have_rows('author_details') ): the_row(); ?><?php the_sub_field('author'); ?>, &nbsp;<?php endwhile; endif; ?><span class="d-block">Posted on <?php the_time('j F, Y'); ?></span> </span></div>
                      </div>
                      
                    </div></a></li>
                    <?php wp_reset_postdata(); endwhile; endif; ?>
                 
              </ul>
            </div>
          </div>
          <div class="row article-div blog-whitepaper"> 
            <div class="col-12 col-md-11 col-lg-10 px-mb-0 mx-auto">
              <ul class="px-0 blog-list blog-list--whitepaper">
               <?php if( have_rows('whitepaper') ) : while( have_rows('whitepaper') ): the_row(); ?>
                <li class="blog-list__item white-paper bg-white"><a class="blog row" href="<?php the_sub_field('url') ?>"><span class="text-uppercase d-block d-md-none mb-3 fnt-12 fnt-800 data-scroll">WHITE PAPER</span>
                    <div class="blog-img col-12 col-md-5 mb-img mb-md-0">
                      <div class="reveal"><img src="<?php the_sub_field('image') ?>" alt="Image"></div>
                    </div>
                    <div class="blog-info col-12 col-md-7 col-lg-6">
                      <div class="d-flex flex-column white-paper__info">
                        <div> <span class="text-uppercase d-none d-md-block mb-3 fnt-12 fnt-800">WHITE PAPER</span>
                          <h3 class="mb-2 fnt-800 blog-titile data-scroll"><?php the_sub_field('title') ?></h3>
                          <p class="data-scroll col-xl-9 px-0"><?php the_sub_field('content') ?></p>
                          <div class="data-scroll"> <span class="fnt-14">Posted on: <?php the_sub_field('published_date') ?></span></div>
                        </div>
                        <div class="mt-4">
                         <div class="hvr-line fnt-14 clr-second data-scroll d-inline-block">View Paper</div>
                         </div>
                      </div>
                    </div></a></li>
                    <?php endwhile; endif; ?>
              </ul>
            </div>
          </div>
          <div class="row article-div thrid-article"> 
            <div class="col-12 col-md-10 col-lg-8 mx-auto">
              <ul class="px-0 blog-list blog-list--second">
                    <?php 
                            $args = array(
                                'post_type'=>'post', // Your post type name
                                'posts_per_page' => -1,
                                'orderby'=> 'post_date',
                                'order' => 'DESC',
                                'rewrite' => true,
                                
                            );
                    $blog = new WP_Query( $args );
                    if ( $blog->have_posts() ) : while ( $blog->have_posts() ) : $blog->the_post(); ?>
                <li class="blog-list__item thrid-article terra-load-blogs"><a class="blog row" href="<?php the_permalink(); ?>">
		    <div class="blog-img col-12 col-md-5 col-lg-5 mb-img mb-md-0">
<div class="hover-img w-100 h-100">
                      <div class="reveal"><img src="<?php echo the_post_thumbnail_url( 'post_thumbnail' ) ?>" alt="Image"></div>
                    </div></div>
                    <div class="blog-info col-12 col-md-7 col-lg-6">
                      <div class="d-flex flex-column">
                        <div> 
                          <h3 class="mb-2 fnt-800 blog-titile data-scroll"><?php the_title(); ?></h3>
                         <!-- <p class="data-scroll blog-pera col-xl-10 px-0"><?php echo wp_trim_words( get_the_content(), 32, '...' ); ?></p> -->
                        </div>
                        
                        <div class="data-scroll">
                            
                            <div class="fnt-14 d-block comas">
                                <div class="auth-nm">By
                                <?php if( have_rows('author_details') ){ ?>
                                <?php while( have_rows('author_details') ): the_row(); ?>
                               <span class="auth-nm__item"> 
                               <?php the_sub_field('author');?></span> <?php endwhile;?>
                                <?php } else { ?>
                                 <span class="auth-nm__item"> Anil Reddy </span>
                                 <?php } ?>
                                 </div>
                              <span class="fnt-12">  Posted on <?php the_time('j F, Y'); ?></span></div>
                        </div>
                        

                      </div>
                    </div></a></li>
                    <?php wp_reset_postdata(); endwhile; endif; ?>
              </ul>
              <div class="text-center"><a class=" clr-second fnt-14 hvr-line blogs-load-more d-inline-block"  href="javascript:void(0)">Load More</a></div>
               <div class="col-sm-12 no_more_blogs text-center mt-5"  style="display:none;">
            <h2 class="text-center blog-card-title mb-2 mb-md-3  fnt-18">No More Blogs Available</h2>
            </div>
            </div>
          </div>
        </div>
      </section>
      <section class="sec-footer-trans " id="nine">
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
<script>
    $(document).ready(function(){
$('.thrid-article:nth-child(1)').addClass('first-blog');;
   });
    
</script>


		    <script type="application/ld+json">
		        {
				        "@context": "https://schema.org",
							
							"headline":"Our Stories- How UX Design can add value to the growth of SMEs in MENA.",
								"description":"Learn how UX design has become a focus point for small businesses in the MENA Region in order to achieve high conversion rates and client retention",
									"url":"https://lollypop.design/whitepapers/",
									        "@type": "Webpage",
										        "image": {
											                "@type": "ImageObject",
														                "url": "	https://lollypop.design/wp-content/uploads/2022/04/Banner_2x-scaled.webp",
																                "width": "926",
																		                "height": "405"
																				        }
					    }
		        </script>

		    <script type="application/ld+json">
		    {
 "@context": "https://schema.org",
 "@type": "ImageObject",
 "image": {
                 "@type": "ImageObject",
			                 "url": "https://lollypop.design/wp-content/uploads/2022/04/Banner_2x-scaled.webp",
					                 "width": "926",
							                 "height": "405"
									         }
		    }
		    </script>


<?php
get_footer();
