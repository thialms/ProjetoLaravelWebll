# AmigoPet Store - Laravel

Este projeto é uma aplicação web para uma pet shop fictícia chamada **AmigoPet Store**, desenvolvida com o framework **Laravel** e estilizada com **TailwindCSS**. O sistema permite o gerenciamento de produtos, usuários, contatos e autenticação, com uma interface moderna, responsiva e voltada para o universo pet.

## Funcionalidades

- **Catálogo de Produtos:** Visualização de produtos para pets, com imagens, preços e descrição.
- **Cadastro, edição e exclusão de produtos:** Gerenciamento completo de produtos, incluindo upload de imagens.
- **Cadastro, edição e exclusão de usuários:** Gerenciamento de clientes e administradores.
- **Autenticação de usuários:** Login, logout e área restrita (dashboard).
- **Dashboard administrativo:** Acesso rápido ao cadastro e listagem de produtos, usuários e mensagens de contato.
- **Formulário de contato:** Envio de mensagens para a loja, com listagem e gerenciamento das mensagens recebidas.
- **Botões diferenciais:** Responder (via e-mail) e excluir mensagens de contato diretamente pela interface.
- **Interface moderna e responsiva:** Utilizando TailwindCSS, com foco em usabilidade e visual agradável para o segmento pet shop.

## Pré-requisitos

- PHP >= 8.2
- Composer
- Banco de dados SQLite, MySQL ou compatível
- Node.js e npm (para assets front-end)

## Instalação

1. Clone o repositório:
    ```sh
    git clone <url-do-repositorio>
    cd WEB-II-Laravel
    ```

2. Instale as dependências PHP:
    ```sh
    composer install
    ```

3. Instale as dependências do front-end:
    ```sh
    npm install
    ```

4. Copie o arquivo `.env.example` para `.env` e configure as variáveis de ambiente:
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

## Desenvolvedor

- **Thiago de Almeida Souza Silva**

---

Projeto acadêmico desenvolvido para fins de aprendizado em Laravel, com foco em soluções para o mercado pet.
