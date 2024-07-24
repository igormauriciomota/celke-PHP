<?php

include_once 'conexao.php';

echo "<h1>Clausula de LIMIT e OFFSET</h1>";

$query_usuarios = "SELECT id, nome, email FROM usuarios LIMIT 4 OFFSET 6";
$result_usuarios = mysqli_query($conn, $query_usuarios);

while ($row_usuario = mysqli_fetch_assoc($result_usuarios)) {
    //var_dump($row_usuario);
    extract($row_usuario);

    echo "Id. $id <br><br>";
    echo "Nome: $nome <br>";
    echo "E-mail: $email <br>";
    echo "<hr><br>";
}
