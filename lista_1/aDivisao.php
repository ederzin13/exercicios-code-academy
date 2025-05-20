<?php
    echo "Dividendo:" . PHP_EOL;
    $dividendo = readline();

    echo "Divisor" . PHP_EOL;
    $divisor = readline();

    //resultado da divisão
    $quociente = $dividendo / $divisor;


    //resto da divisão
    $resto = $dividendo % $divisor;

    
    echo "Quociente: " . $quociente . PHP_EOL;
    echo "Resto: " . $resto . PHP_EOL;
?> 