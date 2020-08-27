## Laravel admin

Painel admin para controle de usuários, gerenciamento de perfis de acesso, permissões, relatórios, indicadores e logs.
Além desses módulos, já está implementado um sistema de autenticação, cadastro de novos usuários e recuração de senha.


## Installation

- Clone repository
$ git clone https://github.com/Marlon81785/TesteLaravel.git

- Access directory
$ cd TesteLaravel


- Copy `.env.example` to `.env` com suas configurações

$ cp .env.example .env


- Install PHP dependencies ([composer](http://getcomposer.org))

$ composer install


- Gerar Nova Key

$ php artisan key:generate


- Configure your database access

$ code .env

- Criar sua base de dados, configurar no .env


- Run artisan commands.

$ php artisan migrate --seed && php artisan db:seed


## Server start

- Open new terminal

$ php artisan serve

- Registre seu usuario e teste a aplicação.