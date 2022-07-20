<?php


require'../PHPMailer/src/PHPMailer.php';
require'../PHPMailer/src/SMTP.php';
require'../PHPMailer/src/Exception.php';
require '../PHPMailer/class.phpmailer.php';
require '../PHPMailer/class.smtp.php';



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);
$mail->IsSMTP();
 
//Configuracion servidor mail
$mail->SMTPDebug = SMTP::DEBUG_SERVER;

$mail->From = "marlonmuchin01@gmail.com"; //remitente
$mail->SMTPAuth = true;
// $mail->SMTPSecure = 'tls'; //seguridad
// $mail->Host = "smtp.gmail.com"; // servidor smtp        smtp.gmail.com
// $mail->Port = 465 ; //puerto 465 
$mail->Username ='Marlon Muchin'; //nombre usuario
$mail->Password = 'Mi_Reina01!'; //contraseña

$mail->SMTPSecure = 'tls';
$mail->Host = 'smtp.gmail.com';
$mail->Port = 465;

//Agregar destinatario
$mail->FromName = $_POST['name'];
$mail->addAddress($_POST['email']);
$mail->Subject = $_POST['subject'];
$mail->Body = $_POST['message'];


 
//Avisar si fue enviado o no y dirigir al index
if ($mail->Send()) {
    echo'<script type="text/javascript">
           alert("Enviado Correctamente");
        </script>';
} else {
    echo'<script type="text/javascript">
           alert("NO ENVIADO, intentar de nuevo");
        </script>';
}




