<?php include_once("View/viewMenu.php"); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Zoológico</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            background-color: #f0f0f0;
        }

        .container {
            margin-top: 60px;
        }

        h1 {
            color: #333;
        }

        .botao {
            display: inline-block;
            padding: 12px 25px;
            background-color: #333;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-size: 18px;
            transition: 0.2s;
        }

        .botao:hover {
            background-color: #555;
        }

        p {
            color: #444;
            font-size: 18px;
        }

        .box {
            background: white;
            padding: 30px;
            width: 60%;
            margin: auto;
            border-radius: 10px;
            box-shadow: 0 0 15px #0002;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="box">
        <h1>Bem-vindo ao Zoológico do Carlos</h1>
        <p>Aqui você controla os dados de animais do zoológico</p>

        <a href="View/viewLogin.php" class="botao">Ver Animais</a>
    </div>
</div>

</body>
</html>
