<?php
ini_set('display_errors', 0);
/**
 Template Name: Thank You
 */

get_header();
?>

<head>
<!-- Event snippet for Qualified lead conversion page --> <script> gtag('event', 'conversion', {'send_to': 'AW-10947693413/aFVmCLzuqc8DEOWWouQo'}); </script>
</head>


<?php

error_reporting(0);
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '/var/www/html/lollypop/wp-content/themes/lollypop/PHPMailer/src/Exception.php';
require '/var/www/html/lollypop/wp-content/themes/lollypop/PHPMailer/src/PHPMailer.php';
require '/var/www/html/lollypop/wp-content/themes/lollypop/PHPMailer/src/SMTP.php';

require '/var/www/html/lollypop/wp-content/themes/lollypop/vendor/autoload.php';

if ($_COOKIE && $_COOKIE['email'] && $_COOKIE['email'] !="" && $_COOKIE['firstname'] !="") {
	$mailReply = new PHPMailer();
	$mailReply->IsSMTP();

	$mailReply->SMTPDebug = 0;
	$mailReply->SMTPAuth = true;
	$mailReply->SMTPSecure = "tls";
	$mailReply->Port = 587;
	$mailReply->Host = "smtp.gmail.com";
	$mailReply->Username = "hello@lollypop.design";
	$mailReply->Password = "npnl txrm faxc peac";
  // $mailReply->Password = "L0!!6P0p@101";

	$mailReply->IsHTML(true);
	$mailReply->addAddress($_COOKIE['email'], $_COOKIE['firstname']);
	$mailReply->SetFrom("hello@lollypop.design", "Lollypop Design");
	$mailReply->AddReplyTo("hello@lollypop.design", "Lollypop Design");
	$mailReply->Subject = "Thank you for contacting Lollypop Design Studio";
	$contentReply .=
		'<html><head><style>.asdjhdagsd{background: url(https://lollypop.design/email-template-image.png) no-repeat center center;background-size: contain;padding:40px;height:100px;}.sdfsdfsfdsdfsdfsf{background: url(https://lollypop.design/company-email-template-logo.png) no-repeat center center;background-size: contain;padding:40px;}</style></head><body><table border="0" cellspacing="0" cellpadding="0" width="100%" style="min-width:600px;padding:80px" bgcolor="#E5E5E5"><tbody><tr><td><table border="0" cellspacing="0" cellpadding="0" width="720" bgcolor="#ffffff" align="center" style="width:600px"><tbody><tr><td style="padding: 48px;font-family:Helvetica, sans-serif"><table border="0" width="90%" align="left" ><tbody><tr><td width="100%"><table border="0" cellspacing="0" cellpadding="0" align="left"><tbody><tr><td style="padding-bottom: 24px"><div class="asdjhdagsd"><div></td></tr><tr><td align="left" style="width:100%;font-size:32px;padding: 8px 0;font-weight:bold;letter-spacing:-1.2px;line-height:38px;color:#333333;">Thanks for getting in touch!</td></tr><tr><td align="left" style="width:100%;padding: 8px 0;font-size:16px;font-weight:400;line-height:24px;color:#333333;font-family:Helvetica, sans-serif"> Hello ' .
		$_COOKIE['firstname'] .
		' Thank you for considering us as your partner in design. We are looking forward to collaborating with you and ideating on the possibilities of crafting a seamless experience.</td></tr><tr><td align="left" style="width:100%;font-size:12px;padding: 8px 0;font-weight:400;line-height:19px;color:#6D6D6D;">We usually respond to all project related queries within 2 working days, emergency situations (eg. Covid induced lockdowns) notwithstanding. Rest assured well get back to you at the earliest.</td></tr><tr><table border="0" cellspacing="0" cellpadding="0" align="left" style="padding: 72px 0 0 0;"><tbody><tr><td align="left" style="padding-bottom: 16px;"><a href="#"><div class="sdfsdfsfdsdfsdfsf"><div></a></td></tr></tbody></table></tr><tr><td align="left" style="width:100%;"><table border="0" cellspacing="0" cellpadding="0" width="80%" align="left"><tbody><tr><td><a style="text-align:center;font-size:12px;color:#454545;line-height:29px;text-decoration:none;font-weight:bold" href="https://www.linkedin.com/company/lollypop-studio/" title="Lollypop on Linkedin" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://www.linkedin.com/company/lollypop-ui-ux-studio&amp;source=gmail&amp;ust=1644058795127000&amp;usg=AOvVaw1o0xSUL9Tl5mMYfcyBZMIh">LinkedIn</a></td><td><a style="text-align:center;font-size:12px;color:#454545;line-height:29px;text-decoration:none;font-weight:bold" href="https://twitter.com/lollypop_studio" title="Lollypop on Linkedin" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://twitter.com/lollypop_studio&amp;source=gmail&amp;ust=1644058795127000&amp;usg=AOvVaw1wplxBnSJhbnimcuWY25Xz">Twitter</a></td><td><a style="text-align:center;font-size:12px;color:#454545;line-height:29px;text-decoration:none;font-weight:bold" href="https://www.instagram.com/lollypop.design/" title="Lollypop on Linkedin" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://www.instagram.com/lollypop_design/&amp;source=gmail&amp;ust=1644058795127000&amp;usg=AOvVaw0ERXoRM-zappPtEM1HKoL0">Instagram</a></td><td><a style="text-align:center;font-size:12px;color:#454545;line-height:29px;text-decoration:none;font-weight:bold" href="https://www.facebook.com/lollypop.india" title="Lollypop on Linkedin" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://www.facebook.com/lollypop.india&amp;source=gmail&amp;ust=1644058795127000&amp;usg=AOvVaw2EiR7GPUt8GX91YE2cNrob">Facebook</a></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></body></html>';
	$mailReply->MsgHTML($contentReply);
if (!$mailReply->send()) {
echo "False";
} else {
echo "True";
}		
}

