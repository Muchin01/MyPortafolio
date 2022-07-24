<?php  

// Llamando a los campos
$nombre = $_POST['name'];
$correo = $_POST['email'];
$subject = $_POST['subject'];
$mensaje = $_POST['message'];
$telefono = $_POST['number'];


// Datos para el correo
$destinatario = "marlonmuchin01@gmail.com";
$asunto = "Contacto desde Portafolio Marlon Muchin";

$carta = "De: $nombre \n";
$carta .= "Destinario: $subject \n";
$carta .= "Correo: $correo \n";
$carta .= "Telefono: $telefono \n";
$carta .= "Mensaje: $mensaje \n";

// Enviando Mensaje
// mail($destinatario, $asunto, $carta);
// header('Location:/envio.html');

if ((mail($destinatario, $subject, $carta))){
    echo'<script type="text/javascript">
           alert("Enviado Correctamente :)");
        </script>';
} else {
    echo'<script type="text/javascript">
           alert("NO ENVIADO, intentar de nuevo :(");
        </script>';
}
?>