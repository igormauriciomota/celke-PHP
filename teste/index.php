<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <link rel="shortcut icon" href="imagens/favicon.ico" />
    <title>Celke - Formulario Cadastrar</title>
</head>

<body>
    <?php

    include_once 'conexao.php';

    echo "<h1>Cadastrar Usuário</h1>";

    //Receber os dados do formulário individualmente
    //$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    //echo "Nome do usuário: $nome <br>";

    //$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    //echo "E-mail do usuário: $email <br>";

    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    if (!empty($dados['SendCadUsuario'])) {
        //var_dump($dados);

        $nome = mysqli_real_escape_string($conn, $dados['nome']);
        //$nome = $dados['nome'];

        $senha_cript = password_hash($dados['senha'], PASSWORD_DEFAULT);

        $query_cad_usuario = "INSERT INTO usuarios (nome, email, senha, sits_usuario_id, niveis_acesso_id, created) VALUES ('$nome', '" . $dados['email'] . "', '$senha_cript', " . $dados['sits_usuario_id'] . ", " . $dados['niveis_acesso_id'] . ", NOW())";
        mysqli_query($conn, $query_cad_usuario);
        if (mysqli_insert_id($conn)) {
            echo "Usuário cadastrado com sucesso!<br>";
            unset($dados);
        } else {
            echo "Erro: Usuário não cadastrado com sucesso!<br>";
        }
    }

    ?>

    <form method="POST" action="">
        <?php
        $valor_nome = "";
        if (isset($dados['nome'])) {
            $valor_nome =  $dados['nome'];
        }
        ?>
        <label>Nome: </label>
        <input type="text" name="nome" placeholder="Nome completo" value="<?php echo $valor_nome; ?>" /><br><br>

        <?php
        $valor_email = "";
        if (isset($dados['email'])) {
            $valor_email =  $dados['email'];
        }
        ?>
        <label>E-mail: </label>
        <input type="email" name="email" placeholder="O melhor e-mail" value="<?php echo $valor_email; ?>" /><br><br>

        <?php
        $valor_senha = "";
        if (isset($dados['senha'])) {
            $valor_senha =  $dados['senha'];
        }
        ?>
        <label>Senha: </label>
        <input type="password" name="senha" placeholder="Senha do usuário" value="<?php echo $valor_senha; ?>" /><br><br>

        <?php
        $valor_sits_usuario_id = "";
        if (isset($dados['sits_usuario_id'])) {
            $valor_sits_usuario_id =  $dados['sits_usuario_id'];
        }
        ?>
        <label>Situação: </label>
        <input type="number" name="sits_usuario_id" placeholder="Situação" value="<?php echo $valor_sits_usuario_id; ?>" /><br><br>

        <?php
        $valor_niveis_acesso_id = "";
        if (isset($dados['niveis_acesso_id'])) {
            $valor_niveis_acesso_id =  $dados['niveis_acesso_id'];
        }
        ?>
        <label>Nível de Acesso: </label>
        <input type="number" name="niveis_acesso_id" placeholder="Nível de Acesso" value="<?php echo $valor_niveis_acesso_id; ?>" /><br><br>

        <!-- <button type="submit" value="Cadastrar" name="SendCadUsuario">Cadastrar</button> -->

        <input type="submit" value="Cadastrar" name="SendCadUsuario">
    </form>

</body>

</html>