<?php

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$message = $_POST['mensaje'];

$header = "From: $nombre <$email>\r\n";
$header = "X-Mailer: PHP/" . phpversion() . "\r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Mensaje: " .$_POST['mensaje'];
$message .= "Este mensaje fue enviado por: " . $nombre . " - " . $email;
$message .= "Enviado el: " . date('d/m/Y', time());

$to = 'thekingstondj@gmail.com';
$subject = 'Test email';

mail($to, $subject, utf8_decode($message), $header);
header("Location:index.html");
?>