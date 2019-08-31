<?php
    require 'config.php';

    if(isset($_GET['id']) && empty($_GET['id']) == false){
        $id = addslashes($_GET['id']);
        $sql = "DELETE FROM despesa WHERE id = '$id'";
        $pdo -> query($sql);
        header("Location: despesa.php");

    }else{
        header("Location: despesa.php");
    }
?>