<?php 

class Usuario { //criação da classe usuário
    private $nome;
    private $email;
    private $senha;

    public function __construct($nome, $email, $senha) { //construtor da classe usuário
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = password_hash($senha, PASSWORD_DEFAULT);
    }

    public function getNome() { //metodos getters (acessar os atributos)
        return $this->nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getSenha() {
        return $this->senha;
    }

}

?>