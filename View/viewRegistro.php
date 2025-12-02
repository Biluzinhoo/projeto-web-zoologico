<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Registrar</title>
<style>
body {
    font-family: Arial;
    background: #f0f0f0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}
.card {
    width: 330px;
    padding: 25px;
    background: white;
    border-radius: 12px;
    box-shadow: 0 0 10px #0002;
    text-align: center;
}
input {
    width: 90%;
    padding: 10px;
    margin: 8px 0;
    border-radius: 6px;
    border: 1px solid #ccc;
}
button {
    width: 95%;
    padding: 10px;
    background: #009933;
    color: white;
    border: none;
    border-radius: 6px;
    cursor: pointer;
}
button:hover { background: #007a29; }
</style>
</head>
<body>

<div class="card">
<h2>Registrar</h2>

<?php
if (isset($_GET["error"])) {
    echo "<p style='color:red;'>Erro ao registrar!</p>";
}
?>

<form method="post" action="../Controller/usuarioController.php?action=register">
    <input type="text" name="nome" placeholder="Seu nome" required>
    <input type="email" name="email" placeholder="Seu email" required>
    <input type="password" name="senha" placeholder="Crie uma senha" required>
    <button type="submit">Registrar</button>
</form>

<p>Já tem conta? <a href="viewLogin.php">Entrar</a></p>

</div>

</body>
</html>
