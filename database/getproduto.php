<?php
// Arquivo: ../database/getprodutos.php

// Conexão com o banco de dados
require('connect.php');

// Verifica se foi recebido o parâmetro 'categoria' via GET
if (isset($_GET['categoria'])) {
    $categoria = $_GET['categoria'];

    // Query preparada para selecionar produtos da categoria específica
    $query = "SELECT * FROM `tb_produtos` WHERE `categoria` = ?";
    
    // Preparar a consulta
    $stmt = mysqli_prepare($con, $query);
    
    // Bind do parâmetro
    mysqli_stmt_bind_param($stmt, "s", $categoria);
    
    // Executar a consulta
    mysqli_stmt_execute($stmt);

    // Obter o resultado da consulta
    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) > 0) {
        while ($produto = mysqli_fetch_assoc($result)) {
            $codigo = $produto['codigo'];

            echo "<div class='card'>";
            echo "<div class='imageCard'>";
            echo "<img id='foto1-$codigo' src='{$produto['foto1']}'>";
            echo "<img id='foto2-$codigo' src='{$produto['foto2']}' style='display:none'>";
            echo "<button onclick='trocarFoto($codigo)'>Trocar Foto</button>";
            echo "</div>";
            echo "<div class='catego'>";
            echo "<h3>{$produto['categoria']}</h3>";
            echo "</div>";
            echo "<div class='cads'>";
            echo "<h3>Unidades: {$produto['quantidade']}</h3>";
            echo "<h1><strong>R$</strong>{$produto['preco']}</h1>";
            echo "</div>";
            echo "<div class='desc'>";
            echo "<p>{$produto['descricao']}</p>";
            echo "</div>";
            echo "<div class='botoesCard'>";
            echo "<p>Produto Disponível Nas Unidades mais próximas.</p>";
            echo "</div>";
            echo "</div>";
        }
    } else {
        echo "Nenhum produto encontrado nesta categoria.";
    }
} else {
    echo "Categoria não especificada.";
}

mysqli_stmt_close($stmt);
mysqli_close($con);
?>
