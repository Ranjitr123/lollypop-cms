
<?php
/**
 Template Name: Process
 */

get_header();
?>
<style>
@media (max-width: 767px) {
	.tab-section1-content1 .tab-section1-content1__item{
		margin-bottom: 40px;
	}

	.tab-section1-content1 .tab-section1-content1__item:last-child {
		margin-bottom: 0;
	}

}

@media (min-width: 768px) {
	.tab-section1-content1 .tab-section1-content1__item {
			margin-bottom: 90px;
		
		}

	.tab-section1-content1 .tab-section1-content1__item:last-child {
		margin-bottom: 0;
	}

}
span.d-block.mb-3.data-scroll.fnt-24 {
    margin-left: 30px;
}
ol.step-list.step-list--leadingZero.mb-0 {
    margin-left: 30px;
}
.ps-md-5.data-scroll {
    margin-left: -7px;
}
@media (min-width: 768px){
.ps-md-5 {
    padding-left: 2.5rem!important;
}}
 </style>
<main class="main">
      <!--01-->
      <section class="sec-pd sec-bnr">
        <div class="container"> 
          <div class="row">
            <div class="col-12 col-md-11 col-lg-10 mx-auto"> 
              <div class="row"> 
                <div class="col-12 col-md-10 offset-md-1">
                  <div class="mb-50"><span class="d-block fnt-14 text-capitalize mb-2 clr-default">Process</span>
                   <?php if( have_rows('banner_content') ) : while( have_rows('banner_content') ): the_row(); ?>
                    <h1 class="fnt-50 fnt-800 mb-3 mb-md-4 red-stroke red-stroke--small13 px-0 col-12 col-md-10"><?php the_sub_field('title'); ?></h1>
                    <p class="fnt-24 col-md-10 col-lg-8 col-xl-7 px-0Crafting"><?php the_sub_field('content'); ?></p>
                     <?php endwhile; endif; ?>
                  </div>
		  <!-- Tab head-->
<div class="tab-section1">
                  <ul class="nav px-0 tab-head-item1 w-100 mb-lg-3 lollypop-tabs justify-content-between color-gray stickytab lollypop-tabs--vertical nav-pills me-3"  style="background: #f7f4f2">
                    <?php if( have_rows('tab_content') ) : while( have_rows('tab_content') ): the_row(); ?>
                    <li class="fnt-28 pt-4 fnt-800 nav-link tab-head-item1__name"style="cursor:pointer"> <span class="tab-tag d-block fnt-16"><?php the_sub_field('small_title'); ?></span><span class="fnt-800"><?php the_sub_field('tab_title'); ?></span></li>
                     <?php endwhile; endif; ?>
                  </ul>
                  <!-- Tab content-->
                  <div class="tab-content tab-section1-content1 tab-scroll-content">
                    <?php if( have_rows('tab_content') ) : while( have_rows('tab_content') ): the_row(); ?>
                    <div class="tab-section1-content1__item d-block">
                      <div>
                        <div class="bg-white pc-40 mb-120">
                          <div class="col-12 col-md-11 px-0">
                            <div class="mb-35">
                              <p class="fnt-24 data-scroll"><?php the_sub_field('description'); ?></p>
                            </div>
                            <ul class="text-list-3 row mb-r-80 px-0">
                              <?php if( have_rows('suited_time_line') ) : while( have_rows('suited_time_line') ): the_row(); ?>
                              <li class="text-list-3__item col-12 col-md-4 data-scroll"><span class="d-block">Suited for:</span>
                                <h6 class="fnt-18 fnt-800"><?php the_sub_field('suited'); ?></h6>
                              </li>
                              <li class="text-list-3__item col-12 col-md-4 data-scroll"><span class="d-block">Time lines:</span>
                                <h6 class="fnt-18 fnt-800"><?php the_sub_field('time_lines'); ?></h6>
                              </li>
                              <li class="text-list-3__item col-12 col-md-4 data-scroll"><span class="d-block">Engagement Mode:</span>
                                <h6 class="fnt-18 fnt-800"><?php the_sub_field('engagement_mode'); ?></h6>
                              </li>
                              <?php endwhile; endif; ?>
                            </ul>
                            <div> 
                              <div class="mb-20">
                                <p class="fnt-14  mb-lg-4"><?php the_sub_field('client_content'); ?></p>
                              
                              <ul class="px-0 logo-list logo-list--3 row mb-40">
                                <?php if( have_rows('clients_logos') ) : while( have_rows('clients_logos') ): the_row(); ?>
                                <li class="logo-list__item col-4 data-scroll"><img class="img-fluid grayscale" src="<?php the_sub_field('logo'); ?>" width="136" height="32" alt="Image"></li>
                                <?php endwhile; endif; ?>
                              </ul>
                              </div>
                              <a class="d-inline-block clr-second fnt-14 hvr-line mt-2 mt-md-3" href="<?php the_sub_field('getin_touch_url'); ?>"><?php the_sub_field('get_in_touch_cta'); ?></a>
                            </div>
                          </div>
                        </div>
                        <div class="process-step">
                          <?php if( have_rows('activities') ) : while( have_rows('activities') ): the_row(); ?>
                          <div class="process-step__item">
                            <div class="process row"> 
                              <div class="process__head col-12 col-md-5">
                                <div class="sticky-desktop-tab data-scroll"><span class="d-block fnt-16"><?php the_sub_field('step_title'); ?></span>
                                  <h2 class="fnt-50 fnt-800 mb-2"><?php the_sub_field('title'); ?></h2>
                                  <p><?php the_sub_field('content'); ?></p>
                                </div>
                              </div>
                              <div class="process__body col-12 offset-md-1 col-md-6"><span class="d-block mb-3 data-scroll fnt-24">Activities</span>
                                <ol class="step-list step-list--leadingZero mb-0"> 
                                 <?php if( have_rows('activities_list') ) : while( have_rows('activities_list') ): the_row(); ?>
                                  <li class="step-list__item data-scroll">
                                    <h5 class="fnt-22 fnt-800 mb-1"><?php the_sub_field('title'); ?></h5>
                                    <p class="fnt-16 col-xl-12 px-0"><?php the_sub_field('content'); ?></p>
                                  </li>
                                  <?php endwhile; endif; ?>
                                 
                                </ol>
                                <div class="ps-md-5 data-scroll">
                                 <?php if( have_rows('expect') ) : while( have_rows('expect') ): the_row(); ?>
                                  <h5 class="d-block fnt-400 fnt-24 mb-1"><?php the_sub_field('title'); ?></h5>
                                  <p class="fnt-14 col-xl-12 px-0"><?php the_sub_field('content'); ?></p>
                                  <?php endwhile; endif; ?>
                                </div>
                              </div>
                            </div>
                          </div>
                           <?php endwhile; endif; ?>
                        </div>
                      <section class="sec-portfolio pb-0 pt-5">   
              <?php if( have_rows('projects') ) : while( have_rows('projects') ): the_row(); ?>
              <div class="row mt-5"> 
                <div class="col-12 col-md-12">
                   <a class="" href="<?php the_sub_field('url'); ?>">
                    <div class="mb-35 fluid-mb hover-img">
                <div class="reveal"><img class="portfolio-img" src="<?php the_sub_field('project_image'); ?>" alt="Image"></div>
              </div>
                   <div class="d-flex flex-wrap px-md-4 px-xl-5">
                    <div class="col-12 px-md-12 col-md-4 col-lg-3 mb-3 mb-md-0 d-flex flex-column"><span class="d-inline-block fnt-16 data-scroll mt-0 text-rpd portfolio-title"><?php the_sub_field('company_name'); ?></span></div>
                    <div class="col-12 px-md-12 col-md-8 data-scroll pb-md-3">
                      <div class="px-md-3">
                        <div class="mb-2 pb-lg-0">
                          <h2 class="fnt-40 fnt-800 mb-3"> <span class="d-block"><?php the_sub_field('title'); ?></span></h2>
                          <p><?php the_sub_field('content'); ?></p>
                        </div>
                      </div>
                       </div></div> </a>
                  <div class="px-md-4 px-xl-5">
                    <div class="col-12 px-md-12 col-md-5 offset-md-4 offset-lg-3">
                      <div class="px-md-3"><a class="data-scroll fnt-14 lp-link lp-link--pri hvr-line" href="<?php the_sub_field('url'); ?>">View Project</a></div>
                    </div>
                  </div>
                </div>
              </div>
              <?php endwhile; endif; ?>
                          </section>
                      </div>
                    </div>
                    <?php endwhile; endif; ?>
                   
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div></div>
      </section>
      <!--02-->
      
      <!--03-->
      <section class="sec-footer-trans">
        <div class="container z-1">
          <div class="row"> 
            <div class="col-12 col-md-11 col-lg-10 mx-auto">
              <div class="py-70 px-3 data-scroll" style="background: #221429;">
                <div class="d-flex align-items-center justify-content-center">
                  <div class="col-12 col-md-8 col-lg-7 px-0 d-inline-block clr-white text-center"> 
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
    $(document).ready(function(){
$(".tab-pane:first-child").addClass("active")
$(".lollypop-tabs button:first-child").addClass("active")
    });
