<?php
    echo "ÁREA DO LOSANGO" . PHP_EOL;

    echo "Diagonal maior: " . PHP_EOL;
    $dMaior = readline();

    echo "Diagonal menor: " . PHP_EOL;
    $dMenor = readline();

    $area = ($dMaior * $dMenor) / 2;


    echo "Área do losango: " . $area . "cm²" . PHP_EOL;
?>