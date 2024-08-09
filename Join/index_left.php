<?php
include_once 'conexao.php';
?>
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LEFT JOIN</title>
</head>

<body>
    <!-- Clausula LEFT JOIN permite obter não apenas os dados relacionados de duas tabelas,
        mas tambem os dados não relacionados.-->

    <h1>Como usar o LEFT JOIN</h1>

    <!-- Inicio PHP -->
    <?php
    $query_usuarios = "SELECT urs.id, urs.nome, urs.email,
    ende.logradouro, ende.numero,
    cont.telefone
    FROM usuarios AS urs
    LEFT JOIN enderecos AS ende ON ende.usuario_id=urs.id
    LEFT JOIN contatos AS cont ON cont.usuario_id=urs.id
    ORDER BY id DESC";
    $result_usuarios = mysqli_query($conn, $query_usuarios);

    while ($row_usuario = mysqli_fetch_assoc($result_usuarios)) {
        //var_dump($row_usuario);
        echo "<br><br>";
        extract($row_usuario);

        echo "ID: $id <br>";
        echo "Nome: $nome <br>";
        echo "E-mail: $email <br>";
        echo "Endereço: $logradouro <br>";
        echo "Nº: $numero <br>";
        echo "Tel: $telefone <br><br>";
        echo "<hr>";
    }




    ?>
    <!-- Fim PHP -->
</body>

</html>