<?php
/**
 * * * Template Name: Build Upload
 * * */

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '/var/www/html/lollypop/wp-content/themes/lollypop/PHPMailer/src/Exception.php';
require '/var/www/html/lollypop/wp-content/themes/lollypop/PHPMailer/src/PHPMailer.php';
require '/var/www/html/lollypop/wp-content/themes/lollypop/PHPMailer/src/SMTP.php';

require '/var/www/html/lollypop/wp-content/themes/lollypop/vendor/autoload.php';


if ($_POST['email'] !="") {
$mail = new PHPMailer();
$mail->IsSMTP();

$mail->SMTPDebug = 0;
$mail->SMTPAuth = true;
$mail->SMTPSecure = "tls";
$mail->Port = 587;
$mail->Host = "smtp.gmail.com";
$mail->Username = "marketing@lollypop.design";
$mail->Password = "HUidbvajanf*636288**7fj@#!";


$mail->IsHTML(true);
$mail->addAddress('marketing@lollypop.design', 'Lollypop Design');
$mail->addAddress('anil@lollypop.design', 'Anil');
$mail->addAddress('anjali@lollypop.design', 'Anjali');

$mail->SetFrom("marketing@lollypop.design", "Lollypop Design");
$mail->AddReplyTo("marketing@lollypop.design", "Lollypop Design");
$mail->Subject = "Build Fast Launch Fast Enquiry " ;
$content .=
'<html><head><style>@media screen and (max-width:768px){.white-bg-align{width:100%!important;margin:0!important}.inner-text{padding:30px!important}}.asdjhdagsd{backg
round: url(https://lollypop.design/lollypop-logo.PNG) no-repeat center center;background-size: contain;padding:40px;}</style></head><body><div id=ample_service_widget-2 class="widget widget_service_block main-div-padding" style=background-color:#f5f5f5;padding:40px><div class="clearfix white-bg-align" style=background-color:#fff><div class=services-header style="text-align:center;padding-top:30px;"><a href=#><div class="asdjhdagsd"><div></a></div><div class="services-content clearfix"><div class=inner-text style="padding:40px 60px"><h2>Yay!! Build Fast Launch Fast Enquiry.</h2>
<span><br><br>Requirement : </span> <span><b>' .
$_POST['build'] .
'</b><span><br><br>First Name : </span> <span><b>' .
$_POST['full_name'] .
'</b></span><br><br><span>Email : </span> <span><b>' .
$_POST['email'] .
'</b></span><br><br><span>Phone Number: </span> <span><b>' .
$_POST['phone'] .
'</b></span><br><br><span>Description : </span> <span><b>' .
$_POST['description'] .
'</b></span><br><br></div></div></div></div></body></html>';


$mail->MsgHTML($content);
if (!$mail->Send()) {
echo "False";
} else {
$mailReply = new PHPMailer();
$mailReply->IsSMTP();

$mailReply->SMTPDebug = 0;
$mailReply->SMTPAuth = true;
$mailReply->SMTPSecure = "tls";
$mailReply->Port = 587;
$mailReply->Host = "smtp.gmail.com";
$mailReply->Username = "marketing@lollypop.design";
$mailReply->Password = "HUidbvajanf*636288**7fj@#!";

$mailReply->IsHTML(true);
$mailReply->addAddress($_POST['email'], $_POST['full_name']);
$mailReply->SetFrom("marketing@lollypop.design", "Lollypop Design");
$mailReply->AddReplyTo("marketing@lollypop.design", "Lollypop Design");
$mailReply->Subject = "Thank you for contacting Lollypop Design Studio";
$contentReply .=
'<html><head><style>.asdjhdagsd{background: url(https://lollypop.design/email-template-image.png) no-repeat center center;background-size: contain;padding:40
px;height:200px;}.sdfsdfsfdsdfsdfsf{background: url(https://lollypop.design/company-email-template-logo.png) no-repeat center center;background-size: contain;padding:40px;}</style></head><b
ody><table border="0" cellspacing="0" cellpadding="0" width="100%" style="min-width:600px;padding:80px" bgcolor="#E5E5E5"><tbody><tr><td><table border="0" cellspacing="0" cellpadding="0" wi
dth="720" bgcolor="#ffffff" align="center" style="width:600px"><tbody><tr><td style="padding: 48px;font-family:Helvetica, sans-serif"><table border="0" width="100%" align="left" ><tbody><tr>
<td width="100%"><table border="0" cellspacing="0" cellpadding="0" align="left"><tbody><tr><td style="padding-bottom: 24px"><div class="asdjhdagsd"><div></td></tr><tr><td align="center" style
="width:100%;font-size:32px;padding: 8px 0;font-weight:bold;letter-spacing:-1.2px;line-height:38px;color:#333333;">Thanks for getting in touch! </td></tr><tr><td align="left" style="width:10
0%;padding: 8px 0;font-size:16px;font-weight:400;line-height:24px;color:#333333;font-family:Helvetica, sans-serif"> Hello ' .
$_POST['full_name'] . 
'!<br> <br>Thank you for considering us as your partner in design! We are looking forward to collaborating with you in building and launching your product in the market quickly!</td></tr><tr><td align="left" style="width:100%;font-size:16px;padding: 8px 0;font-weight:400;line-height:24px;color:#333333;"> We usually respond to all queries within 2 working days, emergencies (eg. Covid induced lockdowns) notwithstanding. Rest assured we will get back to you at the earliest. </td></tr><tr><table border="0" cellspaci
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
$mailReply->MsgHTML($contentReply);

$company = '';
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

$post_json = json_encode($arr);
$endpoint = 'https://api.hubapi.com/contacts/v1/contact?hapikey=' . $hapikey;

$ch = curl_init();
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post_json);
curl_setopt($ch, CURLOPT_URL, $endpoint);
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
$status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$curl_errors = curl_error($ch);
curl_close($ch);

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

?>

