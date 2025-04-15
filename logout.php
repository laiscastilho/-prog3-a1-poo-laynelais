<?php
require_once 'classes/Sessao.php';
$sessao = new Sessao();
$sessao->deslogar();
header('Location: login.php');
exit;
?>