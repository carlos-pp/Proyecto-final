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
    Revicemos el stock <?php echo $usuario ?>
</div>

<div class="tabla">
	<br>
	<br>
	<h1>Aquì podràs visualizar los detalles de el producto.</h1>
	<br>
	<br>
	<table border="1">
	<tr>
		<td>id</td>
		<td>Nombre</td>
		<td>Precio</td>
		<td>Existencia</td>
	</tr>

		<?php 
		$sql="SELECT * FROM productos"; //mostrar todos los datos.
		//$sql="DELETE FROM usuario WHERE contrasena='chimino' AND id='7'";
		$result=mysqli_query($conect,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		?>
		
		<tr>
		<td><?php echo $mostrar['id_producto'] ?></td>
		<td><?php echo $mostrar['nombre'] ?></td>
		<td><?php echo $mostrar['precio'] ?></td>
		<td><?php echo $mostrar['existencia'] ?></td>
		</tr>
		
		<?php
		}
		?>
</table>
<br>
<br>
<a href="producto.php">Agregar productos</a>
<br>
<br>
<div class="all">
<a href="admin.php">Regresa</a>
</div>


</div>

</body>
</html>