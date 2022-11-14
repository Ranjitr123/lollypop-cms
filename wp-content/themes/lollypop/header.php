<!DOCTYPE html>
<html lang="en" data-page="home">

<head>
<?php if( get_field('keywords') ): ?>
	<meta name="keywords" content="<?php the_field('keywords')?>">
<?php endif; ?>
	<?php get_template_part( 'meta', 'keywords' ); ?>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<?php wp_head(); ?>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" type="image/svg" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/img/lollypop-logo.svg" alt="Image">
<link rel="shortcut icon" type="image/svg" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/img/lollypop-logo.svg" alt="Image">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/img/lollypop-logo.svg" alt="Image">
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-42458763-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-42458763-1');
</script>
<!-- End Google Tag Manager -->

<!---css---------->
<link rel="preload" href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap"></noscript>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel='stylesheet' href='https://lollypop.design/wp-content/themes/lollypop/css/Designathon.css' type='text/css' media='all' />
<link rel="preload" href="https://lollypop.design/wp-content/themes/lollypop/css/swiper-bundle.min.css?ver=5.9" as="style" onload="this.onload=null;this.rel='stylesheet'">
 <noscript><link rel='stylesheet' id='swifer-css'  href='https://lollypop.design/wp-content/themes/lollypop/css/swiper-bundle.min.css?ver=5.9' type='text/css' media='all' /> </noscript>
 <link rel="preload" href="https://lollypop.design/wp-content/themes/lollypop/css/aos.css?ver=5.9" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel='stylesheet' id='aos-css'  href='https://lollypop.design/wp-content/themes/lollypop/css/aos.css?ver=5.9' type='text/css' media='all' /></noscript>
<link rel="preload" href="https://lollypop.design/wp-content/themes/lollypop/css/main.css?ver=5.9" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel='stylesheet' id='main-css'  href='https://lollypop.design/wp-content/themes/lollypop/css/main.css?ver=5.9' type='text/css' media='all' /> </noscript>
<link rel="preload" href="https://lollypop.design/wp-content/themes/lollypop/css/plyr.css?ver=5.9" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel='stylesheet' id='plyr-css'  href='https://lollypop.design/wp-content/themes/lollypop/css/plyr.css?ver=5.9' type='text/css' media='all' /> </noscript>
<link rel="preload" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" as="style" onload="this.onload=null;this.rel='stylesheet'"/>
<link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" as="style" onload="this.onload=null;this.rel='stylesheet'"/>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/custom-css.css">

<style>
.fnt-100 {
	 font-size: 32px;
	 line-height: 42px;
	 letter-spacing: -2px;
}
 @media (min-width: 768px) {
	 .fnt-100 {
		 font-size: 70px;
		 line-height: 75px;
		 letter-spacing: -2px;
	}
}
 @media (min-width: 992px) {
	 .fnt-100 {
		 font-size: 80px;
		 line-height: 85px;
		 letter-spacing: -4px;
	}
}
 @media (min-width: 1200px) {
	 .fnt-100 {
		 font-size: 100px;
		 line-height: 104px;
		 letter-spacing: -4px;
	}
}
.fnt-100 {
	 font-size: 32px;
	 line-height: 42px;
	 letter-spacing: -2px;
}
 @media (min-width: 768px) {
	 .fnt-100 {
		 font-size: 70px;
		 line-height: 75px;
		 letter-spacing: -2px;
	}
}
 @media (min-width: 992px) {
	 .fnt-100 {
		 font-size: 80px;
		 line-height: 85px;
		 letter-spacing: -4px;
	}
}
 @media (min-width: 1200px) {
	 .fnt-100 {
		 font-size: 100px;
		 line-height: 104px;
		 letter-spacing: -4px;
	}
}
.lp-mainheader--white .header-nav .nav-item:last-of-type a::after {
	 background-color: #fff !important;
}
 .h-transparent .header-nav .nav-item:last-of-type a {
	 color: #fd2e35 !important;
}
 .h-transparent .header-nav .nav-item:last-of-type a::after {
	 background-color: #fd2e35 !important;
}
.drop-clr, .drop-white {
    position: absolute;
    right: -9px;
}
</style>