$(window).on('scroll', function () {

	  $('.tab-section1-content1__item').each(function () {
		        var cln = $(this).index();
			      var $this = $(this);
			      var top_of_element = ($(this).offset().top - 200);
			            var bottom_of_element = ($(this).offset().top + $(this).outerHeight());
			            var bottom_of_screen = $(window).scrollTop() + $(window).innerHeight();
				          var top_of_screen = ($(window).scrollTop());

				          if(top_of_screen > top_of_element) {
						            $(".tab-head-item1").find(".tab-head-item1__name").removeClass("active")
								              $(".tab-head-item1").find(".tab-head-item1__name").eq(cln).addClass("active");  
							          }
					    });
	  });


$('body').on('click', '.tab-head-item1__name', function() {
	  var $index = $(this).index();
	    var $scrollIndex = $(this).parents(".tab-section1").find('.tab-scroll-content').find('.tab-section1-content1__item').eq($index);
	    $(this).parents(".tab-section1").find('.tab-scroll-content').find('.tab-section1-content1__item').removeClass('active');
	      $(this).parents(".tab-section1").find('.tab-scroll-content').find('.tab-section1-content1__item').eq($index).addClass('active');


	        $('html, body').animate({
		      scrollTop: $($scrollIndex).offset().top - 150,

			          }, 150);
		});
</script>


<script type="application/ld+json">
{
	 "@context": "https://schema.org",
		  "@type": "ImageObject",
		  "image": {
		                  "@type": "ImageObject",
					                  "url": "https://lollypop.design/wp-content/uploads/2021/12/MyVI.png",
							                  "width": "768",
									                  "height": "472"
											          }
}
</script>

<script type="application/ld+json">
    {
	            "@context": "https://schema.org",
			    	
			    	"headline":"Tailored to deliver the best for your business",
					"description":"A flexible and adaptive process that helps businesses launch and scale quickly.",
						"url":"https://lollypop.design/",
						        "@type": "Webpage",
							        "image": {
								                "@type": "ImageObject",
											                "url": "https://lollypop.design/wp-content/uploads/2021/12/MyVI.png",
													                "width": "768",
															                "height": "472"
																	        }
		        }
    </script>
<?php
get_footer();
?>
