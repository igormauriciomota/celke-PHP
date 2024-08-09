<?php
include_once 'conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FUNÇÂO SUM</title>
</head>

<body>
    <!-- Função COUNT, SUM e AVG -->
    <h1>Valor total de venda</h1>
    <!-- Função SUM() Retorna a soma total de uma coluna numerica  -->

    <!-- INICIO PHP -->
    <?php

    $query_total_venda = "SELECT SUM(preco) AS total_venda 
    FROM inscricoes_cursos ";
    $result_total_venda = mysqli_query($conn, $query_total_venda);
    $row_total_venda = mysqli_fetch_assoc($result_total_venda);
    extract($row_total_venda);

    echo "Valor Total: R$ " . number_format($total_venda, 2, ",", ".") . "<br>";



    ?>
    <!-- FIM PHP -->
</body>

</html>