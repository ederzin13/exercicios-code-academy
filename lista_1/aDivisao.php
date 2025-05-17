<?php
    echo "Dividendo:" . PHP_EOL;
    $dividendo = readline();

    echo "Divisor" . PHP_EOL;
    $divisor = readline();

   function divisao($dividendo, $divisor) {
        $quociente = $dividendo / $divisor;

        return $quociente;
   }

   function resto($dividendo, $divisor) {
        $resto = $dividendo % $divisor;

        return $resto;
   }

   echo divisao($dividendo, $divisor) . PHP_EOL;

   echo resto($dividendo, $divisor) . PHP_EOL;
?> 