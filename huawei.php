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
	<link rel="stylesheet" href="css/estilos.css">
    <script src="https://kit.fontawesome.com/a7d3eb3bc4.js" crossorigin="anonymous"></script>
	<title></title>
</head>
<body>

	<header>
	     <nav>
	        <ul class="menu">
                <li><a href="Ofertas.php">Ofertas</a></li>
                <li><a href="login.php">Producto</a></li>
                <li><a href="compras.php">Compras</a></li>
                <li><a href="logica/salir.php">Cerrar sesiòn</a></li>
                
            </ul>

            <div class="search_bar">
                <a href="#" class="icon-search"></a>

                <input type="text" id="bar">
            </div>
        </nav>
    </header>
    <script src="busqueda.js"></script>

    <div class="user">
        ¡Hola! <?php  echo $usuario ?>
    </div>
    <div class="compra">
       <img src="img/huawei.jpg"> 
       <h2>LAPTOP HUAWEI MATEBOOK D14</h2>
                    <p>Tamaño: 102mm x 239mm x 13,9 mm con los Joy-Con acoplados.</p>
                    <p>Peso: 297 g (398 g con los Joy-Con). </p>
                    <p>CPU/GPU:AMD RYZEN 53500U</p>
                    <p>8gb</p>
                    <p>Almacenamiento:+512gb </p>
     <div class="boton">
         <button onclick="location.href='pago.php'">Comprar</button>
         <a href="">Detalle de venta</a>
         </div>
    </div>
    

</body>
</html>