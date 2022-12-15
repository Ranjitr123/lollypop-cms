<?php
/**
 * * Template Name: Illustration Landing
 * *
 * * @package WordPress
 * */

get_header();
?>
<style>
.case-std__info{
height:200px;
}
.hover-image,
      .picture img,
      .hover-image img {
        transition: 0.4s ease-in-out;
        -webkit-transition: 0.4s ease-in-out;
        -o-transition: 0.4s ease-in-out;
      }
      a:hover, a:active, a:focus {
  outline: 0;
}
      .img_wrap:hover .hover-image {
        transform: scale(0.95) !important;
        -webkit-transform: scale(0.95) !important;
      }
      .img_wrap:hover .hover-image img,
      .picture img:hover img {
        -webkit-transform: translate(0, 0) scale(1.08) !important;
        -ms-transform: translate(0, 0) scale(1.08) !important;
        transform: translate(0, 0) scale(1.08) !important;
      }
      .picture {
        overflow: hidden;
      }
      img,
      img:hover {
        
        object-fit: cover;
      }





.tab-head-item__name::before {
width:45%;
}
    .description{
       position: absolute;
       width:258px;
       height: 190px;
       background-color:white;
       bottom:22px;
       left:22px;
       padding:20px;
    }
     .description>p{
        font-size: 14px;
line-height: 20px;
      }
    .playvid[poster]{
      width:100%;
      margin:auto;
    }
     
       .photo{
  max-width: 100%;
  height: auto;
    transition: .4s ease-in-out;
    object-fit: cover;
}
 .wear-img{
    width:285px;
    height:311px;
    transition: .4s ease-in-out;

   }
.com-img{
    width:auto;
    height:164px;
    object-fit:cover;
    transition: .4s ease-in-out;
   }
    .board{
      min-height:270px !important;
      background-color:#ffffff;
      padding: 35px 25px 30px 0px;
    }
    .logo_grid{
      margin-left:-30px;
    }
     .hvr-line:hover, .hvr-line:active, .hvr-line:focus {
  outline: none !important;
}
    .slide_img{
      height:60vh !important;
      max-height:547px !important;
      width:100% !important;
      max-width:454px !important;
    }
    @media (max-width:767px) {
     .board{
      min-height:210px !important;
      }
    .case-std__info{
height:140px;
}
    .common-list__item {
    margin-top: 4px !important;
}


    .fnt-mb-14 {
        font-size: 14px !important;
        line-height: 22px !important;
    }
    
    .pb-mb-0 {
      padding-bottom: 0 !important;
    }
    
    .fnt-mb-16 {
    font-size: 16px !important;
    }
    
    .w-mb-fluid {
        width: calc(100% + 40px);
        margin-left: -20px;
    }
    
    .fnt-mb-12 {
    font-size: 12px !important;
    line-height: 19px !important;
    }
    
     .fnt-mb-10 {
        font-size: 10px !important;
        line-height: 16px !important;
    }
    
    .slide_img{
      width:278px !important;
      height:336px !important;
    }
    .description > p {
  font-size: 12px !important;
  line-height: 17px !important;
  }
  .description{
        width:80%;
        height:50%;
        bottom:10px;
        padding-top:10px !important;
       left:10px;
      }
      .logo_grid{
      margin-left:0px;
    }
    }
    @media (min-width:767px) and (max-width:992px) {
     .slide_img{   
      height:auto !important;
      width:453px;
    }
    }
    
   @media (min-width: 992px){
.case-img-list__item .case-std__info {
    padding: 35px 30px;
    width: 82%;
   } }
   
	.lp-awards-list__item.newimg:nth-child(odd) .img {
    min-height: 451px;
    }
	.lp-awards-list__item.newimg:nth-child(even) .img {
    min-height: 451px;
    }
	.lp-awards-list__item.newimg:nth-child(odd) {
    min-width: 521px;
	}
	.lp-awards-list__item.newimg:nth-child(even) {
    min-width: 521px;
	}
