<?php
$mensagem = "OLA Lagarto";

echo "Quantidade de caracteres:".strlen($mensagem)."<br>";
echo "Posição de palavra:".strpos($mensagem, "Olá")."<br>";
echo "Mensagem em maiusculo:".strtoupper($mensagem)."<br>";

$email = "aluno@exemplo.com";

if(strpos($email, "@") !== false){
    echo "Email valido !";
}else{
    echo "Email ERRADO !";
}
?>