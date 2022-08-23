
<?php
/**
*  Template Name: UAE-page
*   */


get_header();
?>
<style>
.karn-spc{
margin-top:50px;
margin-bottom:50px;
}
.lat-blg-mt{
margin-top:120px;
margin-bottom:120px
}
.servi-pd-imp{
padding-top:120px;
padding-bottom:120px;
}
.janardhan-padi-btm{
padding-bottom:120px;
}
.servi-pd-top{
padding-top:120px;
}
.sec-pd-service{
margin-top:120px
}
.mb-r-80{
margin-bottom:20px !important;
}
.sec-pd.sec-pb{
    padding-bottom: 15px!important;
}
.sec-pd.sec-pt{
padding-top:20px !important;
}
@media (max-width:767px){
.sec-container{
padding-top:70px !important;
}
}
@media (min-width:768px){
.sec-container{
padding-top:100px !important;
}
}
@media (min-width: 992px) {
.sec-container{
padding-top: 192px !important;
}
} 
.sec-pd{
padding: 35px 0px !important;
}
</style>
<main class="main">
<!--01-->
<section class="sec-pd sec-bnr p-r-80"> 
<div class="container sec-container"> 
<div class="row">
<div class="col-12 col-md-12 col-lg-10 mx-auto">
<div class="row">
<div class="col-12 col-md-11 offset-md-1">
<div class="mb-r-80 col-lg-10 px-0"> <span class="d-block fnt-14 text-capitalize mb-2 clr-default locations"><?php the_field('locations'); ?></span>
<h1 class="fnt-50 fnt-800 mb-3 mb-md-4 red-stroke red-stroke--small13 px-md-0 col-md-12 col-lg-12"><?php the_field('heading'); ?></h1>
<div class="fnt-24 col-md-10 col-lg-9"><?php the_field('short_description'); ?></div>
<div class="rw-wrapper">
<div class="rw-sentence">
<div class="lp-sudo-dubai-ae__textchange fnt-60 fnt-800 clr-second fnt-50">Websites</div>
</div>
</div>
</div>
<ul class="lp-number-list ps-0 mt-2">  
                     <li class="lp-number-list__item"><span class="fnt-18 fnt-800 lp-number-title">One Billion+ </span>
 <p class="fnt-14">Lives Touched </p>
</li>
                     <li class="lp-number-list__item"><span class="fnt-18 fnt-800 lp-number-title">30+ </span>
 <p class="fnt-14">Global Awards </p>
</li>
                     <li class="lp-number-list__item"><span class="fnt-18 fnt-800 lp-number-title">300+ </span>
 <p class="fnt-14">Clients </p>
</li>
                   </ul>
</div>
<!--div class="hover-img">
<?php if( have_rows('slider') ) : while( have_rows('slider') ): the_row(); ?>
<img class="wpdm-img" src="<?php the_sub_field('images'); ?>">
<?php endwhile; endif; ?>
</div-->
<?php $locationVideo = get_field('video');
if($locationVideo !=''){
?>
<div class="play-video-on-scroll">
                <div class="plyr__video-embed" id="player2">
                  <iframe src="<?php the_field('video');?>" allowfullscreen allowtransparency allow="autoplay" hideControls="true"></iframe>
                </div>
              </div>

<?php }else{ ?>
<div class="hover-img">
<?php if( have_rows('slider') ) : while( have_rows('slider') ): the_row(); ?>
<img class="wpdm-img" src="<?php the_sub_field('images'); ?>">
<?php endwhile; endif; ?>
</div>
<?php } ?>
</div>
</div>
</div>
</div>

</section>
<!--02-->
<section class="sec-pd sec-pb">
<div class="container"> 
<div class="row"> 
<?php if( have_rows('client_logos') ) : while( have_rows('client_logos') ): the_row(); ?>
<div class="col-12 col-md-9 col-lg-6 mx-auto">
<div class="mb-5"> 
<div class="fnt-40 fnt-800 data-scroll px-0"><?php the_sub_field('title'); ?></div>
<div class="rw-wrapper">
<div class="rw-sentence">
<div class="lp-sudo-dubai-design__textchange fnt-800 fnt-40">design</div>
</div>
</div>
<p class="fnt-24"><?php the_sub_field('content'); ?></p>
</div>
<ul class="px-0 logo-list row mb-0">
<?php if( have_rows('logos') ) : while( have_rows('logos') ): the_row(); ?>
<li class="logo-list__item col-4 col-md-3"><img class="img-fluid grayscale" src="<?php the_sub_field('images'); ?>"></li>
<?php endwhile; endif; ?>

