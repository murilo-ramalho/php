<?php
include "conect.php";

$codigo = $_REQUEST["cod"];

$sql = "CALL ExcluirAlunoPorCodigo(:codigo)";

$result = $conexao->prepare($sql);
$result->bindValue(":codigo", $codigo);
$result->execute();

header("location: consulta.php?status=1");
?>
