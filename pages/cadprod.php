<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="../style/cadprod.css">
    <script src="../libs/jquery.js"></script>
    
    <title>Cadastro Produtos • Yasuo Gym</title>
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
        <div class="cadastrar">
            <div class="topo">
                <div class="titulo">
                    <h1>Cadastro de Produto</h1>
                </div>
                <div class="logoCadastro">
                    <img src="../images_page/logo.png" alt="">
                </div>
            </div>
            <form action="../database/cadprod.act.php" method="post" enctype="multipart/form-data" class="conteudo" onsubmit="return verificaForm()">
                <div class="conteudo1">
                    <div class="fotos">
                            <div class="foto1">
                                <div class="tituloFoto">
                                    <h1>Foto 1</h1>
                                </div>
                                <div class="quadro">
                                    <img id="previewImg1" src="#" alt="" style="max-width: 100%; max-height: 200px;">
                                </div>
                                <div class="escolha">
                        
                                    <!-- <label for="fileFoto">
                                        Escolher Arquivo
                                    </label> -->
                                    <input type="file" class="custom-file-input" name="foto1" id="fileFoto1" onchange="previewFile('fileFoto1', 'previewImg1');">
                                
                                </div>
                            </div>
                            <div class="foto2">
                                <div class="tituloFoto">
                                    <h1>Foto 2</h1>
                                </div>
                                <div class="quadro">
                                    <img id="previewImg2" src="#" alt="" style="max-width: 100%; max-height: 200px;">
                                </div>
                                <div class="escolha">
                        
                                    <!-- <label for="fileFoto">
                                        Escolher Arquivo
                                    </label> -->
                                    <input type="file" class="custom-file-input" name="foto2" id="fileFoto2" onchange="previewFile('fileFoto2', 'previewImg2');">
                                
                                </div>
                                </div>
                        </div>
                    <div class="todosItens">
                        <div class="itens1">
                                <div class="item">
                                    <div class="nome">
                                        <h1>Nome</h1>
                                    </div>
                                    <div class="campo">
                                        <p>Nome o nome:</p>
                                        <input type="text" name="nomeProduto">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="nome">
                                        <h1>Preço</h1>
                                    </div>
                                    <div class="campo">
                                    <p>Digite o preço: </p>
                                    <input type="number" name="precoProduto">
                                    </div>
                                </div>
                            </div>
                            <div class="itens2">
                                <div class="item">
                                    <div class="nome">
                                        <h1>Categoria</h1>
                                    </div>
                                    <div class="campo">
                                        <p>escolha categoria: 
                                            <select name="categoria">
                                                <option value="Suplementos">Suplementos</option>
                                                <option value="Roupas">Roupas</option>
                                                <option value="Acessorios">Acessórios</option>
                                                <option value="Aparelhos">Aparelhos</option>
                                            </select>
                                        </p>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="nome">
                                        <h1>Quantidade</h1>
                                    </div>
                                    <div class="campo">
                                        <p>Quantidade: </p>
                                        <input type="number" name="quantidade" min="1"></p>                                 </div>
                                </div>
                            </div>
                        </div>                   
                    </div>
                    <div class="conteudo2">
                    <div class="descricao">
                        <div class="tituloDescricao">
                            <h1>Descrição do Produto</h1>
                        </div>
                        <div class="conteudoDescricao">
                            <textarea name="descricao" cols="30" rows="10"></textarea>
                        </div>
                        <input type="submit" value="Cadastrar" class="btn">
                    </div>
                </div>
            </form>
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
    <script src="../aps/previa.js"></script>
</body>
</html>