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
<style>
    body {
        background: url(img/Lighthouse1.jpg);
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>

<body>
<nav class="navbar navbar-expand-lg navbar-dark p-3 bg-secondary" id="headerNav">
    <div class="container-fluid">
      <a class="navbar-brand d-block d-lg-none" href="#">
        <img src="img/lar-santa-terezinha-logo.jpg" height="80" />
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class=" collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav mx-auto ">
          <li class="nav-item">
            <a class="nav-link mx-2 active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-2" href="#">Products</a>
          </li>
          <li class="nav-item d-none d-lg-block">
            <a class="nav-link mx-2" href="#">
              <img src="img/lar-santa-terezinha-logo.jpg" height="80" />
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-2" href="#">Pricing</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link mx-2 dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Company
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="form_update_usuario.php">Alterar Senha</a></li>
              <li><a class="dropdown-item" href="listar_idoso_usuario.php"></a>Consultar Idoso</li>
              <li><a class="dropdown-item" href="logoff.php">Encerrar</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
    <center>
        <h1><strong>USUARIO <?php echo $_SESSION['nome'];?> ACESSOU COM SUCESSO.</strong></h1>
        <br><br><br>
        <h1><strong>Bem vindo <?php echo $_SESSION['nome'];?>!</strong></h1>
        <br><br><br>
        <h1><strong>Email: <?php echo $_SESSION['email'];?>!</strong></h1>

    </center>

    <br><br><br>

    <div class="container">
        <div class="row">
            <div class="col-5"></div>
            <center>
                <div class="col-2 border border-danger border-2">
                    <a href="index.php">Voltar</a>
                </div>
            </center>
            <div class="col-5"></div>
        </div>
        <script src="js/bootstrap.min.js"></script>
</body>

</html>