<?php
    try{
        $pdo = new PDO("mysql:dbname=mercado;host=localhost", "root", "");
    }catch(PDOException $e){
        echo "Erro: ".$e->getMessage();

    }
?>