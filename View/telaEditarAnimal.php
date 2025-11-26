<?php  
include_once(__DIR__."/../Model/DAAnimal.php");
$animal = getAnimal($_GET["id"]);
include_once("viewMenu.php");
?>

<h1>Editar Animal</h1>

<form action="../Controller/animalController.php" method="post">
    <input type="hidden" name="id" value="<?= $animal['id'] ?>">

    <label>Nome</label>
    <input type="text" name="nome" value="<?= $animal['nome'] ?>" required>

    <label>Espécie</label>
    <input type="text" name="especie" value="<?= $animal['especie'] ?>" required>

    <input type="submit" value="Salvar">
</form>