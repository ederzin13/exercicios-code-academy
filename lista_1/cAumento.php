<?php 
    echo "REAJUSTE DE 1% - AUMENTO" . PHP_EOL;

    echo "" . PHP_EOL;
    echo "Qual o valor do produto?" . PHP_EOL;

    $valor = readline();
    $percentualReajuste = 1 / 100;

    $aumento = $valor * $percentualReajuste;


    $novoValor = $aumento + $valor;
    
    echo "Valor com aumento de 1%: " . $novoValor . PHP_EOL;
?>