<?php
/**
 *  Template Name: Data Visualisation
 *   */

get_header();
?>
<style>
.list-disk li{list-style: disc !important;}
.second-slider{
  padding-left:230px !important;
  }

.hvr-line::after {
  position: absolute;
  content: "";
  bottom: -5px;
  left: 0;
  width: 25%;
  height: 2px !important;
  background: #fd2e35;
}

.data_red {
color: #FD2E35;
font-weight: 800;
font-size: 16px;
}
.data-banner .hvr-line{
  font-size:16px !important;
}
.para .data_red{
  font-family: 'Manrope';
  font-style: normal;
  font-weight: 800;
  font-size: 50px;
  line-height: 64px;
  color: #FD2E35;
  padding:0px !important;
}
.case-std__info{
  position: absolute;
  top: 58%;
  left: 3%;
  background: #FFFFFF;
  width: 300px;
  padding: 24px 16px;
  flex-direction: column;
  justify-content: center;
  align-items: flex-start;
  height:174px;
  
}
.new-custom-slider .lp-awards-list__item:nth-child(even) .img {
    min-height: 450px !important;
}
.new-custom-slider .lp-awards-list .img {
    width: 450px!important;}
	.lp-awards-list__item:nth-child(odd) {
    min-width: fit-content;
	width:auto;
}
.lp-awards-list__item:nth-child(even) {
    min-width: fit-content;
	width:auto;
}
.new-custom-slider .lp-awards-list__item:nth-child(even) {
    min-width: fit-content;}
.second-slider2 .lp-awards-list__item:nth-child(even) .img {
min-height: 450px !important;}
.second-slider2 .lp-awards-list__item:nth-child(odd) .img {
min-height: 450px !important;}

