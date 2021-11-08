<?php

function envia_Correo($destinatario, $asunto, $mensaje)
{
   ini_set('display_errors', 1);

   error_reporting(E_ALL);

   $cabecera = "From: pruebas@todoautopr.com";

   if (mail($destinatario, $asunto, $mensaje, $cabecera)) {

      return true;

   } else {

      return false;

   }

}

// ini_set('display_errors', 1);

// error_reporting(E_ALL);

// $from = "pruebas@todoautopr.com";

// $to = "caleman9791@gmail.com";

// $subject = "Checking PHP mail";

// $message = "PHP mail works just fine";

// $headers = "From:" . $from;

// if (mail($to, $subject, $message, $headers)) {

//    echo "The email message was sent.";

// } else {

//    echo "The email message was not sent.";

// }
