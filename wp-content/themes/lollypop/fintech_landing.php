<?php
/**
 * * Template Name: Fintech Landing Page
 * *
 * * @package WordPress
 * */

get_header();
 
?>
<style>
section.sec-pd51.last {
    padding-bottom: 160px;
}
section.sec-pd51{
    padding-bottom: 160px;
}
@media(max-width:767px){
.sec-pd51{ padding-bottom: 71px!important;
}}
.cta{
margin-bottom:80px;
padding-left:40px;
padding-top:30px;
padding-bottom:26px;
border-left: 5px solid #FD2E35;
background: linear-gradient(90deg, #F1EDEA 0%, #F7F5F3 100%);
}
.sec-pd1{padding-bottom:40px;}
.sec-top{padding-top:40px;}}
.sec-pd1 .approach_style {
    width: 100%;
    max-width: 845px;
    margin: 0 auto;
}
.sec-pd1 .approach_style .col-md-2 p {
    color: #FD2E35;
    font-size: 16px;
    font-weight: 700;
}
.sec-pd1 .approach_style .space p:first-child {
    color: #221429;
    font-size: 18px;
    font-weight: 400;
    max-width: 548px;
    padding-bottom: 25px;
    line-height: 26px;
}
.sec-pd1 .space1 h3 {
    font-size: 22px;
    font-weight: 800;
    line-height: 30px;
}
.sec-pd1 .space1 p {
    max-width: 266px;
    font-size: 16px;
    font-weight: 400;
    color: #221429;
    line-height: 26px;
}
.pb-5 {
    padding-bottom: 4rem!important;
}
.pleft{padding-left: 0px;
    padding-top: 60px;}
	
