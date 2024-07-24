<?php

include_once 'conexao.php';

$query_usuarios = "SELECT * FROM usuarios";
$result_usuarios = mysqli_query($conn, $query_usuarios);

while ($row_usuario = mysqli_fetch_assoc($result_usuarios)) {
    var_dump($row_usuario);
}
