<?php
include_once 'conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aliases</title>
</head>

<body>
    <!-- Aliases SQL são usados para fornecer para a tabela ou para a coluna, um nome temporarrio
        Os alias são frequentemente usados para tornar os nomes das colunas mais legiveis.
    Um Aliases só existe durante a duração da consulta.-->
    <h1>Aliases SQL</h1>
    <?php
    // Alias [AS] serve como um apelido - Não pode usar uma palavra rervada
    $query_usuarios = "SELECT id AS id_usuario, nome AS nome_usuario, email AS email_usuario
    FROM usuarios ";

    $result_usuarios = mysqli_query($conn, $query_usuarios);

    while ($row_usuario = mysqli_fetch_assoc($result_usuarios)) {
        var_dump($row_usuario);
        echo "<br><br>";
        extract($row_usuario);

        echo "ID: $id_usuario <br>";
        echo "Nome: $nome_usuario <br>";
        echo "E-Mail: $email_usuario <br><br>";
        echo "<hr>";
    }

    ?>

</body>

</html>