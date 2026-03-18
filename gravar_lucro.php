<?php
// Captura o que o MT4 enviou
if (isset($_POST['info'])) {
    $info = $_POST['info'] . PHP_EOL; // Adiciona uma nova linha
    
    // Grava no arquivo chamado 'lucros_clientes.txt' no mesmo servidor
    file_put_contents("lucros_clientes.txt", $info, FILE_APPEND);
    
    echo "Sucesso";
} else {
    echo "Nenhum dado recebido";
}
?>
