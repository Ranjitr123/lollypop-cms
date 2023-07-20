<?php
/**
 * * Template Name: Edtech Landing Page
 * *
 * * @package WordPress
 * */

get_header( );
?>
<style>
section.sec-pd51.last {
    padding-bottom: 160px;
}
section.sec-pd51{
    padding-bottom: 160px;
}
@media(max-width:767px){
.sec-pd51{ padding-bottom: 71px!important;
}}
.cta{
margin-bottom:80px;
padding-left:40px;
padding-top:30px;
padding-bottom:26px;
border-left: 5px solid #FD2E35;
background: linear-gradient(90deg, #F1EDEA 0%, #F7F5F3 100%);
}
.sec-pd1{padding-bottom:40px;}
.sec-top{padding-top:40px;}}
.sec-pd1 .approach_style {
    width: 100%;
    max-width: 845px;
    margin: 0 auto;
}
.sec-pd1 .approach_style .col-md-2 p {
    color: #FD2E35;
    font-size: 16px;
    font-weight: 700;
}
.sec-pd1 .approach_style .space p:first-child {
    color: #221429;
    font-size: 18px;
    font-weight: 400;
    max-width: 548px;
    padding-bottom: 25px;
    line-height: 26px;
}
.sec-pd1 .space1 h3 {
    font-size: 22px;
    font-weight: 800;
    line-height: 30px;
}
.sec-pd1 .space1 p {
    max-width: 266px;
    font-size: 16px;
    font-weight: 400;
    color: #221429;
    line-height: 26px;
}
.pb-5 {
    padding-bottom: 4rem!important;
}
/* vandana  */
.reveal-project{
    position: absolute;
    right: 20px;
    top: 5px;
    width: 428px;
    height: 97%;
    background: #F7F5F3;
    padding:1rem;
}

/* vinay section */

