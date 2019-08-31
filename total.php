<?php
    require 'config.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Relatório</title>
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
    <h1 class="display-3">Relatório</h1>
    <a name="" id="" class="btn btn-primary" href="index.html" role="button">Voltar</a>
    <table  class="table table-hover table-bordered table-striped">
		<tr>
			<th>Total caixa </th>
            <th>Total cartão</th>
            <th>Total boletos</th>
            <th>Total cheques</th>
            <th>Total despesas</th>
        </tr>
        <tr>
            <td class='table-success'>R$
                <?php
                    $sql = $pdo->prepare("SELECT sum(valor) FROM caixa");
                    $sql->execute();
                    foreach($sql->fetchAll() as $total){
                        echo round($total['sum(valor)'], 2);
                    }
                ?>
            </td>
            <td class='table-success'>R$
                <?php
                    $sql = $pdo->prepare("SELECT sum(valor) FROM cartao");
                    $sql->execute();
                    foreach($sql->fetchAll() as $total){
                        echo round($total['sum(valor)'], 2);
                    }
                ?>
            </td>
            <td class='table-danger'>R$
                <?php
                    $sql = $pdo->prepare("SELECT sum(valor) FROM boleto");
                    $sql->execute();
                    foreach($sql->fetchAll() as $total){
                        echo round($total['sum(valor)'], 2);
                    }
                ?>
            </td>
            <td class='table-danger'>R$
                <?php
                    $sql = $pdo->prepare("SELECT sum(valor) FROM cheque");
                    $sql->execute();
                    foreach($sql->fetchAll() as $total){
                        echo round($total['sum(valor)'], 2);
                    }
                ?>
            </td>
            <td class='table-danger'>R$
                <?php
                    $sql = $pdo->prepare("SELECT sum(valor) FROM despesa");
                    $sql->execute();
                    foreach($sql->fetchAll() as $total){
                        echo round($total['sum(valor)'], 2);
                    }
                ?>
            </td>
        </tr>
        <tr>
            <th>Total entrada</th>
            <th>Total saída</th>
            <th>Total líquido</th>
        </tr>
        <tr>
            <td class='table-success'>R$
            <?php
                    $sql = $pdo->prepare("SELECT sum(valor) FROM caixa");
                    $sql->execute();
                    foreach($sql->fetchAll() as $total1){
                    }
                    $sql = $pdo->prepare("SELECT sum(valor) FROM cartao");
                    $sql->execute();
                    foreach($sql->fetchAll() as $total){
                    }
                    $totalEntrada = round($total1['sum(valor)'] + $total['sum(valor)'], 2);
                    echo($totalEntrada);                  
                ?>
            </td>
            <td class="table-danger">R$
            <?php
                    $sql = $pdo->prepare("SELECT sum(valor) FROM boleto");
                    $sql->execute();
                    foreach($sql->fetchAll() as $total1){
                    }
                    $sql = $pdo->prepare("SELECT sum(valor) FROM cheque");
                    $sql->execute();
                    foreach($sql->fetchAll() as $total2){
                    }
                    $sql = $pdo->prepare("SELECT sum(valor) FROM despesa");
                    $sql->execute();
                    foreach($sql->fetchAll() as $total3){
                    }
                    $totalSaida = round($total1['sum(valor)'] + $total2['sum(valor)'] + $total3['sum(valor)'], 2);
                    echo($totalSaida);                  
                ?>
            </td>
            <td>
						<?php if($totalEntrada>$totalSaida): ?>
						<font color="green">R$ <?php echo $totalEntrada-$totalSaida?></font>
						<?php else: ?>
						<font color="red">R$ <?php echo $totalEntrada-$totalSaida?></font>
						<?php endif; ?>
					</td>
        </tr>
    </table>
    </div>
   
  </body>
</html>