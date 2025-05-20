<?php

//    $a = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
  
    $a = [];
    
    for ($i = 1; $i <= 10; $i++) {
        echo "Valor $i: " . PHP_EOL;
        $a[] = readline();
    }

    echo "Digite o multiplicador: " . PHP_EOL;
    $b = readline();

    $c = [];

    for ($i = 0; $i < 10; $i++) {
        $c[] = $a[$i] * $b;
    }

    print_r($c);
?>