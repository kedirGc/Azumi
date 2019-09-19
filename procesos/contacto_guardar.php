<?php

include("conexion.php");

$nombre= $_POST['nombre'];
$email= $_POST['email'];
$asunto= $_POST['asunto'];
$mensaje= $_POST['mensaje'];


$query="INSERT INTO contacto(nombre,email,asunto,mensaje) VALUES('$nombre','$email','$asunto','$mensaje') ";
/*PARA SAVER SI SE EJECUTO*/
$resultado= $conexion2->query($query);


if($resultado){
	header("location: tabla_contacto.php");
}
else{
	echo "inserccion no exitosa";

}

 ?>
