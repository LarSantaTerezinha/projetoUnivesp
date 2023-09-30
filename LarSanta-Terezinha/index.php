<?php
if (session_start()) {
  session_destroy();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lar Santa Terezinha</title>
</head>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="icon" type="image/png" href="img/html.png" />

<!--<style>
    body {
        /*width: 700px;*/
        height: 500px;
        /*background-image: linear-gradient(to right, rgba(255,0,0,0), rgba(255,0,0,34));*/
        background: rgb(120, 48, 160);
        /*rgb(120, 48, 160) rgb(131,58,180)*/
        background: linear-gradient(117deg, rgba(100, 28, 140, 1) 0%, rgba(233, 19, 19, 1) 0%, rgba(49, 222, 219, 1) 0%);
        /*background: linear-gradient(137deg, rgba(120,48,160,1) 0%, rgba(253,29,29,1) 0%, rgba(69,252,239,1) 0%);*/
    }
</style>-->
<style>
  body {
    background: url(img/lar-santa-terezinha5.jpeg);
    background-repeat: no-repeat;
    background-size: cover;
  }

  .paragrafo1 {
    color: #F4A460;
  }
</style>
<!-- https://antoniomedeiros.dev/blog/2015/07/05/bootstrap/ 
USAR AS REFERÊNCIAS QUE FOR PRECISO DESSE SITE ACIMA-->
<body>
  <h1><a href="https://www.youtube.com/watch?v=fRk207cQNXU">SENHA SEGURA PHP</a></h1>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">Informações</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="paroco.html">Pároco</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="historia.html">História</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="servicos.html">Serviços</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Externo
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#">Localização</a></li>
              <li><a class="dropdown-item" href="#">Conheça</a></li>
              <li><a class="dropdown-item" href="#">Informações legais (LGPD)</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  
  <center>
    <div class="container">
      <center>
        <br>
        <h1 class="paragrafo1"><strong>Santa Teresinha</strong></h1>
        <br>
      </center>
    </div>
    <!--agora colocar 2 colunas e a coluna a esquerda dividir em 2 partes -->
    <center>
      <div class="container">
        <div class="row">
          <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 border border-dark border-5 rounded">

            <h3 class="text-center">Informações da Paróquia</h3>
            <br>
            <a href="paroco.html">Pároco</a>
            <br>
            <a href="historia.html">História</a>
            <br>
            <a href="servicos.html">Serviços/Horários</a>
            <br>
            <a href="contato.html">Contato</a>
            <br>
          </div>
          <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 border border-dark border-5 rounded">

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border border-success border-4 rounded">

              <!--onsubmit="return validaLoginForm()-->
              <form id="loginForm" method="POST" action="valida_usuario.php">
                <legend class="text-center">Login</legend>
                <center>
                  <label for="Email">Email:</label>
                  <input type="text" name="email" id="email">
                  <br><br>
                  <label for="senha">Senha:</label>
                  <input type="password" name="senha" id="senha">
                  <br><br>
                  <input type="submit" value="Entrar" name="entrar" id="entrar">
                </center>
                <div class="container">
                  <div class="row">
                    <div class="col-12">
                      <br>
                      <a href="form_cadastro_usuario.php">Não é cadastrado? Clique aqui!</a>
                    </div>
                  </div>
                </div>
              </form>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border border-success border-4 rounded">

              <br>
              <h1 class="text-center"><strong>Pastoral</strong></h1>
              <h5 class="text-center"><strong>Missao</strong></h5>
              <h5 class="text-center"><strong>Valores</strong></h5>
              <h5 class="text-center"><strong>Visao</strong></h5>
              <h5 class="text-center"><strong>Contato</strong></h5>
            </div>
          </div>
        </div>
      </div>
    </center>
  </center>
  <script src="js/validaLoginForm.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>