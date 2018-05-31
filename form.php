<?php


include('conexion.php');
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
    <link rel="icon" href="img/manzana.ico">

    <title>La huerta verde</title>
</head>

<body>
        
        <nav>
            <div class="nav-wrapper green accent-2">
              <a href="#" class="brand-logo center">🍏 La huerta verde</a>
              
              <ul class="right">
                  
              </ul>
            </div>
          </nav>
        <h1 class="center" class="header">REGISTRATE</h1>
        
        <div class="container">
            <form class="col s12" action="guardaf.php" method="POST">
              <div class="row">
                <div class="input-field col s6">
                  <input placeholder="Ejemplo: Johnny Sins" id="first_name" type="text" class="validate" REQUIRED name="nombre">
                  <label for="first_name">Nombres</label>
                </div>
                
              </div>
             
              <div class="row">
                <div class="input-field col s12">
                  <input id="password" type="password" class="validate" REQUIRED name="contraseña" >
                  <label for="password">Crea una contraseña</label>
                </div>
              </div>
              
              <div class="row">
                <div class="input-field col s12">
                  <input id="email" type="email" class="validate" REQUIRED name="email">
                  <label for="email">Email</label>
                </div>
              </div>
              <div class="row">

                <div class="input-field col s12">
                  <input id="tipo" type="text" class="validate" REQUIRED name="tipo">
                  <label for="tipo">Cliente o adminstrador</label>
                </div>
    
                 
                </div>
                
              </div>
              <center>

<button  class="btn waves-effect waves-light" type="submit" value="Aceptar" name="action">Finalizar  
    <i class="material-icons right">send</i>      
</button>
</center>
            </form>
          
   <br>
   <br>
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
      <script type="text/javascript" src="js/jquery.js"></script>
     <script type="text/javascript" src="js/bin/materialize.js"></script>
     <script>
        $('.datepicker').pickadate({
          selectMonths: true, // Creates a dropdown to control month
          selectYears: 15, // Creates a dropdown of 15 years to control year,
          today: 'Today',
          clear: 'Clear',
          close: 'Ok',
          closeOnSelect: false, // Close upon selecting a date,
          container: undefined, // ex. 'body' will append picker to body
        });
     </script>
     <script>
       
     </script>
    <script>
        $(document).ready(function() {
          $('select').material_select();
        });
             
    </script>
</body>
</html> 

        