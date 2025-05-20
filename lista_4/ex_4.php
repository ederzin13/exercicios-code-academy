<?php
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