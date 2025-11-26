<?php
    include_once(__DIR__."/../Model/DAUsuario.php");

    $method = $_SERVER['REQUEST_METHOD'];

    if ($method == "POST") {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        if (insertUser($nome,$email,$senha)) {
            header("Location: ../View/telaListaUsuarios.php");
        } else {
            echo "Erro ao cadastrar o usuário";
        }
    } 
?>