<?php

include_once 'conexao.php';

echo "<h1>Lista os usuários</h1>";

$query_usuarios = "SELECT id, nome, email, sits_usuario_id, niveis_acesso_id
                        FROM usuarios
                        WHERE niveis_acesso_id = 2 ";

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
    echo "<hr><br>";
}
