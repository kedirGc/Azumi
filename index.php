<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>MaterializeCSS - Ejemplo</title>
  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="materialize/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="materialize/css/index.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>

    <link rel="stylesheet" href="images/font-awesome-4.3.0/css /font-awesome.min.css">

  <script src="jquery.min.js"></script>
</head>
<body>
  <!-- ************************************************************* -->
  <div class="row purple lighten-2" style="margin: 0px;text-align: center;">
        <div class="col s12 m12">
          <img src="images/azumilogo.png" width=20%>
              <!-- <h6 class="textShadow">LOGO</h6>
            http://www.sugarfreepasteleria.com/ -->
        </div>
      </div>
  <!-- ************************************************************* -->
<!-- https://bootsnipp.com/materialize/snippets/j67eO
https://evilnapsis.com/2018/06/06/sistema-de-registro-y-login-con-materialize-php-y-mysql/ -->
  <!-- ************************************************************* -->
  <nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="./" class="brand-logo"></a>
      <ul class="right hide-on-med-and-down">
        <li><a  href="index.html">Inicio</a></li>
        <li><a  href="nosotros.html">Nosotros</a></li>
        <li><a  href="productos-servicios.html">Productos y Servicios</a></li>
        <li><a  href="#contactus">Galeria</a></li>
        <li><a  href="#contactus">Registrate</a></li>
        <li> <a  class="waves-effect light-blue lighten-1 btn modal-trigger" href="#modal1">Tienda Online</a></li>

      </ul>
      <ul id="nav-mobile" class="sidenav">
        <li><a class="head-link" href="index.html">Inicio</a></li>
        <li><a  href="nosotros.html">Nosotros</a></li>
        <li><a  href="productos-servicios.html">Productos y Servicios</a></li>
        <li><a  href="#contactus">Galeria</a></li>
        <li><a  href="#contactus">Registrate</a></li>
        <li><a class="head-link" href="#contactus">Tienda Onlien</a></li>
        <li><a href="logo.html">Tienda Online</a></li>

      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <!-- ************************************************************* -->

   <div id="modal1" class="modal" style="width: 500px; height:900px;  background-color: rgba(0,0,0,0.1);">
     <!-- <div class="modal-content"> -->
       <!-- <div class="container"> -->
       <div id="login-page" class="row"  style=" width: 350px;">
         <div class="col s12 z-depth-4 card-panel" >


           <form  class="col s12" action="procesos/procesolo.php" method="POST" >


             <div class="row login" >
               <p></p> <p></p>
               <h4 class="center" ><img src="images/inicio.png" width="60%"></h4><br>
               <form class="col s12">
                 <div class="row">
                    <div class="input-field col m12 s12" >
                     <i class="material-icons iconis prefix">account_box</i>
                     <input name="usuario" id="icon_prefix" type="text" class="validate">
                     <label for="icon_prefix">Nombre o Email</label>
                   </div>
                 </div>
                 <div class="row">
                   <div class="input-field col m12 s12">
                     <i class="material-icons iconis prefix">enhanced_encryption</i>
                     <input name="contrasena" id="password" type="password" class="validate">
                     <label for="password">Contraseña</label>
                   </div>
                 </div>

                 <div class="row" >
                   <div class="input-field col s12">

                       <button  type="submit" class="btn waves-effect waves-light col s12">Login</button>

                   </div>
                 </div>
<!--
                 <div class="row">
                   <div class="input-field col s6 m6 l6">
                     <p class="margin medium-small"><a href="http://demo.geekslabs.com/materialize/v2.2/layout03/page-register.html">Register Now!</a></p>
                   </div>
                   <div class="input-field col s6 m6 l6">
                       <p class="margin right-align medium-small"><a href="http://demo.geekslabs.com/materialize/v2.2/layout03/page-forgot-password.html">Forgot password ?</a></p>
                   </div>
                 </div> -->
              </form>
             </div>



           </form>
         </div>
       </div>
<!-- </div> -->
     <!-- </div> -->

   </div>