@media (min-width: 992px){
.sec-pd:first-of-type {
    padding-top: 135px;
}}
</style>



  <main class="main">
            <!--01-->
            <section class="lp-index sec-pd sec-bnr pb-mb-0">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-11 col-lg-10 mb-60 mx-auto">
                            <div class="row">
                                <div class="col-12 col-md-11 offset-md-1">
                                    
                                        <div class="mb-45 multi-line-text">
                                        <span class="d-block fnt-14 text-capitalize mb-2 clr-default"><a href='<?=get_site_url()?>'><?php echo get_field('services_text_feild')?></a> / <?php echo get_field('research_text_feild')?></span>
                                        
                                       
                                        
                                            <h1 style='color:#221429;' class="fnt-70 mb-lg-2 fnt-800 col-12 col-md-11 col-lg-10 red-stroke red-stroke--small13 px-0 mb-22 aos-init aos-animate"> <?php echo get_field('research_heading')?></h1>
                                            <p style='max-width:612px;' class="fnt-24 col-md-11 col-lg-10 col-xl-9 px-0"><?php echo get_field('research_description')?></p>
                                        </div>
                                        <?php while(have_rows('research_repeater')){the_row();?>
                                        <ul class="lp-number-list ps-0 m-0">
                                            <li class="lp-number-list__item">
                                                <span class="fnt-18 fnt-800 lp-number-title fnt-mb-14"><?php echo get_sub_field('research_user')?></span>
                                                <p class="fnt-14 fnt-mb-10"><?php echo get_sub_field('research_title')?></p>
                                            </li>
                                           
                                            <?php } ?>     
                                            
                                            
                                        </ul>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--banner image  -->
                <div class=' col-md-10 col-sm-12 col-xl-9 mx-auto'>
                <div class="position-relative">
					<div class="reveal" style="transform: translate(0px, 0px); opacity: 1; visibility: inherit;">
								
            <div class="play-video-on-scroll">
              <div id="play2-out" style="display:none">
                <div id="play2" data-plyr-provider="vimeo" data-plyr-embed-id="<?php echo get_field('researchbanner_video_link')?>"></div>
              </div>
              <video class="playvid" autoplay="" muted="" loop="" playsinline="" provider=" vimeo" embed-id="<?php echo get_field('researchbanner_video_link')?>" poster="<?php echo get_field('researchbanner_image')?>">
              </video>
            </div>
					<!--	<img class="img-fluid blog-d-img mb-0" src="<?php echo get_field('researchbanner_image')?>" alt="Image" width="1077" height="471" style="transform: translate(0px, 0px);">-->
					</div>	
				</div>
				</div>
            </section>
            
			<!--10-->
			<section class="sec-pd">
        <div class="container">
            <div class="tab-div col-lg-8 col-md-10 col-xl-10 mx-auto">
                <div class="offset-md-1">
                    <div class="mb-5 data-scroll">
                        <h2  style='max-width:736px;' class="fnt-800 fnt-50 mb-md-3">  <?php echo get_field('domains_heading')?></h2>
                        <p class="fnt-24 col-md-10 col-lg-10 px-0">
                              <?php echo get_field('domains_description')?>
                        </p>
                    </div>
                    <ul class="px-0 common-list row justify-content-start">
                    <?php while(have_rows('domains_repeater')){the_row();?>
                        <li class="common-list__item col-12 col-md-5 data-scroll">
                            <div class="d-flex flex-column h-100">
                                <h6 class="fnt-800 col-lg-8 mb-1">  <?php echo get_sub_field('domains_title')?></h6>
                            </h6>
                            <div class="">
                                <p class="col-11 col-lg-9 px-0 fnt-mb-14">
                                      <?php echo get_sub_field('dom_decription')?>
                                </p>
                            </div>
                        </div>
                    </li>
                     <?php } ?>  
                   
                </ul>
                <?php 
                                                $viewlink = get_field('domains_link');
                                                if( $viewlink ): 
                                                    $link_url = $viewlink['url'];
                                                    $link_title = $viewlink['title'];
                                                    $link_target = $viewlink['target'] ? $viewlink['target'] : '_self';
                                                    ?>
                <a class="hvr-line pt-5 clr-second fnt-14" href="<?php echo $link_url?>">
                    <?php echo $link_title?>
                </a>
                  <?php endif; ?> 
                            
            </div>
        </div>
    </div>
</section>

			<!--11-->
