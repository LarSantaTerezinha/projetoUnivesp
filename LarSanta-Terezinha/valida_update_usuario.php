<?php
include 'conexao.php';
$id = $_GET['id'];//pegar pelo nome se nao conseguir pelo id

$sql = "SELECT * FROM usuario WHERE usu_id = ".$id.";";
$result = mysqli_query($con, $sql) or die('Erro ao retornar os dados');

while($res = mysqli_fetch_array($result)){

    $id = $res['usu_id'];
    $senha = $res['usu_senha'];
    $email = $res['usu_email'];
    $nome = $res['usu_nome'];
}  
mysqli_close($con);

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualiza Vinho</title>
</head>
<link href="css/bootstrap.min.css" rel="stylesheet">
<body>
    <center><h2>Atualizar Vinho</h2></center>
    <center>
    <form method="POST" action="valida_update_vinho.php" name="atualiza">
        <input type="hidden" name="id" size="30" required value="<?php echo $id;?>">
        <br><br><br>
        <label>Nome:&nbsp;</label><input type="text" name="nome" size="50" required value="<?php echo $nome;?>">
        <br><br>
        <label>Ano:</label><input type="text" name="ano" size="50" required value="<?php echo $ano;?>">
        <br><br>
        <label>Cor:</label><input type="text" name="cor" size="50" required value="<?php echo $cor;?>">
        <br><br>
        <label>Grau:</label><input type="text" name="grau" size="50" required value="<?php echo $grau;?>">
        <br><br>
        <label>Preço:</label><input type="text" name="preco" size="50" required value="<?php echo $preco;?>">
        <br><br>
        <!-- fazer o select q esta no celular -->
        <select name="produtor">
            <option value="" disable>Selecione o Produtor</option>
        <?php
        include "conexao.php";
        $sql = "SELECT * from produtor";
        $rs = mysqli_query($con, $sql) or die ("Erro no select da região");
        while($dados = mysqli_fetch_array($rs)){
            if($dados['pro_idProdutor'] == $fk){
                echo "<option value=".$dados['pro_idProdutor']." selected>".$dados['pro_nome']."</option>";
            } else {
                echo "<option value=".$dados['pro_idProdutor'].">".$dados['pro_nome']."</option>";
            }
        }
        ?>
        </select>
        <br><br>
        <input type="submit" value="Atualizar" name="atualizar" id="atualizar">
        <input type="reset" name="limpar" value="Limpar">
        <br><br>
    </form>
    </center>
    
    
    <script src="js/bootstrap.min.js"></script>
</body>
</html>