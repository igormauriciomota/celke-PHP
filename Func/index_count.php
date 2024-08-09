<?php
include_once 'conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FUNÇÂO COUNT</title>
</head>

<body>
    <!-- Função COUNT, SUM e AVG -->
    <h1>Função COUNT, SUM e AVG</h1>
    <!-- Função COUNT() Retorna o numero de linhas da pesquisa->  -->

    <!-- INICIO PHP -->
    <?php
    $query_qnt_usuarios = "SELECT COUNT(id) AS qnt_usuarios 
    FROM usuarios 
    WHERE sists_usuario_id = 3 ";
    $result_qnt_usuarios = mysqli_query($conn, $query_qnt_usuarios);

    $row_qnt_usuario = mysqli_fetch_assoc($result_qnt_usuarios);
    //var_dump($row_qnt_usuario);
    extract($row_qnt_usuario);

    echo "Qt. Usuarios: $qnt_usuarios <br>";



    ?>
    <!-- FIM PHP -->
</body>

</html>