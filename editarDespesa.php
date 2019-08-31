<?php
    require 'config.php';
    $id = $_GET['id'];
   if(isset($_POST['valor'])){
    $valor = str_replace(",", ".", $_POST['valor']);
    $valor = floatval($valor);
       $nome = $_POST['nome'];



       $sql = "UPDATE despesa SET valor = '$valor', data = NOW(), nome = '$nome'  WHERE id = '$id'  ";
       $pdo->query($sql);
       header("Location: despesa.php");
   }
   
   
   
   
   

    $sql = $pdo->query("SELECT * FROM despesa WHERE id = '$id'");

    if($sql->rowCount()>0){
        $dado=$sql->fetch();
    }

?>
<h2>Editar</h2>
        <form method="post">
            Valor:<input type="text" name="valor" pattern="[0-9.,]{1,}" value="<?php echo $dado['valor']; ?>" /> <br><br>

            nome:<input type="text" name="nome" value="<?php echo $dado['nome']; ?>" /> <br><br>
            <input type="submit" value="Atualizar despesa">

        </form><br><br>