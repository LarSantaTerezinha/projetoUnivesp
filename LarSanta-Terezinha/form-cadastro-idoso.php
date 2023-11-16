<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Cadastro Idoso</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="img/html.png" />
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
                
                    <br>
                    <center>
                    <h2>Cadastro de Idoso</h2>
                    </center>
                    <br><br>
                    <form method="POST" action="sucesso.php">

                        <label for="email">Nome:</label>
                        <input type="text" name="nome" id="nome" size="83">
                        <br><br><br>
                        <label for="email">Endereço:</label>
                        <input type="text" name="endereco" id="endereco" size="60">
                        <label for="email">Número:</label>
                        <input type="text" name="numero" id="numero" size="5">
                        <br><br><br>
                        <label for="senha">Bairro:</label>
                        <input type="text" name="bairro" id="bairro" size="43">
                        <label for="senha">Complemento:</label>
                        <input type="text" name="complemento" id="complemento">
                        <br><br><br>
                        <label for="senha">Cidade:</label>
                        <input type="text" name="cidade" id="cidade" size="45">
                        <label for="senha">Estado:</label>
                        <input type="text" name="estado" id="estado" size="8">
                        <br><br><br>
                        <label for="senha">Data Nascimento:</label>
                        <input type="text" name="nascimento" id="nascimento">
                        <br><br><br>
                        <label for="senha">CPF:</label>
                        <input type="text" name="cpf" id="cpf">
                        <br><br><br>
                        <label for="senha">Telefone:</label>
                        <input type="text" name="telefone" id="telefone">
                        <br><br>
                        <input type="submit" value="Cadastrar" name="cadastrar" id="cadastrar">
                        <br><br>
                    </form>
                
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