</head>


<?php 
$args = array(
	'post_type'=>'header',
	'posts_per_page' => 1,

);
$header = new WP_Query( $args );

?>

<header class="header">
<div class="container">
<div class="row">
<div class="col-12 col-lg-10 mx-auto">
<div class="row">
<div class="col-8 col-md-1 js-toggle d-flex align-items-center"> <a class="logo-header pz-2 d-flex align-items-center" href="<?php echo site_url(); ?>"><i class="icon-lollypop"></i></a></div>
<div class="col-4 js-toggle d-none d-md-flex align-items-center justify-content-start h-li-nav">
<div class="d-flex align-items-center justify-content-md-end">
<div class="navbar-list d-md-flex mb-0">
<div class="nav-item clr-second">
<div class="js-location-dropdown  js-nav-dropdown lp-dropdown-wrap">
<div class="d-flex align-items-center js-location-dropdown__ar position-relative"style="cursor: pointer;">
<div class="default nav-dropdown-text pe-2">Global</div>
<div class="drop-clr"> <img class="drop-ar" src="<?php echo get_template_directory_uri(); ?>/img/icons/dropdown.svg" alt="Image" width="10" height="7"></div>
<div class="drop-white"><img class="drop-ar" src="<?php echo get_template_directory_uri(); ?>/img/icons/dropdown-white.svg" alt="Image" width="10" height="7"></div>
</div>
<div class="menu menu--location transition hidden lp-dropdownmenu lp-dropdownmenu--lg">
<div class="container">
<div class="row">
<div class="col-12 col-md-11 col-lg-10 d-md-flex justify-content-center mx-auto">
<div class="row w-100">
<div class="col-12 justify-content-center d-md-flex flex-wrap w-100">
<div class="row justify-content-centerw-100 location-drop-list location-slider dots-red">
<div class="col-3 location-drop-list__item">
<a class="item d-block w-100" href="<?php echo site_url(); ?>/ui-ux-design-company-in-india/">
<div class="location">
<img class="img-fluid" src="<?php echo site_url(); ?>/wp-content/uploads/2022/10/india.webp" alt="Image" />
<h6 class="fnt-22 fnt-800 mb-1 mt-3">India</h6>
<p class="fnt-16 mb-0">Bangalore, Mumbai,</p>
<p class="fnt-16 mb-0">Chennai, Hyderabad</p>
</div>
</a>
</div>              
<div class="col-3 location-drop-list__item">
<a class="item d-block w-100" href="<?php echo site_url(); ?>/ui-ux-design-agency-in-usa/">
<div class="location">
<img class="img-fluid" src="<?php echo site_url(); ?>/wp-content/uploads/2022/10/US-Female-at-Pizzas-new.webp" alt="Image" />
<h6 class="fnt-22 fnt-800 mb-1 mt-3">USA</h6>
<p class="fnt-16 mb-0">San Jose, Dallas</p>
<!--p class="fnt-16 mb-0">Dallas,</p-->
<p class="fnt-16 mb-0">Salt Lake City</p>
</div>
</a>
</div>
<div class="col-3 location-drop-list__item">
<a class="item d-block w-100" href="<?php echo site_url(); ?>/ui-ux-design-agency-in-uae/">
<div class="location">
<img class="img-fluid" src="<?php echo site_url(); ?>/wp-content/uploads/2022/10/UAE.webp" alt="Image"/>
<h6 class="fnt-22 fnt-800 mb-1 mt-3">UAE</h6>
<p class="fnt-16 mb-0">Dubai</p>
</div>
</a>
</div>
<div class="col-3 location-drop-list__item">
<a class="item d-block w-100" href="<?php echo site_url(); ?>/ui-ux-design-agency-vietnam/">
<div class="location">
<img class="img-fluid" src="<?php echo site_url(); ?>/wp-content/uploads/2022/10/vietnam.webp" alt="Image"/>
<h6 class="fnt-22 fnt-800 mb-1 mt-3">Vietnam</h6>
<p class="fnt-16 mb-0">Ho Chi Minh City</p>
</div>
</a>
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
</div><span class="menu-title d-inline-block ps-3">UX UI Design Studio </span>
</div>
</div>
<div class="col-4 col-md-7 pz-2 d-md-flex align-items-center justify-content-md-end position-relative h-li-nav">
<ul class="js-toggle d-none header-nav ps-0 col-md-12 m-0 d-md-flex align-items-center justify-content-md-end ps-0">
<li class="nav-item menus mb-0"><a class="nav-link fnt-14 " aria-current="page" href="<?php echo site_url(); ?>/services/" data-hovermenu="Services">Services</a></li>
<li class="nav-item menus mb-0"><a class="nav-link fnt-14" href="<?php echo site_url(); ?>/projects/">Projects</a></li>
<li class="nav-item menus mb-0"><a class="nav-link fnt-14 " aria-current="page" href="<?php echo site_url(); ?>/process/" data-hovermenu="Process">Process</a></li>
<li class="nav-item menus mb-0"><a class="nav-link fnt-14" href="<?php echo site_url(); ?>/industries/">Industries</a></li>
<li class="nav-item menus mb-0"><a class=" nav-link fnt-14 hvr-line clr-second text-nowrap" href="<?php echo site_url(); ?>/project-enquiry/">Let's Talk</a></li>
</ul>
<div class="lp-hamberg ms-auto">
<div class="lp-hamberg__item position-relative">
<div id="progress"></div>
<div class="lines end"><span class="lp-hamberg__line"></span><span class="lp-hamberg__line"></span></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</header>

