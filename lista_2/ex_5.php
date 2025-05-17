<?php
    echo "Em que ano você nasceu?" . PHP_EOL;
    $anoNascimento = readline();

    $idade = 2025 - $anoNascimento;

    if ($idade >= 18) {
        echo "Você pode votar e dirigir" . PHP_EOL;
    } else if ($idade >= 16) {
        echo "Você pode apenas dirigir" . PHP_EOL;
    } else {
        echo "Você não tem idade para votar ou dirigir" . PHP_EOL;
    }
?>