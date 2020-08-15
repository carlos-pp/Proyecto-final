<?php
require '../pdo/conexion.php';
session_start ();
 $usuario =$_POST['nom'];
  $clave =$_POST['con'];
  $q = "SELECT COUNT(*) as contar from usuario where nombre ='$usuario' AND contrasena = '$clave'";
  $consulta = mysqli_query ($conect,$q);
  $array = mysqli_fetch_array($consulta);

  if($array['contar']>0){
    $_SESSION['username']= $usuario;
    header("location: ../login.php");
  }else {
    echo"Datos incorrectos";
  }
  ?>

