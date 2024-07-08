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
    echo $retorno_dados_funcao . "<br>";


        ?>
    </body>

</html>