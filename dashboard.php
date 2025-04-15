<?php
require_once 'classes/Usuario.php';
require_once 'classes/Sessao.php';

Sessao::iniciar();
$usuario = Sessao::get('usuario');

if (!$usuario) {
    header("Location: login.php");
    exit;
}

$cookieEmail = $_COOKIE['email'] ?? '';

echo "<h1>Bem-vindo, " . $usuario->getNome() . "!</h1>";
echo "<p>Seu e-mail: " . $usuario->getEmail() . "</p>";
if ($cookieEmail) {
    echo "<p>E-mail lembrado: $cookieEmail</p>";
}
echo '<a href="logout.php">Sair</a>';
