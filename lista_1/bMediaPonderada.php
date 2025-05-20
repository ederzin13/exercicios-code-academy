<?php
    echo "Média ponderada" . PHP_EOL;
    echo "Valor 1:" . PHP_EOL;

    $val1 = readline();

    echo "Valor 2:" . PHP_EOL;
    $val2 = readline();

    echo "Valor 3" . PHP_EOL;
    $val3 = readline();

    echo "Valor 4" . PHP_EOL;
    $val4 = readline();


    $soma = $val1 + $val2 * 2 + $val3 * 3 + $val4 * 4;

    $mediaPonderada = $soma / (1 + 2 + 3 + 4);


    echo "Média ponderada: " . $mediaPonderada . PHP_EOL;
?>