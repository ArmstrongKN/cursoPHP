<html>
<head>
<title>Login e Senha</title>
<meta charset="utf-8"> 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel=”stylesheet” href=”https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css” integrity=”sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB” crossorigin=”anonymous”>
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
          <a class="nav-link active" aria-current="page" href="album.php">Galeria</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Projeto
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="https://www.udemy.com/course/curso-de-linux-completo-para-usuario-comum-ou-desenvolvedor/">Projeto Linux Udemy</a></li>
            <li><a class="dropdown-item" href="registrar.php">Registrar</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="home.php">Professor</a></li>
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



<center>
	<form method="POST">
		<fieldset>
			<table>
				<tr>
				   <td> Nome: </td>
				   <td><input size="15" name="login"></td>
				</tr>
				<tr>
			       <td> Senha: </td>
			       <td><input size="15" name="senha" type="password"></td>
			    </tr>
		    	<tr>
			       <td colspan=2><input type="submit" name="acao" value="Entrar"></td>
		    	</tr>
			</table>
		</fieldset>
	</form>
</center>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src=”https://code.jquery.com/jquery-3.3.1.slim.min.js” integrity=”sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo” crossorigin=”anonymous”></script>
<script src=”https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js” integrity=”sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49″ crossorigin=”anonymous”></script>
<script src=”https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js” integrity=”sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T” crossorigin=”anonymous”></script>

</body>
</html>








