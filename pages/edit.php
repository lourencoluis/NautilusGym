<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <link rel="stylesheet" href="../style/edit.css">
    <title>Meu Perfil • Yasuo Gym</title>
</head>
<body>
        <?php
            require("../database/sec.php");
            require("../database/connect.php");

            $codigo = $_GET['codigo'];
            $cod = mysqli_query($con, "SELECT * FROM `tb_users` WHERE `Coduser` = '$codigo'");
            $pessoa = mysqli_fetch_assoc($cod);

            if ($_SESSION['logado'] != true) {
                header("Location: ../login.php");
                exit();
            }
        ?>
    <nav>
    <div class="logo">
        <a href="../pages/index.php">
            <img src="../images_page/logo.png" alt="">
        </a>
    </div>
        <ul class="menu">
            <li class="um"><i class="fa-solid fa-newspaper"></i><a href="">Sobre Nós</a></li>
            <li class="dois"><i class="fa-solid fa-map-location-dot"></i><a href="../pages/unidades.php">Unidades</a></li>
            <li class="tres"><i class="fa-solid fa-bag-shopping"></i><a href="../pages/produtos.php">Produtos</a></li>
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
            <img src="<?php 
            @session_start();
            if ($_SESSION['logado'] == true) {
                
                echo $_SESSION['foto'];
            };


            
            ?>" alt="">
        </div>
    </nav>
        <div class="tudo">
            <form action="../database/edit.act.php" method="post" enctype="multipart/form-data" class="conteudo">
            <input type="hidden" name="codigo" value="<?php echo $pessoa['Coduser']; ?>">
                <div class="divisao1">
                    <div class="foto">
                        <div class="fotoUsuario">
                            <img src="<?php echo $pessoa['Foto']; ?>" alt="">
                        </div>
                        <input type="file" class="custom-file-input" name="foto" id="fileFoto" onchange="previewFile(this);">
                    </div>
                    <div class="conteudoDiv1">
                        <div class="planos">
                            <h1>Meu Plano</h1>
                        </div>
                    </div>
                </div>
                <div class="divisao2">
                    <div class="conteudoDiv2">
                        <div class="informacoes">
                            <div class="conteudoInformacoes">
                                <div class="coluna1">
                                    <label for="usuario">Nome:</label>
                                    <input type="text" name="nome" id="usuario" value="<?php echo $pessoa['Nome']; ?>">

                                    <label for="senha">Senha:</label>
                                    <input type="password" name="senha" id="senha" value="<?php echo $pessoa['Senha']; ?>">

                                    <label for="telefone">Telefone:</label>
                                    <input type="tel" name="telefone" id="telefone" value="<?php echo $pessoa['Telefone']; ?>">
                                </div>
                                <div class="coluna2">
                                    <label for="email">Email:</label>
                                    <input type="email" name="email" id="email" value="<?php echo $pessoa['Email']; ?>">

                                    <label for="cep">CEP:</label>
                                    <input type="text" name="cep" id="cep" value="<?php echo $pessoa['Cep']; ?>">

                                    <label for="data">Data de Nascimento:</label>
                                    <input type="date" name="data" value="<?php echo $pessoa['Data']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="salvar">
                            <button type="submit" class="btn">Salvar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    
        <footer class="footer">
        <div class="container2">
            <div class="col1">
                <a href="#" class="brand">Redes Sociais</a>
                <ul class="media-icons">
                    <li>
                        <a href="#"><i class="fab fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-steam"></i></a>
                    </li>
                </ul>
            </div>
            <div class="col2">
                <ul class="menu2">
                    <li>
                        <a href="#">inicio</a>
                    </li>
                    <li>
                        <a href="#">sobre</a>
                    </li>
                    <li>
                        <a href="#">contato</a>
                    </li>
                    <li>
                        <a href="#">blog</a>
                    </li>
                    <li>
                        <a href="#">serviços</a>
                    </li>
                </ul>
                <p class="info">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia ratione ea quo esse blanditiis et molestias error ad perferendis dignissimos, iste deserunt nobis aut cupiditate facere, reiciendis incidunt minus laudantium.
                </p>
                <p class="copy">
                 <strong>Copyright 2024 | Yasuo Gym - Todos os direitos Reservados</strong>
                </p>
            </div>
            <div class="col3">
                <p>Se inscreva para novidades</p>
                <form action="">
                    <div class="input-wrap">
                        <input type="text" name="" id="txt" placeholder="exemplo@gmail.com">
                        <button type="submit">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </div>
                </form>
                <ul class="services-icons">
                    <li>
                        <a href="#">
                            <i class="fab fa-cc-amazon-pay"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fab fa-cc-mastercard"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fab fa-cc-apple-pay"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fab fa-cc-stripe"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fab fa-cc-visa"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>


    <script src="../aps/cadgym.js"></script>

    
</body>
</html>