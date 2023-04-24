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
<!--<link rel="shortcut icon" type="image/svg" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/img/lollypop-logo.svg" alt="Image">-->
<link rel="shortcut icon" type="image/svg" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/img/Path.svg" alt="Image">
<link rel="shortcut icon" type="image/svg" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/img/Mobile-Favicon.png" alt="Image">
<link rel="shortcut icon" type="image/svg" sizes="18x18" href="<?php echo get_template_directory_uri(); ?>/img/Mobile-Favicon.png" alt="Image">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/img/Path.svg" alt="Image">

	<link rel="alternate" hreflang="en-us" href="https://lollypop.design/"/>
	<link rel="alternate" hreflang="en-us" href="https://lollypop.design/services/"/>
	<link rel="alternate" hreflang="en-us" href="https://lollypop.design/design-audit"/>
	<link rel="alternate" hreflang="en-us" href="https://lollypop.design/usability-testing/"/>
	<link rel="alternate" hreflang="en-us" href="https://lollypop.design/ux-research/"/>
	<link rel="alternate" hreflang="en-us" href="https://lollypop.design/illustrations/"/>
	<link rel="alternate" hreflang="en-us" href="https://lollypop.design/data-visualisation/"/>
	<link rel="alternate" hreflang="en-us" rel="alternate" href="https://lollypop.design/ui-ux-design-agency-in-usa/" hreflang="en-us">

<!-- Google new tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-42458763-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-42458763-1');
</script>
<!-- End Google Tag Manager -->
 
<!-- translate button -->

<script>
$(document).off("mouseup").on("mouseup", function(e) {
  var container = $('.lang-mob .dropdown-content');
  var menu = $('.lang-mob #drop-menu');
  if (!menu.is(e.target) && menu.has(e.target).length === 0 && !container.is(e.target) && container.has(e.target).length === 0) {
    container.hide();
  }
});

$(document).ready(function() {
  $(".lang-mob #drop-menu").off("click").on("click", function() {
    var dropdownContent = $(".lang-mob .dropdown-content");
    if (dropdownContent.is(":visible")) {
      dropdownContent.hide();
    } else {
      dropdownContent.show();
    }
  });

  $(window).scroll(function() {
    var dropdownContent = $(".lang-mob .dropdown-content");
    if (dropdownContent.is(":visible")) {
      dropdownContent.hide();
    }
  });
});

</script>


<script>

$(window).scroll(function() {

if ($(this).scrollTop()>50)
 {
    $('.scroll-hide').fadeOut();
 }
else
 {
  $('.scroll-hide').fadeIn();
 }
});

