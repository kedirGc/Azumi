<?php

include("conexion.php");
$dni= $_REQUEST['dni'];
$nombre= $_POST['nombre'];
$apellido= $_POST['apellido'];
$edad= $_POST['edad'];
$cargo= $_POST['cargo'];
$email= $_POST['email'];


$query="UPDATE personal SET nombre='$nombre',apellido='$apellido',edad='$edad',cargo='$cargo',email='$email' WHERE dni='$dni' ";
/*PARA SAVER SI SE EJECUTO*/
$resultado= $conexion2->query($query);


if($resultado){
	header("location: tablapersonal.php");
}
else{
	echo "inserccion no exitosa";

}

 ?>
