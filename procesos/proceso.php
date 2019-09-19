<?php 

 
session_start();

$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];

include("conexion.php");
$proceso = $conexion2->query ("SELECT * FROM usuarios WHERE usuario='$usuario' AND contrasena='$contrasena' ");
	
	if($resultado = mysqli_fetch_array($proceso)){
		$_SESSION['u_usuario']=$usuario;
		header("Location: logeo/sesion.php");
		
	}
	else{
		 header("Location: jndex.php");
	
	}

 ?> 