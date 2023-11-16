<?php
session_start();
if (!isset($_SESSION['email'])) {
  header("location: index.php");
}
?>
<?php
include 'conexao.php';
$email = $_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lar Santa Terezinha</title>
</head>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="icon" type="image/png" href="img/html.png" />

<style>
  body {
    background: url(img/luxa.org-opacity-changed-lar-santa-terezinha-logo.jpg);
    background-repeat: no-repeat;
    background-size: cover;
  }
</style>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="sobre.php">Informações</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="historia.html">História</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-2" href="form_agenda.php">Agenda</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Serviços
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="local.php">Localização</a></li>
              <li><a class="dropdown-item" href="form_update_usuario.php">Alterar Senha</a></li>
              <li><a class="dropdown-item" href="listar_idoso_usuario.php">Consultar Idoso</a></li>
              <li><a class="dropdown-item" href="logoff.php">Encerrar</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <center>
    <h1><strong>Bem vindo(a) <?php echo $_SESSION['nome']; ?>!</strong></h1>
  </center>

  <br><br>
  <center>
    <font face="Calibri" color="green" size="7">
      <p>Utilize os espaços abaixo para as ações necessárias do site.</p>
    </font>
  </center>
  <br><br>

  <div class="container">
    <div class="row">
      <div class="col-1">

      </div>
      <div class="col-4 border border-1">
        <center>
          <h3>Cadastro de Idoso</h3>
          <div class="card" style="width: 18rem;">
            <img src="img/idosos-abracados-sorrindo.webp" class="card-img-top" alt="Sorrindo">
            <div class="card-body">
              <h5 class="card-title">Cadastro</h5>
              <p class="card-text">Cadastre seu idoso de referência aqui para consulta e ações do site!</p>
              <a href="form-cadastro-idoso.php" class="btn btn-primary">Cadastre!</a>
            </div>
          </div>
        </center>
      </div>
      <div class="col-2">

      </div>
      <div class="col-4 border border-1">
        <center>
          <h3>Calendário</h3>
          <div class="card" style="width: 18rem;">
            <img src="img/agenda-permanente-personalizada-cuidador-agenda-personalizada.jpg" class="card-img-top" alt="Calendário">
            <div class="card-body">
              <h5 class="card-title">Agenda</h5>
              <p class="card-text">Verifique as ações necessárias para o cuidado com os idosos!</p>
              <a href="form_agenda.php" class="btn btn-primary">Agenda!</a>
            </div>
          </div>
        </center>
      </div>
      <div class="col-1">

      </div>

    </div>


  </div>
  <br><br><br><br>
  <div class="container">
    <div class="row">
      <div class="col-5"></div>
      <center>
        <div class="col-2 border border-1">
          <a href="index.php">Voltar</a>
        </div>
      </center>
      <div class="col-5"></div>
    </div>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>