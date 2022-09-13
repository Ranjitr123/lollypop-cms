<?php
/**
 * * Template Name: Research-Design
 * *
 * * @package WordPress
 * */

get_header();
?>
<style>
.case-std__info{
height:200px;
}
.hover-image,
      .picture img,
      .hover-image img {
        transition: 0.4s ease-in-out;
        -webkit-transition: 0.4s ease-in-out;
        -o-transition: 0.4s ease-in-out;
      }
      a:hover, a:active, a:focus {
  outline: 0;
}
      .img_wrap:hover .hover-image {
        transform: scale(0.95) !important;
        -webkit-transform: scale(0.95) !important;
      }
      .img_wrap:hover .hover-image img,
      .picture img:hover img {
        -webkit-transform: translate(0, 0) scale(1.08) !important;
        -ms-transform: translate(0, 0) scale(1.08) !important;
        transform: translate(0, 0) scale(1.08) !important;
      }
      .picture {
        overflow: hidden;
      }
      img,
      img:hover {
        
        object-fit: cover;
      }





.tab-head-item__name::before {
width:45%;
}
    .description{
       position: absolute;
       width:258px;
       height: 190px;
       background-color:white;
       bottom:22px;
       left:22px;
       padding:20px;
    }
     .description>p{
        font-size: 14px;
line-height: 20px;
      }
    .playvid[poster]{
      width:100%;
      margin:auto;
    }
     
       .photo{
  max-width: 100%;
  height: auto;
    transition: .4s ease-in-out;
    object-fit: cover;
}
 .wear-img{
    width:285px;
    height:311px;
    transition: .4s ease-in-out;

   }
.com-img{
    width:auto;
    height:164px;
    object-fit:cover;
    transition: .4s ease-in-out;
   }
    .board{
      min-height:270px !important;
      background-color:#ffffff;
      padding: 35px 25px 30px 0px;
    }
    .logo_grid{
      margin-left:-30px;
    }
     .hvr-line:hover, .hvr-line:active, .hvr-line:focus {
  outline: none !important;
}
    .slide_img{
      height:60vh !important;
      max-height:547px !important;
      width:100% !important;
      max-width:454px !important;
    }
    @media (max-width:767px) {
     .board{
      min-height:210px !important;
      }
    .case-std__info{
height:140px;
}
    .common-list__item {
    margin-top: 4px !important;
}


    .fnt-mb-14 {
        font-size: 14px !important;
        line-height: 22px !important;
    }
    
    .pb-mb-0 {
      padding-bottom: 0 !important;
    }
    
    .fnt-mb-16 {
    font-size: 16px !important;
    }
    
    .w-mb-fluid {
        width: calc(100% + 40px);
        margin-left: -20px;
    }
    
    .fnt-mb-12 {
    font-size: 12px !important;
    line-height: 19px !important;
    }
    
     .fnt-mb-10 {
        font-size: 10px !important;
        line-height: 16px !important;
    }
    
    .slide_img{
      width:278px !important;
      height:336px !important;
    }
    .description > p {
  font-size: 12px !important;
  line-height: 17px !important;
  }
  .description{
        width:80%;
        height:50%;
        bottom:10px;
        padding-top:10px !important;
       left:10px;
      }
      .logo_grid{
      margin-left:0px;
    }
    }
    @media (min-width:767px) and (max-width:992px) {
     .slide_img{   
      height:auto !important;
      width:453px;
    }
    }
    
    
