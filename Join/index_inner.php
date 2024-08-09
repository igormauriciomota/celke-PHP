<?php
include_once 'conexao.php';
?>
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INEER JOIN</title>
</head>

<body>
    <h1>INNER JOIN - Recuperar registro de duas tabelas</h1>
    <!-- Inicio PHP -->
    <?php

    // A Ordem dos Fatores são importantes, nao pode ignorar a ordem.
    $query_usuarios = "SELECT usr.id, usr.nome AS  nome_urs, usr.email, usr.niveis_acesso_id,
    niv.nome AS nome_niv,
    sit.nome AS nome_sit
    FROM usuarios AS usr
    INNER JOIN niveis_acessos AS niv ON niv.id=usr.niveis_acesso_id
    INNER JOIN sits_usuarios AS sit ON sit.id=usr.sits_usuario_id
    ORDER BY usr.id DESC";
    $result_usuarios = mysqli_query($conn, $query_usuarios);

    while ($row_usuario = mysqli_fetch_assoc($result_usuarios)) {
        //var_dump($row_usuario);
        extract($row_usuario);

        echo "ID: $id <br>";
        echo "Nome: $nome_urs <br>";
        echo "E-mail: $email <br>";
        echo "Nivel de Acesso: $nome_niv <br>";
        echo "Situação: $nome_sit <br><br>";
        echo "<hr>";
    }



    ?>
    <!-- Fim PHP -->
</body>

</html>