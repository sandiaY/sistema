<?php
session_start();
include('conexion.php');
$usuario=$_POST['nombre'];
$contraseña=$_POST['contraseña'];
$email=$_POST['email'];
$tipo=$_POST['tipo'];

$query="INSERT INTO usuarios(usuario,contraseña,email,tipo)values('$usuario','$contraseña','$email','$tipo')";
$resultado=pg_query($query);
if($resultado){
   
    header("Location: home.php");
}else{
header("Location: form.php");
}
?>