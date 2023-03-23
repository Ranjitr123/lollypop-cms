<?php
/**
 Template Name: Trading League portfolio
  Template post type: projects
  
 **/

get_header();
?>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" />
 <!-- try -->
 <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.css'>

<style>
    @media screen and (min-width: 1200px) { 
        .portfolio_thubmnail{width: 948px;}
    }
     .sec-bnr  h1 {
       font-size:50px !important;
       line-height:65px !important;
    }
    .mrg-btm-130{
       margin-top:130px;
    }
    .iphonepro-con-1{
      margin-top:-50%;
    }
     .iphonepro-con-3{
        margin-top:35%;
     }
     .iphonepro-con-4{
        margin-top:-10%;
     }
     .sec-pad-100{
       padding-top:100px;
     }
     .threiphone-container{
        background: linear-gradient(0deg, #363D67, #363D67);
        border-radius: 40px;
        padding: 70px 0px 0px 0px;
        text-align: center;
     }
     .card-iphone-content span{
       text-transform: capitalize !important;
        line-height: 93.5%;
        letter-spacing: -0.01em;
        padding-top:4rem;
      }
     .card-iphone-content p{
        font-family: 'Manrope';
        font-style: normal;
        font-weight: 400;
        font-size: 16px;
        line-height: 168%;
        color: #221429;
        max-width:260px;
        margin-top:1.5rem;
     }
     .blue-barlow-container{
        background: #2031AE;
        border-radius: 40px;
        padding:50px;
        position: relative;
     }
     .barlow-aa span{
        font-weight: 600;
        font-size: 64px;
        line-height: 120%;
        text-align: right;
        letter-spacing: -0.02em;
        color: #FFFFFF;
        margin-left:2rem;
     }
     .blue-barlow-container p{
         font-weight: 600;
        font-size: 24px;
        line-height: 120%;
        letter-spacing: 0.05em;
        color: #FFFFFF;
     }
     .barlow-iphone{
       position:absolute;
       top: -32%;
       right: -25%;
     }
     .sec-marg-100{
       margin-bottom:100px;
     }
     .barlow-aa{
       display:flex;
       align-items: baseline;
     }
     .project-step.sec-marg-100{
        margin-bottom: 125px;
     }
     section.p-r-80.pb-0.pare-define.sec-pad-100{
        padding-top:60px;
     }
       .color-box{
          border-radius: 20px;
          width: 222px;
          height: 244px;
          margin-right: 1rem;
          display: flex;
          align-items: center;
          flex-direction: column;
          justify-content: end;
          padding: 1rem 1rem 2rem 1rem;
       }
       .color-box span{
            font-weight: 700;
            font-size: 26px;
            line-height: 120%;
            color: #FFFFFF;
       }
       .color-box p{
         margin-bottom:0rem;
          color: #FFFFFF;
       }
     .green-color{
           background: #00DF8D;
     }
      .green-color span{
            font-weight: 700;
            font-size: 26px;
            line-height: 120%;
            color: #2E333D;
         }
         .green-color  p{
          color: #2E333D;
         }

     .blue-color{
            background: #2031AE;
            margin-right: 0rem;
     }
     .sky-blue-color{
           background: #74D5FF;
     }
     .orange-color{
        background: #FF6C40;
     }
    .yellow-color{
       background: #F5CC51;
    }
    .pink-color{
          background: #FFC0D5;
    }
     .trading-container{
       margin-bottom:56px;
     }
    .trading-container h3{
           font-weight: 600;
            font-size: 58.3226px;
            line-height: 120%;
            letter-spacing: -0.03em;
            color: #16192D;
     }
     .trading-container p{
      max-width:245px;
     }
     .trading-container-blue{
       background: #16192D;
       border-radius: 40px;
       padding:60px;
     }
     .trading-iphone{
      text-align: end;
     }
     .trading-iphone img{
       margin-top: -30%;
       margin-right: 140px;
     }
     .trading-group {
        margin-left: 2rem;
     }
   .trading-group img{
     margin-top:-63%;
   }
   .blue-container{
      background: #2031AE;
      border-radius: 40px;
      text-align:center;
   }
   .orange-container{
      background: #FF6C40;
      border-radius: 40px;
     padding-bottom: 60px;
        margin-top:300px;
   }
  .orange-container-phone{
     justify-content: center;
     margin-top: -21%;
  }
  .yellow-container{
     background: #FFDE7B;
     border-radius: 40px;
     text-align:center;
  }
  .target-container h3{
      font-size: 58.3226px;
      line-height: 120%;
      letter-spacing: -0.03em;
      color: #FFFFFF;
  }
   .target-container p{
      font-size: 16px;
      line-height: 168%;
      color: #FFFFFF;
      max-width:345px
   }
   .step-2 img{
    position: absolute;
    left: 39%;
    top: 4%;
    z-index: 9999999;
   }
   .yellow-mrg img{
     margin-top:25%;
   }
   .target-container{
      padding: 125px 70px 90px 75px;
   }
   .target-sec{
     padding-top:200px !important;
   }
   .pink-container{
     background: #FFC0D6;
     border-radius: 40px;
     text-align:end;
   }
   .classic-blue{
     margin-top:-30%;
     padding-bottom:0px;
      height: 769px;
   }
   .selection-container img {
    position: absolute;
    top: -75%;
    right: 0;
}
    .selection-container.d-flex{
       position:relative;
    }
    .selection{
      padding: 70px;
      margin-top:70px;
    }
    .blue-container-text h3{
        font-weight: 600;
        font-size: 50px;
        line-height: 120%;
        letter-spacing: -0.03em;
        color: #FFFFFF;

    }
     .blue-container-text p{
       font-weight: 400;
      font-size: 16px;
      line-height: 168%;
      color: #FFFFFF;
      max-width:365px;
      text-align:left;
     }
    .conclustion p{
       font-weight: 800;
        font-size: 28px;
        line-height: 37px;
        letter-spacing: -0.04em;
        color: #221429;
    }
    .li-disc li {
    margin-bottom: 3rem;
   }
   .thinking-card{
     position: absolute;
    z-index: 9999;
    left: 0;
    right: 0;
    bottom: -47%;
   }
   .thinking-cad-img{
     position:relative;
   }
   .sec-footer-trans {
    padding-bottom: 330px;
}

 @media screen and (max-width:767px)
 {
   .blue-barlow-container {
     display: inline-flex;
     padding:10px;
   }
   .blue-barlow-container p{
     font-size:14px;
     line-height:24px;
   }
   .barlow-iphone {
    right:0;
    top:-60%;
   }
   .barlow-iphone img{
     width:150px;
   }
   .barlow-aa img{
     width:50px;
   }
   .barlow-aa span {
     font-size:32px;
     margin-left:1rem;
   }
   .barlow-aa {
     padding-top:2rem;
   }
   .blue-pad{
    margin-bottom:165px !important;
   }
   .sec-pad-100 {
    padding-top:30px;
   }
   .sec-marg-100{
    margin-bottom:0px;
   }
   .color-box {
     width:100% !important;
   }
   .trading-iphone img {
     margin-right:0px;
     margin-top:0px;
   }
   .trading-group {
    margin-left: 0rem;
    top: 55%;
    left:0;
   }
   .trading-container h3 {
    font-size:28px;
   }
   .trading-group img {
    margin-top:0px;
   }
   .trading-container-blue {
    margin-top:3rem;
   }
   .trading-container {
      margin-top:3rem;
   }
   .orange-container {
     margin-top:0px;
     padding:20px;
   }
   .step-2 img {
    position:static;
   }
   .target-sec {
    padding-top:0px !important;
   }
   .target-container {
     padding:0px;
   }
   .trading-container-blue {
     padding:10px;
   }
   .yellow-container {
    margin-top:1rem;
    padding:20px;
   }

 }
   
</style>

<main>
   <!-- 01 -->
   <section class="sec-pd  p-r-80"><div class="container"><div class="row"><div class="col-12 col-md-11 col-lg-10 mx-auto"><div class="row"><div class="col-12 col-md-11 offset-md-1"><div class="mb-r-80 col-md-10 col-lg-10 px-0"> <span class="d-block fnt-14 text-capitalize mb-2 clr-default">projects</span><h1 class="fnt-50 fnt-800 mb-3 mb-md-4 red-stroke red-stroke--small13 px-md-0">First-of-its-kind fantasy trading platform, a gamified experience of the financial markets.</h1><p class="fnt-24">A disruptive concept for an immersive experience of the financial markets making trading accessible and seamless for everyday user.</p><div class="project-type">
<span class="fnt-14 clr-black354">Trading Leagues</span>
<span class="fnt-14 clr-black354">India</span>
<span class="fnt-14 clr-black354">Mobile Application Design </span></div></div></div></div><div class="reveal-project"><div class="play-video-on-scroll"><div id="play2-out" style="display:none"><div id="play2" data-plyr-provider="vimeo" data-plyr-embed-id="https://player.vimeo.com/video/764113737?h=b5566c2bf1"></div></div><video class="playvid" autoplay="" muted="" loop="" playsinline="" embed-id="https://player.vimeo.com/video/764113737?h=b5566c2bf1" provider="vimeo" poster="https://lollypop.design/wp-content/uploads/2022/10/eshakthi-project-video-thumbnail.webp"></video></div></div></div></div></div>
</section>
<!-- 02 -->
<section class="sec-pd sec-bnr p-r-80">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-11 col-lg-10 mx-auto">
          <div class="col-md-10 px-0 mx-auto">
          <div class="mb-r-80">
            <div class="project-step">
              <div class="project-step__item row">
                <div class="col-12 col-md-4 mb-3 mb-md-0"> 
                  <span class="clr-second fnt-18 d-inline-block fnt-700 text-uppercase data-scroll disc-head text-rpd text-rpd text-rpd--more" style="opacity: 1; transform: translateY(0px);">Brief</span>
                </div>
                <div class="col-12 col-md-8 project-step-disc">
                  <div class="project-step-disc__item">
                    <p>TradingLeagues started with a mission to empower all users who still find hassle in stock trading. However, with a diverse mix of experienced investors, day traders, and also inexperienced users, the level of engagement per user has become complicated. Aiming to be the one-stop destination for everyone who looking to participate with the financial markets, TradingLeagues will optimize stock trading activities and create an immersive experience for all users.</p>
                  </div>
                </div>
              </div>
              <div class="project-step__item row">
                <div class="col-12 col-md-4 mb-3 mb-md-0">
                  <span class="clr-second fnt-18 d-inline-block fnt-700 text-uppercase data-scroll disc-head text-rpd text-rpd text-rpd--more" style="opacity: 1; transform: translateY(0px);">Discover</span>
                  </div>
                  <div class="col-12 col-md-8 project-step-disc">
                    <div class="project-step-disc__item">
                    <p>Trading in the stock markets has been gaining popularity around the world, especially in India. Millennials and gen-z are turning to the stock markets to supplement their income from their daily jobs. This has been caused by growing awareness about the stock market and easy access to trading services at a low cost. With this, we began our research by conducting workshops and conversing with our stakeholders to understand the core consumers, their workflows, pain points, technical constraints, and their product goals and expectations. Based on what we defined the problem statement, we identified the approach to be taken for this project.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
</section>
<!-- 3 -->
<section class="d-none d-md-block">
   <div class="container">
    <div class="row">
      <div class="col-12 col-md-11 col-lg-10 mx-auto">
          <div class="d-flex">
              <div class="col-12 col-md-4">
                  <img class="img-fluid"  src= "<?php echo get_template_directory_uri(); ?>/img/trading-portfolio/Battle League.png">
              </div>
              <div class="col-12 col-md-4 mrg-btm-130">
                  <img class="img-fluid"  src= "<?php echo get_template_directory_uri(); ?>/img/trading-portfolio/Battle League (2).png">
              </div>
              <div class="col-12 col-md-4">
                  <img class="img-fluid"  src= "<?php echo get_template_directory_uri(); ?>/img/trading-portfolio/Battle League (1).png">
              </div>
          </div>  
       </div>
    </div>
  </div>
</section>
<!-- responsive of the crads -->
<section class="d-block d-md-none">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
          <div class="single-item">
             <div>
                 <img class="img-fluid"  src= "<?php echo get_template_directory_uri(); ?>/img/trading-portfolio/Battle League.png">
              </div>

               <div>
                 <img class="img-fluid"  src= "<?php echo get_template_directory_uri(); ?>/img/trading-portfolio/Battle League (2).png">
              </div>

               <div>
                 <img class="img-fluid"  src= "<?php echo get_template_directory_uri(); ?>/img/trading-portfolio/Battle League (1).png">
              </div>

          </div>
      </div>
    </div>
  </div>
</section>

<!-- 4 -->
<section class="p-r-80 pb-0 pare-define">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-11 col-lg-10 mx-auto">
          <div class="col-md-10 px-0 mx-auto">
          <div class="mb-r-80">
            <div class="project-step">
              <div class="project-step__item row">
                <div class="col-12 col-md-4 mb-3 mb-md-0"> 
                  <span class="clr-second fnt-18 d-inline-block fnt-700 text-uppercase data-scroll disc-head text-rpd text-rpd text-rpd--more" style="opacity: 1; transform: translateY(0px);">Define</span>
                </div>
                <div class="col-12 col-md-8 project-step-disc">
                  <div class="project-step-disc__item">
                    <p>India, a country with 1.38 Billion population, more than 90% of people don't understand fintech. With this app, we wanted to target users who are interested in trading but fear the platform due to its complexity. In order to define the platform, we worked closely with the TradingLeagues team. The mission was clear, to redefine how the average user interacts with the financial markets through the power of gamification, drive financial inclusion to the stock markets and help move the needle with investor participation rates. </p>
                  </div>
                </div>
              </div>
              <div class="project-step__item row">
                <div class="col-12 col-md-4 mb-3 mb-md-0">
                  <span class="clr-second fnt-18 d-inline-block fnt-700 text-uppercase data-scroll disc-head text-rpd text-rpd text-rpd--more" style="opacity: 1; transform: translateY(0px);">Wireframes</span>
                  </div>
                  <div class="col-12 col-md-8 project-step-disc">
                    <div class="project-step-disc__item">
                    <p>Our focus was on breaking the complexity of each game in an easy-to-understand manner. We segregated each game with its own landing pages, which allows users to go through one game at a time. Providing a ‘how to play’ page, was a big help for the first-time user. Through our wireframes, we provided the customers with in-depth information about the product, the games, rules, and policies which in turn built trust in the consumers’ minds.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
</section>
<!-- 5 -->
<section>
   <div class="container">
    <div class="row">
            <div class="col-md-3 col-3">
                <div class="iphonepro-con-1">
                  <img class="img-fluid"  src= "<?php echo get_template_directory_uri(); ?>/img/trading-portfolio/iPhone 12 Pro.png">
                  <img class="img-fluid"  src= "<?php echo get_template_directory_uri(); ?>/img/trading-portfolio/iPhone 12 Pro (1).png">
                </div> 
            </div>
            <div class="col-md-3 col-3">
                <div class="iphonepro-con-2">
                  <img class="img-fluid"  src= "<?php echo get_template_directory_uri(); ?>/img/trading-portfolio/iPhone 12 Pro (2).png">
                  <img class="img-fluid"  src= "<?php echo get_template_directory_uri(); ?>/img/trading-portfolio/iPhone 12 Pro (3).png">
                </div>
            </div>
            <div class="col-md-3 col-3">
                <div class="iphonepro-con-3">
                  <img class="img-fluid"  src= "<?php echo get_template_directory_uri(); ?>/img/trading-portfolio/iPhone 12 Pro (4).png ">
                  <img class="img-fluid"  src= "<?php echo get_template_directory_uri(); ?>/img/trading-portfolio/iPhone 12 Pro (5).png">
                </div>
            </div>
            <div class="col-md-3 col-3">
              <div class="iphonepro-con-4">
                <img class="img-fluid"  src= "<?php echo get_template_directory_uri(); ?>/img/trading-portfolio/iPhone 12 Pro (6).png">
                <img class="img-fluid"  src= "<?php echo get_template_directory_uri(); ?>/img/trading-portfolio/iPhone 12 Pro (7).png">
              </div>
            </div>
             
    </div>
    
   </div>
</section>
<!-- 6 -->
<section class="p-r-80 pb-0 pare-define sec-pad-100">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-11 col-lg-10 mx-auto">
          <div class="col-md-10 px-0 mx-auto">
          <div class="mb-r-80">
            <div class="project-step">
              <div class="project-step__item row">
                <div class="col-12 col-md-4 mb-3 mb-md-0"> 
                  <span class="clr-second fnt-18 d-inline-block fnt-700 text-uppercase data-scroll disc-head text-rpd text-rpd text-rpd--more" style="opacity: 1; transform: translateY(0px);">DeSign</span>
                </div>
                <div class="col-12 col-md-8 project-step-disc">
                  <div class="project-step-disc__item">
                    <p>We wanted to come up with something fun, distinct, and memorable to showcase such complex trading patterns by bringing in the gamification aspect and making it seamless even for the rookie trader to engage with the app. Thus our inspiration comes from the 'Monopoly' game which most people might have played once in childhood. We captured the texture of cards, and vibrant colors and applied the essence to the digital assets of the app making it playable and effortless.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
   <div class="row">
    <div class="col-12 col-md-11 col-lg-10 mx-auto">
        <div class="threiphone-container">
             <img class="img-fluid"  src= "<?php echo get_template_directory_uri(); ?>/img/trading-portfolio/iphone-group.png">
        </div>
         <div class="d-none d-md-block">
            <div class="d-flex">
                <div class="col-12 col-md-4 mb-3 mb-md-0 card-iphone-content"> 
                  <span class="clr-second fnt-40 d-inline-block fnt-600" style="opacity: 1; transform: translateY(0px);">Navigation</span>
                  <p>The users must be easily able to navigate through the platform to achieve their goals. In order to properly optimize, it is important to determine the main actions the user takes on a page and design the user experience accordingly.</p>
                </div>
                <div class="col-12 col-md-4 mb-3 mb-md-0 card-iphone-content"> 
                  <span class="clr-second fnt-40 d-inline-block fnt-600 " style="opacity: 1; transform: translateY(0px);">Familiarity</span>
                  <p>Utilize vertical mode with a bottom menu for familiarity and take leverage of the user's mental model which helps reduce the learning curve. Landscape mode creates an immersive experience for user and helps user focus only on what is important.</p>
                </div>
                <div class="col-12 col-md-4 mb-3 mb-md-0 card-iphone-content"> 
                  <span class="clr-second fnt-40 d-inline-block fnt-600 " style="opacity: 1; transform: translateY(0px);">Engagement</span>
                  <p>Provide engaging onboarding at the beginning of the user’s journey to hook and help them familiarize themselves with our product (for beginner users). A guidance or demo should be existed to guide users through their journey. </p>
                </div>
            </div>
          </div>
        <div class="d-block d-md-none">
              <div class="single-item">
                  <div>
                        <div class="col-12 col-md-4 mb-3 mb-md-0 card-iphone-content"> 
                          <span class="clr-second fnt-40 d-inline-block fnt-600" style="opacity: 1; transform: translateY(0px);">Navigation</span>
                          <p>The users must be easily able to navigate through the platform to achieve their goals. In order to properly optimize, it is important to determine the main actions the user takes on a page and design the user experience accordingly.</p>
                      </div>
                    </div>

                    <div>
                        <div class="col-12 col-md-4 mb-3 mb-md-0 card-iphone-content"> 
                            <span class="clr-second fnt-40 d-inline-block fnt-600 " style="opacity: 1; transform: translateY(0px);">Familiarity</span>
                            <p>Utilize vertical mode with a bottom menu for familiarity and take leverage of the user's mental model which helps reduce the learning curve. Landscape mode creates an immersive experience for user and helps user focus only on what is important.</p>
                        </div>
                    </div>
                    <div>
                        <div class="col-12 col-md-4 mb-3 mb-md-0 card-iphone-content"> 
                            <span class="clr-second fnt-40 d-inline-block fnt-600 " style="opacity: 1; transform: translateY(0px);">Engagement</span>
                            <p>Provide engaging onboarding at the beginning of the user’s journey to hook and help them familiarize themselves with our product (for beginner users). A guidance or demo should be existed to guide users through their journey. </p>
                        </div>
                    </div>

                </div>

              </div>
        </div>
   </div>
</section>
<!-- 7 -->
<section class="p-r-80 pb-0 pare-define sec-pad-100 sec-marg-100">
  <div class="container">
        <div class="row">
          <div class="col-12 col-md-11 col-lg-10 mx-auto">
              <div class="col-md-10 px-0 mx-auto">
              <div class="mb-r-80">
                <div class="project-step sec-marg-100 blue-pad">
                  <div class="project-step__item row">
                    <div class="col-12 col-md-4 mb-3 mb-md-0"> 
                      <span class="clr-second fnt-18 d-inline-block fnt-700 text-uppercase data-scroll disc-head text-rpd text-rpd text-rpd--more" style="opacity: 1; transform: translateY(0px);">Typography</span>
                    </div>
                    <div class="col-12 col-md-8 project-step-disc">
                      <div class="project-step-disc__item">
                        <p>Typography played a big role in the concept. Each game had a unique personality which needed to be expressed with different fonts to make them stand out from each other. 
                             Our illustrators custom-created title fonts by combining fonts that exist and adding a touch of depth, shadows, and perspectives. For the interface to make all the copy readable, legible, and scalable to the audience we choose Barlow, a google font that is tried and tested for all devices and easy to load.</p>
                      </div>
                    </div>
                  </div>
                </div>
                 <div class="blue-barlow-container col-12 col-md-12">
                        <div>
                            <div class="barlow-aa mb-4"><img class="img-fluid"  src= "<?php echo get_template_directory_uri(); ?>/img/trading-portfolio/Aa.png"> <span>Barlow</span></div>
                            <div><p class="text-capitalize">ABCDEFGHIJKLMNOPQRSTUVWXYZ</p></div>
                            <div><p class="text-lowercase">ABCDEFGHIJKLMNOPQRSTUVWXYZ</p></div>
                            <div><p>1234567890</p></div>
                            <div><p>!@#$%^&*()?/</p></div>
                        </div>
                       <div class="barlow-iphone">
                          <img class="img-fluid"  src= "<?php echo get_template_directory_uri(); ?>/img/trading-portfolio/AA-iphone.png">
                       </div>
                    </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </section>
  <!-- 8 -->
  <section class="p-r-80 pb-0 pare-define sec-pad-100">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-11 col-lg-10 mx-auto">
          <div class="col-md-10 px-0 mx-auto">
          <div class="mb-r-80">
            <div class="project-step">
              <div class="project-step__item row">
                <div class="col-12 col-md-4 mb-3 mb-md-0"> 
                  <span class="clr-second fnt-18 d-inline-block fnt-700 text-uppercase data-scroll disc-head text-rpd text-rpd text-rpd--more" style="opacity: 1; transform: translateY(0px);">Colors</span>
                </div>
                <div class="col-12 col-md-8 project-step-disc">
                  <div class="project-step-disc__item">
                    <p>In order to do justice to the concept, we choose colors that are vibrant and eye-catchy even from afar. Typography being the governing material in design, colors become the life-giver, we can also say that it’s an aesthetic amalgamation. Since colors communicate emotions we used them as a powerful tool to empower content across the app.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
  <div class="d-none d-md-block">
        <div class="row">
            <div class="col-md-5 d-flex">
                <div class="green-color color-box">
                    <p>Primary Color</p>
                    <span>#00DF8D</span>
                </div>
                <div class="blue-color color-box">
                  <p>Primary Color</p>
                    <span>#2031AE</span>
                </div>
            </div>
          <div class="col-md-7 d-flex">
                
                      <div class="sky-blue-color color-box">
                          <p>Secondary Color</p>
                          <span>#74D5FF</span>
                      </div>
                      <div class="orange-color color-box">
                          <p>Secondary Color</p>
                          <span>#FF6C40</span>
                      </div>
                      <div class="yellow-color color-box">
                          <p>Secondary Color</p>
                          <span>#F5CC51</span>
                      </div>
                      <div class="pink-color color-box">
                          <p>Secondary Color</p>
                          <span>#FFC0D5</span>
                      </div>
                    </div>
            
          </div>
       </div>
  </div>
  
  <div class="d-block d-md-none">
     <div class="row">
        <div class="single-item">
            <div>
              <div class="green-color color-box">
                <p>Primary Color</p>
                <span>#00DF8D</span>
              </div>
          </div>
          <div>
                <div class="blue-color color-box">
                    <p>Primary Color</p>
                      <span>#2031AE</span>
                </div>
          </div>
          <div>
              <div class="sky-blue-color color-box">
                  <p>Secondary Color</p>
                  <span>#74D5FF</span>
              </div>
          </div>

          <div>
                <div class="orange-color color-box">
                    <p>Secondary Color</p>
                    <span>#FF6C40</span>
                </div>
          </div>

            <div>
              <div class="yellow-color color-box">
                    <p>Secondary Color</p>
                    <span>#F5CC51</span>
              </div>
            </div>

            <div>
                <div class="pink-color color-box">
                  <p>Secondary Color</p>
                  <span>#FFC0D5</span>
                </div>
            </div>

        </div>
      </div>
  </div>
</section>
<!-- 9 -->
<section class="p-r-80 pb-0 pare-define mt-5">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-11 col-lg-10 mx-auto">
            <div class="col-md-10 px-0 mx-auto">
            <div class="mb-r-80">
              <div class="project-step">
                <div class="project-step__item row">
                  <div class="col-12 col-md-4 mb-3 mb-md-0"> 
                    <span class="clr-second fnt-18 d-inline-block fnt-700 text-uppercase data-scroll disc-head text-rpd text-rpd text-rpd--more" style="opacity: 1; transform: translateY(0px);">UI Design</span>
                  </div>
                  <div class="col-12 col-md-8 project-step-disc">
                    <div class="project-step-disc__item">
                      <p>Great data visualization goes beyond aesthetics, it helps the user view patterns and draws complex insights making big data less overwhelming. We wanted to come up with something fun, distinct, and memorable to showcase such complex trading games and patterns. We evaluated our designs internally and externally with proven practices to measure their effectiveness in regard to credibility and usability. The concept got a lot of attention and was marked as a disruptive design in the fintech domain.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    <div class="row">
       <div class="col-md-4 trading-container">
            <h3>Trading, Reimagined!</h3>
             <p>A new, fun and effortless experience of the stock markets.</p>
       </div>
    </div>
    <div class="row">
        <div class="trading-container-blue position-relative">
           <div class="trading-iphone ">
               <img class="img-fluid"  src= "<?php echo get_template_directory_uri(); ?>/img/trading-portfolio/trading-iphone.png">
            </div>
             <div class="trading-group position-absolute">
                <img class="img-fluid"  src= "<?php echo get_template_directory_uri(); ?>/img/trading-portfolio/trading-group.png">
             </div>
        </div>
    </div>
     <div class="row mt-3">
         <div class="col-md-6">
            <div class="blue-container">
                <img class="img-fluid"  src= "<?php echo get_template_directory_uri(); ?>/img/trading-portfolio/iPhone 12-league-1.png">
            </div>
         </div>
         <div class="col-md-6">
            <div class="trading-container-blue">
                <img class="img-fluid mb-3"  src= "<?php echo get_template_directory_uri(); ?>/img/trading-portfolio/card-1.png">
                <img class="img-fluid"  src= "<?php echo get_template_directory_uri(); ?>/img/trading-portfolio/card-2.png">
            </div>
         </div>
     </div>
  </section>
  <!-- 10 -->
   <section class="p-r-80 pb-0 pare-define mt-5 sec-pad-100 mrg-btm-130">
    <div class="container">
      <div class="row">
          <div class="col-md-4">
              <img class="img-fluid"  src= "<?php echo get_template_directory_uri(); ?>/img/trading-portfolio/01.png">
          </div>
          <div class="col-md-8 trading-container">
              <h3>Battle Leagues</h3>
              <p>Vote for a stock that you believe will outperform the other!</p>
          </div>
      </div>
       <div class="d-none d-md-block">
            <div class="row">
                <div class="orange-container">
                    <div class="d-flex orange-container-phone">
                        <img class="img-fluid"  src= "<?php echo get_template_directory_uri(); ?>/img/trading-portfolio/orange-1.png">
                        <img class="img-fluid mx-3"  src= "<?php echo get_template_directory_uri(); ?>/img/trading-portfolio/orange-2.png">
                        <img class="img-fluid"  src= "<?php echo get_template_directory_uri(); ?>/img/trading-portfolio/orange-3.png">
                    </div>
                </div>
            </div>
        </div>
        <div class="d-block d-md-none">
              <div class="orange-container">
                    <div class="single-item">
                          <div>
                            <img class="img-fluid"  src= "<?php echo get_template_directory_uri(); ?>/img/trading-portfolio/orange-1.png">
                          </div>
                          <div>
                            <img class="img-fluid"  src= "<?php echo get_template_directory_uri(); ?>/img/trading-portfolio/orange-2.png">
                          </div>
                          <div>
                            <img class="img-fluid"  src= "<?php echo get_template_directory_uri(); ?>/img/trading-portfolio/orange-3.png">
                          </div>
                    </div>    
              </div>
        </div>
  </div>
</section>
<!-- 11 -->
 <section class="p-r-80 pb-0 pare-define mt-5 sec-pad-100 position-relative target-sec">
    <div class="container">
      <div class="row">
         <div class="col-md-10 step-2">
             <img class="img-fluid"  src= "<?php echo get_template_directory_uri(); ?>/img/trading-portfolio/02.png">
         </div>
      </div>
       <div class="row">
          <div class="col-md-6">
              <div class="target-container trading-container-blue">
                 <h3>Target Leagues</h3>
                 <p>Accurately select the price bracket you expect a stock to trade at, by the end of the game!</p>
                  <img class="img-fluid"  src= "<?php echo get_template_directory_uri(); ?>/img/trading-portfolio/target-1.png">
              </div>
          </div>
           <div class="col-md-6">
                <div class="yellow-container yellow-mrg">
                    <img class="img-fluid"  src= "<?php echo get_template_directory_uri(); ?>/img/trading-portfolio/target-2.png">
                </div>
                <div class="yellow-container mt-4">
                    <img class="img-fluid"  src= "<?php echo get_template_directory_uri(); ?>/img/trading-portfolio/target-3.png">
                </div>
           </div>
       </div>
    </div>
  </section>
  <!-- 12 -->
  <section class="p-r-80 pb-0 pare-define mt-5 sec-pad-100 mrg-btm-130">
    <div class="container">
      <div class="row">
          <div class="col-md-5">
              <img class="img-fluid"  src= "<?php echo get_template_directory_uri(); ?>/img/trading-portfolio/03.png">
          </div>
          <div class="col-md-7 trading-container">
              <h3>Classic Leagues</h3>
              <p>Compete against the best day traders on your favorite Index!</p>
          </div>
      </div>
      <div class="row sec-pad-100">
         <div class="col-md-6">
           <div class="pink-container">
              <img class="img-fluid"  src= "<?php echo get_template_directory_uri(); ?>/img/trading-portfolio/classic-1.png">
           </div>
         </div>
         <div class="col-md-6">
             <div class="trading-container-blue classic-blue">
                   <img class="img-fluid"  src= "<?php echo get_template_directory_uri(); ?>/img/trading-portfolio/classic-2.png">
              </div>
         </div>
      </div>
    </div>
  </section>
  <!-- 13 -->
    <section class="p-r-80 pb-0 pare-define mt-5 sec-pad-100 mrg-btm-130">
    <div class="container">
      <div class="row">
         <div class="blue-container selection">
           <div class="d-flex col-md-12 selection-container">
              <div class="blue-container-text col-md-5 mb-5">
                  <h3>Selection Leagues</h3>
                 <p>Build a fantasy portfolio of 4-6 stocks to compete with other players. The best portfolio wins!</p>
              </div>
               <img class="img-fluid"  src= "<?php echo get_template_directory_uri(); ?>/img/trading-portfolio/04.png">
           </div>
         <img class="img-fluid"  src= "<?php echo get_template_directory_uri(); ?>/img/trading-portfolio/selection-group.png">
         </div>
      </div>
   </div>
  </section>
  <!-- 14 -->
    <section class=" sec-pt sec-pad-100">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-11 col-lg-10 mx-auto">
            <div class="col-md-10 px-0 mx-auto">
              <div>
                <div class="col-md-10 px-0 mx-auto">
                  <div class="mb-r-80">
                    <div class="project-step">
                      <div class="project-step__item row">
                        <div class="col-12">
                          <h3 class="clr-second fnt-40 text-left fnt-800 d-inline-block text-capital data-scroll" style="opacity: 1; transform: translateY(0px);">Conclusion</h3>
                        </div>
                        <div class="col-12 col-md-10 project-step-disc">
                          <div class="project-step-disc__item conclustion ">
                            <p class="mb-5">What we learnt from this project?</p>
                            <ul class="li-disc m-0">
                              <li class="fnt-16 clr-black-354 data-scroll" style="opacity: 1; transform: translateY(0px);">Providing engaging onboarding at the beginning of the user’s journey to hook, help them familiarize themselves with our product (for beginner users)</li>
                              <li class="fnt-16 clr-black-354 data-scroll" style="opacity: 1; transform: translateY(0px);">As our product is for new users who know nothing about trading, educational content and providing a guide, made users come back to explore further.</li>
                              <li class="fnt-16 clr-black-354 data-scroll" style="opacity: 1; transform: translateY(0px);">A big part of making learning easy comes from how the content is structured. Information that is divided into bite-sized lessons, gives the users autonomy to create their own learning path.</li>
                              <li class="fnt-16 clr-black-354 data-scroll" style="opacity: 1; transform: translateY(0px);">Pushing more on social functions such as connecting users, creating discussion between users/groups, have a leaderboard and reward system made the discovery of the product inquisitive resulting in 1 million downloads within a month of launch.</li>
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
</section>
<!-- 15 -->
<section class="sec-footer-trans">
<div class="container z-1">
   <img class="img-fluid thinking-card-img"  src= "<?php echo get_template_directory_uri(); ?>/img/trading-portfolio/Scene.png">
<div class="row"> 
<div class="col-12 col-md-11 col-lg-10 mx-auto thinking-card">
<div class="py-70 px-3 data-scroll" style="background: #221429;">
<div class="d-flex align-items-center justify-content-center">
<div class="col-12 col-md-8 col-lg-7 px-0 d-inline-block clr-white text-center">
<div class="mb-45"><span class="d-block fnt-24 mb-2 pb-2 mb-md-4 pb-md-0">Thinking of design?</span>
	<h2 class="fnt-50 fnt-800 clr-white">Let’s craft brilliance together!</h2>
	</div>
	<a class="web-btn web-btn--red" href="<?php the_sub_field('cta_url'); ?>">Thinking of design?</a>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
</main>
<p class="locations_name d-none"><?php the_field('locations_name'); ?></p>
<script src="<?php echo get_template_directory_uri(); ?>/js/slider.js" defer></script>
<script>
var locas = $('.locations_name').text();
$('.nav-dropdown-text').text(locas);
</script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
 
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js'>
<?php
get_footer();
?>

<Script>


  $('.single-item').slick({
  dots: false,
  infinite: false,
  arrows:false,
  speed: 300,
  slidesToShow: 1,
  slidesToScroll: 1,
  
});
  </script>