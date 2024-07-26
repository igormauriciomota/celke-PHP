<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celke - INSERT INTO</title>
</head>

<body>
    <?php

    include_once 'conexao.php';

    echo "<h1>INSERT INTO - Utilizado para Cadastrar Usuários</h1><br>";

    $nome = "Lucia";
    $email = "lucia@gmail.com";
    $senha = "321654";
    $sits_usuario_id = 1;
    $niveis_acesso_id = 2;

    $query_cad_usuario = "INSERT INTO usuarios (nome, email, senha, sits_usuario_id,
    /*nome email senha são string*/
    niveis_acesso_id, created) VALUE ('$nome', '$email', '$senha',
    /*$sits_usuario_id, $niveis_acesso_id são INT numeros indices*/
    $sits_usuario_id, $niveis_acesso_id, NOW())";
    mysqli_query($conn, $query_cad_usuario);

    if (mysqli_insert_id($conn)) {
        echo "Usuario cadastrado com sucesso!<br>";
        $ultimo_registro_cad = mysqli_insert_id($conn);
    } else {
        echo "Erro: usuário não cadastrado!<br>";
    }







    ?>
</body>

</html>