<?php

$usuario1 = 'a';
$senha1 = '123';
$totalVendas = 0;


function registrarLog($mensagem)
{
    global $log;
    $data_hora = date('d/m/Y H:i:s');
    $log[] = "$data_hora - $mensagem";
}

function exibirLog()
{
    global $log;
    foreach ($log as $entry) {
        echo "$entry\n";
    }
}

function limparTela()
{
    system('clear');
}


function login()
{
    global $usuario1, $senha1, $logado;
    $usuario = readline("Digite seu usuario: ");
    $senha = readline("Digite sua senha: ");

    if ($usuario == $usuario1 && $senha == $senha1) {
        echo 'Bem vindo 3
        ';
        registrarLog("Usuário Fez login");
        $logado = true;
    } else if ($usuario == '' || $senha == '') {
        $logado = false;
        echo 'Preencha os campos';
    } else {
        echo "Usuario incorreto";
        $logado = false;
    }
}

function deslogar()
{
    global $logado;

    registrarLog("Usuário $logado fez logout");
    $logado = false;
    echo "Deslogado com sucesso!\n";
}

function cadastrarUsuario()
{
    global $usuarios;

    limparTela();
    echo "Digite o novo login: ";
    $login = trim(fgets(STDIN));

    echo "Digite a nova senha: ";
    $senha = trim(fgets(STDIN));

    if (!isset($usuarios[$login])) {
        $usuarios[$login] = $senha;
        registrarLog("Novo usuário cadastrado: $login");
        echo "Usuário cadastrado com sucesso!\n";
    } else {
        echo "Login já existente.\n";
    }
}

function realizarVenda()
{
    global $valor_total_vendas;

    limparTela();
    echo "Digite o nome do item vendido: ";
    $item = trim(fgets(STDIN));

    echo "Digite o valor da venda: ";
    $valor = trim(fgets(STDIN));

    if (is_numeric($valor) && $valor > 0) {
        $valor_total_vendas += $valor;
        registrarLog("Venda realizada: Item - $item, Valor - $valor");
        echo "Venda registrada com sucesso!\n";
    } else {
        echo "Valor inválido.\n";
    }
}


function primeiroMenu()
{
    $chamarMenu = readline("1-Login 2-Cadastrar 3-Sair: ");

    switch ($chamarMenu) {
        case 1:
            login();
            break;
        case 2:
            cadastrarUsuario();
            break;
        case 3:
            exit;
            break;
    }
}

function homeLoja()
{
    global $valor_total_vendas;
    echo "Total de vendas: R$ " . number_format($valor_total_vendas, 2, ',', '.') . "\n";
    echo "\n 1-Venda \n 2-Verificar log \n 3-Deslogar: ";
    $menu = readline();

    switch ($menu) {
        case 1:
            realizarVenda();
            break;

        case 2:
            exibirLog();
            break;
        case 3:
            deslogar();
            break;
    }
}

$logado = false;

while (true) {
    if ($logado) {
        homeLoja();
    } else {
        primeiroMenu();
    }
}
