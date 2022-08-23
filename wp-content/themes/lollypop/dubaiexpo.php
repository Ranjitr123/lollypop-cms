<?php
/**
 Template Name: Dubai Expo
 */

get_header();
?>
    
    <main class="main">
      <!--01-->
      <section class="sec-pd pb-0 sec-bnr">
        <div class="container"> 
          <div class="row">
            <div class="col-12 col-md-11 col-lg-10 mx-auto">
              <div class="row">
                <div class="col-12 col-md-11 offset-md-1">
                  <div class="page-head">
                    <h1 class="fnt-78 fnt-800 mb-3 mb-md-4 red-stroke red-stroke--small13 px-md-0"><?php the_field('banner_title');?></h1>
                    <p class="fnt-24 col-md-10 col-lg-8 px-0"><?php the_field('banner_content');?></p>
                  </div>
                </div>
              </div>
              <div class="reveal"><img class="wpdm-img" src="<?php the_field('banner_image');?>"></div>
            </div>
          </div>
        </div>
      </section>
      <!--02-->
      <section class="sec-pd">
        <div class="container">
          <div class="row"> 
            <div class="col-12 col-md-9 col-lg-7 mx-auto">
              <!-- Team profile-->
              <div class="row">
                <?php if( have_rows('expo_detail') ) : while( have_rows('expo_detail') ): the_row(); ?>
                <div class="col-12 col-md-4 mb-4 mb-md-0">
                  <div class="reveal h-100 team-profile-img"><img src="<?php the_sub_field('image');?>" alt="Anil Reddy. Founder &amp; Design director"></div>
                </div>
                <div class="col-12 col-md-8">
                  <div class="profile d-flex flex-column">
                    <div class="profile__about mb-2 mb-md-3"> 
                      <p class="fnt-24 data-scroll"><?php the_sub_field('content');?></p>
                    </div>
                    <div>
                      <h6 class="fnt-800 fnt-22 mb-0"><?php the_sub_field('name');?></h6>
                      <p class="fnt-14 m-0"><?php the_sub_field('positions');?></p>
                    </div>
                  </div>
                </div>
                <?php endwhile; endif; ?>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--03-->
      <section class="sec-pd"> 
        <div class="container"> 
          <div class="row"> 
            <div class="col-12 col-md-9 col-lg-7 mx-auto">
              <div class="mb-4 pb-md-2 col-md-11 px-0">
                <h3 class="fnt-50 fnt-800 mb-4 data-scroll"><?php the_field('expo_tips_heading');?></h3>
              </div>
              <ul class="px-0 values-list row justify-content-between mb-0"> 
               <?php if( have_rows('expo_tips_list') ) : while( have_rows('expo_tips_list') ): the_row(); ?>
                <li class="values-list__item col-12 col-md-5 data-scroll"> 
                  <h6 class="fnt-800 mb-1"><?php the_sub_field('title');?></h6>
                  <p class="col-11 col-lg-10 px-0 mb-0"><?php the_sub_field('content');?></p>
                </li>
                 <?php endwhile; endif; ?>
               
              </ul><a class="clr-second mt-4 mt-md-5 d-inline-block fnt-14 data-scroll hvr-line" href="<?php echo site_url(); ?>/contact-us/">Get in Touch</a>
            </div>
          </div>
        </div>
      </section>
      <!--04-->
      <section class="sec-pd"> 
        <div class="container"> 
          <div class="row"> 
            <div class="col-12 col-md-9 col-lg-7 mx-auto">
              <div class="mb-4 pb-md-2 col-md-11 px-0">
                <h3 class="fnt-50 fnt-800 mb-4 data-scroll"><?php the_field('about_dubai_heading');?></h3>
              </div>
              <ul class="three-list row p-0 mb-0">
               <?php if( have_rows('about_dubai_list') ) : while( have_rows('about_dubai_list') ): the_row(); ?>
                <li class="three-list__el col-12 col-md-4"> 
                  <h6 class="fnt-18 fnt-800 mb-0"><?php the_sub_field('title');?></h6>
                  <p class="fnt-12 m-0 col-8 col-md-12 px-0"><?php the_sub_field('content');?></p>
                </li>
                 <?php endwhile; endif; ?>
                
              </ul>
            </div>
          </div>
        </div>
      </section>
      <!--05-->
      <section class="sec-pd sec-pb"> 
        <div class="container"> 
          <div class="row"> 
            <div class="col-12 col-md-9 col-lg-7 mx-auto">
              <div class="mb-4 pb-md-2 col-md-11 px-0">
                <h3 class="fnt-50 fnt-800 mb-4 data-scroll"><?php the_field('company_heading');?></h3>
              </div>
            </div>
          </div>
          <div class="row"> 
            <div class="col-12 col-md-11 col-lg-10 mx-auto">
              <ul class="px-0 mb-0 thing-list row single-mb-slider">
               <?php if( have_rows('experience_list') ) : while( have_rows('experience_list') ): the_row(); ?>
                <li class="thing-list__item col-12 col-md-4"> 
                  <div class="disc"><span class="disc__stroke"> </span>
                    <h4 class="fnt-20 fnt-800"><?php the_sub_field('title');?></h4>
                    <p class="fnt-14 mb-0"><?php the_sub_field('content');?></p>
                  </div>
                </li>
                 <?php endwhile; endif; ?>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <!--06-->
      <!-- AWARS-->
      <section class="sec-pd sec-pt sec-pb" id="fifth" style="background: #221429;">
        <div class="container z-1">
          <div class="row"> 
            <div class="col-12 col-md-10 col-lg-8 mx-auto mb-4 pb-2 mb-md-0 pb-md-0">
              <div class="row mb-45 justify-content-between">
                <div class="col-md-6 col-lg-8 mb-4 mb-md-0 fluid-offset"> 
                  <div class="lp-awards__left">
                    <h2 class="fnt-50 l-3 clr-white fnt-800 data-scroll">We are a bunch of restless, go-getters, imaginative & berserk designers!</h2><span class="fnt-24 clr-white my-4 d-block max-width-480 data-scroll">We're a group of 180+ creative minds spread across 6+ global locations, touching billions of lives through design.</span>
                  </div>
                  <div class="px-0 d-flex flex-wrap culture-slider-nav mb-35 data-scroll"><a class="culture-slider-nav__item hvr hvr--white fnt-16 fnt-400 clr-white" href="<?php echo site_url(); ?>">India</a><a class="culture-slider-nav__item hvr hvr--white fnt-16 fnt-400 clr-white" href="<?php echo site_url(); ?>/usa/">USA</a><a class="culture-slider-nav__item hvr hvr--white fnt-16 fnt-400 clr-white" href="<?php echo site_url(); ?>/uae/">Dubai</a><a class="culture-slider-nav__item hvr hvr--white fnt-16 fnt-400 clr-white" href="<?php echo site_url(); ?>/vietnam/">Vietnam</a></div><a class="clr-second fnt-14 hvr-line mb-4 mb-lg-0 d-inline-block data-scroll" href="<?php echo site_url(); ?>/about-us/">Learn more about us</a>
                </div>
                <div class="col-12 col-md-3 d-flex align-items-center justify-content-center">
                 <div class="h-100 d-flex align-items-center justify-content-center" id="award">
                 <?php if( have_rows('winners') ) : while( have_rows('winners') ): the_row(); ?>
                 <div class="award__item">
                  <div class="lp-awards__right text-lg-center h-100 d-flex align-items-center justify-content-md-end">
                    <div class="d-inline-block ml-md-auto"><img class="icon-awards mx-auto" src="<?php the_sub_field('image'); ?>" alt="Awards">
                      <div class="d-flex flex-column mx-lg-auto text-center">
                        <h5 class="fnt-16 my-2 clr-white"><?php the_sub_field('title'); ?></h5>
                        <p class="fnt-12 max-width-100 mx-lg-auto clr-white"><?php the_sub_field('content'); ?></p>
                      </div>
                    </div>
                  </div>
                  </div>
                   <?php endwhile; endif; ?>
                  </div>
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
                <li class="lp-awards-list__item col-12">
                  <div class="award-info"><img class="img mb-3" src="<?php the_sub_field('image') ?>">
                    <div class="col-12 col-md-8 px-0"><span class="fnt-14 clr-white d-block mb-1"><?php the_sub_field('location_name') ?></span><span class="d-block mb-0 fnt-18 clr-white"><?php the_sub_field('content') ?></span></div>
                  </div>
                </li>
                  <?php endwhile; endif; ?>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <!--07-->
      <section class="sec-pd sec-pt"> 
        <div class="container"> 
          <div class="row"> 
            <div class="col-12 col-md-10 col-lg-9 mx-auto">
              <div class="fade-img-list d-flex flex-wrap">
                <div class="fade-img-list__item">
                  <ul class="img-fade-out px-0 mb-0 fade-img">
                    <?php if( have_rows('dubai_slider_1') ) : while( have_rows('dubai_slider_1') ): the_row(); ?>
                    <li class="img-fade-out__item"> <img class="img" src="<?php the_sub_field('image');?>"></li>
                    <?php endwhile; endif; ?>
                  </ul>
                </div>
                <div class="fade-img-list__item">
                  <ul class="img-fade-out px-0 mb-0 fade-img">
                   <?php if( have_rows('dubai_slider_2') ) : while( have_rows('dubai_slider_2') ): the_row(); ?>
                    <li class="img-fade-out__item"> <img class="img" src="<?php the_sub_field('image');?>"></li>
                     <?php endwhile; endif; ?>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--08-->
      <section class="sec-pd sec-pb">
        <div class="container">
          <div class="row"> 
            <div class="col-md-10 col-lg-8 mx-auto">
              <!-- White papers-->
              <ul class="px-0 home-artical-list">
               <?php if( have_rows('dubai_expo_blog') ) : while( have_rows('dubai_expo_blog') ): the_row(); ?>
                <li class="home-artical-list__item"> <a class="home-artical" href="<?php the_sub_field('url');?>">
                    <div class="row">
                      <div class="col-6 col-md-3"><span class="text-uppercase d-block d-md-none mb-2 fnt-12 fnt-800">Interesting Read</span>
                        <div class="reveal"> <img class="home-artical-img mb-3 mb-md-0" src="<?php the_sub_field('image');?>"></div>
                      </div>
                      <div class="col-12 col-md-8">
                        <div class="px-lg-4"><span class="text-uppercase d-none d-md-block mb-2 fnt-12 fnt-800">Interesting Read</span>
                          <h3 class="fnt-30 fnt-800 mb-2 pb-lg-1"><?php the_sub_field('title');?></h3>
                          <p class="clr-gray col-lg-11 mt-1 mt-md-0 mb-1 mb-md-3"><?php the_sub_field('content');?></p><span class="d-block fnt-12">Published on: <?php the_sub_field('published_date');?></span>
                        </div>
                      </div>
                    </div></a></li>
                    <?php endwhile; endif; ?>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <!--09-->
      <section class="sec-pd sec-pb">
        <div class="container"> 
          <div class="row">
            <div class="col-12 col-md-11 col-lg-10 mx-auto"> 
              <div class="faq-el">
                <div class="faq-el__head mb-40"><span class="d-block text-uppercase">faq</span>
                  <h2 class="fnt-50 fnt-800 col-md-10 col-lg-7 col-xl-6 px-0 mb-0"><?php the_field('faq_heading');?></h2>
                </div>
                <div class="faq-el__body"> 
                  <ul class="px-0 mb-0 faq-ac row justify-content-between">
                    <?php if( have_rows('faq') ) : while( have_rows('faq') ): the_row(); ?>
                    <li class="faq-ac__item col-12">
                      <div class="f-accordion">
                        <div class="f-accordion__head">
                          <h6 class="fnt-16 fnt-800"><?php the_sub_field('title');?></h6>
                        </div>
                        <div class="f-accordion__body"> 
                          <p class="fnt-16 mb-0"><?php the_sub_field('content');?></p>
                        </div>
                      </div>
                    </li>
                     <?php endwhile; endif; ?>
                    
                  </ul>
                </div>
              </div>
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
                    <div class="mb-45"><span class="d-block fnt-24 mb-2 pb-2 mb-md-4 pb-md-0">Let’s grab a coffee!</span>
                      <h2 class="fnt-50 fnt-800 clr-white">Acheive great success at Dubai Expo 2020</h2>
                    </div><a class="web-btn web-btn--red" href="#">Get in Touch</a>
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