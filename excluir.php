<html>
<head>
	<title>Curso do Professor Israel</title>
	<meta charset="utf-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

	<link rel=”stylesheet” href=”https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css” integrity=”sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB” crossorigin=”anonymous”>

	<?php
	$host  = "localhost:3306";
	$user  = "root";
	$pass  = "";
  $base  = "pw2";
	$con   = mysqli_connect($host, $user, $pass, $base);   
	mysqli_close($con);
	?>
</head>
<body>
<div style="   background-image: url('texture.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
    width: 100%;
    height: 100%;">

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="vconect.php"><img src="linux.png" width="30" height="30" alt="pinguim"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="cadastrar.php">Cadastrar novo aluno</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="album.php">Galeria</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Acesso aos Professores
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="exibe.php">Exibir dados dos Alunos</a></li>
            <li><a class="dropdown-item" href="alterar.php">Alterar dados</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="excluir.php">Excluir dados</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true"><b>Porta Aberta Para o Mercado de Trabalho</b></a>
        </li>
      </ul>
      <form action="busca_aluno.php" method="POST">
        <input size="15"  name="RA" placeholder="Digite o RA">
        <button class="btn btn-outline-success" type="submit" value="Consultar">Pesquisar</button>
      </form>
    </div>
  </div>
</nav>

  
<?php
	$host  = "localhost:3306";
	$user  = "root";
	$pass  = "";
    $base  = "pw2";
	$con   = mysqli_connect($host, $user, $pass, $base);
	$res = mysqli_query($con,"select * from tb_aluno"); 
	/*Executa o comando SQL, no caso para pegar todos os usuarios
	do sistema e retorna o valor da consulta em uma variavel ($res)  */
echo "<table border=3px><tr><td>RA do Aluno</td><td>Nome do Aluno</td><td>Nota 1</td><td>Nota 2</td><td>Nota 3</td><td>Nota 4</td><td>Faltas</td><td>Média</td></tr>";
/*Enquanto houver dados na tabela para serem mostrados será executado tudo que esta dentro do while */
while($escrever=mysqli_fetch_array($res)){
/*Escreve cada linha da tabela*/
echo "<tr><td>" . $escrever['RA'] . "</td><td>" . $escrever['nome'] . "</td><td>" . $escrever['nota1'] . "</td><td>" . $escrever['nota2'] . "</td><td>" . $escrever['nota3'] . "</td><td>" . $escrever['nota4'] . "</td><td>" . $escrever['Faltas'] . "</td><td>" . $escrever['media'] . "</td></tr>";
}/*Fim do while*/

echo "</table>"; /*fecha a tabela apos termino de impressão das linhas*/

echo "</br></br>";



mysqli_close($con);
?>

<form action="valida_exclusao.php" method="POST">
	<fieldset>
	<table>
	   <tr>
	     <td> Informe o RA do aluno que deseja excluir: </td>
	     <td><input size="15" name="RA"></td>
	  </tr>
	  <tr>
	     <td colspan=2><input type="SUBMIT"  value="Confirmar exclusão"></td>
	  </tr>
	</table>
	</fieldset> 
</form>
 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src=”https://code.jquery.com/jquery-3.3.1.slim.min.js” integrity=”sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo” crossorigin=”anonymous”></script>
<script src=”https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js” integrity=”sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49″ crossorigin=”anonymous”></script>
<script src=”https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js” integrity=”sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T” crossorigin=”anonymous”></script>
</body>
</html>



 
 

 




	  