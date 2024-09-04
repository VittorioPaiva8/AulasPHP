<?php

$usuario1 = 'a';
$senha1 = '123';
$totalVendas = 0;


function login()
{
    global $usuario1, $senha1;
    $usuario = readline("Digite seu usuario: ");
    $senha = readline("Digite sua senha: ");

    if ($usuario == $usuario1 && $senha == $senha1) {
        echo 'Bem vindo';
        return true;
    } else if ($usuario == '' || $senha == '') {
        echo 'Preencha os campos';
    } else {
        echo "Usuario incorreto";
    }

    return false;
}

function realizarVenda()
{
    $item   = readline('Digite o nome do item vendido: ');
    $preco = readline("digite o preço do produto: ");
    $totalVendas += $preco;
}


$chamarMenu = readline("1-Login \n 2-Cadastrar \n 3-Deslogar \n 4-Sair");
$logado = false;

switch ($chamarMenu) {
    case 1:
        $logado = login();
        break;
    case 2:
        echo "test";
        break;
    case 3:
}

if ($logado) {
    homeLoja();
}


function homeLoja()
{
    if (true) {

        echo "\n 1-Venda \n 2-Verificar log";
        $menu = readline();

        switch ($menu) {
            case 1:
                realizarVenda();
                break;

            case 2:
                echo 'dasdas';
                break;
        }
        // echo "O total de vendas é $totalVendas: ";
    }
}
