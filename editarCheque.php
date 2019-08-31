<?php
    require 'config.php';
    $id = $_GET['id'];
   if(isset($_POST['valor'])){
    $valor = str_replace(",", ".", $_POST['valor']);
    $valor = floatval($valor);
       $fornecedor = $_POST['fornecedor'];
       $vencimento = $_POST['data'];


       $sql = "UPDATE cheque SET valor = '$valor', vencimento = '$vencimento', fornecedor = '$fornecedor'  WHERE id = '$id'  ";
       $pdo->query($sql);
       header("Location: cheque.php");
   }
   
   
   
   
   

    $sql = $pdo->query("SELECT * FROM cheque WHERE id = '$id'");

    if($sql->rowCount()>0){
        $dado=$sql->fetch();
    }

?>
<h2>Editar</h2>
        <form method="post">
            Valor:<input type="text" name="valor" pattern="[0-9.,]{1,}" value="<?php echo $dado['valor']; ?>" /> <br><br>

            Data vencimento:<input type="date" name="data" value="<?php echo $dado['vencimento']; ?>" /> <br><br>

            Fornecedor:<input type="text" name="fornecedor" value="<?php echo $dado['fornecedor']; ?>" /> <br><br>
            <input type="submit" value="Atualizar cheque">

        </form><br><br>