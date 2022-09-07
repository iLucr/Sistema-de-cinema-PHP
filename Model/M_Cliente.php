<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'conexao.php';

class M_Cliente{
   
private  $id; 
private  $nome;
private  $sobrenome;
private  $login;
private  $senha;
private  $cpf;
private  $telefone;
private  $estado;
private  $cidade;
private  $bairro;
private  $logradouro;
private  $nomelogra;
private  $numero;
private  $nasc;
private  $img;

function __construct($id, $nome, $sobrenome, $login, $senha, $cpf, $telefone, $estado, $cidade, $bairro, $logradouro, $nomelogra, $numero,  $nasc, $img) {
    $this->id = $id;
    $this->nome = $nome;
    $this->sobrenome = $sobrenome;
    $this->login = $login;
    $this->senha = $senha;
    $this->cpf = $cpf;
    $this->telefone = $telefone;
    $this->estado = $estado;
    $this->cidade = $cidade;
    $this->bairro = $bairro;
    $this->logradouro = $logradouro;
    $this->nomelogra = $nomelogra;
    $this->numero = $numero;
    $this->nasc = $nasc;
    $this->img = $img;
}

function getImg() {
    return $this->img;
}

function setImg($img) {
    $this->img = $img;
}

function getSobrenome() {
    return $this->sobrenome;
}

function getNasc() {
    return $this->nasc;
}

function setSobrenome($sobrenome) {
    $this->sobrenome = $sobrenome;
}

function setNasc($nasc) {
    $this->nasc = $nasc;
}

function getId() {
    return $this->id;
}

function getNome() {
    return $this->nome;
}

function getCpf() {
    return $this->cpf;
}

function getTelefone() {
    return $this->telefone;
}

function getEstado() {
    return $this->estado;
}

function getCidade() {
    return $this->cidade;
}

function getBairro() {
    return $this->bairro;
}

function getLogradouro() {
    return $this->logradouro;
}

function getNomelogra() {
    return $this->nomelogra;
}

function getNumero() {
    return $this->numero;
}

function setId($id) {
    $this->id = $id;
}

function setNome($nome) {
    $this->nome = $nome;
}

function setCpf($cpf) {
    $this->cpf = $cpf;
}

function setTelefone($telefone) {
    $this->telefone = $telefone;
}

function setEstado($estado) {
    $this->estado = $estado;
}

function setCidade($cidade) {
    $this->cidade = $cidade;
}

function setBairro($bairro) {
    $this->bairro = $bairro;
}

function setLogradouro($logradouro) {
    $this->logradouro = $logradouro;
}

function setNomelogra($nomelogra) {
    $this->nomelogra = $nomelogra;
}

function setNumero($numero) {
    $this->numero = $numero;
}
function getLogin() {
    return $this->login;
}

function getSenha() {
    return $this->senha;
}

function setLogin($login) {
    $this->login = $login;
}

function setSenha($senha) {
    $this->senha = $senha;
}

function login($login, $senha) {
        $sql = "Select * from tb_cliente where cli_login = '$login' and cli_senha = '$senha'";       
        $Conexao = new Conexao();
        $Conexao->conectar();        
        $this->result = $Conexao->PesquisarSQL($sql);
        $Conexao->desconectar();
        return $this->result;   
    }
    function foto($id){
        $sql = "Select cli_img from tb_cliente where cli_login = '$id' ";
        $Conexao = new Conexao();
        $Conexao->conectar();        
        $this->result = $Conexao->PesquisarSQL($sql);
        $Conexao->desconectar();
        return $this->result;  
        
    }
            function cadastro($nome,$sobrenome,$nascimenro,$telefone,
                    $estado,$cidade,$bairro,$logradouro,$lognome,$cpf,$login,$senha,$numero,$img) {
        $sql = "INSERT INTO `tb_cliente`( `cli_nome`, `cli_sobrenome`, `cli_login`, `cli_senha`, `cli_cpf`, "
                . "`cli_telefone`, `cli_estado`, `cli_cidade`, `cli_bairro`, `cli_logradouro`, `cli_nomelogra`, "
                . "`cli_numero`, cli_img, cli_status) VALUES ('$nome','$sobrenome','$login','$senha','$cpf',"
                . "'$telefone','$estado','$cidade','$bairro','$logradouro','$lognome','$numero','$img', '1')";
        $Conexao = new Conexao();
        $Conexao->conectar();    
        $Conexao->executarSQL($sql);
        $Conexao->desconectar();
        }

}
