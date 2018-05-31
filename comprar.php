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
          <li><a href="singout.php">Salir<i class="material-icons">exit_to_app</i></a></li>
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


    <br>


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



<div class="container" align="right">
        <a  class="waves-effect waves-light btn"><i class="material-icons left">shopping_cart</i>Carrito</a>
</div>
    <div class="container" align="left">
        <a  class='dropdown-button btn' href='#!' data-activates='dropdown2'><i class="material-icons right">arrow_drop_down</i>Productos</a>

        <!-- Dropdown Structure -->
        <ul id='dropdown2' class='dropdown-content'>
            <li>
                <a href="#!">Mayoreo</a>
            </li>
            <li>
                <a href="#!">Frutas y verduras</a>
            </li>
            <li class="divider"></li>
            <li>
                <a href="#!">Abarrotes</a>
            </li>
            <li>
                <a href="#!">Cremeria y carnes</a>
            </li>
            <li>
                <a href="#!">insumos y limpieza</a>
            </li>
            <li>
                <a href="#!">Productos organicos</a>
            </li>
            <li>
                <a href="#!">Brotes</a>
            </li>
        </ul>
    </div>
    <h1 align="center">Abarrotes</h1>
   
          

<br>


<div class="container">

<center>
    <table>
        <thead>
                <td>ID</td>
                <td>Nombre</td>
                <td>Unidad</td>
                <td>Stock</td>

                <td>Precio</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                
                
                <br>
            </tr>
            <?php
           $query = "SELECT * FROM productos2";

           $query = pg_query($query);
           while($row = pg_fetch_array($query,NULL,PGSQL_ASSOC)){
        
           
            ?>
            <tr>
                <td><?php echo $row['id']; ?></td>

                <td><?php echo $row['nombre']; ?></td>
                <td><?php echo $row['unidad']; ?></td>
                <td><?php echo $row['stock']; ?></td>
                <td><?php echo $row['preciov']; ?></td>
                
            </tr>
           <?php
           }
           ?>
        </tbody>
    </table>
</center> 

</div>    

    <br>
    <br>
<ul></ul>
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
<script>
        $(document).ready(function(){
            $('.tooltipped').tooltip();
          });
</script>


</body>

</html>