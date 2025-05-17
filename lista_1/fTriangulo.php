<?php
    echo "Dê a base do triângulo: " . PHP_EOL;
    $base = readline();

    echo "Dê a altura do mesmo: " . PHP_EOL;
    $altura = readline();

    function area() {
        global $base, $altura;

        $resultado = ($base * $altura) / 2;
        return $resultado;
    }

    echo "RESULTADO: " . area() . "cm²" . PHP_EOL;
?>