<?php
/*
     Recopilo los datos vía POST
     Con strip_tags suprimo etiquetas HTML y php para evitar una posible inyección.
     Como no gestiona base de datos no es necesario limpiar de inyección SQL.
 */
$nombre=strip_tags($_POST['name']);
$telefono=strip_tags($_POST['phone']);
$correo=strip_tags($_POST['mail']);
$comentario=strip_tags($_POST['comment']);
$fecha=time();
$fechaFormateada=date("j/n/Y",$fecha);
$textoEmisor="MIME-VERSION: 1.0\r\n";
$textoEmisor.="Content-type: text/html; charset=UTF-8\r\n";
$textoEmisor.="From: luisrecio.es";
//Correo de destino; donde se enviará el correo.
$correoDestino="recluising@gmail.com";
//Formateo el asunto del correo
$asunto="Contacto WEB_$nombre;";
//Formateo el cuerpo del correo
$cuerpo="<b>Enviado por:</b> ".$nombre.", a las ".$fechaFormateada."<br />";
$cuerpo.="<b>Teléfono de contacto: </b>".$telefono."<br />";
$cuerpo.="<b>E-mail:</b> ".$correo."<br />";
$cuerpo.="<b>Comentario:</b> ".$comentario;
// Envío el mensaje
mail($correoDestino,$asunto,$cuerpo,$textoEmisor);
?>