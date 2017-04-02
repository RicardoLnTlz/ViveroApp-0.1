<?php
 
$server = "93.188.160.233";
$username = "u547675350_root";
$password = "12345678";
$database = "u547675350_test";
 
$con = mysqli_connect($server, $username, $password) or die ("No se conecto: " . mysqli_error());
 
mysqli_select_db($con,$database);
 
$usu = mysqli_real_escape_string($con,$_POST["usu"]);
$pass = mysqli_real_escape_string($con,$_POST["pass"]);
 
$sql = "SELECT * FROM usuario WHERE user='$usu' AND pass='$pass'";
 
if ($resultado = mysqli_query($sql, $con)){

	while($row=mysqli_fetch_array($resultado)){
		if($row['rol']=="admin"){
			if (mysqli_num_rows($resultado) > 0){
	        echo '1';
	    	}
		}
		
		if($row['rol']=="user"){
			if (mysqli_num_rows($resultado) > 0){
	        echo '2';
	    	}
		}

	}
    
}
else{
    echo false;
}
mysqli_close($con);
 
?>