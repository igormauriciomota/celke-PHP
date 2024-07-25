<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celke - ORDER BY</title>
</head>

<body>
    <?php

    include_once 'conexao.php';

    echo "<h1>ORDER BY Do menor para o maior</h1>";

    $query_usuarios = "SELECT id, nome, email
            FROM usuarios
            /*-- DESC = do ultimo / ASC = do primeiro --*/
            ORDER BY id ASC";
    $result_usuarios = mysqli_query($conn, $query_usuarios);

    while ($row_usuario = mysqli_fetch_assoc($result_usuarios)) {
        //var_dump($row_usuario);
        extract($row_usuario);

        echo "<br>";
        echo "Id. $id <br>";
        echo "Nome: $nome <br>";
        echo "E-mail: $email <br>";
    }
    echo "<hr>";
    echo "<h1>ORDER BY - Nome Ordem Alfabetica</h1>";

    $query_usuarios = "SELECT id, nome, email
            FROM usuarios
            /*-- DESC = do ultimo / ASC = do primeiro --*/
            ORDER BY nome ASC";
    $result_usuarios = mysqli_query($conn, $query_usuarios);

    while ($row_usuario = mysqli_fetch_assoc($result_usuarios)) {
        //var_dump($row_usuario);
        extract($row_usuario);

        echo "<br>";
        echo "Id. $id <br>";
        echo "Nome: $nome <br>";
        echo "E-mail: $email <br>";
    }
    ?>
</body>

</html>