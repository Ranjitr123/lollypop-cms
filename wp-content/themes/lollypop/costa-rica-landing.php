<?php
/**
 * * Template Name: Casta Rica landing page
 * *
 * * @package WordPress
 * */

get_header();
 
?>

<style>
.whi-sec{
width: 322px; height:211px!important; }

@media (min-width: 992px){
.logo-list__item img {
    max-width: 100%!important;
}}

@media (min-width: 992px){
.sec-pd2:first-of-type {
    padding-top: 135px;
}}
@media(max-width:767px)
{
	
	.vitanam-slider-pagination {
		left:44% !important;
		top:10% !important;
	}
	.swiper_pad{padding-left:0px!important;}

}

.swiper {
    width: 100%;
  }

  .swiper-slide {
    text-align: center;
    font-size: 18px;
    background: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
	flex-direction:column;
	background: #221429;
	
  }

  .swiper-slide img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
  }
  .vitanam-slider h4{
	font-family: 'Manrope';
	font-style: normal;
	font-weight: 800;
	font-size: 28px;
	line-height: 150%;
	letter-spacing: -0.03em;
	color: #FFFFFF;
	max-width:645px;
	text-align:left;
	padding-bottom:14px;
	padding-top:16px;
  }
  .vitanam-slider p{
	font-family: 'Manrope';
	font-style: normal;
	font-weight: 400;
	font-size: 16px;
	line-height: 160%;
	color: #FFFFFF;
	max-width:606px;
	text-align:left;
  }
  .vitanam-slider-pagination{
	 color:white;
	 top:10%;
	 z-index:1;
	 left:47%;
  }

  .button-up,
.button-down {
  position: absolute;
  padding: 5px;
  margin: 30px auto;
  background: rgba(255, 255, 255, 0.8);
  height: 52px;
  width: 52px;
  border-radius: 50%;
  transition: all 0.2s linear;
  top:36%;
}

.button-up::after,
.button-down::after {
  content: "";
  position: absolute;
  /* left: 18px; */
  z-index: 11;
  display: block;
  width: 14px;
  height: 14px;
  border-top: 2px solid #FD2E35;
  border-left: 2px solid #FD2E35 ;
}
.button-up::after {
  top: 18px;
  transform: rotate(135deg);
  left:17px;
}

.button-down::after {
  top: 19px;
  transform: rotate(-45deg);
  left:20px;

}
.viethan-sec{
	 position: relative;
	 padding-top:140px;
}
.lp-awards__left h2{
	max-width:548px;
}
 .fnt-12 {
    font-size: 11px;
    line-height: 22px;
} 
.design-studio-sec{padding-top:68px !important; padding-bottom:124px !important;}
.poco-sec{padding-top:120px !important; padding-bottom:126px !important;}
.lp-awards__left h2 {
    max-width: 772px !important;
}
.scale-p{max-width:666px !important;}
.sec-pd50 { padding-top: 50px;}
</style>
<main class="main">
<!--01-->
<section class="sec-pd sec-bnr p-r-80"> 
<div class="container sec-container"> 
<div class="row">
<div class="col-12 col-md-11 col-lg-10 mx-auto">
<div class="row">
<div class="col-12 col-md-12">
<div class="mb-r-80 col-lg-10 px-0"> <span class="d-block fnt-28 fnt-800 text-capitalize mb-2 clr-default locations" style="color: #FD2E35;"><?php the_field('locations'); ?></span>
<h1 class="fnt-50 fnt-800 mb-3 mb-md-4 red-stroke red-stroke--small13 px-md-0 col-md-10 col-lg-12"><?php the_field('heading'); ?></h1>
<div class="fnt-24 col-md-10 col-lg-12"><?php the_field('short_description'); ?></div>
</div>
</div>

