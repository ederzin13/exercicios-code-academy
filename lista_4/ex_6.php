<?php

    $vetorUm = [];

    for ($i = 1; $i <= 10; $i++) {
        echo "Vetor 1 - Valor $i: " . PHP_EOL;
        $vetorUm[] = readline();
    }

    $vetorDois = [];

    for ($i = 1; $i <= 10; $i++) {
        echo "Vetor 2 - Valor $i: " . PHP_EOL;
        $vetorDois[] = readline();
    }

    for ($i = 0; $i < 10; $i++) {
        echo $vetorUm[$i] . " * " . $vetorDois[$i] . PHP_EOL;
        $produto = $vetorUm[$i] * $vetorDois[$i];
        echo $produto . PHP_EOL;
    }

?>