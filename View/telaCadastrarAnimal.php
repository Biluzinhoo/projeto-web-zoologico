<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Usuarios</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="form_usuario.css">
</head>
<body>
    <?php  include_once("viewMenu.php"); ?>
    <h1>Cadastrar Usuarios</h1>
          <!-- Formulario de Castro de novo usuario --> 
    <div class="container">
    <form id="dados_usuarios" action="cadastrar_usuario.php" method="post">
        <label for="id">Id</label>
        <input type="text" name="id" id="id" placeholder="" value="--">
        <label for="name">Nome</label>
        <input type="text" name="nome" id="name" placeholder="Nome" value="<?php echo $usuario['nome'];?>"> 
        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="Email"  value="<?php echo $usuario['email'];?>">
        <label for="password">Senha</label>
        <input type="password" name="senha" id="password" placeholder="Password"  value="<?php echo $usuario['senha'];?>">
        <label for="data_cadastro">Data cadastro</label>
        <input type="date" name="data_cadastro" id="data_cadastro" placeholder="Data cadastro"  value="<?php echo $usuario['data_cadastro'];?>" disabled>  
        <input type="submit" value="Cadastrar Novo Usuario">
    </form>
    </div>
</body>
</html>