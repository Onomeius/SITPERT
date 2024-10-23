<?php
if (isset($_POST['enviar'])) {
    $cuerpo = '
        <!DOCTYPE html>
        <html>
        <head>
         <title></title>
        </head>
        <body>
        ' . $_POST['cuerpo'] . '
        </body>
        </html>';

    //para el envío en formato HTML
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

    //dirección del remitente
    $headers .= "From: " . $_POST['nombre'] . " <" . $_POST['emisor'] . ">\r\n";

    //Una Dirección de respuesta, si queremos que sea distinta que la del remitente
    $headers .= "Reply-To: " . $_POST['emisor'] . "\r\n";

    //Direcciones que recibián copia
    //$headers .= "Cc: ejemplo2@gmail.com\r\n";

    //direcciones que recibirán copia oculta
    //$headers .= "Bcc: ejemplo3@yahoo.com\r\n";
    if (mail($_POST['receptor'], $_POST['asunto'], $cuerpo, $headers)) {
        echo "<script>alert('Funcion \"mail()\" ejecutada, por favor verifique su bandeja de correo.');</script>";
    } else {
        echo "<script>alert('No se pudo enviar el mail, por favor verifique su configuracion de correo SMTP saliente.');</script>";
    }
}
header('Location:mensaje-de-envio.html');

?>