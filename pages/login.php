<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../style/login.css">
    <title>Document</title>
</head>
<body>
    <?php
        if (isset($_SESSION['login']) && $_SESSION['login'] == truel) {
            unset( $_SESSION['logado']);
            unset( $_SESSION['nome']);
            unset( $_SESSION['codigo']);
            unset( $_SESSION['foto']);
            unset( $_SESSION['cep']);
            unset($_SESSION['nivel']);  
        }
    ?>
    <nav></nav>
    <main>
        <div class="container">
            <div class="banner">
                
            </div>
            <div class="login">
            <form action="../database/login.act.php" method="post" enctype="multipart/form-data">
                    <div class="title"><h1>Entre</h1></div>
                    <div class="principal">

                        <label for="email">email:</label>
                        <input type="email" name="email">

                        <label for="senha">Senha:</label>
                        <input type="password" name="senha" id="senha" onkeyup="VerificarSenhas(senha.value,senha2.value)" require autocomplete="off">

                    </div>
                    <div class="rodape">
                        <input type="submit" value="Entrar" class="btn">
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

    <script src="../aps/signin.js"></script>
</body>
</html>