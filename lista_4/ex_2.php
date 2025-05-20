<?php
    //atrocidade

    $vetor = [];

    for ($i = 0; $i < 10; $i++) {
        //entrada dos números
        $vetor[] = readline();

        static $numNegativos = 0;
        static $numPositivos = 0;
        static $pares = 0;
        static $impares = 0;

        //contagem positivos e negativos
        if ($vetor[$i] < 0) $numNegativos++;
        if ($vetor[$i] >= 0) $numPositivos++;

        //contagem pares e ímpares
        if ($vetor[$i] % 2 == 0) $pares++;
        if ($vetor[$i] % 2 != 0) $impares++;
        //$pares = ($vetor[$i] % 2 != 0) ? $impares++ : $pares++;
    }

    echo "Número de negativos: " . $numNegativos . PHP_EOL;
    echo "Número de positivos: " . $numPositivos . PHP_EOL;

    echo "Número de pares: " . $pares . PHP_EOL;
    echo "Número de ímpares: " . $impares . PHP_EOL;
    print_r($vetor);
?>