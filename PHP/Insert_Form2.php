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

        $senha_cript = password_hash($dados['senha'], PASSWORD_DEFAULT);

        $query_cad_usuario = "INSERT INTO usuarios (nome, email, senha, sits_usuario_id, niveis_acesso_id,
        created) VALUES ('" . $dados['nome'] . "','" . $dados['email'] . "',' $senha_cript '," . $dados['sits_usuario_id'] . "," . $dados['niveis_acesso_id'] . ",  NOW())";

        mysqli_query($conn, $query_cad_usuario);

        if (mysqli_insert_id($conn)) {
            echo "Usuário cadastrado com sucesso!<br><br>";
        } else {
            echo "Erro: Usuário não cadastrado com sucesso!<br><br>";
        }
    }
    ?>
    <form method="POST" action="">

        <label>Nome: </label>
        <input type="text" name="nome" placeholder="Nome completo" /><br><br>

        <label>E-mail: </label>
        <input type="email" name="email" placeholder="O melhor e-mail" /><br><br>

        <label>Senha: </label>
        <input type="password" name="senha" placeholder="Senha do usuário" /><br><br>

        <label>Situação: </label>
        <input type="number" name="sits_usuario_id" placeholder="Situação" /><br><br>

        <label>Nível de Acesso: </label>
        <input type="number" name="niveis_acesso_id" placeholder="Nível de Acesso" /><br><br>

        <input type="submit" value="cadastrar" name="SendCadUsuario" />

    </form>


</body>

</html>