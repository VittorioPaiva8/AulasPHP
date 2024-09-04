<?php

$usuarios = [
    'admin' => 'senha123'
];
$log = [];
$valor_total_vendas = 0;
$usuario_logado = null;

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
    global $usuarios, $usuario_logado;

    limparTela();
    echo "Digite o login: ";
    $login = trim(fgets(STDIN));

    echo "Digite a senha: ";
    $senha = trim(fgets(STDIN));

    if (isset($usuarios[$login]) && $usuarios[$login] === $senha) {
        $usuario_logado = $login;
        registrarLog("Usuário $login fez login");
        echo "Login realizado com sucesso!\n";
    } else {
        echo "Login ou senha inválidos.\n";
    }
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

function deslogar()
{
    global $usuario_logado;

    registrarLog("Usuário $usuario_logado fez logout");
    $usuario_logado = null;
    echo "Deslogado com sucesso!\n";
}

function exibirMenu()
{
    global $usuario_logado, $valor_total_vendas;

    limparTela();
    echo "Usuário logado: $usuario_logado\n";
    echo "Valor total obtido nas vendas: R$ " . number_format($valor_total_vendas, 2, ',', '.') . "\n\n";
    echo "Escolha uma opção:\n";
    echo "1. Vender\n";
    echo "2. Cadastrar novo usuário\n";
    echo "3. Verificar log\n";
    echo "4. Deslogar\n";
    echo "5. Sair\n";
    $opcao = trim(fgets(STDIN));

    switch ($opcao) {
        case 1:
            realizarVenda();
            break;
        case 2:
            cadastrarUsuario();
            break;
        case 3:
            exibirLog();
            break;
        case 4:
            deslogar();
            break;
        case 5:
            exit("Saindo...\n");
        default:
            echo "Opção inválida.\n";
    }
}

// Função principal
function main()
{
    global $usuario_logado;

    limparTela();
    while (true) {
        if ($usuario_logado === null) {
            echo "Bem-vindo ao sistema de gerenciamento de caixa\n";
            echo "1. Login\n";
            echo "2. Sair\n";
            $opcao = trim(fgets(STDIN));

            if ($opcao == 1) {
                login();
            } elseif ($opcao == 2) {
                exit("Saindo...\n");
            } else {
                echo "Opção inválida.\n";
            }
        } else {
            exibirMenu();
        }
    }
}

main();
