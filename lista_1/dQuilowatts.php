<?php
// 100 quilowatts = 1/7 do salário mínimo

// valor do salário mínimo
// quantidade de quilowatts gasta

// cálculo: valor em reais de cada quilowatt;
// valor em reais a ser pago;
// valor a ser pago com desconto de 10%

    echo "Qual o valor do salário?" . PHP_EOL;
    $valSalarioMin = readline();

    echo "Quilowatts gastos:" . PHP_EOL;
    $qtdQW = readline();

    // constante
    $valQW = ($valSalarioMin / 7) / 100;



    //valor dos qW gastos
    $valQWGastos = $qtdQW * $valQW;

    //valor com desconto
    $valDesconto = $valQWGastos * 0.9;

    echo $valQW . PHP_EOL;
    echo $valQWGastos . PHP_EOL;
    echo $valDesconto . PHP_EOL;
?>