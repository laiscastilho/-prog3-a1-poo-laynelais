<?php

class Sessao { // criando a classe sessao
    private $usuarioLogado;

    public function __construct() { // construtor da classe sessao
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }

    public function logar($usuario) { // loga o usuario
        $_SESSION['usuario'] = serialize($usuario);
        $this->usuarioLogado = $usuario;
}

    public function deslogar() { // desloga o usuario
        unset($_SESSION['usuario']);
        $this->usuarioLogado = null;
    }    

    public function usuarioEstaLogado() { // verifica se o usuario esta logado
        return isset($_SESSION['usuario']);
    }

    public function getUsuarioLogado() { // retorna o usuario logado
        if ($this->usuarioEstaLogado()) {
            return unserialize($_SESSION['usuario']);
        }
        return null;
    }

}

?>