<?php $locationVideo = get_field('video');
if($locationVideo !=''){
?>
	<div class="play-video-on-scroll">
		<div id="play2-out" style="display:none">
		<div id="play2" data-plyr-provider="<?php the_field('video_provider');?>" data-plyr-embed-id="<?php the_field('video');?>"></div>
	</div>
	<video class="playvid" autoplay="" muted="" loop="" embed-id="<?php the_field('video');?>" provider="<?php the_field('video_provider');?>" playsinline="" poster="<?php the_field('video_poster');?>">
	</video>
	</div>

<?php }else{ ?>
<div class="hover-img">
<img class="wpdm-img" src="<?php the_field('banner_image');?>" alt="Image" width="926" height="649">
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
<div class="col-12 col-md-9 col-lg-8 mx-auto">
<!-- Team profile-->
<div class="row">
<?php if( have_rows('client_challenges') ) : while( have_rows('client_challenges') ): the_row(); ?>
<div class="col-12 col-md-5 mb-4 mb-md-0 hover-img">
	<div class="reveal team-profile-img"><img src="<?php the_sub_field('image'); ?>" alt="" width="298" height="298"></div>
</div>
<div class="col-12 col-md-7">
<div class="profile d-flex flex-column">
<div class="profile__about"> 
 <?php the_sub_field('content'); ?>
<!--<p class="fnt-16 clr-black-354 data-scroll"></p>-->
</div>
<div>

<a class="web-btn web-btn--primary data-scroll mt-1" href="<?php the_sub_field('cta_url'); ?>" style="opacity: 1; transform: translateY(0px);"><?php the_sub_field('cta_name'); ?></a>
</div>
</div>
</div>
<?php endwhile; endif; ?>
</div>
</div>
</div>
</div>
</section>

<!--03 costa rika-->

<section class="sec-pd sec-pt" id="fifth" style="background: #221429;" >
    <div class="container">
        <div class="row"> 
				<?php if( have_rows('new_slider_section_with_content') ) : while( have_rows('new_slider_section_with_content') ): the_row(); ?>
                <div class="col-md-8 col-12 col-lg-8 mx-auto">
                  <div class="why-coastrika">
                    <h2 class="fnt-50 l-3 clr-white fnt-800 data-scroll" style="opacity: 1; transform: translateY(0px);"><?php the_sub_field('main_heading') ?></h2>
                    <p class="fnt-24 clr-white my-4 d-block max-width-580 data-scroll" style="opacity: 1; transform: translateY(0px);"><?php the_sub_field('description') ?></p>
                  </div>
                  <div class="mt-5">
                      <img class="img-fluid" src="<?php the_sub_field('section_image') ?>" alt="img">
                  </div>
                </div>
				 <?php endwhile; endif; ?>
        </div>
    </div>
</section>
<!-- 04 achivements sec -->
<section class="sec-pd" style="background: #221429;">
<div class="container z-1">
<div class="row"> 
<div class="col-12 col-md-10 col-lg-8 mx-auto mb-4 pb-2 mb-md-0 pb-md-0">
<div class="row mb-45 justify-content-between">
<div class="col-md-9 mb-4 mb-md-0 fluid-offset"> 
<div class="lp-awards__left">
<h2 class="fnt-50 l-3 mb-2 clr-white fnt-800 data-scroll"><?php the_field('achievements_heading'); ?></h2><span class="fnt-24 clr-white d-block max-width-480 data-scroll"><?php the_field('achievements_content'); ?>
</span>
</div>
</div>
</div>
<ul class="awrad-list px-0 mb-0 row"> 
<?php if( have_rows('winners') ) : while( have_rows('winners') ): the_row(); ?>
<li class="awrad-list__item col-6 col-md-4 data-scroll"> 
	<div class="award text-center"><img class="icon-awards mx-auto mb-2 pb-1" src="<?php the_sub_field('image') ?>" alt="Image">
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

<!--05 love to know -->
<section class="sec-pb design-studio-sec" style="background: #221429;">
  <div class="container"> 
    <div class="row"> 
		<?php if( have_rows('love_to_know_section') ) : while( have_rows('love_to_know_section') ): the_row(); ?>
        <div class="offset-md-2 offset-lg-2 col-md-7 col-12 col-lg-8">
          <div class="why-coastrika">
             <h2 class="fnt-40 l-3 clr-white fnt-800 data-scroll" style="opacity: 1; transform: translateY(0px);"><?php the_sub_field('main_heading') ?></h2>
          </div>       
        </div>
        <div class="row">
        <div class="offset-md-2 offset-lg-2 col-lg-11 col-md-10 card-know sec-pd50">
          <div class="row">
		  <?php if( have_rows('section_repeater') ) : while( have_rows('section_repeater') ): the_row(); ?>
          <div class=" col-lg-4 col-md-4 card-know">
               <h4 class="fnt-24 l-3 clr-white fnt-800 data-scroll"><?php the_sub_field('card_title') ?></h4>
               <p class="fnt-16 l-3 clr-white fnt-400 data-scroll"><?php the_sub_field('card_content') ?></p>
           </div>
			<?php endwhile; endif; ?>
			<a class="clr-second fnt-14 hvr-line data-scroll" href="<?php echo site_url()?>/blogs/">View All Blogs</a>
          </div>
        </div>
          
          </div>
		  <?php endwhile; endif; ?>
  </div>
</section>

<!-- 06 pura vida -->
<section class="sec-pd">
  <div class="container">
      <div class="row">
          <div class="col-12 col-md-10 col-lg-8 mx-auto">
              <div class="lp-our-services mb-50">
                  <h2 class="fnt-50 fnt-800 mb-2 pb-lg-1 data-scroll" style="opacity: 1; transform: translateY(0px);"> Pura Vida! “De músico, poeta y loco, todos tenemos un poco.”</h2>
                  <span class="fnt-24 col-md-11 col-lg-10 px-0 d-block data-scroll" style="opacity: 1; transform: translateY(0px);"> 
                     “We all have a little bit of the musician, poet, and crazy person in ourselves.” (Let’s be honest, sometimes we’re a little bit crazy also.)
                  </span>
                   <img class="img-fluid mt-5 mb-5 poco-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/castarika/poco.svg" alt="logo">
              </div>
              <div class="agile_process">
                 <h3 class="fnt-40 fnt-800">Our agile design process </h3>
                 <ul class="mb-0 services-list px-0">
                      <li class="services-list__item data-scroll" style="opacity: 1; transform: translateY(0px);">
                          <div class="srv row">
                            <div class="srv__head col-12 col-md-4">
                                <p class="fnt-16 fnt-400 mb-2 mb-md-4 text-md-center">Step 1</p>
                            </div>
                            <div class="srv__info col-12 col-md-8">
                                <div class="row justify-content-between">
                                  <div class="col-12 col-md-12">
                                      <h3 class="fnt-28 fnt-800 ">Discovery Workshop</h3>
                                      <p class="fnt-16 mb-md-3">A workshop to gather all knowledge from all stakeholders. This helps us craft a holistic approach for all requirements.</p>
                                      <a class="hvr-line clr-second fnt-14 data-scroll tab-sw-hd d-none d-md-inline-block" tab-id="#Research" href="#" style="opacity: 1; transform: translateY(0px);">Timeline: 2 - 4 days</a>
                                  </div>
                                </div>
                            </div>
                          </div>
                      </li>
                      <li class="services-list__item data-scroll" style="opacity: 1; transform: translateY(0px);">
                          <div class="srv row">
                            <div class="srv__head col-12 col-md-4">
                            <p class="fnt-16 fnt-400 mb-2 mb-md-4 text-md-center">Step 2</p>
                            </div>
                            <div class="srv__info col-12 col-md-8">
                                <div class="row justify-content-between">
                                  <div class="col-12 col-md-12">
                                      <h3 class="fnt-28 fnt-800 ">Design & Test</h3>
                                      <p class="fnt-16 mb-md-3">Prototyping the final product and testing it in real time to getinputs and reliable user feedback.</p>
                                      <a class="hvr-line clr-second fnt-14 data-scroll tab-sw-hd d-none d-md-inline-block" tab-id="#Design" href="#" style="opacity: 1; transform: translateY(0px);">Timeline: 2 - 4 days</a>
                                  </div>
                                </div>
                            </div>
                          </div>
                      </li>
                      <li class="services-list__item data-scroll" style="opacity: 1; transform: translateY(0px);">
                          <div class="srv row">
                            <div class="srv__head col-12 col-md-4">
                             <p class="fnt-16 fnt-400 mb-2 mb-md-4 text-md-center">Step 3</p>
                            </div>
                            <div class="srv__info col-12 col-md-8">
                                <div class="row justify-content-between">
                                  <div class="col-12 col-md-12">
                                      <h3 class="fnt-28 fnt-800">Build & Launch</h3>
                                      <p class="fnt-16 mb-md-3">Translating the design into pixel perfect, adaptable, and scalable digital products followed by launching a quality product into the market as soon as possible.</p>
                                      <a class="hvr-line clr-second fnt-14 data-scroll tab-sw-hd d-none d-md-inline-block" tab-id="#Build" href="#" style="opacity: 1; transform: translateY(0px);">Timeline: 2 - 4 days</a>
                                  </div>
                                </div>
                            </div>
                          </div>
                      </li>
                    </ul>
              </div>
           </div>
      </div>
  </div>
</section>

<!-- future 500 -->
<section class="sec-pd mb-4">
  <div class="container">
    <div class="row">
		<?php if( have_rows('client_logos') ) : while( have_rows('client_logos') ): the_row(); ?>
      <div class="col-lg-8 col-md-10 mx-auto">
          <div class="mb-5">
              <h5 class="fnt-40 fnt-800 data-scroll col-md-10 col-lg-12 px-0" style="opacity: 1; transform: translateY(0px);"><?php the_sub_field('title'); ?></h5>
              <p class="mt-2 fnt-24 fnt-400 mt-3"><?php the_sub_field('content'); ?></p>
          </div>
          <ul class="px-0 logo-list row">
				<?php if( have_rows('logos') ) : while( have_rows('logos') ): the_row(); ?>
              <li class="logo-list__item col-4 col-md-3 data-scroll" style="opacity: 1; transform: translateY(0px);">
                <img class="img-fluid grayscale lazyloaded" src="<?php the_sub_field('images'); ?>" alt="Image" data-ll-status="loaded">
              </li>
				<?php endwhile; endif; ?>
          </ul>
        </div>
		<?php endwhile; endif; ?>
    </div>
  </div>
</section>


<!-- scales business-->

<section class="sec-pd sec-pt" id="fifth" style="background: #221429;">
<div class="container">
<div class="row"> 
<div class="col-12 col-md-10 col-lg-8 mx-auto pb-2 mb-md-0 pb-md-0">
<div class="row mb-45">
<div class="col-md-10 col-lg-12"> 
<div class="lp-awards__left">
<h2 class="fnt-50 l-3 clr-white fnt-800 data-scroll "><?php the_field('design_studio_heading'); ?></h2><span class="fnt-24 clr-white my-4 d-block max-width-580 data-scroll"><?php the_field('design_studio_content'); ?></span>
<!--<p class="fnt-24 fnt-400 clr-white scale-p">Partner with Lollypop Costa Rica to take your digital offerings to the next level. </p>-->
<a class="web-btn web-btn--primary data-scroll" href="<?php the_field('design_studio_content_button_text_url'); ?>" style="opacity: 1; transform: translateY(0px);"><?php the_field('design_studio_content_button_text'); ?></a>
</div>

</div>
</div>
</div>
</div>
<div class="fluid-width swiper_pad">
<div class="row">
<div class="col-12 px-md-0">
<ul class="px-0 lp-awards-list d-flex four-card-slider">
<?php if( have_rows('location_slider') ) : while( have_rows('location_slider') ): the_row(); ?>
<li class="lp-awards-list__item">
	<div class="award-info"><img class="img mb-3" src="<?php the_sub_field('image') ?>" alt="Image">
	<div class="col-12 col-md-8 ps-lg-4"><span class="fnt-14 clr-white d-block mb-1"><?php the_sub_field('location_name') ?></span><span class="d-block mb-0 col-md-10 px-0 fnt-18 clr-white"><?php the_sub_field('content') ?></span></div>
</div>
</li>
<?php endwhile; endif; ?>
</ul>
</div>
</div>
</div>
</section>

<!--05 from concept launch -->

<section class="sec-pd sec-pt">
<div class="container"> 
<div class="row  mb-4 pb-md-3 mb-lg-5 pb-lg-0">
<?php if( have_rows('our_services') ) : while( have_rows('our_services') ): the_row(); ?>
<div class="col-12 col-md-11 col-lg-8 mx-auto">

	<h5 class="fnt-40 fnt-800 data-scroll px-0"><?php the_sub_field('title'); ?></h5>
	<p class="fnt-24 data-scroll col-md-11 col-lg-11 px-0"><?php the_sub_field('content'); ?></p>

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
<div class="srv__head col-12 col-md-4"> 
<h4 class="fnt-28 fnt-800 mb-2 mb-md-4 text-md-end pe-md-4 pe-lg-5"><?php the_sub_field('title'); ?></h4>
</div>
<div class="srv__info col-12 col-md-8"> 
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

<!--07 our stores-->
<section class="sec-pd sec-pb">
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
	'order'  => 'DESC' ,
);
$whitepaper = new WP_Query( $args );
if ( $whitepaper->have_posts() ) : while ( $whitepaper->have_posts() ) : $whitepaper->the_post(); ?>
<li class="home-artical-list__item"> <a class="home-artical" href="<?php the_permalink(); ?>">
<div class="row">
<div class="col-12 col-md-3 col-lg-5">
<div class="revealnone h-100"> <img class="home-artical-img mb-3 mb-md-0 whi-sec" src="<?php the_field('home_page_thumbnail') ?>" alt="Image"></div>
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
<div class="revealnone  h-100"><img class="home-artical-img mb-3 mb-md-0" src="<?php the_sub_field('blog_image'); ?>" alt="Image"></div>
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
<!--08 get in touch-->
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
	</div>
	<a class="web-btn web-btn--red" href="<?php the_sub_field('cta_url'); ?>">Get in Touch</a>
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


<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<script>
    var swiper = new Swiper(".mySwiper", 
	{
	
      pagination: {
        el: ".swiper-pagination",
        type: "fraction",
		clickable: true,
      },
	  //mousewheel: true,
	  // grabCursor: "true",
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
	//   autoplay: {
    //   delay: 5000,
    // },
//     breakpoints: {
//       768: {
//       autoplay: false,
//      }
//   },
	  
    });
  </script>
<script>
$('input[type="radio"]').on('click', function() {
     window.location = $(this).val();
});
</script>
