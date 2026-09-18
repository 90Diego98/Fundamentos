<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aluno</title>
    <link rel="stylesheet" href="estilos.css">
    
</head>
<body>
<?php
$idade = 17;
$media = 7.5;
$presenca = 80;

$IDADE_MAIORIDADE = 18;
$MEDIA_MINIMA = 6.0;
$PRESENCA_MINIMA = 75;

echo "<h1>Relatorio do Estudante</h1>";
echo "<ol>";
echo "<li>Idade: $idade anos</li>";
echo "<li>Média: $media</li>";
echo "<li>Presença: $presenca%</li>";
echo "</ol>";

if ($media >= $MEDIA_MINIMA && $presenca >= $PRESENCA_MINIMA) {
    echo '<p class="aprovado"><strong>Aprovado</strong></p>';
} else {
    echo '<p class="reprovado"><strong>Reprovado</strong></p>';
}

if ($presenca >= $PRESENCA_MINIMA) {
    $acima = $presenca - $PRESENCA_MINIMA;
    echo "<p class=\"presenca\"><strong>Presença suficiente</strong> ({$presenca}% está {$acima}% acima do mínimo)</p>";
} else {
    $falta = $PRESENCA_MINIMA - $presenca;
    echo "<p class=\"presenca\"><strong>Presença insuficiente</strong> (faltam {$falta}% para o mínimo de {$PRESENCA_MINIMA}%)</p>";
}

if ($idade < $IDADE_MAIORIDADE) {
    echo "<p class=\"idade\"><strong>Menor de idade</strong> ($idade anos)</p>";
} else {
    echo "<p class=\"idade\"><strong>Maior de idade</strong> ($idade anos)</p>";
}
?>





</body>
</html>