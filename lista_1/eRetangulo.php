<?php
    echo "Área, perímetro e diagonal" . PHP_EOL;

    echo "BASE: " . PHP_EOL;
    $base = readline();

    echo "ALTURA: " . PHP_EOL;
    $altura = readline();

    //perimetro
    $perimetro = 2 * $base + 2 * $altura;
   
    //area
    $area = $base * $altura;

    //diagonal
    $somaQuadrados = $base ** 2 + $altura ** 2;

    $diagonal = sqrt($somaQuadrados);

    echo "Valor perímetro: " . $perimetro . "cm" . PHP_EOL;
    echo "Valor área: " . $area . "cm²" . PHP_EOL;
    echo "Valor diagonal: " . $diagonal . PHP_EOL;
?>