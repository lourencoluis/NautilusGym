<?php
    @session_start();
    require('connect.php');
    extract($_POST);
    $msg = "";
    $destino = "";

    $cliente = mysqli_query($con, "Select * from `tb_users` where `email` = '$email'");

    if($cliente->num_rows == 1){
        $cliente = mysqli_fetch_assoc($cliente);
        $senha_digitada = md5($senha);


        if($senha_digitada == $cliente['Senha']){
            $_SESSION['logado'] = true;
            $_SESSION['nome'] = $cliente['Nome'];
            $_SESSION['codigo'] = $cliente['Coduser'];
            $_SESSION['foto'] = $cliente['Foto'];
            $_SESSION['cep'] = $cliente['Cep'];
            $_SESSION['nivel'] = $cliente['nivel'];
            $destino = "location:../pages/index.php";
        }
        else{
            $msg = "<p class=red>Usuário ou senha incorreto</p>";
            $destino = "location:../pages/login.php";
        }
    }
    else{
        $msg = "<p class=red>Falha ao iniciar a sessão</p>";
        $destino = "location:../pages/login.php";
    }
    
   header($destino);
   

    $_SESSION['msg'] = $msg;


