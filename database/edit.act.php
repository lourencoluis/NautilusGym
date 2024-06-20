<?php
session_start();
require('connect.php');

$destino = "location:../pages/user.php";
$codigo = $_POST['codigo'];

$nome = mysqli_real_escape_string($con, $_POST['nome']);
$senha = mysqli_real_escape_string($con, $_POST['senha']);
$telefone = mysqli_real_escape_string($con, $_POST['telefone']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$cep = mysqli_real_escape_string($con, $_POST['cep']);
$data = mysqli_real_escape_string($con, $_POST['data']);

$path = "";

        if (isset($_FILES['foto']) && $_FILES['foto']['size'] > 0) {
            $path = "fotosClientes/" . md5(time()) . ".jpg";
            move_uploaded_file($_FILES['foto']['tmp_name'], $path);
            $_SESSION['foto'] = $path;
        }

        if ($nome != "" && $telefone != "" && $data != "" && $email != "" && $cep != "") {
            $update_query = "UPDATE `tb_users` SET 
                `Nome` = '$nome',
                `Email` = '$email', 
                `Senha` = '$senha',
                `Data` = '$data',
                `Telefone` = '$telefone', 
                `Cep` = '$cep'";

            if ($path != "") {
                $update_query .= ", `Foto` = '$path'";
            }

            $update_query .= " WHERE `Coduser` = '$codigo'";

            if (mysqli_query($con, $update_query)) {
                $msg = "<p class=\"alerta green\">Registro alterado com sucesso!</p>";
            } else {
                $msg = "<p class=\"alerta red\">Erro ao alterar registro: " . mysqli_error($con) . "</p>";
                $destino = "location:../pages/edit.php?codigo=$codigo";
            }
        } else {
            $msg = "<p class=\"alerta red\">Erro ao alterar registro: Preencha todos os campos</p>";
        }

$_SESSION['msg'] = $msg;
header($destino);
?>
