<?php

get_header();
?>
<style>
.blog-detail-content__item li a {
    color: #fd2e35;
    position: relative;
}
    h2, h3{font-weight: 800; margin-bottom:30px; margin-top: 30px;}
   .blog-detail-content__item a{color: blue}
    .blog-detail-content__item ol li{list-style: auto !important; padding-bottom: 0.5rem;}
    .blog-detail-content__item ul li{list-style: disc !important; padding-bottom: 0.5rem;}
	.spacm{margin-top:4px!important;}
    @media only screen and (max-width: 1024px) {
   
    }
</style>
<main class="main">
      <!--01-->
      <!-- Blog banner-->
      <section class="sec-pd sec-blog pb-mb-0" data-aos="fade-up" data-aos-duration="3000"> 
        <div class="container">
          <div class="row"> 
            <div class="col-12 col-md-11 col-lg-10  mx-auto">
              <div class="col-12 col-md-10 col-xl-8 offset-md-1 px-0 mb-head"><span class="d-block fnt-14 clr-default mb-2">Blogs</span>
                <div>
                  <h1 class="fnt-50 fnt-800 mb-3 red-stroke red-stroke--small13 px-0"><?php the_title(); ?></h1>
                  <div> <span class="fnt-24 me-3 mb-3 mb-md-0 d-flex flex-wrap mb-4 justify-content-md-between">
                  <?php if( have_rows('author_details') ) : while( have_rows('author_details') ): the_row(); ?>
                  <?php $authorName = get_sub_field('author');
                       endwhile; endif; ?>          
               <div class="auth-nm col-12  px-0 mb-1">
                                 </div>
                    <span>Posted on &nbsp;<?php the_time('j F, Y'); ?></span></span></div>
                </div>
                </div>
               <?php $banner = get_field('banner_image');
                     if($banner !=''){ ?>
              <div class="position-relative">
				<div class="reveal"> <!---desktop-->         
					<div class="d-none d-lg-block" style="height:405px; width:100%; background-size:cover; background-repeat:no-repeat; background-image: url(<?php the_field('banner_image') ?>) "></div>
				</div> 
					
				<div class="reveal"> <!----mobile---->         
					<div class="d-md-none d-sm-none" style="height:195px; width:100%; background-size:contain; background-repeat:no-repeat; background-image: url(<?php the_field('banner_image') ?>) "></div>
				</div> 
				
				<div class="reveal"><!----ipad---->          
					<div class="d-none d-lg-none d-md-block" style="height:285px; width:100%; background-size:contain; background-repeat:no-repeat; background-image: url(<?php the_field('banner_image') ?>) "></div>
				</div> 
				
			 </div>
              <?php } ?>
			  
			   <?php $bannerVideo = get_field('banner_video_link') ?>
              <?php if($bannerVideo !=''){ ?>
                <div class="play-video-on-scroll">
                  <div id="play2-out" style="display:none">
                    <div id="play2" data-plyr-provider="<?php the_field('banner_video_provider');?>" data-plyr-embed-id="<?php the_field('banner_video_link');?>"></div>
                  </div>
                  <video class="playvid" autoplay="" muted="" loop="" playsinline="" embed-id="<?php the_field('banner_video_link');?>" provider="<?php the_field('banner_video_provider');?>" poster="<?php the_field('banner_video_poster');?>">
                  </video>
                </div>
               <?php } ?>
			   
			   				
				<!-------you tube link------->
				<div class="reveal"> <!---desktop-->         
					<div class="d-none d-lg-block">
						<!--<a href="<?php the_field('you_tube_video') ?>">
							<img src="<?php the_field('you_tube_poster_image') ?>" alt="img">
						</a>-->
						<iframe width="100%" height="auto" src="<?php the_field('you_tube_video') ?>"></iframe>
					</div>
				</div> 
				
				<!------end you tube link------->
			   
            </div>
          </div>
        </div>
      </section>
      <!--01-->
      <!-- Blog detail-->
      <section class="sec-pd sec-blog">
        <div class="container"> 
          <div class="row"> 
            <div class="col-12 col-md-11 col-lg-10 mx-auto"> 
              <div class="row blog-detail">
                <div class="col-12 col-md-4 col-lg-3 d-none d-md-block">
                  <div class="blog-auth">
                   <?php if( have_rows('author_details') ) : while( have_rows('author_details') ): the_row(); ?>
                    <?php $authorDetail = get_sub_field('author');
                  endwhile; endif;
                    if($authorDetail !=''){ ?>
                    <div class="writer-info">
                      <div class="writer-info__profile text-center"> <span class="fnt-12 clr-gray66 d-block mb-3">Written by</span>
                        <?php if( have_rows('author_details') ) : while( have_rows('author_details') ): the_row(); ?>
                        <div class="img mx-auto mb-3"> <img src="<?php the_sub_field('author_photo'); ?>" alt="Image"></div>
                        <div class="name text-center mb-4"> 
                          <h6 class="fnt-16 fnt-400 mb-0"><?php the_sub_field('author'); ?></h6><span class="clr-gray66 fnt-12"><?php the_sub_field('positions'); ?></span>
                        </div>
                        <?php endwhile; endif; ?>
                      </div>
                    </div>
                    <?php } else { ?>
                    <div class="writer-info">
                      <div class="writer-info__profile text-center"> <span class="fnt-12 clr-gray66 d-block mb-3">Written by</span>
                        <div class="img mx-auto mb-3"> <img src="<?php echo get_template_directory_uri(); ?>/img/blog/anil.jpg" alt="Image"></div>
                        <div class="name text-center"> 
                          <h6 class="fnt-16 fnt-400 mb-0">Anil Reddy</h6><span class="clr-gray66 fnt-12">Founder / Design Director</span>
                        </div>
                      </div>
                    </div>
                         <?php } ?>
                    <!-- Trending Blogs-->
                    <ul class="px-0 trending-blogs">
                            <?php 
                            $args = array(
                                'post_type'=>'post', // Your post type name
                                'posts_per_page' => 2,
                                 'orderby'=> 'post_date',
                                'order' => 'DESC'
                                 
                            );
                    $blog = new WP_Query( $args );
                    if ( $blog->have_posts() ) : while ( $blog->have_posts() ) : $blog->the_post(); ?>
                      <li class="trending-blogs__item"> <a class="d-block" href="<?php the_permalink(); ?>">
                          <h3 class="fnt-22 fnt-800 mb-2"><?php the_title(); ?></h3>
                          <div> <span class="fnt-12 me-4">By  <?php if( have_rows('author_details') ) : while( have_rows('author_details') ): the_row(); ?><?php the_sub_field('author'); ?>, <?php wp_reset_postdata(); endwhile; endif; ?> on  <?php the_time('j F, Y'); ?></span></div>
                          </a></li>
                      <?php wp_reset_postdata(); endwhile; endif; ?>
                    </ul>
                  </div>
                </div>
                <div class="col-12 col-md-7 col-lg-8 offset-md-1"> 
                  <div class="blog-detail-content">
                    <div class="blog-detail-content__head">
                      <div class="mb-40">
                        <div class="blog-detail-content__item">
                        <?php if (have_posts()) : while ( have_posts() ) : the_post();?>
                        <?php the_content(); ?>
						<!--------------added new section----->
						 <?php if( have_rows('content_section_with_videos') ) : while( have_rows('content_section_with_videos') ): the_row(); ?>
								<?php if( have_rows('paragraph_with_videos_and_images') ) : while( have_rows('paragraph_with_videos_and_images') ): the_row(); ?>
										<?php the_sub_field('paragraph'); ?>
										<?php the_sub_field('banner_image'); ?>
										
											<?php $bannerVideo = get_sub_field('video_link') ?>
												<?php if($bannerVideo !=''){ ?>
													<div class="play-video-on-scroll mb-3">
														<div id="play2-out" style="display:none">
															<div id="play2" data-plyr-provider="<?php the_sub_field('video_from');?>" data-plyr-embed-id="<?php the_sub_field('video_link');?>"></div>
														</div>
															<video class="playvid" autoplay="" muted="" loop="" playsinline="" embed-id="<?php the_sub_field('video_link');?>" provider="<?php the_sub_field('video_from');?>" poster="<?php the_sub_field('video_poster');?>">
															</video>
													</div>
												<?php } ?>
									
								<?php endwhile; endif; ?>
						 <?php endwhile; endif; ?>
						<!--------------ended new sec----------->
                        <?php endwhile; else : ?>
                          <p>Sorry no posts matched your criteria.</p>
                        <?php endif; ?>
                      </div>
                      </div>                      
                    </div>                  
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--03-->
      <section class="sec-auth sec-pd pt-0 sec-pb d-md-none"> 
        <div class="container"> 
          <div class="row"> 
            <div class="col-12"> 
              <div class="writer-info">
               <?php if( have_rows('author_details') ) : while( have_rows('author_details') ): the_row(); ?>
                    <?php $authorDetail = get_sub_field('author');
                  endwhile; endif;
                    if($authorDetail !=''){ ?>
                <div class="writer-info__profile text-center pt-0"> <span class="fnt-12 clr-gray66 d-block mb-3">Written by</span>
                 
                  <?php if( have_rows('author_details') ) : while( have_rows('author_details') ): the_row(); ?>
                   <div class="img mx-auto mb-3"> <img src="<?php the_sub_field('author_photo'); ?>" alt="Image"></div>
                  <div class="name text-center"> 
                    <h6 class="fnt-18 fnt-800 mb-0"><?php the_sub_field('author'); ?></h6><span class="clr-gray66"><?php the_sub_field('positions'); ?></span>
                  </div>
                   <?php wp_reset_postdata(); endwhile; endif; ?>
                </div>
                <?php } ?>
                <!-- Trending Blogs-->
                <ul class="px-0 trending-blogs">
                  <?php 
                            $args = array(
                                'post_type'=>'post', // Your post type name
                                'posts_per_page' => 3,
                                 'orderby'=> 'post_date',
                                'order' => 'DESC'
                                 
                            );
                    $blog = new WP_Query( $args );
                    if ( $blog->have_posts() ) : while ( $blog->have_posts() ) : $blog->the_post(); ?>
                  <li class="trending-blogs__item"> <a class="d-block" href="<?php the_permalink(); ?>">
                      <h3 class="fnt-22 fnt-800 mb-2"><?php the_title(); ?></h3>
                      <div> <span class="fnt-12 me-4">By  <?php if( have_rows('author_details') ) : while( have_rows('author_details') ): the_row(); ?><?php the_sub_field('author'); ?>, <?php wp_reset_postdata(); endwhile; endif; ?> on  <?php the_time('j F, Y'); ?></span></div>                     
                      </a></li>
                 <?php wp_reset_postdata(); endwhile; endif; ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--04-->
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
     $("h2").addClass("blog-h2")
     $("h2").addClass("data-scroll")
     $("h3").addClass("data-scroll")
     $("h3").addClass("fnt-28")
     $('img').addClass("blog-d-img");
     $(".drop-ar").removeClass("blog-d-img")
 });
</script>
<?php
get_footer();
?>
