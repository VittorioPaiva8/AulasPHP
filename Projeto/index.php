<?php

$usuario1 = 'usuario';
$senha1 = '123';


function login()
{
    $usuario = readline("Digite seu usuario: ");
    $senha = readline("Digite sua senha: ");

    if ($usuario = '' || $senha = '') {
        echo 'Preencha os campos';
        return;
    } else if ($usuario == $usuario1 && $senha == $senha1) {
        echo 'Bem vindo';
    } else {
        echo "Usuario incorreto";
        return;
    }
}


$chamarMenu = readline("1-Login \n 2-Cadastrar \n 3-Verificar log \n 4-Deslogar");

switch ($chamarMenu) {
    case 1:
        login();
        break;
    case 2:
        echo "test";
        break;
    case 3:
}
