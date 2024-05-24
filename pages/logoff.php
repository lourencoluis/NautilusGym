<?php
    @session_start();
        $_SESSION['logado'] = false;
        unset( $_SESSION['logado']);
        unset( $_SESSION['nome']);
        unset( $_SESSION['codigo']);
        unset( $_SESSION['foto']);
        unset( $_SESSION['cep']);
        unset($_SESSION['nivel']);  
        session_destroy();

        $destino = "location:../pages/login.php";
        header($destino);
    
