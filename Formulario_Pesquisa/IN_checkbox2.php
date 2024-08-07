<?php
//Conexao Banco de Dados
include_once 'conexao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>checkbox e IN no MySQL</title>
</head>

<body>
    <h1>Como Pesquisar com checkbox e IN no MySQLi curto</h1>
    <!-- Inicio PHP -->
    <?php
    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    ?>
    <!-- Fim PHP -->

    <!-- Inicio Formulario -->
    <form method="POST" action="">
        <label>Pesquisar</label><br><br>

        <input type="checkbox" name="nivel_acesso[]" value="1"> Super administrador<br>

        <input type="checkbox" name="nivel_acesso[]" value="2"> Administrador<br>

        <input type="checkbox" name="nivel_acesso[]" value="3"> Aluno<br>

        <input type="checkbox" name="nivel_acesso[]" value="4"> Controler<br>

        <input type="checkbox" name="nivel_acesso[]" value="5"> Financeiro<br><br>

        <!-- name="PesqUsuario" e o Botão -->
        <input type="submit" value="Pesquisar" name="PesqUsuario"><br><br>

    </form>
    <!-- Final do Formulario -->

    <!-- Inicio PHP -->
    <?php
    $valor_pesq = "";
    if (!empty($dados['nivel_acesso'])) {
        $valor_pesq = implode(", ", $dados['nivel_acesso']);
    }


    //var_dump($valor_pesq);

    $query_usuarios = "SELECT id, nome, email, niveis_acesso_id 
        FROM usuarios
        WHERE niveis_acesso_id IN ($valor_pesq)";
    $result_usuarios = mysqli_query($conn, $query_usuarios);

    while ($row_usuario = mysqli_fetch_assoc($result_usuarios)) {
        extract($row_usuario);

        echo "Id. $id <br>";
        echo "Nome: $nome <br>";
        echo "E-mail: $email <br>";
        echo "Niveis de Acesso $niveis_acesso_id <br><br>";
        echo "<hr>";
    }



    ?>
</body>

</html>