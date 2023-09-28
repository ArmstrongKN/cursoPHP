<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel=”stylesheet” href=”https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css” integrity=”sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB” crossorigin=”anonymous”>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
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
            <li><a class="dropdown-item" href="login.php">Professor</a></li>
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
 
<div class="card-group">
  <div class="card">
    <img src="P_1.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Provas</h5>
      <p class="card-text">Concentração total nas provas.</p>
      <p class="card-text"><small class="text-body-secondary">Ultima atualização à 3 dias</small></p>
    </div>
  </div>
  <div class="card">
    <img src="P_2.jpeg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Segundão</h5>
      <p class="card-text">Alunos do segundo semestre.</p>
      <p class="card-text"><small class="text-body-secondary">Ultima atualização à 3 dias</small></p>
    </div>
  </div>
  <div class="card">
    <img src="P_3.jpeg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">novos calouros</h5>
      <p class="card-text">Alunos da nova turma de Julho.</p>
      <p class="card-text"><small class="text-body-secondary">Ultima atualização à 3 dias</small></p>
    </div>
  </div>
</div>
<div class="card-group">
  <div class="card">
    <img src="P_4.jpeg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Grupo de Leitura</h5>
      <p class="card-text">Grupo de Jovens na leitura.</p>
      <p class="card-text"><small class="text-body-secondary">Ultima atualização à 3 dias</small></p>
    </div>
  </div>
  <div class="card">
    <img src="P_5.jpeg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">TCC</h5>
      <p class="card-text">TCC Irrigação através de arduino.</p>
      <p class="card-text"><small class="text-body-secondary">Ultima atualização à 3 dias</small></p>
    </div>
  </div>
  <div class="card">
    <img src="P_6.jpeg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">PD 2030</h5>
      <p class="card-text">Premio Desafio 2030.</p>
      <p class="card-text"><small class="text-body-secondary">Ultima atualização à 3 dias</small></p>
    </div>
  </div>
</div>
 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src=”https://code.jquery.com/jquery-3.3.1.slim.min.js” integrity=”sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo” crossorigin=”anonymous”></script>
<script src=”https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js” integrity=”sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49″ crossorigin=”anonymous”></script>
<script src=”https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js” integrity=”sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T” crossorigin=”anonymous”></script>

</body>
</html>