<!-- ******************************************************************* -->
<div id="index-banner" class="parallax-container">
  <div class="section no-pad-bot">
    <div class="container">
      <br><br>
      <h1 class="header center white-text text-darken-2" style="font-family: 'Oleo Script', cursive;font-weight: 800;line-height: 1.15 !important;">Pastelerìa</h1>
      <div class="row center">

      <div style="text-align: center;"><span style="font-size:28px;"><span style="color:#ffffff;">• ELABORACIÓN DE POSTRES SIN AZÚCAR •</span></span></div>
      </div>
      <div class="row center">
        <a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Get Started</a>
      </div>
      <br><br>

    </div>
  </div>
  <div class="parallax"><img src="images/banner.jpg" alt="Unsplashed background img 1"></div>
</div>

  <!-- ************************************************************* -->

  <!-- ************************************************************* -->
  <div class="vertical" style="width: 100%;"><div class="widget-wrapper widget-element free-text diy-resizable ">

  		<div id="widget-id-1833621" class="widget-body " style="">
  		<div class="freetextarea">
  	<div><h1 style="text-align:center"><span style="color:#eb5324;">
  	<span style="font-size:36px;"><strong></strong></span></span><span style="color:#b60170;">
  	<span style="font-size:36px;"><strong>Pastelerías De</strong></span></span><span style="color:#eb5324;">
  	<span style="font-size:36px;"><strong> </strong></span></span><span style="color:#ee2665;">
  	<span style="font-size:36px;"><strong>La Mejor Calidad</strong></span></span></h1></div></div>
  <div class="clear"></div>	</div>
  </div>

  <div id="widget-id-1833622" class="widget-body " style="padding: 0px 15px 0px 15px">
  <div class="freetextarea">
  <div><div style="text-align:center"><br></div><div style="text-align:center"><span style="font-size:18px;">¡Bienvenido a nuestra web! Somos <strong>Pasteleria Azumi</strong>, una empresa peruana perteneciente al rubro de las <strong>pastelerías</strong>.</span></div><div style="text-align:center"><br></div><div style="text-align:center"><span style="font-size:14px;">Nuestra
  cuenta con los materiales y la materia prima apropiada para la elaboracion del producto ofreciendo una variedad de sabores supervisados para una maxima calidad.
  .&nbsp;Visítenos, estamos en <strong>El Agustino Lima</strong>.</span>​​​​​​​<br></div></div></div>
  <div class="clear"></div>	</div>
  </div>
<br><br><br>
<!-- ******************************************************************** -->



<div class="row center" style="background: #ce93d8 ;padding: 3% 35px 3% 20px" >

   <div class="col s12 m4">
     <div><h2 style="text-align:center"><span style="font-size:28px;">
       <span style="color:#ffd35d;">Postres Deliciosos</span></span></h2></div>
       <div style="text-align:center"><div><span style="color:#ffffff;">Tenemos la más amplia variedad en productos de pastelería sin azúcar, como tortas, alfajores o tartaletas.</span></div>
   </div> <div><div style="text-align:center"><div><div><div><span style="color:#ffffff;">Visite nuestra pastelería en <strong>Magdalena del Mar</strong> y compruebe por qué somos líderes indiscutidos en el rubro.</span></div><div><br></div></div></div>


 </div> </div> </div>


   <div class="col s12 m4">

  <img  style="max-width:100%;" src="images/pastelfresa.jpg" alt="Pastel de chocolate" class="image lazy">


   </div>

  <div class="col s12 m4">
    <img  style="max-width:100%;" src="images/pastelfresa2.jpg" alt="Pastel de chocolate" class="image lazy">
  </div>


 </div>




  <!-- ************************************************************* -->
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h1 class="header center blue-text">HOLA SOY PASTELERIA AZUMI!</h1>
      <div class="center">
        <h5 class="header light">Bienvenido a este mundo de pasteles.</h5>
      </div>
      <br><br>
    </div>
  </div>

  <!-- ************************************************************* -->

  <div class="slider">
   <ul class="slides">
     <li>
       <img src="images/banner1.jpg"> <!-- random image -->

     </li>
     <li>
       <img src="images/banner2.jpg"> <!-- random image -->

     </li>
     <li>
       <img src="images/banner3.jpg"> <!-- random image -->

     </li>
     <li>
       <img src="images/banner5.jpg"> <!-- random image -->

     </li>
   </ul>
 </div>
