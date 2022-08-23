

<?php
/** 
 * * Template Name: test upload
 * */

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '/var/www/html/lollypop/wp-content/themes/lollypop/PHPMailer/src/Exception.php';
require '/var/www/html/lollypop/wp-content/themes/lollypop/PHPMailer/src/PHPMailer.php';
require '/var/www/html/lollypop/wp-content/themes/lollypop/PHPMailer/src/SMTP.php';

require '/var/www/html/lollypop/wp-content/themes/lollypop/vendor/autoload.php';


$maxsize    = 2097152;
 $_POST['email'] = "ravikiran.pellakuru@terralogic.com";
 $_POST['full_name'] = "satyagvns";
 if($_FILES['attachment']['name'] !=''){
	 	 $file_size = $_FILES['attachment']['size'];
		 	 $file_tmp = $_FILES['attachment']['tmp_name'];
		 	 $file_type = $_FILES['attachment']['type'];
			     
			 	 $file_ext=strtolower(end(explode('.',$_FILES['attachment']['name'])));
			 	 $file_name = $_POST['full_name']."_".time().".".$file_ext;
				 	 if($_FILES['attachment']['size'] >= $maxsize) {
						 		$greater_data =  "1";
									 }else{
										 		 $uploadDir = $_SERVER["DOCUMENT_ROOT"].'/wp-content/files/';
												 			if(move_uploaded_file($file_tmp, $uploadDir.$file_name)){
																			
																		}
												 		$greater_data =  "2";
												 	 }
				     
 }else{
	 	$greater_data =  "2";
 }
 if($greater_data == "2"){
	 if($_POST['email']){
		   $mail = new PHPMailer();
		     $mail->IsSMTP();

		     $mail->SMTPDebug  = 0;  
		       $mail->SMTPAuth   = TRUE;
		       $mail->SMTPSecure = "tls";
		         $mail->Port       = 587;
		         $mail->Host       = "smtp.gmail.com";
			   $mail->Username   = "hello@lollypop.design";
			   $mail->Password   = "L0!!6P0p@101";

			     $mail->IsHTML(true);
			     $mail->AddAddress("ravikiran.mec339@gmail.com", "ravikiran");
			      
			      

			       $mail->SetFrom("hello@lollypop.design", "Lollypop Design");
			       $mail->AddReplyTo("hello@lollypop.design", "Lollypop Design");
			         if($_FILES['attachment']['name'] !='' && !empty($_FILES['attachment']['name'])){
					 	$mail->AddAttachment($uploadDir.$file_name);
						  }

			         $mail->Subject = "New Enquiry ". $_POST['full_name'] ."";
			         $content .= '<html><head><style>@media screen and (max-width:768px){.white-bg-align{width:100%!important;margin:0!important}.inner-text{padding:30px!important}}.asdjhdagsd{background: url(https://lollypop.design/lollypop-logo.PNG) no-repeat center center;background-size: contain;width:100%;padding:40px;}</style></head><body><div id=ample_service_widget-2 class="widget widget_service_block main-div-padding" style=background-color:#f5f5f5;padding:40px><div class="clearfix white-bg-align" style=background-color:#fff><div class=services-header style="text-align:center;padding-top:30px;"><a href=#><div class="asdjhdagsd"><div></a></div><div class="services-content clearfix"><div class=inner-text style="padding:40px 60px"><h2>Yay!! We received a new enquiry.</h2><span>First Name : </span> <span><b>' . $_POST['full_name'] .'</b></span><br><br><span>Email : </span> <span><b>' . $_POST['email'] .'</b></span><br><br><span>Phone Number: </span> <span><b>' . $_POST['phone'] .'</b></span><br><br><span>Description : </span> <span><b>' . $_POST['description'] .'</b></span><br><br></div></div></div></div></body></html>';

				   $mail->MsgHTML($content); 
				   if(!$mail->Send()) {
					       echo "False";
					         } else {
							 	  $mailReply = new PHPMailer();
								  	  $mailReply->IsSMTP();

								  	  $mailReply->SMTPDebug  = 0;  
									  	  $mailReply->SMTPAuth   = TRUE;
									  	  $mailReply->SMTPSecure = "tls";
										  	  $mailReply->Port       = 587;
										  	  $mailReply->Host       = "smtp.gmail.com";
											  	  $mailReply->Username   = "hello@lollypop.design";
											  	  $mailReply->Password   = "L0!!6P0p@101";

												  	  $mailReply->IsHTML(true);
												  	  $mailReply->addAddress($_POST['email'], $_POST['full_name']);
													  	  $mailReply->SetFrom("hello@lollypop.design", "Lollypop Design");
													  	  $mailReply->AddReplyTo("hello@lollypop.design", "Lollypop Design");
														  	  $mailReply->Subject = "Thank you for contacting Lollypop Design Studio";
														  	  $contentReply .= '<html><head><style>.asdjhdagsd{background: url(https://lollypop.design/email-template-image.png) no-repeat center center;background-size: contain;width:100%;padding:40px;}.sdfsdfsfdsdfsdfsf{background: url(https://lollypop.design/company-email-template-logo.png) no-repeat center center;background-size: contain;width:100%;padding:40px;height:100px;}</style></head><body><table border="0" cellspacing="0" cellpadding="0" width="100%" style="min-width:600px;padding:80px" bgcolor="#E5E5E5"><tbody><tr><td><table border="0" cellspacing="0" cellpadding="0" width="720" bgcolor="#ffffff" align="center" style="width:600px"><tbody><tr><td style="padding: 48px;font-family:Helvetica, sans-serif"><table border="0" width="90%" align="left" ><tbody><tr><td width="100%"><table border="0" cellspacing="0" cellpadding="0" align="left"><tbody><tr><td style="padding-bottom: 24px"><div class="asdjhdagsd"><div></td></tr><tr><td align="left" style="width:100%;font-size:32px;padding: 8px 0;font-weight:bold;letter-spacing:-1.2px;line-height:38px;color:#333333;">Thanks for getting in touch!</td></tr><tr><td align="left" style="width:100%;padding: 8px 0;font-size:16px;font-weight:400;line-height:24px;color:#333333;font-family:Helvetica, sans-serif"> Hello '. $_POST['full_name'] .' Thank you for considering us as your partner in design. We are looking forward to collaborating with you and ideating on the possibilities of crafting a seamless experience.</td></tr><tr><td align="left" style="width:100%;font-size:12px;padding: 8px 0;font-weight:400;line-height:19px;color:#6D6D6D;">We usually respond to all project related queries within 2 working days, emergency situations (eg. Covid induced lockdowns) notwithstanding. Rest assured well get back to you at the earliest.</td></tr><tr><table border="0" cellspacing="0" cellpadding="0" align="left" style="padding: 72px 0 0 0;"><tbody><tr><td align="left" style="padding-bottom: 16px;"><a href="#"><div class="sdfsdfsfdsdfsdfsf"><div></a></td></tr></tbody></table></tr><tr><td align="left" style="width:100%;"><table border="0" cellspacing="0" cellpadding="0" width="80%" align="left"><tbody><tr><td><a style="text-align:center;font-size:12px;color:#454545;line-height:29px;text-decoration:none;font-weight:bold" href="https://www.linkedin.com/company/lollypop-studio/" title="Lollypop on Linkedin" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://www.linkedin.com/company/lollypop-ui-ux-studio&amp;source=gmail&amp;ust=1644058795127000&amp;usg=AOvVaw1o0xSUL9Tl5mMYfcyBZMIh">LinkedIn</a></td><td><a style="text-align:center;font-size:12px;color:#454545;line-height:29px;text-decoration:none;font-weight:bold" href="https://twitter.com/lollypop_studio" title="Lollypop on Linkedin" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://twitter.com/lollypop_studio&amp;source=gmail&amp;ust=1644058795127000&amp;usg=AOvVaw1wplxBnSJhbnimcuWY25Xz">Twitter</a></td><td><a style="text-align:center;font-size:12px;color:#454545;line-height:29px;text-decoration:none;font-weight:bold" href="https://www.instagram.com/lollypop.design/" title="Lollypop on Linkedin" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://www.instagram.com/lollypop_design/&amp;source=gmail&amp;ust=1644058795127000&amp;usg=AOvVaw0ERXoRM-zappPtEM1HKoL0">Instagram</a></td><td><a style="text-align:center;font-size:12px;color:#454545;line-height:29px;text-decoration:none;font-weight:bold" href="https://www.facebook.com/lollypop.india" title="Lollypop on Linkedin" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://www.facebook.com/lollypop.india&amp;source=gmail&amp;ust=1644058795127000&amp;usg=AOvVaw2EiR7GPUt8GX91YE2cNrob">Facebook</a></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></body></html>';
															  	  $mailReply->MsgHTML($contentReply); 
															  	  
	  if(!$mailReply->send()){
		 echo "False";
	  }else{
		if($_FILES['attachment']['name'] !='' && !empty($_FILES['attachment']['name'])){
			$doctype = array('doc', 'docx', 'pdf');
			if(in_array($file_ext, $doctype)){
				echo "True";
			}else{
				echo "Invalid_doc";
			}
		}else{
			echo "True";
		}		 
	  }
	  
															    }
	 }
 }else{
	 	echo "greater_mb";
 }  


?>



