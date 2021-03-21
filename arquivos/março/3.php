<?php
//exercicio 4 - urilo ramalho da mata
function calculo($n) {
    $n = 1000;
    $p5 = $n*5/100;
    $p10 = $n*10/100;
    $p15 = $n*15/100;
    echo "O valor com 5% é: $p5\n";

    echo "O valor com 10% é: $p10\n";

    echo "O valor com 15% é:  $p15";
};
calculo()
?>