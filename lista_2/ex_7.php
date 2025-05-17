<?php
    echo "Qual a idade do nadador?" . PHP_EOL;
    $age = readline();

    //switch case?
    switch ($age) {
        case ($age >= 5 && $age <= 7):
            echo "Infantil A" . PHP_EOL;
            break;
        case ($age >= 8 && $age <= 10):
            echo "Infantil B" . PHP_EOL;
            break;
        case ($age >= 11 && $age <=13):
            echo "Juvenil A" . PHP_EOL;
            break;
        case ($age >= 14 && $age <= 17):
            echo "Juvenil B" . PHP_EOL;
            break;
        case ($age >= 18):
            echo "Sênior" . PHP_EOL;
            break;
        default:
            echo "Insira a idade do nadador" . PHP_EOL;
    }
?>