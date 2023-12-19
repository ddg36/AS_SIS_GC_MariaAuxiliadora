<?php
function conectar(){
$user="root";
$pass="";
$server="localhost";
$db="db_ma";
$con=mysqli_connect($server,$user, $pass) or die ("Error al conectar a la base de datos".mysqli_error($con));
mysqli_select_db($con, $db);
return $con;
}
?>