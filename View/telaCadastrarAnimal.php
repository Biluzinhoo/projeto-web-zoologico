<?php include_once("viewMenu.php"); ?>

<h1>Cadastrar Animal</h1>

<form action="../Controller/animalController.php" method="post">
    <label>Nome</label>
    <input type="text" name="nome" required>

    <label>Espécie</label>
    <input type="text" name="especie" required>

    <input type="submit" value="Salvar">
</form>
