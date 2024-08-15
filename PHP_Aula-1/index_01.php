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






    ?>
    <!-- Fim PHP -->
</body>
</html>