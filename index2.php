<?php
// A FUÇÃO -> (number_format) E UTILIZADA PARA CONVERTER O VALOR EM REAL
$cc = 38564.32;
echo "Valor na conta corrente: R$ " . number_format($cc, 2, ",", "." ) . "<br><br>";

$debito = 200.16;
echo "Valor do debito: R$ " . number_format($debito, 2, ",", "." ) . "<br><br>";

$result_real = $cc - $debito;
echo "Saldo: R$ " . number_format($result_real, 2, ",", "." ) . "<br><br>";



?>