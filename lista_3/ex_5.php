<?php
    $maior = 0;
    $menor = 0;
    $atual = 0;

    $condicao = true;
    
    while ($condicao == true) {
        if ($atual > $maior) $maior = $atual;
        if ($atual < $menor) $menor = $atual;

        echo "Digite um valor maior que 0" . PHP_EOL;
        $atual = readline();

        if ($atual == 0) $condicao = false;
    }

    // do {
    //     echo "Digite um valor maior que 0" . PHP_EOL;
    //     $atual = readline();

    //     if ($atual > $maior) $maior = $atual;
    //     if ($atual < $menor) $menor = $atual;
    // } while ($atual != 0);

    echo "Maior valor digitado: " . $maior . PHP_EOL;
    echo "Menor valor digitado: " . $menor . PHP_EOL;
?>