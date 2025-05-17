<?php 
    echo "REAJUSTE DE 1% - AUMENTO" . PHP_EOL;

    echo "" . PHP_EOL;
    echo "Qual o valor do produto?" . PHP_EOL;

    $valor = readline();
    $percentualReajuste = 1 / 100;

    function valorAumento() {
        global $percentualReajuste, $valor;

        $aumento = $valor * $percentualReajuste;

        return $aumento;
    }

    function reajuste() {
        global $valor;

        $novoValor = valorAumento() + $valor;

        return $novoValor;
    }

    echo "Valor com aumento de 1%: " . reajuste() . PHP_EOL;
?>