<?php


////CAMPOS DEL FORMULARIO
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$descripcion_contacto = $_POST['descripcion_contacto'];


///CORREO DESTINATARIO
$destinatario = "frestrepo@codigodigital.co";
$asunto = "Solicitud de contacto";


////INFROMACION DEL CLIENTE 
$informacion = "De: $nombre \n";
$informacion .= "Telefono: $telefono \n";
$informacion .= "Email: $email \n";
$informacion .= "Mensaje: $descripcion_contacto \n";

///ENVIADO MENSAJE
mail($destinatario, $asunto, $informacion);
header('Location:../envioexitoso.html');
//echo "<script>alert('Correo enviado exitosamente')</script>";
//echo "<script> setTimeout(\"location.href='index.html'\",3000)</script>";

?>