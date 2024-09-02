<?php

    $numeroMaca = readline('Quantas maças vc deseja?: ');


    if ($numeroMaca <= 6){
        $preco= 1.30 * $numeroMaca;
        echo "$preco";
    }

    if ($numeroMaca > 6){
        $preco2 = 1 * $numeroMaca;
        echo "$preco2";
    }


?>