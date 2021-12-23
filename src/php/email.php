<?php

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

$headers = "From: $nombre <$email>\r\n";

$message = "Mensaje: " .$_POST['mensaje'];
$message .= "Este mensaje fue enviado por: " . $nombre . " - " . $email;
$message .= "Enviado el: " . date('d/m/Y', time());
$to = 'thekingstondj@gmail.com';
$subject = 'Test email';

//send email
function send_email($to, $subject, $message, $headers) {
    if (mail($to, $subject, $message, $headers)) {
        return true;
    } else {
        return false;
    }
}
header("Location: ../index.html");
?>