</style>



  <main class="main">
            <!--01-->
            <section class="lp-index sec-pd sec-bnr pb-mb-0">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-11 col-lg-10 mb-60 mx-auto">
                            <div class="row">
                                <div class="col-12 col-md-11 offset-md-1">
                                    
                                        <div class="mb-45 multi-line-text">
                                        <span class="d-block fnt-14 text-capitalize mb-2 clr-default"><a href='<?=get_site_url()?>'><?php echo get_field('services_text_feild')?></a> / <?php echo get_field('research_text_feild')?></span>
                                        
                                       
                                        
                                            <h1 style='color:#221429;' class="fnt-70 mb-lg-2 fnt-800 col-12 col-md-11 col-lg-10 red-stroke red-stroke--small13 px-0 mb-22 aos-init aos-animate"> <?php echo get_field('research_heading')?></h1>
                                            <p style='max-width:612px;' class="fnt-24 col-md-11 col-lg-10 col-xl-9 px-0"><?php echo get_field('research_description')?></p>
                                        </div>
                                        <?php while(have_rows('research_repeater')){the_row();?>
                                        <ul class="lp-number-list ps-0 m-0">
                                            <li class="lp-number-list__item">
                                                <span class="fnt-18 fnt-800 lp-number-title fnt-mb-14"><?php echo get_sub_field('research_user')?></span>
                                                <p class="fnt-14 fnt-mb-10"><?php echo get_sub_field('research_title')?></p>
                                            </li>
                                           
                                            <?php } ?>     
                                            
                                            
                                        </ul>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--banner image  -->
                <div class=' col-md-10 col-sm-12 col-xl-9 mx-auto'>
                <div class="position-relative">
                <div class="reveal" style="transform: translate(0px, 0px); opacity: 1; visibility: inherit;"><img class="img-fluid blog-d-img mb-0" src="<?php echo get_field('researchbanner_image')?>" width="1077" height="471" style="transform: translate(0px, 0px);"></div>
              </div></div>
            </section>
            <!--02-->
            <section class="sec-pd pt-lg-5">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-11 col-lg-10 my-45 mx-auto">
                            <div class="col-12 col-md-12 px-0 ">
                                <div class="row">
                                    <div class="col-12 col-md-10 col-lg-10 offset-md-1">
                                        <h2 style='color:#221429;' style='max-width:730px;' class="fnt-40  fnt-800 mb-3"><?php echo get_field('img_content')?></h2>
                                        <p style='max-width:645px;' class="fnt-24 col-md-12 col-lg-11 col-xl-10 px-0"><?php echo get_field('img_description')?></p>
                                        
                                        <div class="tab-content  mt-4 mt-lg-5" id="v-pills-tabContent">
                                    <div
                                        class="tab-pane fade show active"
                                        id="v-pills-brands"
                                        role="tabpanel"
                                        aria-labelledby="v-pills-brands-tab"
                                    >
                                    <div >
                                    
                                        <ul class="px-0 mb-lg-4 logo-list row">
                                         <?php while(have_rows('startups_repeater')){the_row();?>
                                            <li class="logo-list__item col-4 col-md-3 data-scroll">
                                                <img class="img-fluid grayscale" src="<?php echo get_sub_field('startups_images')?>">
                                            </li>
                                             <?php } ?> 
                                            
                                        </ul>
                                       </div>
                                    </div>
                                </div>
                                <br>
                                <?php 
                            $findjoblink = get_field('startups_link');
                            if( $findjoblink ): 
                                $link_url = $findjoblink['url'];
                                $link_title = $findjoblink['title'];
                                $link_target = $findjoblink['target'] ? $findjoblink['target'] : '_self';
                                ?>
                                <a class="hvr-line  ms-2 pt-5 clr-second fnt-14" href="<?=$link_url?>"><?php echo $link_title?></a>
                                 <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--03-->
            
            <!--04-->
            <section class=" pb-0">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-11 col-lg-10 my-45 mx-auto">
                            <div class="col-12 col-md-12 px-0 ">
                                <div class="row">
                                    <div class="col-12 col-md-10 mb-4 mb-md-5 col-lg-10 offset-md-1">
                                        <h2 style='color:#221429; max-width:730px;' class="fnt-40 fnt-800 mb-2 mb-md-3">
                                            <?php echo get_field('why__heading')?>
                                        </h2>
                                        <p style='max-width:708px;' class="fnt-24 fnt-mb-14 col-md-12 col-lg-11 col-xl-11 px-0 mb-0">
                                           <?php echo get_field('why_description')?>
                                        </p>
                                    </div>
                                </div>
                                
                                 <div class="col-12 col-xxl-11 mx-auto">
                           <ul class="px-0 case-img-list row single-mb-slider slider-md-23">
                           <?php while (have_rows('why_repeater')) {
                            the_row(); ?>
                                <li class="case-img-list__item col-12">
                  <div class="case-std img-hvr">

                     <img class="img" src="<?php echo get_sub_field('why_image_one')?>">
                    <noscript>
                      <img class="img" src="<?php echo get_sub_field('why_image_two')?>">
                    </noscript>
                    <div class="case-std__info">
                      <h6 class="fnt-16 fnt-800 mb-1"><?php echo get_sub_field('why_title')?></h6>
                      <p class="fnt-14 mb-0 fnt-mb-12"><?php echo get_sub_field('wy_description')?></p>
                      <div class="mt-auto"> </div>
                    </div>
                  </div>
                </li>
                                    
                          <?php } ?>          
                
                
                
                
                                    
                
                                  </ul>
                        </div>
                               
                    </div>
                </div>
            </section>
            <!--06-->
           
            <!--07-->
             <section class="sec-pd">
                <div class="container">
                    <div class="">
                        <div class="row">
 
 <div class="col-md-10 col-lg-8 mx-auto">
 
                                        <h2 style='color:#221429;,'max-width:730px;' class="fnt-40 fnt-800 mb-2 mb-md-3"> <?php echo get_field('our_ux_title')?></h2>
                                        <p style='max-width:708px;' class="fnt-24 fnt-mb-14 col-11 col-md-12 col-lg-11 col-xl-11 px-0 mb-0"><?php echo get_field('our_ux_description')?></p>
                                <div class="mb-50 data-scroll"></div>
  
                                <ul class="px-0 home-artical-list mx-0 mb-0">
                                                               <?php while(have_rows('our_ux_repeater')){the_row();?>
                                    <li class="home-artical-list__item data-scroll">
                                        <div class="home-artical">
                                            <div class="row img_wrap">
                                          <div class="hover-image col-12 col-md-5 col-lg-4">   
                                                 <div class='picture'><img
                                                            defer
                                                            loading="lazy"
                                                            class="photo home-artical-img mb-3 mb-md-0"
                                                            src="<?php echo get_sub_field('our_image')?>"
                                                            alt="Blog Images">
                                                </div></div>
                                                <div class="col-12 col-md-6 col-lg-7 ">
                                                    <div class="px-lg-4">
                                                        <h3 class="fnt-22 col-11 fnt-800 mb-2 pb-lg-1">
                                                           <?php echo get_sub_field('our_title')?>
                                                        </h3>
                                                        <p style='max-width:351px' class="clr-gray fnt-14 col-11 col-md-12 col-lg-11 mt-1 mt-md-0 mb-1 mb-md-3">
                                                            <?php echo get_sub_field('our_heading')?>
                                                        </p>
                                                        <p style='max-width:351px' class="clr-gray col-11 col-md-12 fnt-14 col-lg-11">
                                                            <span class="clr-black fnt-800 fnt-14">Purpose:</span>
                                                            <?php echo get_sub_field('our_description')?>
                                                        </p>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                             <?php } ?> 
                                </ul>
                                
                        
                                
                               
                                
                                
                                
                               
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--08-->
            <section class="sec-pd">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-11 col-lg-8 mx-auto">
                          <div >
                            <div class="row mx-auto">
                                <div class="col-12 mb-50">
                                    <h2 style='max-width:640px' class="fnt-40 fnt-800 mb-3 mb-md-2 pb-lg-1 data-scroll col-md-12 col-xl-11 px-0">
                                       <?php echo get_field('solution_title')?>
                                    </h2>
                                    <p style='max-width:640px' class="fnt-24 mb-2 mb-md-0 col-md-11 col-lg-9 data-scroll">
                                        <?php echo get_field('solution_description')?>
                                    </p
                      >
                                </span>
                            </div>
                            <div>
                                <div class="row ">
                                    <?php while(have_rows('solution_repeater')){the_row();?>
                                    <div class="col-lg-4 ps-0 mx-0 col-md-4 mb-1">
                                        <div class="board ps-0 mx-0 pt-2 m-1">
                                            <img class="img-fluid ps-4 my-3" src="<?php echo get_sub_field('solution_image')?> " alt="Intel">
                                            <p class="lp-thumbnial__text pe-0 ps-4 mb-0">
                                               <?php echo get_sub_field('solut_description')?>
                                            </p>
                                        </div>
                                    </div>
                                    
                                      <?php } ?> 
                                    
                                    
                                </div>
                            </div>
                          
                        </div>
                    </div>
                </div>
            </div>
  </div>
        </div>
    </section>
    <!--09-->
    <section class="sec-pd">
        <div class="container">
            <div class="mx-auto">
                <div class="tab-div mb-0 col-lg-8 col-md-11 col-xl-8 mx-auto">
                    <div class="expert-member d-flex flex-wrap data-scroll">
                        <div class="col-5 mx-auto col-md-4 mb-4 mb-md-0">
                            <div class="expert-member__img text-center">
                                <div class="data-scroll">
                                    <img class="img-fluid mb-2 pb-1" src="<?php echo get_field('member_image')?>">
                                </div>
                                <h6 class="fnt-22 fnt-800 clr-white mb-0"><?php echo get_field('member_name')?></h6>
                                <span class="fnt-14 clr-white d-inline-block"><?php echo get_field('member_lead')?></span>
                            </div>
                        </div>
                        <div class="col-12 col-md-8">
                            <div class="ps-md-5 ps-lg-5 expert-member__info">
                                <h3 class="fnt-40 clr-white col-sm-12 col-md-11 col-xxl-10 fnt-800 mb-2">
                                  <?php echo get_field('member_title')?>
                                </h3>
                                <p class="fnt-16 fnt-mb-14 clr-white col-sm-12 col-md-10 mb-4 pb-1">
                                   <?php echo get_field('member_description')?>
                                </p>
                                 <?php 
                            $findjoblink = get_field('member_link');
                            if( $findjoblink ): 
                                $link_url = $findjoblink['url'];
                                $link_title = $findjoblink['title'];
                                $link_target = $findjoblink['target'] ? $findjoblink['target'] : '_self';
                                ?>
                                <a class="web-btn web-btn--primary text-capitalize fnt-800imp" href="mailto:neeraja.mathur@lollypop.design">
                                  <?php echo $link_title?>
                                </a>
                                 <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--10-->
    <section class="sec-pd">
        <div class="container">
            <div class="tab-div col-lg-8 col-md-10 col-xl-10 mx-auto">
                <div class="offset-md-1">
                    <div class="mb-5 data-scroll">
                        <h2  style='max-width:736px;' class="fnt-800 fnt-50 mb-md-3">  <?php echo get_field('domains_heading')?></h2>
                        <p class="fnt-24 col-md-8 col-lg-7 px-0">
                              <?php echo get_field('domains_description')?>
                        </p>
                    </div>
                    <ul class="px-0 common-list row justify-content-start">
                    <?php while(have_rows('domains_repeater')){the_row();?>
                        <li class="common-list__item col-12 col-md-5 data-scroll">
                            <div class="d-flex flex-column h-100">
                                <h6 class="fnt-800 col-lg-8 mb-1">  <?php echo get_sub_field('domains_title')?></h6>
                            </h6>
                            <div class="">
                                <p class="col-11 col-lg-9 px-0 fnt-mb-14">
                                      <?php echo get_sub_field('dom_decription')?>
                                </p>
                            </div>
                        </div>
                    </li>
                     <?php } ?>  
                   
                </ul>
                <?php 
                                                $viewlink = get_field('domains_link');
                                                if( $viewlink ): 
                                                    $link_url = $viewlink['url'];
                                                    $link_title = $viewlink['title'];
                                                    $link_target = $viewlink['target'] ? $viewlink['target'] : '_self';
                                                    ?>
                <a class="hvr-line pt-5 clr-second fnt-14" href="<?php echo $link_url?>">
                    <?php echo $link_title?>
                </a>
                  <?php endif; ?> 
                            
            </div>
        </div>
    </div>
