<?php
    require 'config.php';
    $id = $_GET['id'];
    if($id==1){
        $sql = $pdo->prepare("DELETE FROM caixa");
        $sql ->execute();
        header("Location: caixa.php");
    }else if($id==2){
        $sql = $pdo->prepare("DELETE FROM cartao");
        $sql ->execute();
        header("Location: cartao.php");
    }else if($id==3){
        $sql = $pdo->prepare("DELETE FROM cheque");
        $sql ->execute();
        header("Location: cheque.php");
    }else if($id==4){
        $sql = $pdo->prepare("DELETE FROM boleto");
        $sql ->execute();
        header("Location: boleto.php");
    }else if($id==5){
        $sql = $pdo->prepare("DELETE FROM despesa");
        $sql ->execute();
        header("Location: despesa.php");
    }

?>