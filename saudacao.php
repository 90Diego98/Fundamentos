<?php
// Data padrão BR
date_default_timezone_set('America/Sao_Paulo');

// Data 
$nome = "Diego";
$ehCliente = true;
$hora = (int)date("H");

echo date("l jS \of F Y h:i:s A");

// Se hora <12 bom dia ,
// se a hora <18 boa tarde,
// se a hora <00 boa noite.

if($hora < 12 ){
    $saudacao = "Bom dia";
}elseif ($hora < 18){
    $saudacao = "Boa tarde";
}else {
    $saudacao = "Boa Noite";
}
?>

<!doctype html>
<html lang="pr-br">
    <head>
        <title>Boas-Vindas</title>
    </head>
    <body>
        <h1>Olá, <?php echo $nome ?></h1>
        <p><?= $saudacao ?></p>
    </body>
</html>