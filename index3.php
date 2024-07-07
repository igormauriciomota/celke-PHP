<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="images/favicon.ico"/>
        <title>PHP</title>
    </head>

    <body>
        <?php
        echo "<br><br> Exercicio 01 elseif ";
        // ----------------------------------VARIAVEL A
            $a = 3;

            // elseif pode ser usado varias vezes
            if($a == 2){
                echo "Depositar dinheiro. <br><br>";
            } elseif($a == 1) {
                echo "Sacar dinheiro. <br><br>";
            } elseif ($a == 3) {
                echo "extrado da conta corrente. <br><br>";
            } else {
                echo "Opção não encontrada! <br><br>";
            }
            echo "<br><br> Exercicio 02 switch";
            //---------------------------------- VARIAVEL B
            // SWITCH comparar o valor digitado demanda menos processamento demanda menos manutenção.
            $b = 2;

            switch ($b) {
                case 1:
                    echo "Sacar dinheiro. <br><br>";
                    break;

                case 2:
                    echo "Depositar dinheiro. <br><br>";
                    break;

                    case 3:
                        echo "extrado da conta corrente. <br><br>";
                        break;

                default:
                    echo "Opção não encontrada! <br><br>";
                    break;
            }
            echo "Exercicio 03 while <br><br>";
            // ----------------------------------VARIAVEL C

            $c = 1;

            // O while é o comando de repetição
            while($c <= 10){
                echo "Cadastro: $c <br><br>";

                //Incrementar a condição utilizada no while
                $c++;
            }
            echo "Exercicio 04 Do while <br><br>";
            // -----------------------------------VARIAVEL D
            // comando Do ...while
            $d = 1;

            do{
                echo "E-mail enviado: $d <br><br>";
                //Acrescentar o Incremento sempre se nao tera um lupe infinito
                $d++;
            }while($d <= 10);


            echo "Exercicio 05 for <br><br>";
            // -------------------VARIAVEL I vale 50 inicia em 50
            // Comando for -> (inicializa ($i = 50)- çãocondição( $i <= 100) - Incremento($i++))
            for($i = 1; $i <= 10; $i++){
                echo "Relatorio do produto: $i <br>";
            }

            echo "<br><br>";
            for($i = 10; $i >= 1; $i--){
                echo "Quantidade de vagas: $i <br>";

                echo "Novo cadastro. <br><br>";
            }










        ?>
    </body>

</html>