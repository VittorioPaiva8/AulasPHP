<?php

    $ano = readline (' Digite o ano de seu nascimento: ');


    $idade = 2024 - $ano ;

    if ($idade < 16){
        echo "você não pode votar nem dirigir";
    }

    else if ($idade == 16){
        echo 'você pode apenas votar';
    }

    else {
        echo 'você pode votar e dirigir';
    }



?>