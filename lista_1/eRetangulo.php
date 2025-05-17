<?php
    echo "Área, perímetro e diagonal" . PHP_EOL;

    echo "BASE: " . PHP_EOL;
    $base = readline();

    echo "ALTURA: " . PHP_EOL;
    $altura = readline();

    function perimetro() {
        global $base, $altura;

        $resultado = 2 * $base + 2 * $altura;
        return $resultado;
    }

    function area() {
        global $base, $altura;

        $resultado = $base * $altura;
        return $resultado;
    }

    function diagonalSoma() {
        global $base, $altura;

        $somaQuadrados = $base ** 2 + $altura ** 2;
        return $somaQuadrados;
    }

    function diagonalResultado() {
        $somaQuadrados = diagonalSoma();

        $resultado = sqrt($somaQuadrados);
        return $resultado;
    }

    echo "Valor perímetro: " . perimetro() . "cm" . PHP_EOL;
    echo "Valor área: " . area() . "cm²" . PHP_EOL;
    echo "Valor diagonal: " . diagonalResultado() . PHP_EOL;
?>