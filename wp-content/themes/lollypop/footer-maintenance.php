<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>
<style>
.link-dribble:hover {
    color: #ea4c89;
}
.link-dribble {
    -webkit-transition: .2s ease-in-out;
    -o-transition: .2s ease-in-out;
    transition: .2s ease-in-out;
}
a.fnt-30.fnt-800.link-insta {
    margin-left: 9px;
}

@media (min-device-width:768px) and (max-device-width:1024px){
.footer .ft-social-links{
	gap:25px;
}
}
@media(max-device-width:768px){
.alifot{text-align:start!important;}
.alifot .fnt-14{font-size:11px;}
}
@media (min-device-width:320px) and (max-device-width:766px){
a.fnt-30.fnt-800.link-insta {
    margin-left: 0px!important; 
}}
.ft-social-links li:last-child{display: flex;
    justify-content: flex-start;}
</style>

<footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-11 col-lg-10 mx-auto">
          <div class="row mb-60">
            <h5 class="fnt-16 fnt-600 mb-22 text-center">Follow our work</h5>
            <ul class="px-0 ft-social-links d-flex flex-wrap justify-content-between">
              <li class="ft-social-links__item col-4 col-sm-2 col-md-2 mb-3 mb-sm-0 text-center"><a class="fnt-30 fnt-800 link-linkedin" href="https://www.linkedin.com/company/lollypop-studio/" target="_blank">LinkedIn</a></li>
              <li class="ft-social-links__item col-4 col-sm-2 col-md-2 mb-3 mb-sm-0 text-center"> <a class="fnt-30 fnt-800 link-insta" href="https://www.instagram.com/lollypop.design/" target="_blank">Instagram</a></li>
              <li class="ft-social-links__item col-4 col-sm-2 col-md-2 mb-3 mb-sm-0 text-center"> <a class="fnt-30 fnt-800 link-fb" href="https://www.facebook.com/lollypop.india" target="_blank">Facebook</a></li>
			  <li class="ft-social-links__item col-4 col-sm-2 col-md-2 mb-3 mb-sm-0 text-center"> <a class="fnt-30 fnt-800 link-dribble" href="https://dribbble.com/lollypop_studio" target="_blank">Dribbble</a></li>              
			  <li class="ft-social-links__item col-4 col-sm-2 col-md-2 mb-3 mb-sm-0 text-center"> <a class="fnt-30 fnt-800 link-twt" href="https://twitter.com/lollypop_studio" target="_blank">Twitter</a></li>
			</ul>
          </div> 
          <div class="row">
            <div class="col-12 col-md-4 mb-4 mb-md-0 order-2 order-md-1 text-center text-md-left"><a class="clr-second d-inline-block fnt-24 lp-link--red fnt-800 mb-4 mb-md-2 col-8 col-lg-6 px-0" href=""><img src="<?php echo get_template_directory_uri(); ?>/img/lollypop_logo1.svg" style="width:100%" alt="Image"></a>
              <p class="fnt-14 fnt-400 clr-primary mb-0 pb-1 mb-md-3 mb-lg-4 pb-lg-0 px-0 mt-2">A&nbsp;<a href="https://www.terralogic.com/" class="fnt-800 hvr-link fnt-16 d-inline-block">Terralogic</a>&nbsp;company crafting meaningful experiences through Research, Design and Development.</p>
              <ul class="mt-5 mt-md-0 footer-logo-links fnt-400 fnt-14 d-flex justify-content-center justify-content-md-start flex-wrap px-0 mb-0">
                <li class="footer-logo-links__item col-12 px-0"><div class="fnt-12">© 2024 Lollypop - A Terralogic     company</div></li>
                 <li class="footer-logo-links__item"> <a class="fnt-12" href="">FAQs</a></li>
                <li class="footer-logo-links__item"> <a class="fnt-12" href="">Privacy Policy</a></li>
                <li class="footer-logo-links__item"> <a class="fnt-12" href="">Terms of Use</a></li>
              </ul>
            </div>
            <div class="col-12 col-md-7 col-lg-8 order-1 order-md-2 mb-5 mb-md-0">
              <div class="footer-nav-links d-flex flex-wrap ps-lg-5 justify-content-center justify-content-md-left"> 
               
               <div class="footer-nav-links__item mt-2 pt-1 pt-md-0 mt-md-0 d-flex flex-column align-items-center col-3 col-md-3"> 

                  <a class="d-block hvr-link-div text-center text-md-left alifot"  href="">
                    <h6 class="fnt-16 fnt-800 mb-0 text-capitalize">India</h6>
                  <div><span class="fnt-14 d-inline-block fnt-400 text-capitalize">Bangalore</span></div>
                  <div><span class="fnt-14 d-inline-block fnt-400 text-capitalize">Mumbai</span></div>
                  <div><span class="fnt-14 d-inline-block fnt-400 text-capitalize">Chennai</span></div>
                  <div><span class="fnt-14 d-inline-block fnt-400 text-capitalize">Hyderabad</span></div>
                  </a>
                </div>
              
              <div class="footer-nav-links__item mt-2 pt-1 pt-md-0 mt-md-0 d-flex flex-column align-items-center col-3 col-md-3">
                  <a class="d-block hvr-link-div text-center text-md-left alifot" href=""> 
                  <h6 class="fnt-16 fnt-800 mb-0 text-capitalize">USA</h6>
                  <div><span class="fnt-14 d-inline-block fnt-400 text-capitalize">San Jose</span></div>
                  <div><span class="fnt-14 d-inline-block fnt-400 text-capitalize">Dallas</span></div>
                  <div><span class="fnt-14 d-inline-block fnt-400 text-capitalize">Salt Lake City</span></div>
                </a>
                </div>
                
               <div class="footer-nav-links__item mt-2 pt-1 pt-md-0 mt-md-0 d-flex flex-column align-items-center col-3 col-md-3"> 
                <a class="d-block hvr-link-div text-center text-md-left alifot" href="">
                    <h6 class="fnt-16 fnt-800 mb-0 text-capitalize">UAE</h6>
                  <div>
					<span class="fnt-14 d-inline-block fnt-400 text-capitalize">Dubai</span>
				  </div>
                  </a>
                </div>
                
                
                <div class="footer-nav-links__item mt-2 pt-1 pt-md-0 mt-md-0 d-flex flex-column align-items-center col-3 col-md-3">
                <a class="d-block hvr-link-div text-center text-md-left alifot" href="">
                  <h6 class="fnt-16 fnt-800 mb-0 text-capitalize">Vietnam</h6>
                  <div><span class="fnt-14 d-inline-block fnt-400 text-capitalize">Ho Chi Minh City</span></div>
                </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
   <div class="js-page-scroll-top"><img src="<?php echo get_template_directory_uri(); ?>/img/pg-scroll.svg" alt="Image"></div>
		
	<!-- Start of HubSpot Embed Code -->
	<script rel="preconnect" type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/5176965.js"></script>
	<!-- End of HubSpot Embed Code -->

    <script rel="preconnect" defer src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script rel="preconnect" defer src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script rel="preconnect" defer src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script rel="preconnect" defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <script rel="preconnect" defer src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js"></script>
    <script rel="preconnect" defer src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/ScrollTrigger.min.js"></script>
    <script rel="preconnect" defer src="https://cdn.plyr.io/3.6.12/plyr.polyfilled.js"></script>
    <script rel="preconnect" defer src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
    <script rel="preconnect" defer src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script>
	<script defer src="<?php echo get_template_directory_uri(); ?>/js/TweenMax.min.js"></script>
    <script defer src="<?php echo get_template_directory_uri(); ?>/js/plugins/slick.min.js"></script>
    <script defer src="<?php echo get_template_directory_uri(); ?>/js/plugins/maginific-poup.js"></script>
    <script defer src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
    <script defer src="<?php echo get_template_directory_uri(); ?>/js/home.js"></script>
    <script defer src="<?php echo get_template_directory_uri(); ?>/js/header.js"></script>
    <script defer src="<?php echo get_template_directory_uri(); ?>/js/blog.js"></script>
    <script defer src="<?php echo get_template_directory_uri(); ?>/js/contact.js"></script>
    <script defer src="<?php echo get_template_directory_uri(); ?>/js/plugins/parsley.min.js"></script>
    <script defer src="<?php echo get_template_directory_uri(); ?>/js/aha.js"></script>
    <script defer src="<?php echo get_template_directory_uri(); ?>/js/video-player.js"></script>

