  <!-- 
  
    $servername = "localhost";
    $dbname = "bd_santaterezinha";
    $username = "root";
    $password = "root";

    //TENTATIVA COM PDO não acessou
    try {


        $bancodb = new pdo("mysql:host=$servername;db=$dbname", $username, $password);

        $bancodb->setAttribute(pdo::ATTR_ERRMODE, pdo::ERRMODE_EXCEPTION);

        echo "Conectado com sucesso!";
    } catch (PDOException $e) {
        echo "A sua conexão com o banco de dados falhou: " . $e->getMessage();
    }-->

<!-- vou usar mysqli por enquanto e depois ver o erro com pdo-->

<?php
$servidor = 'localhost';
$usuario = 'root';
$senha = 'root';
$banco = 'bd_santaterezinha';
$con = mysqli_connect($servidor, $usuario, $senha, $banco) or die('Erro na URL de conexão do banco de dados');
?>