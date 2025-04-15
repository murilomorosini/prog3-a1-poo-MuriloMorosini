<?php
require_once 'Usuario.php';

class Autenticador {
    private static string $arquivoUsuarios = 'usuarios.json';

    public static function registrar(Usuario $usuario): void {
        $usuarios = self::carregarUsuarios();
        $usuarios[] = $usuario->toArray();
        file_put_contents(self::$arquivoUsuarios, json_encode($usuarios, JSON_PRETTY_PRINT));
    }

    public static function autenticar(string $email, string $senha): ?Usuario {
        $usuarios = self::carregarUsuarios();

        foreach ($usuarios as $dadosUsuario) {
            $usuario = Usuario::fromArray($dadosUsuario);
            if ($usuario->getEmail() === $email && $usuario->verificarSenha($senha)) {
                return $usuario;
            }
        }
        return null;
    }

    private static function carregarUsuarios(): array {
        if (!file_exists(self::$arquivoUsuarios)) {
            return [];
        }

        $conteudo = file_get_contents(self::$arquivoUsuarios);
        return json_decode($conteudo, true) ?? [];
    }
}
