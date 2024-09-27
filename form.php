<?php
//Conexion de mi form con el server atravez de los nombres
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$telefono = $_POST["telefono"];
$fecha = $_POST["fecha"];
$personas = $_POST["personas"];
$destinatario = "Cenote_17@hotmail.com";
$asunto = "Este mensaje fue enviado desde la web Chen Ha";

//Como visualizo el mensaje recibido
$mensaje = "Nombre del cliente: ".$nombre.",\r\n";
$mensaje .= "Email: ".$email.",\r\n";
$mensaje .= "telefono: ".$telefono.",\r\n";
$mensaje .= "Desea una reservacion para la fecha: ".$fecha.",\r\n";
$mensaje .= "Con un numero de personas: ".$personas.",\r\n";

//Contenido del mail
mail($destinatario, $asunto, utf8_decode($mensaje) ,$header);

//redireccion al haber enviado el mail
header("Location:exit.html");