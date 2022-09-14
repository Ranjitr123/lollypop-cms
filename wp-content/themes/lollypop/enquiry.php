<?php
/**
 Template Name: Enquiry
 */

get_header();
?>
<style>
.header-nav>.nav-item:last-child .nav-link{
display: none;
}
#label-message-d678089d-e2e8-4138-a9dc-c3d2b6da4969 {
color: red;
font-family: 'Manrope';
font-style: normal;
font-weight: 800;
font-size: 28px;
line-height: 37px;
letter-spacing: -0.04em;
color: #221429;
margin-bottom: 24px;
}
.hs-button {
color: #fd2e35;
min-width: 140px;
line-height: 48px!important;
}
.hs-button{
background-color: none;
background: 0 0;
border: 2px solid #fd2e35;
font-size: 14px;
padding: 0 25px !important;
line-height: 46px!important;
min-width: 140px;
text-align: center;
display: inline-block;
cursor: pointer;
-webkit-border-radius: 28px;
border-radius: 28px;
position: relative;
text-decoration: none;
z-index: 0;
text-transform: capitalize;
-webkit-box-shadow: none;
box-shadow: none;
-webkit-transition: .5s ease-in-out;
-o-transition: .5s ease-in-out;
transition: .5s ease-in-out;
overflow: hidden;
background-color: none;
font-weight: 800;
margin-top: 24px;
}
.hs-richtext .fnt-28{
margin-top: 64px;
}
</style>
<!-- Start of HubSpot Embed Code -->
<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/5176965.js"></script>
<!-- End of HubSpot Embed Code -->
 <main class="main">
      <!--01-->
      <!-- Enquiry Form-->
      <div id="enqform">
      <section class="sec-pd sec-bnr sec-pb"> 
        <div class="container"> 
          <div class="row">
            <div class="col-12 col-md-11 col-lg-10 mx-auto">
              <div class="row"> 
                <div class="col-12 col-md-10 col-lg-8 offset-md-1">
                  <div class="enquiry-head"><span class="d-block fnt-14 text-capitalize mb-2 ms-md-1 clr-default">Let’s talk</span>
                    <div>
                      <h1 class="fnt-78 red-stroke px-0 fnt-800 mb-3 mb-md-4">
                         Let’s craft<span class="d-block">brilliance together</span></h1>
                      <p class="fnt-24">Got something in mind? We’d love to help.</p>
                    </div>
                  </div>
	  <form id="enquiry-form" method="POST" data-parsley-validate="">
                    <div class="enquiry-form">
                      <div class="enquiry-form__item data-scroll">
                        <div class="col-md-6 col-lg-8 px-0 mb-2">
                          <h3 class="fnt-28 fnt-800 mb-1">What are you looking for?</h3>
                          <p class="fnt-14 label">Want to be partners in design? Looking for UX/ UI research or product branding? Post your query now, and we’ll get in touch with you soon!</p>
                        </div>
                        <div class="input input-textarea " >
                          <textarea class="in-animate" name="description" type="text" placeholder="How can we help?"  data-parsley-error-message="Enter the Message" required></textarea><span class="input__require fnt-14">Important</span><span class="focus-border"><i></i></span>
                          <div class="bx"></div>
                        </div>
                      </div>
                      <div class="enquiry-form__item mb-field-80 data-scroll">
                        <div class="col-md-8 col-lg-8 px-0"> 
                          <p class="label fnt-14">If you have a requirement brief or document, share it with us here:</p>
                          <div class="file d-flex flex-column flex-md-row align-items-md-center">
                            <div class="file__attach d-flex align-items-center">
                              <input id="file-upload" name="attachment" type="file" accept="application/pdf" data-parsley-excluded="true">
                              <label class="file-uplod w-100 d-flex align-items-center" for="file-upload"><span class="fnt-16" id="filename">Attach your Document</span></label>
                              <div class="file-reset d-none"> <span class="d-inline-block">&#x2715;</span></div>
                            </div>
                            <div class="file__eror col-12 mt-2 mt-md-0 col-md-4 ms-md-4 px-0"> <span class="d-block px-0 clr-gray94 fnt-14">File size not more than 2 MB</span></div>
                          </div>
                          <ul id="file-error" class="parsley-errors-list filled" style="display:none">
                              <li class="parsley-custom-error-message">File must be less than 2 MB</li>
                          </ul>
                        </div>
                      </div>
                      <div class="enquiry-form__item data-scroll">
                        <div class="mb-2">
                          <h3 class="fnt-28 fnt-800 mb-1">Your details</h3>
                          <p class="label fnt-14">Project related discussions only, please!</p>
                          <div class="row">
                            <div class="col-12 col-md-6 mb-fld"> 
                              <div class="input"> 
                                <input class="in-animate" type="text" name="full_name" id="full_name" placeholder="Your Name" required  data-parsley-error-message="Enter Your Name"><span class="input__require fnt-14">Important</span> <span class="focus-border"><i></i></span>
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
                                <input class="in-animate" type="number" name="phone" id="phone" placeholder="Your Phone"required  data-parsley-error-message="Enter Your Phone"><span class="input__require fnt-14">Important</span> <span class="focus-border"><i></i></span>
                                <div class="bx"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
		    </div>

		    

                    <button class="js-submit data-scroll web-btn web-btn--primary fnt-800imp" type="submit">Send Enquiry</button>
		  </form>


<!--[if lte IE 8]>
<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
<![endif]-->
<!--
<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
<script>
hbspt.forms.create({
region: "na1",
portalId: "5176965",
formId: "d678089d-e2e8-4138-a9dc-c3d2b6da4969",
target: '#hbForms',
onFormSubmitted: function($form) {
	var emailId = $("input[name='email']").val();
	setCookie("email",emailId,1);
	var firstname = $("input[name='firstname']").val();
	setCookie("firstname",firstname,1);
}
});
</script>
<div class="hbForms" id="hbForms"></div>
-->


		</div>
<div class="col-12 col-md-8 offset-md-1 col-lg-3 offset-lg-0 mt-5 mt-lg-0 pt-md-5">
<h3 class="fnt-20 fnt-800">
Career at Lollypop
</h3>
<p>
We're always on the lookout for talent. Come say hello and we'll figure out if you're a good fit!
</p>
<a class="hvr-line fnt-14 clr-second d-inline-block" href="https://lollypop.design/careers/#career-job">Join Us</a>
</div>
              </div>
            </div>
          </div>
        </div>
      </section>
      </div>
     
    </main>


    <script>
    // tracking ( facebook or ggogle or ...)
    var hutk = document.cookie.replace(/(?:(?:^|.;\s)hubspotutk\s*\=\s*([^;]).$)|^.*$/, "$1");
    console.log("hutk value = "+hutk); </script>
<?php
get_footer();
?>
