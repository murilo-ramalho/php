<?php
    $servidor = "localhost";
    $bancodados = "pro22123_008";
    
    $datasource = "mysql:host=$servidor;dbname=$bancodados;charset=UTF8";
    $usuario = "pro22123_fatec";
    $senha = "!@$#Fatec2023";

    $conexao = new PDO($datasource, $usuario, $senha);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>