<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="images/favicon.ico" />
    <title>PHP</title>
</head>

<body>
    <?php

    // ----01-CONVERSÃO DE VALORES
    echo "01-CONVERSÃO DE VALORES <br><br>";


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
    $result_cinco = (float) $result_quatro;
    var_dump($result_cinco);
    echo "Resultado exemplo E: $result_cinco <br><br>";

    // --- 02-OPERADORES ARITMÉTICOS - COMO CRIAR VARIAVEIS
    echo "<hr>";
    echo "02-OPERADORES ARITMÉTICOS - COMO CRIAR VARIAVEIS <br><br>";

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

    // --- 03-CONVERSÃO DE VALORES EM REAIS
    echo "<hr>";
    echo "03-CONVERTER O VALOR EM REAL <br><br>";

    $cc = 3546.91;
    echo "Valor em Conta Corrente: R$ " . number_format($cc, 2, ",", ".") . "<br><br>";

    $debito = 1420.51;
    echo "Valor do Debito: R$ " . number_format($debito, 2, ",", ".") . "<br><br>";

    $resultado_real = $cc - $debito;
    echo "Valor em conta corrente: R$ " . number_format($resultado_real, 2, ",", ".") . "<br><br>";

    // --- 04-OPERADOR DE ATRIBUIÇÃO
    echo "<hr>";
    echo "04-OPERADOR DE ATRIBUIÇÃO <br><br>";

    $laranja = 5;
    $maca = 10;
    $pera = 3;
    $total = 18;

    //Atribuição com Adição
    echo "Soma valor $total += $laranja <br><br>";
    //$total = $total + $laranja; +=
    $total += $laranja;
    echo "Resultado da adição: $total <br><br>";

    echo "Subitração o valor $total -= $maca <br><br>";
    //$total = $total - $maca; -=
    $total -= $maca;
    echo "Resultado da Subitração: $total <br><br>";

    echo "Multiplicação do valor $total x= $pera <br><br>";
    // $total = $total * $pera; *=
    $total *= $pera;
    echo "Resultado da Mutiplicação: $total <br><br>";

    echo "Divisão do valor $total /= $pera <br><br>";
    // $total = $total / $pera; /=
    $total /= $pera;
    echo "Resultado da Divisão: $total <br><br>";

    echo "Resto do valor $laranja %= $pera <br><br>";
    // $total = $total % $pera; %=
    $laranja %= $pera;
    echo "Resultado do Resto: $laranja <br><br>";

    echo "<hr>";
    // --- 05-Concatenação
    echo "05- Concatenação <br><br>";

    $prim = "Bom ";
    $seg = "Dia, ";
    $ter = "Igor";

    echo "$prim $seg $ter <br><br>";

    $e = "Bom ";
    $e .= "Dia, ";
    $e .= "Igor ";
    $e .= "Mota";

    echo "$e <br><br>";

    // --- 06 OPERADOR DE ATRIBUIÇÃO
    echo "<hr>";
    echo "<h3>06-OPERADOR Incremento e Decremento</h3><br><br>";

    // Pos Incremento
    $t = 5;
    echo "Deve ser 5: " . $t++ . "<br><br>";
    echo "Resultado ser 6: " . $t . "<br><br>";

    //Pre-incremento
    $t = 5;
    echo "Deve ser 6: " . ++$t . "<br><br>";
    echo "Resultado ser 6: " . $t . "<br><br>";

    // Pós decremento
    $t = 5;
    echo "Deve ser 5: " . $t++ . "<br><br>";
    echo "Resultado ser 6: " . $t . "<br><br>";

    //Pre-decremento
    $t = 5;
    echo "Deve ser 6: " . ++$t . "<br><br>";
    echo "Resultado ser 6: " . $t . "<br><br>";

    // --- 07 OPERADOR DE COMPARAÇÃO
    echo "<hr>";
    echo "<h3>07-OPERADOR DE COMPARAÇÃO</h3><br><br>";

    //Variaveis
    $i = 10;
    $j = 8;
    $k = 10;
    $l = 12;

    // operador de de Igualdade

    if ($i == $j) {
        echo "Verdadeiro: o numero $i e igual ao valor $j <br><br>";
    } else {
        echo "Falso: o numero $i não e igual ao valor $j <br><br>";
    }

    //Operador de Diferente
    if ($i != $j) {
        echo "Verdadeiro o numero $i e diferente de $j <br><br>";
    } else {
        echo "Falso o numero $i não e diferente de $j <br><br>";
    }

    //Operador de < Menor

    if ($i < $j) {
        echo "Verdadeiro o numero $i e menor do que $j <br><br>";
    } else {
        echo "Falso o numero $i não e menor do que $j <br><br>";
    }

    //Operador de maior
    if ($i > $j) {
        echo "Verdadeiro o numero $i e maior do que $j <br><br>";
    } else {
        echo "Falso o numero $i não e maior do que $j <br><br>";
    }

    //Operador de <= Menor ou igual
    if ($i <= $k) {
        echo "Verdadeiro o numero $i e menor ou igual ao $k <br><br>";
    } else {
        echo "Falso o numero $i não e menor ou igual ao $k <br><br>";
    }

    //Operador de >= Maior ou igual
    if ($i >= $j) {
        echo "Verdadeiro o numero $i e maior ou igual ao $j <br><br>";
    } else {
        echo "Falso o numero $i nao e maior ou igual ao $j <br><br>";
    }

    // --- 08 OPERADOR DE ATRIBUIÇÃO
    echo "<hr>";
    echo "<h3>08-Operadores Logicos</h3><br><br>";

    $m = 10;
    $n = 8;
    $o = 7;
    $p = 10;
    $q = 8;


    // AND Ambos verdadeiro
    if (($m == $p) and ($n == $q)) {
        echo "Ulilizando AND: Verdadeiro <br><br>";
    } else {
        echo "Ulilizando AND: Falso <br><br>";
    }

    // OR True se um ou outro for verdadeiro
    if (($m == $p) or ($n == $o)) {
        echo "Ulilizando OR: Verdadeiro <br><br>";
    } else {
        echo "Ulilizando OR: Falso <br><br>";
    }




































    ?>
</body>

</html>