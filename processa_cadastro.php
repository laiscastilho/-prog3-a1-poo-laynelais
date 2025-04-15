<?php
require_once 'classes/Usuario.php';
require_once 'classes/Autenticador.php';

$nome = $_POST['nome']; // recebe/pega os dados do formulario
$email = $_POST['email'];
$senha = $_POST['senha'];

$usuario = new Usuario($nome, $email, $senha); // criando o usuario

$autenticador = new Autenticador(); 
try {
    $autenticador->registrar($usuario); // registrando o usuario
    echo "Usuário cadastrado com sucesso!";
} catch (Exception $e) {
    echo "Erro: " . $e->getMessage();
}

header('Location: login.php'); // redireciona o usuario para a pagina de login
exit;
?>