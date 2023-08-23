<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .bg{background: url(../img/danonangus.jpg) center;}
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
                <h1 class="">Consulta de Alunos</h1>
                <?php
                    if ( isset($_REQUEST["status"]) && $_REQUEST["status"]="1" )
                    {
                        echo "<div class='alert alert-danger bg'>
                                O aluno foi excluido com sucesso !
                              </div>";
                    }
                    else
                    if ( isset($_REQUEST["status"]) && $_REQUEST["status"]="2" )
                    {
                        echo "<div class='alert alert-info bg'>
                                O aluno foi alterado com sucesso !
                              </div>";
                    }
                ?>
                <table class="table">
                    <tr>
                        <th>RM</th>
                        <th>Nome</th>
                        <th>Curso</th>
                        <th>Periodo</th>
                        <th>Altera/Exclui</th>
                    </tr>

                    <?php
                        include "../bd/conect.php";

                        $sql = "select * from alunos";

                        $result = $conexao->prepare($sql);
                        $result->execute();

                        while ($linha = $result->fetch(PDO::FETCH_ASSOC))
                        {                    
                    ?>
                        <tr>
                            <td><?= $linha["codigo"] ?></td>
                            <td><?= $linha["nome"] ?></td>
                            <td><?= $linha["curso"] ?></td>
                            <td><?= $linha["periodo"] ?></td>
                            <td>
                                <a href="alterar.php?cod=<?= $linha["codigo"]?>" class="btn btn-success btn-sm bg">Altera</a>
                                <a href="../back/excluir.php?cod=<?= $linha["codigo"]?>" class="btn btn-danger btn-sm bg">Excluir</a>
                            </td>
                        </tr>
                    <?php
                        }
                    ?>                
                </table>
                <p>
                    <a href="index.php" class="btn btn-link bg-primary bg">Voltar</a>
                </p>                
            </div>
        </div>
    </div>
</body></html>