<section class="sec-pd sec-pt pb-0" id="fifth" style="background: #221429;">
     <div class="container"> 
        <div class="row mt-4 mt-md-5 pt-md-5"> 
            <div class="col-12 col-md-11 col-lg-9 mx-auto"> 
              <div class="col-md-10 col-lg-12 px-0 clr-white">
                <div class="mb-35">
                  <h3 class="fnt-50 fnt-800 clr-white mb-2 pb-md-1 data-scroll col-12 col-md-8 px-0"><?php the_field('join_heading') ?></h3>
                  <p class="col-md-10 fnt-26 col-lg-8 px-0 data-scroll"><?php the_field('join_content') ?></p>
                </div>
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
                <li class="lp-awards-list__item newimg">
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
			
            
            <!--04-->
			<!--02-->
            <section class="sec-pd">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-11 col-lg-10 my-45 mx-auto">
                            <div class="col-12 col-md-12 px-0 ">
                                <div class="row">
                                    <div class="col-12 col-md-10 mb-4 mb-md-5 col-lg-10 offset-md-1">
                                        <h2 style='color:#221429; max-width:730px;' class="fnt-40 fnt-800 mb-2 mb-md-3">
                                            <?php echo get_field('why__heading')?>
                                        </h2>
                                        <p style='max-width:708px;' class="fnt-24 fnt-mb-14 col-md-12 col-lg-11 col-xl-11 px-0 mb-0">
                                           <?php echo get_field('why_description')?>
                                        </p>
                                    </div>
                                </div>
                                
                                 <div class="col-12 col-xxl-11 mx-auto">
                           <ul class="px-0 case-img-list row single-mb-slider slider-md-23">
                           <?php while (have_rows('why_repeater')) {
                            the_row(); ?>
                                <li class="case-img-list__item col-12">
                  <div class="case-std img-hvr">

                     <img class="img" src="<?php echo get_sub_field('why_image_one')?>" alt="Image">
                    <noscript>
                      <img class="img" src="<?php echo get_sub_field('why_image_two')?>" alt="Image">
                    </noscript>
                    <div class="case-std__info">
                      <h6 class="fnt-16 fnt-800 mb-1"><?php echo get_sub_field('why_title')?></h6>
                      <p class="fnt-14 mb-0 fnt-mb-12"><?php echo get_sub_field('wy_description')?></p>
                      <div class="mt-auto"> </div>
                    </div>
                  </div>
                </li>
                                    
                          <?php } ?>          
                
                
                
                
                                    
                
                                  </ul>
                        </div>
                               
                    </div>
                </div>
            </section>
			
			      <!--03-->
      <section class="sec-pd sec-pt" style="background: #221429;">  
        <div class="container"> 
          <div class="row"> 
            <div class="col-12 col-md-10 col-lg-8 mx-auto clr-white">
              <div class="mb-4 pb-md-2 colmd-11 px-0">
                <h3 class="fnt-40 fnt-800 data-scroll mb-2 mb-md-3"><?php the_field('service_heading'); ?></h3>
                <p class="fnt-24 col-md-7 px-0 data-scroll"><?php the_field('service_content'); ?></p>
				<a class="clr-second fnt-14 hvr-line data-scroll " href="#">Explore our gallery</a>
              </div>
              <ul class="px-0 values-list row justify-content-between"> 
                <?php if( have_rows('stories') ) : while( have_rows('stories') ): the_row(); ?>
                 <li class="values-list__item col-12 col-md-5 data-scroll"> 
                   <div class="d-flex flex-column h-100">
                  <h6 class="fnt-800 mb-1"><?php the_sub_field('title'); ?></h6>
                  <div class="">
                  <p class="col-11 col-lg-10 px-0 mb-0"><?php the_sub_field('content'); ?></p>
                  </div>
                </div>
                </li>
                <?php endwhile; endif; ?>
              </ul>
            </div>
          </div>
        </div>
		
		<section class="sec-pd">
		<div class="container">
                    <div class="">
                        <div class="row">
 
 <div class="col-md-10 col-lg-8 mx-auto  clr-white">
 
                                        <h2 style='max-width:730px;' class="fnt-40 fnt-800 mb-2 mb-md-3"> <?php echo get_field('our_ux_title')?></h2>
                                        <p style='max-width:708px;' class="fnt-24 fnt-mb-14 col-11 col-md-12 col-lg-11 col-xl-11 px-0 mb-0"><?php echo get_field('our_ux_description')?></p>
                                <div class="mb-50 data-scroll"></div>                                                                                   
                            </div>
                        </div>
                    </div>
                </div>
				
				<div class=' col-md-10 col-sm-12 col-xl-9 mx-auto'>
                <div class="position-relative">
					<div class="reveal" style="transform: translate(0px, 0px); opacity: 1; visibility: inherit;">
								
            <div class="play-video-on-scroll">
              <div id="play2-out" style="display:none">
                <div id="play2" data-plyr-provider="vimeo" data-plyr-embed-id="<?php echo get_field('video_our_link')?>"></div>
              </div>
              <video class="playvid" autoplay="" muted="" loop="" playsinline="" provider=" vimeo" embed-id="<?php echo get_field('video_our_link')?>" poster="<?php echo get_field('our_ux_image')?>">
              </video>
            </div>
					</div>	
				</div>
				</div>
				</section>
      </section>
            <!--06-->
           
		   <section class="sec-pd sec-pt pb-0">
     <div class="container"> 
        <div class="row mt-4 mt-md-5 pt-md-5"> 
            <div class="col-12 col-md-11 col-lg-10 mx-auto"> 
              <div class="col-md-10 col-lg-12 px-0">
                <div class="mb-35">
                  <h3 class="fnt-50 fnt-800 mb-2 pb-md-1 data-scroll col-12 col-md-8 px-0"><?php echo get_field('solution_title')?></h3>
                  <p class="col-md-10 fnt-26 col-lg-8 px-0 data-scroll"><?php echo get_field('solution_description')?></p>
                </div>
              </div>
            </div>
          </div>
          </div>
          <div class="sec-pd sec-pt">
  <div class="fluid-width">
          <div class="row">
            <div class="col-12 px-md-0">
              <ul class="px-0 lp-awards-list d-flex four-card-slider">
               <?php if( have_rows('solution_repeater') ) : while( have_rows('solution_repeater') ): the_row(); ?>
                <li class="lp-awards-list__item">
                  <div class="award-info"><img class="mb-3 img-fluid" src="<?php the_sub_field('solution_image') ?>" alt="Image">
                  </div>
                </li>
                  <?php endwhile; endif; ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
      </section>
			
            <!--07-->
       <section class="sec-pd sec-pb">
        <div class="container"> 
          <div class="row">
            <div class="col-12 col-md-11 col-lg-10 mx-auto"> 
              <div class="faq-el">
                <div class="faq-el__head mb-40"><span class="d-block text-uppercase data-scroll">faq</span>
                  <h2 class="fnt-50 fnt-800 col-md-10 col-lg-8 col-xl-7 px-0 mb-0 data-scroll"><?php echo get_field('main_title')?></h2>
                </div>
                <div class="faq-el__body"> 
                  <ul class="px-0 mb-0 faq-ac row justify-content-between">
					<?php while(have_rows('faq_section')){the_row();?>
                    <li class="faq-ac__item col-12 data-scroll">
                      <div class="f-accordion">
                        <div class="f-accordion__head">
                          <h6 class="fnt-16 fnt-800"><?php echo get_sub_field('question')?></h6>
                        </div>
                        <div class="f-accordion__body"> 
                          <p class="fnt-16 mb-0"><?php echo get_sub_field('answer')?></p>
                        </div>
                      </div>
                    </li>
					<?php } ?>
                         
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
<!-- 13 -->
<section class="sec-footer-trans" id="nine">
        <div class="container z-1">
          <div class="row"> 
            <div class="col-12 col-md-11 col-lg-10 mx-auto">
              <div class="py-70 px-3 data-scroll" style="background: #221429;">
                <div class="d-flex align-items-center justify-content-center">
                  <div class="col-11 col-md-8 col-lg-7 px-0 d-inline-block clr-white text-center"> 
                    <div class="mb-45"><span class="d-block fnt-24 mb-2 pb-2 mb-md-4 pb-md-0">Thinking of design?</span>
                      <h2 class="fnt-50 fnt-800 clr-white">Let’s craft brilliance together!</h2>
                    </div><a class="web-btn web-btn--red" href="<?php echo site_url(); ?>/project-enquiry/">Get In Touch</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
-
</main>

<?php
get_footer();
?>