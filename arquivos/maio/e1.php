<?php
// Murilo Ramalho da Mata - exercicio 1
$opcao = $argv[1];
$resultado = 0;
for ($c = 0;$c<=10;$c++) {
    $resultado = $opcao*$c;
    echo "$opcao X $c = $resultado \n";
}
?>