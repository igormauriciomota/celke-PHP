<?php
include_once 'conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FUNÇÂO AVG</title>
</head>

<body>
    <!-- Função COUNT, SUM e AVG -->
    <h1>Função AVG</h1>
    <!-- Função AVG() Retorna o valor medio de uma coluna numerica->  -->

    <!-- INICIO PHP -->
    <?php
    //Com Casa DECIMAL
    $query_media_preco = "SELECT AVG(preco) AS media_preco 
    FROM inscricoes_cursos
    WHERE curso_id = 1";
    $result_media_preco = mysqli_query($conn, $query_media_preco);

    $row_media_preco = mysqli_fetch_assoc($result_media_preco);
    //var_dump($row_media_preco);
    extract($row_media_preco);

    echo "Média paga no curso: R$ " . number_format($media_preco, 2, ",", ".") . "<br><br>";

    //Sem a Casa DECIMAL
    $query_media_preco = "SELECT format(AVG(preco), '#') AS media_preco 
    FROM inscricoes_cursos
    WHERE curso_id = 1";
    $result_media_preco = mysqli_query($conn, $query_media_preco);

    $row_media_preco = mysqli_fetch_assoc($result_media_preco);
    //var_dump($row_media_preco);
    extract($row_media_preco);

    echo "Média paga no curso: R$ " . number_format($media_preco, 2, ",", ".") . "<br>";
    ?>
    <!-- FIM PHP -->
</body>

</html>