<?php
require_once "pdo/conexion.php";
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
        ¡Hola!

    <?php 
        $sql="SELECT  * FROM usuario"; //mostrar todos los datos.
        //$sql="DELETE FROM usuario WHERE contrasena='chimino' AND id='7'";
        $result=mysqli_query($conect,$sql);

        while($mostrar=mysqli_fetch_array($result)){
        ?>
        
        <tr>
        
        <td><?php echo $mostrar['nombre'] ?></td>
        
        </tr>
        
        <?php
        }
        ?>
    </div>

    <div class="method">
        
        <div class="form">
    <h1>Ingresa tu methodo de pago</h1>
    <h2>¡Realiza tu compra¡</h2>
    <br>
    <br>
    <form action="" method="POST">
         
         <input type="text" name="nombre" placeholder="Nùmero de tarjeta" required="">
            <br>
            <br>
            <input type="text" name="apellido" placeholder="Cliente"  required="">

            <br>
            <br>
         <input type="password" name="contrasena" placeholder="Ingresa tu cvv" min="1" maxlength="3"  required="">
            <br>
            <br>
         
            <div class="boton">
          <button onclick="location.href='compras.php'">¡COMPRAR YA!</button>
         </div>

    </form>

    </div>
    <div class="boton">
          <button onclick="location.href='login.php'">Volver :(</button>
         </div>
</div>
</body>
</html>