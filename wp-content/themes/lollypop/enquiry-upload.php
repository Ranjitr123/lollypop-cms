<?php
ini_set('display_errors', 'off');
/**
 * * Template Name: Enquiry Upload
 * */

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '/var/www/html/lollypop/wp-content/themes/lollypop/PHPMailer/src/Exception.php';
require '/var/www/html/lollypop/wp-content/themes/lollypop/PHPMailer/src/PHPMailer.php';
require '/var/www/html/lollypop/wp-content/themes/lollypop/PHPMailer/src/SMTP.php';
require '/var/www/html/lollypop/wp-content/themes/lollypop/vendor/autoload.php';

// require 'C:\xampp\htdocs\lollypop-cms\wp-content\themes\lollypop\PHPMailer\src\Exception.php';
// require 'C:\xampp\htdocs\lollypop-cms\wp-content\themes\lollypop\PHPMailer\src\PHPMailer.php';
// require 'C:\xampp\htdocs\lollypop-cms\wp-content\themes\lollypop\PHPMailer\src\SMTP.php';
// require 'C:\xampp\htdocs\lollypop-cms\wp-content\themes\lollypop\vendor\autoload.php';

$file_name = "";
$maxsize = 2097152;

if ($_FILES['attachment']['name'] != '') {
	$file_size = $_FILES['attachment']['size'];
	$file_tmp = $_FILES['attachment']['tmp_name'];
	$file_type = $_FILES['attachment']['type'];

	$file_ext = strtolower(end(explode('.', $_FILES['attachment']['name'])));
	$file_name = $_POST['full_name'] . "_" . time() . "." . $file_ext;
	if ($_FILES['attachment']['size'] >= $maxsize) {
		$greater_data = "1";
	} else {
		$doctype = ['doc', 'docx', 'pdf'];
		if (in_array($file_ext, $doctype)) {

		
		$uploadDir = $_SERVER["DOCUMENT_ROOT"] . '/wp-content/files/';
		if (move_uploaded_file($file_tmp, $uploadDir . $file_name)) {
		}
		$greater_data = "2";
		} else {
		    echo "Invalid_doc";
		}
	}
	} else {
		$greater_data = "2";
}
if ($greater_data == "2") {
	if ($_POST['email'] !="") {
		$mail = new PHPMailer();
		$mail->IsSMTP();

		$mail->SMTPDebug = 1;
		$mail->SMTPAuth = true;
		$mail->SMTPSecure = "tls";
		$mail->Port = 587;
		$mail->Host = "smtp.gmail.com";
		$mail->Username = "hello@lollypop.design";
		$mail->Password = "npnl txrm faxc peac";
		// $mail->Password = "dcwmhskgofolbjpu";

		$mail->IsHTML(true);
		//Admin mails
		$mail->addAddress('hello@lollypop.design', 'Lollypop Design');
		$mail->addAddress('anil@lollypop.design', 'Anil');
		$mail->addAddress('renil@terralogic.com', 'Renil');
        	$mail->addAddress('rama@terralogic.com', 'Rama');
        	$mail->addAddress('arvind@lollypop.design', 'Arvind');
		$mail->addAddress('venkat@terralogic.com', 'Venkat');
//		$mail->addAddress('anjali@lollypop.design','Anjali');
		$mail->addAddress('manoj@terralogic.com','Manoj');
		$mail->addAddress('sukshith.bs@lollypop.design','Sukshith');
		$mail->addAddress('tony.nguyen@terralogic.com', 'Tony Nguyen');
		$mail->addAddress('rajeeve@terralogic.com', 'Rajeeve Krishnan');
		$mail->addAddress('charan.n@lollypop.design','Charan Babu N');
					
        //testing mails
		//$mail->addAddress('ranjit.r@terralogic.com','Ranjit Rautaray');

		$mail->SetFrom("hello@lollypop.design", "Lollypop Design");
		$mail->AddReplyTo("hello@lollypop.design", "Lollypop Design");
		if ($_FILES['attachment']['name'] != '' && !empty($_FILES['attachment']['name'])) {
			$mail->AddAttachment($uploadDir . $file_name);
		}

		$mail->Subject = "New Enquiry " . $_POST['full_name'] . "";
		$content .=
			'<html><head><style>@media screen and (max-width:768px){.white-bg-align{width:100%!important;margin:0!important}.inner-text{padding:30px!important}}.asdjhdagsd{background: url(https://lollypop.design/lollypop-logo.PNG) no-repeat center center;background-size: contain;padding:40px;}</style></head><body><div id=ample_service_widget-2 class="widget widget_service_block main-div-padding" style=background-color:#f5f5f5;padding:40px><div class="clearfix white-bg-align" style=background-color:#fff><div class=services-header style="text-align:center;padding-top:30px;"><a href=#><div class="asdjhdagsd"></div></a></div><div class="services-content clearfix"><div class=inner-text style="padding:40px 60px"><h2>Yay!! We received a new enquiry.</h2><span>First Name : </span> <span><b>' .
			$_POST['full_name'] .
			'</b></span><br><br><span>Email : </span> <span><b>' .
			$_POST['email'] .
			'</b></span><br><br><span>Phone Number: </span> <span><b>' .
			$_POST['phone'] .
			'</b></span><br><br><span>Description : </span> <span><b>' .
			$_POST['description'] .
			'</b></span><br><br><span>Company : </span> <span><b>' .
			$_POST['company_name'] .
			'</b></span><br><br></div></div></div></div></body></html>';

		$mail->MsgHTML($content);
		if (!$mail->Send()) {
			//echo "False";
			echo $mail->ErrorInfo;
		} else {
			$mailReply = new PHPMailer();
			$mailReply->IsSMTP();

			$mailReply->SMTPDebug = 1;
			$mailReply->SMTPAuth = true;
			$mailReply->SMTPSecure = "tls";
			$mailReply->Port = 587;
			$mailReply->Host = "smtp.gmail.com";
			$mailReply->Username = "hello@lollypop.design";
			$mailReply->Password = "npnl txrm faxc peac";

			$mailReply->IsHTML(true);
			$mailReply->addAddress($_POST['email'], $_POST['full_name']);
			$mailReply->SetFrom("hello@lollypop.design", "Lollypop Design");
			$mailReply->AddReplyTo("hello@lollypop.design", "Lollypop Design");
			$mailReply->Subject = "Thank you for contacting Lollypop Design Studio";
			$contentReply .=
				'<html><head><style>.asdjhdagsd{background: url(https://lollypop.design/wp-content/uploads/2023/06/Illustration-2.png) no-repeat center center;background-size: contain;padding:40px;height:100px;}.sdfsdfsfdsdfsdfsf{background: url(https://lollypop.design/company-email-template-logo.png) no-repeat center center;background-size: contain;padding:40px;}</style></head><body><table border="0" cellspacing="0" cellpadding="0" width="100%" style="min-width:600px;padding:80px" bgcolor="#E5E5E5"><tbody><tr><td><table border="0" cellspacing="0" cellpadding="0" width="720" bgcolor="#ffffff" align="center" style="width:600px"><tbody><tr><td style="padding: 48px;font-family:Helvetica, sans-serif"><table border="0" width="100%" align="center" ><tbody><tr><td width="100%"><table border="0" cellspacing="0" cellpadding="0" align="left"><tbody><tr><td style="padding-bottom: 24px"><div class="asdjhdagsd"><div></td></tr><tr><td align="center" style="width:100%;font-size:32px;padding: 8px 0;font-weight:bold;letter-spacing:-1.2px;line-height:38px;color:#333333;">Thanks for getting in touch!</td></tr><tr><td align="left" style="width:100%;padding: 8px 0;font-size:16px;font-weight:400;line-height:24px;color:#333333;font-family:Helvetica, sans-serif"> Hello ' .
				$_POST['full_name'] .
				'<br><br> Thank you for considering us as your partner in design. We are looking forward to collaborating with you and ideating on the possibilities of crafting a seamless experience.</td></tr><tr><td align="left" style="width:100%;font-size:16px;padding: 8px 0;font-weight:400;line-height:24px;color:#333333;">We usually respond to all queries within 2 working days, emergencies notwithstanding. Rest assured, we will get back to you at the earliest.</td></tr><tr><table border="0" cellspacing="0" cellpadding="0" align="center" style="padding: 20px 0 0 0;"><tbody><tr><td align="center" style="padding-bottom: 16px;"><a href="#"><div class="" style="width:180px;height:70px;"><img style="width:100%" src="https://lollypop.design/wp-content/uploads/2022/03/lollypop-terralogic.png"/> <div></a></td></tr></tbody></table></tr><tr><td align="left" style="width:100%;"><table border="0" cellspacing="0" cellpadding="0" width="80%" align="center"><tbody><tr><td align="center"><a style="text-align:center;font-size:12px;color:#454545;line-height:29px;text-decoration:none;font-weight:bold" href="https://www.linkedin.com/company/lollypop-studio/" title="Lollypop on Linkedin" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://www.linkedin.com/company/lollypop-ui-ux-studio&amp;source=gmail&amp;ust=1644058795127000&amp;usg=AOvVaw1o0xSUL9Tl5mMYfcyBZMIh">LinkedIn</a></td><td align="center"><a style="text-align:center;font-size:12px;color:#454545;line-height:29px;text-decoration:none;font-weight:bold" href="https://twitter.com/lollypop_studio" title="Lollypop on Linkedin" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://twitter.com/lollypop_studio&amp;source=gmail&amp;ust=1644058795127000&amp;usg=AOvVaw1wplxBnSJhbnimcuWY25Xz">Twitter</a></td><td align="center"><a style="text-align:center;font-size:12px;color:#454545;line-height:29px;text-decoration:none;font-weight:bold" href="https://www.instagram.com/lollypop.design/" title="Lollypop on Linkedin" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://www.instagram.com/lollypop_design/&amp;source=gmail&amp;ust=1644058795127000&amp;usg=AOvVaw0ERXoRM-zappPtEM1HKoL0">Instagram</a></td><td align="center"><a style="text-align:center;font-size:12px;color:#454545;line-height:29px;text-decoration:none;font-weight:bold" href="https://www.facebook.com/lollypop.india" title="Lollypop on Linkedin" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://www.facebook.com/lollypop.india&amp;source=gmail&amp;ust=1644058795127000&amp;usg=AOvVaw2EiR7GPUt8GX91YE2cNrob">Facebook</a></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></body></html>';
			$mailReply->MsgHTML($contentReply);

			$company = $_POST['company_name'] || '';
			$fname = $_POST['full_name'];
			$phone = $_POST['phone'];
			$email = $_POST['email'];

			$contact_data = [
				"fname" => $fname,
				"email" => $email,
				"phone" => $phone,
				"company" => $company,
			];

			$hapikey = "2688c174-6aa7-4622-8d21-16e0744d56ed";

			$arr = [
				'properties' => [
					[
						'property' => 'email',
						'value' => $contact_data["email"],
					],
					[
						'property' => 'firstname',
						'value' => $contact_data["fname"],
					],
					[
						'property' => 'company',
						'value' => $contact_data["company"],
					],

					[
						'property' => 'phone',
						'value' => $contact_data["phone"],
					],
				],
			];

			//$post_json = json_encode($arr);
			//$endpoint = 'https://api.hubapi.com/contacts/v1/contact?hapikey=' . $hapikey;

			//$ch = curl_init();
			//curl_setopt($ch, CURLOPT_POST, true);
			//curl_setopt($ch, CURLOPT_POSTFIELDS, $post_json);
			//curl_setopt($ch, CURLOPT_URL, $endpoint);
			//curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
			//curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			//$response = curl_exec($ch);
			//$status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
			//$curl_errors = curl_error($ch);
			//curl_close($ch);
		// 	if($file_name == "") {
				
		// 	$curl = curl_init();

		// 	curl_setopt_array($curl, array(
		//  	CURLOPT_URL => 'https://forms.hubspot.com/uploads/form/v2/5176965/d678089d-e2e8-4138-a9dc-c3d2b6da4969',
		//   	CURLOPT_RETURNTRANSFER => true,
		//   	CURLOPT_ENCODING => '',
		//   	CURLOPT_MAXREDIRS => 10,
		//   	CURLOPT_TIMEOUT => 20,
		//   	CURLOPT_FOLLOWLOCATION => true,
		//   	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		//   	CURLOPT_CUSTOMREQUEST => 'POST',
		//   	CURLOPT_POSTFIELDS => array(
		// 			'firstname' => $_POST["full_name"],
		// 			'phone' => $_POST["phone"],
		// 			'email' => $_POST["email"],
		// 			'message' => $_POST["description"]
		// 		),
		// 	));

		// 	$response = curl_exec($curl);

		// 	curl_close($curl);
		// } else {
		// 	$curl = curl_init();

        //                 curl_setopt_array($curl, array(
        //                 CURLOPT_URL => 'https://forms.hubspot.com/uploads/form/v2/5176965/d678089d-e2e8-4138-a9dc-c3d2b6da4969',
        //                 CURLOPT_RETURNTRANSFER => true,
        //                 CURLOPT_ENCODING => '',
        //                 CURLOPT_MAXREDIRS => 10,
        //                 CURLOPT_TIMEOUT => 20,
        //                 CURLOPT_FOLLOWLOCATION => true,
        //                 CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        //                 CURLOPT_CUSTOMREQUEST => 'POST',
        //                 CURLOPT_POSTFIELDS => array(
        //                                 'upload_document'=> new CURLFILE($uploadDir . $file_name),
        //                                 'firstname' => $_POST["full_name"],
        //                                 'phone' => $_POST["phone"],
        //                                 'email' => $_POST["email"],
        //                                 'message' => $_POST["description"]
        //                         ),
        //                 ));

        //                 $response = curl_exec($curl);

        //                 curl_close($curl);

		// }


			if (!$mailReply->send()) {
				echo "False";
			} else {
				if ($_FILES['attachment']['name'] != '' && !empty($_FILES['attachment']['name'])) {
					$doctype = ['doc', 'docx', 'pdf'];
					if (in_array($file_ext, $doctype)) {
						echo "True";
					} else {
						echo "Invalid_doc";
					}
				} else {
					echo "True";
				}
			}
		}
	}else{
		header("Location: ".get_site_url());
		exit();
	}
} else {
	echo "greater_mb";
}
?>
