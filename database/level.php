
    <?php
    @session_start();

    if(isset($_SESSION['nivel']) && $_SESSION['nivel'] == 3){
        echo "<li><a href='adm.php'><input type='button' value='Cadastrar ADM'></a></li>";
    }
    if(isset($_SESSION['nivel']) && $_SESSION['nivel'] == 2 || $_SESSION['nivel'] == 3){
        echo "<li><a href='gym.php'><input type='button' value='Cadastrar Academia'></a></li>";
    }
