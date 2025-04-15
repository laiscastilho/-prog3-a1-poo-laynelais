<?php
require_once 'classes/Sessao.php';
require_once 'classes/Usuario.php';
$sessao = new Sessao();

if (!$sessao->usuarioEstaLogado()) {
    header('Location: login.php');
    exit;
}

$usuario = $sessao->getUsuarioLogado();
?>

<html>

<head>
    <title>Dashboard</title>
    <style>
    h1 {
        text-align: center;
    }

    h2 {
        text-align: center;
    }

    body {
        font-family: Arial;
        background-color: rgb(244, 244, 244);
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
    </style>
</head>

<body>
    <div class="container">
        <h1>Bem-Vindo(a)</h1>
        <h2><?php echo $usuario->getNome(); ?></h2>
        <button onclick="window.location.href='logout.php'">Sair</button>
    </div>

</html>