<?php
    $a = [];
    //$a = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    
    for ($i = 1; $i <= 10; $i++) {
        echo "Valor $i: " . PHP_EOL;
        $a[] = readline();
    }

    for ($i = 9; $i >= 0; $i--) {
        echo $a[$i] . PHP_EOL;
    }
?>