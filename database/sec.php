<?php
    @session_start();

    if(!isset($_SESSION['logado']) || $_SESSION['logado'] != true){
        header("location:../pages/login.php");
        $_SESSION['logado'] = false;
    }


