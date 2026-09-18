<?php 
$numero = 7;

echo "<h1>Tabuada do $numero</h1>";

for($i=1; $i <= 10; $i++)
    {
        $resultado = $numero * $i;
        echo "$numero X $i = $resultado <br>";
    }
?>

<!-- Aplicar o Resultado da tabuada em uma taabela HTML =) -->
<!-- Boa Solrte -->


<?php
$numero = 9;
echo"<h1>Tabela do $numero</h1>";
echo"<table border='3'>";
echo"<tr>
        <th>Multiplicação</th><th>Resultado</th>
    </tr>";
for($i=1; $i <= 10; $i++)
    {
        $resultado = $numero * $i;
        echo "$numero X $i = $resultado <br>";
        echo "<tr><td>$numero X $i</td><td>$resultado</td></tr>";
    }
echo "</table>";
?>

