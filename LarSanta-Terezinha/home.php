<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("location: index.php");
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
<style>
    body {
        background: url(img/Lighthouse.jpg);
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>

<body>
    <center>
        <h1><strong>USUARIO ACESSOU COM SUCESSO</strong></h1>
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