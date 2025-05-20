<?php
    $a = [];
    
    for ($i = 1; $i <= 10; $i++) {
        echo "Valor $i: " . PHP_EOL;
        $a[] = readline();
    }

    for ($i = 9; $i >= 0; $i--) {
        echo $a[$i] . PHP_EOL;
    }
?>