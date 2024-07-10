<?php
// FILTER_SANTIZER_STRING -ESTA OBSOLETO FOI UTILIZADO O -> FILTER_UNSAFE_RAW

echo "<h4>METODO POST RECOMENDADO PADRÃO - RECUPERA TODOS OS DADOS INDIVIDUALMENTE</h4>";
$nome_cliente = filter_input(INPUT_POST, "nome_cliente", FILTER_UNSAFE_RAW);

$email_cliente = filter_input(INPUT_POST, "email_cliente", FILTER_SANITIZE_EMAIL);

$senha_cliente = filter_input(INPUT_POST, "senha_cliente", FILTER_UNSAFE_RAW);



echo "Nome do cliente: $nome_cliente <br><br>";
echo "O e-mail do cliente: $email_cliente <br><br>";
echo "Senha do cliente: $senha_cliente <br><br>";

// --- Não usar esse desta forma nao e certo---
echo "<hr>";
echo "<h4>METODO POST NÃO E RECOMENDADO</h4>";
$nome_cliente_não_usar = $_POST['nome_cliente'];

echo "Nome do Cliente: $nome_cliente_não_usar <br><br>";

// Formula no qual voce recebe todos os campos de uma so vez.
echo "<hr>";
echo "<h4>METODO POST RECOMENDADO UTILIZA UM - ARRAY E RECUPERA TODOS OS DADOS</h4>";

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

var_dump($dados);

// Usar o nome da variavel e os dados do array $dados['nome_cliente'].
echo "<br><br>";
echo "Nome do cliente: " . $dados['nome_cliente'] . " <br><br>";
echo "O e-mail do cliente: " . $dados['email_cliente'] . " <br><br>";
echo "Senha do cliente: " . $dados['senha_cliente'] . " <br><br>";
