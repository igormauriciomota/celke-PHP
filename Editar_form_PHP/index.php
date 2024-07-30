<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../images/favicon.ico" />
    <title>Celke-Formulario editar</title>
</head>

<body>
    <!-- INICIO PHP -->
    <?php

    include_once 'conexao.php';

    echo "<h1>Editar Usuários</h1>";

    $id = 1;

    $query_usuario = "SELECT id, nome, email, sits_usuario_id, niveis_acesso_id FROM usuarios WHERE id = $id LIMIT 1";
    $result_usuario = mysqli_query($conn, $query_usuario);
    $row_usuario = mysqli_fetch_assoc($result_usuario);
    var_dump($row_usuario);
    echo "<br><br>";

    ?>
    <!-- FIM PHP -->

    <!-- Inicio Formulario -->

    <!-- Form NOME -->
    <?php
    $valor_nome = "";
    if (isset($row_usuario['nome'])) {
        $valor_nome = $row_usuario['nome'];
    }
    ?>

    <form method="POST" action="">
        <label>Nome: </label>
        <input type="text" name="nome" id="nome" value="<?php echo $valor_nome; ?>" placeholder="Nome completo" /><br><br>
    </form>

    <!-- Form E-mail -->
    <?php
    $valor_email = "";
    if (isset($row_usuario['email'])) {
        $valor_email = $row_usuario['email'];
    }
    ?>

    <form method="POST" action="">
        <label>E-mail: </label>
        <input type="email" name="email" id="email" value="<?php echo $valor_email; ?>" placeholder="E-mail valido" /><br><br>
    </form>

    <!-- Senha -->
    <form method="POST" action="">
        <label>Senha: </label>
        <input type="password" name="senha" id="senha" placeholder="Senha do usuario"><br><br>
    </form>

    <!-- sits_usuario_id -->
    <?php
    $valor_sits_usuario_id = "";
    if (isset($row_usuario['sits_usuario_id'])) {
        $valor_sits_usuario_id = $row_usuario['sits_usuario_id'];
    }
    ?>

    <form method="POST" action="">
        <label>Situação: </label>
        <input type="number" name="sits_usuario_id" id="sits_usuario_id" value="<?php echo $valor_sits_usuario_id; ?>" placeholder="Digite a situação" /><br><br>
    </form>

    <!-- sits_usuario_id -->
    <?php
    $valor_niveis_acesso_id = "";
    if (isset($row_usuario['niveis_acesso_id'])) {
        $valor_niveis_acesso_id = $row_usuario['niveis_acesso_id'];
    }
    ?>

    <form method="POST" action="">
        <label>Nivel de Acesso: </label>
        <input type="number" name="niveis_acesso_id" id="niveis_acesso_id" value="<?php echo $valor_niveis_acesso_id; ?>" placeholder="Digite a situação" /><br><br>
    </form>

</body>

</html>