<script type="application/ld+json">
{
	"@context" : "http://schema.org",
		"@type" : "Organization",
		"name" : "lollypop.design",
		"url" : "https://lollypop.design/",
		"sameAs" : [
			"https://www.linkedin.com/company/lollypop-studio/",
			"https://www.facebook.com/lollypop.india",
			"https://www.instagram.com/lollypop.design/",
			"https://twitter.com/lollypop_studio"
		]
}
</script>

<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebSite",
    "url": "https://lollypop.design/",
    "potentialAction": {
      "@type": "SearchAction",
	  "target": {
          "@type": "EntryPoint",
          "urlTemplate": "https://lollypop.design/search?q={search_term_string}"
        },
	  "query-input": "required name=search_term_string"
    }
}
</script>
	       	   	   
<script type="application/ld+json">
{
  "@context":"http://schema.org",
  "@type":"ItemList",
  "itemListElement":[
    {
      "@type":"SiteNavigationElement",
      "position":1,
      "name": "Services",
      "description": "We thrive at the intersection of design and business, and craft beautiful and functional experiences that can be launched quickly.",
      "url":"https://www.lollypop.design/services/"
    },
    {
      "@type":"SiteNavigationElement",
      "position":2,
      "name": "Projects",
      "description": "First hand insight into how our processes have been implemented in all the projects weve worked on.",
      "url":"https://www.lollypop.design/projects/"
    },
    {
      "@type":"SiteNavigationElement",
      "position":3,
      "name": "Process",
      "description": "A flexible and adaptive process that helps businesses launch and scale quickly.",
      "url":"https://www.lollypop.design/process/"
    },
    {
      "@type":"SiteNavigationElement",
      "position":4,
      "name": "Industries",
      "description": "From agriculture, e-commerce, edtech and enterprise solutions to fintech, healthcare, hospitality, IOT and HR solutions, we have designed it all.",
      "url":"https://www.lollypop.design/industries/"
    },
    {
      "@type":"SiteNavigationElement",
      "position":5,
      "name": "Lets Talk",
      "description": "Send us your project requirements, share your idea with us or reach out for any design related query. We specialize in research, UX, UI, frontend development for digital products.",
      "url":"https://www.lollypop.design/project-enquiry/"
    }
  ]
}
</script>

