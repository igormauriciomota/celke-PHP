<?php

include_once 'conexao.php';
// na situação AND as duas situaçoes deve ser verdadeiro iguais
echo "<h1>01 exemplo: Lista os usuários com duas condiçoes AND</h1>";

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

// na situação OR pode ser apresentado todasas listas indicadas ambos sao bassta um ser verdadeiro
echo "<h1>2 exemplo: Lista os usuários com duas condiçoes OR</h1>";

$query_usuarios = "SELECT id, nome, email, sits_usuario_id, niveis_acesso_id, created, modified
            FROM usuarios
            WHERE niveis_acesso_id = 2
            OR sits_usuario_id = 1";
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


echo "<h1>3 exemplo: Lista os usuários com duas condiçoes OR e AND</h1>";

$query_usuarios = "SELECT id, nome, email, sits_usuario_id, niveis_acesso_id, created, modified
            FROM usuarios
            WHERE (niveis_acesso_id = 2 OR niveis_acesso_id = 1)
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
