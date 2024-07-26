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

    echo "<h1>Formulario Para Cadastrar Usuários Forma Individual</h1><br>";

    //filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING) está obsoleto
    $nome = filter_input(INPUT_POST, 'nome', FILTER_UNSAFE_RAW);
    echo "Nome do usuário: $nome <br>";

    $email = filter_input(INPUT_POST, 'email', FILTER_UNSAFE_RAW);
    echo "E-mail do usuário:  $email <br><br>";




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