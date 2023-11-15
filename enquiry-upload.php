<?php
/** 
* Template Name: Enquiry Uploadssss
*/

error_reporting(E_ALL);
ini_set("display_errors", 1);

include($_SERVER["DOCUMENT_ROOT"]."./enquiry-upload.php");


//global $wpdb;

//$iniConfig = parse_ini_file(get_theme_file_path().'/app.ini');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
//if (!class_exists('PHPMailer\PHPMailer\Exception')){
require '/var/www/html/lollypop/wp-content/themes/lollypop/PHPMailer/src/Exception.php';
require '/var/www/html/lollypop/wp-content/themes/lollypop/PHPMailer/src/PHPMailer.php';
require '/var/www/html/lollypop/wp-content/themes/lollypop/PHPMailer/src/SMTP.php';
//}
require '/var/www/html/lollypop/wp-content/themes/lollypop/vendors/autoload.php';

 $maxsize    = 2097152;
if($_FILES['attachment']['name'] !=''){
	 $file_size = $_FILES['attachment']['size'];
	 $file_tmp = $_FILES['attachment']['tmp_name'];
    //$doctype = array('doc', 'docx', 'pdf');
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
$lollypop = new PHPMailer(true); 	
$lollypop->SMTPDebug = 0;
$lollypop->isSMTP();
$lollypop->CharSet = 'UTF-8';
$lollypop->Host = 'smtp.gmail.com';
$lollypop->SMTPAuth = true;
$lollypop->Port = 587;
$lollypop->SMTPSecure = 'tls';
$lollypop->Username = 'hello@lollypop.design';
$lollypop->Password =  'L0!!6P0p@101';
$lollypop->setFrom('hello@lollypop.design', 'Lollypop');
$lollypop->addReplyTo('hello@lollypop.design', 'Lollypop');
$lollypop->addAddress('hello@lollypop.design', 'Lollypop');
$lollypop->addAddress('anil@lollypop.design', 'Anil');
$lollypop->addAddress('kruti@lollypop.design', 'Kruti');
$lollypop->addAddress('renil@terralogic.com', 'Renil');
$lollypop->addAddress('rama@terralogic.com', 'Rama');
$lollypop->addAddress('arvind@lollypop.design', 'Arvind');
$lollypop->addAddress('venkat@terralogic.com', 'Venkat');
$lollypop->addAddress('tony.nguyen@terralogic.com', 'Tony Nguyen');
//$lollypop->addAddress('ravikiran.pellakuru@terralogic.com','For Test');
//$lollypop->addAddress('hello@lollypop.design','For Test');
//$lollypop->addAddress('satyagvns@shainfotech.com','For Test');
if($_FILES['attachment']['name'] !=''){
$lollypop->AddAttachment($uploadDir.$file_name);
}
$lollypop->Subject = "New Enquiry ".$_POST['full_name'];	
    


$lollypop->isHTML(true);
$lollypop->Body  .= '<html>
<head>
<style>
@media screen and (max-width: 768px) {
	.white-bg-align{
		width:100% !important;
		margin: 0% 0% 0% 0% !important;
	}
	.inner-text{
		padding:30px !important;
	}
	
}
</style>
</head>
<body>
	<div id="ample_service_widget-2" class="widget widget_service_block main-div-padding" style="background-color:#f5f5f5;padding: 40px;">
		<div class="clearfix white-bg-align" style="background-color:#ffffff;">         
			<div class="services-header" style="text-align:center;">
				<a href="#"><img src ="'.get_template_directory_uri().'/img/lollypop-logo.PNG" alt="" style="width:80px;padding:30px;"></a>
			</div>
			<div class="services-content clearfix">
				<div class="inner-text" style="padding: 40px 60px;">
<h2>Yay!! We received a new enquiry.</h2><br>
					<span>First Name : </span> <span><b>' . $_POST['full_name'] .'</b></span><br><br>
					
					<span>Email : </span> <span><b>' . $_POST['email'] .'</b></span><br><br>
					<span>Phone Number: </span> <span><b>' . $_POST['phone'] .'</b></span><br><br>';
                    $lollypop->Body  .= '<span>Description : </span> <span><b>' . $_POST['description'] .'</b></span><br><br>';
					$lollypop->Body  .= '</div>
		</div>
			</div>
	</div>
</body>
</html>';
if($lollypop->send()){
 		$lollypopReply = new PHPMailer(true); 	
		$lollypopReply->SMTPDebug = 0;
		$lollypopReply->isSMTP();
		$lollypopReply->CharSet = 'UTF-8';
		$lollypopReply->Host = 'smtp.gmail.com';
		$lollypopReply->SMTPAuth = true;
		$lollypopReply->Port = 587;
		$lollypopReply->SMTPSecure = 'tls';
		$lollypopReply->Username = 'hello@lollypop.design';
		$lollypopReply->Password = 'L0!!6P0p@101';
    		$lollypopReply->setFrom('hello@lollypop.design', 'Lollypop');
		$lollypopReply->addReplyTo('hello@lollypop.design', 'Lollypop');
		$lollypopReply->addAddress($_POST['email'], $_POST['full_name']);
		$lollypopReply->Subject = "Thank you for contacting Lollypop Design Studio";
		$lollypopReply->isHTML(true);

		$lollypopReply->Body  .= '<html>
		<head>
		
		</head>
		<body>
			

<table border="0" cellspacing="0" cellpadding="0" width="100%" style="min-width:600px;padding:80px" bgcolor="#E5E5E5">
    <tbody>
    <tr>
    <td>
    <table border="0" cellspacing="0" cellpadding="0" width="720" bgcolor="#ffffff" align="center" style="width:600px">
    <tbody>
    <tr>
    <td style="padding: 48px;font-family:Helvetica, sans-serif">
    <table border="0" width="100%" align="center" >
    <tbody>
   
    <tr>
    <td width="100%">
    <table border="0" cellspacing="0" cellpadding="0"  align="left">
    <tbody>
        <tr>
            <td style="padding-bottom: 24px;text-align:center;">
                <img style="max-width: 100%;height: auto;text-align:center;"  src ="'.get_template_directory_uri().'/img/email-template-image.png">
               
            </td>
        </tr>
    <tr>
    <td align="center" style="width:100%;font-size:32px;padding: 8px 0;font-weight:bold;letter-spacing:-1.2px;line-height:38px;color:#333333;">Greetings!</td>
    </tr>
    <tr>
    <td align="center" style="width:100%;padding: 8px 0;font-size:16px;font-weight:400;line-height:24px;color:#333333;font-family:Helvetica, sans-serif"> Hello '. $_POST['full_name'] .'<br><br> Thank you for considering Lollypop as possible design consultants. We are looking forward to discussing the concept in length and ideate on the possibilities of crafting a seamless experience.</td>
    </tr>
    <tr>
    <td align="center" style="width:100%;font-size:12px;padding: 8px 0;font-weight:400;line-height:19px;color:#6D6D6D;">We generally get back within 48 hours but in case of public holidays or some emergencies, we might take a little more time. Please, be assured that we will get back to you at the earliest possible and that we truly value your time.</td>
    </tr>
    
    <tr>
        <table border="0" cellspacing="0" cellpadding="0"  align="center" style="padding: 72px 0 0 0;">
            <tbody>
                <tr>
                    <td align="left" style="padding-bottom: 16px;">
                        <a href="#">
                            <img style="max-width: 100%;height: auto;"  src ="'.get_template_directory_uri().'/img/company-email-template-logo.png">
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    
    </tr>
    <tr>
    <td align="left" style="width:100%;">
    <table border="0" cellspacing="0" cellpadding="0" width="80%" align="center">
    <tbody>
    <tr>
    <td><a style="text-align:center;font-size:12px;color:#454545;line-height:29px;text-decoration:none;font-weight:bold" href="https://www.linkedin.com/company/lollypop-studio/" title="Lollypop on Linkedin" target="_blank">LinkedIn</a></td>
    <td><a style="text-align:center;font-size:12px;color:#454545;line-height:29px;text-decoration:none;font-weight:bold" href="https://twitter.com/lollypop_studio" title="Lollypop on Linkedin" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://twitter.com/lollypop_studio&amp;source=gmail&amp;ust=1644058795127000&amp;usg=AOvVaw1wplxBnSJhbnimcuWY25Xz">Twitter</a></td>
    <td><a style="text-align:center;font-size:12px;color:#454545;line-height:29px;text-decoration:none;font-weight:bold" href="https://www.instagram.com/lollypop.design/" title="Lollypop on Instagram" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://www.instagram.com/lollypop_design/&amp;source=gmail&amp;ust=1644058795127000&amp;usg=AOvVaw0ERXoRM-zappPtEM1HKoL0">Instagram</a></td>
    <td><a style="text-align:center;font-size:12px;color:#454545;line-height:29px;text-decoration:none;font-weight:bold" href="https://www.facebook.com/lollypop.india" title="Lollypop on Facebook" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://www.facebook.com/lollypop.india&amp;source=gmail&amp;ust=1644058795127000&amp;usg=AOvVaw2EiR7GPUt8GX91YE2cNrob">Facebook</a></td>
    </tr>
    </tbody>
    </table>
    </td>
    </tr>
    </tbody>
    </table>
    </td>
    </tr>
   
    </tbody>
    </table>
    </td>
    </tr>
    </tbody>
    </table>
    </td>
    </tr>
    </tbody>
    </table>
		</body>
		</html>';
		if($_FILES['attachment']['name'] !=''){
			$doctype = array('doc', 'docx', 'pdf');
			if(in_array($file_ext, $doctype)){
				if($lollypopReply->send()){
					echo "True";
				}else{
					echo "False";
				}
			}else{
				echo "Invalid_doc";
			}
		}else{
			if($lollypopReply->send()){
				echo "True";
			}else{
				echo "False";
			}
		}
}else{
	echo "False";
}
}
}else{
	echo "greater_mb";
}
?>
