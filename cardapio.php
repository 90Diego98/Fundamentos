<?php 
// Dados do Cardapio
// Produto 1
$produto = "X-Bacon";
$categoria1 = "Lanche";
$preco1 = 24.98;


$produto2 = "X-Salada";
$categoria2 = "Lanche";
$preco2 = 21.85;


$produto3 = "Batata Frita";
$categoria3 = "Lanche";
$preco3 = 47.71;

$Valor_total = $preco1 + $preco2 + $preco3;

$taxaServico = $Valor_total * 0.10;

$totalcomTaxa = $Valor_total + $taxaServico;

// Calculo 10% de taxa de serviço
$taxaServico = $preco1 * 0.10;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela</title>
</head>
<body>
    <table border="3">
        <tr><th>Produto</th><th>Lanche</th><th>Valor</th></tr>
        <tr><td><?php echo $produto?></td><td><?php echo $categoria1?></td><td><?php echo $preco1?></td></tr>
        <tr><td><?php echo $produto2?></td><td><?php echo $categoria2?></td><td><?php echo $preco2?></td></tr>
        <tr><td><?php echo $produto3?></td><td><?php echo $categoria3?></td><td><?php echo $preco3?></td></tr>
        <tr><td colspan="3" align="center"> <strong>Valor Total: <?php echo $Valor_total; ?></Strong></td></tr>
    </table>




</body>
</html>

