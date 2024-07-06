<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="images/favicon.ico"/>
        <title>PHP Operadores de Comparação</title>
    </head>

    <body>
        <?php
        // Variaveis
        $a = 10;
        $b = 8;
        $c = 10;
        $d = 12;

        //Operador de Igualdade
        if($a == $b){
            echo "Verdadeiro: o numero $a é igual ao valor $b <br><br>";
        } else {
            echo "Falso: o numero $a não é igual ao valor $b <br><br>";
        };
        //Operador de Diferente
        if($a != $b){
            echo "Verdadeiro: o numero $a é diferente do valor $b <br><br>";
        } else {
            echo "Falso: o numero $a não é diferente do valor $b <br><br>";
        };
        //Operador de < Menor
        if($a < $b){
            echo "Verdadeiro: o numero $a é < Menor do que o valor $b <br><br>";
        } else {
            echo "Falso: o numero $a não é < Menor do que o valor $b <br><br>";
        };
        //Operador de > Maior
        if($a > $b){
            echo "Verdadeiro: o numero $a é > Maior do que o valor $b <br><br>";
        } else {
            echo "Falso: o numero $a não é > Maior do que o valor $b <br><br>";
        };
         //Operador de <= Menor ou igual
        if($a <= $c){
            echo "Verdadeiro: o numero $a é <= Menor ou igual do que o valor $c <br><br>";
        } else {
            echo "Falso: o numero $a não é <= Menor ou igual do que o valor $c <br><br>";
        };
         //Operador de >= Maior ou igual
        if($a >= $b){
            echo "Verdadeiro: o numero $a é >= Maior ou igual do que o valor $b <br><br>";
        } else {
            echo "Falso: o numero $a não é >= Maior ou igual do que o valor $b <br><br>";
        };






        ?>
    </body>

</html>