<?php
//Murilo Ramalho da Mata - exE
function area($altura, $Base, $base) {
    $area= $altura*($Base * $base);
    echo "a area do trapezio é de $area";
}
$h = $argv[1];
$B = $argv[2];
$b = $argv[3];
area($h,$B,$b);
?>