.mb-15 {
    margin-bottom: 15px;
}
@media (min-width: 992px){
.mb-15 {
    margin-bottom: 15px;
}
}
@media (min-width: 768px){
.mb-15 {
    margin-bottom: 25px;
}}
@media (min-width: 768px){
.portfolio-title {
    padding-top: 9px;
    padding-bottom: 10px;
}}
.new_text {
    font-size: 35px;
    line-height: 45px;
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
                  <div class="page-head"><span class="d-block fnt-14 text-capitalize mb-2 clr-default"><a href="<?php echo site_url(); ?>/industries/">Industries</a>/<?php the_field('category_name'); ?></span>
                    <h1 class="fnt-50 fnt-800 mb-3 mb-md-4 red-stroke red-stroke--small13 px-md-0 col-md-11 col-lg-10 px-0"><?php the_field('heading'); ?></h1>
                    <p class="fnt-24 col-md-10 col-lg-9 px-0"><?php the_field('short_title_description'); ?></p>
		  </div>
                </div>
              </div>
             <!-- <div class=""><img class="wpdm-img" src="<?php the_field('banner'); ?>" alt="Image"></div> -->
			 <div class="reveal-project">
               <?php $galImage = get_field('banner'); ?>
              <?php if($galImage !=''){ ?>
              <img class="wpdm-img" src="<?php the_field('banner'); ?>" alt="Image" style="height:519px; width:924px;">
              <?php } ?>
              
               <?php $bannerVideo = get_field('banner_video_link'); ?>
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
      <section class="sec-pd"> 
        <div class="container"> 
          <div class="row"> 
            <div class="col-12 col-md-10 col-lg-8 mx-auto">
              <div class="mb-4 pb-md-2 col-md-11 px-0">
               <?php if( have_rows('our_expertise') ) : while( have_rows('our_expertise') ): the_row(); ?>
                <h3 class="fnt-50 fnt-800 mb-4 data-scroll">
                  <?php the_sub_field('title'); ?></h3>
                <p class="fnt-24 col-md-10 col-lg-11 px-0 data-scroll"><?php the_sub_field('content'); ?></p>
                <?php endwhile; endif; ?>
              </div>
              <ul class="px-0 values-list row justify-content-between mb-0"> 
               <?php if( have_rows('our_expertise_list') ) : while( have_rows('our_expertise_list') ): the_row(); ?>
                <li class="values-list__item col-12 col-md-5 data-scroll"> 
                  <h6 class="fnt-800 mb-1"><?php the_sub_field('title'); ?></h6>
                  <p class="col-11 col-lg-12 px-0 mb-0"><?php the_sub_field('content'); ?></p>
                </li>
                <?php endwhile; endif; ?>
              </ul><a class="clr-second mt-4 mt-md-5 d-inline-block fnt-14 data-scroll hvr-line" href="<?php echo site_url(); ?>/project-enquiry/">Let’s Talk</a>
            </div>
          </div>
        </div>
      </section>
      <!--03-->
      <section class="sec-pd"> 
        <div class="container"> 
          <div class="row"> 
            <div class="col-12 col-md-10 col-lg-8 mx-auto">
              <div class="mb-4 pb-md-2 col-md-11 px-0">
               <?php if( have_rows('clients_logo_description') ) : while( have_rows('clients_logo_description') ): the_row(); ?>
                <h3 class="fnt-50 fnt-800 mb-4 px-0 data-scroll">
                   <?php the_sub_field('title'); ?></h3>
                <p class="fnt-24 col-md-9 col-lg-8 px-0 data-scroll"><?php the_sub_field('content'); ?></p>
                <?php endwhile; endif; ?>
              </div>
              <?php if( have_rows('clients_logo_list') ) : while( have_rows('clients_logo_list') ): the_row(); 
                $induLogo = get_sub_field('logos'); 
                endwhile; endif;
                if($induLogo !=''){ ?>
              <ul class="px-0 logo-list logo-list--3 row">
               <?php if( have_rows('clients_logo_list') ) : while( have_rows('clients_logo_list') ): the_row(); ?>
                <li class="logo-list__item col-4"><img class="img-fluid grayscale" src="<?php the_sub_field('logos'); ?>" alt="Image"></li>
                 <?php endwhile; endif; ?>
              </ul>
               <?php } ?>
            </div>
          </div>
        </div>
      </section>
	  
      <!--04-->      
      <section class="sec-pd" id="third">
        <div class="container"> 
		<?php if( have_rows('portfolio') ) : while( have_rows('portfolio') ): the_row(); ?>
          <div class="row"> 
            <div class="col-12 col-md-10 col-lg-9 mx-auto">
				<div class="mb-4 pb-md-2 col-md-12 px-0">
               <?php if( have_rows('project_section_for_page') ) : while( have_rows('project_section_for_page') ): the_row(); ?>
                <h3 class="fnt-50 fnt-800 mb-4 px-0 data-scroll">
                   <?php the_sub_field('project_title'); ?></h3>
                <p class="fnt-24 col-md-12 col-lg-12 px-0 data-scroll"><?php the_sub_field('project_content'); ?></p>
                <?php endwhile; endif; ?>
              </div>
              
              <div class="row">                 
				<ul class="px-0 values-list row justify-content-between mb-0"> 
               <?php if( have_rows('project_list_section') ) : while( have_rows('project_list_section') ): the_row(); ?>
                <li class="values-list__item col-12 col-md-6 data-scroll"> 
					<a class="" href="<?php the_sub_field('url'); ?>">
					<div class="mb-15 fluid-mb">
						<div class="reveal">
						<img class="" src="<?php the_sub_field('image'); ?>" alt="Image"></div>
					</div>
					<span class="d-inline-block fnt-16 data-scroll mt-0 portfolio-title"><?php the_sub_field('company_name'); ?></span>
                  <h6 class="fnt-800 mb-1 new_text"><?php the_sub_field('title'); ?></h6>
                  <p class="col-11 col-lg-12 px-0 mb-0"><?php the_sub_field('content'); ?></p>
				  </a>
				<div class="">
					<a class="clr-second mt-4 d-inline-block fnt-14 data-scroll hvr-line" href="<?php the_sub_field('url')?>">View Project</a>
				</div>
                </li>
                <?php endwhile; endif; ?>
              </ul>
			  
				<div class="col-12 pleft">
					<a class="clr-second mt-4 mt-md-5 d-inline-block fnt-14 data-scroll hvr-line" href="<?php echo site_url(); ?>/projects/">View all Projects</a>
              </div>
            </div>
          </div>
		   <?php endwhile; endif; ?>
        </div>
      </section>
      
      <!--05-->
      <?php if( have_rows('case_studies') ) : while( have_rows('case_studies') ): the_row(); ?>
      <?php $caseStudy = get_sub_field('title'); ?>
      <?php endwhile; endif; ?>
      <?php if($caseStudy !=''){ ?>
      <section class="sec-pd sec-pt sec-pb" style="background: #221429">
        <div class="container"> 
          <div class="row">
            <div class="col-12 col-md-10 col-lg-8 mx-auto">
              <?php if( have_rows('case_studies') ) : while( have_rows('case_studies') ): the_row(); ?>
              <div class="col-12 col-md-8 col-lg-8 px-0 mb-4 pb-3 pb-lg-2">
                <h2 class="fnt-50 fnt-800 clr-white mb-4 data-scroll"><?php the_sub_field('title'); ?></h2>
                <p class="data-scroll clr-white col-12 col-md-8 px-0"><?php the_sub_field('content'); ?></p>
              </div>
				
			<div class="play-video-on-scroll">
              <div id="play2-out" style="display:none">
                <div id="play2" data-plyr-provider="vimeo" data-plyr-embed-id="<?php the_sub_field('video'); ?>"></div>
              </div>
              <video class="playvid" autoplay="" muted="" loop="" playsinline="" provider=" vimeo" embed-id="<?php the_sub_field('video'); ?>" poster="<?php the_sub_field('image'); ?>">
              </video>
            </div>
				
                <?php endwhile; endif; ?>
            </div>
          </div>
        </div>
      </section>
      <?php } ?>
      <!--06-->
      <section class="sec-pd sec-pb"> 
        <div class="container"> 
          <div class="row"> 
            <div class="col-12 col-md-10 col-lg-8 mx-auto">
              <div class="mb-4 pb-md-2 col-md-11 px-0">
                <?php if( have_rows('our_clients_descrptions') ) : while( have_rows('our_clients_descrptions') ): the_row(); ?>
                <h3 class="fnt-50 fnt-800 mb-4 data-scroll">
                  <?php the_sub_field('title'); ?></h3>
                <p class="fnt-24 col-md-10 col-lg-11 px-0 data-scroll"><?php the_sub_field('content'); ?></p>
                <?php endwhile; endif; ?>
              </div>
              <ul class="px-0 values-list row justify-content-between mb-0"> 
                <?php if( have_rows('our_client_list') ) : while( have_rows('our_client_list') ): the_row(); ?>
                <li class="values-list__item col-12 col-md-5 data-scroll"> 
                  <h6 class="fnt-800 mb-1"><?php the_sub_field('title'); ?></h6>
                  <p class="col-11 col-lg-11 px-0 mb-0"><?php the_sub_field('content'); ?></p>
                </li>
                <?php endwhile; endif; ?>
              </ul>
              <a class="clr-second mt-4 mt-md-5 d-inline-block fnt-14 data-scroll hvr-line" href="<?php echo get_site_url(); ?>/project-enquiry/">Let’s talk</a>
            </div>
          </div>
        </div>
      </section>

      <!--07-->
      <section class="sec-footer-trans">
        <div class="container z-1">
          <div class="row"> 
            <div class="col-12 col-md-11 col-lg-10 mx-auto">
              <div class="py-70 px-3 data-scroll" style="background: #221429;">
                <div class="d-flex align-items-center justify-content-center">
                  <div class="col-12 col-md-8 col-lg-8 px-0 d-inline-block clr-white text-center"> 
					<?php if( have_rows('last_blue_section') ) : while( have_rows('last_blue_section') ): the_row(); ?>
                    <div class="mb-45"><span class="d-block fnt-24 mb-2 pb-2 mb-md-4 pb-md-0"><?php the_sub_field('small_title'); ?></span>
                      <h2 class="fnt-50 fnt-800 clr-white"><?php the_sub_field('heading'); ?></h2>
                    </div><a class="web-btn web-btn--red" href="<?php the_sub_field('cta_link'); ?>"><?php the_sub_field('cta_text'); ?></a>
					<?php endwhile; endif; ?>
				  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>


<?php
get_footer();
?>
