<?php
//Conexao com Banco de Dados
include_once 'conexao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisa em um FORMULARIO</title>
</head>

<body>

    <h1>Como pesquisar com o LIKE no MySQLi em um FORMULARIO</h1>

    <?php

    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    ?>

    <form method="POST" action="">
        <!-- Campo Nome -->
        <label for="">Nome: </label>
        <input type="text" name="nome" id="nome" placeholder="Digite o nome do usuário"><br><br>

        <!-- Campo e-mail -->
        <label for="">E-mail: </label>
        <input type="text" name="email" id="email" placeholder="Digite o seu melhor e-mail"><br><br>

        <!-- Botão -->
        <input type="submit" value="Pesquisar" name="PesqUsuario"><br><br>

    </form>

    <?php
    if (!empty($dados['PesqUsuario'])) {
        $nome = mysqli_real_escape_string($conn, $dados['nome']);
        $email = mysqli_real_escape_string($conn, $dados['email']);

        if (!empty($dados['nome']) and (!empty($dados['email']))) {
            $query_usuarios = "SELECT id, nome, email
            FROM usuarios
            WHERE nome LIKE '%$nome%'
            OR email LIKE '%$email%' ";
        } elseif (!empty($dados['nome'])) {
            $query_usuarios = "SELECT id, nome, email
            FROM usuarios
            WHERE nome LIKE '%$nome%'";
        } elseif (!empty($dados['email'])) {
            $query_usuarios = "SELECT id, nome, email
            FROM usuarios
            WHERE email LIKE '%$email%'";
        }

        $result_usuarios = mysqli_query($conn, $query_usuarios);

        while ($row_usuario = mysqli_fetch_assoc($result_usuarios)) {
            extract($row_usuario);
            echo "Id: $id <br>";
            echo "Nome: $nome <br>";
            echo "E-mail: $email <br><br>";
            echo "<hr>";
        }
    }

    ?>
</body>

</html>