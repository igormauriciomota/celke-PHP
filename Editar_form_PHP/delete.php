<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../images/favicon.ico" />
    <title>Comando - DELETE </title>
</head>

<body>
    <?php

    // Id do usuario
    $id = 4;

    include_once 'conexao.php';

    $query_usuario = "DELETE FROM usuarios WHERE id=$id";
    //Para executar o comando usase;
    mysqli_query($conn, $query_usuario);

    if (mysqli_affected_rows($conn)) {
        echo "Usuario deletado com sucesso!<br>";
    } else {
        echo "Erro: usuario nao foi deletado<br>";
    }

    ?>
</body>

</html>