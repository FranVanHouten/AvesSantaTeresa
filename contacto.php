<?php 

    $aves = 'franciscasalinascastillo@gmail.com'; // Correo para respuestas
    $cliente = $_POST['email']; // Correo del cliente
    $nombre = $_POST['nombre'];
    $asunto = $_POST['asunto'];
    $asunto_respuesta = 'Hemos recibido tu mensaje';
    $mensaje = $nombre . ' envió el siguiente mensaje:' . "<br><br>" . $_POST['mensaje'];
    $mensaje_respuesta = 'Gracias ' . $nombre . ' por contactarte con nosotros. Hemos recibido tu mensaje y te responderemos a la brevedad.' . "<br><br>" . 'Saludos cordiales,' . "<br>" . 'Aves Santa Teresa';

    $headers =  'MIME-Version: 1.0' . "\r\n"; 
    $headers .= 'From: ' . $cliente . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
    //$headers = "Desde:" . $cliente;
    $headers_respuesta =  'MIME-Version: 1.0' . "\r\n"; 
    $headers_respuesta .= 'From: ' . $aves . "\r\n";
    $headers_respuesta .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    //$headers_respuesta = "Desde:" . $aves;
    mail($aves,$asunto,$mensaje,$headers);
    mail($cliente,$asunto_respuesta,$mensaje_respuesta,$headers_respuesta); // Envía la respuesta al cliente
    header ("Location:index.php");
?>