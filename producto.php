<!DOCTYPE html>
<html lang="es">
<head>
	<link rel="stylesheet" href="css/estilos.css">
	<script src="https://kit.fontawesome.com/a7d3eb3bc4.js" crossorigin="anonymous"></script>
	<meta charset="utf-8">
	<title>FORMULARIO</title>
</head>
<body>
	</head>
<body>
	<header>
		<nav>
			<ul class="menu">
				
				<li><a href="vista.php">Vista producto</a></li>
				<li><a href="producto.php">Producto</a></li>
				<li><a href="index.php">Registrate</a></li>
				
			</ul>
			<div class="search_bar">
				<a href="#" class="icon-search"></a>
				<input type="text" id="bar">
			</div>
		</nav>
	</header>
	<script src="busqueda.js"></script>
	<div class="form">

	<form action="" method="POST">
		<h1>Ingresa los datos de el producto aquì.</h1>
		 
		 
		<br></br>
		 <input type="text" name="nombres" placeholder="Nombre de producto" required="">
			<br></br>
		 <input type="text" name="precios" placeholder="Precio"  required="">
			<br></br>
		 <input type="text" name="existencias" placeholder="Existencia"  required="">
			<br></br>
			<div class="boton">
		 <input type="submit" name="enviar" value="Enviar datos">
		 </div>
		 <br></br>
<a href="vista.php">Vista de productos</a>
	</form>
	</div>

	<?php 
	if(isset($_POST['nombres']) && isset($_POST['precios']) && isset($_POST['existencias'])){
			require_once "pdo/conexion.php";
			require_once "procesos/guardar-producto.php";
	}

	?>

	

</body>
</html>