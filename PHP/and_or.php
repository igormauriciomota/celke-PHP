<?php

include_once 'conexao.php';

echo "<h1>Lista os usuários com duas condiçoes AND & OR</h1>";

$query_usuarios = "SELECT id, nome, email, sits_usuario_id, niveis_acesso_id, created, modified
            FROM usuarios
            WHERE niveis_acesso_id = 3
            AND sits_usuario_id = 1";
$result_usuarios = mysqli_query($conn, $query_usuarios);

while ($row_usuario = mysqli_fetch_assoc($result_usuarios)) {
    //var_dump($row_usuario);
    extract($row_usuario);

    echo "<br>";
    echo "Id. $id <br>";
    echo "Nome: $nome <br>";
    echo "E-mail: $email <br>";
    echo "Usuario: $sits_usuario_id <br>";
    echo "Niveis de Acesso: $niveis_acesso_id <br>";
    echo "Cadastrado: " . date('d/m/Y H:i:s', strtotime($created)) .  "<br>";

    echo "Editado: ";
    if (!empty($modified)) {
        echo date('d/m/Y H:i:s', strtotime($modified));
    }

    echo "<br>";
    echo "<hr><br>";
}
