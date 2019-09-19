<!DOCTYPE html>
<html>
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
    <title>Liliana!</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <!-- My CSS -->
    <!-- <link href="materialize/css/index.css" type="text/css" rel="stylesheet" media="screen,projection"/> -->
    <!-- <script src="materialize/js/jquery-2.1.1.min.js"></script> -->
    <script src="../materialize/js/materialize.min.js"></script>
    <link rel="stylesheet" href="../materialize/css/style.css">
    <style type="text/css">
  body {
    color: purple;
      background-image:url(../images/rosa.png);}
  </style>
<!-- #AB47BC -->
  <body>

    <?php
    		$dni=$_REQUEST['dni'];
    					include("conexion.php");
    					$query="SELECT * FROM personal WHERE dni='$dni'";
    					$resultado=$conexion2->query($query);
    					$row= $resultado->fetch_assoc() ;
    						# code...

    				 ?>
<!-- ************************************************* -->
<div id="login-page" class="row">
  <div class="col s12 z-depth-4 card-panel" style="width: 550px;" >

    <form class="col s12" action="modificar_personal.php?dni= <?php echo $row['dni']; ?>" method="POST">
      <div class="row">
    </div>

      <div class="row login"  >
        <h4 class="center" ><img src="../images/modificarpersonal.png" width="100%"></h4><br>
        <form class="col s12">

        <div class="input-field col s12">
          <i class="material-icons iconis prefix">credit_card</i>
          <input name="dni" placeholder="Nro De Dni"  type="text" class="validate" value="<?php echo $row['dni'] ;?>">
          <label for="first_name">Dni</label>
        </div>

        <div class="input-field col s5">
          <i class="material-icons iconis prefix">perm_identity</i>
          <input name="nombre" placeholder="nombres" type="text" class="validate" value="<?php echo $row['nombre'] ;?>">
          <label for="first_name">nombre</label>
        </div>
        <div class="input-field col s7">
          <i class="material-icons iconis prefix">people_outline</i>
          <input name="apellido" id="last_name" type="text" class="validate" value="<?php echo $row['apellido'] ;?>">
          <label for="last_name">apellido</label>
      </div>
      <div class="input-field col s5">
        <i class="material-icons iconis prefix">date_range</i>
        <input name="edad" placeholder="edad" id="first_name" type="number" class="validate" value="<?php echo $row['edad'] ;?>">
        <label for="first_name">edad</label>
      </div>
      <div class="input-field col s7">
        <i class="material-icons iconis prefix">card_travel</i>
        <input name="cargo" id="last_name" type="text" class="validate" value="<?php echo $row['cargo'] ;?>">
        <label for="last_name">cargo</label>
    </div>

        <div class="input-field col s12">
          <i class="material-icons iconis prefix">email</i>
          <input name="email" id="email" type="email" class="validate" value="<?php echo $row['email'] ;?>">
          <label for="email">Email</label>

      </div>
      <div class="row" >
        <div class="input-field col s12">
          <!-- <button type="submit" name="action" class="btn waves-effect waves-light col s12">Iniciar sesión!</button> -->
            <!-- <input type="submit" value="Log In"><br> -->
            <button  type="submit" value="Aceptar"  class="btn waves-effect purple lighten-1 col s12">Modificar Personal</button>

        </div>
      </div>
      </div>
        </form>
        </div>
    </form>
  </div>
>
<!-- ************************************************* -->




  </body>
</html>
