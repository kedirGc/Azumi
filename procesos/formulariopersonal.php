

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
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
  </head>
  <body>

<p></p>
    <!-- ************************************************************************* -->
    <!-- https://es.cooltext.com/Logo-Design-Candy -->
    <div id="login-page" class="row">
      <div class="col s12 z-depth-4 card-panel" style="width: 550px;" >


        <form action="personal_guardar.php" method="POST"  >
          <div class="row"  >
            <div class="input-field col s12 center">
              <!-- <img src="images/inicio.png"   alt="" class="circle responsive-img "> -->
            </div>
          </div>

          <div class="row login"  >
            <h4 class="center" ><img src="../images/registropersonal.png" width="100%"></h4><br>
            <form class="col s12">

                 <div class="input-field col m12 s4" >
                  <i class="material-icons iconis prefix">credit_card</i>
                  <input name="dni" placeholder="Nro De Dni" id="first_name" type="text" class="validate">
                  <label for="first_name">Dni</label>
              </div>

                <div class="input-field col s5">
                  <i class="material-icons iconis prefix">perm_identity</i>
                  <input name="nombre" placeholder="nombres" id="first_name" type="text" class="validate">
                  <label for="first_name">nombre</label>
            </div>


                <div class="input-field col s7">
                  <i class="material-icons iconis prefix">people_outline</i>
                  <input name="apellido" id="last_name" type="text" class="validate">
                  <label for="last_name">apellido</label>
                </div>

              <div class="input-field col s5">
                  <i class="material-icons iconis prefix">date_range</i>
                  <input name="edad" placeholder="edad" id="first_name" type="number" class="validate">
                  <label for="first_name">edad</label>
            </div>
            <div class="input-field col s7">
                <i class="material-icons iconis prefix">card_travel</i>
                <input name="cargo" id="last_name" type="text" class="validate">
                <label for="last_name">cargo</label>
          </div>
          <div class="input-field col s12">
              <i class="material-icons iconis prefix">email</i>
              <input name="email" id="email" type="email" class="validate">
              <label for="email">Email</label>
          </div>



              <div class="row" >
                <div class="input-field col s12">
                  <!-- <button type="submit" name="action" class="btn waves-effect waves-light col s12">Iniciar sesión!</button> -->
                    <!-- <input type="submit" value="Log In"><br> -->
                    <button  type="submit" value="Aceptar"  class="btn waves-effect purple lighten-1 col s12">Registrar Personal</button>

                </div>
              </div>


           </form>
          </div>



        </form>
      </div>
    </div>


    <!-- ***************************************************************************** -->



    <!-- *************************************************************************************** -->


    <!-- <script src="materialize/js/materialize.js"></script>
      <script src="materialize/js/materialize.min.js"></script>
    <script src="materialize/js/funciones.js"></script> -->
    <script src="../materialize/js/jquery-2.1.1.min.js"></script>


    <script type="text/javascript">


    $(document).ready(function(){
      		$('.button-collapse').sideNav({
  		      menuWidth: 300, // Default is 300
  		      edge: 'left', // Choose the horizontal origin
  		      closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
  		      draggable: true, // Choose whether you can drag to open on touch screens,
  		      onOpen: function(el) { /* Do Stuff*/ }, // A function to be called when sideNav is opened
  		      onClose: function(el) { /* Do Stuff*/ }, // A function to be called when sideNav is closed
  		    }
  		  );
        		$('.parallax').parallax();
      	});

    </script>
  </body>
</html>
