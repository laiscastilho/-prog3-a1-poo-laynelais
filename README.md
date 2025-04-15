# Sistema de Cadastro e Login Simples (PHP)

Este projeto é um sistema básico de cadastro, login e controle de sessão em PHP com armazenamento de usuários em um arquivo JSON.

## Estrutura dos Arquivos

- **index.php**  
  Página inicial para login e cadastro.

- **cadastro.php**  
  Formulário para criação de novo usuário.

- **processa_cadastro.php**  
  Processa os dados do formulário de cadastro e salva os usuários no arquivo `usuarios.json`.

- **login.php**  
  Formulário de login do sistema.

- **processa_login.php**
  Responsável por autenticar o usuário e iniciar a sessão.

- **dashboard.php**  
  Página para usuários logados.

- **logout.php**  
  Finaliza a sessão e redireciona o usuário para o login.

- **usuarios.json**  
  Arquivo que armazena os usuários registrados (nome, email e senha criptografada).
