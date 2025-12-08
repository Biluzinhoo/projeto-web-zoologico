<style>
body {
    font-family: Arial, sans-serif;
    background: #f5f5f5;
    margin: 0;
    padding: 0;
}

.page-container {
    width: 90%;
    max-width: 900px;
    margin: 30px auto;
    background: white;
    padding: 25px;
    border-radius: 12px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

h1 {
    text-align: center;
    margin-bottom: 25px;
    color: #333;
}

.search-box {
    display: flex;
    justify-content: center;
    margin-bottom: 25px;
}

.search-box input[type="text"] {
    width: 60%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 8px 0 0 8px;
    outline: none;
    font-size: 15px;
}

.search-box input[type="text"]:focus {
    border-color: #4CAF50;
}

.search-box input[type="submit"] {
    padding: 10px 18px;
    border: none;
    background: #4CAF50;
    color: white;
    border-radius: 0 8px 8px 0;
    cursor: pointer;
    font-size: 15px;
}

.search-box input[type="submit"]:hover {
    background: #45a049;
}

.table-container {
    margin-top: 20px;
}
</style>

<?php 
session_start();
if (!isset($_SESSION["user_id"])) {
    header("Location: viewLogin.php");
    exit;
}

include_once("viewMenu.php");
include_once(__DIR__."/../Model/DAAnimal.php");

$pesquisa = $_GET["pesquisa"] ?? "";
$animais = getAllAnimais($pesquisa);
?>

<div class="page-container">

<h1>Lista de Animais</h1>

<form method="get" class="search-box">
    <input type="text" name="pesquisa" placeholder="Pesquisar por nome..." value="<?= $pesquisa ?>">
    <input type="submit" value="Buscar">
</form>

<div class="table-container">
    <?php include("viewListagemAnimais.php"); ?>
</div>

</div>