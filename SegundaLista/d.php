<?php

    $a1 = readline('Digite a nota da primeira avaliação: ');
    $a2 = readline('Digite a nota da segunda avaliação: ');

    $media = ($a1+$a2)/2;

    if ($media <=6){
        echo "aluno REPROVADO";
    }
    else{
        echo "aluno APROVADO";
    }


?>