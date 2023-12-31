<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário cadastro usuario</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="img/html.png" />
    <script src="js/validaFormCadastro.js"></script>
</head>


<body>
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
    <br>
    <div class="container">
        <div class="row">
            <div class="col-2">

            </div>
            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 border border-success border-2 rounded">
            <!-- col-xs-6 col-sm-6 col-md-6 col-lg-6 border border-dark border-5 rounded -->
                <center>
                    <br>
                    <h2>Cadastro de Usuario</h2>
                    <br><br>
                    <form method="POST" action="valida_cadastrar_usuario.php">

                        <label for="email">Nome:</label>
                        <input type="text" name="nome" id="nome">
                        <br><br><br>
                        <label for="email">Email:</label>
                        <input type="text" name="email" id="email">
                        <br><br><br>
                        <label for="senha">Senha:</label>
                        <input type="password" name="senha" id="senha" required>
                        <br><br><br>
                        <input type="submit" value="Cadastrar" name="cadastrar" id="cadastrar">
                        <br><br>
                    </form>
                </center>
            </div>
            <div class="col-2">

            </div>
        </div>
        <br>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-5"></div>
            <center>
            <div class="col-2">
                <a href="index.php">Voltar</a>
            </div>
            </center>
            <div class="col-5"></div>
        </div>
    </div>
        <script src="js/bootstrap.min.js"></script>
</body>

</html>