<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="images/favicon.ico"/>
        <title>PHP</title>
    </head>

    <body>
        <?php
    
    // ----FUNÇOES
    $codigo = "cursophpdev";

    // E obrigatorio chamar a função
    promocao();
    promocao();
    promocao();
    // não precisa ter o mesmo nome dentro do parenteses
    function promocao(){
        echo "Acessou a função 1 <br><br>";
    
    }

    // teste de verificação
    tecnologia($codigo);

    function tecnologia($valor = null){
        echo "Acessou a função 2 <br><br>";
        echo "Parametro: $valor <br><br>";
        if($valor == "cursophp"){
            //echo "Codigo Válido";
            $msg = "Codigo Válido.";
        } else {
            //echo "Codigo Invalido";
            $msg = "Codigo Invalido.";
        }

        return $msg;
    }

    echo "<hr>";

    $codigo_curso = "cursophp";
    $retorno_dados_funcao = tecnologia($codigo_curso);
    echo $retorno_dados_funcao . "<br>";

    echo "<hr>";

    $codigo_curso = "cursophp";
    $retorno_dados_funcao = tecnologia();
    echo $retorno_dados_funcao . "<br><br>";

    echo "<hr>";
    // ------PASSAGEM DE PARAMETRO POR VALOR
    echo "<h4>PASSAGEM POR VALOR</h4>";

    function salario($num){
        $num += 50;
        echo "Dentro da função - salario com aumento: R$ " . number_format($num, 2, ",", "." ) . "<br><br>";
    }

    $salario = 8200;
    salario($salario);
    echo "salario sem aumento: R$ " . number_format($salario, 2, ",", "." ) . "<br><br>";
    echo "<hr>";

    //----------PASSAGEM DE PARAMETRO POR VALOR COM RETURN
    echo "<h4>PASSAGEM DE PARAMETRO POR VALOR COM RETURN</h4>";
    function salario_a($num){
        $num += 100;
        echo "Dentro da função 1 - salario com aumento: R$ " . number_format($num, 2, ",", "." ) . "<br><br>";
        return $num;
    }

    $salario_a = 8500.47;
    $salario_com_aumento = salario_a($salario_a);
    echo "Dentro da função 2 - salario sem aumento: R$ " . number_format($salario_a, 2, ",", "." ) . "<br><br>";
    echo "Dentro da função 3 - salario com aumento: R$ " . number_format($salario_com_aumento, 2, ",", "." ) . "<br><br>";
    echo "<hr>";

    // PASSAGEM POR REFERENCIA & comercial indica a passagem por referencia, indica tambem que o valor deve ser alterado tambem fora da funçao
    echo "<h4>Passagem por referencia</h4>";

    function salario_b(&$num){
        $num += 200;
        echo "Dentro da função 1 - salario com aumento: R$ " . number_format($num, 2, ",", "." ) . "<br><br>";
    }

    $salario_b = 9300;
    echo "Fora da função 2 - salario sem aumento: R$ " . number_format($salario_b, 2, ",", "." ) . "<br><br>";
    salario_b($salario_b);
    echo "Fora da função 3 - salario com aumento ao utilizar o &: R$ " . number_format($salario_b, 2, ",", "." ) . "<br><br>";

    echo "<hr>";

    // FUNÇÃO RECURSIVA
    echo "<h4>Função recursiva</h4>";

    function exibe($num){
        if($num >= 1){
            echo "Valor passado para a função: $num <br><br>";
            $qnt = $num - 1;
            exibe($qnt);
        }
        

    }

    exibe(10);






















        ?>
    </body>

</html>