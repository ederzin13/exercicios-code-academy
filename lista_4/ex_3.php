<?php
//PODRIDÃO
    $vetor = [2, 4, 9, 34, 2, 4, 5, 10, 40, 4];

    for ($i = 0; $i < count($vetor); $i++) {
        $valorAtual = $vetor[$i];
        $posicao = 0;

        if ($valorAtual > $maiorValor) {
            $maiorValor = $valorAtual;
            echo "Maior valor até o momento: " . $maiorValor . PHP_EOL;
        }

        echo $maiorValor . PHP_EOL;
    }
?>