<!-- *************************slider correlativo*********************************** -->
<div class="carousel">
    <a class="carousel-item" href="#one!"><img src="images/cheescake-maracuya.jpg"></a>
    <a class="carousel-item" href="#two!"><img src="images/cheescake-horneado.jpg"></a>
    <a class="carousel-item" href="#three!"><img src="images/mousse-guanabana.jpg"></a>
    <a class="carousel-item" href="#four!"><img src="images/mousse-lucuma.jpg"></a>
    <a class="carousel-item" href="#five!"><img src="images/pie-manzana.jpg"></a>
  </div>

  <!-- ************ get DOwn ON IT*****stand by me**********freeze-frame******************crazy musica **************** -->

  <div class="row center" style="background:  ;padding: 3% 35px 3% 20px" >
<div class="container">


     <div class="col s12 m4">
          <img  style="max-width:100%;" src="images/rojo-correo-2.png" alt="Pastel de chocolate" class="image lazy">
            <h4 style="text-align: center;"><span style="font-size:22px;"><strong>Correo:</strong></span></h4>
            <div style="text-align:center">kedirrobert@gmail.com </div>

        </div>

     <div class="col s12 m4">

    <img  style="max-width:100%;" src="images/rojo-mapa-2.png" alt="Pastel de chocolate" class="image lazy">

<h4 style="text-align: center;"><span style="font-size:22px;"><strong>Dirección:</strong></span></h4>
<div style="text-align:center">Res.Pariachi Mz M lt 30</div>
<div style="text-align:center">Huaycan City LIMA (Lima)</div>
<div style="text-align:center"><br></div>
</div>

    <div class="col s12 m4">
      <img  style="max-width:100%;" src="images/rojo-correo-2.png" alt="Pastel de chocolate" class="image lazy">
        <h4 style="text-align: center;"><span style="font-size:22px;"><strong>Celular:</strong></span></h4>
        <div style="text-align:center">933-646-325 </div>



   </div> </div></div>
<!--
******************************************************************** -->

  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1951.2630195498077!2d-76.84028008451254!3d-12.007262519462687!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2spe!4v1568390707205!5m2!1ses!2spe" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
<br><br>

  <!-- ******************************************************************** -->

          <div id="ourTeam" class="container section scrollspy">

          <h6 class="center-align ourTeam"> Nuestro Equipo</h6>
          <div class="row">

          	<div class="col s12 m4">
          <div class="card-panel purple lighten-3 z-depth-4">
            <div class="row valign-wrapper">
              <div class="col s4">
                <img src="images/perfil.jpg" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
              </div>
              <div class="col s8">
                <h6 class="center"><b>Liliana Gutarra</b></h6>
                <span class="black-text">
                  This is a square image. Add the "circle" class to it to make it appear circular.

                </span>
              </div>
            </div>
          </div>
        </div>



        <div class="col s12 m4">
          <div class="card-panel purple lighten-3 z-depth-4">
            <div class="row valign-wrapper">
              <div class="col s4">
                <img src="images/perfilk.jpg" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
              </div>
              <div class="col s8">
                  <h6 class="center"><b>Robert Garcia</b></h6>
                <span class="black-text">
                  This is a square image. Add the "circle" class to it to make it appear circular.

                </span>
              </div>
            </div>
          </div>
        </div>




        <div class="col s12 m4">
          <div class="card-panel purple lighten-3 z-depth-4">
            <div class="row valign-wrapper">
              <div class="col s4">
                <img src="images/perfilj.jpg" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
              </div>
              <div class="col s8">
                <h6 class="center"><b>Jhon Lobezna</b></h6>
                <span class="black-text">
                  This is a square image. Add the "circle" class to it to make it appear circular.

                </span>
              </div>
            </div>
          </div>
        </div>



          </div>
        </div>  <!--container-->
  <!-- ************************************************************* -->

  <!-- ************************************************************* -->

  <div id="ourProjectss" class="section scrollspy">
  <div class="container">
    <h6 class="ourProjects">Nuestros Proyectos</h6>
    <br>
    <br>
    <div class="row">


      <div class="col s12 m4">

        <ul class="demo-3">
      <li>
          <figure>
              <img src="images/project1.jpg" class="responsive-img" alt=""/>
              <figcaption>
                  <h2 >Dicen que vuelves, volverás, como el rió que se va al lago</h2>

              </figcaption>
          </figure>
      </li>
  </ul>
    </div>


    <div class="col s12 m4">

        <ul class="demo-3">
      <li>
          <figure>
              <img src="images/project2.jpg" class="responsive-img" alt=""/>
              <figcaption>
                  <h2 >Jumanpi, nayampi Cuando florezca el chuñoProject title</h2>

              </figcaption>
          </figure>
      </li>
  </ul>
    </div>

    <div class="col s12 m4">

        <ul class="demo-3">
      <li>
          <figure>
              <img src="images/project3.jpg" class="responsive-img" alt=""/>
              <figcaption >
                  <h2 >Jaguan, ño jaguan Cuando florezca el chuño</h2>

              </figcaption>
          </figure>
      </li>
  </ul>
    </div>


  </div>

  <div class="center">
    <a href="logo.html" class="waves-effect waves-light btn purple lighten-1">View more</a>
  </div>
