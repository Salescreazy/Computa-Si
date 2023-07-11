<?php 
    $servidor       = "localhost";
    $bancodedados   = "manutencao";
    $usuario        = "root";
    $senha          = "";

    try{
        $pdo = new PDO("mysql:host=$servidor;dbname=$bancodedados;charset=utf8",$usuario,$senha);
        $connection_status = $pdo->getAttribute(PDO::ATTR_CONNECTION_STATUS);
        } catch(PDOException $e){
            echo "Erro ao conectar com o banco de dados: ".$e->getMessage();
            
        }