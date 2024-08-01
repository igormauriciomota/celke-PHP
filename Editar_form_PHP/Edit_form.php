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
    //Id do usuário que será editado
    $id = 4;

    include_once 'conexao.php';

    echo "<h1>Editar Usuários</h1>";

    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    if (!empty($dados['SendEditUsuario'])) {

        $empty_input = false;
        //verificar se o e-mail nao esta sendo utilizado
        $email = mysqli_real_escape_string($conn, $dados['email']);
        $query_view_usuario = "SELECT id FROM usuarios WHERE email = '$email' AND id <> $id LIMIT 1";
        $result_view_usuario = mysqli_query($conn, $query_view_usuario);
        if (($result_view_usuario) and ($result_view_usuario->num_rows != 0)) {
            $empty_input = true;
            echo "<p style='color: #f00'>Erro: Este e-mail já está cadastrado!</p>";
        }

        if (!$empty_input) {
            //var_dump($dados);
            foreach ($dados as $chave => $valor) {
                $$chave = mysqli_real_escape_string($conn, $valor);
            }

            $senha_cript = password_hash($senha, PASSWORD_DEFAULT);

            $query_edit_usuario = "UPDATE usuarios SET nome = '$nome', email = '$email', senha = '$senha_cript',
        sits_usuario_id = $sits_usuario_id, niveis_acesso_id = $niveis_acesso_id, modified = NOW() WHERE id = $id LIMIT 1";
            mysqli_query($conn, $query_edit_usuario);

            if (mysqli_affected_rows($conn)) {
                echo "<p style='color: #0000ff'>Usuario editado com sucesso!</p>";
            } else {
                echo "<p style='color: #f00'>Erro: Usuario não editado com sucesso!</p>";
            }
        }
    }

    $query_usuario =
        "SELECT id, nome, email, sits_usuario_id, niveis_acesso_id
    FROM usuarios
    WHERE id = $id
    LIMIT 1";
    $result_usuario = mysqli_query($conn, $query_usuario);
    $row_usuario = mysqli_fetch_assoc($result_usuario);
    //var_dump($row_usuario);

    ?>
    <!-- FIM PHP -->

    <!-- Inicio Formulario -->

    <!-- Form NOME -->
    <form method="POST" action="">

        <!-- ID -->
        <?php
        $id_usuario = "";
        if (isset($row_usuario['id'])) {
            $id_usuario = $row_usuario['id'];
        }
        ?>

        <input type="hidden" name="id" id="id" value="<?php echo $id_usuario; ?>" />

        <!-- Nome -->

        <?php
        $valor_nome = "";
        if (isset($dados['nome'])) {
            $valor_nome = $dados['nome'];
        } elseif (isset($row_usuario['nome'])) {
            $valor_nome = $row_usuario['nome'];
        }
        ?>
        <label>Nome: </label>
        <input type="text" name="nome" id="nome" placeholder="Nome completo" value="<?php echo $valor_nome; ?>"><br><br>

        <!-- Form E-mail -->
        <?php
        $valor_email = "";
        if (isset($dados['nome'])) {
            $valor_email = $dados['email'];
        } elseif (isset($row_usuario['email'])) {
            $valor_email = $row_usuario['email'];
        }
        ?>

        <label>E-mail: </label>
        <input type="email" name="email" id="email" placeholder="Melhor e-mail" value="<?php echo $valor_email; ?>" /><br><br>

        <!-- Senha -->
        <?php
        $valor_senha = "";
        if (isset($dados['senha'])) {
            $valor_senha = $dados['senha'];
        }
        ?>

        <label>Senha: </label>
        <input type="password" name="senha" id="senha" placeholder="Senha do usuario" value="<?php echo $valor_senha; ?>"><br><br>


        <!-- sits - Situação -->
        <?php
        $valor_sits_usuario_id = "";
        if (isset($dados['sits_usuario_id'])) {
            $valor_sits_usuario_id = $dados['sits_usuario_id'];
        } elseif (isset($row_usuario['sits_usuario_id'])) {
            $valor_sits_usuario_id = $row_usuario['sits_usuario_id'];
        }
        ?>

        <label>Situação: </label>
        <input type="number" name="sits_usuario_id" id="sits_usuario_id" placeholder="situação" value="<?php echo $valor_sits_usuario_id; ?>" /><br><br>

        <!-- Sits - Nivel de Acesso -->
        <?php
        $valor_niveis_acesso_id = "";
        if (isset($dados['niveis_acesso_id'])) {
            $valor_niveis_acesso_id = $dados['niveis_acesso_id'];
        } elseif (isset($row_usuario['niveis_acesso_id'])) {
            $valor_niveis_acesso_id = $row_usuario['niveis_acesso_id'];
        }
        ?>


        <label>Nivel de Acesso: </label>
        <input type="number" name="niveis_acesso_id" id="niveis_acesso_id" placeholder="Digite a situação" value="<?php echo $valor_niveis_acesso_id; ?>" /><br><br>

        <input type="submit" value="salvar" name="SendEditUsuario" />
    </form>
</body>

</html>