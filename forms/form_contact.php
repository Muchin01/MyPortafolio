<?php

// Llamando a los campos
$nombre = $_POST['Nombre'];
$correo = $_POST['Email'];
$subject = $_POST['Asunto'];
$mensaje = $_POST['Descripción'];
$telefono = $_POST['Telefono'];


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


if ((mail($destinatario, $subject, $carta))) {
    echo '<script type="text/javascript">
           alert("Enviado Correctamente :)");
        </script>';
    header('Location:/index.html');
} else {
    echo '<script type="text/javascript">
           alert("NO ENVIADO, intentar de nuevo :(");
        </script>';
    header('Location:/index.html');
}




// pruebas ...
// if((mail($destinatario, $subject, $carta))){
// $result="Algo esta mal, por favor inténtelo de nuevo.";
// }
// else{
// $result="Gracias ".$_POST['nombre']." por contactarnos, espera la respuesta!";
// header("Location:index.html");
// }

?>