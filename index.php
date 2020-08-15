<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<script src="https://kit.fontawesome.com/a7d3eb3bc4.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="css/estilos.css">
	<title>FORMULARIO</title>
</head>
<body>
	<header>
		<nav>
			<ul class="menu">
				
				<li><a href="iniciada.php">Inicio</a></li>
				<li><a href="index.php">Registrate</a></li>
				<li><a href="contacto.php">Contactanos</a></li>
				<li><a href="sesion.php">Inicia sesiòn</a></li>
				
			</ul>
			<div class="search_bar">
				<a href="#" class="icon-search"></a>
				<input type="text" id="bar">
			</div>
		</nav>
	</header>
	<script src="busqueda.js"></script>

<div class="form">
	<h1>¿No tienes usuario aun?</h1>
	<h2>¡Registrate¡</h2>
	<br>
	<br>
	<form action="" method="POST">
		 
		 <input type="text" name="nombre" placeholder="Nombre" required="">
			<br>
			<br>
			<input type="text" name="apellido" placeholder="apellido"  required="">
			<br><br>

			<input type="text" name="area" placeholder="area"  required="">

			<br>
			<br>
		 <input type="password" name="contrasena" placeholder="Contraseña"  required="">
			<br>
			<br>
		 
			<div class="boton">
		 <input type="submit" name="enviar" value="Enviar datos">
		 </div>

	</form>

	<?php 
	if(isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['area']) && isset($_POST['contrasena'])){
			require_once "pdo/conexion.php";
			require_once "procesos/guardar.php";
	}

	?>
	

</body>
</html>