<?php
include_once 'conexao.php';
?>
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RIGHT JOIN</title>
</head>

<body>
    <!-- A clausula RIGHT retorna todos os dados encontrados na tabela a direita de JOIN.
        Caso nao existam dados associados entre as tabelas a esquerda e a direita de JOIN, serão retornados valores nulos.-->
    <h1>Como usar o RIGHT JOIN</h1>
    <!-- Inicio PHP -->
    <?php

    $query_usuarios = "SELECT ende.id, ende.logradouro, ende.numero, ende.bairro, ende.cidade, ende.estado,
    usr.id, usr.nome, usr.email
    FROM enderecos AS ende
    RIGHT JOIN usuarios AS usr ON usr.id=ende.usuario_id ";
    $result_usuarios = mysqli_query($conn, $query_usuarios);

    while ($row_usuario = mysqli_fetch_assoc($result_usuarios)) {
        //var_dump($row_usuario);
        echo "<br>";
        extract($row_usuario);

        //Coluna Usuario
        echo "Id. $id <br>";
        echo "Nome: $nome <br>";
        echo "E-mail: $email <br>";

        //Coluna Endereço
        echo "Id. $id <br>";
        echo "Logradouro: $logradouro <br>";
        echo "Nº. $numero <br>";
        echo "Bairro: $bairro <br>";
        echo "Cidade: $cidade <br>";
        echo "Estado: $estado <br><br>";
        echo "<hr>";
    }


    ?>
    <!-- Fim PHP -->
</body>

</html>