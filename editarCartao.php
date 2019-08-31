<?php
    require 'config.php';
    $id = $_GET['id'];
   if(isset($_POST['valor'])){
    $valor = str_replace(",", ".", $_POST['valor']);
    $valor = floatval($valor);
       $sql = "UPDATE cartao SET valor = '$valor' WHERE id = '$id'  ";
       $pdo->query($sql);
       header("Location: cartao.php");
   }
   
   
   
   
   

    $sql = $pdo->query("SELECT * FROM cartao WHERE id = '$id'");

    if($sql->rowCount()>0){
        $dado=$sql->fetch();
    }

?>
<h2>Editar</h2>
        <form method="post">
            Valor:<input type="text" name="valor" pattern="[0-9.,]{1,}" value="<?php echo $dado['valor']; ?>" /> 
            <input type="submit" value="Atualizar dados">
        </form><br><br>