<meta charset="utf-8"> 
<div style="   background-image: url('texture.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
    width: 100%;
    height: 100%;">
<?php

    $RA = $_POST['RA'];
	$host  = "localhost:3306";
	$user  = "root";
	$pass  = "";
    $base  = "pw2";
	$con   = mysqli_connect($host, $user, $pass, $base);
	
	
	/*delete seguido de from, indicando WHERE somente pelo codigo */
	$res = mysqli_query($con,"DELETE FROM tb_aluno WHERE RA='$RA';"); 
	echo ("Exclusão realizada com sucesso!");
	/*Executa o comando SQL, no caso para pegar todos os usuarios do sistema e retorna o valor da consulta em uma variavel ($res)  */
    
	
	$res2 = mysqli_query($con,"SELECT * FROM tb_aluno;");
echo "<table border=3px><tr><td>RA do Aluno</td><td>Nome do Aluno</td><td>nota 1</td><td>nota 2</td><td>nota 3</td><td>nota 4</td><td>Numero de faltas</td></tr>";

/*Enquanto houver dados na tabela para serem mostrados será executado tudo que esta dentro do while */
while($escrever=mysqli_fetch_array($res2)){

/*Escreve cada linha da tabela*/
echo "<table border=3px><tr><td>RA do Aluno</td><td>Nome do Aluno</td><td>nota 1</td><td>nota 2</td><td>nota 3</td><td>nota 4</td><td>Numero de faltas</td></tr>";

}/*Fim do while*/

echo "</table>"; /*fecha a tabela apos termino de impressão das linhas*/

echo "</br></br>";
mysqli_close($con);
?>