</ul>
	<div class="d-flex flex-wrap data-scroll mt-5"><a class="lp-link lp-link--pri hvr-line fnt-16" href="<?php echo site_url(); ?>/clients/">Learn more about our clients</a></div>
</div>
<?php endwhile; endif; ?>
</div>
</div>
</section>

<!--03-->
<section class="sec-pd karn-spc">
<div class="container">
<div class="row"> 
<div class="col-12 col-md-9 col-lg-7 mx-auto">
<!-- Team profile-->
<div class="row">
<?php if( have_rows('client_challenges') ) : while( have_rows('client_challenges') ): the_row(); ?>
<div class="col-12 col-md-5 mb-4 mb-md-0 hover-img">
	<div class="reveal team-profile-img"><img src="<?php the_sub_field('image'); ?>" alt=""></div>
</div>
<div class="col-12 col-md-7">
<div class="profile d-flex flex-column">
<div class="profile__about"> 
<p class="fnt-16 clr-black-354 data-scroll"><?php the_sub_field('content'); ?></p>
</div>
<div>
<!-- <h6 class="fnt-800 fnt-22 mb-0">Lets' Talk</h6>
<a class="data-scroll d-inline-block fnt-14 hvr-link" href="mailto:<?php the_sub_field('mail_id'); ?>"><?php the_sub_field('mail_id'); ?></a>-->
<a class="web-btn web-btn--primary data-scroll mt-3" href="<?php the_sub_field('cta_url'); ?>" style="opacity: 1; transform: translateY(0px);"><?php the_sub_field('cta_name'); ?></a>
</div>
</div>
</div>
<?php endwhile; endif; ?>
</div>
</div>
</div>
</div>
</section>

<!--04-->
<section class="sec-pd sec-pt">
<div class="container"> 
<div class="row  mb-4 pb-md-3 mb-lg-2 pb-lg-0">
<?php if( have_rows('our_services') ) : while( have_rows('our_services') ): the_row(); ?>
<div class="col-12 col-md-11 col-lg-8 mx-auto">

	<h5 class="fnt-40 fnt-800 data-scroll px-0"><?php the_sub_field('title'); ?></h5>
	<p class="fnt-24 data-scroll col-md-11 col-lg-10 px-0"><?php the_sub_field('content'); ?></p>

</div>
<?php endwhile; endif; ?>
</div>




<div class="row">
<div class="col-12 col-md-11 col-lg-8 mx-auto">
<?php if( have_rows('our_services') ) : while( have_rows('our_services') ): the_row(); ?>

<ul class="mb-0 services-list px-0">
<?php if( have_rows('our_services_list') ) : while( have_rows('our_services_list') ): the_row(); ?>
<li class="services-list__item"> 
<div class="srv row"> 
<div class="srv__head col-12 col-md-8"> 
<h4 class="fnt-28 fnt-800 mb-2 mb-md-4 text-md-start pe-md-4 pe-lg-5"><?php the_sub_field('title'); ?></h4>
</div>
<div class="srv__info col-12 col-md-10"> 


<div class="row justify-content-between">

<div class="col-12 col-md-6">
<p class="fnt-16 mb-md-3"><?php the_sub_field('content'); ?></p>
<a class="hvr-line clr-second fnt-14 data-scroll tab-sw-hd d-none d-md-inline-block"  tab-id="#<?php the_sub_field('title'); ?>" href="<?php the_sub_field('learn_more_url'); ?>">Learn More</a>
</div>

<div class="col-12 col-md-5">

<ul class="li-disc mb-4">
<?php if( have_rows('list') ) : while( have_rows('list') ): the_row(); ?>
<li class="fnt-16 mb-2"><?php the_sub_field('content'); ?></li>
<?php endwhile; endif; ?>
</ul>
	<a class="hvr-line clr-second fnt-14 data-scroll tab-sw-hd d-md-none" tab-id="#<?php the_sub_field('title'); ?>" href="<?php the_sub_field('learn_more_url'); ?>">Learn More</a>
</div>

</div>





</div>


<div class="srv__ft mt-auto"> </div>


</div>
</li>
<?php endwhile; endif; ?>
</ul>
</div>
<?php endwhile; endif; ?>

</div>
</div>
</div>
</section>

<!--05-->

