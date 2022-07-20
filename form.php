<!-- 
 
require "./PHPMailer/src/Exception.php";
require "./PHPMailer/src/PHPMailer.php";
require "./PHPMailer/src/SMTP.php";
 require './PHPMailer/class.phpmailer.php';

$result="";
if(isset($_POST['submit'])){

   

    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Username = 'marlonmuchin01@gmail.com';
    $mail->Password = 'Marlon__01!';

    $mail->setFrom($_POST['email'],$_POST['nombre']);
    $mail->addAddress('marlonmuchin01@gmail.com');
    $mail->addReplyTo($_POST['email'],$_POST['nombre']);

    $mail->isHTML(true);
    $mail->Subject='Enviado por '.$_POST['nombre'];
    $mail->Body='<h1 align=center>Nombre: '.$_POST['nombre'].'<br>Email: '.$_POST['email'].'<br
    >Mensaje: '.$_POST['mensaje'].'</h1>';
    if($mail->send()){
        $result="Algo esta mal, por favor inténtelo de nuevo.";
    }
    else{
        $result="Gracias ".$_POST['nombre']." por contactarnos, espera la respuesta!";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Enviar Correo</title>
    <link rel="shortcut icon" href="../img/favicon.png">
    <link rel="stylesheet" href="../style/normalize/normalize.css">
    <link rel="stylesheet" type="text/css" href="../fuente/fuente.css">
    <link rel="stylesheet" href="../style/css/estilos.css">
</head>
<body>
<main>
  <div>
    <section class="l-section s-100 contac">
      <div class="contac__content">
        <h1 class="center-content">Envío de correo con PHP, SMTP y PHPMailer.</h1>
      </div>
    </section>
  </div>
  <section class="l-section cont">
    <div class="espcont center-content center-block">
      <div class="espform s-40 center-block center-content">
          <form action="" method="post">
            <div class="espnom">
              <label for="nombre">Nombre y primer apellido</label>
              <input id="nombre" name="nombre" type="text"  maxlength="50" data-length="50" required />
            </div>
            <div class="espema">
              <label for="email">E-mail</label>
              <input id="email" name="email" type="email"  maxlength="50" data-length="50" required />
            </div>
            <div class="espmen">
              <label for="titmensaje">Mensaje</label>
              <div class="alturaMensa">
                <textarea name="mensaje" id="mensaje" class="ESPmensaje center-content" required></textarea>
              </div>  
            </div>
            <div class="espenv">
              <button type="submit" name="submit">Enviar</button>
              <h5 class="notifCorrecto"><?= $result; ?></h5>
            </div>                    
          </form>
      </div> 
    </div>                     
  </section>
</main>
</html> -->


<?php
// some includes 
// require "./PHPMailer/src/Exception.php";
// require "./PHPMailer/src/PHPMailer.php";
// require "./PHPMailer/src/SMTP.php";
 require './PHPMailer/class.phpmailer.php';
    $mail = new PHPMailer();

    $mail->isSMTP();
    $mail->Host = 'myhost.com';
    $mail->Port = 587;
    $mail->SMTPAuth = false;
    $mail->Username = 'account@myhost.com';
    $mail->Password = 'password';
    $mail->SMTPDebug = 2;
//    $mail->SMTPAutoTLS = false;
//    $mail->SMTPSecure = 'tls';

    $mail->Sender = 'account@myhost.com';
    $mail->From = 'account@myhost.com';
    $mail->FromName = 'Giant Frying Pan';

    $mail->AddAddress('home@gmail.com');
    $mail->Subject = 'Test Email';
    $mail->Body = 'Body of Test Email';

    if (!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo . PHP_EOL;
    }