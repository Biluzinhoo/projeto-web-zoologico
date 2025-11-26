<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios</title>
    <link rel="stylesheet" href="style.css">
    <style>
    #tabela_usuarios {
        border-collapse: collapse;
        text-align: left;
        width: 100%;
    
    }
    #form_pesquisar {
        display: flex;
        border-collapse: collapse;
        justify-content: center;
        text-align: left;
        width: 100%;
        align-items: baseline;
    
    }
    #form_pesquisar input[type=text] { 
        display: inline-block; 
        width: 50%;
        min-height: 30px;; 
        color:blue;
    }
    #form_pesquisar input[type=submit] { 
        display: inline-block; 
        width: 20%;
        min-height: 30px;; 
        color:blue;
    }
    </style>
</head>
<body>
<?php   include_once("viewMenu.php"); ?>

<?php if (isset($_GET["pesquisaByName"] )){
    $pesquisaByName = Trim($_GET["pesquisaByName"]);
} else {
    $pesquisaByName = "";

}
?>
<form  id="form_pesquisar" action="telaListaUsuarios.php" method="get">
    <label for="pesquisaByName">Pesquisa por nome</label>
    <input type="text" name="pesquisaByName" id="pesquisaByName" placeholder="Pesquisa por nome" value=<?php echo $pesquisaByName ;?>>
    <input type="submit" value="Pesquisar">
</form>
<?php   include_once("viewListagemUsuarios.php"); ?>
</body>
</html>