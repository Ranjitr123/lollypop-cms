<?php
/** 
* Template Name: Enquiry Upload New
*/


error_reporting(E_ALL);
ini_set("display_errors", 1);
//include("./enquiry-upload.php");

print_r($_SERVER["DOCUMENT_ROOT"]);


#use PHPMailer\PHPMailer\PHPMailer;
#use PHPMailer\PHPMailer\Exception;
if (!class_exists('PHPMailer\PHPMailer\Exception')){
   require '/var/www/html/lollypop/wp-content/themes/lollypop/PHPMailer/src/Exception.php';
   require '/var/www/html/lollypop/wp-content/themes/lollypop/PHPMailer/src/PHPMailer.php';
   require '/var/www/html/lollypop/wp-content/themes/lollypop/PHPMailer/src/SMTP.php';
}
require '/var/www/html/lollypop/wp-content/themes/lollypop/vendors/autoload.php';

 $maxsize    = 2097152;
if($_FILES['attachment']['name'] !=''){
	 $file_size = $_FILES['attachment']['size'];
	 $file_tmp = $_FILES['attachment']['tmp_name'];
	 $file_type = $_FILES['attachment']['type'];
	 $file_ext=strtolower(end(explode('.',$_FILES['attachment']['name'])));
	 $file_name = $_POST['full_name']."_".time().".".$file_ext;
	 if($_FILES['attachment']['size'] >= $maxsize) {
		$greater_data =  "1";
	 }else{
		 $uploadDir = $_SERVER["DOCUMENT_ROOT"].'/lollypop/wp-content/files/';
			if(move_uploaded_file($file_tmp, $uploadDir.$file_name)){
			
		}
		$greater_data =  "2";
	 }
}else{
	$greater_data =  "2";
}

if($greater_data == "2"){
if($_POST['email']){

$email = new PHPMailer();
$email->SetFrom('vinoth.madhavan@terralogic.com', 'Lollypop'); //Name is optional
$email->Subject   = 'Mail from Enquiry';
$email->isHTML(true);
$email->Body  .=
'<html><head><style>.asdjhdagsd{background: url(https://lollypop.design/email-template-image.png) no-repeat center center;background-size: contain;padding:40
px;height:200px;}.sdfsdfsfdsdfsdfsf{background: url(https://lollypop.design/company-email-template-logo.png) no-repeat center center;background-size: contain;padding:40px;}</style></head><b
ody><table border="0" cellspacing="0" cellpadding="0" width="100%" style="min-width:600px;padding:80px" bgcolor="#E5E5E5"><tbody><tr><td><table border="0" cellspacing="0" cellpadding="0" wi
dth="720" bgcolor="#ffffff" align="center" style="width:600px"><tbody><tr><td style="padding: 48px;font-family:Helvetica, sans-serif"><table border="0" width="100%" align="left" ><tbody><tr>
<td width="100%"><table border="0" cellspacing="0" cellpadding="0" align="left"><tbody><tr><td style="padding-bottom: 24px"><div class="asdjhdagsd"><div></td></tr><tr><td align="center" style
="width:100%;font-size:32px;padding: 8px 0;font-weight:bold;letter-spacing:-1.2px;line-height:38px;color:#333333;">Thanks for taking the LEAP! </td></tr><tr><td align="left" style="width:10
0%;padding: 8px 0;font-size:16px;font-weight:400;line-height:24px;color:#333333;font-family:Helvetica, sans-serif"> Hello ' .
$_POST['full_name'] . 
'!<br> <br>Hope you had a great time at #LEAP2023.</td></tr><tr><td align="left" style="width:100%;font-size:16px;padding: 8px 0;font-weight:400;line-height:24px;color:#333333;"> 


We are thrilled to hear from you. We are looking forward to collaborating with you and ideating on the possibilities of crafting a seamless experience. </td></tr>
<tr><tdstyle="font-weight: 400;font-size: 12px;line-height: 160%;color: #6D6D6D;margin-top: 16px;">Our design consultant will get in touch with you real soon. </td></tr>
<tr><table border="0" cellspaci
ng="0" cellpadding="0" align="center" style="padding: 72px 0 0 0;width:100%"><tbody><tr><td align="center" style="padding-bottom: 16px;"><a href="#"><div class="sdfsdfsfdsdfsdfsf"style="width: 180px;
    height: 70px;padding:0"><div></a></td></tr></tb
ody></table></tr><tr><td align="center" style="width:100%;"><table border="0" cellspacing="0" cellpadding="0" width="80%" align="center"><tbody><tr><td align="center"><a style="text-align:center;font-size:12p
x;color:#454545;line-height:29px;text-decoration:none;font-weight:bold" href="https://www.linkedin.com/company/lollypop-studio/" title="Lollypop on Linkedin" target="_blank" data-saferedire
cturl="https://www.google.com/url?q=https://www.linkedin.com/company/lollypop-ui-ux-studio&amp;source=gmail&amp;ust=1644058795127000&amp;usg=AOvVaw1o0xSUL9Tl5mMYfcyBZMIh">LinkedIn</a></td>
<td align="center"><a style="text-align:center;font-size:12px;color:#454545;line-height:29px;text-decoration:none;font-weight:bold" href="https://twitter.com/lollypop_studio" title="Lollypop on Linkedin" t
arget="_blank" data-saferedirecturl="https://www.google.com/url?q=https://twitter.com/lollypop_studio&amp;source=gmail&amp;ust=1644058795127000&amp;usg=AOvVaw1wplxBnSJhbnimcuWY25Xz">Twitter
</a></td><td align="center"><a style="text-align:center;font-size:12px;color:#454545;line-height:29px;text-decoration:none;font-weight:bold" href="https://www.instagram.com/lollypop.design/" title="Lollyp
op on Linkedin" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://www.instagram.com/lollypop_design/&amp;source=gmail&amp;ust=1644058795127000&amp;usg=AOvVaw0ERXoRM
-zappPtEM1HKoL0">Instagram</a></td><td align="center"><a style="text-align:center;font-size:12px;color:#454545;line-height:29px;text-decoration:none;font-weight:bold" href="https://www.facebook.com/lollypop.india" title="Lollypop on Linkedin" target="_blank" data-saferedirecturl="https://www.facebook.com/lollypop.india">Facebook</a></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></body></h
tml>';

$email->AddAddress( 'ravikiran.mec339@gmail.com' );
$email->AddAddress( 'vinoth.madhavan@terralogic.com' );
$email->AddAddress( 'sukshith.bs@lollypop.design' );

if($_FILES['attachment']['name'] !=''){
$email->AddAttachment($uploadDir . $file_name );
}

//return $email->Send();
if($email->send()){
			echo "True";
		}else{
			echo "False";
		}
}else{
	echo "False";
}
}else{
	echo "greater_mb";
}
 ?>
      
