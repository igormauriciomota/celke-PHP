<?php
include_once 'conexao.php';
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de Variaveis</title>
</head>
<body>
    <h1>Variaveis seus tipos de dados e referencia</h1>
    <!-- Inicio PHP -->
    <?php

    // Variavel começa sempre co $_ ou $letras
    // estamos guardando dentro da variavel name a string Igor

    $name = 'Igor';

    echo $name;

    echo "<br><br>";

    echo gettype($name);

    echo "<br><br>";

    // Variavel com mais nomes pode ser usado de duas formas
    // camelCase ($myName) ou snake_case ($my_name) -> deve ser usado um padrao ate o final do projeto
    // case sensitve

    $my_name = 'Mota';

    echo $my_name;

    echo "<br><br>";

    echo "<hr>";
    // String - tudo que colocar entre aspas simples de duplas; gettype = tipo de dado

    echo gettype('Hello world');

    echo "<br><br>";
    
    //numbers - integers, float(double) gettype = tipo de dado
     
    echo gettype(12);

    echo "<br><br>";

    // float(double) - 
    echo gettype(12.12);

    echo "<br><br>";

    // booleans - true ou false
    echo gettype(false);
    echo "<br><br>";

    echo gettype(true);
    echo "<br><br>";

    // arrays Varios tipos de valores dentro do cochete [ separado por virgulas]
    echo gettype(['Arrays', 123654]);

    echo "<br><br>";

    //object transforma a classe em um objeto
    class Person {

    }

    echo gettype(new Person);

    echo "<br><br>";
    // null - Ausencia de um valor
    echo gettype(null);

    echo "<br><br>";
    echo "<hr>";

     //Constante é um identificador (nome) para um valor simples. 
     //- Como o nome sugere, esse valor não pode mudar durante a execução do script
    echo "<h1>Constantes</h1><br><br>";

    echo "<h3>Não e uma Constantes</h3><br>";
    // Não e uma constante
    $name = "Igor";
    echo $name;
    $name = "Mota";
    echo $name;

    echo '<br><br>';
    echo "<h3>E uma Constantes</h3><br>";

    define('NAME', 'Igor');
    echo NAME;

    echo '<br><br>';
    function teste()
    {
        echo __FUNCTION__;
        echo __METHOD__;
    }

    teste();

    echo '<br><br>';

    define('NAME', 'Igor');

    if(defined('NAME')){
        echo 'Foi definido<br>';
    }

    echo '<br><br>';
    echo '<hr>';
    echo '<h2>OPERADORES ARITMÉTICOS - COMO CRIAR VARIAVEIS<h2>';

    $a = 10;
    $b = 20;
    $c = 30;

    $var_soma = $a + $b + $c;
    $var_sub = $c - $a;
    $var_mult = $b * $c;
    $var_div = $c / $a;
    $var_sobra = $c % $b;

    echo "Resultado da soma de 10 + 20 + 30 e: $var_soma <br><br>";
    echo "<hr>";

    echo "Resultado da subitração de 30 - 10 e: $var_sub <br><br>";
    echo "<hr>";

    echo "Resultado da Mutiplicação de 20 * 30 e: $var_mult <br><br>";
    echo "<hr>";

    echo "Resultado da divisão de 30/10 e: $var_div <br><br>";
    echo "<hr>";

    echo "Resultado da sobra de 30 % 20 e: $var_sobra <br><br>";
    echo "<hr>";

    // o ponto realiza a concatenação

    echo '<h2>Operadores de Atribuição<h2>';

    $name = 'Alexandre ';

    $name = $name . 'cardoso';

    echo $name;

    // Outra forma e usar o operador .=
    echo '<br><br>';

    $name_1 = 'Igor ';

    $name_1 .= 'Mota';

    echo $name_1;

    echo "<br><br>";

    $num = 10;

    $num = $num + 20;

    echo $num;

    echo "<br><br>";

    $d = 10;
    $e = 8;
    $f = 6;

    $d += $e;
    
    echo $d;

    echo "<hr>";

    echo '<h2>Operadores de Incremento e Decremento<h2>';

    $umber = 10;

    $umber = ++$umber;

    echo $umber;

    echo "<br><br>";

    $umber1 = 10;

    $umber1 = --$umber1;

    echo $umber1;



   








    ?>
    <!-- Fim PHP -->
</body>
</html>