<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celke - INSERT FORMULARIO</title>
</head>

<body>
    <?php

    include_once 'conexao.php';

    echo "<h1>Cadastrar Todos Usuaruios de uma vez</h1><br>";

    //=> (FILTER_SANITIZE_STRING) está obsoleto usar FILTER_UNSAFE_RAW)
    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    if (!empty($dados['SendCadUsuario'])) {
        //var_dump($dados);
        //die();

        $nome = mysqli_real_escape_string($conn, $dados['nome']);
        //$nome = $dados['nome'];

        $senha_cript = password_hash($dados['senha'], PASSWORD_DEFAULT);

        $query_cad_usuario = "INSERT INTO usuarios (nome, email, senha, sits_usuario_id, niveis_acesso_id, created)
    VALUES ('$nome', '" . $dados['email'] . "', '$senha_cript', " . $dados['sits_usuario_id'] . ", " . $dados['niveis_acesso_id'] . ", NOW())";

        mysqli_query($conn, $query_cad_usuario);
        if (mysqli_insert_id($conn)) {
            echo "Usuario cadastrado com Sucesso!<br>";
            //unset($dados);
        } else {
            echo "Erro: Usuario não cadastrado com Sucesso!<br>";
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
        <input type="text" name="nome" placeholder="Nome completo" value="<?php echo $valor_nome; ?>"><br><br>

        <?php
        $valor_email = "";
        if (isset($dados['email'])) {
            $valor_email =  $dados['email'];
        }
        ?>

        <label>E-mail: </label>
        <input type="email" name="email" placeholder="O melhor e-mail" value="<?php echo $valor_email; ?>"><br><br>

        <?php
        $valor_senha = "";
        if (isset($dados['senha'])) {
            $valor_senha =  $dados['senha'];
        }
        ?>

        <label>Senha: </label>
        <input type="password" name="senha" placeholder="Senha do usuário" value="<?php echo $valor_senha; ?>"><br><br>

        <?php
        $query_cad_usuarios = "SELECT id AS id_sit, nome AS nome_sit FROM sits_usuarios ORDER BY nome ASC";
        $result_sits_usuarios = mysqli_query($conn, $query_cad_usuarios);
        // while ($row_sit_usuario = mysqli_fetch_assoc($result_sits_usuarios)) {
        //     var_dump($row_sit_usuario);
        //     extract($row_sit_usuario);
        //     echo "<option value='$id_sit'>$nome_sit</option>";
        // }
        ?>

        <label>Situação: </label>
        <select name="sits_usuario_id" id="sits_usuario_id">
            <!-- <option value="">Senecione</option>
            <option value="1">Ativo</option>
            <option value="2">Inativo</option>
            <option value="3">Aguardando confirmação</option> -->
            <?php
            echo "<option value=''>Senecione</option>";
            while ($row_sit_usuario = mysqli_fetch_assoc($result_sits_usuarios)) {
                extract($row_sit_usuario);
                $select_sit_usuario = "";
                if (isset($dados['sits_usuario_id']) and ($dados['sits_usuario_id'] == $id_sit)) {
                    $select_sit_usuario = "selected";
                }
                echo "<option value='$id_sit' $select_sit_usuario>$nome_sit</option>";
            }
            ?>
        </select><br><br>

        <?php
        $query_niveis_acessos = "SELECT id AS id_niv, nome AS nome_niv FROM niveis_acessos ORDER BY nome ASC";
        $result_niveis_acessos = mysqli_query($conn, $query_niveis_acessos);

        ?>
        <label>Nível de Acesso: </label>
        <select name="niveis_acesso_id" id="niveis_acesso_id">
            <?php
            echo "<option value=''>Senecione</option>";
            while ($row_nivel_acesso = mysqli_fetch_assoc($result_niveis_acessos)) {
                extract($row_nivel_acesso);
                $select_nivel_acesso = "";
                if (isset($dados['niveis_acesso_id']) and ($dados['niveis_acesso_id'] == $id_niv)) {
                    $select_nivel_acesso = "selected";
                }
                echo "<option value='$id_niv' $select_nivel_acesso>$nome_niv</option>";
            }
            ?>
        </select><br><br>

        <input type="submit" value="cadastrar" name="SendCadUsuario">

    </form>

</body>

</html>