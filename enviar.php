<?php

	$destino= "castillolopez735@gmail.com";
	$nombre = $_POST["name"];
	$correo = $_POST["email"];
	$sujeto = $_POST["subject"];
	$mensaje = $_POST["message"];

	$contenido = "Nombre".$nombre."\nEmail".$correo."\nSujeto".$sujeto."Mensaje".$mensaje;

	echo $contenido

	mail($destino,"Contacto",$contenido);
	header("Location:index.html");

?>
