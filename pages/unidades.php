<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="../style/unidades.css">
    <title>Unidades • Yasuo Gym</title>
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
            <a href="../pages/user.php"><img src="<?php 
            @session_start();
            if ($_SESSION['logado'] == true) {
                
                echo $_SESSION['foto'];
            };  
            ?>" alt=""></a>
        </div>
    </nav>
    <main>
        <div class="cards">
            <?php
                require('../database/connect.php');
                    $unidades = mysqli_query($con,"SELECT * FROM `tb_academias`");
                    while( $unidade = mysqli_fetch_assoc($unidades)){

                        if (isset($unidade['codigo'])) {
                            $codigo = $unidade['codigo'];
                        
                            echo "<div class='card'>";
                            echo "<div class='imageCard'>";
                            echo "<img id='foto1-$codigo' src='$unidade[foto1]'>";
                            echo "<img id='foto2-$codigo' src='$unidade[foto2]' style='display:none'>";
                            echo "<button onclick='trocarFoto($codigo)'>Trocar Foto</button>";
                            echo "</div>";
                            echo "<div class='catego'>";
                            echo "<h3>$unidade[nome]</h3>";
                            echo "</div>";
                            echo "<div class='cads'>";
                            echo "<h1>Endereço: $unidade[endereco]</h1>";
                            echo "<h1>Telefone: $unidade[telefone]</h1>";
                            echo "<h3>Modalidade: $unidade[modalidade1]</h3>";
                            echo "<h3>Modalidade: $unidade[modalidade2]</h3>";
                            echo "<h3>Modalidade: $unidade[modalidade3]</h3>";
                            echo "<h3>Modalidade: $unidade[modalidade4]</h3>";
                            echo "<h3>Modalidade: $unidade[modalidade5]</h3>";
                            echo "</div>";
                            echo "<div class='desc'>";
                            echo "</div>";
                            echo "<div class='botoesCard'>";
                            
                            
                            echo "</div>";
                            echo "</div>";
                        } else {
                            // Caso 'id' não esteja definido, exiba uma mensagem de erro ou ignore o card
                            echo "<p>Erro: ID do produto não encontrado.</p>";
                        }
                        
                    }
            ?>
        </div>
            <script>
                function trocarFoto(id) {
                    var foto1 = document.getElementById('foto1-' + id);
                    var foto2 = document.getElementById('foto2-' + id);

                    if (foto1.style.display === 'none') {
                        foto1.style.display = 'inline-block';
                        foto2.style.display = 'none';
                    } else {
                        foto1.style.display = 'none';
                        foto2.style.display = 'inline-block';
                    }
                }
            </script>
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