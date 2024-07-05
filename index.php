<?php

$result = "2";
var_dump($result);
echo "Resultado exemplo um: " . $result . "<BR>";


$result_dois = $result + 1;
var_dump($result_dois);
echo "Resultado exemplo dois: " . $result_dois . "<BR>";

$result_tres = $result_dois + 3.5;
var_dump($result_tres);
echo "Resultado exemplo tres: " . $result_tres . "<BR>";

$result_quatro = 11;
var_dump($result_quatro);
echo "Resultado exemplo quatro: " . $result_quatro . "<BR>";

$result_cinco = (double) $result_quatro;
var_dump($result_cinco);
echo "Resultado exemplo Cinco: " . $result_cinco . "<BR>";

$result_seis = 7.9;
var_dump($result_seis);
echo "Resultado exemplo seis: " . $result_seis . "<BR>";

$result_sete = (int) $result_seis;
var_dump($result_sete);
echo "Resultado exemplo sete: " . $result_sete . "<BR>";
