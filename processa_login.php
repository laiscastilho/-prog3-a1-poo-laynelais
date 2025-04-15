<?php
require_once 'classes/Usuario.php';
require_once 'classes/Autenticador.php';
require_once 'classes/Sessao.php';

$sessao = new Sessao(); 
$autenticador = new Autenticador();

$email = $_POST['email']; // recebe/pega os dados do formulario
$senha = $_POST['senha'];

if ($autenticador->autenticar($email, $senha)) { // autentica o usuario
    header('Location: dashboard.php');
} else {
    echo "Login inválido"; // mensagem de erro
}
if (isset($_POST['lembrar_email'])) { // verifica se o checkbox de lembrar email foi marcado
    setcookie('email', $email, time() + (86400 * 30)); 
} else {
    setcookie('email', '', time() - 3600); // se nao foi marcado, remove o cookie
}
?>