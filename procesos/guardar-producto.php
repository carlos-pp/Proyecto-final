<?php 
$nombre1=$_POST['nombres'];
$precio=$_POST['precios'];
$existencia=$_POST['existencias'];


$consulta=$conect->prepare("INSERT INTO productos(nombre,existencia,precio) VALUES(?,?,?)");


$consulta->bind_param('sii',$nombre1,$existencia,$precio );


if($consulta->execute()) {
	echo "Datos almacenados";
}else{
	echo "Error no se pudo almacenar los datos";
}

?>