<?php
session_start();
include_once(__DIR__ . "/../Banco/config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $sql = $conn->prepare("SELECT * FROM usuarios WHERE email=?");
    $sql->execute([$email]);

    $user = $sql->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($senha, $user["senha"])) {
        $_SESSION["user_id"] = $user["id"];
        $_SESSION["user_name"] = $user["nome"];

        header("Location: telaListaAnimais.php");
        exit;
    } else {
        $erro = "Email ou senha incorretos!";
    }
}
?>


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
button:hover {
    background: #003580;
}
</style>
</head>
<body>

<div class="card">

<h2>Login</h2>

<?php if(isset($erro)): ?>
    <p style="color:red;"><?= $erro ?></p>
<?php endif; ?>

<?php if(isset($_GET["msg"]) && $_GET["msg"] == "registered"): ?>
    <p style="color:green;">Registrado com sucesso! Faça login.</p>
<?php endif; ?>


<form method="post">
    <input type="email" name="email" placeholder="Seu email" required>
    <input type="password" name="senha" placeholder="Sua senha" required>
    <button type="submit">Entrar</button>
</form>

<p>Não tem conta? <a href="viewRegistro.php">Criar conta</a></p>

</div>

</body>
</html>
