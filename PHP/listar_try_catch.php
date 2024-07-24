<?php
// Incluindo o arquivo PHP conexao, chamando o banco de dados
include_once 'conexao_try_catch.php';

echo "<h1>Listar os usuários</h1>";

try {
    $query_usuarios = "SELECT id, nome, email FROM usuarios";
    $result_usuarios = mysqli_query($conn, $query_usuarios);

    while ($row_usuario = mysqli_fetch_assoc($result_usuarios)) {
        //var_dump($row_usuario);
        extract($row_usuario);

        echo "<br>";
        echo "Id. $id <br><br>";
        echo "Nome: $nome <br><br>";
        echo "E-mail: $email <br><br>";
        echo "<hr><br>";
    }
} catch (Exception $erro) {
    echo "Erro: Nenhum usuário encontrado!";
}
