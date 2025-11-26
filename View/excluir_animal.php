<?php 
    include_once(__DIR__."/../Model/DAUsuario.php");
    $method = $_SERVER['REQUEST_METHOD'];
    if ($method == "GET") {
        $id = $_GET['id'];
        if (deleteUser($id)) {
            header("Location: ../View/telaListaUsuarios.php");
        } else {
            echo "Erro ao deletar o usuário";
        }
    } 