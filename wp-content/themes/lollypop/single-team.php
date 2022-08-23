<?php


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
                  <div class="mb-r-80"><a href="<?php echo site_url(); ?>/about/"><span class="d-block fnt-14 text-capitalize mb-2 clr-default">team</span></a> 
                    <h1 class="fnt-50 fnt-800 mb-3 mb-md-4 red-stroke red-stroke--small13 px-md-0"><?php the_field('key_word'); ?></h1>
                  </div>
                  <!-- Team profile-->
                  <div class="row mb-r-120"> 
         
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
                   
                  </div>
                 
        
                    <!--<li class="team-view-btn__item col-6 col-md-5"><a class="team-nxt-view d-md-flex align-items-center" href="#">
                        <div class="reveal team-nxt-view__profile"> <img src="<?php the_field('thumbnail_image'); ?>"></div>
                        <div class="team-nxt-view__name">
                          <div class="d-inline-block">
                            <h4 class="m-0 fnt-22 fnt-800 data-scroll text-capitalize"><?php the_title(); ?></h4><span class="data-scroll fnt-14 clr-black-27f"><?php the_field('destination'); ?></span>
                          </div>
                        </div></a></li>-->
                        
                        <ul id="nav-above" class="navigation row team-view-btn px-0 mb-0 justify-content-between">
<li class="team-view-btn__item col-6 col-md-5">
            <div class="nav-previous">
               <?php 
                  $prevPost = get_previous_post(true);
if($prevPost) { ?>
                      <?php
                       $prevthumbnail = get_the_post_thumbnail($prevPost->ID, array(100,100) );   
                 previous_post_link( '%link',  '<div class="reveal team-nxt-view__profile"> '.$prevthumbnail.' </div><div class="team-nxt-view__name">
                          <div class="d-inline-block">
                            <h4 class="m-0 fnt-22 fnt-800 data-scroll text-capitalize">%title</h4><span class="data-scroll fnt-14 clr-black-27f"></span>
                          </div>
                        </div>', TRUE ); } ?>
                
                </div></li>
                <li class="team-view-btn__item col-6 col-md-5">
             <?php   $nextPost = get_next_post(true);
if($nextPost) { 

      $nextthumbnail = get_the_post_thumbnail($nextPost->ID, array(100,100) );
     next_post_link( '%link', '<div class="reveal team-nxt-view__profile">'.  $nextthumbnail .' </div>
                        <div class="team-nxt-view__name">
                          <div class="d-inline-block">
                            <h4 class="m-0 fnt-22 fnt-800 data-scroll text-capitalize">%title</h4><span class="data-scroll fnt-14 clr-black-27f"></span>
                          </div>
                        </div>',  TRUE ); 
    
    }?>
</li>
</ul>
                 
                <!-- <div id="cooler-nav" class="navigation">
<?php $prevPost = get_previous_post(true);
if($prevPost) {?>
<div class="nav-box previous">
<?php $prevthumbnail = get_the_post_thumbnail($prevPost->ID, array(100,100) );?>
<?php previous_post_link('%link',"$prevthumbnail  <p>%title</p>", TRUE); ?>
</div>
 
<?php } $nextPost = get_next_post(true);
if($nextPost) { ?>
<div class="nav-box next" style="float:right;">
<?php $nextthumbnail = get_the_post_thumbnail($nextPost->ID, array(100,100) );  ?>
<?php next_post_link('%link',"$nextthumbnail  <p>%title</p>", TRUE); ?>
</div>
<?php } ?>
</div>-->
                  
                  
                   
                   
                    
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