<?php

// conexao sem a porta (ERRO DE COXEÇÃO SE HOUVER PROBLEMA DE CONEXÃO)
// True - Apresentar a mensagem de alerta com erro
// false - Não apresentar a mensagem de alerta com erro.
ini_set('display_errors', false);


//Credenciais do banco de dados
$hos = "localhost";
$user = "root";
$pass = "";
$dbname = "celke";
$port = 3306;

// conexão com a porta USADO QUANDO HOUVER MAIS DE UM BANCO DE DADOS E NECESSARIO IDENTIFICAR A PORTA CORRETA
//$conn = mysqli_connect($hostname . ":" . $portname, $username, $password, $dbname);



// conexão sem a porta
$conn = mysqli_connect($host, $user, $pass, $dbname);

if ($conn) {
    //echo "Conexao com banco de dados realizado com sucesso! <br>";
} else {

    echo "Erro: Conexao com banco de dados não realizado, Tente mais tarde ou entre em contato com ... "
        . mysqli_connect_error();
}


// Nunca apresente o erro real
// Usar:
// echo "Tente mais tarde ou entre em contato com ...";