</section>
<!--11-->
<section class="sec-pd  sec-pt" style="background: #221429;">
  <div class="offset-md-2 col-lg-7 col-md-8">
      <div class='ms-3 ms-md-0 '>
        <h2 class="fnt-50 l-3 col-8 col-md-12 px-0 clr-white fnt-800 data-scroll">
           <?php echo get_field('farmers_heading')?>
        </h2>
        <p class="fnt-24 clr-white my-4 col-10 col-xl-9 data-scroll">
            <?php echo get_field('farmers_description')?>
        </p>
        <?php 
                                                $viewlink = get_field('farmers_link');
                                                if( $viewlink ): 
                                                    $link_url = $viewlink['url'];
                                                    $link_title = $viewlink['title'];
                                                    $link_target = $viewlink['target'] ? $viewlink['target'] : '_self';
                                                    ?>
        <a class="clr-second fnt-16 hvr-line d-inline-block data-scroll" href="<?php echo $link_url?>"><?php echo $link_title?></a>
        <?php endif; ?> 
        
        <img class="wpdm-img pe-2 pe-md-0 mt-5" src=" <?php echo get_field('farmers_image')?>" alt="">
    </div>
  </div>
</section>

<!--12-->



<section class="sec-pd sec-pb last">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-11 col-lg-10 mx-auto">
                <div class="col-12 col-md-12 px-0 offset-md-1">
                    <div class="row ">
                        <div class="col-12 col-md-10 col-lg-10  ">
                            <h2 class="fnt-40 col-md-10 col-lg-10 fnt-800 mb-3 mb-md-4 pb-md-3">
                               <?php echo get_field('industry_heading')?>
                            </h2>
                            <p class="fnt-24 col-md-8 col-lg-8 col-xl-9 px-0">
                               <?php echo get_field('industry_description')?>
                            </p>
                        </div>
                        <div class="sec-tab">
                            <div class="">
                                <div class="row">
                                    <div class="col-12 col-md-11 col-lg-11 ">
                                        <div class="tab-section">
                                            <div class="tab-section__head data-scroll stickytab mb-0">
                                                <ul class="px-0 mx-0 tab-head-item page-head-tab d-flex justify-content-start page-head-tab" id="menu-center">
                                                    <li class="tab-head-item__name fnt-22 fnt-mb-16 pb-2 fnt-800 head-Research" id="Wearable">Wearable Technology</li>
                                                    <li class="tab-head-item__name fnt-22 pb-2 fnt-mb-16 fnt-800 head-Design" id="ECommerece">E-Commerce</li>
                                                </ul>
                                            </div>
                                            <div class="tab-section-content tab-scroll-content">
                                                <div class="tab-section-content__item d-block" id="Wearable">
                                                    <!--image-->
                                                    <div class='col-12 col-md-10 col-lg-10'>
                                                    <ul class="px-0 home-artical-list mx-0">
                                   
                  <li class="home-artical-list__item data-scroll" style="opacity: 1; transform: translateY(0px);"> <a class="home-artical" href="https://lollypop.design/whitepapers/designing-wearable-and-iot-solutions/">
                      <div class="row">
                        <div class="col-12 col-md-3 col-lg-5">
              <div class="revealnone h-100">

