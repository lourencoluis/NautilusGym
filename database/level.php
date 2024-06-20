
    <?php
    @session_start();

    if(isset($_SESSION['nivel']) && $_SESSION['nivel'] == 3){
        echo " <li class='burguer'><a href=''>Cadastrar</a>
                    <ul>
                        <li><a href='../pages/cadprod.php'>Produtos</a></li>
                        <li><a href='../pages/cadgym.php'>Academias</a></li>
                        <li><a href='../pages/adm.php'>ADM</a></li>
                    </ul>
                </li>";
    }
    if(isset($_SESSION['nivel']) && $_SESSION['nivel'] == 2){
        echo " <li class='burguer'><a href=''>Cadastrar</a>
                    <ul>
                        <li><a href=''>Produtos</a></li>
                        <li><a href=''>Academias</a></li>
                    </ul>
                </li>";
    }
