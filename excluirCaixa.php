<?php
    require 'config.php';

    if(isset($_GET['id']) && empty($_GET['id']) == false){
        $id = addslashes($_GET['id']);
        $sql = "DELETE FROM caixa WHERE id = '$id'";
        $pdo -> query($sql);
        header("Location: caixa.php");

    }else{
        header("Location: caixa.php");
    }
?>