<?php

require 'PHPMailer/PHPMailerAutoload.php';
//    require './PHPMailer/PHPMailerAutoload.php';
  include_once('PHPMailer/src/PHPMailer.php');
  include_once('PHPMailer/src/SMTP.php');
  include_once('PHPMailer/src/Exception.php');

 
//Create a new PHPMailer instance
$mail = new PHPMailer();
$mail->IsSMTP();
 
//Configuracion servidor mail
$mail->From = "marlonmuchin01@gmail.com"; //remitente
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls'; //seguridad
$mail->Host = "smtp.gmail.com"; // servidor smtp
$mail->Port = 587; //puerto
$mail->Username ='marlonmuchin01@gmail.com'; //nombre usuario
$mail->Password = 'Marlon__01!'; //contraseña
 
//Agregar destinatario
$mail->AddAddress($_POST['email']);
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