<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="images/favicon.ico"/>
        <title>PHP Operadores Logicos</title>
    </head>

    <body>
        <?php
        // Operador Logicos
        $a = 10;
        $b = 8;
        $c = 7;
        $e = 10;
        $f = 8;

        // AND Ambos verdadeiro
        if(($a == $e) AND ($b == $f)){
            echo "Utilizado AND: Verdadeiro <br><br>";
        } else {
            echo "Utilizado AND: False <br><br>";
        }

        // OR True se um ou outro for verdadeiro
        if(($a == $e) OR ($b == $f)){
            echo "Utilizado OR: Verdadeiro <br><br>";
        } else {
            echo "Utilizado OR: False <br><br>";
        }

        // Xor se um ou outro for verdadeiro nao ambos
        if(($a == $e) XOR ($b == $f)){
            echo "Utilizado XOR: Verdadeiro <br><br>";
        } else {
            echo "Utilizado XOR: False <br><br>";
        }
        // ! true se operador nao e verdadeiro ex banco conta e senha
        if(!empty($c)){
            echo "Utilizado ! : Verdadeiro <br><br>";
        } else {
            echo "Utilizado ! : False <br><br>";
        }
        // && se smbos for verdadeiro true
        if(($a == $c) && ($b == $f)){
            echo "Utilizado &&: Verdadeiro <br><br>";
        } else {
            echo "Utilizado &&: False <br><br>";
        }
         // || se smbos for verdadeiro true
        if(($a == $c) || ($b == $e)){
            echo "Utilizado || : Verdadeiro <br><br>";
        } else {
            echo "Utilizado || : False <br><br>";
        }
        

        ?>
    </body>

</html>