<section class="sec-pd-service" style="background: #221429;">
<div class="container z-1 servi-pd-top">
<div class="row"> 
<div class="col-12 col-md-10 col-lg-8 mx-auto mb-4 pb-2 mb-md-0 pb-md-0">
<div class="row mb-45 justify-content-between">
<div class="col-md-12 mb-4 mb-md-0 fluid-offset"> 
<div class="lp-awards__left">
<h2 class="fnt-50 l-3 mb-2 clr-white fnt-800 data-scroll"><?php the_field('achievements_heading'); ?></h2><span class="fnt-24 clr-white d-block max-width-480 data-scroll"><?php the_field('achievements_content'); ?>

</span>
</div>
</div>
</div>
<ul class="awrad-list px-0 mb-0 row"> 
<?php if( have_rows('winners') ) : while( have_rows('winners') ): the_row(); ?>
<li class="awrad-list__item col-6 col-md-4 data-scroll"> 
	<div class="award text-center"><img class="icon-awards mx-auto mb-2 pb-1" src="<?php the_sub_field('image') ?>">
<div class="award__name"> 
<h6 class="fnt-18 fnt-800 clr-white mb-1"><?php the_sub_field('title') ?></h6>
<p class="fnt-12 clr-white mb-0"><?php the_sub_field('content') ?></p>
</div>
</div>
</li>
<?php endwhile; endif; ?>
</ul>
</div>
</div>
</div>
</section>

<!--06-->
<section class="sec-pd sec-pb" style="background: #221429">
<div class="container janardhan-padi-btm"> 
<div class="row">
<?php if( have_rows('case_studies') ) : while( have_rows('case_studies') ): the_row(); ?>
<div class="col-12 col-md-10 col-lg-8 mx-auto">
<div class="col-12 col-md-10 col-lg-10 px-0 mb-4 pb-3 mb-lg-5 pb-lg-2">
<h2 class="fnt-50 fnt-800 clr-white mb-4 data-scroll"><?php the_sub_field('title') ?></h2>
<p class="data-scroll clr-white col-12 col-md-9 px-0 fnt-24"><?php the_sub_field('content') ?></p>
<div class="mb-4"><a class="clr-second fnt-14 hvr-line data-scroll mb-4" href="<?php echo site_url()?>/projects/trukkin/">See Case Studies</a></div>
<div class="controls-hide">
<div class="plyr__video-embed js-player">
<?php the_sub_field('video_url') ?>
</div>
</div>
</div>
<?php endwhile; endif; ?>
</div>
</div>
</section>


<section class="sec-pd sec-pt sec-pd-service" id="sixth">
      <div class="container">
          <div class="row"> 
            <div class="col-12 col-md-10 col-lg-8 mx-auto">
              <div class="mb-50 data-scroll">
              <h2 class="fnt-50 fnt-800 mb-16 col-md-10 col-lg-10"><?php the_field('industries_title') ?></h2><span class="fnt-24 col-md-10 col-lg-7 px-0"><?php the_field('industries_text') ?></span>
              </div>
            </div>
            <div class="col-12 col-md-10 col-lg-8 mx-auto">
              <ul class="indutstry-list px-0 mb-4 row justify-content-between"> 
                <?php if( have_rows('industries_list') ) : while( have_rows('industries_list') ): the_row(); ?>
                <li class="indutstry-list__item col-12 col-md-6 col-lg-5 data-scroll"> 
                  <a href="<?php the_sub_field('list_url') ?>" class="industry col-10 col-md-11 col-lg-10 col-xl-8 px-0"> 
                    <h3 class="fnt-22 fnt-800 mb-2">
                       <?php the_sub_field('list_title') ?></h3>
                    <p class=""><?php the_sub_field('list_content') ?></p>
                  <!--  <div class="fade-img">
                      <?php if( have_rows('industries_image') ) : while( have_rows('industries_image') ): the_row(); ?>
                      <div class="fade-img__item"><img class="img-fluid" src="<?php the_sub_field('images') ?>"></div>
                      <?php endwhile; endif; ?>
                      
                    </div>-->
			                      </a>
					                      </li>
							                     <?php endwhile; endif; ?>
              </ul><a class="clr-second fnt-14 hvr-line data-scroll" href="<?php echo site_url()?>/industries/">See All Industries</a>
		                  </div>
				            </div>
					            </div>
					          </section>

<!--07-->

