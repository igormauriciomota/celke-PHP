<?php
//Conexao Banco de Dados
include_once 'conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BETWEEN ENTRE DATAS</title>
</head>

<body>
    <h1>Como usar o BETWEEN PESQUISAR ENTRE DATAS</h1>

    <?php

    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    ?>

    <!-- Inicio Formulario -->
    <form method="POST" action="">

        <!-- Inicio PHP Manter dados no formulario -->
        <?php
        $data_inicio = "";
        if (isset($dados['data_inicio'])) {
            $data_inicio = $dados['data_inicio'];
        }

        ?>
        <!-- Fim PHP -->
        <label>Data de Inicio: </label>
        <input type="date" name="data_inicio" value="<?php echo $data_inicio; ?>"><br><br>
        <!-- Inicio PHP Manter dados no formulario -->
        <?php
        $data_final = "";
        if (isset($dados['data_final'])) {
            $data_final = $dados['data_final'];
        }

        ?>
        <!-- Fim PHP -->

        <label>Data final: </label>
        <input type="date" name="data_final" value="<?php echo $data_final; ?>"><br><br>

        <!-- Botao -->
        <input type="submit" value="Pesquisar" name="PesqUsuarios"><br><br>

    </form>
    <!-- Fim Formulario -->

    <!-- Inicio PHP -->
    <?php

    if (!empty($dados['PesqUsuarios'])) {
        // var_dump($dados);
        $query_usuarios = "SELECT id, nome, email, created
        FROM usuarios
        WHERE created BETWEEN '" . $dados['data_inicio'] . "' AND '" . $dados['data_final'] . "' ";

        $result_usuarios = mysqli_query($conn, $query_usuarios);
    } else {
        $query_usuarios = "SELECT id, nome, email, created
        FROM usuarios";
    }

    while ($row_usuario = mysqli_fetch_assoc($result_usuarios)) {
        extract($row_usuario);

        echo "Id. $id <br>";
        echo "Nome: $nome <br>";
        echo "E-mail: $email <br>";
        echo "Data de Cadstro: " . date('d/m/Y H:i:s', strtotime($created)) . "<br><br>";
        echo "<hr>";
    }


    ?>

</body>

</html>