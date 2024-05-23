<?php
extract($_POST);
require('connect.php');

@session_start();
$msg = "";
$destino = "location:login.php";
$busca = mysqli_query($con,"Select `email` from `tb_users` where `Email` = '$email'");

if($busca->num_rows == 0){
    if ($senha === $senha2) {
        $pass = md5($senha);
    } else {

        $senha = "";
    }
    if ($senha != "") {

        if (mysqli_query($con, "INSERT INTO `tb_users` (`Coduser`, `Nome`, `Email`, `Senha`, `Data`, `Telefone`, `Cep`, `Foto`, `nivel`) 
        VALUES (NULL, '$usuario', '$email', '$pass', '$data', '$telefone', '$cep', 'https://api.dicebear.com/8.x/initials/svg?seed=$usuario', '1');	")) {
            $msg = "<p>Registro Criado com sucesso!</p>";
            $destino = "location:../pages/login.php";
        } else {
            $msg = "<p>Erro ao gravar registro: " . $con->error . "</p>";
            $destino = "location:../pages/singin.php";
        }
    } else {
        $msg = "<p>Campo senha vazio!</p>";
        $destino = "location:../pages/singin.php";
    }
}else{
    $msg = "<p>Email já ultilizado!</p>";
    $destino = "location:../pages/singin.php";
}

$_SESSION['msg'] = $msg;
header($destino);
