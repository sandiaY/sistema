<?php
session_start();
$usuario=$_POST['email'];
$contraseña=$_POST['password'];

include("conexion.php");
$comparar=pg_query("SELECT*FROM usuarios where email='$usuario' AND contraseña='$contraseña'");
if($resultado= pg_fetch_array($comparar)){
    $_SESSION['u_usuario']=$usuario;
    header("Location: home.php");
}else{
header("Location: index.php");

}
?>
