<?php

// conexao sem a porta (ERRO DE COXEÇÃO SE HOUVER PROBLEMA DE CONEXÃO)
ini_set('display_errors', false);

// Para usar o metodo (try catch) deve ser chamado o mysqli_report(MYSQLI_REPORT_ALL)
mysqli_report(MYSQLI_REPORT_ALL);

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "shift";
$portname = 3306;

// conexão com a porta USADO QUANDO HOUVER MAIS DE UM BANCO DE DADOS E NECESSARIO IDENTIFICAR A PORTA CORRETA
//$conn = mysqli_connect($hostname . ":" . $portname, $username, $password, $dbname);


try {
    // conexão sem a porta
    $conn = mysqli_connect($hostname, $username, $password, $dbname);

    if ($conn) {
        echo "Conexao com banco e dados realizado com sucesso! <br><br>";
    } else {
        echo "Erro: Conexao com banco e dados não realizado com sucesso. Erro gerado: " . mysqli_connect_error();
    }
} catch (Exception $erro) {
    echo "Erro: Conexao com banco e dados não realizado com sucesso. Erro gerado: " . $erro->getMessage();
}
