<?php

if(isset($_POST['submit'])) {
  $to = "chriscuesta02@hotmail.com";
  $subject = "Mensaje desde Portafolio";

  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $email_body = "Nombre: $name\n";
  $email_body .= "Correo Electrónico: $email\n";
  $email_body .= "Mensaje:\n$message\n";

  $headers = "From: $name <$email>";

  mail($to, $subject, $email_body, $headers);

  header("Location: index.html");
}

?>
