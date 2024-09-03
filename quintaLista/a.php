<?php

    function soma(){

        $n1 = readline('Numero 1: ');
        $n2 = readline('Numero 2: ');

        $soma = $n1 + $n2;

        echo "A soma é $soma ";
    }
    function subtracao(){
        $n1 = readline('Numero 1: ');
        $n2 = readline('Numero 2: ');

        $subtracao = $n1 - $n2;
        echo "A subtração é $subtracao ";
    }
    function divisao(){
        $n1 = readline('Numero 1: ');
        $n2 = readline('Numero 2: ');

        $divisao = $n1 / $n2;
        echo "A divisão é $divisao ";
    }
    function multiplicacao(){
        $n1 = readline('Numero 1: ');
        $n2 = readline('Numero 2: ');

        $multiplicacao = $n1 * $n2;
        echo "A multiplicação é $multiplicacao ";
    }



    soma();
    subtracao();
    divisao();
    multiplicacao();











?>