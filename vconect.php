<meta charset="utf-8"> 
<div style="   background-image: url('OIP.jfif');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
    width: 100%;
    height: 100%;">
<?php

	$host  = "localhost:3306";
	$user  = "root";
	$pass  = "";
    $base  = "pw2";
	$con   = mysqli_connect($host, $user, $pass, $base);

echo "<br>";
echo "Conexao Ok";

mysqli_close($con);
?>




	  