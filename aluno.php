<meta charset="utf-8"> 
<?php
	$host  = "localhost:3306";
	$user  = "root";
	$pass  = "";
    $base  = "pw2";
	$con   = mysqli_connect($host, $user, $pass, $base);   


mysqli_close($con);
?>

<html>
<body>
<div style="   background-image: url('OIP.jfif');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
    width: 100%;
    height: 100%;">
<form action="busca_aluno.php" method="POST">
		<fieldset>
		<table>
		<tr>
		<td> Informe o RA do aluno que deseja consultar: </td>
		<td><input size="15" name="RA"></td>
		</tr>
		<tr>
		<td colspan=2><input type="SUBMIT"  value="Consultar"></td>
		</tr>
		</table>
		</fieldset>
</form>
</body>
</html>
