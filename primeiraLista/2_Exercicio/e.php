<?php

$altura = readline ('Diga a altura: ');
$base = readline ('Diga o tamnho da base: ');

$perimetro = $altura + $altura + $base + $base;

$area = $altura * $base;

$diagonal =  sqrt ($altura ** 2+$base**2);

echo "O perimetro é: $perimetro , a area é: $area , e a diagonal é $diagonal";

?> 