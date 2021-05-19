<?php 
// Murilo Ramalho da Mata - exercicio 2
$nome = $argv[1];
$quantidade = $argv[2];
for ($c = 0; $c<=$quantidade;$c++) {
    $valor= $argv[3];
    echo "nome: $nome, valor: $valor \n";
}
?> 