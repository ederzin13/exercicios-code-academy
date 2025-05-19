<?php
    $valor = 0;

    for($i = 1; $i <= 10; $i++) {
        $somatoria = 0;
        
        echo "Valor $i:" . PHP_EOL;
        $somatoria = readline();
        $valor += $somatoria;
    }

    echo "Somatória: " . $valor . PHP_EOL;
    echo "Média: " . ($valor / 10) . PHP_EOL;

?>