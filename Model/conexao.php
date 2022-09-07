<?php
class conexao{
    //------------conexão----------
    public function conectar(){
        $servidor = "localhost";
        $usuario = "root";
        $senha = "";
        $banco = "bd_cinema";
        $this->conexao = mysqli_connect($servidor, $usuario, $senha, $banco) or die("ERRROOOOOOOOO");
        
       //------------funçoes da conexão----------         
    }
    public function ExecutarSQL($sql) {
       
        $this->result = mysqli_query($this->conexao, $sql);
        
    }
    public function PesquisarSQL($sql) {
        $this->result = mysqli_query($this->conexao, $sql);
        return $this->result;  
        
    }
    
    public function desconectar() {
        mysqli_close($this->conexao);
    }

}