<?php get_template_part( 'meta', 'schema' ); ?>

<style>
.js-submit.disabled{
cursor: no-drop;
opacity:0.7 !important;
}
.plyr__controls{
  display: none;
} 
.playvid[poster]{ 
  width:100%; 
  margin:auto; 
  }
</style>

<script>

function setCookie(name,value,days) {
	var expires = "";
	if (days) {
		var date = new Date();
		date.setTime(date.getTime() + (days*24*60*60*1000));
		expires = "; expires=" + date.toUTCString();
	}
	document.cookie = name + "=" + (value || "")  + expires + "; path=/";
}

       $(function() {
         $("form#enquiry-form").submit(function(e) {
		 e.preventDefault();	 
             var data = new FormData($(this)[0]);
	     var file = $('input[type="file"]').val();
	     var email = $('input[type="email"]').val();
	     var description = $('textarea[name="description"]').val();
	     var fullname = $('input[name="full_name"]').val();
	     var phone = $('input[name="phone"]').val();
	     if(email !='' && description !='' && fullname !='' && phone !=''){
		     
		     if($(".js-submit").prop("disabled", "disabled")){
		     	$(".js-submit").addClass("disabled");
		     } 
					$(".format_message").hide();
					$("#pageloader").fadeIn();
					$.ajax({
						 type: "POST",
						 url: "<?php echo site_url(); ?>/enquiry-uploads/",
						 data: data,
						 processData: false,
						 contentType: false,
						 cache: false,
						 beforeSend: function(){
						 $('.js-submit').html("Please wait. We are submitting your query");
						 },
						 success: function(data) {
							 if (data.indexOf("True") >= 0) {
								 $("#pageloader").css("display", "none");
								$('form#enquiry-form')[0].reset();
                                 $('#filename').text("Attach your Document");
								 $('.file-reset').addClass('d-none');
						 $(".js-submit.data-scroll.web-btn").prop("disabled",false);
                                  window.location.href = "<?php echo site_url(); ?>/project-enquiry/thank-you/";
							 } else if (data.indexOf("False") >= 0) {
						$(".js-submit.data-scroll.web-btn").prop("disabled",false);
								 return false;
							 }else if (data.indexOf("greater_mb") >= 0) {
                                
								 $("#file-error").css("display", "block");
					$(".js-submit.data-scroll.web-btn").prop("disabled",false);
                                   $("#pageloader").css("display", "none");
                             }
                             else if (data.indexOf("Invalid_doc") >= 0) {
                                 //alert("Invalid Doc");
                                 $("#file-error").css("display", "block");
				 $("#pageloader").css("display", "none");
				 $(".js-submit.data-scroll.web-btn").prop("disabled",false);
                             }
                             
						 },
						 error: function(data) {
							$(".js-submit.data-scroll.web-btn").prop("disabled",false);
							 return false;
						 }
					 });
				 
	     }
         });

       });

