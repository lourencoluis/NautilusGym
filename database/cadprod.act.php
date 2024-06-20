<?php

@session_start();

$msg = "";
$destino = "location:../pages/index.php";
require('connect.php');

if (isset($_FILES['foto1']) && isset($_FILES['foto2'])) {
    $foto1 = $_FILES['foto1'];
    $foto2 = $_FILES['foto2'];

    $path1 = "../fotoProdutos/" . md5(time() . rand(0, 9999)) . ".jpg";
    $path2 = "../fotoProdutos/" . md5(time() . rand(0, 9999)) . ".jpg";

    if (move_uploaded_file($foto1['tmp_name'], $path1) && move_uploaded_file($foto2['tmp_name'], $path2)) {
        $nomeProduto = $_POST['nomeProduto'];
        $precoProduto = $_POST['precoProduto'];
        $quantidade = $_POST['quantidade'];
        $categoria = $_POST['categoria'];
        $descricao = $_POST['descricao'];

        $query = "INSERT INTO `tb_produtos` (`codigo`, `nome`, `preco`, `categoria`, `quantidade`, `descricao`, `foto1`, `foto2`) 
        VALUES (NULL, '$nomeProduto', '$precoProduto', '$categoria', '$quantidade', '$descricao', '$path1', '$path2');";

        if (mysqli_query($con, $query)) {
            $msg = "<p class=sucesso>Academia Cadastrada Com Sucesso!!</p>";
            $destino = "location:../pages/produtos.php";
        } else {
            $msg = "<p class=erro>Erro ao Cadastrar Produto!</p>";
        }
    } else {
        $msg = "<p class=erro>Erro ao mover os arquivos enviados!</p>";
    }
} else {
    $msg = "<p class=erro>Erro: Arquivos não foram enviados!</p>";
}

$_SESSION['msg'] = $msg;
header($destino);

?>
