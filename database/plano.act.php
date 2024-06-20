<?php
session_start();
require('connect.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $plano = $_POST['plano'];

    $msg = "";
    $destino = "../pages/login.php";

    $planoID = 0; 
    if ($plano == "Plano Verão") {
        $planoID = 1;
    } elseif ($plano == "Plano Cariani") {
        $planoID = 2;
    } elseif ($plano == "Plano Mr. Olympia") {
        $planoID = 3;
    }

    $email = $_SESSION['email']; 
    if (mysqli_query($con, "UPDATE `tb_users` SET `Plano` = '$planoID' WHERE `Email` = '$email'")) {
        $_SESSION['msg'] = "<p class='sucesso'>Plano atualizado com sucesso!</p>";
        header("Location: ../pages/user.php");
        exit();
    } else {
        $_SESSION['msg'] = "<p class='erro'>Erro ao atualizar plano: " . $con->error . "</p>";
        header("Location: ../pages/index.php");
        exit();
    }
} else {
    header("Location: ../pages/login.php");
    exit();
}
?>