$(function() {
	$("form#general-form").submit(function(e) {
		e.preventDefault();
		var data = new FormData($(this)[0]);
		var email = $('input[type="email"]').val();
		var description = $('textarea[name="description"]').val();
		var fullname = $('input[name="full_name"]').val();
		var phone = $('input[name="phone"]').val();
		if(email !='' && description !='' && fullname !='' && phone !=''){
			$(".js-submit.data-scroll.web-btn").prop("disabled",true);

			$(".format_message").hide();
			$("#pageloader").fadeIn();
			$.ajax({
			type: "POST",
				url: "<?php echo site_url(); ?>/general-upload/",
				data: data,
				processData: false,
				contentType: false,
				cache: false,
				success: function(data) {
					if (data.indexOf("True") >= 0) {
						$("#pageloader").css("display", "none");
						$('form#general-form')[0].reset();

						$('.file-reset').addClass('d-none');
						$(".js-submit.data-scroll.web-btn").prop("disabled",false);
					window.location.href = "<?php echo site_url(); ?>/project-enquiry/thank-you/";
					} else if (data.indexOf("False") >= 0) {
						$(".js-submit.data-scroll.web-btn").prop("disabled",false);
						return false;
					}else if (data.indexOf("greater_mb") >= 0) {


						$(".js-submit.data-scroll.web-btn").prop("disabled",false);
						$("#pageloader").css("display", "none");
					}
					else if (data.indexOf("Invalid_doc") >= 0) {
						$("#file-error").css("display", "block");
						$("#pageloader").css("display", "none");
						$(".js-submit.data-scroll.web-btn").prop("disabled",false);
					}

				},
				error: function(data) {
					$(".js-submit.data-scroll.web-btn").prop("disabled",false);
					return false;
				}
			});

		}
	});

});
$(function() {
	$("form#edtech-form").submit(function(e) {
		e.preventDefault();
		var data = new FormData($(this)[0]);
		var email = $('input[type="email"]').val();
		var description = $('textarea[name="description"]').val();
		var fullname = $('input[name="full_name"]').val();
		var phone = $('input[name="phone"]').val();
		if(email !='' && description !='' && fullname !='' && phone !=''){
			$(".js-submit.data-scroll.web-btn").prop("disabled",true);

			$(".format_message").hide();
			$("#pageloader").fadeIn();
			$.ajax({
			type: "POST",
				url: "<?php echo site_url(); ?>/edtech-upload/",
				data: data,
				processData: false,
				contentType: false,
				cache: false,
				beforeSend: function(){
						 $('.js-submit').html("Please wait. We are submitting your query");
						 },
				success: function(data) {
					console.log(data);
					if (data.indexOf("True") >= 0) {
						$("#pageloader").css("display", "none");
						$('form#edtech-form')[0].reset();

						//$('.file-reset').addClass('d-none');
						$(".js-submit.data-scroll.web-btn").prop("disabled",false);
					window.location.href = "<?php echo site_url(); ?>/project-enquiry/thank-you/";
					} else if (data.indexOf("False") >= 0) {
						$(".js-submit.data-scroll.web-btn").prop("disabled",false);
						return false;
					}
					//else if (data.indexOf("greater_mb") >= 0) {


					//	$(".js-submit.data-scroll.web-btn").prop("disabled",false);
					//	$("#pageloader").css("display", "none");
					//}
					//else if (data.indexOf("Invalid_doc") >= 0) {
					//	$("#file-error").css("display", "block");
					//	$("#pageloader").css("display", "none");
					//	$(".js-submit.data-scroll.web-btn").prop("disabled",false);
					//}

				},
				error: function(data) {
					$(".js-submit.data-scroll.web-btn").prop("disabled",false);
					return false;
				}
			});

		}
	});

});

