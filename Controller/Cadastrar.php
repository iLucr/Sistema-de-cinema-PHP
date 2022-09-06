<?php

include '../Model/M_Cliente.php';
session_start();
$cliente = new M_Cliente("", "", "", "", "", "", "", "", "", "", "", "", "");

if ($_POST['firstname'] != null 
        && $_POST['lastname'] != null 
        && $_POST['nascimento'] != null 
        && $_POST['phone'] != null
        && $_POST['estado'] != null
        && $_POST['cidade'] != null
        && $_POST['bairro'] != null
        && $_POST['log'] != null
        && $_POST['lognome'] != null
        && $_POST['cpf'] != null
        && $_POST['login'] != null
        && $_POST['senha'] != null
        && $_POST['numero'] != null
        ) {
    $cliente->setNome($nome);
    $cliente->setSobrenome($sobrenome);
    $cliente->setTelefone($telefone);
    $cliente->setEstado($estado);
    $cliente->setCidade($cidade);
    $cliente->setBairro($bairro);
    $cliente->setLogradouro($logradouro);
    $cliente->setNomelogra($nomelogra);
    $cliente->setCpf($cpf);
    $cliente->setLogin($login);
    
    
    $cliente->cadastro($nome, $sobrenome, $nascimenro, $telefone, 
            $estado, $cidade, $bairro, $logradouro, $lognome, $cpf, 
            $login, $senha, $numero);
}


$destino = 'img_cadastros/' . $_FILES['arquivo']['name'];
 
$arquivo_tmp = $_FILES['arquivo']['tmp_name'];
 
move_uploaded_file( $arquivo_tmp, $destino  );