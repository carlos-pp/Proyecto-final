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
    Muy bien nuevos clientes <?php echo $usuario ?>!!
</div>


<div class="form">
	<h1>Agrega nuevos usuarios</h1>
	
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

<div class="all">
<a href="admin.php">Regresa</a>
</div>

</body>
</html>