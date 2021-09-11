<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login do Sistema</title>
</head>
<body>
    <h2>Inicie o sistema</h2>
    <form action="home.php" method="post">
        <label for="user">Usuário</label>
        <br>
        <input type="text" class="form-control" name="user" id="user">
        <br>
        <label for="password">Senha</label>
        <br>
        <input type="password" class="form-control" name="password" id="password">
        <br>
        <button type="submit">Logar</button>
    </form>
</body>
</html>