<!DOCTYPE html>
<html lang="pt-br">
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
    <div class="bg-primary text-white text-center p-5 mb-2 bg">
        <h1>Projeto de PAW - Sistema Academico</h1>
        <p>Elaborado por Guilherme H. Souza</p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-8 mx-auto">
                <h1 class="">Cadastro de Alunos</h1>
                <form action="./insert.php" method="post">
                    <p>
                        Digite o nome do Aluno
                        <input type="text" name="aluno" id="aluno" class="form-control">
                    </p>
                    <p>
                        Digite o curso
                        <input type="text" name="curso" id="curso" class="form-control">
                    </p>
                    <p>
                        Digite o periodo
                        <input type="text" name="periodo" id="periodo" class="form-control">
                    </p>
                    <p>
                        <input type="submit" value="Cadastrar" class="btn btn-success bg">
                        <input type="reset" value="Limpar" class="btn btn-warning bg">
                        <a href="index.php" class="btn btn-link bg-primary bg">Voltar</a>
                    </p>                    
                </form>
            </div>
        </div.>
    </div>
</body>
</html>