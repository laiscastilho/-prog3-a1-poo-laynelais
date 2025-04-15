<?php
$emailSalvo = $_COOKIE['email'] ?? ''; // verifica o cookie se existe

?>

<html>

<head>
    <title>Login</title>
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

    .form-group {
        margin-bottom: 15px;
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

<body>
    <div class="container">
        <h1>Login</h1>
        <form action="processa_login.php" method="POST">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="senha">Senha:</label>
                <input type="senha" name="senha" required>
            </div>
            <button type="submit">Entrar</button>
        </form>
        <div class="links">
            <p>Não possui uma conta? <a href="cadastro.php">Cadastre-se</a></p>
            <input type="checkbox" name="lembrar_email" id="lembrar_email" <label for="lembrar_email">Lembrar
            email</label>
            <?= isset($_COOKIE['email']) ? 'checked' : '' ?>

</body>

</html>