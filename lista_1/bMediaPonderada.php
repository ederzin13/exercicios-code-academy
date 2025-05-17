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

    function mediaPonderadaSoma($val1, $val2, $val3, $val4) {
        $soma = $val1 + $val2 * 2 + $val3 * 3 + $val4 * 4;

        return $soma;
    }

    $resultadoSoma = mediaPonderadaSoma($val1, $val2, $val3, $val4);

    function mediaPonderada() {
        global $resultadoSoma;

        $resultadoMedia = $resultadoSoma / (1 + 2 + 3 + 4);
        
        return $resultadoMedia;
    }

    echo mediaPonderada(). PHP_EOL;
?>