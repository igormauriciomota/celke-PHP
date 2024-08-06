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

        <!-- INICIO PHP -->
        <?php
        //Manter o nome no formulario
        $nome = "";
        if (!empty($dados['nome'])) {
            $nome = $dados['nome'];
        }
        ?>
        <!-- FIM PHP -->
        <label for="">Nome: </label>
        <input type="text" name="nome" id="nome" placeholder="Digite o nome do usuário" value="<?php echo $nome; ?>"><br><br>
        <!-- INICIO PHP -->
        <?php
        //Manter o nome no formulario
        $email = "";
        if (!empty($dados['email'])) {
            $email = $dados['email'];
        }
        ?>
        <!-- FIM PHP -->
        <!-- Campo e-mail -->
        <label for="">E-mail: </label>
        <input type="text" name="email" id="email" placeholder="Digite o seu melhor e-mail" value="<?php echo $email; ?>"><br><br>

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
            OR email LIKE '%$email%' 
            ORDER BY nome ASC";
        } elseif (!empty($dados['nome'])) {
            $query_usuarios = "SELECT id, nome, email
            FROM usuarios
            WHERE nome LIKE '%$nome%'
            ORDER BY nome ASC";
        } elseif (!empty($dados['email'])) {
            $query_usuarios = "SELECT id, nome, email
            FROM usuarios
            WHERE email LIKE '%$email%'
            ORDER BY nome ASC ";
        } else {
            $query_usuarios = "SELECT id, nome, email
            FROM usuarios
            ORDER BY nome ASC ";
        }
    } else {
        $query_usuarios = "SELECT id, nome, email
            FROM usuarios
            ORDER BY nome ASC ";
    }

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