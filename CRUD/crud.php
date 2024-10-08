<?php

session_start();
?>
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mind - Lista Usuarios CRUD </title>
</head>

<body>
    <?php
    //Conexao BD
    include_once 'conexao.php';

    echo "<h1>Listar os Usuários</h1>";

    //Receber o id que vem pela URL
    $id = filter_input(INPUT_GET, 'id_usuario', FILTER_SANITIZE_NUMBER_INT);

    //Menu simples
    echo "<a href='crud.php'>Listar</a><br>";

    //Menu cadastrar
    echo "<a href='Cadastrar.php'>Cadastrar</a><br><br>";

    //Imprimir a mensagemde de sucesso ou erro
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }

    $query_usuarios = "SELECT id, nome, email
    FROM usuarios
    ORDER BY id DESC
    LIMIT 40";
    $result_usuarios = mysqli_query($conn, $query_usuarios);

    while ($row_usuario = mysqli_fetch_assoc(($result_usuarios))) {
        extract($row_usuario);
        echo "Id: $id <br>";
        echo "Nome: $nome <br>";
        echo "E-mail: $email <br><br>";
        echo "<a href='visualizar.php?id_usuario=$id'>visualizar</a><br>";
        echo "<a href='alterar.php?id_usuario=$id'>Editar</a><br>";
        echo "<a href='apagar.php?id_usuario=$id'>Deletar</a><br><br>";
        echo "<hr>";
    }

    ?>
</body>

</html>