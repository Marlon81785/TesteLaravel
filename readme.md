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

$ php artisan migrate && php artisan db:seed


## Server start

$ php artisan serve

- Registre seu usuario e teste a aplicação.