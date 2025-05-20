<?php
    function isMultQuatro($numero = 4) {
        if ($numero % 4 == 0) echo $numero . " é múltiplo de 4" . PHP_EOL;
        else echo $numero . " NÃO É MÚLTIPLO DE 4" . PHP_EOL;
    }

    isMultQuatro(16);
?>