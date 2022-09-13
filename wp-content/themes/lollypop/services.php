<?php
/**
 Template Name: Services
 */

get_header();
?>
<style>
.serveice-a:hover h6{color: #fd2e35;}
.serveice-a h6{position:relative;}
.serveice-a h6:before{position: absolute;
    content: "";
    top: 32px;
    left: 0;
    width: 25%;
    height: 2px;
    background-color: #000;
    opacity: 1;
    -webkit-transition: .3s ease-in-out;
    -o-transition: .3s ease-in-out;
    transition: .3s ease-in-out;}
.serveice-a:hover h6:before{position: absolute;
    content: "";
   top: 32px;
    left: 0;
    width: 100%;
    height: 2px;
    background-color: #fd2e35;
    opacity: 1;
    -webkit-transition: .3s ease-in-out;
    -o-transition: .3s ease-in-out;
    transition: .3s ease-in-out; }
</style>
 <main class="main">
      <!--01-->
      <section class="sec-pd pb-0 sec-bnr">
        <div class="container"> 
          <div class="row">
            <div class="col-12 col-md-11 col-lg-10 mx-auto"> 
              <div class="row"> 
                <div class="col-12 col-md-11 offset-md-1">
                  <div class="page-head"><span class="d-block fnt-14 text-capitalize mb-2 clr-default">Services</span>
                    <h1 class="fnt-50 fnt-800 mb-3 mb-md-4 red-stroke red-stroke--small13 px-md-0">
                     <?php the_field('banner_heading'); ?></h1>
                    <p class="fnt-24 col-md-10 col-lg-6"><?php the_field('banner_content'); ?>
</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--02-->
      <section> 
        <div class="container"> 
          <div class="row"> 
            <div class="col-12"> 
              <ul class="px-0 case-img-list row single-mb-slider">
                <?php if( have_rows('case_studies') ) : while( have_rows('case_studies') ): the_row(); ?>
                <li class="case-img-list__item col-12 col-md-4">
                  <div class="case-std img-hvr"><img class="img" src="<?php the_sub_field('thumbnail_image'); ?>">
                    <div class="case-std__info">
                      <h6 class="fnt-16 fnt-800 mb-1"><?php the_sub_field('title'); ?></h6>
                      <p class="fnt-14 mb-3"><?php echo wp_trim_words(get_sub_field('content'), 10); ?></p>
                      <div class="mt-auto"> <a class="hvr-line clr-second fnt-14" href="<?php the_sub_field('url'); ?>"><?php the_sub_field('cta_name'); ?></a></div>
                    </div>
                  </div>
                </li>
                    <?php endwhile; endif; ?>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <!--03-->
      <section class="sec-pd">  
        <div class="container"> 
          <div class="row"> 
            <div class="col-12 col-md-10 col-lg-8 mx-auto">
              <div class="mb-4 pb-md-2 colmd-11 px-0">
                <h3 class="fnt-40 fnt-800 data-scroll mb-2 mb-md-3"><?php the_field('service_heading'); ?></h3>
                <p class="fnt-24 col-md-7 px-0 data-scroll"><?php the_field('service_content'); ?></p>
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
      </section>
      <!--04-->
      <section class="sec-pd sec-tab">
        <div class="container"> 
          <div class="row"> 
            <div class="col-12 col-md-10 col-lg-8 mx-auto"> 
              <div class="tab-section"> 
                <div class="tab-section__head data-scroll stickytab mb-0"> 
                  <ul class="px-0 tab-head-item page-head-tab d-flex justify-content-between page-head-tab" id="menu-center">
                    <?php if( have_rows('services_tab') ) : while( have_rows('services_tab') ): the_row(); ?>
                    <li class="tab-head-item__name fnt-50 fnt-800" id="<?php the_sub_field('tab_title'); ?>"><?php the_sub_field('tab_title'); ?><!--<a class="tab-a" href="#<?php the_sub_field('tab_title'); ?>"><?php the_sub_field('tab_title'); ?></a>--></li>
                    <?php  endwhile; endif; ?>
                   
                  </ul>
                </div>
                <div class="tab-section-content tab-scroll-content">
                  <?php if( have_rows('services_tab') ) : while( have_rows('services_tab') ): the_row(); ?>
                  <div class="tab-section-content__item d-block" id="<?php the_sub_field('tab_title'); ?>">
                    <div class="tab-div">
                      <div class="mb-5 data-scroll">
                        <p class="fnt-24 col-md-11 col-lg-10 px-0"><?php the_sub_field('tab_content'); ?></p>
                      </div>
                      <ul class="px-0 common-list row justify-content-between"> 
                       <?php if( have_rows('list') ) : while( have_rows('list') ): the_row(); ?>
			<li class="common-list__item col-12 col-md-5 data-scroll">

<div class="d-flex flex-column h-100">
<?php if(get_sub_field('url') !='') { ?>
<a class="serveice-a" href="<?php the_sub_field('url'); ?>">
                              <h6 class="fnt-800 mb-1 d-inline-block"><?php the_sub_field('title'); ?></h6>
                              <div class="">
                              <p class="col-11 col-lg-10 px-0"><?php the_sub_field('content'); ?></p>
                            </div>
                           </a>
                          
<?php } else { ?>
                        
                            
                              <h6 class="fnt-800 mb-1"><?php the_sub_field('title'); ?></h6>
                              <div class="">
                              <p class="col-11 col-lg-10 px-0"><?php the_sub_field('content'); ?></p>
                            </div>
<?php } ?>
	  </div>

                        </li>
                       <?php  endwhile; endif; ?>
                       
                      </ul>
                    </div>
                    <div class="tab-div">
                      <div class="mb-5"> 
                        <h5 class="fnt-40 fnt-800 data-scroll col-md-5 col-lg-7 px-0"><?php the_sub_field('client_content'); ?></h5>
                      </div>
                      <ul class="px-0 logo-list row">
                       <?php if( have_rows('client_logo') ) : while( have_rows('client_logo') ): the_row(); ?>
                        <li class="logo-list__item col-4 col-md-3 data-scroll"><img class="img-fluid grayscale" src="<?php the_sub_field('logo'); ?>" ></li>
                         <?php  endwhile; endif; ?>
                        
                      </ul><a class="data-scroll hvr-line fnt-14 clr-second mt-5 d-inline-block" href="<?php echo site_url(); ?>/clients/">View Our Clients</a>
                    </div>
                     <?php if( have_rows('research_expert') ) : while( have_rows('research_expert') ): the_row(); ?>
                    <div class="tab-div"> 
                      <div class="expert-member d-flex flex-wrap data-scroll mb-md-5 pb-md-5"> 
                        <div class="col-12 col-md-4 mb-4 mb-md-0">
                          <div class="expert-member__img text-center">
                            <div class="data-scroll"><img class="img-fluid mb-2 pb-1" src="<?php the_sub_field('image'); ?>"></div>
                            <h6 class="fnt-22 fnt-800 clr-white mb-0"><?php the_sub_field('name'); ?></h6><span class="fnt-14 clr-white d-inline-block"><?php the_sub_field('position'); ?></span>
                          </div>
                        </div>
                        <div class="col-12 col-md-8">
                          <div class="ps-md-4 ps-lg-5 expert-member__info">
                            <h3 class="fnt-40 clr-white fnt-800 mb-2"><?php the_sub_field('title'); ?></h3>
                            <p class="fnt-16 clr-white mb-4 pb-1"><?php the_sub_field('content'); ?></p><a class="web-btn web-btn--primary text-capitalize fnt-800imp" href="<?php the_sub_field('drop_mail'); ?>" >Let's Talk</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <?php  endwhile; endif; ?>
                  </div>
                   <?php  endwhile; endif; ?>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

<script>

</script>
<script>


$(window).on('scroll', function () {

$('.tab-section-content__item').each(function () {
    var cln = $(this).index();
    var $this = $(this);
    var top_of_element = ($(this).offset().top - 250);
    var bottom_of_element = ($(this).offset().top + $(this).outerHeight());
    var bottom_of_screen = $(window).scrollTop() + $(window).innerHeight();
    var top_of_screen = ($(window).scrollTop());

    if(top_of_screen > top_of_element) {
        $(".tab-head-item").find(".tab-head-item__name").removeClass("active")
        $(".tab-head-item").find(".tab-head-item__name").eq(cln).addClass("active");  
    }
});
});



</script>


<script type="application/ld+json">
{
	"@context": "https://schema.org/",
	"@type": "Service",
	"serviceType": "IT services",
		        "provider": {
			    "@type": "Corporation",
				        "name": "Lollypop design"
					  },
					    "hasOfferCatalog": {
					        "@type": "OfferCatalog",
							    "name": "IT services",
							        "itemListElement": [
									      {
										              "@type": "OfferCatalog",
												              "name": "IT Services",
													              "itemListElement": [
															                {
																		            "@type": "Offer",
																				                "itemOffered": {
																						              "@type": "Service",
																								                    "name": "Heuristic Analysis",
																										                  "Description":"Expert reviews to check how usability of an existing product holds up against a set of predetermined design principles."
																												              }
																			              },
																				                {
																							            "@type": "Offer",
																									                "itemOffered": {
																											              "@type": "Service",
																													                    "name": "Design Audit",
																															                   "Description":"Conducting an evaluation to check various aspects of the quality of design of an existing product."
																																	               }
																								              },
																									                {
																												            "@type": "Offer",
																														                "itemOffered": {
																																              "@type": "Service",
																																		                    "name": "Usability Testing",
																																				                   "Description":"Evaluating a product or service by testing it in real time with target users, to collect qualitative & quantitative data."
																																						               }
																													              },
																														                {
																																	            "@type": "Offer",
																																			                "itemOffered": {
																																					              "@type": "Service",
																																							                    "name": "Ethnographic Research",
																																									                   "Description":"A qualitative method involving observing users in the context of their real technical and social environment."
																																											               }
																																		              },
																																			                {
																																						            "@type": "Offer",
																																								                "itemOffered": {
																																										              "@type": "Service",
																																												                    "name": "Emerging Trends",
																																														                   "Description":"Seeing how we can design to incorporate all the latest advancements in technology, in all of our projects."
																																																               }
																																							              },
																																								                {
																																											            "@type": "Offer",
																																													                "itemOffered": {
																																															              "@type": "Service",
																																																	                    "name": "UX Research",
																																																			                   "Description":"Studying and evaluating the target audience while understanding their behavioural patterns, experience, interaction, and emotion."
																																																					               }
																																												              }
											              ]
													            },
														          {
																          "@type": "OfferCatalog",
																		          "name": "services",
																			          "itemListElement": [
																					            {
																							                "@type": "Offer",
																										            "itemOffered": {
																											                  "@type": "Service",
																														                "name": "Digital Branding",
																																              "Description":"A strategic process to help your brand establish a platform-agnostic identity and presence."
																																	                  }
																									          },
																											            {
																													                "@type": "Offer",
																																            "itemOffered": {
																																	                  "@type": "Service",
																																				                "name": "User Experience Design",
																																						              "Description":"Creating holistic, usable and well structured digital experiences that incorporate best design practices and standards."
																																							                  }
																															          },
																																            {
																																		                "@type": "Offer",
																																					            "itemOffered": {
																																						                  "@type": "Service",
																																									                "name": "User Interface Design",
																																											              "Description":"Designing aesthetic, delightful and visually appealing products that are functional and enjoyable to use."
																																												                  }
																																				          },
																																					            {
																																							                "@type": "Offer",
																																										            "itemOffered": {
																																											                  "@type": "Service",
																																														                "name": "Interaction Design",
																																																              "Description":"Simplifying human computer interactions to yield intuitive, seamless and task-oriented outcomes."
																																																	                  }
																																									          },
																																										            {
																																												                "@type": "Offer",
																																															            "itemOffered": {
																																																                  "@type": "Service",
																																																			                "name": "Digital Prototyping",
																																																					              "Description":"Making a prototype of the final product and testing it in real time to get inputs and reliable user feedback."
																																																						                  }
																																														          },
																																															            {
																																																	                "@type": "Offer",
																																																				            "itemOffered": {
																																																					                  "@type": "Service",
																																																								                "name": "Motion Graphics",
																																																										              "Description":"Integrating input oriented movements in real time, to enhance the quality of interactions within a product."
																																																											                  }
																																																			          }
																	            ,
																			              {
																					                  "@type": "Offer",
																								              "itemOffered": {
																									                    "@type": "Service",
																												                  "name": "Illustrations and Iconography",
																														                "Description":"Crafting stunning, visually consistent sets of icon styles and illustrations, in line with all relevant brand guidelines."
																																            }
																							            }
																	          ]
																			        },
																					       {
																						               "@type": "OfferCatalog",
																								               "name": "services",
																									               "itemListElement": [
																											                 {
																														             "@type": "Offer",
																																                 "itemOffered": {
																																		               "@type": "Service",
																																				                     "name": "Front-End Development",
																																						                   "Description":"Implementing the best combination of technologies (full-stack, mean stack, flutter, native-OS) for your project."
																																								               }
																															               },
																																	                 {
																																				             "@type": "Offer",
																																						                 "itemOffered": {
																																								               "@type": "Service",
																																										                     "name": "Web Applications",
																																												                   "Description":"Implementing the perfect blend of agile development to create dynamic and responsive web applications."
																																														               }
																																					               },
																																						                 {
																																									             "@type": "Offer",
																																											                 "itemOffered": {
																																													               "@type": "Service",
																																															                     "name": "Mobile Applications",
																																																	                   "Description":"Leveraging the latest technologies to develop robust and scalable hybrid and native mobile applications."
																																																			               }
																																										               },
																																											                 {
																																														             "@type": "Offer",
																																																                 "itemOffered": {
																																																		               "@type": "Service",
																																																				                     "name": "Custom Applications",
																																																						                   "Description":"Implementing the best combination of technologies to develop interfaces for wearables, dashboards and IOTs."
																																																								               }
																																															               },
																																																                 {
																																																			             "@type": "Offer",
																																																					                 "itemOffered": {
																																																							               "@type": "Service",
																																																									                     "name": "SAAS Implementation",
																																																											                   "Description":"Using a cloud-first approach to create anytime-anywhere access based scalable SAAS applications."
																																																													               }
																																																				               },
																																																					                 {
																																																								             "@type": "Offer",
																																																										                 "itemOffered": {
																																																												               "@type": "Service",
																																																														                     "name": "CMS Integration",
																																																																                   "Description":"Building a platform that is accessible and can be managed by the customers in order to create, manage and modify digital content on their website easily."
																																																																		               }
																																																									               }
																							               
																							               ]
																									             }
						    ]
							      }
}
</script>

<script type="application/ld+json">
    {
	    "@context": "https://schema.org",
	    "@type": "Webpage",
	    "headline":"Research for Insights. Design for Users. Build to Scale.",
	    "description":"We thrive at the intersection of design and business, and craft beautiful and functional experiences that can be launched quickly.",
	    "url":"https://lollypop.design/services/"
    }
    </script>



<?php
get_footer();
?>
