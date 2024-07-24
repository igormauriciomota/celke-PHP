<?php

include_once 'conexao.php';

$query_usuarios = "SELECT id, nome, email FROM usuarios";
$result_usuarios = mysqli_query($conn, $query_usuarios);

while ($row_usuario = mysqli_fetch_assoc($result_usuarios)) {
    var_dump($row_usuario);
    extract($row_usuario);
    echo "<br><br>";
    echo "Id. " . $row_usuario['id'] . "<br><br>";
    echo "Nome: " . $row_usuario['nome'] . "<br><br>";
    echo "E-mail: " . $row_usuario['email'] . "<br><br>";
    echo "<hr><br>";
}
