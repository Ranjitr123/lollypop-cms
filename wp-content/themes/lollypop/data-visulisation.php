<?php

/**
 *
 *Template Name: Data visulalization
 *
 **/

get_header();
?>
<main class="main">

<section class="sec-pd p-r-80 sec-bnr">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-11 col-lg-10 mx-auto">
          <div class="row justify-content-center">
            <div class="col-12 col-md-11 ">
              <div class="page-head">
                <h1 class="fnt-800 px-md-0 mb-0 text-center"><?php echo get_field('title1')?></h1>
                <h1 class="fnt-800 px-md-0 mb-0 text-center mw-682"><span class="data_red1"><?php echo get_field('title_red')?></span></h1>
                <p class="fnt-24 text-center mw-634"><?php echo get_field('description')?> </p>
              </div>
            </div>
          </div>
          
            <!-- <div class="w-100 h-auto">
            <iframe class="w-100" height="500" src="http://localhost/cms/lollypop-cms/wp-content/uploads/2022/09/Group-1171276527-1.svg">
            </iframe>
          </div> -->
          
          
          <div class='col-12 '>
            <div class="play-video-on-scroll">
              <div id="play2-out" style="display:none">
                <div id="play2" data-plyr-provider="vimeo" data-plyr-embed-id="<?php echo get_field('video_link')?>"></div>
              </div>
              <video class="playvid" autoplay="" muted="" loop="" playsinline="" provider=" vimeo" embed-id="<?php echo get_field('video_link')?>" poster="<?php echo get_field('image')?>">
              </video>
            </div>
          </div>
          
        </div>
      </div>
  </section>

  <section class="some_stories">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-10 col-lg-7 mx-auto">
                <p class="firstp"><?php echo get_field('titles')?></p>
                <div class="row">
					<?php while(have_rows('social_icons_section')){the_row();?>
                    <div class="col-md-3 col-6">
                        <img src="<?php echo get_sub_field('image')?>" class="img-fluid" alt="...">
                    </div>
					<?php } ?>   

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-10 col-lg-7 mx-auto">
                <p class="firstp pt-5"><?php echo get_field('client_title')?></p>
                <div class="row">
					<?php while(have_rows('client_image_section')){the_row();?>
                    <div class="col-md-3 col-6">
                        <img src="<?php echo get_sub_field('image')?>" class="img-fluid" alt="...">
                    </div>
					<?php } ?>  
                </div>
            </div>
        </div>

        <div class="need_data">
            <div class="row">
                <div class="col-12 col-lg-9 mx-auto">
                    <h2><?php echo get_field('heading')?></h2>
                    <p><?php echo get_field('content')?></p>
                </div>
            </div>
                <div class="row">
                    <div class=" col-lg-9 mx-auto">
                        <div class="row">
							<?php while(have_rows('content_section')){the_row();?>
                            <div class="col-md-6">
                                <p class="heading"><?php echo get_sub_field('title')?></p>
                                <p class="para"><?php echo get_sub_field('content')?></p>
                            </div>
							<?php } ?>  
                            <p class="para ps-3">
							<?php while(have_rows('bottom_section')){the_row();?>
								<span class="data_red"><?php echo get_sub_field('red_text1')?> </span><?php echo get_sub_field('black_text')?> <a href="<?php echo site_url(); ?>/project-enquiry/"><span class="data_red1 position-relative"><?php echo get_sub_field('red_text')?></span></a>
							<?php } ?> 	
							</p>
                        </div>                                         
                    </div>
                </div>
        </div>      

    </div>

    <div class="black">
            <div class="container">
                <div class="row ">
                    <div class=" col-lg-10 mx-auto">
                        <div class="row black_row">
                            <div class="col-md-6">
								<?php while(have_rows('left_section')){the_row();?>
                                <h2 class="white_text1"><?php echo get_sub_field('heading')?></h2>
                                <p class="white_text2"><?php echo get_sub_field('description')?></p>
								<?php } ?> 	
                            </div>

                            <div class="col-md-6 secright">
								<?php while(have_rows('right_section')){the_row();?>
                                <div class="pb-5">
                                    <img src="<?php echo get_sub_field('icon')?>" class="img-fluid pb-2 m-0">
                                    <p class="white_text3 pb-2"><?php echo get_sub_field('title')?></p>
                                    <p class="white_text2 mw-362"><?php echo get_sub_field('content')?></p>
                                </div>
								<?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>


    <div class="container">
        <div class="need_data need_data1">
            <div class="row">
                <div class="col-12 col-lg-9 mx-auto">
                <h2><?php echo get_field('service_heading')?></h2>
                </div>
            </div>

            <div class="row">
                <div class=" col-lg-9 mx-auto">
                    <div class="row">
						<?php while(have_rows('service_content_section')){the_row();?>
                        <div class="col-md-6 space">
                            <p class="heading"><?php echo get_sub_field('service_title')?></p>
                            <p class="para"><?php echo get_sub_field('service_content')?></p>
                        </div>
						<?php } ?>
                        <p class="para ps-3"><a href="<?php echo site_url(); ?>/project-enquiry/"><span class="data_red1 position-relative">Get in Touch</span></a></p>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-10 col-lg-10 mx-auto">
                <div class="need_data2">
                    <div class="row">
                        <div class="col-12 col-md-10 col-lg-9 mx-auto">
                            <p>FAQ</p>
                            <h2><?php echo get_field('main_title')?></h2>
                            <div class="accordion" id="accordionExample">
                                <?php $count = 0; while(have_rows('faq_section')){the_row();?>
								<div class="accordion-item">
                                    <h3 class="accordion-header" id="heading<?php echo $count; ?>">
                                    <button class="accordion-button position-relative plus" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $count; ?>" aria-expanded="<?php if($count == 0){echo 'true';} else {echo 'false';}?>" aria-controls="collapse<?php echo $count; ?>">
                                        <?php echo get_sub_field('question')?>
                                    </button>
                                    </h3>
                                    <div id="collapse<?php echo $count; ?>" class="accordion-collapse collapse <?php if($count == 0){echo 'show';}?>" aria-labelledby="heading<?php echo $count; ?>" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p><?php echo get_sub_field('answer')?></p>
                                    </div>
                                    </div>
                                </div>
								<?php $count++; } ?>
                                
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
            

 <section class="sec-footer-trans footmar">
        <div class="container z-1">
          <div class="row"> 
            <div class="col-12 col-md-11 col-lg-10 mx-auto">
              <div class="py-70 px-3 data-scroll" style="background: #221429;">
                <div class="d-flex align-items-center justify-content-center">
                  <div class="col-11 col-md-8 col-lg-8 px-0 d-inline-block clr-white text-center"> 
                    <div class="mb-45"><span class="d-block fnt-24 mb-2 pb-2 mb-md-4 pb-md-0">Want impactful data insights?</span>
                      <h2 class="fnt-50 fnt-800 clr-white">Let's talk about your <br>Data Visualisation needs.</h2>
                    </div><a class="web-btn web-btn--red" href="<?php echo site_url(); ?>/project-enquiry/">GET IN TOUCH</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


</main>



<div class="js-page-scroll-top"><img src="<?php echo get_template_directory_uri(); ?>/img/pg-scroll.svg" alt="Image"></div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/ScrollTrigger.min.js"></script>
<script src="https://cdn.plyr.io/3.6.12/plyr.polyfilled.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/TweenMax.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/plugins/slick.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/plugins/maginific-poup.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/header.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/plugins/parsley.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/aha.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/video-player.js"></script>
<?php get_footer(); ?>