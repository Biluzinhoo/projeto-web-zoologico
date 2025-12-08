<?php
include_once(__DIR__."/../Banco/config.php");

function insertUsuario($nome, $email, $senha) {
    global $conn;
    $senhaHash = password_hash($senha, PASSWORD_DEFAULT);
    $sql = $conn->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)");
    return $sql->execute([$nome, $email, $senhaHash]);
}

function getUsuarioByEmail($email) {
    global $conn;
    $sql = $conn->prepare("SELECT * FROM usuarios WHERE email=?");
    $sql->execute([$email]);
    return $sql->fetch(PDO::FETCH_ASSOC);
}