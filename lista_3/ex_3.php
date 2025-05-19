<?php
    $valor;
    $somatoria = 0;
    $qtd = 0;

    do {
        $valor = readline();
        $somatoria += $valor;

        $qtd++;
    } while ($valor != 0);

    echo "Somatória: " . $somatoria . PHP_EOL;
    echo "Quantidade de valores: " . $qtd . PHP_EOL;
    echo "Média dos valores: " . $somatoria / $qtd . PHP_EOL;
?>