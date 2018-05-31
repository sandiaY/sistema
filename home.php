<?php
session_start();
if(isset($_SESSION['u_usuario'])){
  
}
else{
  header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/es.css">
   
    <link rel="icon" href="img/manzana.ico">
    <title>La huerta verde</title>
</head>
<body>
  
                    
  <nav>
      <ul id="dropdown1" class="dropdown-content">
          <li class="divider"></li>
          <li><a href="comprar.php">Comprar ahora<i class="material-icons">shopping_cart</i></a></li>

          <li class="divider"></li>
          <li><a href="history.php">Historial<i class="material-icons">history</i></a></li>
          
          <li class="divider"></li>
          <li><a href="pedidos.php">Mis pedidos<i class="material-icons">thumb_up</i></a></li>
          
          <li class="divider"></li>
          <li><a href="prefactura.php">Prefacura<i class="material-icons">insert_drive_file</i></a></li>
          
          <li class="divider"></li>
          <li><a href="factura.php">Facturas<i class="material-icons">file_download</i></a></li>
          
          <li class="divider"></li>
          <li><a href="perfil.php">Perfil<i class="material-icons">account_circle</i></a></li>
          <li class="divider"></li>
          <li><a href="singout.php">Salir<i class="material-icons">exit_to_app</i></a></li>
        </ul>
    <div class="nav-wrapper green accent-2">
       
      <a href="home.php" class="brand-logo center">🍏 La huerta verde</a>  
     
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      
      <ul class="left hide-on-med-and-down">
          <li><a  class="dropdown-button white-text" href="#!" data-activates="dropdown1"><b>¿Qué deseas hacer?</b><i class="material-icons right">arrow_drop_down</i></a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
          <li>
            <div class="user-view">
              <div class="background">
                <img src="img/amaya.png">
              </div>
              <a href="#user"><img class="circle" src="img/amaya.png"></a>
              <a href="#name"><span class="white-text name">Restarurante Amaya</span></a>
              <a href="#email"><span class="white-text email">jdandturk@gmail.com</span></a>
            </div>
          </li>
        <li><a href="comprar.php">Comprar ahora<i class="material-icons">shopping_cart</i></a></li>
        <li><a href="history.php">Historial<i class="material-icons">history</i></a></li>
        <li><a href="pedidos.php">Mis pedidos<i class="material-icons">thumb_up</i></a></li>
        <li><a href="prefactura.php">Prefactura<i class="material-icons">insert_drive_file</i></a></li>
        <li><a href="factura.php">Facturas<i class="material-icons">file_download</i></a></li>
        <li><a href="perfil.php">Perfil<i class="material-icons">account_circle</i></a></li>
        <li><a href="singout.php">Salir<i class="material-icons">exit_to_app</i></a></li>

      </ul>
    </div>
    
  </nav>  
  

  <div id="encima" class="parallax-container">
    
      <FONT SIZE=6><p  class="white-text text-darken-2" ALIGN="center" class="flow-text">
          <br>  
      ¿NECESITAS VEGETALES FRESCOS POR LA MAÑANA? 
      <br>  
      Envianos tu pedido y nosotros te lo llevaremos.🚚
      <br>
      ¡Los mejores vegetales y brotes de la ciudad estan esperandote!
      </p></font> 
      <div class="parallax"><img src="img/fruit.jpg"></div>
    </div>
    
    <div class="container">
      <h2 class="center">Horario</h2>
      <p ALIGN="center" class="flow-text">Contamos con entregas de lunes a sábado, recibiendo pedidos un día antes hasta las 10:00 PM en horario normal vía e-mail. Conocemos las necesidades que se presentan al tener servicios fuertes, por tal motivo contamos con las entregas de urgencia (banderazos), los cuales se reciben hasta las 2:30 AM. Ofrecemos un servicio personalizado a cada uno de nuestros clientes, estando disponibles 24/7 vía e-mail, telefónica y chat.</p>
    </div>
    <div class="row">
        <div class="col s12 m3">
          <div class="card">
            <div class="card-image">
              <img src="img/chiles.jpg">
              <span class="card-title">Conusme lo nacional</span>
              <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons green">local_grocery_store</i></a>
            </div>
            <div class="card-content">
              <p>Tenemos una cantidad de productos impresionante y de alta calidad a unos KM de distancia y muchas veces se buscan productos de otros países, ¡Aprendamos a usar y valorar lo que nuestros agricultores nos ofrecen!. 🍏🍂#lahuertaverde #delcampoalamesa #consumelocal #hechoenmexico</p>
            </div>
          </div>
        </div>

        <div class="col s12 m3">
            <div class="card">
              <div class="card-image">
                <img src="img/pulp.jpg">
                <span class="card-title">Prepara deliciosos platos</span>
                <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons green">local_grocery_store</i></a>
              </div>
              <div class="card-content">
                <p>Pulpo, papa cambray dressed in preserved lemon, confit aioli and dried cherry tomatoes. Do you know this place? #cancanroma @zdragan7  💚😍🤙🏿 #lahuertaverde #delcampoalamesa #cdmxfood #frommexicowithlove #consumelocal</p>
              </div>
            </div>
          </div>

          <div class="col s12 m3">
              <div class="card">
                <div class="card-image">
                  <img src="img/flor.jpg">
                  <span class="card-title">Experimenta con nuevas opciones</span>
                  <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons green">local_grocery_store</i></a>
                </div>
                <div class="card-content">
                  <p>Cuando está flor abre, ademas de su belleza aporta muchísimo sabor al plato; se recomienda usar petalos sueltos pasa que el sabor en boca no sea abrumador sobre los del resto del platilllo... Flor de ajo 💚😍🤙🏿!! #lahuertaverde #delcampoalamesa #consumelocal</p>
                </div>
              </div>
            </div>

            <div class="col s12 m3">
                <div class="card">
                  <div class="card-image">
                    <img src="img/lechu.jpg">
                    <span class="card-title">Lechugas frescas</span>
                    <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons green">local_grocery_store</i></a>
                  </div>
                  <div class="card-content">
                    <p>Ya viene la nueva línea de productos orgánicos, mandamos a todos los aeropuertos!! ✈️🛩💚🍏😍🤤 #lahuertaverde #delcampoalamesa #consumelocal #hechoenmexico</p>
                  </div>
                </div>
              </div>
      </div>
      
          
      
      
      
      <br>
      
      <div class="parallax-container">
          <div class="parallax"><img src="img/logi.jpg"></div>
        </div>
  
        <br>
        <div class="row">
            <div class="col s12 m4">
              <div class="center promo">
                <i class="large material-icons" >restaurant_menu</i>
                <font size=5> <p class="promo-caption">Cocinar delicioso y fresco</p> </font>
                <p class="light center">Sabemos que necesitas por la mañana los vegetales listos para concinar. Ademas de un gran surtido de abarrotes e insumos con los que contamos.</p>
              </div>
            </div>

            <div class="col s12 m4">
              <div class="center promo">
                <i class="large material-icons">local_shipping</i>
                <font size=5> <p class="promo-caption">Entregas seguras a tiempo</p> </font>
                <p class="light center">Llévele llévele!! Los brotes de... Cilantro, betabel, amaranto, melón, coliflor, rábano, mostaza, calabaza, girasol, chícharo, arugula, Elote, zanahoria, garbanzo, albahaca, etc... Crece nuestro cultivo de estas apreciadas hojas y su intenso sabor. 🤘🏿🍏🌱 #lahuertaverde #delcampoalamesa #consumelocal #hechoenmexico</p>
              </div>
            </div>

            <div class="col s12 m4">
              <div class="center promo">
                <i class="large material-icons">shopping_cart</i>
                <font size=5> <p class="promo-caption">Compra desde tu ordenador o movil</p> </font>
                <p class="light center">Comienza la temporada de flor de hinojo, con su respectivo sabor anisado; última etapa de este apreciado bulbo del cual se consume el 100%: semilla, bulbo, ramillete y flor. 🍏🌼 #lahuertaverde #delcampoalamesa #consumelocal #hechoenmexico</p>
              </div>
            </div>
          </div>
      
<div class="fixed-action-btn">
    <a class="btn-floating pulse btn-large red">
      <i class="large material-icons">send</i>
    </a>
    <ul>
      <li><a href="pedidos.php" class="btn-floating teal accent-2"><i class="material-icons">thumb_up</i></a></li>
      <li><a href="history.php" class="btn-floating purple"><i class="material-icons">history</i></a></li>
      <li><a href="comprar.php" class="btn-floating blue"><i class="material-icons">local_grocery_store</i></a></li>
    </ul>
  </div>

  
        

        
  <footer class="page-footer green accent-2">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="black-text">La huerta verde</h5>
          <p class="black-text text-lighten-4">Del campo a la mesa.</p>
        </div>
        <div class="col l4 offset-l2 s12">
          <h5 class="black-text">¿Quiénes somos?</h5>
          <ul>
            <li><a href="home.php" class="black-text text-lighten-3" href="#!">Acerca de La huerta verde</a></li>
            <li><a class="black-text text-lighten-3" href="faq.php">Preguntas frecuentes</a></li>
            <li><a class="black-text text-lighten-3" href="#!">Llámanos</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="black-text container">
      © 2018 Copyright La huerta verde
      
      </div>
    </div>
  </footer>
     <!--Import jQuery before materialize.js-->
     <script type="text/javascript" src="js/jquery.js"></script>
     <script type="text/javascript" src="js/bin/materialize.min.js"></script>
     
     <script>
        $(document).ready(function(){
      $(".button-collapse").sideNav();
    });
     </script>

     <script>
        $(document).ready(function(){
          $('.parallax').parallax();
        });
     </script>

     <script>
        $(document).ready(function(){
          $('.materialboxed').materialbox();
        });
     </script>
     <script>
        $(document).ready(function(){
          $('.sidenav').sidenav();
        });
     </script>
     <script>
        $(document).ready(function(){
          $('select').formSelect();
        });
              
     </script>
     
     <script>

        $(document).ready(function(){  
        $(".dropdown-trigger").dropdown();
        });
              
     </script>

</body>
</html>
