<?php

include './DB/connect.php';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuario</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <h1>Cadastro de Usuario</h1>

    <form action="cadastra_use.php" method="post">
        <input type="text" name = 'nome' id = 'nome' placeholder = 'Digite seu nome de usuario'>
        <br>
        <input type="text" name = 'cpf' id = 'cpf' placeholder = 'Digite seu cpf'>
        <br>
        <input type="text" name = 'fone' id = 'fone' placeholder = 'Digite seu telefone'>
        <br>
        <input type="email" name="email" id="email" placeholder = 'Digite seu email'>
        <br>
        <input type="password" name="senha" id="senha" placeholder = 'Digite sua senha'>
        <br>
        <input type="password" name="conf_senha" id="conf_senha" placeholder = 'Confirme sua senha'>
        <br>
        <input type="submit" name="cadastrar" value="Cadastrar">

    </form>
    
</body>
</html>