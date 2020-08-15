<?php 
$nombre=$_POST['nombre'];
$correo=$_POST['apellido'];
$correo=$_POST['area'];
$contrasena=$_POST['contrasena'];


$consulta=$conect->prepare("INSERT INTO usuario(nombre,apellido, area, contrasena) VALUES(?,?,?,?)");

$consulta->bind_param('ssss',$nombre,$apellido,$area,$contrasena);

if($consulta->execute()){
	echo "Datos almacenados";
}else{
	echo "Error no se pudo almacenar los datos";
}

?>