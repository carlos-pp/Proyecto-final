<?php
require_once "pdo/conexion.php";
?>
<?php 
session_start();
$usuario = $_SESSION['username'];
if (!isset($usuario )){
    header ('location: sesion.php');
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    
    <link rel="stylesheet" href="css/sesion.css">
    <link rel="stylesheet" href="css/admin.css">
      <link rel="stylesheet" href="css/estilos.css">
    <title></title>
</head>
<body>

<header>
        <nav>
            <ul class="menu">
             
                
                    <li><a href="vista.php">Detalles de producto</a></li>
                <li><a href="vistausuario.php">Detalles de usuarios</a></li>
                <li><a href="aproductos.php">Agregar productos</a></li>
                <li><a href="agregarusuarios.php">agregar usuarios</a></li>
                <li><a href="logica/salir.php">Cerrar sesiòn</a></li>
                
            </ul>
            <div class="search_bar">
                <a href="#" class="icon-search"></a>
                <input type="text" id="bar">
            </div>
        </nav>
    </header>
    <script src="busqueda.js"></script>  

  <div class="hola">
   Tenemos nuevos productos <?php echo $usuario ?> ??
</div>

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
<br>
<br>

	</form>
	</div>
	<div class="all">
<a href="admin.php">Regresa</a>
</div>

	<?php 
	if(isset($_POST['nombres']) && isset($_POST['precios']) && isset($_POST['existencias'])){
			require_once "pdo/conexion.php";
			require_once "procesos/guardar-producto.php";
	}

	?>

	

</body>
</html>