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
       <img src="img/xbox.jpg"> 
       <h2>XBOX ONE</h2>
                    <p>CPU: AMD Jaguar x86-64 a 1,75 GHz (8 núcleos) </p>
                    <p>GPU: AMD Radeon personalizada 768 shaders @ 853 MHz. </p>
                    <p>Memoria RAM: 8 GB DDR3. </p>
                    <p>Memoria ESRAM: 32 MB.</p>
                    <p>Disco Duro: 500 GB.</p>
     <div class="boton">
         <button onclick="location.href='pago.php'">Comprar</button>
         <a href="">Detalle de venta</a>
         </div>
    </div>
    

</body>
</html>