<?php
    $email=filter_var($_POST['email']);
    $nombre = filter_var($_POST['nombre']);
    $mensaje = filter_var($_POST['mensaje']);
    $asunto = filter_var($_POST['asunto']);

    $destinatario = "leonardomartinezmazza@gmail.com";
    $cuerpo = '  <head>
    <title>Alfredo Marcenac - Asosiación Civil</title>
  </head>
  <body>
   <p>
    Contacto: '.$nombre. ' - '.$asunto.' <br>

    Mensaje: '.$mensaje.'
   </p>
  </body>
</html>
    ';
  $headers ="MIME-Version: 1.0 \r\n ";
  $headers .="Content-type: text/html; charset=iso-8859-1\r\n";
  $headers .="From: ".$email."\r\n";
?>