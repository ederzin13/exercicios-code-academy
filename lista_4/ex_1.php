<?php
    $arr = [];

    //populando o array
    for ($i = 1; $i <= 10; $i++) {
        $proximo = $i * 5;
        $arr[] = $proximo;
    }

    //exibindo o array
    for ($i = 0; $i < count($arr); $i++) {
        print_r($arr[$i] . PHP_EOL);
    }
?>