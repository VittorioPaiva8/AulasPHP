<?php

    $produto = readline("Digte O valor do produto: \n");
    $aumento = readline("Digte a porcentagem do aumento: \n");

    echo $produto + ($produto / 100 * $aumento);

?>