</script>
<!-- translate button end -->
 

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
<!-- swiper link -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/custom-css.css">

 
<style>
.secut{top:60px;}
@media (max-width: 768px){
.secut {
    top: 28px;
    right: 7% !important;
}}
.fnt-100 {
	 font-size: 32px;
	 line-height: 42px;
	 letter-spacing: -2px;
}
.dropdown-ver a ::after {
    width: 20px;
    height: 100%;
    width: 100%;
    left: 41px!important;
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
/* dropdown */
@media(max-width:768px)
{ 
	.secut {
		 display:none;
	}
   .secut-res label{
	color: #221429 !important;
   }
.sec-last1{padding-bottom:25px!important;}

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
#myDIV, #myDIV1 {
	display:none;
	position: absolute;
	top: 30px;
	width: 180px;
	left: 35px;
}

.dropdown-ver{
	align-items: center;
    justify-content: flex-end;
}

.triangle {
  display: inline-block;
  margin: 0 5px;
  vertical-align: middle;
   box-sizing: border-box;
  
}
.langue-container {
    background-color: #FFFFFF;
    position: relative;
    padding: 10px;
    border-radius: 5px;
    width: 131px;
	right: -50px;
	    top: -4px;
}
.triangle-4 {
    width: 0px;
    height: 0px;
    border-bottom: solid 15px #FFFFFF;
    border-left: solid 15px transparent;
    border-right: solid 15px transparent;
    position: relative;
    left: 35%;
}

[type="radio"]:checked,
[type="radio"]:not(:checked) {
    position: absolute;
    left: -9999px;
}
[type="radio"]:checked + label,
[type="radio"]:not(:checked) + label
{
    position: relative;
    padding-left: 28px;
    cursor: pointer;
    line-height: 15px;
    display: inline-block;
    color: black;
}
[type="radio"]:checked + label:before,
[type="radio"]:not(:checked) + label:before {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    width: 18px;
    height: 18px;
	border: 2px solid #221429;
    border-radius: 100%;
    background: #fff;
}
[type="radio"]:checked + label:after,
[type="radio"]:not(:checked) + label:after {
    content: '';
    width: 8px;
    height: 8px;
    background: black;
    position: absolute;
    top: 5px;
    left: 5px;
    border-radius: 100%;
    -webkit-transition: all 0.2s ease;
    transition: all 0.2s ease;
}
[type="radio"]:not(:checked) + label:after {
    opacity: 0;
    -webkit-transform: scale(0);
    transform: scale(0);
}
[type="radio"]:checked + label:after {
    opacity: 1;
    -webkit-transform: scale(1);
    transform: scale(1);
}

.dropdown-ver a ::after{
	 background-image:url('https://terralogic.com/wp-content/uploads/2023/02/Icon.svg');
	 content:"";
	 width:20px;
	 height:100%;
	 width: 100%;
	position: absolute;
	background-repeat: no-repeat;
	top: 3px;
	background-size: 15px 10px;
	background-position: left;
	left:30px;
}
.dropdown-ver a{
	 position: relative;
}
.dropdown-ver a p{
	margin-bottom:0rem;
	font-weight:600;
	margin-top:6px;
}
 @media (max-width: 768px) {
	 #myDIV {
		 left:8px;
		 width: 150px;
	}
	.triangle {
    margin: 0 15px;
	
		}
		
 .triangle-4 {
    width: 0px;
    height: 0px;
	bottom: 6px;
    border-bottom: solid 15px #FFFFFF;
    border-left: solid 15px transparent;
    border-right: solid 15px transparent;
    position: relative;
    left: 3%;
}
.button-up, .button-down {
    position: absolute;
    padding: 5px;
    margin: 30px auto;
    background: rgba(255, 255, 255, 0.8);
    height: 35px!important;
    width: 35px!important;
    border-radius: 50%;
    transition: all 0.2s linear;
    top: 21%!important;
}
.button-up::after, .button-down::after {
    content: "";
    position: absolute;
    left: 0px;
    z-index: 11;
    display: block;
    width: 11px!important;
    height: 11px!important;
    border-top: 2px solid #FD2E35;
    border-left: 2px solid #FD2E35;
}
.button-up::after {
    top: 12px!important;
    transform: rotate(135deg);
    left: 11px!important;
}
.button-down::after {
    top: 12px!important;
    transform: rotate(-45deg);
    left: 14px!important;
}
.vitanam-slider h4 {
    line-height: 38px;
	font-size:22px!important;
}
.langue-container {
    background-color: #FFFFFF;
    position: relative;
    border-radius: 5px;
    margin-top: -15px;
    padding: 10px;
    width: 104px;
    left: -5px;
}
 .langue-container form label{
     font-size:12px;
	 line-height:16px;
   }
      type="radio"]:checked + label:after, [type="radio"]:not(:checked) + label:after {
    content: '';
    width:6px;
    height: 6px;
    background: black;
    position: absolute;
    top: 5px;
    left: 5px;
    border-radius: 100%;
    -webkit-transition: all 0.2s ease;
    transition: all 0.2s ease;
}
[type="radio"]:checked + label:before, [type="radio"]:not(:checked) + label:before {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    width: 16px;
    height: 16px;
    border: 2px solid #221429;
    border-radius: 100%;
    background: #fff;
}
.secut {
         right:70px !important;
         top:50px !important;
    }
 }

.secut{
    position:fixed;
}
.hr-1{border-bottom:1px solid #F7F4F2;padding: 2px;}
.menu-open .lang-mob{opacity:0!important;pointer-events:none;}
@media only screen and (min-width: 1024px) {
	.secut{
		position:fixed;
	}
	#myDIV {
		 left: -19px;
		 width: 150px;
	}
	.triangle {
    margin: 0 15px;
		}
		
 .triangle-4 {
    width: 0px;
    height: 0px;
	bottom: 0px;
    border-bottom: solid 15px #FFFFFF;
    border-left: solid 15px transparent;
    border-right: solid 15px transparent;
    position: relative;
    left: 67%;
}
}


