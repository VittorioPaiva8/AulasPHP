<?php

    $valorCompra = readline('Digite o preço do produto: ');

    if ($valorCompra <20){
        $valorCobrado = $valorCompra + ($valorCompra/100 * 45);
        echo "O valor do produto sera $valorCobrado";
    }

    else {
        $valorCobrado = $valorCompra + ($valorCompra/100 * 30);
        echo "valor do produto sera $valorCobrado";
    }



?>