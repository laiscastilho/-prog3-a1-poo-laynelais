<?php
require_once 'classes/Sessao.php';

$sessao = new Sessao();

echo "<h1>Bem-vindo(a)!</h1>";
echo "<a href='/login.php'>Login</a> | <a href='/cadastro.php'>Cadastro</a>";

?>