<img defer="" loading="lazy" class="home-artical-img mb-3 mb-md-0" srcset="https://staging.terralogic.com/lollypop/wp-content/uploads/2021/12/thumbnail-1.webp 500w, https://staging.terralogic.com/lollypop/wp-content/uploads/2021/12/thumbnail-1.webp 343w" sizes="(max-width: 600px) 500px,
            343px" src="https://staging.terralogic.com/lollypop/wp-content/uploads/2021/12/thumbnail-1.webp" alt="Blog Images">
</div>
                        </div>
                        <div class="col-12 col-md-7 mt-md-5">
                          <div class="px-lg-4">
                            <h3 class="fnt-30 fnt-800 mb-2 pb-lg-1">Designing for IoT &amp; Wearables </h3>
                            <p class="clr-gray col-lg-11 mt-1 mt-md-0 mb-1 mb-md-3">Wearables technology has been gaining a wider adoption due to its wide range of uses. Wearable tech devices are seen as a disruption in the field of technology because they have far-reaching effects in health,...</p><span class="d-block fnt-12">Posted on 14 December, 2021</span> 
                          </div>
                        </div>
                      </div></a></li>
                            </ul></div>
                                                <div class="tab-section-content__item d-block" id="ECommerece">
                                                <div class='col-12 col-md-10 col-lg-10'>
                                                    <ul class="px-0 home-artical-list mx-0">
                                   
                  <li class="home-artical-list__item data-scroll" style="opacity: 1; transform: translateY(0px);"> <a class="home-artical" href="https://lollypop.design/whitepapers/designing-for-e-commerce-2020/">
                      <div class="row">
                        <div class="col-12 col-md-3 col-lg-5">
              <div class="revealnone h-100">

