<?php
    require 'config.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Cheques</title>
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
    <h1 class="display-3">Cheques</h1>

    <a name="" id="" class="btn btn-primary" href="index.html" role="button">Voltar</a>
    <table border="1" width="800" class="table-hover table-bordered table-striped">
		<tr>
			<th>Data de vencimento</th>
            <th>Valor</th>
            <th>Fornecedor</th>
            <th>Ações</th>
		</tr>
		<?php
		$sql = $pdo->prepare("SELECT * FROM cheque");
		$sql->execute();

		if($sql->rowCount() > 0) {
			foreach($sql->fetchAll() as $item) {
				?>
				<tr>
					<td><?php echo date('d/m/Y ', strtotime($item['vencimento'])); ?></td>
					<td>R$
                    <?php echo $item['valor'] ?>
                    </td>
                    <td>
                        <?php echo $item['fornecedor'] ?>
                    </td>
                    <td>
                        <?php $id = $item['id'] ;
                        echo '<a href="editarCheque.php?id='.$id.'">Editar</a> <a href="excluirCheque.php?id='.$id.'">Excluir</a>'
                        ?>
                    </td>
                </tr>
                
				<?php
			}
		}
        ?>
        <td>Total</td>
        <td>R$
            <?php 
                $sql = $pdo->prepare("SELECT sum(valor) FROM cheque");
                $sql->execute();
                foreach($sql->fetchAll() as $total){
                    echo round($total['sum(valor)'], 2);
                }
            ?>
        </td>
    </table>
    <a name="" id="" class="btn btn-primary" href="cadastrarCheque.php" role="button">Inserir cheque</a><br>
    <br>
    <br>
    <br>
    <br>
    <script src="script.js" type="text/javascript"></script>
    <a name="" id="" class="btn btn-danger" role="button" onclick="confirmar(3)">Apagar tudo</a>

    </div>
   
  </body>
</html>