<section class="sec-pd" id="third">
<div class="container"> 
<div class="row"> 
<div class="col-12 col-md-11 col-lg-10 mx-auto">
<?php if( have_rows('projects') ) : while( have_rows('projects') ): the_row(); ?>
<div class="row"> 
<div class="col-12 col-md-12 mx-auto">
<a class="" href="<?php the_sub_field('url'); ?>">
<div class="mb-35 fluid-mb hover-img">
<div class="reveal"><img class="portfolio-img" src="<?php the_sub_field('project_image'); ?>"></div>
</div>
<div class="d-flex flex-wrap px-md-4 px-xl-5">
<div class="col-12 px-md-12 col-md-4 mb-3 mb-md-0 d-flex flex-column"><span class="d-inline-block fnt-16 data-scroll mt-0 text-rpd portfolio-title"><?php the_sub_field('company_name'); ?></span></div>
<div class="col-12 px-md-12 col-md-8 data-scroll pb-md-3">
<div class="px-md-3">
<div class="mb-2 pb-lg-0">
<h2 class="fnt-40 fnt-800 mb-3"> <span class="d-block"><?php the_sub_field('title'); ?></span></h2>
<p><?php the_sub_field('content'); ?></p>
</div>
</div>
</div></div> </a>
<div class="px-md-4 px-xl-5">
<div class="col-12 px-md-12 col-md-5 offset-md-4">
<div class="px-md-3"><a class="data-scroll fnt-14 lp-link lp-link--pri hvr-line" href="<?php the_sub_field('url'); ?>">View Project</a></div>
</div>
</div>
</div>
</div>
<?php endwhile; endif; ?>
</div>
</div>
</div>
</section>

<!--08-->
<section class="sec-pd sec-pt sec-pd-service" id="fifth" style="background: #221429;">
<div class="container z-1 servi-pd-imp">
<div class="row"> 
<div class="col-12 col-md-10 col-lg-8 mx-auto pb-2 mb-md-0 pb-md-0">
<div class="row mb-45 justify-content-between">
<div class="col-md-6 col-lg-10 fluid-offset"> 
<div class="lp-awards__left">
<h2 class="fnt-50 l-3 clr-white fnt-800 data-scroll"><?php the_field('design_studio_heading'); ?></h2><span class="fnt-24 clr-white my-4 d-block max-width-480 data-scroll"><?php the_field('design_studio_content'); ?></span>

<div class="px-0 d-flex flex-wrap culture-slider-nav mb-35 data-scroll">
<a class="culture-slider-nav__item hvr hvr--white fnt-16 fnt-400 clr-white" href="<?php echo site_url(); ?>/ui-ux-design/">India</a><a class="culture-slider-nav__item hvr hvr--white fnt-16 fnt-400 clr-white" href="<?php echo site_url(); ?>/ui-ux-design-agency-in-usa/">USA</a><a class="culture-slider-nav__item hvr hvr--white fnt-16 fnt-400 clr-white" href="<?php echo site_url(); ?>/ae/">Dubai</a><a class="culture-slider-nav__item hvr hvr--white fnt-16 fnt-400 clr-white" href="<?php echo site_url(); ?>/ui-ux-design-agency-vietnam/">Vietnam</a></div>
<div class="d-flex flex-row gap-5">
<a class="clr-second fnt-16 hvr-line data-scroll" href="<?php echo site_url(); ?>/about/">About Us</a>
<a class="clr-second fnt-16 hvr-line data-scroll" href="<?php echo site_url(); ?>/careers/">Careers</a>

</div>
     

                
<a class="web-btn web-btn--primary data-scroll mt-5" href="https://lollypop.design/careers/" style="opacity: 1; transform: translateY(0px);">Join Us</a>
</div>

</div>
</div>
</div>
</div>
<div class="fluid-width">
<div class="row">
<div class="col-12 px-md-0">
<ul class="px-0 lp-awards-list d-flex four-card-slider">
<?php if( have_rows('location_slider') ) : while( have_rows('location_slider') ): the_row(); ?>
<li class="lp-awards-list__item">
	<div class="award-info"><img class="img mb-3" src="<?php the_sub_field('image') ?>">
	<div class="col-12 col-md-8 ps-lg-4"><span class="fnt-14 clr-white d-block mb-1"><?php the_sub_field('location_name') ?></span><span class="d-block mb-0 col-md-10 px-0 fnt-18 clr-white"><?php the_sub_field('content') ?></span></div>
</div>
</li>
<?php endwhile; endif; ?>
</ul>
</div>
</div>
</div>
</section>

