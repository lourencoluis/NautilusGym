<?php

@session_start();

$msg = "";
$destino = "location:../pages/index.php";
require('connect.php');

if (isset($_FILES['foto1']) && isset($_FILES['foto2'])) {
    $foto1 = $_FILES['foto1'];
    $foto2 = $_FILES['foto2'];

    $path1 = "../fotoAcademias/" . md5(time() . rand(0, 9999)) . ".jpg";
    $path2 = "../fotoAcademias/" . md5(time() . rand(0, 9999)) . ".jpg";

    if (move_uploaded_file($foto1['tmp_name'], $path1) && move_uploaded_file($foto2['tmp_name'], $path2)) {
        $nomeGym = $_POST['nomeGym'];
        $enderecoGym = $_POST['enderecoGym'];
        $telefoneGym = $_POST['telefoneGym'];
        $modalidade1 = $_POST['modalidade1'];
        $modalidade2 = $_POST['modalidade2'];
        $modalidade3 = $_POST['modalidade3'];
        $modalidade4 = $_POST['modalidade4'];
        $modalidade5 = $_POST['modalidade5'];

        $query = "INSERT INTO `tb_academias` (`codigo`, `nome`, `endereco`, `telefone`, `foto1`, `foto2`, `modalidade1`, `modalidade2`, `modalidade3`, `modalidade4`, `modalidade5`) 
                  VALUES (NULL, '$nomeGym', '$enderecoGym', '$telefoneGym', '$path1', '$path2', '$modalidade1', '$modalidade2', '$modalidade3', '$modalidade4', '$modalidade5')";

        if (mysqli_query($con, $query)) {
            $msg = "<p class=sucesso>Academia Cadastrada Com Sucesso!!</p>";
            $destino = "location:../pages/unidades.php";
        } else {
            $msg = "<p class=erro>Erro ao Cadastrar Academia!</p>";
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
