<?php
extract($_POST);
require('connect.php');

@session_start();
$msg = "";
$destino = "../pages/login.php";
$busca = mysqli_query($con,"Select `email` from `tb_users` where `Email` = '$email'");

if ($busca->num_rows == 0) {
    if ($senha === $senha2) {
        $senha = md5($senha);
    } else {
        $senha = "";
        $msg = "<p class=sucesso>Senhas Divergentes!</p>";
    }

    if ($senha != "") {
        $query = "INSERT INTO `tb_users` (`Coduser`, `Nome`, `Email`, `Senha`, `Data`, `Telefone`, `Cep`, `Foto`, `nivel`, `Plano`) 
                  VALUES (NULL, '$usuario', '$email', '$senha', '$data', '$telefone', '$cep', 'https://api.dicebear.com/8.x/initials/svg?seed=$usuario', '1','0')";

        if (mysqli_query($con, $query)) {
            $_SESSION['msg'] = "<p class=sucesso>Registro Criado com sucesso!</p>";
            header("Location: ../pages/user.php");
            exit();
        } else {
            $_SESSION['msg'] = "<p class=erro>Erro ao gravar registro: " . $con->error . "</p>";
            header("Location: ../pages/signin.php");
            exit();
        }
    } else {
        $_SESSION['msg'] = "<p class=erro>Campo senha Inválido!</p>";
        header("Location: ../pages/signin.php");
        exit();
    }
} else {
    $_SESSION['msg'] = "<p class=erro>Email já utilizado!</p>";
    header("Location: ../pages/signin.php");
    exit();
}
?>
