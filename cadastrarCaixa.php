<?php
    require 'config.php';
    if(isset($_POST['valor'])) {
        $tipo = $_POST['valor'];
        $valor = str_replace(",", ".", $_POST['valor']);
        $valor = floatval($valor);
    
        $sql=$pdo->prepare("INSERT INTO caixa (valor, data) VALUES (:valor, NOW())");
        $sql->bindValue(":valor", $valor);
        $sql->execute();
        header("Location: caixa.php");
	      exit;
    }

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Cadastrar caixa</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <script src="assets/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="assets/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="assets/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </head>
  <body>
      
    <div class="container">
    <a name="" id="" class="btn btn-primary" href="index.html" role="button">Voltar</a>
    <h1>Adicionar vendas caixa</h1>
        <form action="" method="post">
                <h2>Valor</h2><br/>
                <input type="text" name="valor" pattern="[0-9.,]{1,}" /><br/><br/>
                <input type="submit" value="Inserir" />
        </form>
    </div>
   
  </body>
</html>