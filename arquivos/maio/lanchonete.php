<?php
// Murilo Ramalho da Mata
echo "restaurante Bejamin \n";
echo "1 - COXINHA R$ 3,50 \n";
$coxinha = 3.50;
echo "2 - KIBE R$ 3,60\n";
$kibe = 3.60;
echo "3 - HANBURGUER R$ 4,00 \n";
$hamb = 4.00;
echo "4 - COCA-COLA R$ 3,50 \n";
$coca = 3.50;
echo "5 - FANTAN UVA R$ 3,50\n";
$fanta = 3.50;
$escolha1 = 1;
if ($escolha1 == 1) {
    echo "coxinha R$ 3,50 \n";
    echo "ESCOLHA A QUANTIDADE \n";
    $escolha2 = 4;
    $preço = $coxinha*$escolha2;
    echo "$escolha2 coxinhas são R$ $preço";
} elseif ($escolha1 == 2) {
    echo "KIBE R$ 3,60 \n";
    echo "ESCOLHA A QUANTIDADE \n";
    $escolha2 = 6;
    $preço = $kibe*$escolha2;
    echo "$escolha2 kibes são R$ $preço";
} elseif ($escolha1 == 3) {
    echo "HAMBURBGER R$ 4,00 \n";
    echo "ESCOLHA A QUANTIDADE \n";
    $escolha2 = 2;
    $preço = $hamb*$escolha2;
    echo "$escolha2 hamburguers são R$ $preço";
} elseif ($escolha1 == 4) {
    echo "COCA-COLA R$ 3,50 \n";
    echo "ESCOLHA A QUANTIDADE \n";
    $escolha2 = 7;
    $preço = $coca*$escolha2;
    echo "$escolha2 cocas são R$ $preço";
} elseif ($escolha1 == 5) {
    echo "FANTA R$ 3,50 \n";
    echo "ESCOLHA A QUANTIDADE \n";
    $escolha2 = 9;
    $preço = $fanta*$escolha2;
    echo "$escolha2 fantas são R$ $preço";
} else {
    echo "opção inexistente";
}
?>
