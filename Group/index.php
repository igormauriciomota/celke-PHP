<?php
include_once 'conexao.php';
?>
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GROUP BY</title>
</head>

<body>
    <!-- GROUP BY agrupa linhas baseado em semelhanças entre elas. -->

    <h1>GROUP BY</h1>

    <!-- Iniciando PHP -->
    <?php
    $query_acesso_aulas = "SELECT aul.id, aul.nome
    FROM aulas AS aul ";

    $result_acesso_aulas = mysqli_query($conn, $query_acesso_aulas);

    while ($row_acesso_aula = mysqli_fetch_assoc($result_acesso_aulas)) {
        var_dump($row_acesso_aula);
        extract($row_acesso_aula);

        echo "ID: $id <br>";
        echo "Nome: $nome <br><br>";
        echo "<hr>";
    }

    ?>
    <!-- Fim PHP -->
</body>

</html>