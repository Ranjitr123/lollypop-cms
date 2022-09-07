<?php
/**
 Template Name: Team
 */

get_header();
?>

 <main class="main">
      <!--01-->
      <section class="sec-pd sec-bnr">
        <div class="container"> 
          <div class="row">
            <div class="col-12 col-md-11 col-lg-10 mx-auto">
              <div class="row">
                <div class="col-12 col-md-11 offset-md-1">
                  <div class="mb-r-80"> <span class="d-block fnt-14 text-capitalize mb-2 clr-default">team</span>
                    <h1 class="fnt-50 fnt-800 mb-3 mb-md-4 red-stroke red-stroke--small13 px-md-0"><span class="d-block">Dream-Catcher,</span><span class="d-block">Fanatic-Designer, Rider</span></h1>
                  </div>
                  <!-- Team profile-->
                  <div class="row mb-r-120"> 
                   <?php 
                            $args = array(
                                'post_type'=>'team', // Your post type name
                                'posts_per_page' => 1,
                                'category_name' => 'top-team',                           
                                
                            );
                    $team = new WP_Query( $args );
                    if ( $team->have_posts() ) : while ( $team->have_posts() ) : $team->the_post(); ?>
                    <div class="col-12 col-md-5 mb-4 mb-md-0">
                      <div class="reveal team-profile-img"><img src="<?php echo the_post_thumbnail_url( 'post_thumbnail' ) ?>" alt="Anil Reddy. Founder &amp; Design director"></div>
                    </div>
                    <div class="col-12 col-md-7"> 
                      <div class="profile d-flex flex-column">
                        <div class="profile__name data-scroll mb-3 mb-md-4">
                          <div class="d-flex flex-wrap align-items-center"> 
                            <h4 class="fnt-28 fnt-800 text-capitalize mb-0 me-3 clr-second"><?php the_title() ?></h4>
                            <div class="d-flex align-items-center flex-wrap"><a class="d-flex align-items-center me-2" href="<?php the_field('linkedin_url'); ?>"><i class="icon-lnkin"> </i></a><a class="d-flex align-items-center" href="<?php the_field('instagram_url'); ?>"><i class="icon-insta"></i></a></div>
                          </div><span class="fnt-14 clr-black-27f"><?php the_field('destination'); ?></span>
                        </div>
                        <div class="profile__about"> 
                          <div class="fnt-16 clr-black-354 data-scroll"><?php the_content(); ?></div>
                        </div>
                        <div><a class="data-scroll d-inline-block fnt-14 clr-second hvr-line" href="mailto:<?php the_field('drop_a_mail'); ?>">Drop a mail</a></div>
                      </div>
                    </div>
                     <?php endwhile; endif;?>
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