?>



 <div id="success-form">
           <section class="sec-pd sec-bnr">
        <div class="container"> 
          <div class="row mb-4 mb-md-5 pb-lg-3"> 
            <div class="col-12 col-md-9 col-lg-7 mx-auto">
              <div class="col-lg-7 col-xl-8 col-xxl-12 px-0 mx-auto d-flex flex-column align-items-center justify-content-center text-center"><img class="img-fluid mb-40" src="<?php echo get_template_directory_uri(); ?>/img/thank-you.webp" alt="Image" data-aos="zoom-in-down" data-aos-duration="2000"></div>
              <div class="text-center col-md-11 col-lg-10 mx-auto">
                <h3 class="fnt-40 fnt-800 mb-2 data-scroll">Thanks for getting in touch!</h3>
                <p class="fnt-24 data-scroll col-lg-10 col-xxl-9 mx-auto">Our creatives will look into the finer 
details and reach out to you soon.

</p>

              </div>
            </div>
          </div>
           <div class="row"> 
            <div class="col-12 col-md-11 col-lg-10 mx-auto"> 
           <ul class="px-0 contat-list contat-list--bnr mb-0 row">
                <li class="contat-list__item col-12 col-md-4 data-scroll"><a class="contact d-flex flex-column bg-white card-hvr" href="<?php echo site_url(); ?>">
                    <div class="mb-40"> 
                      <h3 class="fnt-30 fnt-800 mb-2 pb-md-1">Homepage</h3>
                      <p class="fnt-20">Start from the start. Know more about us.</p>
                    </div>
                    <div class="mt-auto"> <span class="hvr-line clr-second text-capitalize">Homepage</span></div></a></li>
                <li class="contat-list__item col-12 col-md-4 data-scroll"><a class="contact d-flex flex-column bg-white card-hvr" href="<?php echo site_url(); ?>/blogs/">
                    <div class="mb-40"> 
                      <h3 class="fnt-30 fnt-800 mb-2 pb-md-1">Blogs</h3>
                      <p class="fnt-20">Read our curated articles for designers</p>
                    </div>
                    <div class="mt-auto"> <span class="hvr-line clr-second text-capitalize">Blogs and Whitepapers</span></div></a></li>
                <li class="contat-list__item col-12 col-md-4 data-scroll"><a class="contact d-flex flex-column bg-white card-hvr" href="<?php echo site_url(); ?>/careers/">
                    <div class="mb-40"> 
                      <h3 class="fnt-30 fnt-800 mb-2 pb-md-1">Join Tribe</h3>
                      <p class="fnt-20">Do you wish to be a part of our tribe?</p>
                    </div>
                    <div class="mt-auto"> <span class="hvr-line clr-second text-capitalize">Careers</span></div></a></li>
              </ul>
              </div>
              </div>
          <!--div class="row col-12 col-md-11 col-lg-10 mx-auto">
            <div class="lets-continue data-scroll">
              <div class="lets-continue__head text-center"> 
                <h3 class="fnt-40 fnt-800">Let’s continue</h3>
              </div>
              <div class="lets-continue__body d-flex flex-wrap">
                <div class="lets__disc">
                  <p class="fnt-24">Designing a unique experience for India’s leading telecom</p><a class="fnt-14 clr-second hvr-line" href="<?php echo site_url(); ?>/myvi-app/">See the Case study</a>
                </div>
                <div class="lets__disc">
                  <p class="fnt-24">UX trends 2022</p><a class="fnt-14 clr-second hvr-line" href="#">Read an Article</a>
                </div>
                <div class="lets__disc">
                  <p class="fnt-24">Designing for IoT & Wearables</p><a class="fnt-14 clr-second hvr-line" href="<?php echo site_url(); ?>/designing-wearable-and-iot-solutions/">Read the Whitepaper</a>
                </div>
              </div>
            </div>
          </div-->
        </div>
      </section>
      </div>
      
     <?php
get_footer();
?>