<?php
// Murilo Ramalho da Mata
echo "digite o valor de A, B e C \n";
$a = $argv[1];
$b = $argv[2];
$c = $argv[3];
$delta = $b ** 2 - 4 * $a * $c;
echo "o valor de delta é $delta \n";
$x1 = -$b + $delta / 2 * $a;
$x2 = -$b - $delta / 2 * $a;
echo "o valor de X1 é $x1, e o valor de X2 é $x2";
?>