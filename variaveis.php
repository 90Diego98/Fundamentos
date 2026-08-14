<?php
// Tipos de variaves
$nome = "Leticia";
$idade = 22;
$areaInteresse = "Programação";
$cidade = "São Pailo";
$disponivel = false;
$salario = 105.12;
$cargo = ['RH','DP'];

/*
var_dump($nome);
var_dump($idade);
var_dump($disponivel);
var_dump($salario);
var_dump($cargo);
*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?=  $nome ?></h1>
    <?php
    if($disponivel){
    ?>
    <ol>
        <li><?= $idade ?></li>
        <li><?= $nome ?></li>
        <li><?= $disponivel ?></li>
        <li><?= $salario ?></li>
    </ol>

    <?php
    }else
    ?>
    <ol>
        <li>Bem Vindo ao sistema</li>
    </ol>

</body>
</html>