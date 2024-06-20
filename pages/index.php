
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="../style/index.css">
    <title>Nos Conheça • Yasu Gym</title>
</head>
<body>
    <nav>
        <div class="logo">
            <a href="../pages/index.php">
            <img src="../images_page/logo.png" alt="">
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
        <div class="carrossel"></div>
        <div class="us">
            <div class="vazio"></div>
            <div class="text1">
                <p>
                    Yasuo Gym , a academia dos seus sonhos , corra para a mais proxima de sua casa
                </p>
                <div><a href="#">Saiba Mais <i class="fa-solid fa-arrow-right"></i></a></div>
            </div>
           
        </div>
        <div class="buttons">
        <li class="dois"><i class="fa-solid fa-map-location-dot"></i><a href="#place">Academias</a></li>
        <li class="tres"><i class="fa-solid fa-bag-shopping"></i><a href="#produto">Produtos</a></li>
        <li class="quatro"><i class="fa-solid fa-dumbbell"></i><a href="#modalidade">Modalidades</a></li>
        <li class="cinco"><i class="fa-solid fa-dumbbell"></i><a href="#plano">Planos</a></li>
        </div>
        <div class="places" id="place">
            <div class="title_top">Academias</div>
            <div class="gallery">
                <!-- adicionar fotos pelo css usando background -->
                <div class="ft1">
                    <div class="texto">
                        <h1>Paulista</h1>
                    </div>
                </div>
                <div class="ft2">
                    <div class="texto">
                        <h1>Itaquera</h1>
                    </div>
                </div>
                <div class="ft3">
                    <div class="texto">
                        <h1>Barra Funda</h1>
                    </div>
                </div>
            </div>
            <div class="direct">
                <a href="#">Todas As Unidades <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>

        <div class="produtos" id="produto">
            <div class="titulo2"><h1>Produtos</h1></div>
            <div class="index">
            <div class="categorias">
            <div class="cat"><h2>Categorias</h2></div>
            <ul class="men">
                <button id="btnSuplementos">Suplementos</button>
                <button id="btnRoupas">Roupas</button>
                <button id="btnAparelhos">Aparelhos</button>
                <button id="btnAcessorios">Acessórios</button>
            </ul>
        </div>

                <div class="mercadoria" id="produtos">
                <script>
            // Função para carregar os produtos de uma categoria via AJAX
            function carregarProdutos(categoria) {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("produtos").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET", "../database/getproduto.php?categoria=" + categoria, true);
                xmlhttp.send();
            }

            // Event listeners para os botões de categoria
            document.getElementById("btnSuplementos").addEventListener("click", function() {
                carregarProdutos("Suplementos");
            });

            document.getElementById("btnRoupas").addEventListener("click", function() {
                carregarProdutos("Roupas");
            });

            document.getElementById("btnAparelhos").addEventListener("click", function() {
                carregarProdutos("Aparelhos");
            });

            document.getElementById("btnAcessorios").addEventListener("click", function() {
                carregarProdutos("Acessórios");
            });

            
        </script>
                </div>
            </div>
            <div class="mais">
                <a href="#">Todos Os Produtos</a>
            </div>
        </div>



        <div class="modalidades" id="modalidade">
            <div class="snave">
                <div class="newtitle">
                    <h1>Modalidades </h1>
                </div>
                <div class="resumo">
                    <p>
                    Cada modalidade oferece uma experiência única, promovendo saúde, bem-estar e diversão. Vamos praticar ?
                    </p>
                </div>
                <div class="newlogo">
                   
                </div>
            </div>
            <div class="mod">
                <div class="card"><div class="cardimg1"><p>Musculação</p></div></div>
                <div class="card"><div class="cardimg2"><p>Aeróbica</p></div></div>
                <div class="card"><div class="cardimg3"><p>Crossfit</p></div></div>
                <div class="card"><div class="cardimg4"><p>Zumba</p></div></div>
                <div class="card"><div class="cardimg5"><p>Boxe</p></div></div>
                <div class="card"><div class="cardimg6"><p>Fundaentos do Alongamento</p></div></div>
            </div>
            <div class="us2">
                    <div>
                        <a href="#">Saiba Mais <i class="fa-solid fa-arrow-right"></i></a></div>
                    </div>
            </div>
        </div>
        <form action="../database/plano.act.php" method="post" enctype="multipart/form-data" class="planos" id="plano" onsubmit="return verificaForm()">
            <div class="ptitle">
                <h1>Planos</h1>
            </div>
            <div class="container">
                <div class="plano">
                    <div class="ctitle">
                        <h1>Plano Verão</h1>
                    </div>
                    <div class="planoinfo">
                        <p>Yoga</p>
                        <p>Pilates</p>
                        <p>Spinning</p>
                        <p>Musculação</p>
                        <p>Treinamento Funcional</p>
                        <p>Fundamentos do Alongamento</p>
                    </div>
                    <div class="inpradio">
                    <input type="radio" name="plano" value="Plano Verão">
                    <span class="radio-label">Assine</span>
                    </div>
                </div>
                <div class="plano">
                    <div class="ctitle">
                        <h1>Plano Cariani</h1>
                    </div>
                    <div class="planoinfo">
                        <p>Musculação</p>
                        <p>Artes Marciais</p>
                        <p>Dieta Regulada</p>
                        <p>Regulação de medicação</p>
                        <p>Fundamentos do Alongamento</p>
                        <p>Descontos em Produtos</p>
                    </div>
                    <div class="inpradio">
                    <input type="radio" name="plano" value="Plano Cariani">
                    <span class="radio-label">Assine</span>
                    </div>
                </div>
                <div class="plano">
                    <div class="ctitle">
                        <h1>Plano Mr. Olympia</h1>
                    </div>
                    <div class="planoinfo">
                        <p>Dietas</p>
                        <p>Artes marciais</p>
                        <p>Plano de Treinos</p>
                        <p>Descansos regulados</p>
                        <p>Progressão de carga</p>
                        <p>Descontos em Produtos</p>
                    </div>
                    <div class="inpradio">
                    <input type="radio" name="plano" value="Plano Mr. Olympia">
                    <span class="radio-label">Assine</span>
                    </div>
                </div>
            </div>
            <button type="submit">Enviar</button>
        </form>
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
    <script src="../aps/signin.js"></script>
</body>
</html>