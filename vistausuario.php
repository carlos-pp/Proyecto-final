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
      <link rel="stylesheet" href="css/estilos.css">
      <link rel="stylesheet" href="css/admin.css">
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

  Revisemos los usuarios <?php echo $usuario ?>
</div>
	<div class="tabla">

	<table border="1">
	<tr>
		<td>id</td>
		<td>Nombre</td>
		<td>apellido</td>
		<td>Contraseña</td>
		
	</tr>

		<?php 
		$sql="SELECT * FROM usuario"; //mostrar todos los datos.
		//$sql="DELETE FROM usuario WHERE contrasena='chimino' AND id='7'";
		$result=mysqli_query($conect,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		?>
		
		<tr>
		<td><?php echo $mostrar['id'] ?></td>
		<td><?php echo $mostrar['nombre'] ?></td>
		<td><?php echo $mostrar['apellido'] ?></td>
		<td><?php echo $mostrar['contrasena'] ?></td>
		</tr>
		
		<?php
		}
		?>
	</table>
	</div>
	<br>
<br>
<div class="all">
<a href="admin.php">Regresa</a>
</div>

</body>
</html>