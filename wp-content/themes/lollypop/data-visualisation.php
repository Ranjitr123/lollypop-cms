<?php
/**
 *  Template Name: Data Visualisation
 *   */

get_header();
?>
<style>
    .list-disk li{list-style: disc !important;}
    
    @media only screen and (min-width: 768px) {
.cl-logo img {
    max-width: 100%!important;
}
    }
	.data_red {
    color: #FD2E35;
    font-weight: 800;
    font-size: 16px;
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
            <div class="col-12 col-md-11 col-lg-10 mx-auto">
              <div class="row mb-80">
                <div class="col-12 col-md-9 mx-auto d-flex flex-column align-items-center">
                  <div class="mb-50 text-center mx-auto mb-4">
                    <h1 class="fnt-50 fnt-800"> <span class="d-block"><?php echo get_field('title1')?></span>
                    <!--  <div class="quote d-flex justify-content-center flex-wrap"><span class="clr-second quote__item quotes">Strengthen your Brand</span><span class="clr-second quote__item quotes">In-depth Insight</span><span class="clr-second quote__item quotes">Better Positioning</span><span class="clr-second quote__item quotes">Increase your profits</span><span class="clr-second quote__item quotes">To Build Trust</span></div>-->
                    </h1>
                    <p class="fnt-24 mt-4"><?php echo get_field('description')?></p>
                  </div>
                </div>
              </div>
	      <div class="mb-70">
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
              
			  <div class="col-12 col-md-8 col-lg-7 mx-auto px-0 text-center">
                <div class="mb-60">
                  <p class="fnt-24"><?php echo get_field('titles')?></p>
                </div>
                <ul class="px-0 mb-0 clients-logo row justify-content-center">
					<?php while(have_rows('social_icons_section')){the_row();?>
                  <li class="clients-logo__item col-4 col-md-4 data-scroll">
                    <div class="cl-logo text-center h-100 d-flex align-items-center"><img class="img-fluid" src="<?php echo get_sub_field('image')?>" alt="Image" width="240" height="56"></div>
                  </li>
					<?php } ?> 
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--02-->
      <section class="sec-pd sec-md-pt" id="sixth">
        <div class="container">
          <div class="row"> 
            <div class="col-12 col-md-10  mx-auto">
              <div class="mb-90 data-scroll">
                <h2 class="fnt-50 fnt-800 mb-16 col-md-6"><?php echo get_field('heading')?></h2>
					<p class="fnt-24 col-md-7 col-lg-7 px-0"><?php echo get_field('content')?></p>
              </div>
            </div>
            <div class="col-12 col-md-10 mx-auto">
              <ul class="indutstry-list px-0 ul-mb-60 row justify-content-between"> 
				<?php while(have_rows('content_section')){the_row();?>
                <li class="indutstry-list__item col-12 col-md-6 data-scroll"> 
                  <div class="industry col-10 col-md-11 col-lg-10 col-xl-8 px-0"> 
                    <h3 class="fnt-22 fnt-800 mb-2"><?php echo get_sub_field('title')?></h3>
                    <p class="mb-22 col-12 col-md-9"><?php echo get_sub_field('content')?></p>
                  </div>
                </li>
                <?php } ?>
              </ul>
			  <p class="para">
							<?php while(have_rows('bottom_section')){the_row();?>
								<span class="data_red"><?php echo get_sub_field('red_text1')?> </span><?php echo get_sub_field('black_text')?> <strong><a class="clr-second fnt-14 hvr-line data-scroll" href="<?php echo site_url(); ?>/project-enquiry/"> Get in Touch</a></strong>
							<?php } ?> 	
							</p>
			  
            </div>
          </div>
        </div>
      </section>
      <!--03-->
      <section class="sec-pd sec-pt sec-pb" style="background: #221429;">
        <div class="container"> 
          <div class="row">
            <div class="col-12 col-md-11 col-lg-10 mx-auto">
              <div class="row"> 
                <div class="col-12 col-md-6 clr-white mb-4 mb-md-0">
                  <div class="sticky-desktop text-center text-md-left">
					<?php while(have_rows('left_section')){the_row();?>
                    <h3 class="fnt-40 fnt-800 mb-3 data-scroll"><?php echo get_sub_field('heading')?></h3>
                    <p class="fnt-24 data-scroll col-md-10"><?php echo get_sub_field('description')?></p>
					<?php } ?>
				  </div>
                </div>
                <div class="col-12 col-md-5 col-lg-4 offset-md-1 clr-white">
                  <ul class="design-audit-step px-0 mb-0"> 
					<?php while(have_rows('right_section')){the_row();?>
                    <li class="design-audit-step__item data-scroll"> 
                      <div class="da-step text-center text-md-left"> 
						<img src="<?php echo get_sub_field('icon')?>" class="img-fluid pb-2 m-0">
                        <h5 class="fnt-22 fnt-800 mb-2"><?php echo get_sub_field('title')?></h5>
                        <p class="fnt-18 fnt-500 col-8 col-md-9 mx-auto mx-md-0 px-0"><?php echo get_sub_field('content')?></p>
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
      <!--05-->
     <section class="sec-pd sec-md-pt" >
        <div class="container">
          <div class="row"> 
            <div class="col-12 col-md-10 col-lg-10 mx-auto">
              <div class="mb-90 data-scroll">
                <h2 class="fnt-50 fnt-800 mb-16 col-md-6"><?php echo get_field('service_heading')?></h2>
                <!--<p class="fnt-24 col-md-9 col-lg-7 px-0">At Lollypop we have been building successful digital products for more than half-a-decade. We have experience in applying Usability Testing methodologies for clients, across different industries.</p>-->
              </div>
            </div>
            <div class="col-12 col-md-10 col-lg-10 mx-auto">
              <ul class="indutstry-list px-0 ul-mb-60 row justify-content-between"> 
				<?php while(have_rows('service_content_section')){the_row();?>
                <li class="indutstry-list__item col-12 col-md-6 data-scroll"> 
                  <div class="industry col-10 col-md-11 col-lg-10 col-xl-8 px-0"> 
                    <h3 class="fnt-22 fnt-800 mb-2"><?php echo get_sub_field('service_title')?></h3>
                    <p class="mb-22"><?php echo get_sub_field('service_content')?></p>
                  </div>
                </li>
				<?php } ?>
                
              </ul><a class="clr-second fnt-14 hvr-line data-scroll" href="<?php echo site_url(); ?>/project-enquiry/">Get in Touch</a>
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
      <!--08-->
      <section class="sec-footer-trans">
        <div class="container z-1">
          <div class="row"> 
            <div class="col-12 col-md-11 col-lg-10 mx-auto">
              <div class="py-70 px-3 data-scroll" style="background: #221429;">
                <div class="d-flex align-items-center justify-content-center">
                  <div class="col-12 col-md-8 col-lg-7 px-0 d-inline-block clr-white text-center"> 
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
