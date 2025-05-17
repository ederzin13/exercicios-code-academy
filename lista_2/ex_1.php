<?php
    echo "Digite um valor numérico: " . PHP_EOL;
    $num = readline();

    if ($num > 10) {
        echo "O valor é maior que 10!" . PHP_EOL;
    } else {
        echo "O valor é menor que 10!" . PHP_EOL;
    }
?>