</div><!--container-->
    </div>
    <br>
    <br>
  <!-- ************************************************************* -->


  <!-- ************************************************************* -->
  <!-- <div class="parallax-container section scrollspy valign-wrapper" id="aboutus" style="background: #ce93d8 ;">
<div class="section no-pad-bot">
 <div class="container">
   <div class="center row col s3">

     <h3 class="aboutUs" style="color: white;">Acerca de nosotros</h3>
  </div>
   <div class="center row col s12" style="color: white;">
     <p>En Pastelerías Michifus trabajamos desde hace más de 3 años para hacerte la vida más dulce,
       saludable y feliz con nuestros productos artesanos de pastelería, panadería, heladería y cafetería.
        Usamos las mejores materias primas evitando las grasas hidrogenadas, en un proceso
          de elaboración artesanal para asegurar una calidad y sabor inigualable en cada uno de nuestros productos.</p>

  </div>

 </div>
</div>
<div class="parallax"><img src="images/images.jpg" alt="img"></div>
</div> -->

 <!-- <br> -->
  <!-- ************************************************************* -->

  <!-- ************************************************************* -->
  <!-- <div class="container section scrollspy" id="contactus">
<div>
<br>
<br>
<h2 class="center contactUs">Contáctenos</h2>
<p class="center">Aquí puedes consultarnos cualquier duda que tengas sobre nuestros productos o pedidos especiales. Como siempre nos pondremos en contacto contigo lo antes posible.

¡Gracias por confiar en Pastelerías Roldán!
He leído y acepto los términos y condiciones generales.</p>
<div class="row">

<form class="col s8 offset-s2" action="contacto_guardar.php" method="POST">

<div class="row">
  <div class="input-field col s6">
    <input name="nombre" id="nombre" type="text" class="validate">
    <label for="nombre">nombre</label>
  </div>


  <div class="input-field col s6">
    <input name="email" id="email" type="email" class="validate">
    <label for="Email"> Email</label>
  </div>
</div>

 <div class="row">
  <div class="input-field col s12">
    <input name="asunto" id="asunto" type="text" class="validate">
    <label for="Asunto">Asunto</label>
  </div>
</div>

 <div class="row">
  <div class="input-field col s12">
     <textarea name="mensaje" id="text_area" class="materialize-textarea"></textarea>
    <label for="Mensaje">Mensaje</label>
  </div>
</div>


  <div>
    <button  type="submit" value="Aceptar" class="waves-effect waves-light btn purple lighten-1">Enviar Mensaje</button>


  </div>
 </form>
