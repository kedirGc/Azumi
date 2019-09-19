<?php
include("conexion.php");

$dni=$_REQUEST['dni'];



$query="DELETE FROM personal  WHERE dni='$dni' ";
/*PARA SAVER SI SE EJECUTO*/
$resultado= $conexion2->query($query);

if($resultado){
	header("location: tablapersonal.php");
}
else{
	echo "inserccion no exitosa";
}




 ?>
