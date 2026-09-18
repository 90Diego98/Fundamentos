<?php include "topo.php"; ?>
        <h1>Corpo</h1>
<?php
        // Capturar Navegador
        $user_agent = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
        $localidade = substr($user_agent,0,5);
        
        // Se for pt-BR mostrar o rodapé padrão
        // senão mostrar um novo rodapé com ano e escrito
        // Modo internacional ativo
        // e
        if ($localidade == "pt-BR") {
    include "rodape.php";
} else {
    echo "<footer><h3>1995 - " . date('Y') . " - International Mode</h3></footer></body></html>";
}
?>