<!--09-->
<section class="sec-pd sec-pb lat-blg-mt">
<div class="container">
<div class="row"> 
<div class="col-md-10 col-lg-8 mx-auto">
<div class="mb-90 data-scroll">
<?php if( have_rows('our_stories') ) : while( have_rows('our_stories') ): the_row(); ?>
<h2 class="fnt-50 fnt-800 mb-16"><?php the_sub_field('title'); ?></h2><span class="fnt-24 col-md-10 col-lg-9 px-0"><?php the_sub_field('content'); ?></span>
<?php endwhile; endif; ?>
</div>
<ul class="px-0 home-artical-list">
<?php 
	$args = array(
			'post_type'=>'whitepapers', // Your post type name
				'posts_per_page' => 1,
	);
	$whitepaper = new WP_Query( $args );
	if ( $whitepaper->have_posts() ) : while ( $whitepaper->have_posts() ) : $whitepaper->the_post(); ?>
	<li class="home-artical-list__item"> <a class="home-artical" href="<?php the_permalink(); ?>">
<div class="row">
<div class="col-12 col-md-3 col-lg-5">
<div class="revealnone h-100"> <img class="home-artical-img mb-3 mb-md-0" src="<?php the_field('home_page_thumbnail') ?>"></div>
</div>
<div class="col-12 col-md-7">
<div class="px-lg-4"><span class="text-uppercase d-block mb-2 fnt-12 fnt-800">white paper</span>
<h3 class="fnt-30 fnt-800 mb-2 pb-lg-1"><?php the_title(); ?> </h3>
<p class="clr-gray col-lg-11 mt-1 mt-md-0 mb-1 mb-md-3"><?php echo wp_trim_words(get_field('landing_content'), 35); ?></p><span class="d-block fnt-12">Posted on <?php the_field('date') ?></span> 
</div>
</div>
</div></a></li>
<a class="clr-second fnt-14 hvr-line data-scroll" href="<?php echo site_url()?>/whitepapers/">View All Whitepapers</a>
<?php wp_reset_postdata(); endwhile; endif;?>
</ul>
<!-- Blogs-->
<ul class="px-0 home-artical-list">
<?php if( have_rows('blogs') ) : while( have_rows('blogs') ): the_row(); ?>
<li class="home-artical-list__item"> <a class="home-artical" href="<?php the_sub_field('url'); ?>">
<div class="row">
<div class="col-12 col-md-3 col-lg-5">
<div class="revealnone  h-100"><img class="home-artical-img mb-3 mb-md-0" src="<?php the_sub_field('blog_image'); ?>"></div>
</div>
<div class="col-12 col-md-7">
<div class="px-lg-4"><span class="text-uppercase d-block mb-2 fnt-12 fnt-800">blog</span>
<h3 class="fnt-30 fnt-800 mb-2 pb-lg-1"><?php the_sub_field('title'); ?></h3>
<p class="clr-gray col-lg-11 mt-1 mt-md-0 mb-1 mb-md-3"><?php the_sub_field('content'); ?></p><span class="d-block fnt-12">By 
<?php the_sub_field('author'); ?> on <?php the_sub_field('date'); ?></span>
</div>
</div>
</div></a></li>
<a class="clr-second fnt-14 hvr-line data-scroll" href="<?php echo site_url()?>/blogs/">View All Blogs</a>
<?php endwhile; endif; ?>
</ul>
</div>
</div>
</div>
</section>

<!--10-->
<section class="sec-footer-trans">
<div class="container z-1">
<div class="row"> 
<div class="col-12 col-md-11 col-lg-10 mx-auto">
<div class="py-70 px-3 data-scroll" style="background: #221429;">
<div class="d-flex align-items-center justify-content-center">
<div class="col-12 col-md-8 col-lg-7 px-0 d-inline-block clr-white text-center">
<?php if( have_rows('get_in_touch') ) : while( have_rows('get_in_touch') ): the_row(); ?>
<div class="mb-45"><span class="d-block fnt-24 mb-2 pb-2 mb-md-4 pb-md-0"><?php the_sub_field('small_title'); ?></span>
	<h2 class="fnt-50 fnt-800 clr-white"><?php the_sub_field('title'); ?></h2>
	</div><a class="web-btn web-btn--red" href="<?php the_sub_field('cta_url'); ?>">Get in Touch</a>
<?php wp_reset_postdata(); endwhile; endif;?>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
</main>
<p class="locations_name d-none"><?php the_field('locations_name'); ?></p>
<script src="<?php echo get_template_directory_uri(); ?>/js/slider.js" defer></script>
	<script>
	var locas = $('.locations_name').text();
	$('.nav-dropdown-text').text(locas);
	</script>
<?php
	get_footer();
?>
