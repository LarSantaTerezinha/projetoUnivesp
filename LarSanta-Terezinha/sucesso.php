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

<style>
    body {
        background: url(img/luxa.org-opacity-changed-lar-santa-terezinha-logo.jpg);
        background-repeat: no-repeat;
        background-size: cover;
    }

    .paragrafo1 {
        color: #4B0082;
    }
</style>

<body>
    <br><br><br><br>
    <center>
        <h1>
            IDOSO CADASTRADO COM SUCESSO!
        </h1>
        <br><br><br>
        <center>
            <p>
            <h4>
                Clique no link abaixo para retornar!
            </h4>
            </p>
            <br><br>
            <a href="home.php">Voltar</a>
        </center>
    </center>


    <script src="js/validaLoginForm.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>