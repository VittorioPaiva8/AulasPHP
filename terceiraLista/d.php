<?php

$soma = 0;
$media = 0;
$contagem = 0;

for ($i = 50; $i <= 70; $i++)
    if ($i % 2 == 0) {
        
        $soma += $i;
        $contagem++;
}
if ($contagem > 0) {
    $media = $soma / $contagem;
} else {
    $media = 0;
}



echo "Soma dos valores pares: " . $soma . "\n";
echo "Média dos valores pares: " . $media . "\n";






?>