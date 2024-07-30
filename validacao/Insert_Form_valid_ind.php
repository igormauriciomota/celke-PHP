<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celke - VALIDAR FORMULARIO</title>
</head>

<body>
    <!-- Inicio PHP -->
    <?php

    include_once 'conexao.php';

    echo "<h1>Cadastrar e Validar o Todos os campos  formulario</h1><br>";

    //=> (FILTER_SANITIZE_STRING) está obsoleto usar FILTER_UNSAFE_RAW)
    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    if (!empty($dados['SendCadUsuario'])) {
        //var_dump($dados);

        //Inicio variavel validação de formulario
        $empty_input = false;

        //Validação de Todos os campos do formulario em um unico codigo
        $dados = array_map('trim', $dados);
        if (in_array('', $dados)) {
            $empty_input = true;
            echo "<p style='color: #f00'>Erro: Necessario preencher todos os campos!</p>";
        }

        if (!$empty_input) {
            $nome = mysqli_real_escape_string($conn, $dados['nome']);
            //$nome = $dados['nome'];

            foreach ($dados as $chave => $valor) {
                //echo "Chave: $chave - Valor: $valor <br>";
                $$chave = mysqli_real_escape_string($conn, $valor);
            }

            $senha_cript = password_hash($dados['senha'], PASSWORD_DEFAULT);

            $query_cad_usuario = "INSERT INTO usuarios (nome, email, senha, sits_usuario_id, niveis_acesso_id,
            created) VALUES ('" . $dados['nome'] . "','" . $dados['email'] . "',' $senha_cript '," . $dados['sits_usuario_id'] . "," . $dados['niveis_acessos'] . ",  NOW())";

            mysqli_query($conn, $query_cad_usuario);
            if (mysqli_insert_id($conn)) {
                echo "<p style='color: #0000ff'>Usuario cadastrado com Sucesso!</p>";
                unset($dados);
            } else {
                echo "<p style='color: #f00'>Erro: Usuario não cadastrado com Sucesso!</p>";
            }
        }
    }



    ?>
    <!-- Fim PHP -->

    <!-- Inicio FORMULARIO  -->
    <form method="POST" action="">

        <!-- Variavel nome -->
        <?php
        $valor_nome = "";
        if (isset($dados['nome'])) {
            $valor_nome =  $dados['nome'];
        }
        ?>

        <label>Nome: </label>
        <input type="text" name="nome" placeholder="Nome completo" value="<?php echo $valor_nome; ?>"><br><br>

        <!-- Variavel email -->
        <?php
        $valor_email = "";
        if (isset($dados['email'])) {
            $valor_email =  $dados['email'];
        }
        ?>

        <label>E-mail: </label>
        <input type="email" name="email" placeholder="O melhor e-mail" value="<?php echo $valor_email; ?>"><br><br>

        <!-- Variavel senha -->
        <?php
        $valor_senha = "";
        if (isset($dados['senha'])) {
            $valor_senha =  $dados['senha'];
        }
        ?>

        <label>Senha: </label>
        <input type="password" name="senha" placeholder="Senha do usuário" value="<?php echo $valor_senha; ?>"><br><br>

        <!-- Variavel {Situação} INICIO PHP-->
        <?php
        $query_sits_usuarios = "SELECT id AS id_sit, nome AS nome_sit FROM sits_usuario_id ORDER BY nome ASC";
        $result_sits_usuarios = mysqli_query($conn, $query_sits_usuarios);

        // echo "<option value=''>Selecione</option>";
        // //dentro do select
        // while ($row_sit_usuario = mysqli_fetch_assoc($result_sits_usuarios)) {
        // var_dump($row_sit_usuario);
        // extract($row_sit_usuario);
        // echo "<option value='$id_sit' selected>$nome_sit</option>";
        //}
        ?>
        <label>Situação: </label>
        <select name="sits_usuario_id" id="sits_usuario_id">
            <!-- <option value="">Selecione</option>
            <option value="1">Ativo</option>
            <option value="2">Inativo</option>
            <option value="3">Aguardando confirmação</option> -->

            <?php
            echo "<option value=''>Selecione</option>";
            //dentro do select
            while ($row_sit_usuario = mysqli_fetch_assoc($result_sits_usuarios)) {
                //var_dump($row_sit_usuario);
                extract($row_sit_usuario);
                echo "<option value='$id_sit' selected>$nome_sit</option>";
            }
            ?>
        </select><br><br>

        <!-- Fim de Situação  -->

        <!-- Variavel {NIVEIS DE ACESSO} PHP-->
        <?php
        $query_niveis_acesso = "SELECT id AS id_niveis, nome AS nome_niveis FROM niveis_acessos ORDER BY nome ASC";
        $result_niveis_acesso = mysqli_query($conn, $query_niveis_acesso);

        ?>
        <label>Nível de Acesso: </label>
        <select name="niveis_acessos" id="niveis_acessos">
            <!-- <option value="">Selecione</option>
            <option value="1">Super administrador</option>
            <option value="2">Administrador</option>
            <option value="3">Aluno</option> -->

            <?php
            echo "<option value=''>Selecione</option>";
            //dentro do select
            while ($row_niveis_acesso = mysqli_fetch_assoc($result_niveis_acesso)) {
                //var_dump($row_sit_usuario);
                extract($row_niveis_acesso);
                echo "<option value='$id_niveis' selected>$nome_niveis</option>";
            }

            ?>
        </select><br><br>
        <!-- Fim de NIVEIS DE ACESSO -->

        <!-- INICIO BOTAO  -->
        <input type="submit" value="cadastrar" name="SendCadUsuario">

    </form>

</body>

</html>