/* vinay */
/* .mxw-339{max-width:370px;margin:0 auto 0 0;} */
.service-tittle{color: #221429;
font-size: 40px;
font-weight: 800;
line-height: 50px;}
.info-tittle{color: var(--black, #221429);
font-size: 22px;
font-weight: 800;
line-height: 32px;
letter-spacing: -0.66px;}
.info-para{color: var(--grey, #877C88);
font-weight: 500;
line-height: 24px; max-width:370px; margin:0 auto;}

.services-provide{
  padding-top:135px;
}

/* usecase */
.mx-310{
  max-width:310px;
}
.play-video-on-scroll{
  width: 924px;
  height: 521px;
}



@media only screen and (min-width: 768px) {
    .cl-logo img {
        max-width: 100%!important;
    }

}  

@media only screen and (max-width: 768px) 
{

  .second-slider{
     padding-left:0px !important;
    }
		.new-custom-slider .lp-awards-list__item:nth-child(even) .img {
		  min-height: 450px;
		}
		.new-custom-slider .lp-awards-list__item:nth-child(odd) .img {
		   min-height: 450px;
	   }
	/*.lp-awards-list .img{height:446px;}*/
  .play-video-on-scroll{
      width:auto;
      height:100%;
  }
.service-tittle{
    font-size:24px; line-height: 35px;
  }
  .info-tittle{
    font-size:18px;
	  line-height:20px;
  }
  .second-slider2 .lp-awards-list__item:nth-child(even) .img {
    min-height: 200px !important;
    width: 400px !important;
}
.second-slider2 .lp-awards-list__item:nth-child(odd) .img {
    min-height: 200px !important;
    width:400px !important;
}
.lp-awards-list__item {
    width: auto;
}
.services-provide {
    padding-top: 40px;
}
.info-para {margin-bottom: 2rem;}
.second-slider2 .lp-awards-list__item:nth-child(odd) .img {
    min-height: 200px !important;
    width: 400px !important;
}
.second-slider2 .lp-awards-list__item:nth-child(even) .img {
    min-height: 200px !important;
    width: 400px !important;
}
.new-custom-slider .lp-awards-list__item:nth-child(odd) .img {
    min-height: 450px;
    width: 400px !important;
}
.new-custom-slider .lp-awards-list__item:nth-child(even) .img {
    min-height: 450px;
    width: 400px !important;
}
}


@media (min-width: 992px)
{
    .lp-awards-list__item:nth-child(even) {
        min-width: fit-content!important;
    }
}
@supports (-webkit-touch-callout: none) {
.second-slider2 .lp-awards-list__item:nth-child(odd) .img {
    min-height: 200px !important;
    width: 400px !important;
}
.second-slider2 .lp-awards-list__item:nth-child(even) .img {
    min-height: 200px !important;
    width: 400px !important;
}
.new-custom-slider .lp-awards-list__item:nth-child(odd) .img {
    min-height: 446px;
    width: 400px !important;
}
.new-custom-slider .lp-awards-list__item:nth-child(even) .img {
    min-height: 446px;
    width: 400px !important;
}
}
</style>

<script type="application/ld+json">{
"@context": "https://schema.org",
"@type": "FAQPage",
"mainEntity": [{
"@type": "Question",
"name": "Why do I need data visualization?",
"acceptedAnswer": {
"@type": "Answer",
"text": "By visualizing your data, you immediately make it much easier to analyze and build relationships and gain meaningful insights. Data visualization is important to analyze massive amounts of information and make designs that are data driven."
}
},{
"@type": "Question",
"name": "How does a data visualization expert at Lollypop approach a project?",
"acceptedAnswer": {
"@type": "Answer",
"text": "Through our data visualization techniques, we start by understanding the goal of the data visualization engagement, if it is for understanding and, or for persuasion. The next step is to explore the various data sets that we have at our disposal followed by analysis and visualization."
}
},{
"@type": "Question",
"name": "What are the main goals of data visualization?",
"acceptedAnswer": {
"@type": "Answer",
"text": "Data visualization helps in faster conceptualisation and discovering new trends, which facilitates better understanding and decision making."
}
},{
"@type": "Question",
"name": "What tools do we use for data visualization?",
"acceptedAnswer": {
"@type": "Answer",
"text": "Data visualization helps in faster conceptualisation and discovering new trends, which facilitates better understanding and decision making."
}
}]


}</script>


<script type="application/ld+json">{
"@context": "https://schema.org/",
"@type": "BreadcrumbList",
"itemListElement": [{
"@type": "ListItem",
"position": 1,
"name": "Design Audit",
"item": "https://lollypop.design/design-audit"
},{
"@type": "ListItem",
"position": 2,
"name": "Usability Testing",
"item": "https://lollypop.design/usability-testing/"
},{
"@type": "ListItem",
"position": 3,
"name": "UX Research",
"item": "https://lollypop.design/ux-research/"
},{
"@type": "ListItem",
"position": 4,
"name": "Data Visualization",
"item": "https://lollypop.design/data-visualization/"
}]
}</script>




<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "Product",
  "name": "Lollypop - UI/UX Design Studio Bangalore",
  "image": "https://lollypop.design/wp-content/themes/lollypop/img/lollypop-logo.svg",
  "description": "Lollypop is a globally renowned UX UI design company that specializes in UX research, user experience design, user interface design, and Usability Testing.",
  "brand": {
    "@type": "Brand",
    "name": "Lollypop"
  },
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "5",
    "ratingCount": "1",
    "reviewCount": "1"
  },
  "review": {
    "@type": "Review",
    "name": "Charan Balse",
    "reviewBody": "Lollypop Studio being the best in the industry for UI/UX, it is a pleasure being a part of their business family. Working with them was such a great experience as their design are always inspiring & educative.. Looking forward to see much more great designs from them in future..

Cheers to Anil Reddy & Team..:)",
    "reviewRating": {
      "@type": "Rating",
      "ratingValue": "5"
    },
    "datePublished": "2019-12-01",
    "author": {"@type": "Person", "name": "Charan Balse"},
    "publisher": {"@type": "Organization", "name": "Charan Balse"}
  }
}
</script>


