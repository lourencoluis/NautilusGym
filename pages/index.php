<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/index.css">
    <title>Document</title>
</head>
<body>
    <?php
    require("../database/sec.php");
    ?>
    <nav>
    <div class="logo">
            <img src="" alt="">
        </div>
        <ul class="menu">
            <?php
                require("../database/level.php");
            ?>
            <li><a href='../pages/login.php'><input type='button' value='Sair'></a></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
        <div class="user">
            <h1>
            <?php
                @session_start;
                echo "Olá, ";
                echo $_SESSION['nome'];
            ?>
            </h1>
            <img src="<?php 
            @session_start;
            if ($_SESSION['logado'] == true) {
                
                echo $_SESSION['foto'];
            };


            
            ?>" alt="">
        </div>
    </nav>
</body>
</html>