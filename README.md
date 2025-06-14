# Laravel App

Este projeto é uma aplicação web desenvolvida com o framework **Laravel**. Ele inclui funcionalidades de cadastro, edição e exclusão de produtos e usuários, além de um sistema de contatos e autenticação simples.

## Funcionalidades

- Cadastro, edição e exclusão de produtos com upload de imagem
- Cadastro, edição e exclusão de usuários
- Autenticação de usuários (login/logout)
- Dashboard restrito para usuários autenticados
- Formulário de contato e listagem de mensagens recebidas
- Listagem de produtos e usuários
- Interface responsiva utilizando Bootstrap

## Pré-requisitos

- PHP >= 8.2
- Composer
- Banco de dados SQLite (padrão), MySQL ou outro compatível
- Node.js e npm (para assets front-end)

## Instalação

1. Clone o repositório:
    ```sh
    git clone <url-do-repositorio>
    cd laravel-app
    ```

2. Instale as dependências PHP:
    ```sh
    composer install
    ```

3. Instale as dependências do front-end:
    ```sh
    npm install
    ```

4. Copie o arquivo `.env.example` para `.env` e configure as variáveis de ambiente conforme necessário:
    ```sh
    cp .env.example .env
    ```

5. Gere a chave da aplicação:
    ```sh
    php artisan key:generate
    ```

6. Execute as migrações do banco de dados:
    ```sh
    php artisan migrate
    ```

7. Compile os assets front-end:
    ```sh
    npm run dev
    ```

8. Inicie o servidor de desenvolvimento:
    ```sh
    php artisan serve
    ```

Acesse [http://localhost:8000](http://localhost:8000) no navegador.

## Desenvolvedores

- **Gabriel Garcia**
- **Levi Ferreira**

---

Projeto desenvolvido para fins acadêmicos e de aprendizado com Laravel.
