<?php
//exercicio 7 - murilo ramalho da mata 2º ams ds
$n1 = 3;
$n2 = 5;
$n3 = 7;
if ($n1>$n2 && $n1>$n3)
    if ($n2>$n3)
        echo "o maior numero é $n1, e o menor numero é $n3";
    else
        echo "o maior numero é $n1, e o menor numero é $n2";

elseif ($n2>$n1 && $n2>$n3)
    if ($n1>$n3)
        echo "o maior numero é $n2, e o menor numero é $n3";
    else
        echo "o maior numero é $n2, e o menor numero é $n1";
elseif ($n3>$n2 && $n3>$n1)
    if ($n1>$n2)
        echo "o maior numero é $n3, e o menor numero é $n2";
    else
        echo "o maior numero é $n3, e o menor numero é $n1";
   
?>