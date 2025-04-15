<?php
require_once 'classes/Sessao.php';

class Autenticador { // criando a classe autenticador
    private $sessao;
    private $usuarios = [];
    private $arquivo = 'usuarios.json'; // arquivo json que serão usados para armazenar os dados dos usuarios

    public function __construct() { // construtor da classe autenticador
        $this->sessao = new Sessao();

        if (file_exists($this->arquivo)) { // verifica se o registro do usuario existe
            $conteudo = file_get_contents($this->arquivo);
            $this->usuarios = json_decode($conteudo, true); // responsavel por decodificar o arquivo json
        }
    }

    public function autenticar($email, $senha) { // autentica usuario
        foreach ($this->usuarios as $usuario) { 
            if ($usuario['email'] === $email && password_verify($senha, $usuario['senha'])) { 
                $usuarioObj = new Usuario($usuario['nome'], $usuario['email'], $usuario['senha']); 
                $this->sessao->logar($usuarioObj); 
                return true;
            }
        }
        return false; 
    }

    public function registrar(Usuario $usuario) { // registra o usuario
        foreach ($this->usuarios as $u) {
            if ($u['email'] === $usuario->getEmail()) {
                throw new Exception("E-mail já cadastrado.");
            }
        }

        $this->usuarios[] = [ // adiciona o usuario na array de usuarios
            'nome' => $usuario->getNome(),
            'email' => $usuario->getEmail(),
            'senha' => $usuario->getSenha()
        ];

        file_put_contents($this->arquivo, json_encode($this->usuarios, JSON_PRETTY_PRINT)); // salva os dados no json
    }

    public function deslogar() {
        $this->sessao->deslogar();
    }
}

?>