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
    ¡Hola!  <?php  echo $usuario    ?>


    
    </div>


<div class="contenedor">
	 <section class="portafolio">
     
        <div class="portafolio-container">
            <section class="portafolio-item">
                <img src="img/huawei.jpg" alt="" class="portafolio-img">
                <section class="portafolio-text">
                    <div class="boton">
         <input type="submit" name="enviar" value="Comprar">
         <a href="">Agregar al carrito</a>
         </div>
                    <h2>LAPTOP HUAWEI MATEBOOK D14</h2>
                    <p>Tamaño: 102mm x 239mm x 13,9 mm con los Joy-Con acoplados.</p>
                    <p>Peso: 297 g (398 g con los Joy-Con). </p>
                    <p>CPU/GPU:AMD RYZEN 53500U</p>
                    <p>8gb</p>
                    <p>Almacenamiento:+512gb </p>
                </section>
                <center>
                   
                <strike>$19,000</strike>
                <h1>Oferta! $12,000</h1>
                </center>
            </section>
            <section class="portafolio-item">
                <img src="img/pavilon.jpg" alt="" class="portafolio-img">
                <section class="portafolio-text">
                    <div class="boton">
         <input type="submit" name="enviar" value="Comprar">
         <a href="">Agregar al carrito</a>
         </div>
                    <h2>PAVILION 15</h2>
                    <p>Procesador principal: Procesador personalizado de un chip</p>
                    <p>CPU:AMD Ryzen 3</p>
                    <p>GPU: motor gráfico AMD de 1,84 TFLOPS basado en Radeon™</p>
                    <p>Memoria: 12GB </p>
                    <p>Capacidad de almacenamiento: 500 GB, 1 TB</p>
                </section>
                <center>
                    
                 <strike>$8,000</strike>
                <h1>Oferta! $6500</h1>
                </center>
            </section>
            <section class="portafolio-item">
                <img src="img/xbox.jpg" alt="" class="portafolio-img">
                <section class="portafolio-text">
                     <div class="boton">
         <input type="submit" name="enviar" value="Comprar">
         <a href="">Agregar al carrito</a>
         </div>
                    <h2>XBOX ONE</h2>
                    <p>CPU: AMD Jaguar x86-64 a 1,75 GHz (8 núcleos) </p>
                    <p>GPU: AMD Radeon personalizada 768 shaders @ 853 MHz. </p>
                    <p>Memoria RAM: 8 GB DDR3. </p>
                    <p>Memoria ESRAM: 32 MB.</p>
                    <p>Disco Duro: 500 GB.</p>
                </section>
                <center>
                   
               <strike>$6,800</strike>
                <h1>Oferta! $3,500</h1>
                </center>
            </section>
            
            
        </div>
    </section>
    <section class="portafolio">
        
        <div class="portafolio-container">
            <section class="portafolio-item">
                <img src="img/pro.jpg" alt="" class="portafolio-img">
                <section class="portafolio-text">
                     <div class="boton">
         <input type="submit" name="enviar" value="Comprar">
         <a href="">Agregar al carrito</a>
         </div>
                    <h2>MacBook pro</h2>
                    <p>Tamaño: 13" pulgadas</p>
                    <p>CPU/GPU: Procesador intel de 4 nucleos</p>
                    <p>Memoria: 4 GB de RAM. </p>
                    <p>Almacenamiento: 32GB.</p>
                </section>
                <center>
                   
               <strike>$20,000</strike>
                <h1>Oferta! $10500</h1>
                </center>
            </section>
            
        </div>

</body>
</html>