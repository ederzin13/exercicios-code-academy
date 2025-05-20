<?php
    $vetor = [];


    echo "Digite 10 valores: " . PHP_EOL;

    for ($i = 0; $i < 10; $i++) {
        $vetor[] = readline();
    }

    print_r($vetor);

    $maiorValor = 0;
    $valorAtual = 0;
    $posicao = 0;

    for ($i = 0; $i < count($vetor); $i++) {
        $valorAtual = $vetor[$i];

        if ($valorAtual > $maiorValor) {
            $maiorValor = $valorAtual;
            $posicao = $i;
        }
    }

    echo "O maior valor do vetor é: " . $maiorValor . PHP_EOL;
    echo "Esse valor fica na posição $posicao do mesmo" . PHP_EOL;
?>