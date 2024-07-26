<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celke - DISTINCT</title>
</head>

<body>
    <?php

    include_once 'conexao.php';

    echo "<h1>Listar as aulas acessadas</h1>";

    $query_acessos = "SELECT DISTINCT id, nome_aula, usuario_id, aula_id 
                        FROM acessos
                        WHERE usuario_id = 5";
    $result_acessos = mysqli_query($conn, $query_acessos);

    while ($row_acesso = mysqli_fetch_assoc($result_acessos)) {
        //var_dump($row_acesso);
        extract($row_acesso);

        echo "<br>";
        echo "id. " . $id . "<br>";
        echo "Nome da Aula: " . $nome_aula . "<br>";
        echo "ID do Usuario: " . $usuario_id . "<br>";
        echo "ID da Aula:" . $aula_id . "<br>";
        echo "<hr>";
    }



    ?>
</body>

</html>