.ourrescentwork{padding:40px 0;}
.ourrescentwork .fnt-40{font-family: Manrope;font-size: 40px;font-style: normal;font-weight: 800;line-height: 130%; /* 52px */letter-spacing: -1.6px;}
.ourrescentwork .fnt-24{color: var(--text-black, #221429);font-family: Manrope;font-size: 24px;font-style: normal;font-weight: 400;line-height: 145%;}
.knowladgepara{color: var(--text-black, #221429);font-family: Manrope;font-size: 16px;font-style: normal;font-weight: 400;line-height: 160%; /* 25.6px */}
.mxw-356{max-width:356px;}
.knowldgetitle{color: var(--text-black, #221429);font-family: Manrope;font-size: 30px;font-style: normal;font-weight: 800;line-height: 124%; /* 37.2px */}
.knldgepara{color: var(--text-black, #221429);font-family: Manrope;font-size: 16px;font-style: normal;font-weight: 400;line-height: 160%; /* 25.6px */}

/* responsive */
@media(max-width:767px){
    .reveal-project{
        position: initial;
        padding: 1rem 0 0 0;
    }
    .wpdm-img{
        display:none;
    }

    /* vinay */
    .ourrescentwork .fnt-40{font-size: 22px;}
    .ourrescentwork .fnt-24{font-size: 18px;}
    .knowladgepara{font-size:12px;}
    .knowldgetitle{font-size:22px;}
    .knldgepara{font-size:12px;}
}
</style>

<main class="main">
      <!--01-->
      <section class="sec-pd pb-0 sec-bnr">
        <div class="container"> 
          <div class="row">
            <div class="col-12 col-md-11 col-lg-10 mx-auto">
              <div class="row">
                <div class="col-12 col-md-12 offset-md-1">
                  <div class="page-head"><span class="d-block fnt-14 text-capitalize mb-2 clr-default"><a href="<?php echo site_url(); ?>/industries/">Industries</a><?php the_field('category_name'); ?></span>
                    <h1 class="fnt-50 fnt-800 mb-3 mb-md-4 red-stroke red-stroke--small13 px-md-0 col-md-12 col-lg-12 px-0"><?php the_field('heading'); ?></h1>
                    <p class="fnt-24 col-md-10 col-lg-8 px-0"><?php the_field('short_title_description'); ?></p>
		        </div>
                </div>
              </div>
            <div class="col-12 col-md-12 offset-md-1 position-relative">

                <img class="wpdm-img" src=" https://lollypop.design/wp-content/uploads/2023/06/main-bannerimg1-1.png <?php the_field('banner'); ?>" alt="Image" style="height:660px;">
            
			  <div class="reveal-project">
               <!-- form start -->

               <form id="enquiry-form" method="POST" data-parsley-validate="" novalidate="" data-hs-cf-bound="true">
                        <div class="enquiry-form__item data-scroll" style="opacity: 1; transform: translateY(0px);">
                          <div class="mb-2">
                            <h3 class="fnt-28 fnt-800 mb-md-1 mb-4 ">Let’s talk </h3>
                            <div class="row">
                              <div class="col-12 col-md-12 mb-fld">
                                <div class="input">
                                  <input class="in-animate" type="text" name="full_name" id="full_name" placeholder="Your Name" required="" data-parsley-error-message="Enter Your Name" spellcheck="false" data-ms-editor="true"><span class="input__require fnt-14">Important</span>
                                  <span class="focus-border"><i></i></span>
                                  <div class="bx"></div>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-12 col-md-12 mb-fld">
                                <div class="input">
                                  <input class="in-animate" type="email" name="email" id="email" placeholder="Your Email" data-parsley-error-message="Enter Valid Email" required=""><span class="input__require fnt-14">Important</span><span class="focus-border"><i></i></span>
                                  <div class="bx"></div>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-12 col-md-12 mb-fld">
                                <div class="input">
                                  <input class="in-animate" type="number" name="phone" id="phone" placeholder="Your Phone" required="" data-parsley-error-message="Enter Your Phone"><span class="input__require fnt-14">Important</span>
                                  <span class="focus-border"><i></i></span>
                                  <div class="bx"></div>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-12 mb-3">
                                    <div class="input input-textarea">
                                        <textarea class="in-animate" name="description" type="text" placeholder="How can we help?" data-parsley-error-message="Enter the Message" required="" spellcheck="false" data-ms-editor="true"></textarea><span class="input__require fnt-14">Important</span><span class="focus-border"><i></i></span>
                                        <div class="bx"></div>
                                    </div>
                                </div>   
                            </div>
                          </div>
                          <button class="js-submit data-scroll web-btn web-btn--primary fnt-800imp" type="submit" style="opacity: 1; transform: translateY(0px);">
                               Send Enquiry
                            </button>
                        </div>
                           
                       </div>
                      
                    </form>
               <!-- form end -->
			   
              </div>
          </div>
            </div>
          </div>
        </div>
      </section>
      <!--02-->
      <section class="sec-pd"> 
        <div class="container"> 
          <div class="row"> 
            <div class="col-12 col-md-10 col-lg-8 mx-auto">
              <div class="mb-4 pb-md-2 col-md-11 px-0">
                    <h3 class="fnt-50 fnt-800 mb-4 data-scroll" style="opacity: 1; transform: translateY(0px);">Revolutionizing Edtech with design-based solutions.</h3>
                    <p class="fnt-24 col-md-10 col-lg-11 px-0 data-scroll" style="opacity: 1; transform: translateY(0px);">We have extensive experience in designing dynamic e-learning systems that enable businesses to help individuals learn, teach, and enhance their knowledge in a rapidly evolving digital landscape.</p>
                </div>
                <ul class="px-0 values-list row justify-content-between mb-0"> 
                    <li class="values-list__item col-12 col-md-5 data-scroll" style="opacity: 1; transform: translateY(0px);"> 
                    <h6 class="fnt-800 mb-1">Enabling a complete <span class="d-md-block"> digital Immersion </span></h6>
                    <p class="col-11 col-lg-12 px-0 mb-0">Leveraging digital design and AI based learning to provide the best methods for engaging students.</p>
                    </li>
                    <li class="values-list__item col-12 col-md-5 data-scroll" style="opacity: 1; transform: translateY(0px);"> 
                    <h6 class="fnt-800 mb-1">Increasing accessibility <span class="d-md-block"> and usability</span></h6>
                    <p class="col-11 col-lg-12 px-0 mb-0">Crafting platforms that are accessible anywhere and at any time, thereby enabling different learning styles.</p>
                    </li>
                    <li class="values-list__item col-12 col-md-5 data-scroll" style="opacity: 1; transform: translateY(0px);"> 
                    <h6 class="fnt-800 mb-1">Designing an engaging <span class="d-md-block"> simulation of a classroom</span></h6>
                    <p class="col-11 col-lg-12 px-0 mb-0">Bringing together the different aspects of the classroom experience to make learning, sharing, and teaching fun in a digital learning environment.</p>
                    </li>
                    <li class="values-list__item col-12 col-md-5 data-scroll" style="opacity: 1; transform: translateY(0px);"> 
                    <h6 class="fnt-800 mb-1">Democratizing education</h6>
                    <p class="col-11 col-lg-12 px-0 mb-0">Ensuring that students from all over the world have access to educational possibilities by providing them with endless opportunities.</p>
                    </li>
                </ul>
                <a class="clr-second mt-4 mt-md-5 d-inline-block fnt-14 data-scroll hvr-line" href="http://localhost/cms/lollypop-cms/project-enquiry/" style="opacity: 1; transform: translateY(0px);">Let’s Talk</a>
            </div>
          </div>
        </div>
      </section>
      <!--03-->
      <section class="sec-pd"> 
        <div class="container"> 
          <div class="row"> 
            <div class="col-12 col-md-10 col-lg-8 mx-auto">
               <div class="mb-4 pb-md-2 col-md-11 px-0">
                    <h3 class="fnt-50 fnt-800 mb-4 px-0 data-scroll" style="opacity: 1; transform: translateY(0px);">
                   Organisations that <span class="d-md-block"> we’ve partnered with </span></h3>
                   <p class="fnt-24 col-md-9 col-lg-8 px-0 data-scroll" style="opacity: 1; transform: translateY(0px);">Prodigious leaders in EdTech who have collaborated with us to create magical digital experiences.</p>
                </div>
                <ul class="px-0 logo-list logo-list--3 row">
                    <li class="logo-list__item col-4"><img class="img-fluid grayscale" src="https://lollypop.design/wp-content/uploads/2023/07/image-49.png" alt="Image"></li>
                    <li class="logo-list__item col-4"><img class="img-fluid grayscale" src="https://lollypop.design/wp-content/uploads/2023/07/image-49.png" alt="Image"></li>
                    <li class="logo-list__item col-4"><img class="img-fluid grayscale" src="https://lollypop.design/wp-content/uploads/2023/07/image-49.png" alt="Image"></li>
                    <li class="logo-list__item col-4"><img class="img-fluid grayscale" src="https://lollypop.design/wp-content/uploads/2023/07/image-49.png" alt="Image"></li>
                    <li class="logo-list__item col-4"><img class="img-fluid grayscale" src="https://lollypop.design/wp-content/uploads/2023/07/image-49.png" alt="Image"></li>
                    <li class="logo-list__item col-4"><img class="img-fluid grayscale" src="https://lollypop.design/wp-content/uploads/2023/07/image-49.png" alt="Image"></li>
                    <li class="logo-list__item col-4"><img class="img-fluid grayscale" src="https://lollypop.design/wp-content/uploads/2023/07/image-49.png" alt="Image"></li>
                    <li class="logo-list__item col-4"><img class="img-fluid grayscale" src="https://lollypop.design/wp-content/uploads/2023/07/image-49.png" alt="Image"></li>
                    <li class="logo-list__item col-4"><img class="img-fluid grayscale" src="https://lollypop.design/wp-content/uploads/2023/07/image-49.png" alt="Image"></li>
                </ul>  
            </div>
          </div>
        </div>
      </section>

    <!-- 4 th -->
    <section class="ourrescentwork">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-10 col-lg-8 mx-auto">
                <h3 class="fnt-40 mb-md-4 mb-2">Our Recent Work</h3>
                <p class="fnt-24 mb-4 pb-md-3">First hand insight into how our processes have been implemented in all the projects we’ve worked on.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-10 col-lg-8 mx-auto">
                    <div class="row">
                        <div class="col-md-6 mb-4">
                                <img src="../wp-content\themes\lollypop\img\industry\knowladgehut.png" alt="imge" class="mb-md-4 pb-md-2 mb-2 img-fluid data-scroll">
                                <p class="knowladgepara mb-md-3 mb-2 data-scroll">Knowledge Hut</p>
                            <div class="mxw-356">
                                <h4 class="knowldgetitle mb-md-3 mb-2 data-scroll">
                                        E-learning just became a lot more exciting
                                </h4>
                                <p class="knldgepara mb-4 pb-md-3 data-scroll">A digital platform that helps professionals across domains, upskill and develop new expertise for recognition and growth in the global corporate environment.</p>
                                <a class="clr-second d-inline-block fnt-14 data-scroll hvr-line" href="#" >View Projects </a>
                            </div>
                            
                        </div>

                        <div class="col-md-6">
                                <img src="../wp-content\themes\lollypop\img\industry\knowladgehut.png" alt="imge" class="mb-md-4 pb-md-2 mb-2 img-fluid data-scroll">
                                <p class="knowladgepara mb-md-3 mb-2 data-scroll">Mento</p>
                            <div class="mxw-356">
                                <h4 class="knowldgetitle mb-md-3 mb-2 data-scroll">
                                India’s first alternative education platform
                                </h4>
                                <p class="knldgepara mb-4 pb-md-3 data-scroll">A learning platform that was designed to bridge the gap between degrees and skills.</p>
                                <a class="clr-second d-inline-block fnt-14 data-scroll hvr-line" href="#" >View Projects</a>
                            </div>
                            
                        </div>
                    </div>

                    <div class="mt-5">
                        <a class="clr-second d-inline-block fnt-14 data-scroll hvr-line mt-5" href="https://lollypop.design/projects/" style="opacity: 1; transform: translateY(0px);">View all Projects</a>
                    </div>

                </div>
            </div>
        </div>
        
      </section>


    <!-- 5th -->

      <section class="sec-pd sec-pb last"> 
        <div class="container"> 
          <div class="row"> 
            <div class="col-12 col-md-10 col-lg-8 mx-auto">
               <div class="mb-4 pb-md-2 col-md-12 px-0">
                    <h3 class="fnt-50 fnt-800 mb-4 data-scroll" style="opacity: 1; transform: translateY(0px);">
                    Impactful solutions that drive growth</h3>
                   <p class="fnt-24 col-md-10 col-lg-11 px-0 data-scroll" style="opacity: 1; transform: translateY(0px);">We provide meaningful and actionable data-driven designs that represent the voice of the users and resonate with your business objectives.</p>
                </div>
                    <ul class="px-0 values-list row justify-content-between mb-0"> 
                        <li class="values-list__item col-12 col-md-5 data-scroll" style="opacity: 1; transform: translateY(0px);"> 
                            <h6 class="fnt-800 mb-1">AI-powered digital interaction</h6>
                            <p class="col-11 col-lg-12 px-0 mb-0">To make the digital experience for students as immersive as possible, we integrate the latest technologies to enable smarter learning platforms.</p>
                        </li>
                        <li class="values-list__item col-12 col-md-5 data-scroll" style="opacity: 1; transform: translateY(0px);"> 
                            <h6 class="fnt-800 mb-1">Multidimensional approach to learning</h6>
                            <p class="col-11 col-lg-12 px-0 mb-0">Crafting platforms that are accessible anywhere and at any time, thereby enabling different learning styles.</p>
                        </li>
                            <li class="values-list__item col-12 col-md-5 data-scroll" style="opacity: 1; transform: translateY(0px);"> 
                            <h6 class="fnt-800 mb-1">User psychology</h6>
                            <p class="col-11 col-lg-12 px-0 mb-0">Through intensive research, we leveraged user psychology to anticipate challenges faced by students and teachers on e-learning applications and designed platforms that suited their needs.</p>
                        </li>
                            <li class="values-list__item col-12 col-md-5 data-scroll" style="opacity: 1; transform: translateY(0px);"> 
                            <h6 class="fnt-800 mb-1">Minimizing overstimulation</h6>
                            <p class="col-11 col-lg-12 px-0 mb-0">By simplifying the visual design and minimizing clutter, we made the dissemination of information incredibly seamless.</p>
                        </li>
                        <li class="values-list__item col-12 col-md-5 data-scroll" style="opacity: 1; transform: translateY(0px);"> 
                            <h6 class="fnt-800 mb-1">Seamless journey through the platform</h6>
                            <p class="col-11 col-lg-12 px-0 mb-0">We facilitated easy navigation through platforms by incorporating detailed guides and highlighting the next stage in the learning path.</p>
                        </li>
                        <li class="values-list__item col-12 col-md-5 data-scroll" style="opacity: 1; transform: translateY(0px);"> 
                            <h6 class="fnt-800 mb-1">Simplifying learning management systems</h6>
                            <p class="col-11 col-lg-12 px-0 mb-0">The learning curve on LMS will always be high, so we focused on highlighting only relevant features in the Learning management systems based on the stage of learning that the users were in.</p>
                        </li>        
                   </ul>
              <a class="clr-second mt-4 mt-md-5 d-inline-block fnt-14 data-scroll hvr-line" href="http://localhost/cms/lollypop-cms/project-enquiry/" style="opacity: 1; transform: translateY(0px);">Let’s talk</a>
            </div>
          </div>
        </div>
      </section>
	  
      <!--06-->
      <section class="sec-footer-trans">
        <div class="container z-1">
          <div class="row"> 
            <div class="col-12 col-md-11 col-lg-10 mx-auto">
              <div class="py-70 px-3 data-scroll" style="background: #221429;">
                <div class="d-flex align-items-center justify-content-center">
                  <div class="col-12 col-md-10 col-lg-10 px-0 d-inline-block clr-white text-center"> 
                    <div class="mb-45"><span class="d-block fnt-24 mb-2 pb-2 mb-md-4 pb-md-0">Got An Idea?<?php the_sub_field('small_title'); ?></span>
                      <h2 class="fnt-50 fnt-800 clr-white">Let’s craft brilliance together!<?php the_sub_field('heading'); ?></h2>
                    </div><a class="web-btn web-btn--red" href="<?php the_sub_field('cta_link'); ?>">Get In Touch<?php the_sub_field('cta_text'); ?></a>
					
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
