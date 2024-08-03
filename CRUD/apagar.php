    <?php
    session_start();
    ob_start();

    //Id do usuário que sera editado
    $id = filter_input(INPUT_GET, 'id_usuario', FILTER_SANITIZE_NUMBER_INT);

    var_dump($id);

    //Conexao BD
    include_once 'conexao.php';

    echo "<h1>Deletar Usuário</h1>";

    //Menu simples
    echo "<a href='crud.php'>Listar</a><br>";
