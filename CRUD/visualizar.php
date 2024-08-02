<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mind - Visualizar Usuarios CRUD </title>
</head>

<body>
    <?php
    // conexo com BD
    include_once 'conexao.php';

    //Menu simples
    echo "<a href='crud.php'>Listar</a><br>";

    //Receber o id que vem pela URL
    $id = filter_input(INPUT_GET, 'id_usuario', FILTER_SANITIZE_NUMBER_INT);

    echo "<h1>Detalhes do Usuário</h1>";

    $query_usuario = "SELECT id, nome, email, sits_usuario_id, niveis_acesso_id, created, modified
    FROM usuarios
    WHERE id=$id
    ORDER BY id DESC
    LIMIT 1";

    $result_usuario = mysqli_query($conn, $query_usuario);

    $row_usuario = mysqli_fetch_assoc($result_usuario);
    extract($row_usuario);
    echo "Id: $id <br>";
    echo "Nome: $nome <br>";
    echo "E-mail: $email <br>";
    echo "Situação: $sits_usuario_id <br>";
    echo "Nivel de Acesso: $niveis_acesso_id <br>";
    echo "Cadastrado: $created <br>";
    echo "Editado: $modified <br>";


    ?>
</body>

</html>