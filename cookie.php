<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="images/favicon.ico"/>
        <title>PHP-cookes</title>
    </head>

    <body>
        <?php
    
    // ----COOKIES
    echo "<h3>COOKIES</h3>";
    setcookie("afiliado", "5323", (time() + (7 * 24 * 3600)));

    if (isset($_COOKIE['afiliado'])) {
        echo "numero do afiliado: " . $_COOKIE['afiliado'] . "<br><br>";
    }

    // PODE HAVER MAIS DE UM COOKIE
    setcookie("logado", "Igor", (time() + (7 * 3600)));

    if (isset($_COOKIE["logado"])) {
        echo "Usuario: " . $_COOKIE["logado"] . " logado <br><br>";
    }else{
        echo "Cookies invalido!<br><br>";
    }

        // PODE HAVER MAIS DE UM COOKIE
        setcookie("senha", "1234", (time() + (7 * 3600)));

        if (isset($_COOKIE["senha"])) {
            echo "Usuario: " . $_COOKIE["senha"] . " logado <br><br>";
        }else{
            echo "Cookies invalido!<br><br>";
        }


    ?>
    </body>

</html>