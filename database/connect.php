<?php

    if(@!$con = mysqli_connect('localhost','root','','bd_clientes')){
        echo "Erro ao se conectar na base de dados!";
    }
    mysqli_query($con, "SET NAMES utf8");