<?php
/**
 *  * * * Template Name: whitepaper Upload
 *   * * */

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
$mail->Username = "hello@lollypop.design";
$mail->Password = "gTYHVFEDHWYmbdfjid %%@&6362";

$mail->IsHTML(true);
$mail->addAddress('hello@lollypop.design', 'Lollypop Design');
$mail->addAddress('marketing@lollypop.design', 'Marketing');
//$mail->addAddress('vinoth.madhavan@terralogic.com', 'Vinoth');

$mail->SetFrom("hello@lollypop.design", "Lollypop Design");
$mail->AddReplyTo("hello@lollypop.design", "Lollypop Design");
$mail->Subject = "Whitepaper" . $_POST['full_name'] . "";
$content .=
'<html><head><style>@media screen and (max-width:768px){.white-bg-align{width:100%!important;margin:0!important}.inner-text{padding:30px!important}}.asdjhdagsd{backg
round: url(https://lollypop.design/lollypop-logo.PNG) no-repeat center center;background-size: contain;padding:40px;}</style></head><body><div id=ample_service_widget-2 class="widget widget_service_block main-div-padding" style=background-color:#f5f5f5;padding:40px><div class="clearfix white-bg-align" style=background-color:#fff><div class=services-header style="text-align:center;padding-top:30px;"><a href=#><div class="asdjhdagsd"><div></a></div><div class="services-content clearfix"><div class=inner-text style="padding:40px 60px"><h2>Yay!! We received a new enquiry.</h2>
</b></span><br><br>' .
'<span>Whitepaper : </span> <span><b>' .
$_POST['whitepaper_title'] .
'</b></span><br><br><span>Email : </span> <span><b>' .
$_POST['email'] .
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
$mailReply->Username = "hello@lollypop.design";
$mailReply->Password = "gTYHVFEDHWYmbdfjid %%@&6362";

$mailReply->IsHTML(true);
$mailReply->addAddress($_POST['email'], $_POST['full_name']);
$mailReply->SetFrom("hello@lollypop.design", "Lollypop Design");
$mailReply->AddReplyTo("hello@lollypop.design", "Lollypop Design");
$mailReply->Subject = "Thank you for contacting Lollypop Design Studio";
$contentReply .=
'<html>
                <head>
                </head>
                <body>
                        <table border="0" cellspacing="0" cellpadding="0" width="100%" style="min-width:600px;padding:80px 0 40px 0" bgcolor="#eaeef3">
    <tbody>
        <tr>
            <td>
                <table border="0" cellspacing="0" cellpadding="0" width="720" align="center" style="width:720px">
                    <tbody>
                        <tr>
                            <td>
                                <table border="0" width="640" align="center" style="width:640px">
                                    <tbody>
                                        <tr>
                                            <td width="100%" height="3px" align="center" bgcolor="#fd2e35">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td width="100%" bgcolor="#ffffff">
                                                <table border="0" cellspacing="0" cellpadding="0" width="90%" align="center">
                                                    <tbody>
                                                        <tr>
                                                            <td align="center" style="width:70%; padding-top:30px"><img style="width:200px";  src="https://lollypop.design/wp-content/uploads/2022/03/lollypop-terralogic.png" alt="Lollypop logo" class="CToWUd"></td>
                                                        </tr>
                                                        <tr>
                                                            <td align="center" style="width:100%;font-size:36px;font-weight:bold;line-height:29px;color:#333333;padding:32px 0;font-family:"M
ontserrat" sans-serif"><h1>Whitepaper</h1></td>
                                                        </tr>
                                                        <tr>
                                                         <td><h2 style="text-align:center">'.$_POST['whitepaper_title'].' </h2> </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="center" style="width:100%;font-size:18px;font-weight:400;line-height:28px;color:#212529;padding:0 32px;font-family:"Ne
uton",serif">

                                                                <p> '.$_POST['whitepaper-content'].'</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                          <td style="text-align:center"> <a style="width:110px; background:#fd2e35; color: #fff;
    padding: 10px 1px; display: inline-block; text-align: center; margin-bottom: 30px;" href=" '.$_POST['pdf_attach'] .' ">Download </a> </td>
	  </tr>

                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center" style="width:90%;padding:28px 48px">&nbsp;</td>
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

