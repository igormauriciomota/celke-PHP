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
        $empty_input = false;

        //Validar o campo individual
        /*if (empty($dados['nome'])) {
            $empty_input = true;
            echo "<p style='color: #f00'>Erro: Necessário preencher o campo nome!</p>";
        }elseif (empty($dados['email'])) {
            $empty_input = true;
            echo "<p style='color: #f00'>Erro: Necessário preencher o campo e-mail!</p>";
        }elseif (empty($dados['senha'])) {
            $empty_input = true;
            echo "<p style='color: #f00'>Erro: Necessário preencher o campo senha!</p>";
        }elseif (empty($dados['sits_usuario_id'])) {
            $empty_input = true;
            echo "<p style='color: #f00'>Erro: Necessário preencher o campo situação!</p>";
        }elseif (empty($dados['niveis_acesso_id'])) {
            $empty_input = true;
            echo "<p style='color: #f00'>Erro: Necessário preencher o campo nível de acesso!</p>";
        }*/

        //Validar todos os campos
        $dados = array_map('trim', $dados);
        if (in_array('', $dados)) {
            $empty_input = true;
            echo "<p style='color: #f00'>Erro: Necessário preencher todos os campos!</p>";
        }

        if (!$empty_input) {
            //$nome = mysqli_real_escape_string($conn, $dados['nome']);
            //$nome = $dados['nome'];

            foreach ($dados as $chave => $valor) {
                //echo "Chave: $chave - Valor: $valor <br>";
                $$chave = mysqli_real_escape_string($conn, $valor);
            }

            $senha_cript = password_hash($senha, PASSWORD_DEFAULT);

            $created = date("Y-m-d H:i:s");

            $query_cad_usuario = "INSERT INTO usuarios (nome, email, senha, sits_usuario_id, niveis_acesso_id, created) VALUES ('$nome', '$email', '$senha_cript', $sits_usuario_id, $niveis_acesso_id, '$created')";
            mysqli_query($conn, $query_cad_usuario);
            if (mysqli_insert_id($conn)) {
                echo "<p style='color: green'>Usuário cadastrado com sucesso!</p>";
                unset($dados);
            } else {
                echo "<p style='color: #f00'>Erro: Usuário não cadastrado com sucesso!</p>";
            }
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
        $query_sits_usuarios = "SELECT id AS id_sit, nome AS nome_sit FROM sits_usuarios ORDER BY nome ASC";
        $result_sits_usuarios = mysqli_query($conn, $query_sits_usuarios);
        ?>
        <label>Situação: </label>
        <select name="sits_usuario_id" id="sits_usuario_id">
            <?php
            echo "<option value=''>Selecione</option>";
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
            echo "<option value=''>Selecione</option>";
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

        <input type="submit" value="Cadastrar" name="SendCadUsuario" />
    </form>
</body>

</html>