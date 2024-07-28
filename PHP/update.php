<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE PHP</title>
</head>

<body>
    <?php

    include_once 'conexao.php';

    echo "<h1>Editar Usuário comando UPDATE</h1>";

    $id = 2;
    $nome = "Marcelo Moreno";
    $email = "marcelo@gmail.com.br";

    $modified = date("Y-m-d H:i:s");
    $query_edit_usuarios = "UPDATE usuarios SET nome ='$nome', email = '$email', modified = '$modified' 
    WHERE id = $id LIMIT 1";
    mysqli_query($conn, $query_edit_usuarios);

    if (mysqli_affected_rows($conn)) {
        echo "Usuário editado com sucesso!<br>";
    } else {
        echo "Erro: Usuario não foi editato!<br>";
    }


    ?>
</body>

</html>