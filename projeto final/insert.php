<?php

include "conect.php";

$aluno = $_REQUEST["aluno"];
$curso = $_REQUEST["curso"];
$periodo = $_REQUEST["periodo"];

$sql = "CALL InserirAluno(:aluno, :curso, :periodo)";

$result = $conexao->prepare($sql);
$result->bindValue(":aluno", $aluno);
$result->bindValue(":curso", $curso);
$result->bindValue(":periodo", $periodo);

$result->execute();

$msg = "O aluno $aluno foi cadastrado com sucesso !";

?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <style>
        .bg{background: url(danonangus.jpg) center;}
        </style>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </head>
    <body class="bg-danger">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 mx-auto">
                    <h1 class="bg-success bg">Cadastro de Alunos</h1>
                    <div class="alert alert-success mt-3">
                        <b>Mensagem: </b><?php echo $msg; ?>
                    </div>
                    <a href="cadastro.php" class="btn btn-success bg">Voltar</a>
                </div>
            </div>
        </div>
    </body>
</html>