</div>
</div>
</div> -->


  <!-- ************************************************************* -->



  <!-- ************************************************************* -->
  <!-- ************************************************************* -->
  <!-- <footer class="page-footer">
           <div class="container">
             <div class="row">
               <div class="col l6 s12">
                 <h5 class="white-text">Footer Content</h5>
                 <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>


            <div class="fb-page" data-href="https://www.facebook.com/kedir.garciacalderon" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div>


               </div>
               <div class="col l4 offset-l2 s12">
                 <h5 class="white-text">Links</h5>
                 <ul>
                   <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                   <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                   <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                   <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                 </ul>
               </div>
             </div>
           </div>
           <div class="footer-copyright">
             <div class="container">
             © 2014 Copyright Text
             <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
             </div>
           </div>
         </footer> -->
  <!-- ************************************************************* -->
  <!-- ************************************************************* -->

  <!-- ************************************************************* -->
  <footer class="page-footer">
       <div class="container">

         <div class="row">

           <div class="col s6 offset-s4">
             <a href="https://www.facebook.com/sharer/sharer.php?u=&t=" title="Share on Facebook" target="_blank"> <i class="fa fa-facebook" style="font-size: 35px; color:white;"></i></a> &nbsp;  &nbsp;
             <a href="https://twitter.com/intent/tweet?source=&text=:%20" title="Tweet" target="_blank"> <i class="fa fa-twitter" style="font-size: 35px; color:white;"></i></a> &nbsp;  &nbsp;
             <a href="https://plus.google.com/share?url=" title="Share on Google+" target="_blank"> <i class="fa fa-google-plus" style="font-size: 35px; color:white;"></i></a> &nbsp;  &nbsp;
             <a href="http://www.linkedin.com/shareArticle?mini=true&url=&title=&summary=&source=" title="Share on LinkedIn" target="_blank">
               <i class="fa fa-linkedin" style="font-size: 35px; color:white;">


             </i></a>

       </div>
       <div class="footer-copyright">
         <div class="container">
         © 2014 Copyright Text
         <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
         </div>
       </div>



     </div>


     </footer>
  <!-- ************************************************************* -->

  <!-- ************************************************************* -->
  <!-- ************************************************************* -->

  <!-- ************************************************************* -->
  <!-- ************************************************************* -->

  <!-- ************************************************************* -->
  <!-- ************************************************************* -->

<!--  Scripts-->
  <!-- <script src="materialize/js/init.js"></script> -->
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
 <script type="text/javascript" src="js/materialize.min.js"></script>
 <script src="js/materialize.js"></script>
 <script type="text/javascript" script-name="bonbon" src="http://use.edgefonts.net/bonbon.js"></script>
 <script type="text/javascript" script-name="berkshire-swash" src="http://use.edgefonts.net/berkshire-swash.js"></script>
 <script type="text/javascript" script-name="chicle" src="http://use.edgefonts.net/chicle.js"></script>


<script src="materialize/js/materialize.js"></script>
  <script src="materialize/js/materialize.min.js"></script>
<script src="materialize/js/funciones.js"></script>
<script src="js/jquery-2.1.1.min.js"></script>

<!-- https://kenwheeler.github.io/slick/ -->
<script type="text/javascript">



  $(document).ready(function(){
    $('.carousel').carousel();
  });


$(document).ready(function(){
  $('.parallax').parallax();
});


  $(document).ready(function(){
    $('.sidenav').sidenav();
  });
  $(document).ready(function(){
   $('.modal').modal();
 });
 $('.carousel.carousel-slider').carousel({
   fullWidth: true
 });
 $(document).ready(function(){
   $('.collapsible').collapsible();
 });

    $(document).ready(function(){
       $('.slider').slider();
       $(".button-collapse").sideNav();
        $('.parallax').parallax();

     });
     $('.head-link').click(function(e) {
     e.preventDefault();

     var goto = $(this).attr('href');

     $('html, body').animate({
         scrollTop: $(goto).offset().top
     }, 800);
 });


</script>
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-60673008-2', 'auto');
ga('send', 'pageview');
</script>
</body>
</html>
