<?php
/**
 *  Template Name: General Enquiry
 *   */

get_header();
?>


 <main class="main">
      <!--01-->
      <!-- Enquiry Form-->
      <div id="enqform">
      <section class="sec-pd sec-bnr sec-pb"> 
        <div class="container"> 
          <div class="row">
            <div class="col-12 col-md-11 col-lg-10 mx-auto">
              <div class="row"> 
                <div class="col-12 col-md-10 col-lg-9 offset-md-1">
                  <div class="enquiry-head"><span class="d-block fnt-14 text-capitalize mb-2 ms-md-1 clr-default">Let's talk</span>
                    <div>
                      <h1 class="fnt-78 red-stroke px-0 fnt-800 mb-3 mb-md-4">
                         Let us know<span class="d-block">how can we help</span></h1>
                      <p class="fnt-24">Got something in mind? We'd love to help.</p>
                    </div>
                  </div>
                  <form id="general-form" data-parsley-validate="">
                    <div class="enquiry-form">
                      <div class="enquiry-form__item data-scroll">
                        <div class="col-md-6 col-lg-8 px-0 mb-2">
                          <h3 class="fnt-28 fnt-800 mb-1">What are you looking for?</h3>
                          <p class="fnt-14 label">Post your query now, and we'll get in touch with you soon!</p>
                        </div>
                        <div class="input input--textarea"> 
                          <textarea class="in-animate" name="description" type="text" placeholder="Help us know a little about your query."  data-parsley-error-message="Enter the Message" required></textarea><span class="input__require fnt-14">Important</span><span class="focus-border"><i></i></span>
                          <div class="bx"></div>
                        </div>
                      </div>
                      <div class="enquiry-form__item data-scroll">
                        <div class="mb-2">
                          <h3 class="fnt-28 fnt-800 mb-1">Your details</h3>
                        
                          <div class="row">
                            <div class="col-12 col-md-6 mb-fld"> 
                              <div class="input"> 
                                <input class="in-animate" required type="text" name="full_name" id="full_name" placeholder="Your Name"><span class="input__require fnt-14">Important</span><span class="focus-border"><i></i></span>
                                <div class="bx"></div>
                              </div>
                            </div>
                          </div>
                          <div class="row"> 
                            <div class="col-12 col-md-6 mb-fld mb-md-0"> 
                              <div class="input"> 
                                <input class="in-animate" type="email" name="email" id="email" placeholder="Your Email" data-parsley-error-message="Enter Valid Email"  required><span class="input__require fnt-14">Important</span><span class="focus-border"><i></i></span>
                                <div class="bx"></div>
                              </div>
                            </div>
                            <div class="col-12 col-md-6"> 
                              <div class="input">
                                <input class="in-animate" required type="number" name="phone" id="phone" placeholder="Your Phone"><span class="input__require fnt-14">Important</span><span class="focus-border"><i></i></span>
                                <div class="bx"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <button class="js-submit data-scroll web-btn web-btn--primary fnt-800imp" type="submit">Send Enquiry</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      </div>
     
    </main>


<?php
get_footer();
?>

<script>
  $(document).ready(function(){
   $('#enqform').submit(function (e, data) {
      //alert('hi');
	   });
	 });
  </script>