<?php

$nombre = $_POST['ame'];
$email = $_POST['email'];
$telefono = $_POST['subject'];
$mensaje = $_POST['message'];

// Datos del email
$para = 'marlonmuchin01@gmail.com';
$titulo = 'S&S Solicitud de presupuesto';
$header = 'From: ' . $email;
$msjCorreo = "Nombre: $nombre\n Telefono: $telefono\n E-Mail: $email\n Mensaje:\n $mensaje";

if ( $_POST['send']) {

    if (imail($para, $titulo, $msjCorreo, $header)) {

    echo "<script language='javascript'>
    alert('Mensaje enviado, muchas gracias por contactar con nosotros.');
    </script>";
    } else {
        echo 'Falló el envio';
    }
}

?>
