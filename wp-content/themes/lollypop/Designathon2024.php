<?php

/**
 *  Template Name: Designathon2024
 *  */

get_header('designathon23');
?>
<style>
  body {
    padding-bottom: 0 !important;
    background: #FFF;
  }

  .js-page-scroll-top,
  .header {
    display: none;
  }


  .plyr__control--overlaid {
    opacity: 0;
  }

  .athon-header .h-li-nav {
    opacity: 0;
    pointer-events: none !important;
  }

  .jury__img::after {
    display: none;
  }

  /* common */
  .clr-orange {
    color: #F45B01;
  }

  .clr-yellow-brown {
    color: #E6CFAD;
  }

  .fnt-60 {
    font-size: 60px;
  }

  .fnt-700 {
    font-weight: 700;
  }

  .fnt-18 {
    font-size: 18px;
  }

  .fnt-600 {
    font-weight: 600;
  }

  .fnt-400 {
    font-weight: 400;
  }

  .btn-register {
    background-color: #F45B01;
    height: 50px;
    width: 228px;
    text-align: center;
    padding-top: 11px;
    border-radius: 6px;
  }

  .pt-56 {
    padding-top: 56px;
  }

  .pt-24 {
    padding-top: 24px;
  }

  .pt-32 {
    padding-top: 32px;
  }

  .lh-0 {
    line-height: 0px;
  }

  .fnt-switzer {
    font-family: Switzer;
  }

  .clr-darkblue {
    color: #02323E;
  }

  .pt-120 {
    padding-top: 120px;
  }

  .mt-124 {
    margin-top: 124px;
  }

  /* Bannder */
  .sec-banner {
    background: url("<?php echo get_template_directory_uri(); ?>/assets/images/designathon2024/banner-vector.svg") no-repeat;
    background-color: #02323E !important;
    background-size: contain;
    content: "";
    top: 0;
    left: 0;
    width: 100%;
    height: auto;
  }

  .fnt-title {
    font-family: Clash Grotesk;
    letter-spacing: -2px;
    line-height: 64px;
  }

  .fnt-content {
    font-family: Switzer;
    line-height: 26px;
  }

  .btn-orange {
    display: inline-block;
    text-decoration: none;
    padding: 12px 36px;
    background: #F45B01;
    font-size: 18px;
    font-weight: 700;
    position: relative;
    height: 50px;
    -moz-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    transition: all 0.3s ease;
    line-height: 25px;
    width: 228px;
    text-align: center;
    border-radius: 6px;
  }

  .btn-orange:hover {
    color: #fff;
  }

  .v-line {
    height: 32px;
    width: 1px;
    border: 2px solid #F45B01;
    align-self: center;
  }

  /* 04 Cities */

  .fnt-130 {
    font-size: 130px;
  }

  .pb-98 {
    padding-bottom: 98px;
  }

  .fnt-clash {
    font-family: 'Clash Grotesk';
  }

  .fnt-cities {
    opacity: 30%;
    font-size: 98px;
  }

  .cities-wrapper {
    position: absolute;
  }

  .cities {
    position: relative;
    top: -115px;
  }

  .cities-sm {
    position: relative;
    top: -35px;
  }

  .city-bengaluru,
  .city-mumbai,
  .city-chennai,
  .city-hyderabad {
    border-radius: 16px;
    width: 100%;
    height: auto;
    padding-top: 32px;
    padding-left: 32px;
  }


  .city-bengaluru {
    background: url("<?php echo get_template_directory_uri(); ?>/assets/images/designathon2024/bengaluru.svg") no-repeat;
    background-size: auto;
    background-color: #E6CFAD;
    background-position-x: right;
    background-position-y: bottom;
  }

  .city-mumbai {
    background: url("<?php echo get_template_directory_uri(); ?>/assets/images/designathon2024/mumbai.svg") no-repeat;
    background-size: auto;
    background-color: #E6CFAD;
    background-position-x: right;
    background-position-y: bottom;
  }

  .city-chennai {
    background: url("<?php echo get_template_directory_uri(); ?>/assets/images/designathon2024/chennai.svg") no-repeat;
    background-size: auto;
    background-color: #E6CFAD;
    background-position-x: right;
    background-position-y: bottom;
  }

  .city-hyderabad {
    background: url("<?php echo get_template_directory_uri(); ?>/assets/images/designathon2024/hyderabad.svg") no-repeat;
    background-size: auto;
    background-color: #E6CFAD;
    background-position-x: right;
    background-position-y: bottom;
  }

  /* Participate */

  .fnt-56 {
    font-size: 56px;
  }

  .pt-160 {
    padding-top: 160px;
  }

  .participate-wrapper {
    display: grid;
    grid-template-columns: repeat(3, 33.3%);
    gap: 0px;
    height: calc(100% + 50px);
  }

  .participate-item>img {
    border-radius: 16px;
  }

  .fnt-32 {
    font-size: 32px;
    line-height: 36px;
  }

  .participate-item {
    position: relative;
  }

  .participate-content {
    position: absolute;
    bottom: 125px;
    z-index: 10;
    width: 92%;
  }

  .participate-content>p {
    width: 90%;
    text-align: center;
  }

  .participate-bg {
    position: absolute;
    bottom: 50px;
    height: 175px;
    width: 91.7%;
    background: linear-gradient(180deg, rgba(0, 0, 0, 0), black);
    z-index: 1;
    border-radius: 16px;
  }

  .participate-bg::after {
    background: url("<?php echo get_template_directory_uri(); ?>/assets/images/designathon2024/bg-participate.svg") no-repeat;
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
    background-size: contain;
    background-position-y: bottom;
  }

  /* Event details */

  .section-event {
    padding-top: 120px;
  }

  .event-bg {
    background: #FAF5EF;
    border-radius: 24px;
    padding-top: 80px;
    padding-bottom: 100px;
  }

  .fnt-28 {
    font-size: 28px;
  }

  .rule {
    border-bottom: 1px solid #F45B01;
    opacity: 40%;
    margin: 20px 0;
  }

  .btn-event {
    width: 288px;
    margin-top: 20px;
  }

  /* Rule */
  .rule-wrapper {
    position: relative;

  }

  .rule-info {
    position: absolute;
    top: 66px;
    left: 64px;
  }

  .rule-wrapper>img {
    width: 100%;
    height: auto;
    border-radius: 24px;
  }

  /* Sponsor"> */
  .sponsor-item {
    border: 1px solid #E6CFAD99;
    border-radius: 16px;
    padding: 40px 32px;
  }

  .mt-64 {
    margin-top: 64px;
  }

  .mt-80 {
    margin-top: 80px;
  }

  /* footer */
  .img-footer {
    background: url("<?php echo get_template_directory_uri(); ?>/assets/images/designathon2024/footer.svg") no-repeat;
    background-size: 100%;
    padding-top: 112px;
  }

  @media (max-width: 1536px) {
    .participate-item>img {
      width: 92%;
    }
  }

  @media (max-width: 768px) {

    .pt-120 {
      padding-top: 60px;
    }

    .fnt-60 {
      font-size: 56px;
    }

    .fnt-56 {
      font-size: 40px;
    }

    .mt-124 {
      margin-top: 0px;
    }

    .pt-160 {
      padding-top: 80px;
    }

    .pt-56 {
      padding-top: 28px;
    }

    .banner_duration {
      width: 80%;
      align-self: center;
    }

    .citi-desc {
      margin-top: 200px;
      width: 85%;
    }

    .city-bengaluru,
    .city-mumbai,
    .city-chennai,
    .city-hyderabad {
      padding-top: 16px;
      padding-left: 16px;
    }

    .city-bengaluru,
    .city-mumbai,
    .city-chennai,
    .city-hyderabad {
      background-size: 60%;
    }

    .participate-wrapper {
      grid-template-columns: repeat(1, 100%);
      height: calc(100% + 150px);
    }

    .participate-content {

      width: 100%;
    }

    .participate-item>img {
      width: 100%;
    }

    .participate-bg {
      width: 100%;
    }

    .participate-content>p {
      width: 100%;
    }

    .event-wrapper>h3 {
      width: 50%;
    }

    .rule-info {
      top: 2px;
      left: 18px;
    }

    .rule-info__faq {
      font-size: 10px;
      margin-bottom: 0px;
      line-height: 16px;
    }

    .rule-info__heading {
      font-size: 12px;
      line-height: 16px;
    }

    .rule-info__btn {
      padding: 0px 0px;
      font-size: 10px;
      font-weight: 500;
      height: 24px;
      width: 100px;
      left: 12px;
    }

    .sponsor-item {
      padding: 20px 16px;
    }

    .img-footer {
      padding-top: 30px;
    }

    .event-bg {
      padding-top: 40px;
      padding-bottom: 50px;
    }

    .event-register {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .mt-64 {
      margin-top: 32px;
    }
  }

  .faq-el--athon .f-accordion__head::after {
    background-color: #02323E !important;
  }

  .faq-el--athon .f-accordion__head::before {
    background-color: #02323E !important;
  }

  li:last-child>hr {
    display: none;
  }
</style>

<main class="main">
  <!-- 01 -->
  <section class="sec-banner pt-lg-7 position-relative">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-12 text-center pt-56 px-0">
          <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon2024/logo.png" alt="logo" />
        </div>
        <div class="col-12 text-center d-flex justify-content-center pt-56">
          <h3 class="col-12 col-lg-7  fnt-60 fnt-700 fnt-title text-uppercase clr-yellow-brown mb-0">The <span class="clr-orange">ULTIMATE</span> Design Hackathon is back!</h3>
        </div>
        <div class="col-12 text-center d-flex justify-content-center pt-24">
          <p class="col-12 col-lg-7 clr-white fnt-400 fnt-switzer fnt-content mb-0">
            Unleash your inner design passion at our action-packed design hackathon!
            Meet fellow creative minds, ignite ideas, and conquer real-world challenges — all within a mere 24 hours!
          </p>
        </div>
        <div class="col-8 col-lg-3 text-center d-flex justify-content-center pt-32">
          <a id="banner_registration_form" target="_blank" href="<?php the_field('button_register') ?>" class="text-center btn-orange text-uppercase fnt-switzer clr-white">Register Now</a>
        </div>
        <div class="row d-flex justify-content-center pt-56">
          <div class="col-12 col-lg-7">
            <div class="row">
              <div class="col-4 text-center d-flex flex-column justify-content-center">
                <p class="clr-orange text-uppercase fnt-14 fnt-600 fnt-switzer lh-0">Date</p>
                <p class="clr-white text-uppercase fnt-20 fnt-700 fnt-switzer">26 - 27th April</p>
                <div class="v-line"></div>
              </div>
              <div class="col-4 text-center d-flex flex-column justify-content-center">
                <p class="clr-orange text-uppercase fnt-14 fnt-600 lh-0 fnt-switzer">Duration</p>
                <p class="clr-white text-uppercase fnt-20 fnt-700 fnt-switzer banner_duration">24 Hours</p>
                <div class="v-line"></div>
              </div>
              <div class="col-4 text-center d-flex flex-column justify-content-center">
                <p class="clr-orange text-uppercase fnt-14 fnt-600 lh-0 fnt-switzer">Designers</p>
                <p class="clr-white text-uppercase fnt-20 fnt-700 fnt-switzer">200+ Participants</p>
                <div class="v-line"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- 4 Cities -->
  <section class="section-04cities pt-120">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-12 col-md-5 col-lg-5 text-center d-flex flex-column">
          <div class="cities-wrapper">
            <h3 class="fnt-cities text-uppercase fnt-clash fnt-700">Cities</h3>
            <div class="cities">
              <h3 class="fnt-clash clr-darkblue text-uppercase fnt-130 fnt-700">04</h3>
              <h3 class="fnt-26 clr-orange fnt-700 text-uppercase cities-sm">Cities</h3>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-5 col-lg-5 d-flex flex-column mt-lg-5 citi-desc">
          <p class="fnt-20 fnt-500 fnt-switzer clr-darkblue mb-0">After last year's success in Bangalore, </p>
          <p class="fnt-20 fnt-500 fnt-switzer clr-darkblue mb-0">Chennai and Hyderabad, we're amping it up! </p>
          <p class="fnt-20 fnt-500 fnt-switzer clr-darkblue mb-0">Designathon is now hitting Mumbai too!</p>
        </div>
      </div>
      <div class="row d-flex justify-content-center mt-124">
        <div class="col-12 col-md-5 col-lg-5 d-flex flex-column mt-lg-5 mt-3">
          <div class="city-bengaluru">
            <div class="city-info">
              <h3>ಬೆಂಗಳೂರು</h3>
              <p class="mb-2 mb-lg-3">Lollypop Design Studio</p>
              <h3 class="pb-98">Bengaluru</h3>
            </div>
          </div>
          <div class="city-mumbai mt-md-4 mt-lg-4 mt-lg-4 mt-3">
            <div class="city-info">
              <h3>मुंबई</h3>
              <p class="mb-2 mb-lg-3">Lollypop Design Studio</p>
              <h3 class="pb-98">Mumbai</h3>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-5 col-lg-5 d-flex flex-column mt-3">
          <div class="city-chennai">
            <div class="city-info">
              <h3>சென்னை</h3>
              <p class="mb-2 mb-lg-3">Lollypop Design Studio</p>
              <h3 class="pb-98">Chennai</h3>
            </div>
          </div>
          <div class="city-hyderabad mt-md-4 mt-lg-4 mt-3">
            <div class="city-info">
              <h3>హైదరాబాద్</h3>
              <p class="mb-2 mb-lg-3">Lollypop Design Studio</p>
              <h3 class="pb-98">Hyderabad</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Why Participate? -->
  <section class="section-04cities pt-160">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-12 text-center">
          <h3 class="fnt-56 fnt-700 fnt-clash text-uppercase">Why Participate?</h3>
        </div>
      </div>
      <div class="row d-flex justify-content-center pt-56">
        <div class="col-12 col-md-12 col-lg-12 mx-auto">
          <div class="participate-wrapper">

            <div class="participate-item">
              <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon2024/budding.png" alt="logo" />
              <div class="participate-content">
                <p class="fnt-32 fnt-600 clr-white">Collaborate & network with <span class="clr-orange">budding designers</span></p>
              </div>
              <div class="participate-bg">
              </div>
            </div>

            <div class="participate-item">
              <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon2024/prize.png" style="background-color: #011517;" alt="logo" />
              <div class="participate-content">
                <p class="fnt-32 fnt-600 clr-white">Win cash prizes of up to <span class="clr-orange">Rs. 2,00,000 </span></p>
              </div>
              <div class="participate-bg">
              </div>
            </div>

            <div class="participate-item">
              <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon2024/pioneer.png" alt="logo" />
              <div class="participate-content">
                <p class="fnt-32 fnt-600 clr-white">Get mentored by top <span class="clr-orange">industry pioneers!</span></p>
              </div>
              <div class="participate-bg">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Evvent Details -->
  <section class="section-event">
    <div class="container">
      <div class="row event-bg d-flex justify-content-center mx-auto">
        <div class="col-12 col-lg-6 px-0 d-flex flex-column">
          <div class=" row d-flex justify-content-center mx-auto">
            <div class="col-12 col-lg-6 event-wrapper">
              <h3 class="fnt-56 fnt-700 clr-darkblue text-uppercase fnt-clash">Event Details</h3>
              <p>Unlock all the details about Designathon right here, right now! It's a must-know, so don't even think about skipping it!</p>
            </div>
          </div>
          <div class="img-event">
            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon2024/event-vector.svg" alt="logo" />
          </div>
        </div>
        <div class="col-12 col-lg-6 px-0 d-flex flex-column">
          <div class="row mx-auto">
            <div class="col-12 col-lg-8 event-details">
              <h3 class="fnt-20  fnt-600 clr-orange text-uppercase fnt-clash">01</h3>
              <div class="rule"></div>
              <h3 class="fnt-clash clr-darkblue text-capitalize fnt-28 fnt-600">registration process</h3>
              <p class="fnt-switzer  fnt-400 clr-darkblue  mb-0">Limited seats, big dreams! It's like winning the lottery. Stay tuned for that email confirmation if you are the chosen one. Registrations start on 4th April and closes on 9th April.</p>
            </div>
          </div>

          <div class="row mx-auto pt-56">
            <div class="col-12 col-lg-8">
              <h3 class="fnt-20  fnt-600 clr-orange text-uppercase fnt-clash">02</h3>
              <div class="rule"></div>
              <h3 class="fnt-clash clr-darkblue text-capitalize fnt-28 fnt-600">Date and Time</h3>
              <p class="fnt-switzer  fnt-400 clr-darkblue  mb-0">Mark your calendars for Designathon happening on the 26th-27th of April, 2024. Buckle up for a non-stop 24-hour ride through the world of design!</p>
            </div>
          </div>

          <div class="row mx-auto pt-56">
            <div class="col-12 col-lg-8">
              <h3 class="fnt-20  fnt-600 clr-orange text-uppercase fnt-clash">03</h3>
              <div class="rule"></div>
              <h3 class="fnt-clash clr-darkblue text-capitalize fnt-28 fnt-600">Location Preference</h3>
              <p class="fnt-switzer  fnt-400 clr-darkblue  mb-0">You will be allotted your team and the problem statement on the 26th of April, the same day you arrive at the venue.</p>
            </div>
          </div>

          <div class="row mx-auto pt-56">
            <div class="col-12 col-lg-8">
              <h3 class="fnt-20  fnt-600 clr-orange text-uppercase fnt-clash">04</h3>
              <div class="rule"></div>
              <h3 class="fnt-clash clr-darkblue text-capitalize fnt-28 fnt-600">Team Allocation</h3>
              <p class="fnt-switzer  fnt-400 clr-darkblue  mb-0">Drumroll please!! The award ceremony will take place after the final presentation to the jury members, on 27th April.</p>
            </div>
          </div>

          <div class="row mx-auto pt-56">
            <div class="col-12 col-lg-8">
              <h3 class="fnt-20  fnt-600 clr-orange text-uppercase fnt-clash">05</h3>
              <div class="rule"></div>
              <h3 class="fnt-clash clr-darkblue text-capitalize fnt-28 fnt-600">Awards</h3>
              <p class="fnt-switzer  fnt-400 clr-darkblue mb-0">Limited seats, big dreams! It's like winning the lottery. Stay tuned for that email confirmation if you are the chosen one. Registrations start on 4th April and closes on 9th April.</p>
            </div>
          </div>

          <div class="row mx-0 pt-56">
            <div class="col-12 col-lg-8 event-register">
              <div class="rule"></div>
              <h3 class="fnt-clash clr-darkblue text-capitalize fnt-24 fnt-600 mb-0">So what are you waiting for?</h3>
              <a target="_blank" href="<?php the_field('button_register') ?>" class="text-center btn-orange btn-event text-uppercase fnt-switzer clr-white">Register Now</a>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

  <!-- Designathon’23 -->
  <section class="section-04cities pt-120">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-12 col-lg-8 text-center">
          <h3 class="fnt-56 fnt-700 clr-darkblue fnt-clash text-uppercase">Here is a sneak peak of Designathon’23</h3>
        </div>
      </div>
      <div class="row d-flex justify-content-center pt-32">
        <div class="col-12 col-md-12 col-lg-12 mx-auto">
          <div class="mt-4 sec-video">
            <div class="text-center col-12 col-md-12 col-lg-12 col-xl-12 mx-auto">
              <a href="https://www.youtube.com/watch?v=o5qzJV9YGck" data-fancybox="">
                <img class="img-fluid lazyloaded" src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon2024/designathon2023.png" alt="video"></noscript>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Rule -->
  <section class="section-rule pt-120">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="rule-wrapper d-flex justify-content-center">
          <div class="col-12 text-center">
            <div class="row">
              <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon2024/rule1.png" alt="rule">
            </div>
          </div>
          <div class="rule-info">
            <div class="row d-flex flex-column">
              <p class="fnt-switzer rule-info__faq" style="color: #FFFAF1; font-weight: 400;">Keen to know more?</p>
              <h3 class="col-8 fnt-32 fnt-600 clr-white rule-info__heading">Rules and regulations to get you started</h3>
              <a target="_blank" href="<?php the_field('button_download') ?>" class="rule-info__btn text-center btn-orange text-uppercase fnt-switzer clr-white ms-lg-3 mt-lg-3 ms-0 mt-0">Download Pdf</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- OUR SPONSORS -->
  <section class="section-rule pt-120">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-10 text-center">
          <div class="row">
            <h3 class="fnt-56 fnt-700 fnt-clash clr-darkblue">OUR SPONSORS</h3>
          </div>
        </div>
        <div class="sponsor-info mt-64">
          <div class="row d-flex justify-content-center">
            <div class="col-12 col-lg-6">
              <div class="sponsor-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon2024/upstock.png" alt="upstock" />
                <p class="fnt-400 clr-darkblue pt-32">
                  Upstox is one of India's biggest digital investment platforms, with a mission of making financial investing simple, equitable, and accessible to everyone.
                  <br><br>
                  Upstox transforms the digital brokerage market with cutting-edge technological innovations, empowering Indians to engage comfortably in the equity market and create generational wealth through the power of compounding.
                  <br><br>The tech-enabled platform equips investors with an easy-to-use interface, handpicked market insights, and a wide range of investment choices.
                </p>
              </div>
            </div>
            <div class="col-12 col-lg-6 mt-lg-0 mt-3">
              <div class="sponsor-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/designathon2024/creditvidya.png" alt="creditvidya" />
                <p class="fnt-400 clr-darkblue pt-32">
                  Introducing Prefr(originally Creditvidya) an embedded lending-as-a-service platform that utilizes AI-driven underwriting to provide accessible unsecured loans for underserved customers.
                  <br><br>With a decade of experience in credit scoring, Prefr empowers internet platforms to acquire, engage, and monetize users, while partnering with lenders to expand their reach at a marginal cost.
                  <br><br>Together, they are bridging the financial gap for those earning under 50k and driving the future of inclusive lending.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="sec-faq pt-160">
    <div class="container">
      <div class=" faq-head col-12 text-center">
        <h6 class="fnt-56 fnt-700 clr-darkblue">WHEN IN DOUBT, ALWAYS ASK</h6>
      </div>
      <div class="row d-flex justify-content-center mt-80 mx-0">
        <div class="col-12 col-md-7 col-lg-7 d-flex flex-column px-0">
          <div class="faq-el--athon">
            <div class="faq-el__body">
              <ul class="px-0 mb-0 faq-ac row justify-content-between">
                <?php if (have_rows('qa')) : $i = 0;
                  while (have_rows('qa')) : the_row(); ?>
                    <li class=" col-12">
                      <div class="f-accordion <?php if ($i == 0) {
                                                echo " active";
                                              } ?>">
                        <div class="f-accordion__head">
                          <h6 class="fnt-20 fnt-600 clr-darkblue mb-0"><?php the_sub_field('faq_question') ?></h6>
                        </div>
                        <div class="f-accordion__body clr-darkblue fnt-400" style="<?php if ($i == 0) {
                                                                                      echo "display: block;";
                                                                                    } ?>">
                          <?php the_sub_field('faq_answer') ?>
                        </div>
                      </div>
                      <hr>
                    </li>
                <?php $i++;
                  endwhile;
                endif; ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
  </section>
  <section class="section-footer pt-120">
    <div class="img-footer"></div>
  </section>
