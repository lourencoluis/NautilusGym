<?php
session_start();
require("../database/sec.php");
require("../database/connect.php");

if ($_SESSION['logado'] != true) {
    header("Location: ../login.php");
    exit();
}

$codigo = $_SESSION['codigo'];
$query = mysqli_query($con, "SELECT * FROM `tb_users` WHERE `Coduser` = '$codigo'");
$pessoa = mysqli_fetch_assoc($query);

$_SESSION['nome'] = $pessoa['Nome'];
$_SESSION['email'] = $pessoa['Email'];
$_SESSION['tel'] = $pessoa['Telefone'];
$_SESSION['cep'] = $pessoa['Cep'];
$_SESSION['data'] = $pessoa['Data'];
$_SESSION['foto'] = $pessoa['Foto'];
$_SESSION['plano'] = $pessoa['Plano'];

$nomePlano = "";
$descricaoPlano = "";
switch ($_SESSION['plano']) {
    case 1:
        $nomePlano = "Plano Verão";
        $descricaoPlano = "Inclui Yoga, Pilates, Spinning, Musculação, Treinamento Funcional, Fundamentos do Alongamento.";
        break;
    case 2:
        $nomePlano = "Plano Cariani";
        $descricaoPlano = "Inclui Musculação, Artes Marciais, Dieta Regulada, Regulação de medicação, Fundamentos do Alongamento, Descontos em Produtos.";
        break;
    case 3:
        $nomePlano = "Plano Mr. Olympia";
        $descricaoPlano = "Inclui Dietas, Artes marciais, Plano de Treinos, Descansos regulados, Progressão de carga, Descontos em Produtos.";
        break;
    default:
        $nomePlano = "Plano Indefinido";
        $descricaoPlano = "Você não possui um plano!";
        break;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="../style/user.css">
    <title>Meu Perfil • Yasuo Gym</title>
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
                <?php require("../database/level.php"); ?>
                <li><a href='../pages/logoff.php'>Sair</a></li>
            </ul>
            <div class="user">
                <h1>Olá, <?php echo $_SESSION['nome']; ?></h1>
                <img src="<?php echo $_SESSION['foto']; ?>" alt="">
            </div>
        </nav>
        
        <div class="resto">
            <div class="atras">
                <div class="info1">
                    <div class="foto">
                        <div class="fotoUsuario">
                            <img src="<?php echo $_SESSION['foto']; ?>" alt="">
                        </div>
                    </div>
                    <div class="informacoes">
                        <div class="conteudoInformacoes">
                            <div class="coluna1">
                                <label for="usuario">Nome:</label>
                                <input type="text" name="usuario" id="usuario" readonly value="<?php echo $_SESSION['nome']; ?>">
                                
                                <label for="senha">Senha:</label>
                                <input type="password" name="senha" id="senha" readonly value="********">
                                
                                <label for="telefone">Telefone:</label>
                                <input type="tel" name="telefone" id="telefone" readonly value="<?php echo $_SESSION['tel']; ?>">
                            </div>
                            <div class="coluna2">
                                <label for="email">Email:</label>
                                <input type="email" name="email" id="email" readonly value="<?php echo $_SESSION['email']; ?>">
                                
                                <label for="cep">CEP:</label>
                                <input type="text" name="cep" id="cep" readonly value="<?php echo $_SESSION['cep']; ?>">
                                
                                <label for="data">Data de Nascimento:</label>
                                <input type="date" name="data" value="<?php echo $_SESSION['data']; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="editar">
                        <div class="btnedit">
                            <a href="edit.php?codigo=<?php echo $_SESSION['codigo']; ?>">Editar</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="nomeInfo">
            <h1>Minhas Informações</h1>
        </div>
        <div class="info2">
            <div class="cards">
                <div class="title">
                    <h1>Minhas Modalidades</h1>
                </div>
                <div class="conteudo">
                </div>
            </div>
            <div class="cards">
                <div class="title">
                    <h1>Meu Plano</h1>
                </div>
                <div class="conteudo">
                    <h2><?php echo $nomePlano; ?></h2>
                    <p><?php echo $descricaoPlano; ?></p>
                </div>
            </div>
            <div class="cards">
                <div class="title">
                    <h1>Academias Inclusas</h1>
                </div>
                <div class="conteudo"></div>
                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="container2">
                <div class="col1">
                    <a href="#" class="brand">Redes Sociais</a>
                    <ul class="media-icons">
                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fab fa-steam"></i></a></li>
                    </ul>
                </div>
                <div class="col2">
                    <ul class="menu2">
                        <li><a href="#">inicio</a></li>
                        <li><a href="#">sobre</a></li>
                        <li><a href="#">contato</a></li>
                        <li><a href="#">blog</a></li>
                        <li><a href="#">serviços</a></li>
                    </ul>
                    <p class="info">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia ratione ea quo esse blanditiis et molestias error ad perferendis dignissimos, iste deserunt nobis aut cupiditate facere, reiciendis incidunt minus laudantium.</p>
                    <p class="copy"><strong>Copyright 2024 | Yasuo Gym - Todos os direitos Reservados</strong></p>
                </div>
                <div class="col3">
                    <p>Se inscreva para novidades</p>
                    <form action="">
                        <div class="input-wrap">
                            <input type="text" name="" id="txt" placeholder="exemplo@gmail.com">
                            <button type="submit"><i class="fas fa-paper-plane"></i></button>
                        </div>
                    </form>
                    <ul class="services-icons">
                        <li><a href="#"><i class="fab fa-cc-amazon-pay"></i></a></li>
                        <li><a href="#"><i class="fab fa-cc-mastercard"></i></a></li>
                        <li><a href="#"><i class="fab fa-cc-apple-pay"></i></a></li>
                        <li><a href="#"><i class="fab fa-cc-stripe"></i></a></li>
                        <li><a href="#"><i class="fab fa-cc-visa"></i></a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </body>
</html>
