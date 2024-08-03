    <?php
    session_start();
    ob_start();

    //Id do usuário que sera editado
    $id = filter_input(INPUT_GET, 'id_usuario', FILTER_SANITIZE_NUMBER_INT);

    var_dump($id);

    //Conexao BD
    include_once 'conexao.php';

    $query_usuario = "DELETE FROM usuarios WHERE id=$id";
    mysqli_query($conn, $query_usuario);

    if (mysqli_affected_rows($conn)) {
        $_SESSION['msg'] = "<p style='color: #0000ff'>Usuario Deletado com sucesso!</p>";
        header("Location: crud.php");
    } else {
        $_SESSION['msg'] = "<p style='color: #f00'>Erro: Usuario não foi Deletado!</p>";
        header("Location: crud.php");
    }
