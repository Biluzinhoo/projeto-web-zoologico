<?php
session_start();
include_once(__DIR__ . "/../Model/DAUsuario.php");

$method = $_SERVER["REQUEST_METHOD"];
$action = $_GET["action"] ?? "";

if ($action === "register" && $method === "POST") {
    $nome  = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    if (insertUsuario($nome, $email, $senha)) {
        header("Location: ../View/viewLogin.php?msg=registered");
    } else {
        header("Location: ../View/viewRegistro.php?error=1");
    }
    exit;
}

if ($action === "login" && $method === "POST") {
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    
    $user = getUsuarioByEmail($email);

    if ($user && password_verify($senha, $user['senha'])) {
        $_SESSION["user_id"] = $user["id"];
        $_SESSION["user_name"] = $user["nome"];
        header("Location: ../View/viewListaAnimais.php");
    } else {
        header("Location: ../View/viewLogin.php?error=1");
    }
    exit;
}

if ($action === "logout") {
    session_destroy();
    header("Location: ../index.php");
    exit;
}