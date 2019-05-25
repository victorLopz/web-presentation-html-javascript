<?php

	$destino= "castillolopez735@gmail.com"
	$nombre = $POST["name"];
	$correo = $POST["email"];
	$sujeto = $POST["subject"];
	$mensaje = $POST["message"];

	$contenido = "Nombre".$nombre."\nEmail".$correo."\nSujeto".$sujeto."Mensaje".$mensaje;

	main($destino,"Contacto",$contenido);
	header("Location:index.html");

?>
