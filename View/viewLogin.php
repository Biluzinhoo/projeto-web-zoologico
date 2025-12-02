<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Login</title>
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
    background: #0044aa;
    color: white;
    border: none;
    border-radius: 6px;
    cursor: pointer;
}
button:hover { background: #003580; }
</style>
</head>
<body>

<div class="card">

<h2>Login</h2>

<?php
if (isset($_GET["error"])) {
    echo "<p style='color:red;'>Email ou senha incorretos!</p>";
}
if (isset($_GET["msg"]) && $_GET["msg"] == "registered") {
    echo "<p style='color:green;'>Registrado com sucesso!</p>";
}
?>

<form method="post" action="../Controller/usuarioController.php?action=login">
    <input type="email" name="email" placeholder="Seu email" required>
    <input type="password" name="senha" placeholder="Sua senha" required>
    <button type="submit">Entrar</button>
</form>

<p>Não tem conta? <a href="viewRegistro.php">Criar conta</a></p>

</div>

</body>
</html>