</main>

<?php
get_footer('designathon2024');
?>

<script>
  // $(document).ready(function() {

  //   $(".designation-slider").slick({
  //     infinite: true,
  //     slidesToShow: 1,
  //     slidesToScroll: 1,
  //     dots: false,
  //     arrows: false,
  //     speed: 600,
  //     autoplay: !0,

  //   });
  // });

  // // Set the date we're counting down to
  // var countDownDate = new Date("Sep 13, 2023 23:59:59").getTime();

  // // Update the count down every 1 second
  // var x = setInterval(function() {

  //   // Get today's date and time
  //   var now = new Date().getTime();

  //   // Find the distance between now and the count down date
  //   var distance = countDownDate - now;

  //   // Time calculations for days, hours, minutes and seconds
  //   var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  //   var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  //   var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  //   var seconds = Math.floor((distance % (1000 * 60)) / 1000);
  //   // Output the result in an element with id="demo"
  //   document.getElementById("cdate").innerHTML = days < 10 ? '0' + days : days;
  //   document.getElementById("chour").innerHTML = hours < 10 ? '0' + hours : hours;
  //   document.getElementById("cminute").innerHTML = minutes < 10 ? '0' + minutes : minutes;
  //   document.getElementById("csecond").innerHTML = seconds < 10 ? '0' + seconds : seconds;

  //   // If the count down is over, write some text 
  //   if (distance < 0) {
  //     clearInterval(x);
  //     document.getElementById("cdate").innerHTML = 00;
  //     document.getElementById("chour").innerHTML = 00;
  //     document.getElementById("cminute").innerHTML = 00;
  //     document.getElementById("csecond").innerHTML = 00;
  //     document.getElementById("banner_registration_form").innerHTML = "Kết thúc đăng ký"
  //     document.getElementById("countdown_registration_form").innerHTML = "Kết thúc đăng ký"
  //     document.getElementById("event_registration_form").innerHTML = "Kết thúc đăng ký"
  //     document.getElementById("banner_registration_form").removeAttribute("href");
  //     document.getElementById("countdown_registration_form").removeAttribute("href");
  //     document.getElementById("event_registration_form").removeAttribute("href");
  //   }
  // }, 1000);
</script>