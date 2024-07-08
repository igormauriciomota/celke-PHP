<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="images/favicon.ico"/>
        <title>PHP</title>
    </head>

    <body>
        <?php
    
    // ----CONVERSÃO DE VALORES
    echo "CONVERSÃO DE VALORES <br><br>";
    

    $result = "2";
    var_dump($result);
    echo "Resultado exemplo A: $result <br><br>";

    $result_dois = $result + 1;
    var_dump($result_dois);
    echo "Resultado exemplo B 2 + 1: $result_dois <br><br>";

    $result_tres = $result_dois + 3.5;
    var_dump($result_tres);
    echo "Resultado exemplo C 3 + 3.5: $result_tres <br><br>";

    $result_quatro = $result_dois + 11;
    var_dump($result_quatro);
    echo "Resultado exemplo D 3 + 11: $result_quatro <br><br>";
    // double e = float ponto flutuante numero quebrado
    $result_cinco = (double) $result_quatro;
    var_dump($result_cinco);
    echo "Resultado exemplo E: $result_cinco <br><br>";

    // ----OPERADORES ARITMÉTICOS - COMO CRIAR VARIAVEIS
    echo "OPERADORES ARITMÉTICOS - COMO CRIAR VARIAVEIS <br><br>";

    $a = 2;
    $b = 4;
    $c = 7;
    $d = 10;

    $result_soma = $a + $b + $c + $d;
    $result_subitracao = $a - $b - $c - $d;
    $result_mult = $a * $b * $c * $d;
    $result_resto = $d % $c;
    $result_divisao = $d / $a;

    var_dump($result_soma);
    echo "A Soma total da variavel e: $result_soma <br><br>";

    var_dump($result_subitracao);
    echo "Asubitração da variavel e: $result_subitracao <br><br>";

    var_dump($result_mult);
    echo "A Mutiplicação da variavel e: $result_mult <br><br>";

    var_dump($result_resto);
    echo "O resto da variavel e: $result_resto <br><br>";

    var_dump($result_divisao);
    echo "A divisão da variavel e: $result_divisao <br><br>";

    // CONVERSÃO DE VALORES EM REAIS
    echo "CONVERTER O VALOR EM REAL <br><br>";

    $cc = 3546.91;
    echo "Valor em Conta Corrente: R$ " . number_format($cc, 2, ",", "." ) . "<br><br>";

    $debito = 1420.51;
    echo "Valor do Debito: R$ " . number_format($debito, 2, ",", "." ) . "<br><br>";
    
    $resultado_real = $cc - $debito;
    echo "Valor em conta corrente: R$ " . number_format($resultado_real, 2, ",", "." ) . "<br><br>";















        ?>
    </body>

</html>