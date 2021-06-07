<?php
// Murilo Ramalho da Mata - ex2
$escolha = $argv[1];
$B = $argv[2];
$h = $argv[3];
if ($escolha=="retangulo") {
    retangulo($B,$h);
} else {
    triangulo($B,$h);
};

function retangulo($base, $altura) {
    $area = $base * $altura;
    echo "a area do retangulo é de $area";
};
function triangulo($base, $altura) {
    $area = ($base * $altura)/2;
    echo "a area do triangulo é de $area";
};
?>