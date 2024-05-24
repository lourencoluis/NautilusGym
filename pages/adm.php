<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../libs/jquery.js"></script>
    <script src="../libs/Mask-Plugin/src/jquery.mask.js"></script>
    <link rel="stylesheet" href="../style/signin.css">
    <title>Document</title>
</head>
<body>
    <nav></nav>
    <main>
        <div class="container">
            <div class="banner">
                
            </div>
            <div class="login">
            <form action="../database/adm.act.php" method="post">
                    <div class="title"><h1>Crie sua Conta</h1></div>
                    <div class="principal">
                        <label for="usuario">Nome:</label>
                        <input type="text" name="usuario">

                        <label for="email">email:</label>
                        <input type="email" name="email">

                        <label for="data">Data de Nascimento:</label>
                        <input type="date" name="data">

                        <label for="telefone">Telefone:</label>
                        <input type="tel" name="telefone" id="txtTelefone">

                        <label for="cpf">CPF:</label>
                        <input type="text" name="cpf" id="txtCpf">
                        
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
    
    <script src="../aps/signin.js"></script>
</body>
</html>