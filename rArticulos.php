<?php
 
$server = "93.188.160.233";
$username = "u547675350_root";
$password = "12345678";
$database = "u547675350_test";
 
$con = mysqli_connect($server, $username, $password) or die ("No se conecto: " . mysqli_error());
 
mysqli_select_db($con,$database);

$TArticulo = mysqli_real_escape_string($con,$_POST["TArticulo"]);
$NArticulo = mysqli_real_escape_string($con,$_POST["NArticulo"]);
$foto = mysqli_real_escape_string($con,$_POST["foto"]);
$comentario = mysqli_real_escape_string($con,$_POST["comentario"]);
$cantidad = mysqli_real_escape_string($con,$_POST["cantidad"]);
$fecha = mysqli_real_escape_string($con,$_POST["fecha"]);

$precio = mysqli_real_escape_string($con,$_POST["precio"]);


 
$sql = "INSERT INTO articulo values (NULL,'$TArticulo','$NArticulo','$foto','$comentario',$cantidad,'$fecha',$precio)";



mysqli_close($con);
 
?>