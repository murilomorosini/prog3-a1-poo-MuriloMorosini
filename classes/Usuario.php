<?php
class Usuario {
    private string $nome;
    private string $email;
    private string $senha;

    public function __construct(string $nome, string $email, string $senha) {
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function getSenha(): string {
        return $this->senha;
    }

    public function verificarSenha(string $senhaInformada): bool {
        return $this->senha === $senhaInformada;
    }

    public function toArray(): array {
        return [
            'nome' => $this->nome,
            'email' => $this->email,
            'senha' => $this->senha
        ];
    }

    public static function fromArray(array $dados): Usuario {
        return new Usuario($dados['nome'], $dados['email'], $dados['senha']);
    }
}
