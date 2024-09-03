<?php

    function a(){
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
    function c(){
        $numero = readline ('Numero: ');
        $numero2 = readline('Numero: ');

        if ($numero % 4 ==0 ){
            Echo 'TRUE';
        }
        else {
            echo "FALSE";
        }
    }
    
    a();
    b();


?>