<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mind - Lista Usuarios CRUD </title>
</head>

<body>
    <?php

    include_once 'conexao.php';

    echo "<h1>Listar os Usuários</h1>";

    $query_usuarios = "SELECT id, nome, email
    FROM usuarios
    ORDER BY id DESC
    LIMIT 40";
    $result_usuarios = mysqli_query($conn, $query_usuarios);

    while ($row_usuario = mysqli_fetch_assoc(($result_usuarios))) {
        extract($row_usuario);
        echo "Id: $id <br>";
        echo "Nome: $nome <br>";
        echo "E-mail: $email <br>";
        echo "<a href='visualizar.php?id_usuario=$id'>visualizar</a><br>";
        echo "<hr>";
    }

    ?>
</body>

</html>