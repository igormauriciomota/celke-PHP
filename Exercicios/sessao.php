<!-- Inicio sessao sempre no topo PHP  -->
<?php
session_start();
?>
<!-- Inicio HTML -->
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="images/favicon.ico" />
    <title>PHP-Sessão</title>
</head>

<body>
    <?php

    // ----CRIAR A SESSÃO - E SALVA NO SERVIDOR
    echo "<h3>SESSÃO</h3>";

    $_SESSION['id'] = 2;
    $_SESSION['nome'] = "Igor";
    $_SESSION['sobre'] = "Mota";

    //---VERIFICAR SE EXIXTE A SESSÃO---
    if (isset($_SESSION['id'])) {
        echo "Id do usuario: " . $_SESSION['id'] . " e o nome é " . $_SESSION['nome'] . " " .  $_SESSION['sobre'] . "<br><br>";
    } else {
        echo "Asessão não foi encontrada<br><br>";
    }

    echo "<hr>";
    //---EXCLUIR A SESSAO
    unset($_SESSION['id'], $_SESSION['nome'], $_SESSION['sobre']);

    //---VERIFICAR SE FOI EXCLUIDA---
    if (isset($_SESSION['id'])) {
        echo "Id do usuario: " . $_SESSION['id'] . " e o nome é " . $_SESSION['nome'] . " " .  $_SESSION['sobre'] . "<br><br>";
    } else {
        echo "Asessão não foi encontrada<br><br>";
    }

    ?>
</body>

</html>