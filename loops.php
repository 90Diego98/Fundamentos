<?php
echo "<h1>Rapetições em PHP</h1>";

for($i=1; $i <=5; $i++){
    echo "Senha A$i chamada para atendimento <br>";
}

echo "<h2>While</h2>";
$estoque = 5;
while($estoque > 0){
    echo "Produto vendido. Restam $estoque. <br>";
    $estoque--;
}

echo "<h2>Foreach - Precorre uma lista</h2>";
$alunos =["Ana 1 real a palma da banana","Pedro","Jão"];
foreach($alunos as $posicao => $nome){
    echo "<p>".$posicao . "- $nome</p>";
}


?>