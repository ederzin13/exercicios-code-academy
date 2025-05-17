<?php
    echo "Quantas maçãs você quer comprar?" . PHP_EOL;
    $qtd = readline();
    $valor;

    if ($qtd >= 12) {
        $valor = 1.00;
    } else {
        $valor = 1.30;
    }

    $total = $qtd * $valor;

    echo "O preço a ser pago pelas maçãs é: R$" . $total . PHP_EOL;
?>