$(function() {
$("form#build-fast").submit(function(e) {
	e.preventDefault();
	var data = new FormData($(this)[0]);
	var email = $('input[type="email"]').val();
	var description = $('textarea[name="description"]').val();
	var fullname = $('input[name="full_name"]').val();
	var phone = $('input[name="phone"]').val();
	if(email !='' && description !='' && fullname !='' && phone !=''){
		$(".js-submit.data-scroll.web-btn").prop("disabled",true);

		$(".format_message").hide();
		$("#pageloader").fadeIn();
		$.ajax({
		type: "POST",
			url: "<?php echo site_url(); ?>/build-upload/",
			data: data,
			processData: false,
			contentType: false,
			cache: false,
			success: function(data) {
				if (data.indexOf("True") >= 0) {
					$("#pageloader").css("display", "none");
					$('form#build-fast')[0].reset();

					$('.file-reset').addClass('d-none');
					$(".js-submit.data-scroll.web-btn").prop("disabled",false);
					window.location.href = "<?php echo site_url(); ?>/project-enquiry/thank-you/";
				} else if (data.indexOf("False") >= 0) {
					$(".js-submit.data-scroll.web-btn").prop("disabled",false);
					return false;
				}else if (data.indexOf("greater_mb") >= 0) {


					$(".js-submit.data-scroll.web-btn").prop("disabled",false);
					$("#pageloader").css("display", "none");
				}
				else if (data.indexOf("Invalid_doc") >= 0) {
					$("#file-error").css("display", "block");
					$("#pageloader").css("display", "none");
					$(".js-submit.data-scroll.web-btn").prop("disabled",false);
				}

			},
			error: function(data) {
				$(".js-submit.data-scroll.web-btn").prop("disabled",false);
				return false;
			}
		});

	}
});

});


