<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="../libs/jquery.js"></script>
    <script src="../libs/Mask-Plugin/src/jquery.mask.js"></script>
    <link rel="stylesheet" href="../style/signin.css">
    <title>Document</title>
</head>
<body>
<nav>
    <div class="logo">
            <img src="" alt="">
        </div>
        <ul class="menu">
            <li><a href="">Sobre Nós</a></li>
            <li><a href="">Unidades</a></li>
            <li><a href="">Produtos</a></li>
            <!-- <li><a href="">Cadastrar-se</a></li> -->
            <li><a href="../pages/login.php">Login</a></li>
        </ul>
</nav>
    <main>
    <div class="container">
            <div class="banner">
                
            </div>
            <div class="login">
            <form action="../database/signin.act.php" method="post">
                    <div class="title"><h1>Crie sua Conta</h1></div>
                    <div class="principal">
                        <div class="coluna1">
                        <label for="usuario">Nome:</label>
                        <input type="text" name="usuario">

                        <label for="senha">Senha:</label>
                        <input type="password" name="senha" id="senha" onkeyup="VerificarSenhas(senha.value,senha2.value)" require autocomplete="off">

                        <label for="telefone">Telefone:</label>
                        <input type="tel" name="telefone" id="txtTelefone">

                        <label for="data">Data de Nascimento:</label>
                        <input type="date" name="data">
                    </div>
                    
                    <div class="coluna2">
                        <label for="email">Email:</label>
                        <input type="email" name="email">
                        
                        <label for="senha2">Confirme a senha:</label>
                        <input type="password" name="senha2" id="senha2" onkeyup="VerificarSenhas(senha.value,senha2.value)" require>
                        
                        <label for="cep">CEP:</label>
                        <input type="text" name="cep" id="txtCep">

                            <div class="rodape">
                            <input type="submit" value="Criar Conta" class="btn">
                            <a href="../pages/login.php"><p>Possui conta? </p><h3>Entre</h3></a>
                        <?php
                            @session_start();
                            if (isset($_SESSION['msg'])) {
                                echo $_SESSION['msg'];
                                unset($_SESSION['msg']);
                            }
                        ?>
                </div>

        </div>

    </div>
                </form>
            </div>
        </div>
    </main>
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
                <ul class="menu">
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
                 <strong>Copyright 2023 | Game Vortex - Todos os direitos Reservados</strong>
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

    <script src="../aps/signin.js"></script>
</body>
</html>