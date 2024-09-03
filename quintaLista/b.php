<?php

/*  function a(){
        $numero = readline ('Numero: ');

        if ($numero % 4 ==0 ){
            Echo 'TRUE';
        }
        else {
            echo "FALSE";
        }
    }
    function b(){
        $numero = readline ('Numero: ');

        if ($numero % 2 ==0 ){
            Echo 'TRUE';
        }
        else {
            echo "FALSE";
        }
    } 
function c()
{
    $n1 = readline('Numero: ');
    $n2 = readline('Numero: ');
    $soma = 0;


    for ($i = $n1 + 1; $i < $n2; $i++) {


        $soma += $i;
    }
    echo $soma;
} */

function d()
{
    $n1 = readline('Numero: ');
    $n2 = readline('Numero: ');
    $n3 = readline('Numero: ');
    $soma = 0;
    $i = 0;

    for ($i = $n2 + 1; $i < $n3; $i++) {
        if ($i % $n1 == 0) {

            $soma += $i;
        }
    }




    echo $soma;
}

// a();
// b();
//c();
d();
