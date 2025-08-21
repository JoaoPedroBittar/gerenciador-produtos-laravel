# Gerenciador de Produtos

Sistema CRUD completo para gerenciamento de produtos desenvolvido em Laravel.

## Funcionalidades

- ✅ Criar novos produtos  
- ✅ Listar produtos existentes  
- ✅ Editar produtos  
- ✅ Excluir produtos  
- ✅ Validação de campos  
- ✅ Interface responsiva com Tailwind CSS  
- ✅ Design moderno e intuitivo  

## Tecnologias Utilizadas

- **PHP 8.2+**  
- **Laravel 10**  
- **MySQL**  
- **Tailwind CSS**  
- **Font Awesome**  

## Requisitos

- PHP 8.2 ou superior  
- Composer  
- MySQL 5.7 ou superior  
- Node.js (opcional, para desenvolvimento)  

# Instalação

## Clone o repositório
- git clone https://github.com/JoaoPedroBittar/gerenciador-produtos-laravel.git
- cd projeto1

## Instale as dependências PHP
- composer install

## Configure o ambiente
- cp .env.example .env
- Edite o arquivo .env com suas configurações de banco de dados:
- DB_CONNECTION=mysql
- DB_HOST=127.0.0.1
- DB_PORT=3306
- DB_DATABASE=projeto1
- DB_USERNAME=root
- DB_PASSWORD=

## Gere a chave da aplicação
- php artisan key:generate

## Execute as migrations
- php artisan migrate

## Inicie o servidor
- php artisan serve

## Acesse a aplicação
- Abra seu navegador e vá para http://localhost:8000

## Contato
- Nome: João Pedro Bittar de Freitas
- Email: jpbittarf@hotmail.com
