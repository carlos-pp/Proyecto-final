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
    ¿que haremos hoy?<?php echo $usuario ?>
</div>


</body>
</html>