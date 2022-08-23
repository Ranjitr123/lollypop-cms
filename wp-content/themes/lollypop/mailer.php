<?php
/**
 Template Name: Mailer
 */

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
                  <div class="enquiry-head"><span class="d-block fnt-14 text-capitalize mb-2 ms-md-1 clr-default">Let’s talk</span>
                    <div class="red-stroke red-stroke--small13 px-md-0">
                      <h1 class="fnt-78 fnt-800 mb-3 mb-md-4">
                         Let’s craft<span class="d-block">brilliance together</span></h1>
                      <p class="fnt-24">Got something in mind? We’d love to help.</p>
                    </div>
                  </div>
                  <form id="mailer-form" data-parsley-validate="">
                    <div class="enquiry-form">
                      <div class="enquiry-form__item data-scroll">
                        <div class="col-md-6 col-lg-8 px-0 mb-2">
                          <h3 class="fnt-28 fnt-800 mb-1">What are you looking for?</h3>
                          <p class="fnt-14 label">Want to be partners in design? Looking for UX/ UI research or product branding? Post your query now, and we’ll get in touch with you soon!</p>
                        </div>
                        <div class="input input--textarea"> 
                          <textarea class="in-animate" name="description" type="text" placeholder="Help us know a little about your requirement to kick start a meaningful conversation."  data-parsley-error-message="Enter the Message" required></textarea><span class="input__require fnt-14">Important</span><span class="focus-border"><i></i></span>
                          <div class="bx"></div>
                        </div>
                      </div>
                      <div class="enquiry-form__item mb-field-80 data-scroll">
                        <div class="col-md-8 col-lg-8 px-0"> 
                          <p class="label fnt-14">If you have a requirement brief or document, share it with us here:</p>
                          <div class="file d-flex flex-column flex-md-row align-items-md-center">
                            <div class="file__attach d-flex align-items-center">
                              <input id="file-upload" name="attachment" type="file" accept="application/pdf">
                              <label class="file-uplod w-100 d-flex align-items-center" for="file-upload"><span class="fnt-16" id="filename">Attach your Document</span></label>
                              <div class="file-reset d-none"> <span class="d-inline-block">&#x2715;</span></div>
                            </div>
                            <div class="file__eror col-12 mt-2 mt-md-0 col-md-4 ms-md-4 px-0"> <span class="d-block px-0 clr-gray94 fnt-14">File size not more than 2 MB</span></div>
                          </div>
                        </div>
                      </div>
                      <div class="enquiry-form__item data-scroll">
                        <div class="mb-2">
                          <h3 class="fnt-28 fnt-800 mb-1">Your details</h3>
                          <p class="label fnt-14">Project related discussions only. No spam!</p>
                          <div class="row">
                            <div class="col-12 col-md-6 mb-fld"> 
                              <div class="input"> 
                                <input class="in-animate" type="text" name="full_name" id="full_name" placeholder="Your Name"><span class="focus-border"><i></i></span>
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
                                <input class="in-animate" type="number" name="phone" id="phone" placeholder="Your Phone"><span class="focus-border"><i></i></span>
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
