<?php 

    $numero = readline('digite um numero: ');

    if ($numero <=29){
        echo 'menor q 30';
    }

    else if ($numero >=30 && $numero <=90){
        echo 'esta entre 30 e 90';
    }
    else if ($numero >= 120){
        echo 'Numero maior q 120';
    }
    else {
        echo 'O numero não se encaixa em nenhum padrão';
    }


?>