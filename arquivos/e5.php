<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exemplo</title>
</head>
<body>
    <h1>calculo da IMC</h1>
    <?php
    $_peso = 60;
    $_altura = 160;
    $_imc = $_peso / ($_altura ** 2);
    echo "se imc é $_imc kg/m2"
    ?>
</body>
</html>