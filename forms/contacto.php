<?php



require "../PHPMailer/src/Exception.php";
require "../PHPMailer/src/PHPMailer.php";
require "../PHPMailer/src/SMTP.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// $oMail= new PHPMailer();
// $oMail->isSMTP();
// $oMail->Host="smtp.gmail.com";
// $oMail->Port=587;
// $oMail->SMTPSecure="tls";
// $oMail->SMTPAuth=true;
// $oMail->Username="marlonmuchin01@gmail.com";
// $oMail->Password="Marlon__01!";
// $oMail->setFrom("marlonmuchin01@gmail.com","Pepito el que pica papas");
// $oMail->addAddress("marlonmuchin01@gmail.com","Pepito2");
// $oMail->Subject="Hola pepe el que pica";
// $oMail->msgHTML("Hola soy un mensaje");

// if(!$oMail->send())
//   echo $oMail->ErrorInfo;  


// $result = "";  
 
if (isset($_POST['submit'])) {


    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Username = 'marlonmuchin01@gmail.com';
    $mail->Password = 'Marlon__01!';

    $mail->setFrom(
        $_POST['name'],
        $_POST['email'],
        $_POST['subject'],
        $_POST['message']
    );
    $mail->addAddress('marlonmuchin01@gmail.com');
    $mail->addReplyTo(
        $_POST['name'],
        $_POST['email'],
        $_POST['subject'],
        $_POST['message']
    );

    $mail->isHTML(true);
    $mail->Subject = 'Enviado por ' . $_POST['name'];
    $mail->Body = '<h1 align=center>Nombre: ' . $_POST['name'] . '<br>Email: ' . $_POST['email'] . '<br
    >Mensaje: ' . $_POST['message'] . '</h1>';
    if (!$mail->send()) {
        $result = "Algo esta mal, por favor inténtelo de nuevo.";
        
    } else {
        $result = "Gracias " . $_POST['name'] . " por contactarnos, espera la respuesta!";
    }
}
