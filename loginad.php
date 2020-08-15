<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    
    <link rel="stylesheet" href="css/sesion.css">
      <link rel="stylesheet" href="css/estilos.css">
    <title></title>
</head>
<body>
    <?php
if (isset($errorlogin)){
    echo $errorlogin;
}
?>
    <div class="inicio">
        <h1> Bienvenido administrador </h1>
        <br>
        <h2>Inicia sesión!!</h2>
        <br>
        <form action="logica/admin.php" method="post">

    <input type="text" name="nom"   placeholder="Nombre">
    <br></br>
          <input type="text" name="are"   placeholder="area">
             <br></br>
            <input type="password" name="con"  placeholder="Contraseña">

             <br>
             <br>

             <div class="boton"> 
        <input type="submit" name="enviar" value="Inicia sesiòn">
        <br>
        <br>
        <a href="index.php">Volver</a>
        
        </div>
        <br>
        </form>
</div>
</body>
</html>