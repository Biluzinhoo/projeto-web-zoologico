<?php 
include_once("viewMenu.php");
include_once(__DIR__."/../Model/DAAnimal.php");

$pesquisa = $_GET["pesquisa"] ?? "";
$animais = getAllAnimais($pesquisa);
?>

<h1>Lista de Animais</h1>

<form method="get">
    <input type="text" name="pesquisa" placeholder="Pesquisar por nome" value="<?= $pesquisa ?>">
    <input type="submit" value="Buscar">
</form>

<?php include("viewListagemAnimais.php"); ?>
