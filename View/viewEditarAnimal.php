<style>
body {
    font-family: Arial, sans-serif;
    background: #f5f5f5;
    margin: 0;
    padding: 0;
}

.form-container {
    width: 90%;
    max-width: 500px;
    margin: 40px auto;
    background: #fff;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 3px 12px rgba(0,0,0,0.1);
}

h1 {
    text-align: center;
    margin-bottom: 25px;
    color: #333;
}

label {
    display: block;
    font-weight: bold;
    margin-top: 15px;
    color: #444;
}

input[type="text"] {
    width: 100%;
    padding: 12px;
    margin-top: 6px;
    border: 1px solid #ccc;
    border-radius: 8px;
    font-size: 15px;
    outline: none;
}

input[type="text"]:focus {
    border-color: #4CAF50;
}

input[type="submit"] {
    width: 100%;
    margin-top: 22px;
    padding: 12px;
    border: none;
    background: #4CAF50;
    color: white;
    border-radius: 8px;
    font-size: 16px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background: #45a049;
}
</style>

<?php  
include_once(__DIR__."/../Model/DAAnimal.php");
$animal = getAnimal($_GET["id"]);
include_once("viewMenu.php");
?>

<div class="form-container">

<h1>Editar Animal</h1>

<form action="../Controller/animalController.php" method="post">
    <input type="hidden" name="id" value="<?= $animal['id'] ?>">

    <label>Nome</label>
    <input type="text" name="nome" value="<?= $animal['nome'] ?>" required>

    <label>Espécie</label>
    <input type="text" name="especie" value="<?= $animal['especie'] ?>" required>

    <input type="submit" value="Salvar">
</form>

</div>