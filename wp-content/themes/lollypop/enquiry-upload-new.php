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
					<span>First Name : </span> <span><b>' . $_POST['full_name'] .'</b></span><br><br>
					
					<span>Email : </span> <span><b>' . $_POST['email'] .'</b></span><br><br>
					<span>Phone Number: </span> <span><b>' . $_POST['phone'] .'</b></span><br><br>';
                    $email->Body  .= '<span>Description : </span> <span><b>' . $_POST['description'] .'</b></span><br><br>';
					$email->Body  .= '</div>
		</div>
			</div>
	</div>
</body>
</html>';

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
      
