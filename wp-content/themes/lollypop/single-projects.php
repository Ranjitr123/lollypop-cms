<?php 
get_header();
?>

<style>
     .define{margin-top: 30px;}

     @media only screen and (min-width: 768px) {
         .define{margin-top: 60px;}
    }
        @media only screen and (min-width: 992px) {
        .projects-sec-pd{padding-top: 70px}
        .define{margin-top: 80px;}
}
    .projects-nav .ps-4:hover h4, .projects-nav .pe-4:hover h4{color: #fd2e35;}
    .li-disc {margin-top: 15px;}
    .li-disc li::before{width: 5px;
    height: 5px;}
    .conclustion p, .conclustion ul{margin-bottom: 20px !important;}
    .plyr__controls{display: none;}
</style>


<main class="main" style="background:#ffffff;">
      <!--01-->
      <section class="sec-pd sec-bnr p-r-80"> 
        <div class="container"> 
          <div class="row">
            <div class="col-12 col-md-11 col-lg-10 mx-auto">
              <div class="row">
                <div class="col-12 col-md-11 offset-md-1">
                  <div class="mb-r-80 col-md-10 col-lg-10 px-0"> <span class="d-block fnt-14 text-capitalize mb-2 clr-default">projects</span>
                    <h1 class="fnt-78 fnt-800 mb-3 mb-md-4 red-stroke red-stroke--small13 px-md-0 fnt-50"><?php the_title(); ?></h1>                 
                    <p class="fnt-24"><?php the_field('short_descriptions'); ?></p>                     
                    <div class="project-type">
                        <?php if( have_rows('tags') ) : while( have_rows('tags') ): the_row(); ?> 
                        <span class="fnt-14 clr-black354"><?php the_sub_field('list'); ?></span>
                    <?php endwhile; endif; ?>
                  </div>
                  </div>
                </div>
              </div>             
              <div class="reveal-project">
               <?php $galImage = get_the_post_thumbnail_url(); ?>
              <?php if($galImage !=''){ ?>
              <img class="wpdm-img" src="<?php echo the_post_thumbnail_url('post_thumbnail') ?>">
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
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--02-->
      <section class="p-r-80 pb-0 pare-define"> 
        <div class="container"> 
          <div class="row"> 
            <div class="col-12 col-md-11 col-lg-10 mx-auto">
              <div>
                <div class="col-md-10 px-0 mx-auto">
                  <div class="mb-r-80">
                    <div class="project-step">
                      <?php if( have_rows('brief_descriptions') ) : while( have_rows('brief_descriptions') ): the_row(); ?> 
                      <div class="project-step__item row"> 
                        <div class="col-12 col-md-4 mb-3 mb-md-0"> <span class="clr-second fnt-18 d-inline-block fnt-700 text-uppercase data-scroll disc-head text-rpd text-rpd text-rpd--more"><?php the_sub_field('title'); ?></span></div>
                        <div class="col-12 col-md-8 project-step-disc">
                          <div class="project-step-disc__item"> 
                            <?php the_sub_field('content'); ?>
                          </div>
                          <?php if(get_sub_field('cta_name') !=''){ ?>
                            <a class="hvr-line fnt-14 clr-second mt-4 d-inline-block data-scroll" href="<?php the_sub_field('cta_url');?>"><?php the_sub_field('cta_name');?></a>
                            <?php } ?>
                        </div>
                      </div>
                       <?php endwhile; endif; ?>
                    </div>
                  </div>
                </div>    
					<!--new section------------>
				<?php if( have_rows('emaars_digital_booking') ) : while( have_rows('emaars_digital_booking') ): the_row();
                   $digImage = get_sub_field('title');
                if($digImage !='') { ?>	
				<section class="Emaar_digital">
					<div class="container head position-relative">
						<h2><?php the_sub_field('title'); ?></h2>

					<div class="row space3">
						<?php if( have_rows('images_section') ) : while( have_rows('images_section') ): the_row(); ?>
						<div class="col-md-4">
							<figure>
								<img src="<?php the_sub_field('image');?>" class="img-fluid w-100">
							</figure>
						</div>
						<?php endwhile; endif; ?>
					</div>         
          
            <div class="photo position-relative"><!-----------mobile resposive------------->
				<?php if( have_rows('images_section') ) : while( have_rows('images_section') ): the_row(); ?>
                <div class="card">
                    <img src="<?php the_sub_field('image');?>" class="img-fluid w-100" >
                </div>
				<?php endwhile; endif; ?>
            </div>
          
        </div>
      
					<div class="row approach_style">
					<?php if( have_rows('approach_section') ) : while( have_rows('approach_section') ): the_row(); ?>
						<div class="col-md-3 ">
							<p><?php the_sub_field('title');?></p>
						</div>
						<div class="col-md-9 space">
							<p><?php the_sub_field('content');?></p>

						<div class="row space1 ">
							<?php if( have_rows('card_section') ) : while( have_rows('card_section') ): the_row(); ?>
							<div class="col-md-6 ">
								<?php if( have_rows('detail_card') ) : while( have_rows('detail_card') ): the_row(); ?>
								<div class="space2 position-relative">
									<h3 class="pb-1 "><?php the_sub_field('title');?></h3>
									<p class="pb-5"><?php the_sub_field('content');?></p>
								</div>
								<?php endwhile; endif; ?>
							</div>
							<?php endwhile; endif; ?>
						</div>
						</div>
						<?php endwhile; endif; ?>
					</div>
				</div>
			</section>
			<?php } ?>
            <?php endwhile; endif; ?>
					<!----end new section--------->
					
                  <?php if( have_rows('web_image') ) : while( have_rows('web_image') ): the_row();
                   $webImage = get_sub_field('project_gallery');
                if($webImage !='') { ?>
                  <div class="mb-r-80 m-img emar"><img class="img-project-dtl data-scroll" src="<?php the_sub_field('project_gallery'); ?>"></div>
                   <?php } ?>
                   <?php endwhile; endif; ?>
                  
                  <?php $projectVideo = get_field('video_url');
                if($projectVideo !=''){?>
                <!--div class="mb-r-80"><a class="video-img position-relative popup-vimeo d-block" href="<?php the_field('video_url'); ?>">
                    <div class="reveal-project"> <img src="<?php the_field('video_image'); ?>"></div>
                    <div class="play-icon"><i class="icon-play"></i></div></a></div-->
                     <?php } ?>
                     
              </div>
              <div> <?php if( have_rows('define_descriptions') ) : while( have_rows('define_descriptions') ): the_row(); ?> 
                <div class="col-md-10 px-0 mx-auto define">
                  <div class="mb-r-80">
                    <div class="project-step">
                     
                      <div class="project-step__item row"> 
                        <div class="col-12 col-md-4 mb-3 mb-md-0"><span class="clr-second fnt-18 d-inline-block fnt-700 text-uppercase data-scroll disc-head text-rpd text-rpd text-rpd--more"><?php the_sub_field('title'); ?></span></div>
                        <div class="col-12 col-md-8 project-step-disc">
                          <?php the_sub_field('content'); ?>
                          <?php if(get_sub_field('cta_name') !=''){ ?>
                            <a class="hvr-line fnt-14 clr-second mt-4 d-inline-block data-scroll" href="<?php the_sub_field('cta_url');?>"><?php the_sub_field('cta_name');?></a>
                          <?php } ?>
                        </div>
                      </div>
                    
                    </div>
                  </div>
                </div>
                   
                <?php $i=0; if(get_sub_field('web_video') !=''){ ?>
                <div class="play-video-on-scroll mb-80" video="<?php echo $i; ?>">
                  <div id="play2-out" style="display:none">
                    <div id="play2" data-plyr-provider="<?php the_sub_field('web_video_provider');?>" data-plyr-embed-id="<?php the_sub_field('web_video');?>" ></div> 
                  </div>
                  <video class="playvid"  autoplay="" muted="" loop="" playsinline="" provider="<?php the_sub_field('web_video_provider');?>" embed-id="<?php the_sub_field('web_video');?>" poster="<?php the_sub_field('web_video_poster');?>">
                  </video>
                </div>
              <?php } $i++; ?>
                
                 <?php if( have_rows('web_image') ) : while( have_rows('web_image') ): the_row();?>
                <div class="mb-r-80 m-img emar"><img class="img-project-dtl data-scroll" src="<?php the_sub_field('images'); ?>"></div>
                     <?php endwhile; endif; ?>
                      <?php endwhile; endif; ?>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--03-->
      <?php if( have_rows('case_study') ) : while( have_rows('case_study') ): the_row();
        $casestudy = get_sub_field('video_url');
    endwhile; endif;
    if($casestudy !=''){
      ?>
      <section class="sec-pd pt-0">
       <div class="sec-bg"  style="background: #221429">
        <div class="container"> 
          <div class="row">
            <?php if( have_rows('case_study') ) : while( have_rows('case_study') ): the_row(); ?> 
            <div class="col-12 col-md-10 col-lg-8 mx-auto">
              <div class="col-12 col-md-10 col-lg-9 px-0 mb-4 pb-3 mb-lg-5 pb-lg-2">
                <h2 class="fnt-50 fnt-800 clr-white mb-4 data-scroll"><?php the_sub_field('title'); ?></h2>
                <p class="data-scroll clr-white col-12 col-md-8 px-0"><?php the_sub_field('content'); ?></p>
                <?php if(get_sub_field('cta_name') !=''){ ?>
                <a class="clr-second hvr-line d-inline-block data-scroll fnt-14" href="<?php the_sub_field('cta_link'); ?>"><?php the_sub_field('cta_name'); ?></a>
                <?php } ?>
              </div>
              <div class="play-video-on-scroll">
                <div id="play1-out" style="display:none">
                  <div id="play1" data-plyr-provider="<?php the_sub_field('video_provider')?>" data-plyr-embed-id="<?php the_sub_field('video_url') ?>"></div>
                </div>
                <video class="playvid" autoplay="" muted="" loop="" playsinline="" embed-id="<?php the_sub_field('video_url') ?>" provider="<?php the_sub_field('video_provider')?>" poster="<?php the_sub_field('video_poster')?>">
                </video>
              </div>
            </div>
             <?php wp_reset_postdata(); endwhile; endif; ?>
          </div>
          </div>
        </div>
</section>
      <?php } ?>
      <!--04-->
    <?php if( have_rows('sketch') ) : while( have_rows('sketch') ): the_row();
        $sketch = get_sub_field('title');
      endwhile; endif;
    if($sketch !=''){
        ?>
        <section class="p-r-80">
          <div class="container"> 
            <div class="row"> 
            
              <div class="col-12 col-md-11 col-lg-10 mx-auto">
                <?php if( have_rows('sketch') ) : while( have_rows('sketch') ): the_row(); ?> 
                <div>
                  <div class="col-md-10 px-0 mx-auto">
                    <div class="mb-r-80">
                      <div class="project-step">
                        <div class="project-step__item row"> 
                          <div class="col-12 col-md-4 mb-3 mb-md-0"> <span class="clr-second fnt-18 d-inline-block fnt-700 text-uppercase data-scroll disc-head text-rpd text-rpd--more"><?php the_sub_field('title'); ?></span></div>
                          <div class="col-12 col-md-8 project-step-disc">
                            <div class="project-step-disc__item"> 
                            <?php the_sub_field('content'); ?>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php if( have_rows('web_image') ) : while( have_rows('web_image') ): the_row();?>
                  <div class="mb-r-80 m-img emar"><img class="img-project-dtl data-scroll" src="<?php the_sub_field('image'); ?>"></div>
                      <?php endwhile; endif; ?>
                </div>
                <?php endwhile; endif; ?>
              
              </div>
                
            </div>
          </div>
        </section>
        <?php } ?>
        
        <?php if( have_rows('project_testimonial') ) : while( have_rows('project_testimonial') ): the_row();
      if(get_sub_field('title') !=''){
      ?>
      
       <section class="sec-pd pt-0">
      <div class="sec-bg"  style="background: #221429">
        <div class="container"> 
          <div class="row">
            <div class="col-12 col-md-10 col-lg-10 mx-auto">
            <div class=" px-3 data-scroll">
               <div class="col-11 col-md-8 col-lg-7 offset-md-1"> 
                <div class="mb-0 clr-white">
                        <p class="fnt-24 mb-4"><?php the_sub_field('title'); ?></p>
                      <div class="project-test">
                          <p class="fnt-18 fnt-800 mb-0"><?php the_sub_field('name'); ?></p>
                          <p class="fnt-18 fnt-800 mb-0"><?php the_sub_field('position'); ?></p>
                    </div>
                    </div>
                </div>
                </div>
              </div>
            </div>
           </div>
           </div>
    </section>
     <?php }
    endwhile; endif; ?>
     
          <?php if( get_field('conclusion') !=''){?>
          <section class=" sec-pt">
        <div class="container"> 
          <div class="row"> 
          <div class="col-12 col-md-11 col-lg-10 mx-auto"> 
                <div class="col-md-10 px-0 mx-auto"> 
                 <div>
                <div class="col-md-10 px-0 mx-auto">
                  <div class="mb-r-80">
                    <div class="project-step">
                      <div class="project-step__item row"> 
                        <div class="col-12 mb-4"> <h3 class="clr-second fnt-40 text-left fnt-800 d-inline-block text-uppercase data-scroll">Conclusion</h3></div>
                        <div class="col-12 col-md-10 project-step-disc">
                          <div class="project-step-disc__item conclustion"> 
                           <?php the_field('conclusion'); ?>
                        
                          </div>
                        </div>
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
    <?php } ?>
      
      <section class="sec-pd pt-0">
        <div class="container">
          <div class="row"> 
            <div class="col-12 col-md-11 col-lg-10 mx-auto">
              <div class="col-md-10 px-0 mx-auto">
                <div class="projects-nav d-flex flex-column flex-md-row justify-content-between">
                  <div class="projects-nav__prev">
                     <div class="d-flex">
                      <?php $nextPost = get_next_post();
                            if($nextPost) { ?>
                      <div class="pt-2"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-red-leftAr.svg"></div>
                      <div class="ps-4">
                        <?php
                         $destination = get_field('company_name', $nextPost->ID);                               
                         next_post_link( '%link', '                       
                            <h4 class="fnt-28 fnt-800">'. $destination .'</h4> ' ); ?>                           
                      </div>
                      <?php }?>
                      </div>
                      </div>
                      
                      
                  <div class="projects-nav__next">
                      <div class="d-flex ms-auto">
                      <?php 
                  $prevPost = get_previous_post();
                  if($prevPost) { ?>
                      <div class="pe-4"> 
                         
                   <?php
                        $destination = get_field('company_name', $prevPost->ID);
                         previous_post_link( '%link',  ' <h4 class="fnt-28 fnt-800">'. $destination .'</h4>' );  ?>
                      </div>
                      <div class="pt-2"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-red-rightAr.svg"></div>
                      <?php } ?>
                      </div>
                      </div>
                </div>
  
              </div>
            </div>
          </div>
        </div>
      </section>
      
      <!--05-->
      <section class="sec-footer-trans">
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
$("h4").addClass("fnt-28 fnt-800 mb-2 data-scroll");
    $('.bd-brd').css('border-color', '#f7f4f2');
    $(".project-step-disc__item h4").addClass('fnt-28 fnt-800 mb-2 data-scroll')
    $(".project-step-disc__item ul").addClass('li-disc m-0')
    $(".project-step-disc ul").addClass('li-disc m-0')
    $(".project-step-disc__item ul li").addClass('fnt-16 clr-black-354 data-scroll')
    $(".m-img").removeClass('mb-r-80');
    $(".m-img:last-child").addClass('mb-r-80');
    //  $(".define").addClass('projects-sec-pd');
    //   $(".define:nth-child(1)").removeClass('projects-sec-pd');
</script>
<?php
get_footer();
?>
