<?php
 
$server = "93.188.160.233";
$username = "u547675350_root";
$password = "12345678";
$database = "u547675350_test";
 
$con = mysqli_connect($server, $username, $password) or die ("No se conecto: " . mysqli_error());
 
mysqli_select_db($con,$database,);

$nombre = mysqli_real_escape_string($con,$_POST["nombre"]);
$paterno = mysqli_real_escape_string($con,$_POST["paterno"]);
$materno = mysqli_real_escape_string($con,$_POST["materno"]);
$apellidos=$paterno." ".$materno;
$edad = mysqli_real_escape_string($con,$_POST["edad"]);
$correo = mysqli_real_escape_string($con,$_POST["correo"]);
$sexo1 = mysqli_real_escape_string($con,$_POST["sexo1"]);
$direccion = mysqli_real_escape_string($con,$_POST["direccion"]);
$usu = mysqli_real_escape_string($con,$_POST["user2"]);
$pass2 = mysqli_real_escape_string($con,$_POST["pass2"]);

 
$sql = "INSERT INTO usuario values (NULL,'$nombre','$apellidos',$edad,'$correo','$sexo1','$usu','$pass2','user')";

if ($resultado = mysqli_query($con,$sql)){
    
    echo true;
}

mysqli_close($con);
 
?>