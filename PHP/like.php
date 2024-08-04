<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIKE - PHP e Mysql</title>
</head>

<body>
    <?php
    //Conexao com Banco de Dados
    include_once 'conexao.php';

    echo "<h1>Como usar o LIKE no Mysql</h1>";
    echo "<p>LIKE ferramenta de pesquisa!</p>";

    // LIKE mecanismo de PESQUISA usase % antes e depois sera a pesquisa
    $query_usuarios = "SELECT id, nome, email
    FROM usuarios
    WHERE nome LIKE '%i%' ";
    $result_usuarios = mysqli_query($conn, $query_usuarios);

    while ($row_usuario = mysqli_fetch_assoc($result_usuarios)) {
        extract($row_usuario);
        echo "Id: $id <br>";
        echo "Nome: $nome <br>";
        echo "E-mail: $email <br><br>";
        echo "<hr>";
    }

    ?>
</body>

</html>