/* global button */
.global-drop .dropdown-ver a ::after {
    background-image:url('https://lollypop.design/wp-content/uploads/2023/04/chevron1.svg');
    left:47px !important;
}
.global-drop .dropdown-ver a p {
    font-family: 'Manrope';
    font-style: normal;
    font-weight: 400;
    font-size: 14px;
    line-height: 19px;
    color: #FD2E35;
}
.global-drop .langue-container {
    
    position: relative;
    padding: 16px;
    border-radius: 5px;
    width: 240px;
    top: 20px;
    border-radius: 10px;
    right: inherit;
    left: 0px;
}
.global-drop .langue-container ul{padding:0px;}
.global-drop .langue-container ul li{}
.global-drop .langue-container ul li h6{font-family: 'Manrope';
font-style: normal;
font-weight: 400;
font-size: 14px;
line-height: 160%;
color: #221429;
margin-bottom:4px;
}
.global-drop .langue-container ul li p{
    font-family: 'Manrope';
font-style: normal;
font-weight: 400;
font-size: 12px;
line-height: 160%;
color: #877C88;
margin-bottom:12px;
}
.global-drop .langue-container ul hr {
    margin: 12px 0;
    color: inherit;
    border: 0;
    opacity: .25;
    background: #F7F5F3;
}
.global-drop #myDIV{width:inherit;background-color:unset;left: inherit;}
.global-drop .secut {right: inherit !important; top: inherit !important; }
.global-drop{margin-left:1rem;}
.global-drop .dropdown-ver {
    align-items: center;
    justify-content: flex-end;
    position: absolute;
    top:0px;
    /* margin-left: 1rem; */
}
/* @media (max-width: 767px){
    .lp-hamberg {
        transform: translate(0px,-100%)!important;
    }
} */

@media (min-width:661px) and (max-width: 767px){
    .lp-hamberg {
        transform: translate(360px,-100%)!important;
    }
}

@media (min-width:320px) and (max-width:359px)
{
    .lp-hamberg {
        transform: translate(140px,-40%)!important;
    }
}
@media (min-width:360px) and (max-width:374px)
{
    .lp-hamberg {
        transform: translate(140px,-40%)!important;
    }
}
@media (min-width:375px) and (max-width:420px)
{
    .lp-hamberg {
        transform: translate(150px,-40%)!important;
    }
}
@media (min-width:421px) and (max-width:430px)
{
    .lp-hamberg {
        transform: translate(180px,-40%)!important;
    }
}
@media (min-width:431px) and (max-width:490px)
{
    .lp-hamberg {
        transform: translate(195px,-40%)!important;
    }
}
@media (min-width:491px) and (max-width:535px)
{
    .lp-hamberg {
        transform: translate(205px,-40%)!important;
    }
}
@media (min-width:536px) and (max-width:600px)
{
    .lp-hamberg {
        transform: translate(220px,-40%)!important;
    }
}
@media (min-width:601px) and (max-width:767px)
{
    .lp-hamberg {
        transform: translate(240px,-40%)!important;
    }
}
@media (min-width:767px) and (max-width:1024px)
{
    .lp-hamberg {
        transform: translate(50px,-40%)!important;
    }
}
@media (min-width: 768px){
header .default, header .menu-title {
    margin-right: -6px !important;
}
}
@media (min-width:320px) and (max-width: 768px){
.secut {
    right: 110px !important;
    top: 30px !important;
}
}

.secut{
    display:block;
}

</style>

<!-- global button -->
<script>
$(document).off("mouseup").on("mouseup", function(e) {
  var container = $('.global-drop .dropdown-content');
  var menu = $('.global-drop #drop-menu');
  if (!menu.is(e.target) && menu.has(e.target).length === 0 && !container.is(e.target) && container.has(e.target).length === 0) {
    container.hide();
  }
});

$(document).ready(function() {
  $(".global-drop #drop-menu").off("click").on("click", function() {
    var dropdownContent = $(".global-drop .global-content");
    if (dropdownContent.is(":visible")) {
      dropdownContent.hide();
    } else {
      dropdownContent.show();
    }
  });

  $(window).scroll(function() {
    var dropdownContent = $(".global-drop .global-content");
    if (dropdownContent.is(":visible")) {
      dropdownContent.hide();
    }
  });
});

// $(document).mouseup(function (e) {
//     if ($(e.target).closest(".drop-hide").length=== 0) 
//     {
//         $(".drop-hide").hide();
//     }
//     else ($(e.target).closest(".drop-hide").length!=== 0)
//     {
//         $(".drop-hide").show();
//     }
// });


</script>

<script>

