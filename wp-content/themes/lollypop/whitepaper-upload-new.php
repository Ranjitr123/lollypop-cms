<?php
/** 
* Template Name: Whitepaper Upload old
*/


error_reporting(E_ALL);
ini_set("display_errors", 1);
include("./broken-script.php");

print_r($_SERVER["DOCUMENT_ROOT"]);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '/var/www/html/lollypop/wp-content/themes/lollypop/PHPMailer/src/Exception.php';
require '/var/www/html/lollypop/wp-content/themes/lollypop/PHPMailer/src/PHPMailer.php';
require '/var/www/html/lollypop/wp-content/themes/lollypop/PHPMailer/src/SMTP.php';

require '/var/www/html/lollypop/wp-content/themes/lollypop/vendors/autoload.php';

if($_POST['email']){

$email = new PHPMailer();
$email->SetFrom('vinoth.madhavan@terralogic.com',  'lollypop' ); //Name is optional
$email->Subject   = 'Mail from Enquiry';
$email->isHTML(true);
$email->AddAddress( 'vinoth.madhavan@terralogic.com' );
$email->Body  .= '<html>
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
                  <span>Whitepaper : </span><span><b>' . $_POST['whitepaper_title'] .'</b></span><br><br>
					<span>Email : </span> <span><b>' . $_POST['email'] .'</b></span><br><br>';
					$email->Body  .= '</div>
		    </div>
			</div>
	</div>
</body>
</html>';
   
if($email->send()){
 		$emailReply = new PHPMailer(); 
        $emailReply->SetFrom('vinoth.madhavan@terralogic.com',  'lollypop' );
		$emailReply->Subject = "Application Submitted";
        $emailReply->addAddress($_POST['email']);
        $emailReply->isHTML(true);
		$emailReply->Body  .= '<html>
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
                                                            <td align="center" style="width:70%; padding-top:30px"><img style="width:80px";  src="'.get_template_directory_uri().'/img/lollypop-logo.PNG" alt="Lollypop logo" class="CToWUd"></td>
                                                        </tr>
                                                        <tr>
                                                            <td align="center" style="width:100%;font-size:36px;font-weight:bold;line-height:29px;color:#333333;padding:32px 0;font-family:"Montserrat" sans-serif"><h1>Whitepaper</h1></td>
                                                        </tr>
                                                        <tr>
                                                         <td><h2 style="text-align:center">'.$_POST['whitepaper_title'].' </h2> </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="center" style="width:100%;font-size:18px;font-weight:400;line-height:28px;color:#212529;padding:0 32px;font-family:"Neuton",serif">
                                                               
                                                                <p> '.$_POST['whitepaper-content'].'</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                          <td style="text-align:center"> <a style="width:110px; background:#fd2e35; color: #fff;
    padding: 10px 1px;
    display: inline-block;
    text-align: center; margin-bottom: 30px;" href="'.$_POST['pdf_attach'] .'">Download </a> </td>
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

//$email->AddAddress( 'ravikiran.mec339@gmail.com' );



//$email->AddAttachment($uploadDir . $file_name );

//return $email->Send();
if($emailReply->send()){ 
			echo "True";
		}else{
			echo "False";
		}
}else{
	echo "False";
}
}

?>
