<?php
// Murilo Ramalho da Mata - ex3
$nome = $argv[1];
$decodificado = sha1($nome);   
echo "$decodificado";
?>