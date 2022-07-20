<?php  

// Llamando a los campos
$nombre = $_POST['name'];
$correo = $_POST['email'];
$subject = $_POST['subject'];
$mensaje = $_POST['message'];
$telefono = $_POST['number'];


// Datos para el correo
$destinatario = "marlonmuchin01@gmail.com";
$asunto = "Contacto desde Portafolio";

$carta = "De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "Telefono: $telefono \n";
$carta .= "Mensaje: $mensaje";

// Enviando Mensaje
// mail($destinatario, $asunto, $carta);
// header('Location:/envio.html');

if ((mail($destinatario, $asunto, $carta))){
    echo'<script type="text/javascript">
           alert("Enviado Correctamente");
        </script>';
} else {
    echo'<script type="text/javascript">
           alert("NO ENVIADO, intentar de nuevo");
        </script>';
}
?>