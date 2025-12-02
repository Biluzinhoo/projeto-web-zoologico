<?php
session_start();
include_once(__DIR__ . "/../Banco/config.php");

$method = $_SERVER["REQUEST_METHOD"];
$action = $_GET["action"] ?? "";

if ($action === "register" && $method === "POST") {

    $nome  = $_POST["nome"];
    $email = $_POST["email"];
    $senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);

    $sql = $conn->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)");

    if ($sql->execute([$nome, $email, $senha])) {
        header("Location: ../View/viewLogin.php?msg=registered");
        exit;
    } else {
        header("Location: ../View/viewRegistro.php?error=1");
        exit;
    }
}

if ($action === "login" && $method === "POST") {

    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $sql = $conn->prepare("SELECT * FROM usuarios WHERE email=?");
    $sql->execute([$email]);

    $user = $sql->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($senha, $user['senha'])) {
        $_SESSION["user_id"] = $user["id"];
        $_SESSION["user_name"] = $user["nome"];

        header("Location: ../View/viewListaAnimais.php");
        exit;
    } else {
        header("Location: ../View/viewLogin.php?error=1");
        exit;
    }
}

if ($action === "logout") {
    session_destroy();
    header("Location: ../index.php");
    exit;
}


exit;