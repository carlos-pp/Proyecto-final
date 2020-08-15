<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    
    <link rel="stylesheet" href="css/sesion.css">
      <link rel="stylesheet" href="css/estilos.css">
    <title></title>
</head>
<body>

<header>
        <nav>
            <ul class="menu">
             
                
                    <li><a href="iniciada.php">Inicio</a></li>
                <li><a href="index.php">Registrate</a></li>
                <li><a href="contacto.php">Contactanos</a></li>
                <li><a href="sesion.php">Inicia sesion</a></li>
                
            </ul>
            <div class="search_bar">
                <a href="#" class="icon-search"></a>
                <input type="text" id="bar">
            </div>
        </nav>
    </header>
    <script src="busqueda.js"></script>



    <?php
if (isset($errorlogin)){
    echo $errorlogin;
}
?>
    <div class="inicio">
        <h1> ¿Ya tienes una? </h1>
        <br>
        <h2>Inicia sesión!!</h2>
        <br>
        <form action="logica/logear.php" method="post">

    <input type="text" name="nom"   placeholder="Email">
          
             <br></br>
            <input type="password" name="con"  placeholder="Contraseña">

             <br>
             <br>

             <div class="boton"> 
        <input type="submit" name="enviar" value="Inicia sesiòn">
        <br>
        <br>
        <a href="#">¿Olvidaste tu contraseña?</a>
<br>
<br>
        <a href="loginad.php">Eres administrador?</a>
        </div>
        <br>
        </form>

</body>
</html>