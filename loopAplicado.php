<?php
$prefixo = "A";
$quantidade = 10;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senhas de Atendimento</title>
</head>
<body>
    <h1>Senha para atendimento</h1>
    <!-- Usando For vamos gerar senhas de atendimento
    Dentro das LI colocar a senha 4 senhas diferentes
    Resultado : A!, A2, A3, A4 
    -->
    
    <ol>
    <?php
    for($i= 1; $i <= 4; $i++){
        echo "<li>". $prefixo . $i . "</li>";
    }
    ?>
    </ol>
    







</body>
</html>