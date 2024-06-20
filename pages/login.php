<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="../style/login.css">
    <title>Login • Yasu Gym</title>
</head>
<body>
    
<nav>
    <div class="logo">
        <a href="../pages/home.php">
            <img src="../images_page/logo.png" alt="">
        </a>
    </div>
        <ul class="menu">
            <li class="um"><i class="fa-solid fa-newspaper"></i><a href="">Sobre Nós</a></li>
            <li class="dois"><i class="fa-solid fa-map-location-dot"></i><a href="../pages/unidades.php">Unidades</a></li>
            <li class="tres"><i class="fa-solid fa-bag-shopping"></i><a href="..pages/produtos.php">Produtos</a></li>
            <li class="quatro"><i class="fa-solid fa-dumbbell"></i><a href="../pages/modalidades.php">Modalidades</a></li>
            <li><a href="../pages/signin.php">Cadastrar-se</a></li>
            <!-- <li><a href="">Login</a></li> -->
        </ul>
        <div class="user">
            <img src="../images_page/user.png" alt="">
        </div>
        
</nav>
    <main>
        <div class="container">
            <div class="banner">
                <h1>Yasuo Gym</h1>
            </div>
            <div class="login">
            <form action="../database/login.act.php" method="post" enctype="multipart/form-data">
                    <div class="title"><h1>Entre</h1></div>
                    <div class="principal">

                        <label for="email">Email:</label>
                        <input type="email" name="email">

                        <label for="senha">Senha:</label>
                        <input type="password" name="senha" id="senha" onkeyup="VerificarSenhas(senha.value,senha2.value)" require autocomplete="off">

                    </div>
                    <div class="rodape">
                        <input type="submit" value="Entrar" class="btn">
                        <a href="../pages/signin.php"><p>Nâo possui conta? </p> <h3>Cadastre-se</h3></a>
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


</body>
</html>