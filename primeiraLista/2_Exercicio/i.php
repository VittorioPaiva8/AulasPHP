    <?php

    $salario = 2000;
    $comissaoFixa = 200;
    $precoCarro = readline ("Digite O preço do carro: ");
    $comissao = $precoCarro + ($precoCarro/100  * 0.05);
    $comissaoTotal = $comissaoFixa + ($comissaoFixa / 100 * $comissao);
    $salarioFinal = $salario + $comissaoTotal;


    echo "O salario total do vendedor foi de $salarioFinal";





?>