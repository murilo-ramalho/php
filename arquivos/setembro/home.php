<?php
//Aqui farei os tratamentos do login
require_once 'config.php';
if (isset($_POST['user'])) {
    $_SESSION["usuario"] = $_POST['user'];
    $_SESSION["senha"] = $_POST['password'];
}
if (!($_SESSION["usuario"] == "admin" && $_SESSION["senha"] == "123")) {
    header('Location: error.php');
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
</head>

<body>
    <h1>Usuário Logado: <?= $_SESSION["usuario"] ?></h1>
    <p>Aqui a vitrine da loja</p>
    <a href="destroy.php"><button type="submit">Efetuar Logoff</button>
</body>
</html>