<img defer="" loading="lazy" class="home-artical-img mb-3 mb-md-0" srcset="https://staging.terralogic.com/lollypop/wp-content/uploads/2021/12/thumbnail_ecomm_whitepaper.png 500w, https://staging.terralogic.com/lollypop/wp-content/uploads/2021/12/thumbnail_ecomm_whitepaper.png 343w" sizes="(max-width: 600px) 500px,
            343px" src="https://staging.terralogic.com/lollypop/wp-content/uploads/2021/12/thumbnail_ecomm_whitepaper.png" alt="Blog Images">
</div>
                        </div>
                        <div class="col-12 col-md-7 mt-md-5">
                          <div class="px-lg-4">
                            <h3 class="fnt-30 fnt-800 mb-2 pb-lg-1">Disrupting the future of E-Commerce </h3>
                            <p class="clr-gray col-lg-11 mt-1 mt-md-0 mb-1 mb-md-3">Consumer and Technology are two key players that are reshaping the E-commerce landscape. Lets find out how design serves as the strategic linchpin in bringing consumer and technology closer.</p><span class="d-block fnt-12">Posted on 2 September, 2020</span> 
                          </div>
                        </div>
                      </div></a></li>
                            </ul></div>
                                                    <div class="mt-4 mt-lg-5"><a class="clr-second fnt-14 hvr-line data-scroll " href="<?php echo site_url()?>/whitepapers/">View all papers</a></div>
                                                </div>
                                                </div>
                                                    
                                                        
                                                        
                                                        
                                                    </div>

                                                </div>
                                                <div >
                                                        <div class="row mt-5 mt-md-5 pt-md-5">
                                                            <div class="col-12 col-md-11 col-lg-10  ">
                                                                <div class="col-12 col-md-12 px-0">
                                                                    <div class="row">
                                                                        <h2 class="fnt-50 fnt-800 mb-16"><?php the_field('blogs_heading') ?></h2><span class="fnt-24 col-md-10 col-lg-9 px-0"><?php the_field('blog_content') ?></span>
                </div>
                <!-- White papers-->
                <ul class="px-0 home-artical-list mx-0">
                  <?php 
                            $args = array(
                                'post_type'=>'whitepapers', // Your post type name
                                'posts_per_page' => 1,
                            );
                    $whitepaper = new WP_Query( $args );
                      
                if ( $whitepaper->have_posts() ) : while ( $whitepaper->have_posts() ) : $whitepaper->the_post(); ?>
                 
                  <li class="home-artical-list__item data-scroll"> <a class="home-artical" href="https://lollypop.design/blog/2022/august/transitioning-into-the-ux-design-field/">
                      <div class="row">
                        <div class="col-12 col-md-3 col-lg-5">
              <div class="revealnone h-100">
