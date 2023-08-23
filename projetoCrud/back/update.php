<?php
include "../bd/conect.php";
$codigo = $_REQUEST["cod"];
$aluno = $_REQUEST["aluno"];
$curso = $_REQUEST["curso"];
$periodo = $_REQUEST["periodo"];

$sql = "UPDATE alunos SET nome = :aluno, curso = :curso, periodo = :periodo WHERE codigo = :codigo";

$result = $conexao->prepare($sql);
$result->bindValue(":codigo", $codigo);
$result->bindValue(":aluno", $aluno);
$result->bindValue(":curso", $curso);
$result->bindValue(":periodo", $periodo);

$result->execute();
$msg = "O aluno $aluno foi alterado com sucesso !";   

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .bg{background: url(../img/danonangus.jpg) center;}
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>alterado</title>
</head>
<body class="bg-danger">
    <div class="contaier">
        <div class="row">
            <div class="col-sm-8 mx-auto">
                <h1 class="bg-success bg">Altera aluno</h1>
                <div class="alert alert-success mt-3">
                    <b>Mensagem: </b><?php echo $msg ?>
                </div>
                <a href="../pages/index.php" class="btn btn-success bg">Voltar</a>
            </div>
        </div>
    </div>
</body>
</html>