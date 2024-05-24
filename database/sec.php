<?php
    @session_start();

    if(!isset($_SESSION['logado']) || $_SESSION['logado'] != true){
        header("location:../pages/index.php");
        $_SESSION['logado'] = false;
    }


