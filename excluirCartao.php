<?php
    require 'config.php';

    if(isset($_GET['id']) && empty($_GET['id']) == false){
        $id = addslashes($_GET['id']);
        $sql = "DELETE FROM cartao WHERE id = '$id'";
        $pdo -> query($sql);
        header("Location: cartao.php");

    }else{
        header("Location: cartao.php");
    }
?>