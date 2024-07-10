<?php
// FILTER_SANTIZER_STRING -ESTA OBSOLETO FOI UTILIZADO O -> FILTER_UNSAFE_RAW
$nome_cliente = filter_input(INPUT_GET, "nome_cliente", FILTER_UNSAFE_RAW);

$email_cliente = filter_input(INPUT_GET, "email_cliente", FILTER_SANITIZE_EMAIL);


echo "Nome do cliente: $nome_cliente <br><br>";
echo "E-mail do cliente: $email_cliente <br><br>";
