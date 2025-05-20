<?php

    //MÚLTIPLO DE 4

    echo "Digite um número e descubra se ele é múltiplo de 4: " . PHP_EOL;
    $numero = readline();

    function isMultQuatro($numero) { 
        if ($numero % 4 == 0) return $numero . " é múltiplo de 4" . PHP_EOL;
        else return $numero . " NÃO É MÚLTIPLO DE 4" . PHP_EOL;
    }

    $resultado = isMultQuatro($numero);
    echo $resultado . PHP_EOL;

    //PAR OU ÍMPAR

    echo "Digite um número: " . PHP_EOL;
    $parImpar = readline();

    function isParImpar($parImpar) {
        if ($parImpar % 2 != 0) return "Ímpar" . PHP_EOL;
        else return "Par" . PHP_EOL;
    }

    $resultado = isParImpar($parImpar);
    echo $parImpar . " é " . $resultado . PHP_EOL;
    
    //SOMA ENTRE DOIS VALORES
    
    echo "Primeiro valor: " . PHP_EOL;
    $valorUm = readline();

    echo "Segundo valor: " . PHP_EOL;
    $valorDois = readline();

    function somaEntre($a, $b) {
        $valUm = $a;
        $valDois = $b;

        $soma = 0;

        for ($i = $valUm + 1; $i < $valDois; $i++) {
            $soma += $i;
            //echo $soma . PHP_EOL;
        }

        return $soma;
    }

    $resultado = somaEntre($valorUm, $valorDois);
    echo $resultado . PHP_EOL;

    //SOMA DOS DIVISÍVEIS

    echo "Digite um número (divisor): " . PHP_EOL;
    $a = readline();

    echo "Valor inicial: " . PHP_EOL;
    $b = readline();

    echo "Valor final: " . PHP_EOL;
    $c = readline();

    function somaDivisiveis($a, $b, $c) {
        $divisor = $a;
        $soma = 0;

        for ($i = $b; $i >= $b && $i <= $c; $i++) {
            if ($i % $divisor == 0) $soma += $i;
        }

        return $soma;
    }

    $resultado = somaDivisiveis($a, $b, $c);
    echo "A soma dos números entre $b e $c divisíveis por $a: é igual a: " . $resultado . PHP_EOL;

    //PESO IDEAL
    echo "Digite a altura da pessoa: " . PHP_EOL;
    $altura = readline();

    echo "Digite o sexo da pessoa (m - f): " . PHP_EOL;
    $sexo = readline();

    function pesoIdeal($altura, $sexo) {
        //$Altura = $altura;
        //$Sexo = $sexo;

        if ($sexo == "f") $pesoIdeal = 62.1 * $altura - 44.7;
        if ($sexo == "m") $pesoIdeal = 72.7 * $altura - 58;

        return $pesoIdeal;
    }

    $resultado = pesoIdeal($altura, $sexo);
    echo "O peso ideal da pessoa é: " . $resultado . PHP_EOL;


    //somaEntre(2, 5);
?>