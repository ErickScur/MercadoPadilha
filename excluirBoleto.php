<?php
    require 'config.php';

    if(isset($_GET['id']) && empty($_GET['id']) == false){
        $id = addslashes($_GET['id']);
        $sql = "DELETE FROM boleto WHERE id = '$id'";
        $pdo -> query($sql);
        header("Location: boleto.php");

    }else{
        header("Location: boleto.php");
    }
?>