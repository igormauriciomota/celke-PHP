<?php
//Conexao Banco de Dados
include_once 'conexao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BETWEEN com MySQLi e PHP</title>
</head>

<body>
    <h1>Como usar o BETWEEN com MySQLi e PHP</h1>
    <!-- Inicio PHP -->
    <?php

    $query_usuarios = "SELECT id, nome, email
    FROM usuarios
    WHERE id BETWEEN 5 AND 10";
    $result_usuarios = mysqli_query($conn, $query_usuarios);

    while ($row_usuario = mysqli_fetch_assoc($result_usuarios)) {
        //var_dump($row_usuario);
        extract($row_usuario);

        echo "Id. $id <br>";
        echo "Nome: $nome <br>";
        echo "E-mail: $email <br>";
        echo "<hr>";
    }

    ?>
    <!-- Fim PHP -->


</body>

</html>