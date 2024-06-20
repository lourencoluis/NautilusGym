<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="../style/produtos.css">
    <title>Modalidades • Yasuo Gym</title>
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
    <div class="cardes">
    <?php
    require('../database/connect.php');
    $produtos = mysqli_query($con,"SELECT * FROM `tb_produtos`");
    while ($produto = mysqli_fetch_assoc($produtos)) {
        // Verifique se o índice 'id' está definido em $produto
        if (isset($produto['codigo'])) {
            $codigo = $produto['codigo'];

            echo "<div class='card'>";
            echo "<div class='image_container'>";
            echo "<img id='foto1-$codigo' src='$produto[foto1]'>";
            echo "<img id='foto2-$codigo' src='$produto[foto2]' style='display:none'>";
           
            echo "</div>";
            echo "<div class='men'>";

            echo "<a onclick='trocarFoto($codigo)'<i class='fa-solid fa-arrow-left'></i></a>";

            echo "<a onclick='trocarFoto($codigo)'<i class='fa-solid fa-arrow-right'></i></a>";
            echo "</div>";
            echo "<div class='title'>";
            echo "<h3>$produto[categoria]</h3>";
            echo "</div>";
            echo "<div class='cads'>";
            echo "<h3>Unidades: $produto[quantidade]</h3>";
            
            echo "</div>";
            echo "<div class='desc'>";
            echo "<p>$produto[descricao]</p>";
            echo "</div>";
            echo "<h1 class='price'><strong>R$</strong>$produto[preco]</h1>";
            echo "<div class='botoesCard'>";
            
            echo "<p>Produto Disponível Nas Unidades mais próximas.</p>";
            echo "</div>";
            echo "</div>";

            /*
                <div class="card">
  <div class="image_container">
    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="image">
      <path
        d="M20 5H4V19L13.2923 9.70649C13.6828 9.31595 14.3159 9.31591 14.7065 9.70641L20 15.0104V5ZM2 3.9934C2 3.44476 2.45531 3 2.9918 3H21.0082C21.556 3 22 3.44495 22 3.9934V20.0066C22 20.5552 21.5447 21 21.0082 21H2.9918C2.44405 21 2 20.5551 2 20.0066V3.9934ZM8 11C6.89543 11 6 10.1046 6 9C6 7.89543 6.89543 7 8 7C9.10457 7 10 7.89543 10 9C10 10.1046 9.10457 11 8 11Z"
      ></path>
    </svg>
  </div>
  <div class="title">
    <span>New brand name</span>
  </div>
  <div class="size">
    <span>Size</span>
    <ul class="list-size">
      <li class="item-list"><button class="item-list-button">37</button></li>
      <li class="item-list"><button class="item-list-button">38</button></li>
      <li class="item-list"><button class="item-list-button">39</button></li>
      <li class="item-list"><button class="item-list-button">40</button></li>
      <li class="item-list"><button class="item-list-button">41</button></li>
    </ul>
  </div>
  <div class="action">
    <div class="price">
      <span>$299</span>
    </div>
    <button class="cart-button">
      <svg
        class="cart-icon"
        stroke="currentColor"
        stroke-width="1.5"
        viewBox="0 0 24 24"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
      >
        <path
          d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z"
          stroke-linejoin="round"
          stroke-linecap="round"
        ></path>
      </svg>
      <span>Add to cart</span>
    </button>
  </div>
</div>
            */
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