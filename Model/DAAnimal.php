<?php
include_once(__DIR__."/../Banco/config.php");


function insertAnimal($nome, $especie) {
    global $conn;
    $sql = $conn->prepare("INSERT INTO animais (nome, especie) VALUES (?, ?)");
    return $sql->execute([$nome, $especie]);
}

function updateAnimal($id, $nome, $especie) {
    global $conn;
    $sql = $conn->prepare("UPDATE animais SET nome=?, especie=? WHERE id=?");
    return $sql->execute([$nome, $especie, $id]);
}

function deleteAnimal($id) {
    global $conn;
    $sql = $conn->prepare("DELETE FROM animais WHERE id=?");
    return $sql->execute([$id]);
}

function getAnimal($id) {
    global $conn;
    $sql = $conn->prepare("SELECT * FROM animais WHERE id=?");
    $sql->execute([$id]);
    return $sql->fetch();
}

function getAllAnimais($nome = "") {
    global $conn;
    $sql = $conn->prepare("SELECT * FROM animais WHERE nome LIKE ?");
    $sql->execute(['%'.$nome.'%']);
    return $sql->fetchAll();
}
