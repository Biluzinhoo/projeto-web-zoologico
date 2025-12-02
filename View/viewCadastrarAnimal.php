<?php include_once("viewMenu.php"); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Animal</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: #eef2f5;
        }

        .container {
            width: 100%;
            max-width: 450px;
            margin: 40px auto;
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 3px 12px rgba(0,0,0,0.15);
        }

        h1 {
            text-align: center;
            margin-bottom: 25px;
            color: #333;
        }

        label {
            font-weight: bold;
            margin-bottom: 5px;
            display: block;
            color: #444;
        }

        input[type=text] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
            margin-bottom: 15px;
            font-size: 14px;
        }

        input[type=submit] {
            width: 100%;
            padding: 12px;
            background: #2b7cff;
            border: none;
            color: white;
            font-size: 16px;
            font-weight: bold;
            border-radius: 6px;
            cursor: pointer;
            transition: 0.2s;
        }

        input[type=submit]:hover {
            background: #1d5fd3;
        }
    </style>
</head>

<body>

<div class="container">
    <h1>Cadastrar Animal</h1>

    <form action="../Controller/animalController.php" method="post">
        <label>Nome do Animal</label>
        <input type="text" name="nome" required placeholder="Ex: Simba">

        <label>Espécie</label>
        <input type="text" name="especie" required placeholder="Ex: Leão">

        <input type="submit" value="Salvar">
    </form>
</div>

</body>
</html>