<img defer loading="lazy" class="home-artical-img mb-3 mb-md-0" srcset="<?php the_field('home_page_thumbnail') ?> 500w, <?php the_field('home_page_thumbnail') ?> 343w" sizes="(max-width: 600px) 500px,
            343px" src="<?php the_field('home_page_thumbnail') ?>"alt="Blog Images">
</div>
                        </div>
                        <div class="col-12 col-md-7">
                          <div class="px-lg-4"><span class="text-uppercase mb-2 d-block fnt-12 fnt-800">blog</span>
                            <h3 class="fnt-30 fnt-800 mb-2 pb-lg-1"><?php the_title(); ?> </h3>
                            <p class="clr-gray col-lg-11 mt-1 mt-md-0 mb-1 mb-md-3"><?php echo wp_trim_words(get_field('landing_content'), 35); ?></p><span class="d-block fnt-12">Posted on <?php the_field('date') ?></span> 
                          </div>
                        </div>
                      </div></a></li>
                      <?php wp_reset_postdata(); endwhile; endif;?>
        </ul>
            
                <!-- Blogs-->
                <ul class="px-0 home-artical-list mx-0 pb-4 pb-md-5 mb-md-3">
                  <?php 
                            $args = array(
                            'post_type'=>'post', // Your post type name
                                'posts_per_page' => 1,
                                'orderby'=> 'post_date',
                                'order' => 'DESC'
                               
                                 
                            );
                    $blog = new WP_Query( $args );
                    if ( $blog->have_posts() ) : while ( $blog->have_posts() ) : $blog->the_post(); ?>

                  <li class="home-artical-list__item data-scroll"> <a class="home-artical" href="<?php the_permalink(); ?>">
                      <div class="row">
                        <div class="col-12 col-md-3 col-lg-5">
              <div class="revealnone h-100">
