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
    $useuario_id = 1;

    $query_acesso_aulas = "SELECT aul.id, aul.nome, 
    ace.usuario_id,
    COUNT(ace.aula_id) AS qnt_acessos
    FROM aulas AS aul 
    INNER JOIN acessos_aulas AS ace ON ace.aula_id=aul.id
    WHERE usuario_id = $useuario_id
    GROUP BY ace.aula_id";

    $result_acesso_aulas = mysqli_query($conn, $query_acesso_aulas);

    while ($row_acesso_aula = mysqli_fetch_assoc($result_acesso_aulas)) {
        //var_dump($row_acesso_aula);
        extract($row_acesso_aula);

        echo "ID: $id <br>";
        echo "Nome: $nome <br>";
        echo "Id do Usuario: $usuario_id <br>";
        echo "Quantidade de Acesso: $qnt_acessos <br><br>";
        echo "<hr>";
    }

    ?>
    <!-- Fim PHP -->
</body>

</html>