<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="images/favicon.ico"/>
        <title>PHP Incremento e Decremento</title>
    </head>

    <body>
        <?php
        // Pos incremento uliliza apos a variavel ex. $a++
        echo "<h3>Pós-incremento</h3>";
        $a = 5;
        echo "Deve ser 5: " . $a++ . "<br>";
        echo "Deve ser 6: " .$a . "<br><br>";
        //Pré incremento usa antes ++$a
        echo "<h3>Pré-incremento</h3>";
        $a = 5;
        echo "Deve ser 6: " . ++$a . "<br>";
        echo "Deve ser 6: " .$a . "<br><br>";

         //Pré Decremento usa antes ++$a
        echo "<h3>Pós-Decremento</h3>";
        $a = 5;
        echo "Deve ser 5: " . $a-- . "<br>";
        echo "Deve ser 4: " .$a . "<br><br>";

          //Pré Decremento usa antes ++$a
        echo "<h3>Pré-Decremento</h3>";
        $a = 5;
        echo "Deve ser 4: " . --$a . "<br>";
        echo "Deve ser 4: " .$a . "<br><br>";


        ?>
    </body>

</html>