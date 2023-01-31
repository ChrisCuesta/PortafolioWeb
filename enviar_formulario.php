<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nombre = $_POST['nombre'];
  $email = $_POST['email'];
  $mensaje = $_POST['mensaje'];

  $para = "chriscuesta02@hotmail.com";
  $asunto = "Mensaje desde el formulario de contacto";
  $mensaje_completo = "De: " . $nombre . "\n";
  $mensaje_completo .= "Correo electronico: " . $email . "\n";
  $mensaje_completo .= "Mensaje: " . $mensaje;

  mail($para, $asunto, $mensaje_completo);

  header('Location: http://christiancuesta.x10.mx/');
  exit;
}

?>

