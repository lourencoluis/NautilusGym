<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../libs/jquery.js"></script>
    <script src="../libs/Mask-Plugin/src/jquery.mask.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <link rel="stylesheet" href="../style/adm.css">
    <title>Document</title>
</head>
<body>
    <nav>
        <div class="logo">
            <a href="../pages/index.php">
                <img src="../images_page/logo.png" alt="">
            </a>
        </div>
        <ul class="menu">
            <li class="um"><i class="fa-solid fa-newspaper"></i><a href="">Sobre Nós</a></li>
            <li class="dois"><i class="fa-solid fa-map-location-dot"></i><a href="../pages/unidades.php">Unidades</a></li>
            <li class="tres"><i class="fa-solid fa-bag-shopping"></i><a href="..pages/produtos.php">Produtos</a></li>
            <li class="quatro"><i class="fa-solid fa-dumbbell"></i><a href="../pages/modalidades.php">Modalidades</a></li>
           
            <?php
                require("../database/level.php");
            ?>
            <li><a href='../pages/logoff.php'>Sair</a></li>
            

        </ul>
        <div class="user">
            <h1>
            <?php
                @session_start();
                echo "Olá, ";
                echo $_SESSION['nome'];
            ?>
            </h1>
            <a href="../pages/user.php"><img src="<?php 
            @session_start();
            if ($_SESSION['logado'] == true) {
                
                echo $_SESSION['foto'];
            };


            
            ?>" alt=""></a>
        </div>
    </nav>
    <main>
        <div class="container">
            <div class="banner">
                
            </div>
            <div class="login">
            <form action="../database/adm.act.php" method="post">
                    <div class="title"><h1>Crie sua Conta</h1></div>
                    <div class="principal">
                        <label for="usuario">Nome:</label>
                        <input type="text" name="usuario">

                        <label for="email">Email:</label>
                        <input type="email" name="email">

                        <label for="data">Data de Nascimento:</label>
                        <input type="date" name="data">

                        <label for="telefone">Telefone:</label>
                        <input type="tel" name="telefone" id="txtTelefone">

                        <label for="cpf">CPF:</label>
                        <input type="text" name="cpf" id="txtCpf">
                        
                    </div>
                    <div class="rodape">
                        <input type="submit" value="Criar Conta" class="btn">
                        
                        <?php
                            @session_start();
                            if (isset($_SESSION['msg'])) {
                                echo $_SESSION['msg'];
                                unset($_SESSION['msg']);
                            }
                        ?>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <footer>
    </footer>
    
    <script src="../aps/adm.js"></script>
</body>
</html>