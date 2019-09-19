
<html>
<head>
	<head>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link href="../materialize/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
			<link href="../materialize/css/index.css" type="text/css" rel="stylesheet" media="screen,projection"/>
			<link type="text/css" rel="stylesheet" href="../materialize/css/materialize.min.css"  media="screen,projection"/>

			<link rel="stylesheet" href="images/font-awesome-4.3.0/css /font-awesome.min.css">

		<script src="../jquery.min.js"></script><meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta http-equiv="x-ua-compatible" content="ie=edge">
	    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	    <meta name="description" content="">
	    <meta name="author" content="">
	    <link rel="icon" href="https://cdn3.iconfinder.com/data/icons/happily-colored-snlogo/128/medium.png">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	    <title>liliana!</title>

	    <!-- Bootstrap CSS -->
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
	    <!-- My CSS -->
	    <!-- <link href="materialize/css/index.css" type="text/css" rel="stylesheet" media="screen,projection"/> -->
	    <!-- <script src="materialize/js/jquery-2.1.1.min.js"></script> -->
	    <script src="materialize/js/materialize.min.js"></script>
	    <link rel="stylesheet" href="materialize/css/style.css">
	    <style type="text/css">
	  body {
	    color: purple;
	      background-image:url(images/rosa.png);}
	  </style>
</head>
<body>

	<!-- Modal Trigger -->
<a class="waves-effect waves-light btn modal-trigger" href="#modal1">Modal</a>

<!-- Modal Structure -->
<div id="modal1" class="modal" style="width: 450px; height:550px;">
<div class="modal-content"   >
	<div class="container">
	  <div class="row">
	    <form class="col s12" action="personal_guardar.php" method="POST">
	      <div class="row">

	        <div class="input-field col s12">
	          <input name="dni" placeholder="Nro De Dni" id="first_name" type="text" class="validate">
	          <label for="first_name">Dni</label>
	        </div>
	        <div class="input-field col s6">
	          <input name="nombre" placeholder="nombres" id="first_name" type="text" class="validate">
	          <label for="first_name">nombre</label>
	        </div>
	        <div class="input-field col s6">
	          <input name="apellido" id="last_name" type="text" class="validate">
	          <label for="last_name">apellido</label>
	      </div>
	      <div class="input-field col s4">
	        <input name="edad" placeholder="edad" id="first_name" type="number" class="validate">
	        <label for="first_name">edad</label>
	      </div>
	      <div class="input-field col s8">
	        <input name="cargo" id="last_name" type="text" class="validate">
	        <label for="last_name">cargo</label>
	    </div>
	        <div class="input-field col s12">
	          <input name="email" id="email" type="email" class="validate">
	          <label for="email">Email</label>
	      </div>
	      <div>

	        <button href="#!" type="submit" value="Aceptar" class="waves-effect waves-light btn purple lighten-1">Registrar personal</button>

	        <!-- <a class="waves-effect waves-light btn purple lighten-1">Enviar Mensaje<i class="mdi-content-send right"></i></a> -->
	      </div>
	      </div>
	    </form>
	  </div>
	</div>
</div>
</div>
<div class="container" >
	<center>
			<table border="3" class="striped" >
		<!-- cabesera de una table	 -->
			<thead>

			<tr>

				<th colspan="1"><a href="formulariopersonal.php">Nuevo</a></th>
					<th colspan="5">Lista De personal</th>
						<th colspan="2"><a href="../opciones.html">volver a Opciones</a></th>
			</tr>
			</thead>

				<tr>
					<td><b>Dni</b></td>
					<td><b>Nombres</b></td>
					<td><b>Apellidos</b></td>
					<td><b>Edad</b></td>
					<td><b>cargo</b></td>
					<td><b>Email</b></td>
					<td colspan="4"><b>Operaciones</b></td>



				</tr>
				<?php
					include("conexion.php");
					$query="SELECT * FROM personal";
					$resultado=$conexion2->query($query);
					while ($row= $resultado->fetch_assoc()) {
						# code...

				 ?>
					<tr>
						<td><?php echo $row['dni'];?></td>
						<td><?php echo $row['nombre'];?></td>
						<td><?php echo $row['apellido'];?></td>
						<td><?php echo $row['edad'];?></td>
						<td><?php echo $row['cargo'];?></td>
						<td><?php echo $row['email'];?></td>
						<td><a href="modificarTabla_personal.php?dni= <?php echo $row['dni']; ?>">Modificar</a></td>
						<td><a href="eliminar_personal.php?dni= <?php echo $row['dni']; ?>">Eliminar</a></td>
					</tr>

					<?php
						}
					?>


			</table>

		</center>
</div>

</body>
<script src="../materialize/js/materialize.js"></script>
  <script src="../materialize/js/materialize.min.js"></script>
<script src="../materialize/js/funciones.js"></script>
<script src="../js/jquery-2.1.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
$('.modal').modal();
});
</script>

</html>
