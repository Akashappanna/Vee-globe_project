<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require __DIR__ . '/vendor/phpmailer/phpmailer/src/Exception.php';
require __DIR__  . '/vendor/phpmailer/phpmailer/src/PHPMailer.php';
require __DIR__ . '/vendor/phpmailer/phpmailer/src/SMTP.php';

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Mailer = "smtp";

$mail->SMTPDebug  = 0;
$mail->SMTPAuth   = TRUE;
$mail->SMTPSecure = "ssl";
$mail->Port       = 465;
$mail->Host       = "sg2plcpnl0149.prod.sin2.secureserver.net";
$mail->Username   = "info@veeglobe.com";
$mail->Password   = "!nfo@123";

if($_POST['submit'])
{
                   $mail->IsHTML(true);
                   $mail->AddAddress("info@veeglobe.com",);
                   $mail->SetFrom("info@veeglobe.com", "Vee-globe");
                   $content = "<b>Name</b>:<b>".$_POST['name']."</b><br />
<b>Email</b>:<b>".$_POST['email']."</b> <br />
<b>Subject</b>:<b>".$_POST['subject']."</b><br />
<b>Message</b>:<b>".$_POST['message']."</b>";


$mail->MsgHTML($content);
if(!$mail->Send()) {
    echo "Error while sending Email.";
//        var_dump($mail);
} else {
    echo header( "refresh:5;url=index.html" );
    echo "Email sent successfully";;
}
}
?>