$(function() {
         $("form#enquiry-form1").submit(function(e) {
		 e.preventDefault();	 
             var data = new FormData($(this)[0]);
	     var file = $('input[type="file"]').val();
	     var email = $('input[type="email"]').val();
	     var description = $('textarea[name="description"]').val();
	     var fullname = $('input[name="full_name"]').val();
	     var phone = $('input[name="phone"]').val();
	     if(email !='' && description !='' && fullname !='' && phone !=''){
		     
		     if($(".js-submit").prop("disabled", "disabled")){
		     	$(".js-submit").addClass("disabled");
		     } 
					$(".format_message").hide();
					$("#pageloader").fadeIn();
					$.ajax({
						 type: "POST",
						 url: "<?php echo site_url(); ?>/build-upload-new/",
						 data: data,
						 processData: false,
						 contentType: false,
						 cache: false,
						 beforeSend: function(){
						 $('.js-submit').html("Please wait. We are submitting your query");
						 },
						 success: function(data) {
							 if (data.indexOf("True") >= 0) {
								 $("#pageloader").css("display", "none");
								$('form#enquiry-form1')[0].reset();
                                 $('#filename').text("Attach your Document");
								 $('.file-reset').addClass('d-none');
						 $(".js-submit.data-scroll.web-btn").prop("disabled",false);
                                  window.location.href = "<?php echo site_url(); ?>/thank-you-2023/";
							 } else if (data.indexOf("False") >= 0) {
						$(".js-submit.data-scroll.web-btn").prop("disabled",false);
								 return false;
							 }else if (data.indexOf("greater_mb") >= 0) {
                                
								 $("#file-error").css("display", "block");
					$(".js-submit.data-scroll.web-btn").prop("disabled",false);
                                   $("#pageloader").css("display", "none");
                             }
                             else if (data.indexOf("Invalid_doc") >= 0) {
                                 //alert("Invalid Doc");
                                 $("#file-error").css("display", "block");
				 $("#pageloader").css("display", "none");
				 $(".js-submit.data-scroll.web-btn").prop("disabled",false);
                             }
                             
						 },
						 error: function(data) {
							$(".js-submit.data-scroll.web-btn").prop("disabled",false);
							 return false;
						 }
					 });
				 
	     }
         });

       });

		 $(function() {
         $("form#enquiry-form11").submit(function(e) {
             e.preventDefault();    
            // var data = new FormData();
                  var data = new FormData($(this)[0]);

            var email = $('input[type="email"]').val();
			var description = $('textarea[name="description"]').val();
			var fullname = $('input[name="full_name"]').val();
			var phone = $('input[name="phone"]').val();
             if(email !='' && description !='' && fullname !='' && phone !=''){
				
				if($(".js-submit").prop("disabled", "disabled")){
		     	$(".js-submit").addClass("disabled");
				}
				//console.log("Hello world!");
				$(".format_message").hide();
				$("#pageloader").fadeIn();
					$.ajax({
						 type: "POST",
						 url: "<?php echo site_url(); ?>/step23-upload/",
						 data: data,
						 processData: false,
						 contentType: false,
						 cache: false,
						 beforeSend: function(){
						 $('.js-submit').html("Please wait. We are submitting your query");
						 },
						 success: function(data) {
                           
							 if (data.indexOf("True") >= 0) {
								 $("#pageloader").css("display", "none");
								$('form#enquiry-form11')[0].reset();
								$(".js-submit.data-scroll.web-btn").prop("disabled",false);
                                  window.location.href = "<?php echo site_url(); ?>/step23-thank-you/";
							 } else if (data.indexOf("False") >= 0) {
								$(".js-submit.data-scroll.web-btn").prop("disabled",false);
								 return false;
							 } 
						 },
						 error: function(data) {
							$(".js-submit.data-scroll.web-btn").prop("disabled",false);
							 return false;
						 }
					 });
                 }
         });
             

     });








        
        $(function() {
         $("form#whitepaper").submit(function(e) {
             e.preventDefault();    
            // var data = new FormData();
                  var data = new FormData($(this)[0]);

             var email = $('input[type="email"]').val();
             var sucess = $("form#whitepaper").parsley().isValid();
             if(sucess){
             if(email !=''){
					$(".format_message").hide();
				$("#pageloader").fadeIn();
             
					$.ajax({
						 type: "POST",
						 url: "<?php echo site_url(); ?>/whitepaper-upload/",
						 data: data,
						 processData: false,
						 contentType: false,
						 cache: false,
						 success: function(data) {
                           
							 if (data.indexOf("True") >= 0) {
								$('form#whitepaper')[0].reset();
                                  $("#pageloader").css("display", "none");
                                 $("#sucess-msg").css("display", "block");
                                  window.location.href = "<?php echo site_url(); ?>/whitepapers/thank-you/";
                                  $('#whitepaperForm').css('display', 'none');
							 } else if (data.indexOf("False") >= 0) {
                                 $("#pageloader").css("display", "none");
                                  $("#error-msg").css("display", "block");
								 return false;
							 }
						 },
						 error: function(data) {
							 return false;
						 }
					 });
                 }
				 }
         });
             

     });
        
        $(function() {
    $(".terra-load-blogs").slice(0, 10).show();
    $(".blogs-load-more").on('click', function(e) {
        e.preventDefault();
        $(".terra-load-blogs:hidden").slice(0, 8).slideDown();
        if ($(".terra-load-blogs:hidden").length == 0) {
			$(".blogs-load-more").css("display", "none");  
            $(".no_more_blogs").show();
            $("#load").fadeOut('slow');
            return false;
        }
        $('html,body').animate({
            scrollTop: $(this).offset().top - 0
        }, 1500);
    });
});
        
      var path = window.location.pathname;
