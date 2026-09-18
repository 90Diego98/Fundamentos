<?php
// Construção de Função
function saudacao($nome){
    return "Olá, $nome !";
}

echo saudacao("Diego");

// Função Validação de email
function valdaEmail($email){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        return true;
    }else{
        return false;
    }
}

if(valdaEmail("Afonso@gmail.com")){
    echo "<br>Acertou o email";
}else{
    echo "<br>Isso não é email";
}
// Crie uma função para multiplicar 2 numeros 
// e mostre em um acho 

// Crie uma função para mostrar o nome e o numero multiplicado
// anteriormente =)

function multiplicar($a, $b){
    return $a * $b;
}

echo multiplicar(7, 9);
function mostrarNomeMulti($nome, $numero){
    echo "<br>$nome: $numero";
}

mostrarNomeMulti("Diego", multiplicar(7, 9))
?>