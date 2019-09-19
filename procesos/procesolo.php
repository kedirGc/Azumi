<?php


session_start();

$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];

include("conexion.php");
$proceso = $conexion2->query ("SELECT * FROM login WHERE usuario='$usuario' AND contrasena='$contrasena' ");

	if($resultado = mysqli_fetch_array($proceso)){
		$_SESSION['u_usuario']=$usuario;
		header("Location: ../opciones.html");

	}
	else{
		 header("Location: ../index.html");

	}

 ?>