$(".menus a[href*='"+path+"']").addClass("active");
        
</script>
<script>
    $(document).ready(function(){
        const players = Array.from(document.querySelectorAll('.js-player')).map((p) => new Plyr(p));
        });
</script>
<script>
$(window).on('scroll', function () {
	$('.tab-section-content__item').each(function () {
		    var cln = $(this).index();
		        var $this = $(this);
		        var top_of_element = ($(this).offset().top - 250);
			    var bottom_of_element = ($(this).offset().top + $(this).outerHeight());
			    var bottom_of_screen = $(window).scrollTop() + $(window).innerHeight();
			        var top_of_screen = ($(window).scrollTop());
			        if(top_of_screen > top_of_element) {
					        $(".tab-head-item").find(".tab-head-item__name").removeClass("active")
							        $(".tab-head-item").find(".tab-head-item__name").eq(cln).addClass("active");  
						    }
	});
});
</script>
<script>
    $(document).ready(function(){
	    $(".tab-pane:first-child").addClass("active")
		    $(".lollypop-tabs button:first-child").addClass("active")
		        });
$(window).on('scroll', function () {

		  $('.tab-section1-content1__item').each(function () {
			  		        var cln = $(this).index();
									      var $this = $(this);
									      var top_of_element = ($(this).offset().top - 200);
									      			            var bottom_of_element = ($(this).offset().top + $(this).outerHeight());
									      			            var bottom_of_screen = $(window).scrollTop() + $(window).innerHeight();
													    				          var top_of_screen = ($(window).scrollTop());

													    				          if(top_of_screen > top_of_element) {
																			  						            $(".tab-head-item1").find(".tab-head-item1__name").removeClass("active")
																											    								              $(".tab-head-item1").find(".tab-head-item1__name").eq(cln).addClass("active");  
																										    							          }
																		  					    });
		  	  });


$('body').on('click', '.tab-head-item1__name', function() {
		  var $index = $(this).index();
		  	    var $scrollIndex = $(this).parents(".tab-section1").find('.tab-scroll-content').find('.tab-section1-content1__item').eq($index);
		  	    $(this).parents(".tab-section1").find('.tab-scroll-content').find('.tab-section1-content1__item').removeClass('active');
			    	      $(this).parents(".tab-section1").find('.tab-scroll-content').find('.tab-section1-content1__item').eq($index).addClass('active');


			    
			    	        	        $('html, body').animate({
			    	        	        		      scrollTop: $($scrollIndex).offset().top - 150,
			    
			    	        	        		      			          }, 150);
			    	        	        		      			          		});
			    	        	        		      			          		</script>
<!---------dynamic schema------------------>
	<?php if( get_field('each_page_schema') ): ?>
		<?php the_field('each_page_schema')?>
	<?php endif; ?>
	
 <?php wp_footer(); ?>

</body>


</html>
