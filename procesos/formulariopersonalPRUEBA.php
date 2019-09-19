<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>MaterializeCSS - Ejemplo</title>
    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="../materialize/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
      <link href="../materialize/css/index.css" type="text/css" rel="stylesheet" media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="../materialize/css/materialize.min.css"  media="screen,projection"/>

      <link rel="stylesheet" href="../images/font-awesome-4.3.0/css /font-awesome.min.css">

    <script src="../jquery.min.js"></script>
  </head>
  <body>

<p><p></p></p>
<div class="container">
  <div class="row">

    <div id="login-page" class="row">
      <div class="col s12 z-depth-4 card-panel"  >


<div class="row login" >
    <form class="col s12" action="personal_guardar.php" method="POST">
      <div class="row">
    <h4 class="center" ><img src="../images/registropersonal.png" width="80%"></h4><br>

        <div class="input-field col m12 s12">
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
        <button  type="submit" value="Aceptar" class="waves-effect waves-light btn purple lighten-1">Registrar personal</button>

        <!-- <a class="waves-effect waves-light btn purple lighten-1">Enviar Mensaje<i class="mdi-content-send right"></i></a> -->
      </div>
      </div>


    </form>
      </div>
  </div>
</div>

  </div>
</div>







  </body>
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
 <script type="../text/javascript" src="../js/materialize.min.js"></script>
 <script src="../js/materialize.js"></script>
 <script type="text/javascript" script-name="bonbon" src="http://use.edgefonts.net/bonbon.js"></script>
 <script type="text/javascript" script-name="berkshire-swash" src="http://use.edgefonts.net/berkshire-swash.js"></script>
 <script type="text/javascript" script-name="chicle" src="http://use.edgefonts.net/chicle.js"></script>

  <script src="../materialize/js/materialize.js"></script>
    <script src="../materialize/js/materialize.min.js"></script>
  <script src="../materialize/js/funciones.js"></script>
  <script src="../js/jquery-2.1.1.min.js"></script>
  <script type="text/javascript">
  $(document).ready(function() {
  M.updateTextFields();
});

  </script>
</html>
