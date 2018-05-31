<?php
function conectarBD()
{
$host="ec2-75-101-142-91.compute-1.amazonaws.com";
$port="5432";
$dbname="dcf9b29vh3lker";
$user="hrwgjsttrwmdyc";
$password="e2a3791fe011ae8d213316428a5f52e6ebc1bdec56c343eeb3591cc83b831091";
$db=pg_connect("$host $port $dbname $user $password");

if(!$db)
{
  echo 'Error:'.pg_last_error;
}
else
{
 echo '<h3>Conexion exitosa </h3>';
 return $bd; 
}
}
?>



