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
    <br>
    <div class="container">
        <div class="row">
            <div class="col-2">
                <!-- <center>
                    <br>
                    <h2>Cadastro de Usuario</h2>
                    <br><br>
                    <form method="POST" action="cadastrar_usuario.php">

                        <label for="email">Nome:</label>
                        <input type="text" name="nome" id="nome" required>
                        <br><br><br>
                        <label for="email">Email:</label>
                        <input type="text" name="email" id="email" required>
                        <br><br><br>
                        <label for="senha">Senha:</label>
                        <input type="password" name="senha" id="senha" required>
                        <br><br><br>
                        <input type="submit" value="Cadastrar" name="cadastrar" id="cadastrar">
                        <br><br>
                    </form>
                </center> -->
            </div>
            <div class="col-8 border border-success border-2 rounded">
                <center>
                    <br>
                    <h2>Cadastro de Usuario</h2>
                    <br><br>
                    <form method="POST" action="valida_cadastrar_usuario.php">

                        <label for="email">Nome:</label>
                        <input type="text" size=60 name="nome" id="nome">
                        <br><br><br>
                        <label for="email">Email:</label>
                        <input type="text" size=60 name="email" id="email">
                        <br><br><br>
                        <label for="senha">Senha:</label>
                        <input type="password" size=60 name="senha" id="senha" required>
                        <br><br><br>
                        <input type="submit" value="Cadastrar" name="cadastrar" id="cadastrar">
                        <br><br>
                    </form>
                </center>
            </div>
            <div class="col-2">
                <!-- <center>
                    <br>
                    <h2>Cadastro de Usuario</h2>
                    <br><br>
                    <form method="POST" action="cadastrar_usuario.php">

                        <label for="email">Nome:</label>
                        <input type="text" name="nome" id="nome" required>
                        <br><br><br>
                        <label for="email">Email:</label>
                        <input type="text" name="email" id="email" required>
                        <br><br><br>
                        <label for="senha">Senha:</label>
                        <input type="password" name="senha" id="senha" required>
                        <br><br><br>
                        <input type="submit" value="Cadastrar" name="cadastrar" id="cadastrar">
                        <br><br>
                    </form>
                </center> -->
            </div>
        </div>
        <br>
        <!-- <div class="row">
            <center>
                <div class="col-12 border border-dark border-1 rounded">
                    <h5>Para cadastrar idoso use o link abaixo</h5>
                    <a href="form_cadastro_idoso.php">Acesse</a>
                </div>
            </center>
        </div> -->
    </div>
    <br>
    <br>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-5"></div>
            <center>
            <div class="col-2 border border-warning border-1">
                <a href="index.php">Voltar</a>
            </div>
            </center>
            <div class="col-5"></div>
        </div>
        <script src="js/validaLoginForm.js"></script>
        <script src="js/bootstrap.min.js"></script>
</body>

</html>