$(window).scroll(function() {
 $('.scroll-hide').css('display', 'block');
if ($(this).scrollTop()>50)
 {
    $('.scroll-hide').fadeOut();
    $('.scroll-hide').css('display', 'none');
 }
else
 {
  $('.scroll-hide').fadeIn();
  $('.scroll-hide').css('display', 'block');
 }
});

</script>

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
<div class="col-12 col-lg-11 mx-auto d-flex">
<div class="row d-block d-md-none">
<div class="col-8 col-md-1 js-toggle d-flex align-items-center d-none d-md-block"> <a class="logo-header pz-2 d-flex align-items-center" href="<?php echo site_url(); ?>"><i class="icon-lollypop"></i></a></div>
   <!-- global dropdown -->
<div class="row d-block d-md-none p-0">
    <div class="col-12 col-lg-11 mx-auto p-0">
        <div class="row ">
        <div class="col-1 col-md-1"> <a class="logo-header pz-2 d-flex align-items-center js-toggle" href="<?php echo site_url(); ?>"><i class="icon-lollypop"></i></a></div>
         <div class="global-drop col-4">
            <div class="secut col-12 scroll-hide" id="drop-menu">
                <div class="dropdown-ver d-flex">
                        <a href="javascript:void(0)" onclick="myFunction()">
                        <p class="">Global</p>
                        </a>
                </div>
                <div class="dropdown-content global-content" id="myDIV">
                    <div class="langue-container">
                        <ul>
                            <li><a href="https://lollypop.design/ui-ux-design-company-in-india/">
                                <h6>India</h6>
                                <p>Bangalore, Mumbai, Chennai,<br>Hyderabad</p></a>
                            </li>
                            <hr>
                            <li><a href="https://lollypop.design/ui-ux-design-agency-in-usa/">
                                <h6>USA</h6>
                                <p>San Jose, Dallas, Salt Lake City</p></a>
                            </li>
                            <hr>
                            <li><a href="https://lollypop.design/ui-ux-design-agency-in-uae/">
                                <h6>UAE</h6>
                                <p>Dubai</p></a>
                            </li>
                            <hr>
                            <li><a href="https://lollypop.design/ui-ux-design-agency-vietnam/">
                                <h6>Vietnam</h6>
                                <p>Ho Chi Minh City</p></a>
                            </li>
                        </ul>
                    </div>
            </div> 
         </div>
        </div>
    </div>
</div>
</div>
</div>

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
<a class="item d-block w-100" href="<?php echo site_url(); ?>/ui-ux-design-agency-vietnam-vie/">
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
<div class="col-4 col-md-6 pz-2 d-md-flex align-items-center justify-content-md-end position-relative h-li-nav">
<ul class="js-toggle d-none header-nav ps-0 col-md-12 m-0 d-md-flex align-items-center justify-content-md-end ps-0">
<li class="nav-item menus mb-0"><a class="nav-link fnt-14 " aria-current="page" href="<?php echo site_url(); ?>/services/" data-hovermenu="Services">Services</a></li>
<li class="nav-item menus mb-0"><a class="nav-link fnt-14" href="<?php echo site_url(); ?>/projects/">Projects</a></li>
<li class="nav-item menus mb-0"><a class="nav-link fnt-14 " aria-current="page" href="<?php echo site_url(); ?>/process/" data-hovermenu="Process">Process</a></li>
<li class="nav-item menus mb-0"><a class="nav-link fnt-14" href="<?php echo site_url(); ?>/industries/">Industries</a></li>
<li class="nav-item menus mb-0"><a class=" nav-link fnt-14 hvr-line clr-second text-nowrap" href="<?php echo site_url(); ?>/project-enquiry/">Let's Talk</a></li>
</ul>

