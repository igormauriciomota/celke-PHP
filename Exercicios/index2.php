<?php
// A FUÇÃO -> (number_format) E UTILIZADA PARA CONVERTER O VALOR EM REAL
$cc = 38564.32;
echo "Valor na conta corrente: R$ " . number_format($cc, 2, ",", "." ) . "<br><br>";

$debito = 200.16;
echo "Valor do debito: R$ " . number_format($debito, 2, ",", "." ) . "<br><br>";

$result_real = $cc - $debito;
echo "Saldo: R$ " . number_format($result_real, 2, ",", "." ) . "<br><br>";

echo "<hr>";

$a = 1;
$b = 2;
$c = 3;
$result = 6;

echo "Soma o valor $result pelo valor $a <br>";
//$result = $result + $a;
$result += $a;
echo "Resultado da adição: $result <br><br>";

echo "Subtração o valor $result pelo valor $b <br>";
//$result = $result - $b;
$result -= $b;
echo "Resultado da subtração: $result <br><br>";

echo "Mutiplicação o valor $result pelo valor $b <br>";
//$result = $result * $b;
$result *= $b;
echo "Resultado da Mutiplicação: $result <br><br>";

echo "Divisão o valor $result pelo valor $b <br>";
//$result = $result / $b;
$result /= $b;
echo "Resultado da Divisão: $result <br><br>";

echo "Resto o valor $result pelo valor $b <br>";
//$result = $result % $b;
$result %= $b;
echo "Resultado do Resto: $result <br><br>";

//$d = "Bom ";
//$d1 = "dia, ";
//$d2 = "Igor.";

//echo "$d $d1 $d2";
//echo $d . $d1 . $d2;

$e = "Bom ";
$e .= "dia, ";
$e .= "Igor.";

//echo "$d $d1 $d2";
echo $e;






?>