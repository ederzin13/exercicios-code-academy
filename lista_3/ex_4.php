<?php
    //resultado da soma
    //resultado da média
    //apenas dos valores entre 50 e 70

    $somatoria = 0;
    $qtd = 0;
    
    for ($i = 50; $i <= 70; $i++) {
        if ($i % 2 == 0) {
            $somatoria += $i;
            $qtd++; 
        }
        echo $somatoria . PHP_EOL;
        echo $qtd . PHP_EOL;
    }
    
    $media = $somatoria / $qtd;

    echo $media . PHP_EOL;
?>