<div>
<div class="lp-hamberg ms-auto">
<div class="lp-hamberg__item position-relative">
<div id="progress"></div>
<div class="lines end"><span class="lp-hamberg__line"></span><span class="lp-hamberg__line"></span></div>
</div>
</div>

 <div class="d-md-flex hvr-m flex-column justify-content-end lang-mob">
  <div class="secut col-1 scroll-hide" id="drop-menu">
	 <div class="dropdown-ver d-flex">
			<a href="javascript:void(0)" onclick="myFunction()">
			   <p class="">VIE</p>
		    </a>
	 </div>
	 <div class="dropdown-content drop-hide" id="myDIV">
		<div class="triangle triangle-4"></div>
		<div class="langue-container">
			<form action="#">
				<p style="margin-bottom: 0;">
					<input type="radio" id="test1" name="radio-group"  value="<?php echo site_url(); ?>/ui-ux-design-agency-vietnam-vie/" checked>
					<label for="test1">Tiếng Việt</label>
				</p>
				 <div class="hr-1"></div>
				<p style="margin-bottom: 0;">
					<input type="radio" id="test2" name="radio-group" value="<?php echo site_url(); ?>/ui-ux-design-agency-vietnam/" >
					<label for="test2">English</label>
				</p>
			</form>
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
<div> <a class="fnt-18 text-capitalize" href="<?php echo site_url(); ?>/industries/telecom/">Telecom</a></div>
<div> <a class="fnt-18 text-capitalize" href="<?php echo site_url(); ?>/industries/enabling-growth-in-edtech/">Edtech</a></div>
<div> <a class="fnt-18 text-capitalize" href="<?php echo site_url(); ?>/industries/fintech/">Fintech</a></div>
<div><a class="fnt-18 text-capitalize" href="<?php echo site_url(); ?>/industries/healthcare/">Healthcare</a></div>
<div><a class="fnt-18 text-capitalize" href="<?php echo site_url(); ?>/industries/agriculture/">Agriculture</a></div>
<div> <a class="fnt-18 text-capitalize" href="<?php echo site_url(); ?>/industries/enterprise/">Enterprise</a></div>
</div>
</div>
<!-- For mobile-->
<div class="hvr-div mt-lg-auto hvr-m hvr-m--mb d-flex flex-column justify-content-end d-md-none">
<a class="fnt-16 text-capitalize" href="<?php echo site_url(); ?>/process/">Process</a>
<a class="fnt-16 text-capitalize" href="<?php echo site_url(); ?>/clients/">Clients</a>
<a class="fnt-16 text-capitalize" href="<?php echo site_url(); ?>/careers">Careers</a>
<a class="fnt-16 text-capitalize" href="<?php echo site_url(); ?>/blogs">Blogs</a>
<a class="fnt-16 text-capitalize" href="<?php echo site_url(); ?>/whitepapers/">Whitepapers</a>
<a class="fnt-16 text-capitalize" href="<?php echo site_url(); ?>/contact/">Contact Us</a>
</div>
<div class="d-md-flex hvr-m flex-column justify-content-end d-md-none d-none">
<div> <a class="fnt-18 text-capitalize" href="<?php echo site_url(); ?>/industries/telecom/">Telecom</a></div>
<div> <a class="fnt-18 text-capitalize" href="<?php echo site_url(); ?>/industries/enabling-growth-in-edtech/">Edtech</a></div>
<div> <a class="fnt-18 text-capitalize" href="<?php echo site_url(); ?>/industries/fintech/">Fintech</a></div>
<div><a class="fnt-18 text-capitalize" href="<?php echo site_url(); ?>/industries/healthcare/">Healthcare</a></div>
<div><a class="fnt-18 text-capitalize" href="<?php echo site_url(); ?>/industries/agriculture/">Agriculture</a></div>
<div> <a class="fnt-18 text-capitalize sec-last1" href="<?php echo site_url(); ?>/industries/enterprise/">Enterprise</a></div>
</div>
</div>
</div>
</div>
</div>
<div class="menu-ftr d-done d-md-block mt-md-4 mt-lg-auto mb-4 mb-md-0 menu-ftr-pos menu-ftr-pos--redbg">
<div class="menu-ftr__links hvr-div d-md-flex flex-wrap">
<a class="d-inline-block fnt-18" href="https://www.linkedin.com/company/lollypop-studio/" target="_blank">LinkedIn</a>
<a class="d-inline-block fnt-18" href="https://www.instagram.com/lollypop.design/" target="_blank">Instagram</a>
<a class="d-inline-block fnt-18" href="https://www.facebook.com/lollypop.india" target="_blank">Facebook</a>
<a class="d-inline-block fnt-18" href="https://dribbble.com/lollypop_studio" target="_blank">Dribbble</a>
<a class="d-inline-block fnt-18" href="https://twitter.com/lollypop_studio" target="_blank">Twitter</a>
<a class="d-inline-block fnt-18" href="https://in.pinterest.com/Lollypop_Design/_created/" target="_blank">Pinterest</a>
</div>
</div>
  <!-- drop -->
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
<a class="d-inline-block fnt-18" href="<?php echo site_url(); ?>/ui-ux-design-agency-vietnam-vie/">Vietnam</a>
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


