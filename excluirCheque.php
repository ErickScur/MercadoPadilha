<?php
    require 'config.php';

    if(isset($_GET['id']) && empty($_GET['id']) == false){
        $id = addslashes($_GET['id']);
        $sql = "DELETE FROM cheque WHERE id = '$id'";
        $pdo -> query($sql);
        header("Location: cheque.php");

    }else{
        header("Location: cheque.php");
    }
?>