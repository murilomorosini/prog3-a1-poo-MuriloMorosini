<?php
require_once 'classes/Autenticador.php';
require_once 'classes/Sessao.php';
require_once 'classes/Usuario.php';

Sessao::iniciar();

$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$senha = $_POST['senha'];

$usuario = Autenticador::autenticar($email, $senha);

if ($usuario) {
    Sessao::set('usuario', $usuario);

    if (!empty($_POST['lembrar_email'])) {
        setcookie('email', $email, time() + 3600);
    }

    header("Location: dashboard.php");
    exit;
} else {
    echo "Credenciais inválidas.";
}
