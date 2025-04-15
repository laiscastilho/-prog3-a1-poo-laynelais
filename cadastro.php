<?php
require_once 'classes/Usuario.php';
require_once 'classes/Sessao.php';
require_once 'classes/Autenticador.php';

$sessao = new Sessao();

if ($sessao->usuarioEstaLogado()) { // verifica se usuario esta logado e o redireciona para o dashboard
    header("Location: dashboard.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') { 
    $nome  = $_POST['nome'] ?? '';
    $email = $_POST['email'] ?? '';
    $senha = $_POST['senha'] ?? '';

    if (empty($nome) || empty($email) || empty($senha)) { // verifica se todosd os campos estão preenchidos
        echo "Preencha todos os campos!";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { // verifica se o email e válido
        echo "E-mail inválido!";
        exit;
    }
    
    $usuario = new Usuario($nome, $email, $senha);// criando o usuario

    $autenticador = new Autenticador($sessao, $usuarios); // autenticação do usuario
}

?>
<html>

<head>

    <title>Cadastro de Usuário</title>
    <style>
    h1 {
        text-align: center;
    }

    body {
        font-family: Arial;
        background-color: rgb(244, 244, 244);
        margin: 200px;
    }

    .container {
        margin: auto;
        max-width: 400px;
        background: white;
        padding: 30px;
        border-radius: 5px;
        box-shadow: 0 0 25px rgba(0, 0, 0, 0.1);
    }

    label {
        display: block;
        margin-bottom: 5px;
    }

    .form-group input {
        width: 100%;
        padding: 7px;
        border: 1px solid #ccc;
        border-radius: 5px;
        margin-bottom: 10px;
    }

    button {
        width: 100%;
        padding: 10px;
        background-color: rgb(12, 152, 45);
        color: white;
        border: none;
        border-radius: 5px;

    }

    .error {
        background-color: #f8d7da;
        color: #721c24;
    }

    .success {
        background-color: #d4edda;
        color: #155724;
    }

    .links {
        text-align: center;
        margin-top: 15px;
    }

    .links a {
        color: #2196F3;
        text-decoration: none;
    }

    .links a:hover {
        text-decoration: underline;
    }
    </style>
</head>

<body>
    <div class="container">
        <h1>Cadastro de Usuário</h1>
        <form action="processa_cadastro.php" method="post">

            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" required>
            </div>

            <button type="submit">Cadastrar</button>
        </form>

        <div class="links">
            <p>Já possui uma conta? <a href="login.php">Login</a></p>
</body>

</html>

</html>