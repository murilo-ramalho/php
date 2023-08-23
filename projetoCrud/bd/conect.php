<?php
    $servidor = "localhost";
    $bancodados = "aula";
    
    $datasource = "mysql:host=$servidor;dbname=$bancodados;charset=UTF8";
    $usuario = "root";
    $senha = "";

    $conexao = new PDO($datasource, $usuario, $senha);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>