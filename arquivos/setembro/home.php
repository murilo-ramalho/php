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
    <!--Murilo Ramalho da Mata-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>

<body>
    <div class="container p-5 my-5 bg-primary text-white">
        <h1>Usuário Logado: <?= $_SESSION["usuario"] ?></h1>
        <p>Aqui a vitrine da loja</p>
        <a href="destroy.php"><button type="submit">Efetuar Logoff</button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>