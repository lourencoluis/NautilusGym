<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../style/singin.css">
    <title>Document</title>
</head>
<body>
    <nav></nav>
    <main>
        <div class="container">
            <div class="banner">
                
            </div>
            <div class="login">
            <form action="../database/singin.act.php" method="post">
                    <div class="title"><h1>Crie sua Conta</h1></div>
                    <div class="principal">
                        <label for="usuario">Nome:</label>
                        <input type="text" name="usuario">

                        <label for="email">email:</label>
                        <input type="email" name="email">

                        <label for="senha">Senha:</label>
                        <input type="password" name="senha" id="senha" onkeyup="VerificarSenhas(senha.value,senha2.value)" require autocomplete="off">

                        <label for="senha2">Confirme a senha:</label>
                        <input type="password" name="senha2" id="senha2" onkeyup="VerificarSenhas(senha.value,senha2.value)" require>

                        <label for="data">Data de Nascimento:</label>
                        <input type="date" name="data">

                        <label for="telefone">Telefone:</label>
                        <input type="number" name="telefone">
                        
                        <label for="cep">CEP:</label>
                        <input type="number" name="cep">

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

    <script src="../app/singin.js"></script>
</body>
</html>