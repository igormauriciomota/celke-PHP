<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="images/favicon.ico" />
    <title>PHP-Formulario POST</title>
</head>

<body>
    <!-- FORMULARIO -e recomendado usar o metodo POST -->

    <h2>Cadastrar usuário</h2>
    <form method="POST" action="processapost.php">
        <!-- Nome do usuario -->
        <label>Nome: </label>
        <input type="text" name="nome_cliente" placeholder="Digite o nome" required /><br><br>
        <!-- E-mail -->
        <label>E-mail: </label>
        <input type="email" name="email_cliente" placeholder="Digite o e-mail" required /><br><br>
        <!-- Senha -->
        <label>Senha: </label>
        <input type="password" name="senha_cliente" placeholder="Digite sua senha" required /><br><br>

        <!-- Botão -->
        <input type="submit" value="cadastrar" />

    </form>

</body>

</html>