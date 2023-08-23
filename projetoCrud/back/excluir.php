<?php
    include "../bd/conect.php";

    $codigo = $_REQUEST["cod"];
    $sql = "delete from alunos where codigo = :codigo";

    $result = $conexao->prepare($sql);
    $result->bindValue(":codigo", $codigo);
    $result->execute();

    header("location: ../pages/consulta.php?status=1");
?>