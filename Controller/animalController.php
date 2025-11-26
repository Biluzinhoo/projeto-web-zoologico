<?php
include_once(__DIR__."/../Model/DAAnimal.php");

$method = $_SERVER["REQUEST_METHOD"];

if ($method == "POST") {

    $id      = $_POST["id"] ?? "";
    $nome    = $_POST["nome"];
    $especie = $_POST["especie"];

    if ($id == "") {
        insertAnimal($nome, $especie);
    } else {
        updateAnimal($id, $nome, $especie);
    }

    header("Location: ../View/telaListaAnimais.php");
}

if ($method == "GET" && isset($_GET["excluir"])) {
    deleteAnimal($_GET["excluir"]);
    header("Location: ../View/telaListaAnimais.php");
}