<main class="main">
      <!--01-->
      <section class="sec-pd sec-bnr">
        <div class="container"> 
          <div class="row">
            <div class="col-12 col-md-10 col-lg-10 mx-auto">
              <div class="row mb-80">
                <div class="col-12 col-md-10 mx-auto d-flex flex-column align-items-center">
                  <div class="mb-50 mx-auto mb-4">
                  <span class="d-block fnt-14 text-capitalize mb-2 clr-default">Services / Data Visualization</span>
                    <h1 class="fnt-40 fnt-800 red-stroke red-stroke--small13 px-md-0"> <?php echo get_field('title1')?></h1>
                    <p class="fnt-24 mt-4 col-md-9"><?php echo get_field('description')?></p>
                     <div class="data-banner">
                        <a class="clr-second fnt-16 hvr-line data-scroll" href="<?php echo get_field('link_url')?>" style="opacity: 1; transform: translateY(0px);"> <?php echo get_field('link_text')?></a>
                     </div>
                  </div>
                </div>
          </div>
	      <div class="mb-70">
        <div class='col-12 col-md-11 mx-auto'>
              <div class="play-video-on-scroll">
                <div id="play2-out" style="display:none">
                  <div id="play2" data-plyr-provider="<?php echo get_field('video_provider')?>" data-plyr-embed-id="<?php echo get_field('video_link')?>"></div>
                </div>
                <video class="playvid" autoplay="" muted="" loop="" playsinline="" provider=" <?php echo get_field('video_provider')?>" embed-id="<?php echo get_field('video_link')?>" poster="<?php echo get_field('video_image')?>">
                </video>
              </div>
            </div>
        </div>
              
			  <div class="col-12 col-md-8 col-lg-7 mx-auto px-0 text-center">
                <div class="mb-60">
                  <p class="fnt-24"><?php echo get_field('titles')?></p>
                </div>
                <ul class="px-0 mb-0 clients-logo row justify-content-center">
				  <?php if( have_rows('social_icons_section') ): while( have_rows('social_icons_section') ): the_row(); ?>
                  <li class="clients-logo__item col-4 col-md-4 data-scroll">
                    <div class="cl-logo text-center h-100 d-flex align-items-center"><img class="img-fluid" src="<?php the_sub_field('image') ?>" alt="Image" width="240" height="56"></div>
                  </li>
                  <?php endwhile; endif; ?> 
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      
      
      <!--07 what we need-->
<section class="sec-pd sec-pt1 pb-0" id="fifth" style="background: #221429;">
    <div class="container">
        <div class="row mt-4 mt-md-5 pt-md-5">
            <div class="col-12 col-md-11 col-lg-9 mx-auto">
                <div class="col-md-10 col-lg-12 px-0 clr-white">
                    <div class="mb-35">
                        <h3 class="fnt-50 fnt-800 clr-white mb-2 pb-md-1 data-scroll col-12 col-md-8 px-0"><?php echo get_field('heading')?></h3>
                        <p class="col-md-10 fnt-26 col-lg-8 px-0 data-scroll"><?php echo get_field('content')?></p>
					          </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sec-pd sec-pt1">
      <div class="fluid-width second-slider">
        <div class="row">
            <div class="col-12 px-md-0">
              <ul class="px-0 lp-awards-list d-flex four-card-slider new-custom-slider">
					<?php if( have_rows('content_section') ): while( have_rows('content_section') ): the_row(); ?>
                  <li class="lp-awards-list__item newimg">
                    <div class="award-info position-relative">
                    <img class="img mb-3" src='<?php the_sub_field('card_image') ?>' alt="logo">
                        <div class="case-std__info position-absolute">
                          <h6 class="fnt-16 fnt-800 mb-1"><?php the_sub_field('title') ?></h6>
                          <p class="fnt-14 mb-0 fnt-mb-12"><?php the_sub_field('content') ?></p>
                        </div>
                    </div>
                  </li>
				  <?php endwhile; endif; ?>                  
              </ul>
            </div>
        </div>
      </div>
    </div>
</section>

<!-- vinay sec -->
<section class="services-provide">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-11 col-lg-9 mx-auto">
        <h3 class="service-tittle  mb-md-5 mb-4"><?php echo get_field('service_heading')?></h3>
          <?php if( have_rows('service_content_section') ): while( have_rows('service_content_section') ): the_row(); ?>
		        <div class="d-flex flex-wrap mb-md-5 pb-md-2 services-provide-wrap">
                <div class="me-md-5">
                  <img src="<?php the_sub_field('service_image') ?>" alt="" width="230" height="210">
                </div>
                <div class="mxw-339 mt-3 mt-md-0">
                  <h5 class="mb-3 info-tittle"><?php the_sub_field('service_title') ?></h5>
                  <p class="info-para"><?php the_sub_field('service_content') ?></p>
                </div>
            </div>
            <?php endwhile; endif; ?>                   
        </div>                    
    </div>
  </div>
</section>

