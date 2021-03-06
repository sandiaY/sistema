<?php
session_start();
if(isset($_SESSION['u_usuario'])){
  
}
else{
  header("Location: index.php");
}

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
  <link type="text/css" rel="stylesheet" href="css/materialize.css" media="screen,projection" />
  <link rel="icon" href="img/manzana.ico">

  <title>La huerta verde</title>
</head>

<body>


  <nav>
    <ul id="dropdown1" class="dropdown-content">
      <li class="divider"></li>
      <li>
        <a href="comprar.php">Comprar ahora
          <i class="material-icons">shopping_cart</i>
        </a>
      </li>

      <li class="divider"></li>
      <li>
        <a href="history.php">Historial
          <i class="material-icons">history</i>
        </a>
      </li>

      <li class="divider"></li>
      <li>
        <a href="pedidos.php">Mis pedidos
          <i class="material-icons">thumb_up</i>
        </a>
      </li>

      <li class="divider"></li>
      <li>
        <a href="prefactura.php">Prefacura
          <i class="material-icons">insert_drive_file</i>
        </a>
      </li>

      <li class="divider"></li>
      <li>
        <a href="factura.php">Facturas
          <i class="material-icons">file_download</i>
        </a>
      </li>

      <li class="divider"></li>
      <li>
        <a href="perfil.php">Perfil
          <i class="material-icons">account_circle</i>
        </a>
      </li>

      <li class="divider"></li>
      <li>
        <a href="singout.php">Salir
          <i class="material-icons">exit_to_app</i>
        </a>
      </li>
    </ul>
    <div class="nav-wrapper green accent-2">

      <a href="home.php" class="brand-logo center">🍏 La huerta verde</a>

      <a href="#" data-activates="mobile-demo" class="button-collapse">
        <i class="material-icons">menu</i>
      </a>

      <ul class="left hide-on-med-and-down">
        <li>
          <a class="dropdown-button white-text" href="#!" data-activates="dropdown1">
            <b>¿Qué deseas hacer?</b>
            <i class="material-icons right">arrow_drop_down</i>
          </a>
        </li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li>
          <div class="user-view">
            <div class="background">
              <img src="img/amaya.png">
            </div>
            <a href="#user">
              <img class="circle" src="img/amaya.png">
            </a>
            <a href="#name">
              <span class="white-text name">Restarurante Amaya</span>
            </a>
            <a href="#email">
              <span class="white-text email">jdandturk@gmail.com</span>
            </a>
          </div>
        </li>
        <li>
          <a href="comprar.php">Comprar ahora
            <i class="material-icons">shopping_cart</i>
          </a>
        </li>
        <li>
          <a href="history.php">Historial
            <i class="material-icons">history</i>
          </a>
        </li>
        <li>
          <a href="pedidos.php">Mis pedidos
            <i class="material-icons">thumb_up</i>
          </a>
        </li>
        <li>
          <a href="prefactura.php">Prefactura
            <i class="material-icons">insert_drive_file</i>
          </a>
        </li>
        <li>
          <a href="factura.php">Facturas
            <i class="material-icons">file_download</i>
          </a>
        </li>
        <li>
          <a href="perfil.php">Perfil
            <i class="material-icons">account_circle</i>
          </a>
        </li>
        <li>
          <a href="singout.php">Salir
            <i class="material-icons">exit_to_app</i>
          </a>
        </li>

      </ul>
    </div>

  </nav>

  <br>
  <div class="container" align="center">
    <h1>HISTORIAL</h1>
    <div class="container" align="right">


      <a onclick="return confirm('¿Realmente deseas borrar el historial?')" class="waves-effect red btn-large">
        <i class="material-icons right">delete_forever</i>Eliminar historial</a>

    </div>

  </div>
  <table class="container">
    <thead>
      <tr>
        <th>Factura</th>
        <th>Fecha </th>
        <th>Fecha de entrega</th>
        <th>Importe</th>
      </tr>
    </thead>

    <tbody>
      <tr>
        <td>Alvin</td>
        <td>Eclair</td>
        <td>Eclair</td>
        <td>$0.87</td>
      </tr>
      <tr>
        <td>Alan</td>
        <td>Jellybean</td>
        <td>Eclair</td>
        <td>$3.76</td>
      </tr>
      <tr>
        <td>Jonathan</td>
        <td>Lollipop</td>
        <td>Eclair</td>
        <td>$7.00</td>
      </tr>
      <tr>
        <td>Jonathan</td>
        <td>Lollipop</td>
        <td>Eclair</td>
        <td>$7.00</td>
      </tr>


    </tbody>
  </table>
  <br>
  <div class="fixed-action-btn">
    <a class="btn-floating pulse btn-large red">
      <i class="large material-icons">send</i>
    </a>
    <ul>
      <li>
        <a href="pedidos.php" class="btn-floating teal accent-2">
          <i class="material-icons">thumb_up</i>
        </a>
      </li>
      <li>
        <a href="history.php" class="btn-floating purple">
          <i class="material-icons">history</i>
        </a>
      </li>
      <li>
        <a href="comprar.php" class="btn-floating blue">
          <i class="material-icons">local_grocery_store</i>
        </a>
      </li>
    </ul>
  </div>

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
            <li>
              <a href="home.php" class="black-text text-lighten-3" href="#!">Acerca de La huerta verde</a>
            </li>
            <li>
              <a class="black-text text-lighten-3" href="faq.php">Preguntas frecuentes</a>
            </li>
            <li>
              <a class="black-text text-lighten-3" href="#!">Llámanos</a>
            </li>
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
    $(document).ready(function () {
      $(".button-collapse").sideNav();
    });
  </script>

  <script>
    $(document).ready(function () {
      $('.parallax').parallax();
    });
  </script>

  <script>
    $(document).ready(function () {
      $('.materialboxed').materialbox();
    });
  </script>
  <script>
    $(document).ready(function () {
      $('.sidenav').sidenav();
    });
  </script>
  <script>
    $(document).ready(function () {
      $('select').formSelect();
    });
  </script>

  <script>
    $(document).ready(function () {
      $(".dropdown-trigger").dropdown();
    });
  </script>

</html>