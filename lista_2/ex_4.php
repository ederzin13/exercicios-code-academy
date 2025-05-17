<?php
    echo "Nota da primeira avaliação: " . PHP_EOL;
    $notaUm = readline();

    echo "Nota da segunda avaliação: " . PHP_EOL;
    $notaDois = readline();

    $media = ($notaUm + $notaDois) / 2;

    if ($media >= 6) echo "Aluno aprovado!" . PHP_EOL;
    else echo "Aluno reprovado :(" . PHP_EOL;

    echo "A média do aluno é de " . $media . " pontos" . PHP_EOL;
?>