<!-- use cases section -->
<section class="sec-pd" id="sixth">
   <div class="container">
      <div class="row">
         <div class="col-12 col-md-8  mx-auto">
            <div class="mb-5 data-scroll" style="opacity: 1; transform: translateY(0px);">
               <h2 class="fnt-40 fnt-800 mb-16 col-md-8"><?php echo get_field('use_case_title')?></h2>
               <p class="fnt-24 col-lg-10 px-0 data-scroll"><?php echo get_field('use_case_description')?></p>
              </div>
         </div>
         <div class="col-12 col-md-8 mx-auto">
            <ul class="indutstry-list px-0 ul-mb-60 row justify-content-between">
				 <?php if( have_rows('use_case_points_section') ): while( have_rows('use_case_points_section') ): the_row(); ?>
			         <li class="indutstry-list__item col-12 col-md-6 data-scroll" style="opacity: 1; transform: translateY(0px);">
                  <div class="industry col-12 col-md-12 col-lg-12 col-xl-12 px-0">
                     <h3 class="fnt-22 fnt-800 mb-2"><?php the_sub_field('point_title') ?></h3>
                     <p class="mb-22 col-12 col-md-11 mx-310"><?php the_sub_field('point_content') ?></p>
                  </div>
               </li>
              <?php endwhile; endif; ?>                   
            </ul>
            <div class="para">
               <strong><a class="clr-second fnt-14 hvr-line data-scroll" href="<?php echo get_field('use_case_bottom_url') ?>" style="opacity: 1; transform: translateY(0px);"> <?php echo get_field('use_case_bottom_text') ?></a></strong>
            </div>
         </div>
      </div>
   </div>
</section>

<!-- 2 nd slider -->
<section class="sec-pd sec-pt1 pb-0" id="fifth" style="background: #221429;">
   <div class="container">
      <div class="row mt-4 mt-md-5 pt-md-5">
         <div class="col-12 col-md-11 col-lg-9 mx-auto px-0">
            <div class="col-md-10 col-lg-12 px-3 clr-white">
               <div class="mb-35">
                  <h3 class="fnt-50 fnt-800 clr-white mb-2 pb-md-1 data-scroll col-12 col-md-8 px-0"><?php echo get_field('dashboard_design_title') ?></h3>
                  <p class="col-md-10 fnt-26 col-lg-8 px-0 data-scroll"><?php echo get_field('dashboard_design_description') ?></p>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="sec-pd sec-pt1 pt-0">
      <div class="fluid-width second-slider">
         <div class="row">
            <div class="col-12 px-md-0">
               <div class="mb-5 px-3 px-md-0"><a class="clr-second fnt-14 hvr-line data-scroll" href="<?php echo get_field('dashboard_design_bottom_url') ?>" style="opacity: 1; transform: translateY(0px);"> <?php echo get_field('dashboard_design_bottom_text') ?></a></div>
               <ul class="px-0 lp-awards-list d-flex four-card-slider second-slider2">
				
                 <?php if( have_rows('dashboard_design_slider') ): while( have_rows('dashboard_design_slider') ): the_row(); ?>
                  <li class="lp-awards-list__item newimg">
                     <div class="award-info position-relative">
                        <img class="img mb-3" src="<?php the_sub_field('slider_image') ?>"alt="logo">
                     </div>
                  </li>
                  <?php endwhile; endif; ?>
                 
               </ul>
            </div>
         </div>
      </div>
   </div>
</section>

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
      <!--08-->
      <section class="sec-footer-trans">
        <div class="container z-1">
          <div class="row"> 
            <div class="col-12 col-md-11 col-lg-10 mx-auto">
              <div class="py-70 px-3 data-scroll" style="background: #221429;">
                <div class="d-flex align-items-center justify-content-center">
                  <div class="col-12 col-md-8 col-lg-8 px-0 d-inline-block clr-white text-center"> 
                    <div class="mb-45"><span class="d-block fnt-24 mb-2 pb-2 mb-md-4 pb-md-0">Want impactful data insights?</span>
                      <h2 class="fnt-50 fnt-800 clr-white">Let's talk about your Data Visualization needs.</h2>
                    </div><a class="web-btn web-btn--red" href="<?php echo site_url(); ?>/project-enquiry/">Get In Touch</a>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.19/jquery.touchSwipe.min.js"></script>
