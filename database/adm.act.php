<?php
extract($_POST);
require('connect.php');

@session_start();
$msg = "";
$destino = "location:../pages/login.php";
$busca = mysqli_query($con,"Select `email` from `tb_users` where `Email` = '$email'");

if($busca->num_rows == 0){
        $cpf = md5($cpf);

        if (mysqli_query($con, "INSERT INTO `tb_users` (`Coduser`, `Nome`, `Email`, `Senha`, `Data`, `Telefone`, `Cep`, `Foto`, `nivel`) 
        VALUES (NULL, '$usuario', '$email', '$cpf', '$data', '$telefone', '$cep', 'https://api.dicebear.com/8.x/initials/svg?seed=$usuario', '2');	")) {
            $msg = "<p>Registro Criado com sucesso!</p>";
            $destino = "location:../pages/login.php";
        } else {
            $msg = "<p>Erro ao gravar registro: " . $con->error . "</p>";
            $destino = "location:../pages/signin.php";
        }
}else {
    $msg = "<p>Email já ultilizado!</p>";
    $destino = "location:../pages/signin.php";
}

$_SESSION['msg'] = $msg;
header($destino);
