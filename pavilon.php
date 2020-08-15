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
       <img src="img/pavilon.jpg"> 
       <h2>PAVILION 15</h2>
                    <p>Procesador principal: Procesador personalizado de un chip</p>
                    <p>CPU:AMD Ryzen 3</p>
                    <p>GPU: motor gráfico AMD de 1,84 TFLOPS basado en Radeon™</p>
                    <p>Memoria: 12GB </p>
                    <p>Capacidad de almacenamiento: 500 GB, 1 TB</p>
     <div class="boton">
         <button onclick="location.href='pago.php'">Comprar</button>
         <a href="">Detalle de venta</a>
         </div>
    </div>
    

</body>
</html>