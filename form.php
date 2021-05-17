<?php

	function filtrado($datos){
		$datos = trim($datos); 
		$datos = stripslashes($datos);
		$datos = htmlspecialchars($datos);
		return $datos;
	}

	$nombre = filtrado($_POST["nombre"]);
	$apellido = filtrado($_POST["apellido"]);
	$telefono = filtrado($_POST["telefono"]);
	$correo = filtrado($_POST["correo"]);

	$titulo = "Mail enviado desde PHP";
	$mensaje = "Informacion de contacto: \r\nNombre: ".$nombre."\r\nApellido: ".$apellido."\r\nTelefono: ".$telefono."\r\nCorreo: ".$correo."\r\n-Mail enviado desde codigo PHP\r\n-Hans Marcelo Olivas Martinez";
	$mensaje = wordwrap($mensaje, 70, "\r\n");
	
	if(empty($nombre) || empty($apellido) || empty($telefono) || empty($correo)) {
		?>
		<!DOCTYPE html>
		<html lang="en">
		<head>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title>Formulario</title>
			<link rel="preconnect" href="https://fonts.gstatic.com">
			<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
			<link rel="stylesheet" href="./styles/styles.css">
		</head>
		<body>

			<div class="introComponent__wrapper">

				<header class="main__header">
					<h1 class="header__title">Bienvenidos al formulario de la I.E. "Nuevo Mundo"</h1>		
				</header>

			<div class="mainSuccess mainForm--format">

				<h2 class="mainSuccess__title"> Los campos del formulario estan vacios </h2>
				<img src="./images/incorrect.svg" alt="incorrect" class="icon__incorrect">
				<a href="index.html" class="back__button">Volver</a>

			</div>

			</div>
			

		</body>
		</html>

		<?php

	}else {

		mail('schoque@senati.pe', $titulo, $mensaje);

		?>
		<!DOCTYPE html>
		<html lang="en">
		<head>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title>Formulario</title>
			<link rel="preconnect" href="https://fonts.gstatic.com">
			<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
			<link rel="stylesheet" href="./styles/styles.css">
		</head>
		<body>

			<div class="introComponent__wrapper">

				<header class="main__header">
					<h1 class="header__title">Bienvenidos al formulario de la I.E. "Nuevo Mundo"</h1>		
				</header>

			<div class="mainSuccess mainForm--format">

				<h2 class="mainSuccess__title"> Formulario Enviado Correctamente </h2>
				<img src="./images/check.svg" alt="check" class="icon__check">
				<a href="index.html" class="back__button">Volver</a>

			</div>

			</div>
			

		</body>
		</html>

		<?php
	}

?>
