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
<link rel="icon" type="image/png" href="img/html.png"/>
<style>
    body {
        /*width: 700px;*/
        height: 500px;
        /*background-image: linear-gradient(to right, rgba(255,0,0,0), rgba(255,0,0,34));*/
        background: rgb(120, 48, 160);
        /*rgb(120, 48, 160) rgb(131,58,180)*/
        background: linear-gradient(117deg, rgba(100, 28, 140, 1) 0%, rgba(233, 19, 19, 1) 0%, rgba(49, 222, 219, 1) 0%);
        /*background: linear-gradient(137deg, rgba(120,48,160,1) 0%, rgba(253,29,29,1) 0%, rgba(69,252,239,1) 0%);*/
    }
</style>
<!--<style>
    body {
        background: url(img/Lighthouse1.jpg);
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>-->

<body>
    <center>
        <div class="container">
            <center>
                <br>
                <h1 class="text-info">Lar Santa Teresinha</h1>
                <br>
            </center>
        </div>
        <!--agora colocar 2 colunas e a coluna a esquerda dividir em 2 partes -->
        <center>
            <div class="container">
                <div class="row">
                    <div class="col-6 border border-dark border-5">

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
                    <div class="col-6 border border-danger border-5">

                        <div class="col-12 border border-success border-4">


                            <form method="POST" action="valida_usuario.php">
                                <legend class="text-center">Login</legend>
                                <center>
                                    <label for="Email">Email:</label>
                                    <input type="text" name="email" id="email">
                                    <br><br><br>
                                    <label for="senha">Senha:</label>
                                    <input type="password" name="senha" id="senha">
                                    <br><br><br>
                                    <input type="submit" value="Entrar" name="entrar" id="entrar">
                                </center>
                            </form>

                        </div>
                        <div class="col-12 border border-dark border-4">

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
    <script src="js/bootstrap.min.js"></script>
</body>

</html>