<img defer loading="lazy" class="home-artical-img mb-3 mb-md-0" srcset="<?php echo the_post_thumbnail_url( 'post_thumbnail' ) ?> 500w, <?php echo the_post_thumbnail_url( 'post_thumbnail' ) ?> 343w" sizes="(max-width: 600px) 500px,
            343px" src="<?php echo the_post_thumbnail_url( 'post_thumbnail' ) ?>"alt="Blog Images">
</div>
                        </div>
                        <div class="col-12 col-md-7">
                          <div class="px-lg-4"><span class="text-uppercase d-block mb-2 fnt-12 fnt-800">blog</span>
                            <h3 class="fnt-30 fnt-800 mb-2 pb-lg-1"><?php the_title(); ?></h3>
                            <p class="clr-gray col-11 mt-1 mt-md-0 mb-1 mb-md-3"><?php the_field('short_descriptions') ?></p><span class="d-block fnt-12">Posted on <?php if( have_rows('author_details') ) : while( have_rows('author_details') ): the_row(); ?><?php the_sub_field('author'); ?> <?php endwhile; endif; ?> 
                             <?php the_time('j F, Y'); ?></span>
                          </div>
                        </div>
                      </div></a></li>
                      <div class="mt-lg-4"><a class="clr-second fnt-14 hvr-line data-scroll " href="<?php echo site_url()?>/blogs/">View all blogs</a></div>
                      <?php wp_reset_postdata(); endwhile; endif;?>
                </ul>




                                                                        
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>





<!-- 13 -->
<section class="sec-footer-trans" id="nine">
        <div class="container z-1">
          <div class="row"> 
            <div class="col-12 col-md-11 col-lg-10 mx-auto">
              <div class="py-70 px-3 data-scroll" style="background: #221429;">
                <div class="d-flex align-items-center justify-content-center">
                  <div class="col-11 col-md-8 col-lg-7 px-0 d-inline-block clr-white text-center"> 
                    <div class="mb-45"><span class="d-block fnt-24 mb-2 pb-2 mb-md-4 pb-md-0">Thinking of Research?</span>
                      <h2 class="fnt-50 fnt-800 clr-white">Let’s craft brilliance together!</h2>
                    </div><a class="web-btn web-btn--red" href="<?php echo site_url(); ?>/project-enquiry/">Get In Touch</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

-
</main>
<?php
get_footer();
?>