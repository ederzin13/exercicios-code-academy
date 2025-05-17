<?php
    echo "ÁREA DO LOSANGO" . PHP_EOL;

    echo "Diagonal maior: " . PHP_EOL;
    $dMaior = readline();

    echo "Diagonal menor: " . PHP_EOL;
    $dMenor = readline();

    function area() {
        global $dMaior, $dMenor;

        $resultado = ($dMaior * $dMenor) / 2;
        return $resultado;
    }  

    echo "Área do losango: " . area() . "cm²" . PHP_EOL;
?>