<div class="desktop-menu clearfix">
<div class="desktop-menu__redbg">
<div class="desktop-menu__item">
<div class="container h-100">
<div class="row h-100">
<div class="col-12 col-lg-11 col-xl-10 col-xxl-9 h-100 pd-lg mx-auto postion-relative">
<div class="row h-lg-100 align-items-center">
<div class="col-12">
<div class="d-flex flex-wrap justify-content-md-between center-menu-pd">
<div class="main-links hvr-div hvr-m pe-5 ps-md-0 d-flex flex-column">
<div>
<a class="main-links__item px-0 text-capitalize active fnt-800" aria-current="page" href="<?php echo site_url(); ?>">home</a>
</div>
<div><a class="main-links__item px-0 text-capitalize active fnt-800" aria-current="page" href="<?php echo site_url(); ?>/services/">services</a></div>
<div> <a class="main-links__item px-0 text-capitalize active fnt-800" aria-current="page" href="<?php echo site_url(); ?>/projects/">projects</a></div>
<div><a class="main-links__item px-0 text-capitalize active fnt-800" aria-current="page" href="<?php echo site_url(); ?>/industries/">Industries</a></div>
<div><a class="main-links__item px-0 text-capitalize active fnt-800" aria-current="page" href="<?php echo site_url(); ?>/about/">About Us</a></div>
</div>
<div class="main-links main-links--sub d-md-flex flex-column">
<!-- For Desktop-->
<div class="hvr-div mt-md-auto mb-lg-1 d-none d-md-flex ps-xl-4 justify-content-between"> 
<div class="d-md-flex hvr-m flex-column justify-content-end">
<div>
<a class="fnt-18 text-capitalize" href="<?php echo site_url(); ?>/process/">Process</a>
</div>
<div><a class="fnt-18 text-capitalize" href="<?php echo site_url(); ?>/clients/">Clients</a></div> 
<div><a class="fnt-18 text-capitalize" href="<?php echo site_url(); ?>/careers/">Careers</a></div>
<div> <a class="fnt-18 text-capitalize" href="<?php echo site_url(); ?>/blogs/">Blogs</a></div>
<div> <a class="fnt-18 text-capitalize" href="<?php echo site_url(); ?>/whitepapers/">White Papers</a></div>
<div> <a class="fnt-18 text-capitalize" href="<?php echo site_url(); ?>/contact/">Contact Us</a></div>
</div>
<div class="d-md-flex hvr-m flex-column justify-content-end">
<div> <a class="fnt-18 text-capitalize" href="<?php echo site_url(); ?>/industries/fintech/">Fintech</a></div>
<div><a class="fnt-18 text-capitalize" href="<?php echo site_url(); ?>/industries/healthcare/">Healthcare</a></div>
<div><a class="fnt-18 text-capitalize" href="<?php echo site_url(); ?>/industries/agriculture/">Agriculture</a></div>
<div> <a class="fnt-18 text-capitalize" href="<?php echo site_url(); ?>/industries/enterprise/">Enterprise</a></div>
</div>
</div>
<!-- For mobile-->
<div class="hvr-div mt-lg-auto hvr-m hvr-m--mb h-100 d-flex flex-column justify-content-end d-md-none">
<a class="fnt-16 text-capitalize" href="<?php echo site_url(); ?>/process/">Process</a>
<a class="fnt-16 text-capitalize" href="<?php echo site_url(); ?>/clients/">Clients</a>
<a class="fnt-16 text-capitalize" href="<?php echo site_url(); ?>/careers">Careers</a>
<a class="fnt-16 text-capitalize" href="<?php echo site_url(); ?>/blogs">Blogs</a>
<a class="fnt-16 text-capitalize" href="<?php echo site_url(); ?>/whitepapers/">Whitepapers</a>
<a class="fnt-16 text-capitalize" href="<?php echo site_url(); ?>/contact/">Contact Us</a>
</div>
</div>
</div>
</div>
</div>
<div class="menu-ftr d-block d-md-block mt-md-4 mt-lg-auto mb-4 mb-md-0 menu-ftr-pos menu-ftr-pos--redbg">
<div class="menu-ftr__links hvr-div d-none d-md-flex flex-wrap">
<a class="d-inline-block fnt-18" href="https://www.linkedin.com/company/lollypop-studio/" target="_blank">LinkedIn</a>
<a class="d-inline-block fnt-18" href="https://www.instagram.com/lollypop.design/" target="_blank">Instagram</a>
<a class="d-inline-block fnt-18" href="https://www.facebook.com/lollypop.india" target="_blank">Facebook</a>
<a class="d-inline-block fnt-18" href="https://twitter.com/lollypop_studio" target="_blank">Twitter</a>
<a class="d-inline-block fnt-18" href="https://dribbble.com/lollypop_studio" target="_blank">Dribbble</a>
<a class="d-inline-block fnt-18" href="https://in.pinterest.com/Lollypop_Design/_created/" target="_blank">Pinterest</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="desktop-menu__blackbg">
<div class="desktop-menu__item">
<div class="container h-100">
<div class="row h-100">
<div class="col-12 col-lg-10 col-xl-9 mx-auto h-100 d-flex flex-column postion-relative">
<div class="row h-100 align-items-center">
<div class="col-12 mt-lg-5">
<div class="menu-craft mb-4 pb-3 pb-lg-0 mb-lg-0">
<div class="menu-craft__item mb-4">
<p class="d-none d-md-block fnt-18 mb-2 mb-md-3">Got An Idea?</p>
<h3 class="fnt-36 fnt-800 bg-bl-hd">Let's craft <span class="d-block">brilliance together!</span></h3>
</div><a class="web-btn mt-lg-3 web-btn--red" href="<?php echo site_url(); ?>/project-enquiry/">Get in touch</a>
</div>
</div>
</div>
<div class="menu-ftr mt-md-auto menu-ftr-pos">
<div class="menu-ftr__links hvr-div">
<a class="d-inline-block fnt-18" href="<?php echo site_url(); ?>/ui-ux-design-company-in-india/">India</a>
<a class="d-inline-block fnt-18" href="<?php echo site_url(); ?>/ui-ux-design-agency-in-usa/">USA</a>
<a class="d-inline-block fnt-18" href="<?php echo site_url(); ?>/ui-ux-design-agency-in-uae/">UAE</a>
<a class="d-inline-block fnt-18" href="<?php echo site_url(); ?>/ui-ux-design-agency-vietnam/">Vietnam</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<body>
<div class="bd-brd"></div>
<div class="loader">
<div class="loader__item"><img defer src="https://lollypop.design/wp-content/uploads/2022/09/logoanimated100.gif" alt="Image"></div>
</div>


