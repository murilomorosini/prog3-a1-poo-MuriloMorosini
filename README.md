# Sistema de Registro e Autenticação de Usuários – PHP POO

**Aluno:** Murilo Morosini  
**Turma:** Ciencia da Computacao - Campus: Sao Miguel do Oeste
**Professor:** Leandro Otavio Cordova Vieira  
**Disciplina:** Programação III – UNOESC

## 📘 Descrição do Projeto

Este é um sistema simples de registro e login de usuários, desenvolvido utilizando **PHP puro com orientação a objetos (POO)**.

A aplicação permite:

- Cadastro de usuários (nome, e-mail e senha)
- Login com validação de e-mail e senha
- Dashboard com saudação personalizada
- Armazenamento opcional do e-mail via cookie
- Logout com destruição da sessão
- Persistência de dados em um arquivo `usuarios.json`

## 🗂️ Estrutura do Projeto

```
prog3-a1/
├── index.php
├── cadastro.php
├── login.php
├── processa_cadastro.php
├── processa_login.php
├── dashboard.php
├── logout.php
├── usuarios.json
└── classes/
    ├── Usuario.php
    ├── Sessao.php
    └── Autenticador.php
```

## 🚀 Como Executar o Projeto

1. **Instale o PHP** no seu computador.
2. **Abra a pasta do projeto no Visual Studio Code**.
3. No terminal do VS Code, execute:
   ```bash
   php -S localhost:8000
   ```
4. Acesse o sistema no navegador:
   ```
   http://localhost:8000
   ```

## 💡 Observações

- Os usuários são armazenados em `usuarios.json`.
- O projeto não usa banco de dados, conforme solicitado.
- O código segue o padrão orientado a objetos, com separação clara por responsabilidades.
- Os dados da sessão são mantidos apenas enquanto o navegador estiver aberto.

## ✅ Funcionalidades Implementadas

- [x] Cadastro com validação e sanitização
- [x] Login com verificação simples de senha
- [x] Cookies opcionais para lembrar o e-mail
- [x] Área restrita protegida por sessão
- [x] Logout com redirecionamento
