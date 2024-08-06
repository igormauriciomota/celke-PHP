<?php
//Conexao Banco de Dados
include_once 'conexao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IN MySQL</title>
</head>

<body>
    <h1>Como usar o IN no MySQLi</h1>

    <?php
    $query_usuarios = "SELECT id, nome, email, niveis_acesso_id
    FROM usuarios
    WHERE niveis_acesso_id IN (2, 1)";
    $result_usuarios = mysqli_query($conn, $query_usuarios);

    while ($row_usuario = mysqli_fetch_assoc($result_usuarios)) {
        //var_dump($row_usuario);
        extract($row_usuario);
        echo "Id. $id <br>";
        echo "Nome: $nome <br>";
        echo "E-mail: $email <br>";
        echo "Niveis de acesso: $niveis_acesso_id <br><br>";
        echo "<hr>";
    }


    ?>
</body>

</html>