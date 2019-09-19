<?php

include("conexion.php");
$dni= $_POST['dni'];
$nombre= $_POST['nombre'];
$apellido= $_POST['apellido'];
$edad= $_POST['edad'];
$cargo= $_POST['cargo'];
$email= $_POST['email'];



$query="INSERT INTO personal(dni,nombre,apellido,edad,cargo,email) VALUES('$dni','$nombre','$apellido','$edad','$cargo','$email') ";
/*PARA SAVER SI SE EJECUTO*/
$resultado= $conexion2->query($query);


if($resultado){
	header("location: tablapersonal.php");
}
else{
	echo "inserccion no exitosa";

}

 ?>
